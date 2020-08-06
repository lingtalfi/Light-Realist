<?php


namespace Ling\Light_Realist\CustomManager;


use Ling\Light_Realist\Rendering\RealistRowsRendererInterface;

/**
 * The LightRealistCustomManager class.
 */
class LightRealistCustomManager
{


    /**
     * This property holds the rowsRenderer for this instance, or null if not set.
     *
     * @var null|RealistRowsRendererInterface
     */
    protected $rowsRenderer;


    /**
     * Builds the LightRealistCustomManager instance.
     */
    public function __construct()
    {
        $this->rowsRenderer = null;
    }

    /**
     * Returns the rowsRenderer of this instance.
     *
     * @return RealistRowsRendererInterface|null
     */
    public function getRowsRenderer(): ?RealistRowsRendererInterface
    {
        return $this->rowsRenderer;
    }

    /**
     * Sets the rowsRenderer.
     *
     * @param RealistRowsRendererInterface|null $rowsRenderer
     */
    public function setRowsRenderer(?RealistRowsRendererInterface $rowsRenderer)
    {
        $this->rowsRenderer = $rowsRenderer;
    }



}