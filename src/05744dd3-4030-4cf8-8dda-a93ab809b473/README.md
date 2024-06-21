```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface ItemInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface ItemInterface  #Lavender {
  + table(string $table) : self
  + get(string $value, string $key = 'guid') : ?object
  + value(string $value, string $key = 'guid', ...) : mixed
  + set(object $item, string $key = 'guid', ...) : bool
  + delete(string $value, string $key = 'guid') : bool
  + getTable() : string
}

note right of ItemInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of ItemInterface::get
  Get an item

  since: 3.2.2
  return: ?object
end note

note right of ItemInterface::value
  Get the value

  since: 3.2.2
  return: mixed
  
  arguments:
    string $value
    string $key = 'guid'
    string $get = 'id'
end note

note right of ItemInterface::set
  Set an item

  since: 3.2.2
  return: bool
  
  arguments:
    object $item
    string $key = 'guid'
    ?string $action = null
end note

note right of ItemInterface::delete
  Delete an item

  since: 3.2.2
  return: bool
end note

note right of ItemInterface::getTable
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

