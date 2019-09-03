Light Realist
===========
2019-08-09



A list helper for your [light](https://github.com/lingtalfi/Light) projects.

This is a [Light framework plugin](https://github.com/lingtalfi/Light/blob/master/doc/pages/plugin.md).


This is part of the [universe framework](https://github.com/karayabin/universe-snapshot).




Install
==========
Using the [uni](https://github.com/lingtalfi/universe-naive-importer) command.
```bash
uni import Ling/Realist
```

Or just download it and place it where you want otherwise.






Summary
===========
- [Realist api](https://github.com/lingtalfi/Realist/blob/master/doc/api/Ling/Realist.md) (generated with [DocTools](https://github.com/lingtalfi/DocTools))
- [Conception notes](https://github.com/lingtalfi/Light-Realist/tree/master/doc/pages)
- [Services](#services)



What is it?
============

Read the conceptions notes (link in the summary), starting with the realist conception notes.



Services
=========


This plugin provides the following services:

- realist


 



Here is the content of the an example service configuration file:

```yaml
realist:
    instance: Ling\Light_Realist\Service\LightRealistService
    methods:
        setContainer:
            container: @container()
        setBaseDir:
            dir: ${app_dir}

realist_action_handler:
    instance: Ling\Light_Realist\Service\LightRealistService
    methods:
        setContainer:
            container: @container()
        setBaseDir:
            dir: ${app_dir}


# --------------------------------------
# hooks
# --------------------------------------
$easy_route.methods_collection:
    -
        method: registerBundleFile
        args:
            file: config/data/Light_Realist/Light_EasyRoute/realist_routes.byml
```





History Log
=============

- 1.0.1 -- 2019-09-03

    - fix doc link
    
- 1.0.0 -- 2019-09-03

    - initial commit