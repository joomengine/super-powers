```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface InsertInterface (Details)
> namespace: **VastDevelopmentMethod\Joomla\Interfaces**
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

