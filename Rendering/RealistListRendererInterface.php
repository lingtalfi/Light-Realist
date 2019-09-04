<?php


namespace Ling\Light_Realist\Rendering;


/**
 * The RealistListRendererInterface interface.
 * This interface renders a list, including the gravitating widgets.
 *
 */
interface RealistListRendererInterface
{

    /**
     * Prepares the list renderer with the given request declaration.
     * See the @page(duelist page) for more details.
     *
     * @param string $requestId
     * @param array $requestDeclaration
     * @return void
     */
    public function prepareByRequestDeclaration(string $requestId, array $requestDeclaration);
}