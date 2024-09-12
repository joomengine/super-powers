```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class File (Details)
> namespace: **VDM\Joomla\Componentbuilder\File\Service**

```uml
@startuml
class File  #Gold {
  + register(Container $container) : void
  + getType(Container $container) : Type
  + getHandler(Container $container) : Handler
  + getManager(Container $container) : Manager
  + getDisplay(Container $container) : Display
}

note right of File::register
  Registers the service provider with a DI container.

  since: 5.0.3
  return: void
end note

note right of File::getType
  Get The Type Class.

  since: 5.0.3
  return: Type
end note

note right of File::getHandler
  Get The Handler Class.

  since: 5.0.3
  return: Handler
end note

note right of File::getManager
  Get The Manager Class.

  since: 5.0.3
  return: Manager
end note

note right of File::getDisplay
  Get The Display Class.

  since: 5.0.3
  return: Display
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---202ccd9e_dfcf_4cde_a0ce_bde1fd27f088---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

