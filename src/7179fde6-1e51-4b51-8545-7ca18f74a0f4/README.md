```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface UpdateInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Interfaces**
```uml
@startuml
interface UpdateInterface  #Lavender {
  + rows(array $data, string $key, ...) : bool
  + items(array $data, string $key, ...) : bool
  + row(array $data, string $key, ...) : bool
  + item(object $data, string $key, ...) : bool
}

note right of UpdateInterface::rows
  Update rows in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note right of UpdateInterface::items
  Update items in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note right of UpdateInterface::row
  Update row in the database

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
end note

note right of UpdateInterface::item
  Update item in the database

  since: 3.2.0
  return: bool
  
  arguments:
    object $data
    string $key
    string $table
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

