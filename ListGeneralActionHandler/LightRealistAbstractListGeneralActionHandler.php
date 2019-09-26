<?php


namespace Ling\Light_Realist\ListGeneralActionHandler;


/**
 * The LightRealistAbstractListGeneralActionHandler class.
 */
abstract class LightRealistAbstractListGeneralActionHandler implements LightRealistListGeneralActionHandlerInterface
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