```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface LoadInterface (Details)
> namespace: **VDM\Joomla\Interfaces**

```uml
@startuml
interface LoadInterface  #Lavender {
  + rows(array $select, array $tables, ...) : ?array
  + items(array $select, array $tables, ...) : ?array
  + row(array $select, array $tables, ...) : ?array
  + item(array $select, array $tables, ...) : ?object
  + max(string $field, array $tables, ...) : ?int
  + count(array $tables, array $filter) : ?int
  + value(array $select, array $tables, ...) : mixed
  + values(array $select, array $tables, ...) : ?array
}

note right of LoadInterface::rows
  Load data rows as an array of associated arrays

  since: 3.2.0
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note left of LoadInterface::items
  Load data rows as an array of objects

  since: 3.2.0
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note right of LoadInterface::row
  Load data row as an associated array

  since: 3.2.0
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note left of LoadInterface::item
  Load data row as an object

  since: 3.2.0
  return: ?object
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note right of LoadInterface::max
  Get the max value based on a filtered result from a given table

  since: 3.2.0
  return: ?int
  
  arguments:
    string $field
    array $tables
    array $filter
end note

note left of LoadInterface::count
  Count the number of items based on filter result from a given table

  since: 3.2.0
  return: ?int
end note

note right of LoadInterface::value
  Load one value from a row

  since: 3.2.0
  return: mixed
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note left of LoadInterface::values
  Load values from multiple rows

  since: 3.2.2
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---2ad31f74_f579_499d_b98b_c4f54fd615dd---Power
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

