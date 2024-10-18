```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Import (Details)
> namespace: **VDM\Joomla\Componentbuilder\Import\Service**

```uml
@startuml
class Import  #Gold {
  + register(Container $container) : void
  + getRow(Container $container) : Row
  + getItem(Container $container) : Item
  + getMessage(Container $container) : Message
  + getStatus(Container $container) : Status
}

note right of Import::register
  Registers the service provider with a DI container.

  since: 5.0.3
  return: void
end note

note right of Import::getRow
  Get The Row Class.

  since: 5.0.3
  return: Row
end note

note right of Import::getItem
  Get The Item Class.

  since: 5.0.3
  return: Item
end note

note right of Import::getMessage
  Get The Message Class.

  since: 5.0.3
  return: Message
end note

note right of Import::getStatus
  Get The Status Class.

  since: 5.0.3
  return: Status
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---21754a8b_2323_4a77_8459_378a74c1ec97---Power
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

