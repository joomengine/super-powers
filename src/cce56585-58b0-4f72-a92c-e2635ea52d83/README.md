```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Update (Details)
> namespace: **VDM\Joomla\Database**
> extends: **Database**
```uml
@startuml
class Update << (F,LightGreen) >> #RoyalBlue {
  + rows(array $data, string $key, ...) : bool
  + items(array $data, string $key, ...) : bool
  + row(array $data, string $key, ...) : bool
  + item(object $data, string $key, ...) : bool
}

note right of Update::rows
  Update rows in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note right of Update::items
  Update items in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note right of Update::row
  Update row in the database

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
end note

note right of Update::item
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

