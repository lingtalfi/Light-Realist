<?php


namespace Ling\Light_Realist\ListActionHandler;


/**
 * The LightRealistListActionHandlerInterface interface.
 */
interface LightRealistListActionHandlerInterface
{

    /**
     * Returns the array of handled list action ids.
     *
     * @return array
     */
    public function getHandledIds(): array;

    /**
     * Returns the js action code for this list action.
     *
     * @param string $actionId
     * @return string
     */
    public function getJsActionCode(string $actionId): string;


    /**
     * Returns the modal html code for the list action identified by the given id,
     * or null if this action doesn't use a modal.
     *
     *
     * @param string $actionId
     * @return string|null
     */
    public function getModalCode(string $actionId): ?string;

}