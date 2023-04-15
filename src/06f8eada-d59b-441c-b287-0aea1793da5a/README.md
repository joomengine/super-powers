```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Load (Details)
> namespace: **VDM\Joomla\Componentbuilder\Database**
```uml
@startuml
class Load << (F,LightGreen) >> #Green {
  + rows(array $select, array $tables, ...) : ?array
  + items(array $select, array $tables, ...) : ?array
  + row(array $select, array $tables, ...) : ?array
  + item(array $select, array $tables, ...) : ?object
  + value(array $select, array $tables, ...) : mixed
  # many(array $select, array $tables, ...) : bool
  # one(array $select, array $tables, ...) : bool
  # query(array $select, array $tables, ...) : ?object
}

note right of Load::rows
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

note left of Load::items
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

note right of Load::row
  Load data row as an associated array

  since: 3.2.0
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note left of Load::item
  Load data row as an object

  since: 3.2.0
  return: ?object
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note right of Load::value
  Load one value from a row

  since: 3.2.0
  return: mixed
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note left of Load::many
  Load many

  since: 3.2.0
  return: bool
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note right of Load::one
  Load one

  since: 3.2.0
  return: bool
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note left of Load::query
  Get the query object

  since: 3.2.0
  return: ?object
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
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

