<?php


namespace Ling\Light_Realist\Service;


use Ling\Light_Realist\AjaxCustomHandler\AjaxCustomHandlerInterface;

/**
 * The LightRealistCustomServiceInterface interface.
 */
interface LightRealistCustomServiceInterface
{


    /**
     * Returns the custom ajax handler to use for the given request id, or false if no custom ajax handler is defined for this request id.
     *
     * @param string $requestId
     * @return false|AjaxCustomHandlerInterface
     */
    public function getCustomAjaxHandler(string $requestId);
}