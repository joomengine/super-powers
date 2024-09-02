```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Service**

```uml
@startuml
class Data  #Gold {
  + register(Container $container) : void
  + getLoad(Container $container) : Load
  + getInsert(Container $container) : Insert
  + getUpdate(Container $container) : Update
  + getDelete(Container $container) : Delete
  + getItem(Container $container) : Item
  + getItems(Container $container) : Items
  + getSubform(Container $container) : Subform
  + getUsersSubform(Container $container) : UsersSubform
  + getMultiSubform(Container $container) : MultiSubform
}

note right of Data::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Data::getLoad
  Get The Load Class.

  since: 3.2.0
  return: Load
end note

note right of Data::getInsert
  Get The Insert Class.

  since: 3.2.0
  return: Insert
end note

note left of Data::getUpdate
  Get The Update Class.

  since: 3.2.0
  return: Update
end note

note right of Data::getDelete
  Get The Delete Class.

  since: 3.2.0
  return: Delete
end note

note left of Data::getItem
  Get The Item Class.

  since: 3.2.0
  return: Item
end note

note right of Data::getItems
  Get The Items Class.

  since: 3.2.0
  return: Items
end note

note left of Data::getSubform
  Get The Subform Class.

  since: 3.2.0
  return: Subform
end note

note right of Data::getUsersSubform
  Get The Users Subform Class.

  since: 5.0.2
  return: UsersSubform
end note

note left of Data::getMultiSubform
  Get The MultiSubform Class.

  since: 3.2.0
  return: MultiSubform
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---a5daf189_3345_4b13_8716_c51f686f545b---Power
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

