Light_Realist, documentation
=============
2020-08-06 -> 2020-08-07



This is the official **Light_Realist** documentation.

If you're new to **Light_Realist**, you should read this document first.




What is it?
----------
2020-08-06


**Light_Realist** is a plugin for the [Light framework](https://github.com/lingtalfi/Light).

It helps with creating/displaying html lists.

A list here means a container containing any number of items, not necessarily html ul/li tags.



How does it work?
----------
2020-08-06


The basic idea is that we have a **handler** responsible for displaying the list.

We give the **handler** a **list identifier**, and the handler displays the corresponding list.


The **list identifier** basically represents the configuration of the list: how do we display it?
what data do we display? etc...



There are two main workflows when working with **Light_Realist**:

- [direct workflow](#direct-workflow)
- [ajax workflow](#ajax-workflow)








Direct workflow
-----------
2020-08-06


In this workflow, the **handler** will receive the **list identifier**, and display the list accordingly.




Ajax workflow
-----------
2020-08-06


In that context, the **list identifier** is sent over ajax, and the response is injected in the list dynamically.

The handler is hence divided in two parts:

- one to display the list and send the ajax requests as the user manipulates the list (i.e. sorting, pagination, search, ...)
- one to handle the ajax requests and returns the updated content of the list
 
 
 
We provide an [ajax handler](#our-ajax-handler) to help plugin authors implement the ajax workflow. 
 
 
 
Our ajax handler
------------
2020-08-06 -> 2020-08-07
 
 
Our ajax handler will receive some input parameters, including the **list identifier**, and will output an array of key/value pairs 
representing the updated state of the list, and to send back to the ajax caller.


Our default ajax handler works with modes, and it has the following modes so far:


- **db**


With the **db** mode, the idea is that the list data is taken from the database.

Please see the [rest of the documentation](#the-rest-of-the-documentation) for more info.


 
 
Registering to our services
-------------
2020-08-07


There are two ways to register to our services.

- static
- dynamic

The **static** way is the standard way of registering to services in [Light](https://github.com/lingtalfi/Light), and is done from your service configuration file.

With the **dynamic** way, you don't need to write anything in your service configuration file, but rather you need to fulfill those conditions:

- your service implements our [LightRealistCustomServiceInterface interface](https://github.com/lingtalfi/Light_Realist/blob/master/doc/api/Ling/Light_Realist/Service/LightRealistCustomServiceInterface.md)
- your service name is derived from your planet name, by using the [LightNamesAndPathHelper::getServiceName method](https://github.com/lingtalfi/Light/blob/master/doc/api/Ling/Light/Helper/LightNamesAndPathHelper/getServiceName.md) 
- your requestId use the following format: **planetName:listIdentifier**, with:
    - planetName: the name of your planet 
    - listIdentifier: an arbitrary identifier for your list 


We recommend using the **dynamic** way, as it makes the call to our service faster, because we don't need to 
register all the plugins on the first call.






The rest of the documentation
-------------
2020-08-06


At this point in time, the documentation might still be incomplete.

If that's the case, you might found what you want in the documentation I originally wrote for myself:


- [the documentation directory](https://github.com/lingtalfi/Light_Realist/tree/master/doc/pages)












