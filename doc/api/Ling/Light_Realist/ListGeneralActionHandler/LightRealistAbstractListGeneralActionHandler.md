[Back to the Ling/Light_Realist api](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist.md)



The LightRealistAbstractListGeneralActionHandler class
================
2019-08-12 --> 2019-09-26






Introduction
============

The LightRealistAbstractListGeneralActionHandler class.



Class synopsis
==============


abstract class <span class="pl-k">LightRealistAbstractListGeneralActionHandler</span> implements [LightRealistListGeneralActionHandlerInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistListGeneralActionHandlerInterface.md) {

- Properties
    - protected array [$handledIds](#property-handledIds) ;

- Methods
    - public [__construct](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/__construct.md)() : void
    - public [getHandledIds](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/getHandledIds.md)() : array
    - public [getModalCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/getModalCode.md)(string $actionId) : string | null
    - public [setHandledIds](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/setHandledIds.md)(array $handledIds) : void

- Inherited methods
    - abstract public [LightRealistListGeneralActionHandlerInterface::getJsActionCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistListGeneralActionHandlerInterface/getJsActionCode.md)(string $actionId) : string

}




Properties
=============

- <span id="property-handledIds"><b>handledIds</b></span>

    This property holds the handledIds for this instance.
    
    



Methods
==============

- [LightRealistAbstractListGeneralActionHandler::__construct](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/__construct.md) &ndash; Builds the LightRealistAbstractActionHandler instance.
- [LightRealistAbstractListGeneralActionHandler::getHandledIds](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/getHandledIds.md) &ndash; Returns the array of handled list action ids.
- [LightRealistAbstractListGeneralActionHandler::getModalCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/getModalCode.md) &ndash; or null if this action doesn't use a modal.
- [LightRealistAbstractListGeneralActionHandler::setHandledIds](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler/setHandledIds.md) &ndash; Sets the handledIds.
- [LightRealistListGeneralActionHandlerInterface::getJsActionCode](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistListGeneralActionHandlerInterface/getJsActionCode.md) &ndash; Returns the js action code for the list general action identified by the given id.





Location
=============
Ling\Light_Realist\ListGeneralActionHandler\LightRealistAbstractListGeneralActionHandler<br>
See the source code of [Ling\Light_Realist\ListGeneralActionHandler\LightRealistAbstractListGeneralActionHandler](https://github.com/lingtalfi/Light_Realist/blob/master/ListGeneralActionHandler/LightRealistAbstractListGeneralActionHandler.php)



SeeAlso
==============
Previous class: [LightRealistListActionHandlerInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface.md)<br>Next class: [LightRealistListGeneralActionHandlerInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListGeneralActionHandler/LightRealistListGeneralActionHandlerInterface.md)<br>
