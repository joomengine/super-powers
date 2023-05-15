```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Table (Details)
> namespace: **VDM\Joomla\Componentbuilder**
```uml
@startuml
class Table  #Gold {
  + get(string $table, ?string $field = null, ...) : mixed
  + title(string $table) : ?array
  + titleName(string $table) : string
  + tables() : array
  + exist(string $table, ?string $field = null) : bool
  + fields(string $table, bool $default = false) : ?array
  # addDefault(array $fields) : array
}

note right of Table::get
  Get any value from a item/field/column of an area/view/table
Example: $this->get('table_name', 'field_name', 'value_key');
Get an item/field/column of an area/view/table
Example: $this->get('table_name', 'field_name');
Get all items/fields/columns of an area/view/table
Example: $this->get('table_name');
Get all areas/views/tables with all their item/field/column details
Example: $this->get('All');

  since: 3.2.0
  return: mixed
  
  arguments:
    string $table
    ?string $field = null
    ?string $key = null
end note

note right of Table::title
  Get title field from an area/view/table

  since: 3.2.0
  return: ?array
end note

note right of Table::titleName
  Get title field name

  since: 3.2.0
  return: string
end note

note right of Table::tables
  Get all tables

  since: 3.2.0
  return: array
end note

note right of Table::exist
  Check if a table (and field) exist

  since: 3.2.0
  return: bool
end note

note right of Table::fields
  Get all fields of an area/view/table

  since: 3.2.0
  return: ?array
end note

note right of Table::addDefault
  Add the default fields

  since: 3.2.0
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

