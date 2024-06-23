```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface LoadInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface LoadInterface  #Lavender {
  + table(?string $table) : self
  + value(array $keys, string $field) : mixed
  + values(array $keys, string $field) : ?array
  + item(array $keys) : ?object
  + items(array $keys) : ?array
  + getTable() : string
}

note right of LoadInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of LoadInterface::value
  Get a value from a given table
Example: $this->value(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
], 'value_key'
);

  since: 2.0.1
  return: mixed
end note

note right of LoadInterface::values
  Get a value from multiple rows from a given table
Example: $this->values(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
], 'value_key'
);

  since: 3.2.2
  return: ?array
end note

note right of LoadInterface::item
  Get values from a given table
Example: $this->item(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
]
);

  since: 2.0.1
  return: ?object
end note

note right of LoadInterface::items
  Get values from a given table
Example: $this->items(
[
'guid' => [
'operator' => 'IN',
'value' => [''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'', ''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'']
]
]
);
Example: $this->items($keys);

  since: 2.0.1
  return: ?array
end note

note right of LoadInterface::getTable
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

