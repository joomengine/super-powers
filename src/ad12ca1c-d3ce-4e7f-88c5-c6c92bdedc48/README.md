```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface InsertInterface (Details)
> namespace: **VDM\Joomla\Interfaces**

```uml
@startuml
interface InsertInterface  #Lavender {
  + defaults(bool $trigger = true) : void
  + rows(array $data, string $table, ...) : bool
  + items(array $data, string $table, ...) : bool
  + row(array $data, string $table) : bool
  + item(object $data, string $table) : bool
}

note right of InsertInterface::defaults
  Switch to prevent/allow defaults from being added.

  since: 3.2.0
  return: void
end note

note right of InsertInterface::rows
  Insert rows to the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $table
    array $columns = []
end note

note right of InsertInterface::items
  Insert items to the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $table
    array $columns = []
end note

note right of InsertInterface::row
  Insert row to the database

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::item
  Insert item to the database

  since: 3.2.0
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---ad12ca1c_d3ce_4e7f_88c5_c6c92bdedc48---Power
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

