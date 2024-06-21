```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface ModelInterface (Details)
> namespace: **VDM\Joomla\Interfaces**
> extends: ****
```uml
@startuml
interface ModelInterface  #Lavender {
  + table(string $table) : self
  + value(mixed $value, string $field, ...) : mixed
  + item(?object $item, ?string $table = null) : ?object
  + items(?array $items = null, ?string $table = null) : ?array
  + row(?array $item, ?string $table = null) : ?array
  + rows(?array $items = null, ?string $table = null) : ?array
  + last(?string $table = null) : ?int
  + setTable(string $tableName) : void
  + setAllowEmpty(bool $allowEmpty) : void
}

note right of ModelInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note left of ModelInterface::value
  Model the value
Example: $this->value(value, 'value_key', 'table_name');

  since: 3.2.0
  return: mixed
  
  arguments:
    mixed $value
    string $field
    ?string $table = null
end note

note right of ModelInterface::item
  Model the values of an item
Example: $this->item(Object, 'table_name');

  since: 3.2.0
  return: ?object
end note

note left of ModelInterface::items
  Model the values of multiple items
Example: $this->items(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note right of ModelInterface::row
  Model the values of an row
Example: $this->item(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note left of ModelInterface::rows
  Model the values of multiple rows
Example: $this->items(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note right of ModelInterface::last
  Get last modeled ID
Example: $this->last('table_name');

  since: 3.2.0
  return: ?int
end note

note left of ModelInterface::setTable
  Set the current active table

  since: 3.2.2
  return: void
end note

note right of ModelInterface::setAllowEmpty
  Set the switch to control the behaviour of empty values

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

