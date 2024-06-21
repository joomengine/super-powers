```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface DeleteInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface DeleteInterface  #Lavender {
  + table(?string $table) : self
  + items(array $conditions) : bool
  + truncate() : void
  + getTable() : string
}

note right of DeleteInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of DeleteInterface::items
  Delete all items in the database that match these conditions

  since: 3.2.2
  return: bool
end note

note right of DeleteInterface::truncate
  Truncate a table

  since: 3.2.2
  return: void
end note

note right of DeleteInterface::getTable
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

