```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Database (Details)
> namespace: **VDM\Joomla\Service**

```uml
@startuml
class Database  #Gold {
  + register(Container $container) : void
  + getLoad(Container $container) : Load
  + getInsert(Container $container) : Insert
  + getUpdate(Container $container) : Update
  + getDelete(Container $container) : Delete
}

note right of Database::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Database::getLoad
  Get the Core Load Database

  since: 3.2.0
  return: Load
end note

note right of Database::getInsert
  Get the Core Insert Database

  since: 3.2.0
  return: Insert
end note

note right of Database::getUpdate
  Get the Core Update Database

  since: 3.2.0
  return: Update
end note

note right of Database::getDelete
  Get the Core Delete Database

  since: 3.2.2
  return: Delete
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---4815e1c7_a433_443d_a112_d1e03d7df84b---Power
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

