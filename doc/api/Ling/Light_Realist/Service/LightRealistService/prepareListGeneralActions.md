[Back to the Ling/Light_Realist api](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist.md)<br>
[Back to the Ling\Light_Realist\Service\LightRealistService class](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService.md)


LightRealistService::prepareListGeneralActions
================



LightRealistService::prepareListGeneralActions — Prepares the given action group array.




Description
================


public [LightRealistService::prepareListGeneralActions](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService/prepareListGeneralActions.md)(array &$generalActions) : void




Prepares the given action group array.

This method is mainly used to translate an action id string from
the request declaration into actual javascript code, with the help of
the ListGeneralActionHandler objects.

It also removes the actions which the user doesn't have the permission for.

See the [list general actions](https://github.com/lingtalfi/Light_Realist/blob/master/doc/pages/realist-conception-notes.md#list-general-actions) for more details.




Parameters
================


- generalActions

    


Return values
================

Returns void.


Exceptions thrown
================

- [Exception](http://php.net/manual/en/class.exception.php).&nbsp;







Source Code
===========
See the source code for method [LightRealistService::prepareListGeneralActions](https://github.com/lingtalfi/Light_Realist/blob/master/Service/LightRealistService.php#L646-L674)


See Also
================

The [LightRealistService](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService.md) class.

Previous method: [prepareListActionGroups](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService/prepareListActionGroups.md)<br>Next method: [getConfigurationArrayByRequestId](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistService/getConfigurationArrayByRequestId.md)<br>

