```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Load (Details)
> namespace: **VDM\Joomla\Data\Action**
> extends: ****
```uml
@startuml
class Load  #Gold {
  # Model $model
  # Database $load
  # string $table
  + __construct(Model $model, Database $load, ...)
  + table(?string $table) : self
  + value(array $keys, string $field) : mixed
  + values(array $keys, string $field) : ?array
  + item(array $keys) : ?object
  + items(array $keys) : ?array
  + getTable() : string
  - prefix(array $keys) : array
}

note right of Load::__construct
  Constructor

  since: 2.0.1
  
  arguments:
    Model $model
    Database $load
    ?string $table = null
end note

note left of Load::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Load::value
  Get a value from a given table
Example: $this->value(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
], 'value_key'
);

  since: 2.0.1
  return: mixed
end note

note left of Load::values
  Get a value from multiple rows from a given table
Example: $this->values(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
], 'value_key'
);

  since: 3.2.2
  return: ?array
end note

note right of Load::item
  Get values from a given table
Example: $this->item(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
]
);

  since: 2.0.1
  return: ?object
end note

note left of Load::items
  Get values from a given table
Example: $this->items(
[
'guid' => [
'operator' => 'IN',
'value' => [''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'', ''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'']
]
]
);
Example: $this->items($ids);

  since: 2.0.1
  return: ?array
end note

note right of Load::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of Load::prefix
  Add prefix to the keys

  since: 2.0.1
  return: array
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

