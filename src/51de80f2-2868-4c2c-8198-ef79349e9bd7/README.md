```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface RemoteInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface RemoteInterface  #Lavender {
  + table(string $table) : self
  + init() : bool
  + reset(array $items) : bool
  + load(string $guid, array $order = ['remote', 'local']) : bool
  + getTable() : string
}

note right of RemoteInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of RemoteInterface::init
  Init all items not found in database

  since: 3.2.0
  return: bool
end note

note right of RemoteInterface::reset
  Reset the items

  since: 3.2.0
  return: bool
end note

note right of RemoteInterface::load
  Load a item

  since: 3.2.2
  return: bool
end note

note right of RemoteInterface::getTable
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

