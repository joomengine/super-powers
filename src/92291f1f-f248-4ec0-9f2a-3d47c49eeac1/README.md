```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Delete (Details)
> namespace: **VDM\Joomla\Database**
> extends: **Database**
```uml
@startuml
class Delete << (F,LightGreen) >> #RoyalBlue {
  + items(array $conditions, string $table) : bool
  + truncate(string $table) : void
}

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

