<?php


namespace Ling\Light_Realist\AjaxHandler;


use Ling\Light_AjaxHandler\Handler\ContainerAwareLightAjaxHandler;
use Ling\Light_Realist\Exception\LightRealistException;
use Ling\Light_Realist\Service\LightRealistService;
use Ling\Light_Realist\Tool\LightRealistTool;
use Ling\Light_User\LightUserInterface;

/**
 * The LightRealistAjaxHandler class.
 *
 */
class LightRealistAjaxHandler extends ContainerAwareLightAjaxHandler
{



    /**
     * Process the given parameters, and returns the appropriate response.
     * The @page(realist-tag-transfer protocol) is assumed.
     *
     *
     * @implementation
     */
    public function handle(string $actionId, array $params): array
    {
        $response = [];


        switch ($actionId) {
            case "Light_Realist-print":
                if (array_key_exists("request_id", $params)) {
                    if (array_key_exists("rics", $params) && is_array($params['rics'])) {

                        $requestId = $params['request_id'];
                        $rics = $params['rics'];

                        /**
                         * @var $service LightRealistService
                         */
                        $service = $this->getContainer()->get("realist");
                        $conf = $service->getConfigurationArrayByRequestId($requestId);
                        $toolbarItem = LightRealistTool::getToolbarItemByActionId($actionId, $conf);


                        //--------------------------------------------
                        // CSRF TOKEN CHECK?
                        //--------------------------------------------
                        $this->checkCsrfTokenByToolbarItem($toolbarItem, $params);


                        //--------------------------------------------
                        // CHECK PERMISSION
                        //--------------------------------------------
                        $this->checkPermissionByToolbarItem($toolbarItem);

                        //--------------------------------------------
                        // GETTING THE ROWS
                        //--------------------------------------------
                        $requestParams = [
                            "tags" => [
                                [
                                    "tag_id" => "in_ids",
                                    "variables" => [
                                        "ids" => LightRealistTool::ricsToIntegersOnlyInString($rics),
                                    ],
                                ],
                            ],
                            /**
                             * We've already checked for the csrf token, so now we "trust" the user
                             */
                            "csrf_token_pass" => true,
                        ];
                        $res = $service->executeRequestById($requestId, $requestParams);


                        $rowsHtml = $res['rows_html'];
                        ob_start();
                        require_once __DIR__ . "/templates/print.php";
                        $content = ob_get_clean();
                        $response = [
                            "type" => "print",
                            "content" => $content,
                        ];
                    } else {
                        $this->error("rics not provided or not an array.");
                    }
                } else {
                    $this->error("request_id not provided.");
                }

                break;
            case "realist-request":


                //--------------------------------------------
                // REALIST REQUEST
                //--------------------------------------------
                if (array_key_exists("request_id", $params)) {

                    $requestId = $params['request_id'];
                    $tags = $params['tags'] ?? [];
                    $csrfTokenValue = $params['csrf_token'] ?? null;


                    $params = [
                        "tags" => $this->prepareTags($tags),
                        "csrf_token" => $csrfTokenValue,
                    ];


                    /**
                     * @var $service LightRealistService
                     */
                    $service = $this->getContainer()->get("realist");
                    $res = $service->executeRequestById($requestId, $params);

                    $response = [
                        "type" => "success",
                        "rows" => $res['rows_html'],
                        'nb_total_rows' => $res['nb_total_rows'],
                        'current_page_first' => $res['current_page_first'],
                        'current_page_last' => $res['current_page_last'],
                        'nb_pages' => $res['nb_pages'],
                        'nb_items_per_page' => $res['nb_items_per_page'],
                        'page' => $res['page'],
                        'sql_query' => $res['sql_query'],
                        'markers' => $res['markers'],
                    ];


                } elseif (array_key_exists('action_id', $params)) {
                    az(__FILE__, "reorganize this?");
                    $actionId = $params['action_id'];
                    $handler = $this->getContainer()->get("realist")->getActionHandler($actionId);
                    $_params = $params;
                    unset($_params['action_id']);
                    $response = $handler->execute($actionId, $_params);
                } else {
                    $this->error("Request type not implemented yet.");
                }


                break;
            default:
                throw new LightRealistException("Unknown action $actionId.");
                break;
        }
        return $response;
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Throws an error message.
     * @param string $msg
     * @throws \Exception
     *
     */
    protected function error(string $msg)
    {
        throw new LightRealistException($msg);
    }


    /**
     * Returns the tags in the format expected by the LightRealistService->executeRequestById method.
     *
     * @param array $tags
     * @return array
     */
    protected function prepareTags(array $tags): array
    {
        $ret = [];
        foreach ($tags as $tagItem) {
            $tagVariables = [];
            foreach ($tagItem['variables'] as $variable) {
                $tagVariables[$variable['name']] = $variable['value'];
            }
            $tagItem['variables'] = $tagVariables;
            $ret[] = $tagItem;
        }
        return $ret;
    }


    /**
     * Performs the csrf validation if necessary (i.e. if defined in the toolbar item configuration),
     * and throws an exception in case of failure.
     * The params array originates from the user (i.e. not trusted).
     *
     * @param array $toolbarItem
     * @param array $params
     * @throws \Exception
     */
    protected function checkCsrfTokenByToolbarItem(array $toolbarItem, array $params)
    {

        if (array_key_exists("csrf_token", $toolbarItem)) {
            if (array_key_exists("csrf_token", $params)) {
                $tokenValue = $params['csrf_token'];
                LightRealistTool::checkAjaxToken($toolbarItem['csrf_token'], $tokenValue, $this->getContainer());
            } else {
                $this->error("The csrf_token entry was not provided with the post params.");
            }
        }

    }

    /**
     * Checks whether there is a permission restriction for the given toolbarItem,
     * and if so check whether the user is granted that permission.
     * If so, the method does nothing, if not granted, this method throws an exception.
     *
     *
     * @param array $toolbarItem
     * @throws \Exception
     */
    protected function checkPermissionByToolbarItem(array $toolbarItem)
    {
        if (array_key_exists("right", $toolbarItem)) {
            $right = $toolbarItem['right'];

            /**
             * @var $user LightUserInterface
             */
            $user = $this->getContainer()->get("user_manager")->getUser();
            if (false === $user->hasRight($right)) {
                $this->error("Permission denied, missing the permission: $right.");
            }

        }
    }
}
