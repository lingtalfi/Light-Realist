[Back to the Ling/Light_Realist api](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist.md)<br>
[Back to the Ling\Light_Realist\Service\LightRealistService class](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService.md)


LightRealistService::prepareListActionGroups
================



LightRealistService::prepareListActionGroups — Prepares the given list action group array.




Description
================


public [LightRealistService::prepareListActionGroups](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService/prepareListActionGroups.md)(array &$groups) : void




Prepares the given list action group array.

This method is mainly used to translate an action id string from
the request declaration into actual javascript code, with the help of
the ListActionHandler objects.

It also removes the actions which the user doesn't have the permission for.

The given groups array structure is an array of [toolbar items](https://github.com/lingtalfi/Light_Realist/blob/master/doc/pages/list-action-handler-conception-notes.md#the-toolbar-item).




Parameters
================


- groups

    


Return values
================

Returns void.


Exceptions thrown
================

- [Exception](http://php.net/manual/en/class.exception.php).&nbsp;







Source Code
===========
See the source code for method [LightRealistService::prepareListActionGroups](https://github.com/lingtalfi/Light_Realist/blob/master/Service/LightRealistService.php#L571-L629)


See Also
================

The [LightRealistService](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService.md) class.

Previous method: [getListRendererByRequestId](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService/getListRendererByRequestId.md)<br>Next method: [prepareListGeneralActions](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService/prepareListGeneralActions.md)<br>

