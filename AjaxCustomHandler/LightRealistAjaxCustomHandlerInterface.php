<?php


namespace Ling\Light_Realist\AjaxCustomHandler;


/**
 * The LightRealistAjaxCustomHandlerInterface interface.
 */
interface LightRealistAjaxCustomHandlerInterface
{

    /**
     * Returns an array of key/value pairs representing the updated state of the list to display.
     *
     * The params depend on the concrete class.
     * So does the returned array.
     *
     *
     * @param string $requestId
     * @param array $params
     * @return array
     */
    public function executeRequestById(string $requestId, array $params = []): array;
}