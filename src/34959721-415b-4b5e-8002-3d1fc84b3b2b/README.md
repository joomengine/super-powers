```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface SubformInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface SubformInterface  #Lavender {
  + table(string $table) : self
  + get(string $value, string $key, ...) : ?array
  + set(array $items, string $key) : bool
  + getTable() : string
}

note right of SubformInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of SubformInterface::get
  Get a subform items

  since: 3.2.2
  return: ?array
  
  arguments:
    string $value
    string $key
    string $field
    array $set
end note

note right of SubformInterface::set
  Set a subform items

  since: 3.2.2
  return: bool
end note

note right of SubformInterface::getTable
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

