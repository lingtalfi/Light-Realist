<?php


namespace Ling\Light_Realist\GenericItemActionHandler;


use Ling\Light\ServiceContainer\LightServiceContainerInterface;
use Ling\Light\Tool\LightTool;
use Ling\Light_Realist\Exception\LightRealistException;
use Ling\Light_Realist\Service\LightRealistService;


/**
 * Trait GenericActionItemHandlerTrait
 */
trait GenericActionItemHandlerTrait
{
    /**
     * This property holds the container for this instance.
     * @var LightServiceContainerInterface
     */
    protected $container;

    /**
     * This property holds the csrfTokenPrefix for this instance.
     * The csrf token prefix to use when csrf tokens needs to be created.
     * @var string
     */
    protected $csrfTokenPrefix;

    /**
     * This property holds the pluginName for this instance.
     * @var string
     */
    protected $pluginName;


    /**
     * Builds the LightRealistBaseListActionHandler instance.
     */
    public function __construct()
    {
        $this->container = null;
        $this->csrfTokenPrefix = null;
        $this->pluginName = null;
    }

    /**
     * Sets the container.
     *
     * @param LightServiceContainerInterface $container
     */
    public function setContainer(LightServiceContainerInterface $container)
    {
        $this->container = $container;
    }


    //--------------------------------------------
    //
    //--------------------------------------------
    /**
     * Decorates the given @page(generic action item) using mostly asset files found around
     * the calling class source file.
     *
     *
     * @param string $actionName
     * @param array $item
     * @param string $requestId
     * @param string $dir
     * @param array $options
     * @throws \Exception
     */
    protected function decorateGenericActionItemByAssets(string $actionName, array &$item, string $requestId, string $dir, array $options = [])
    {


        $pluginName = $this->getPluginName();
        $generateAjaxParams = $options['generate_ajax_params'] ?? true;

        //--------------------------------------------
        // AJAX PARAMS
        //--------------------------------------------
        if (true === $generateAjaxParams) {
            $params = $item['params'] ?? [];
            $params = array_merge($params, [
                "url" => $this->container->get("reverse_router")->getUrl('lah_route-ajax_handler'),
                "ajax_handler_id" => $pluginName,
                "ajax_action_id" => $actionName,
                "request_id" => $requestId,
            ]);
            $item['params'] = $params;
        }



        //--------------------------------------------
        // JS
        //--------------------------------------------
        $jsFile = $dir . "/jsActionFiles/$actionName.js";
        if (file_exists($jsFile)) {
            $item['js_code'] = file_get_contents($jsFile);
        }


        //--------------------------------------------
        // MODAL
        //--------------------------------------------
        $modalFile = $dir . "/htmlModalFiles/$actionName.html.php";
        if (file_exists($modalFile)) {
            $item['modal'] = file_get_contents($modalFile);
        }
    }


    /**
     * Returns the table name associated with the given requestId.
     *
     * @param string $requestId
     * @return string
     * @throws \Exception
     */
    protected function getTableNameByRequestId(string $requestId): string
    {
        /**
         * @var $realist LightRealistService
         */
        $realist = $this->container->get("realist");
        $conf = $realist->getConfigurationArrayByRequestId($requestId);
        return $conf['table'];
    }

    /**
     * Returns whether the current user is granted the given micro-permission.
     *
     * @param string $microPermission
     * @return bool
     * @throws \Exception
     */
    protected function hasMicroPermission(string $microPermission): bool
    {
        return $this->container->get("micro_permission")->hasMicroPermission($microPermission);
    }

    /**
     * Checks whether the current user has the given micro-permission, and if not throws an exception.
     *
     * @param string $microPermission
     * @throws \Exception
     */
    protected function checkMicroPermission(string $microPermission)
    {
        if (false === $this->container->get("micro_permission")->hasMicroPermission($microPermission)) {
            throw new LightRealistException("Permission denied! You don't have the micro permission $microPermission.");
        }
    }


    /**
     * Returns the plugin name for this instance.
     * @return string
     */
    protected function getPluginName(): string
    {
        if (null === $this->pluginName) {
            $this->pluginName = LightTool::getPluginName($this);
        }
        return $this->pluginName;
    }


}