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
  + get(string $linkValue, string $linkKey, ...) : ?array
  + set(mixed $items, string $indexKey, ...) : bool
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
    string $linkValue
    string $linkKey
    string $field
    array $get
end note

note right of SubformInterface::set
  Set a subform items

  since: 3.2.2
  return: bool
  
  arguments:
    mixed $items
    string $indexKey
    string $linkKey
    string $linkValue
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

