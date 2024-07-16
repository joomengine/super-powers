```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Insert (Details)
> namespace: **VDM\Joomla\Database**
> extends: **Database**

```uml
@startuml
class Insert << (F,LightGreen) >> #RoyalBlue {
  # bool $defaults
  + defaults(bool $trigger = true) : void
  + rows(array $data, string $table, ...) : bool
  + items(array $data, string $table, ...) : bool
  + row(array $data, string $table) : bool
  + item(object $data, string $table) : bool
  # getArrayColumns(array $data) : array
  # getObjectsColumns(array $data) : array
  # insert(array $data, string $table, ...) : bool
}

note right of Insert::defaults
  Switch to prevent/allow defaults from being added.

  since: 3.2.0
  return: void
end note

note left of Insert::rows
  Insert rows to the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $table
    array $columns = []
end note

note right of Insert::items
  Insert items to the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $table
    array $columns = []
end note

note left of Insert::row
  Insert row to the database

  since: 3.2.0
  return: bool
end note

note right of Insert::item
  Insert item to the database

  since: 3.2.0
  return: bool
end note

note left of Insert::getArrayColumns
  Get columns from data array

  since: 3.2.0
  return: array
end note

note right of Insert::getObjectsColumns
  Get columns from data objects

  since: 3.2.0
  return: array
end note

note left of Insert::insert
  Insert data into the database

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $table
    array $columns
    bool $isArray
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---524eb8f6_38d4_47dc_92ad_98b94e099ac0---Power
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

