```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Model (Details)
> namespace: **VDM\Joomla\Abstraction**
```uml
@startuml
abstract Model  #Orange {
  # array $last
  # Table $table
  + __construct(Table $table)
  + {abstract} value(mixed $value, string $field, ...) : mixed
  + item(?object $item, ?string $table = null) : ?object
  + items(?array $items = null, ?string $table = null) : ?array
  + row(?array $item, ?string $table = null) : ?array
  + rows(?array $items = null, ?string $table = null) : ?array
  + last(?string $table = null) : ?int
  # getTableFields(string $table, bool $default = false) : ?array
  # {abstract} validateBefore(mixed $value, ?string $field = null, ...) : bool
  # {abstract} validateAfter(mixed $value, ?string $field = null, ...) : bool
  # {abstract} getTable() : string
}

note right of Model::__construct
  Constructor

  since: 3.2.0
end note

note left of Model::value
  Model the value
Example: $this->value(value, 'value_key', 'table_name');

  since: 3.2.0
  return: mixed
  
  arguments:
    mixed $value
    string $field
    ?string $table = null
end note

note right of Model::item
  Model the values of an item
Example: $this->item(Object, 'table_name');

  since: 3.2.0
  return: ?object
end note

note left of Model::items
  Model the values of multiple items
Example: $this->items(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note right of Model::row
  Model the values of an row
Example: $this->item(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note left of Model::rows
  Model the values of multiple rows
Example: $this->items(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note right of Model::last
  Get last modeled ID
Example: $this->last('table_name');

  since: 3.2.0
  return: ?int
end note

note left of Model::getTableFields
  Get the current active table's fields (including defaults)

  since: 3.2.0
  return: ?array
end note

note right of Model::validateBefore
  Validate before the value is modelled (basic, override in child class)

  since: 3.2.0
  return: bool
  
  arguments:
    mixed $value
    ?string $field = null
    ?string $table = null
end note

note left of Model::validateAfter
  Validate after the value is modelled (basic, override in child class)

  since: 3.2.0
  return: bool
  
  arguments:
    mixed $value
    ?string $field = null
    ?string $table = null
end note

note right of Model::getTable
  Get the current active table

  since: 3.2.0
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

