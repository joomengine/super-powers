```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface ItemsInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface ItemsInterface  #Lavender {
  + table(string $table) : self
  + get(array $values, string $key = 'guid') : ?array
  + values(array $values, string $key = 'guid', ...) : ?array
  + set(array $items, string $key = 'guid') : bool
  + delete(string $values, string $key = 'guid') : bool
  + getTable() : string
}

note right of ItemsInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of ItemsInterface::get
  Get list of items

  since: 3.2.2
  return: ?array
end note

note right of ItemsInterface::values
  Get the values

  since: 3.2.2
  return: ?array
  
  arguments:
    array $values
    string $key = 'guid'
    string $get = 'id'
end note

note right of ItemsInterface::set
  Set items

  since: 3.2.2
  return: bool
end note

note right of ItemsInterface::delete
  Delete items

  since: 3.2.2
  return: bool
end note

note right of ItemsInterface::getTable
  Get the current active table

  since: 3.2.2
  return: string
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

