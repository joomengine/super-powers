```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Repository (Details)
> namespace: **VDM\Joomla\Data**
> extends: ****
```uml
@startuml
class Repository  #Gold {
  # Grep $grep
  # Items $items
  # Git $git
  + array $repos
  # string $table
  # array $map
  + __construct(array $repos, Grep $grep, ...)
  + table(string $table) : self
  + set(array $guids) : bool
  + getTable() : string
  + getLocalItems(array $guids) : ?array
  # fetchLocalItems(array $guids) : ?array
  # mapItems(array $items) : array
  # mapItem(object $item) : object
  # getRepoItems(array $guids) : ?array
  # canWrite() : bool
  # areObjectsEqual(object $obj1, object $obj2) : bool
  # updateItem(object $item, object $existing) : void
  # createItem(object $item) : void
}

note right of Repository::__construct
  Constructor.

  since: 3.2.2
  
  arguments:
    array $repos
    Grep $grep
    Items $items
    Git $git
    ?string $table = null
end note

note left of Repository::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Repository::set
  Set items

  since: 3.2.0
  return: bool
end note

note left of Repository::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note right of Repository::getLocalItems
  Get items

  since: 3.2.2
  return: ?array
end note

note left of Repository::fetchLocalItems
  Fetch items from the database

  since: 3.2.2
  return: ?array
end note

note right of Repository::mapItems
  Map items to their properties

  since: 3.2.2
  return: array
end note

note left of Repository::mapItem
  Map a single item to its properties

  since: 3.2.2
  return: object
end note

note right of Repository::getRepoItems
  get existing items

  since: 3.2.2
  return: ?array
end note

note left of Repository::canWrite
  check that we have an active repo towards which we can write data

  since: 3.2.2
  return: bool
end note

note right of Repository::areObjectsEqual
  Checks if two objects are equal by comparing their JSON representations.
This method converts both input objects to JSON strings and compares these strings.
If the JSON strings are identical, the objects are considered equal.

  since: 3.2.2
  return: bool
end note

note left of Repository::updateItem
  update an existing item (if changed)

  since: 3.2.2
  return: void
end note

note right of Repository::createItem
  create a new item

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

