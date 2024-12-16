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
  # string $tableName
  # bool $allowEmpty
  + __construct(Table $table, ?string $tableName = null, ...)
  + table(string $table) : self
  + {abstract} value(mixed $value, string $field, ...) : mixed
  + values(?array $items, string $field, ...) : ?array
  + item(?object $item, ?string $table = null) : ?object
  + items(?array $items = null, ?string $table = null) : ?array
  + row(?array $item, ?string $table = null) : ?array
  + rows(?array $items = null, ?string $table = null) : ?array
  + last(?string $table = null) : ?int
  + setTable(string $tableName) : void
  + setAllowEmpty(bool $allowEmpty) : void
  # getTable() : string
  # getAllowEmpty() : bool
  # getTableFields(string $table, bool $default = false) : ?array
  # {abstract} validateBefore(mixed $value, ?string $field = null, ...) : bool
  # {abstract} validateAfter(mixed $value, ?string $field = null, ...) : bool
}

note right of Model::__construct
  Constructor

  since: 3.2.0
  
  arguments:
    Table $table
    ?string $tableName = null
    bool $allowEmpty = null
end note

note left of Model::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Model::value
  Model the value
Example: $this->value(value, 'value_key', 'table_name');

  since: 3.2.0
  return: mixed
  
  arguments:
    mixed $value
    string $field
    ?string $table = null
end note

note left of Model::values
  Model a value of multiple items
Example: $this->values(Array, 'value_key', 'table_name');

  since: 3.2.2
  return: ?array
  
  arguments:
    ?array $items
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

note left of Model::setTable
  Set the current active table

  since: 3.2.2
  return: void
end note

note right of Model::setAllowEmpty
  Set the switch to control the behaviour of empty values

  since: 3.2.2
  return: void
end note

note left of Model::getTable
  Get the current active table

  since: 3.2.0
  return: string
end note

note right of Model::getAllowEmpty
  Get the switch to control the behaviour of empty values

  since: 3.2.2
  return: bool
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
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---584747d1_3a86_453d_b7a3_a2219de8d777---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

