<?php


namespace Ling\Light_Realist\ListActionHandler;


/**
 * The LightRealistAbstractListActionHandler class.
 */
abstract class LightRealistAbstractListActionHandler implements LightRealistListActionHandlerInterface
{
    /**
     * @implementation
     */
    public function getModalCode(string $actionId): ?string
    {
        return null;
    }
}