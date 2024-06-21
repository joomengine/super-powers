```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface UpdateInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface UpdateInterface  #Lavender {
  + table(?string $table) : self
  + value(mixed $value, string $field, ...) : bool
  + row(array $item, string $key = 'guid') : bool
  + rows(?array $items, string $key = 'guid') : bool
  + item(object $item, string $key = 'guid') : bool
  + items(?array $items, string $key = 'guid') : bool
  + getTable() : string
}

note right of UpdateInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of UpdateInterface::value
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

note right of UpdateInterface::row
  Update single row with multiple values to a given table
Example: $this->item(Array);

  since: 3.2.0
  return: bool
end note

note right of UpdateInterface::rows
  Update multiple rows to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note

note right of UpdateInterface::item
  Update single item with multiple values to a given table
Example: $this->item(Object);

  since: 3.2.0
  return: bool
end note

note right of UpdateInterface::items
  Update multiple items to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note

note right of UpdateInterface::getTable
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

