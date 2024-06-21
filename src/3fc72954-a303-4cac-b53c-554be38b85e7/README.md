```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Delete (Details)
> namespace: **VDM\Joomla\Data\Action**
> extends: ****
```uml
@startuml
class Delete  #Gold {
  # Database $database
  # string $table
  + __construct(Database $database, ?string $table = null)
  + table(?string $table) : self
  + items(array $conditions) : bool
  + truncate() : void
  + getTable() : string
}

note right of Delete::__construct
  Constructor.

  since: 3.2.2
end note

note right of Delete::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Delete::items
  Delete all items in the database that match these conditions

  since: 3.2.2
  return: bool
end note

note right of Delete::truncate
  Truncate a table

  since: 3.2.2
  return: void
end note

note right of Delete::getTable
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

