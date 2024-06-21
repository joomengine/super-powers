```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Update (Details)
> namespace: **VDM\Joomla\Data\Action**
> extends: ****
```uml
@startuml
class Update  #Gold {
  # Model $model
  # Database $database
  # string $table
  + __construct(Model $model, Database $database, ...)
  + table(?string $table) : self
  + value(mixed $value, string $field, ...) : bool
  + row(array $item, string $key = 'guid') : bool
  + rows(?array $items, string $key = 'guid') : bool
  + item(object $item, string $key = 'guid') : bool
  + items(?array $items, string $key = 'guid') : bool
  + getTable() : string
}

note right of Update::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    Model $model
    Database $database
    ?string $table = null
end note

note left of Update::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Update::value
  Update a value to a given table
Example: $this->value(Value, 'value_key', 'GUID');

  since: 3.2.0
  return: bool
  
  arguments:
    mixed $value
    string $field
    string $keyValue
    string $key = 'guid'
end note

note left of Update::row
  Update single row with multiple values to a given table
Example: $this->item(Array);

  since: 3.2.0
  return: bool
end note

note right of Update::rows
  Update multiple rows to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note

note left of Update::item
  Update single item with multiple values to a given table
Example: $this->item(Object);

  since: 3.2.0
  return: bool
end note

note right of Update::items
  Update multiple items to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note

note left of Update::getTable
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

