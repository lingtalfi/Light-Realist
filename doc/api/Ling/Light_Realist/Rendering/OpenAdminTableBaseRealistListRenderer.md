[Back to the Ling/Light_Realist api](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist.md)



The OpenAdminTableBaseRealistListRenderer class
================
2019-08-12 --> 2019-09-04






Introduction
============

The OpenAdminTableBaseRealistListRenderer class.



Class synopsis
==============


class <span class="pl-k">OpenAdminTableBaseRealistListRenderer</span> implements [RealistListRendererInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/RealistListRendererInterface.md) {

- Properties
    - protected array [$dataTypes](#property-dataTypes) ;
    - protected array [$labels](#property-labels) ;
    - protected Ling\Light_Realist\Rendering\bool[] [$useWidgets](#property-useWidgets) ;
    - protected string [$requestId](#property-requestId) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/__construct.md)() : void
    - public [prepareByRequestDeclaration](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/prepareByRequestDeclaration.md)(string $requestId, array $requestDeclaration) : void
    - public [setDataTypes](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setDataTypes.md)(array $array) : void
    - public [setLabels](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setLabels.md)(array $labels) : void
    - public [setWidgetStatuses](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setWidgetStatuses.md)(array $widgetStatuses) : void
    - public [setRequestId](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setRequestId.md)(string $requestId) : void
    - protected [getDataType](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/getDataType.md)(string $columnName) : string
    - protected [isWidgetEnabled](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/isWidgetEnabled.md)(string $identifier) : bool

}




Properties
=============

- <span id="property-dataTypes"><b>dataTypes</b></span>

    This property holds the data types for this instance.
    It's an array of columnName => dataTypeIdentifier.
    More info in the [open admin table protocol](https://github.com/lingtalfi/Light_Realist/blob/master/doc/pages/open-admin-table-protocol.md).
    
    

- <span id="property-labels"><b>labels</b></span>

    This property holds the labels for this instance.
    It's an array of columnName => label.
    The label is displayed in the header columns.
    
    

- <span id="property-useWidgets"><b>useWidgets</b></span>

    This property holds an array of booleans representing whether or not to use the renderer widgets.
    It's an array of widget identifier => bool.
    
    Note: a widget shall be registered before it can be used (unless it's hardcoded inside this class, like
    the checkbox widget for instance).
    
    If a widget identifier is not found, this means false (i.e. we don't use the widget).
    
    

- <span id="property-requestId"><b>requestId</b></span>

    This property holds the requestId for this instance.
    
    



Methods
==============

- [OpenAdminTableBaseRealistListRenderer::__construct](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/__construct.md) &ndash; Builds the OpenAdminTableBaseRealistListRenderer instance.
- [OpenAdminTableBaseRealistListRenderer::prepareByRequestDeclaration](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/prepareByRequestDeclaration.md) &ndash; Prepares the list renderer with the given request declaration.
- [OpenAdminTableBaseRealistListRenderer::setDataTypes](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setDataTypes.md) &ndash; Sets the data types.
- [OpenAdminTableBaseRealistListRenderer::setLabels](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setLabels.md) &ndash; Sets the labels.
- [OpenAdminTableBaseRealistListRenderer::setWidgetStatuses](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setWidgetStatuses.md) &ndash; Sets the widget statuses.
- [OpenAdminTableBaseRealistListRenderer::setRequestId](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/setRequestId.md) &ndash; Sets the requestId.
- [OpenAdminTableBaseRealistListRenderer::getDataType](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/getDataType.md) &ndash; Returns the data type of the column.
- [OpenAdminTableBaseRealistListRenderer::isWidgetEnabled](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/OpenAdminTableBaseRealistListRenderer/isWidgetEnabled.md) &ndash; Returns whether the widget identified by $identifier is enabled.





Location
=============
Ling\Light_Realist\Rendering\OpenAdminTableBaseRealistListRenderer<br>
See the source code of [Ling\Light_Realist\Rendering\OpenAdminTableBaseRealistListRenderer](https://github.com/lingtalfi/Light_Realist/blob/master/Rendering/OpenAdminTableBaseRealistListRenderer.php)



SeeAlso
==============
Previous class: [BaseRealistRowsRenderer](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/BaseRealistRowsRenderer.md)<br>Next class: [RealistListRendererInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/RealistListRendererInterface.md)<br>
