```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Remote (Details)
> namespace: **VDM\Joomla\Data**
> extends: ****
```uml
@startuml
class Remote  #Gold {
  # Grep $grep
  # Item $item
  # string $table
  + __construct(Grep $grep, Item $item, ...)
  + table(string $table) : self
  + init() : bool
  + reset(array $items) : bool
  + load(string $guid, array $order = ['remote', 'local'], ...) : bool
  + getTable() : string
}

note right of Remote::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Grep $grep
    Item $item
    ?string $table = null
end note

note right of Remote::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Remote::init
  Init all items not found in database

  since: 3.2.0
  return: bool
end note

note right of Remote::reset
  Reset the items

  since: 3.2.0
  return: bool
end note

note right of Remote::load
  Load a item

  since: 3.2.0
  return: bool
  
  arguments:
    string $guid
    array $order = ['remote', 'local']
    ?string $action = null
end note

note right of Remote::getTable
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

