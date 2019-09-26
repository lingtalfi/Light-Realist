[Back to the Ling/Light_Realist api](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist.md)



The LightRealistListActionHandlerInterface class
================
2019-08-12 --> 2019-09-26






Introduction
============

The LightRealistListActionHandlerInterface interface.



Class synopsis
==============


abstract class <span class="pl-k">LightRealistListActionHandlerInterface</span>  {

- Methods
    - abstract public [getHandledIds](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/getHandledIds.md)() : array
    - abstract public [getJsActionCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/getJsActionCode.md)(string $actionId) : string
    - abstract public [getModalCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/getModalCode.md)(string $actionId) : string | null

}






Methods
==============

- [LightRealistListActionHandlerInterface::getHandledIds](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/getHandledIds.md) &ndash; Returns the array of handled list action ids.
- [LightRealistListActionHandlerInterface::getJsActionCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/getJsActionCode.md) &ndash; Returns the js action code for this list action.
- [LightRealistListActionHandlerInterface::getModalCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/getModalCode.md) &ndash; or null if this action doesn't use a modal.





Location
=============
Ling\Light_Realist\ListActionHandler\LightRealistListActionHandlerInterface<br>
See the source code of [Ling\Light_Realist\ListActionHandler\LightRealistListActionHandlerInterface](https://github.com/lingtalfi/Light_Realist/blob/master/ListActionHandler/LightRealistListActionHandlerInterface.php)



SeeAlso
==============
Previous class: [LightRealistBaseListActionHandler](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistBaseListActionHandler.md)<br>Next class: [LightRealistAbstractListGeneralActionHandler](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler.md)<br>
