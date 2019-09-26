<?php


namespace Ling\Light_Realist\ListActionHandler;


/**
 * The LightRealistAbstractListActionHandler class.
 */
abstract class LightRealistAbstractListActionHandler implements LightRealistListActionHandlerInterface
{
    /**
     * This property holds the handledIds for this instance.
     * @var array
     */
    protected $handledIds;


    /**
     * Builds the LightRealistAbstractActionHandler instance.
     */
    public function __construct()
    {
        $this->handledIds = [];
    }


    /**
     * @implementation
     */
    public function getHandledIds(): array
    {
        return $this->handledIds;
    }


    /**
     * @implementation
     */
    public function getModalCode(string $actionId): ?string
    {
        return null;
    }


    //--------------------------------------------
    //
    //--------------------------------------------

    /**
     * Sets the handledIds.
     *
     * @param array $handledIds
     */
    public function setHandledIds(array $handledIds)
    {
        $this->handledIds = $handledIds;
    }


}