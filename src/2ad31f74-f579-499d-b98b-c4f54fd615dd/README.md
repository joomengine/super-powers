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

note right of LoadInterface::items
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

note right of LoadInterface::item
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

note right of LoadInterface::count
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
 
@enduml
```

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

