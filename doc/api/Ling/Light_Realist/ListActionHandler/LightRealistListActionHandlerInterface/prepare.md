[Back to the Ling/Light_Realist api](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist.md)<br>
[Back to the Ling\Light_Realist\ListActionHandler\LightRealistListActionHandlerInterface class](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface.md)


LightRealistListActionHandlerInterface::prepare
================



LightRealistListActionHandlerInterface::prepare — Decorates the given [generic action item](https://github.com/lingtalfi/Light_Realist/blob/master/doc/pages/generic-action-item.md) identified by the given action name.




Description
================


abstract public [LightRealistListActionHandlerInterface::prepare](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/prepare.md)(string $actionName, array &$genericActionItem, string $requestId) : null | false




Decorates the given [generic action item](https://github.com/lingtalfi/Light_Realist/blob/master/doc/pages/generic-action-item.md) identified by the given action name.

If the handler discards the item (typically because the user doesn't have the right
to execute it), then this method returns false.




Parameters
================


- actionName

    

- genericActionItem

    

- requestId

    


Return values
================

Returns null | false.








Source Code
===========
See the source code for method [LightRealistListActionHandlerInterface::prepare](https://github.com/lingtalfi/Light_Realist/blob/master/ListActionHandler/LightRealistListActionHandlerInterface.php#L26-L26)


See Also
================

The [LightRealistListActionHandlerInterface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface.md) class.

Next method: [execute](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/ListActionHandler/LightRealistListActionHandlerInterface/execute.md)<br>

