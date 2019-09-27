<?php


namespace Ling\Light_Realist\ListGeneralActionHandler;


/**
 * The LightRealistListGeneralActionHandlerInterface interface.
 */
interface LightRealistListGeneralActionHandlerInterface
{



    /**
     * Returns the js action code for the list general action identified by the given id.
     *
     * @param string $actionId
     * @return string
     */
    public function getJsActionCode(string $actionId): string;

    /**
     * Returns the modal html code for the list general action identified by the given id,
     * or null if this action doesn't use a modal.
     *
     *
     * @param string $actionId
     * @return string|null
     */
    public function getModalCode(string $actionId): ?string;


}