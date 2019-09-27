<?php


namespace Ling\Light_Realist\ListGeneralActionHandler;


/**
 * The LightRealistAbstractListGeneralActionHandler class.
 */
abstract class LightRealistAbstractListGeneralActionHandler implements LightRealistListGeneralActionHandlerInterface
{
    /**
     * @implementation
     */
    public function getModalCode(string $actionId): ?string
    {
        return null;
    }
}