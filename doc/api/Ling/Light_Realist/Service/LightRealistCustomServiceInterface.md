[Back to the Ling/Light_Realist api](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist.md)



The LightRealistCustomServiceInterface class
================
2019-08-12 --> 2020-08-06






Introduction
============

The LightRealistCustomServiceInterface interface.



Class synopsis
==============


abstract class <span class="pl-k">LightRealistCustomServiceInterface</span>  {

- Methods
    - abstract public [getCustomAjaxHandler](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistCustomServiceInterface/getCustomAjaxHandler.md)(string $requestId) : false | [AjaxCustomHandlerInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/AjaxCustomHandler/AjaxCustomHandlerInterface.md)

}






Methods
==============

- [LightRealistCustomServiceInterface::getCustomAjaxHandler](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistCustomServiceInterface/getCustomAjaxHandler.md) &ndash; Returns the custom ajax handler to use for the given request id, or false if no custom ajax handler is defined for this request id.





Location
=============
Ling\Light_Realist\Service\LightRealistCustomServiceInterface<br>
See the source code of [Ling\Light_Realist\Service\LightRealistCustomServiceInterface](https://github.com/lingtalfi/Light_Realist/blob/master/Service/LightRealistCustomServiceInterface.php)



SeeAlso
==============
Previous class: [RequestIdAwareRendererInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Rendering/RequestIdAwareRendererInterface.md)<br>Next class: [LightRealistService](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService.md)<br>
