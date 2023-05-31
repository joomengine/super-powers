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
```uml
@startuml
class Insert << (F,LightGreen) >> #Green {
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

