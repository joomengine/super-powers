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

```uml
@startuml
interface ModelInterface  #Lavender {
  + table(string $table) : self
  + value(mixed $value, string $field, ...) : mixed
  + values(?array $items, string $field, ...) : ?array
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

note right of ModelInterface::values
  Model a value of multiple items
Example: $this->items(Array, 'value_key', 'table_name');

  since: 3.2.0
  return: ?array
  
  arguments:
    ?array $items
    string $field
    ?string $table = null
end note

note left of ModelInterface::item
  Model the values of an item
Example: $this->item(Object, 'table_name');

  since: 3.2.0
  return: ?object
end note

note right of ModelInterface::items
  Model the values of multiple items
Example: $this->items(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note left of ModelInterface::row
  Model the values of an row
Example: $this->item(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note right of ModelInterface::rows
  Model the values of multiple rows
Example: $this->items(Array, 'table_name');

  since: 3.2.0
  return: ?array
end note

note left of ModelInterface::last
  Get last modeled ID
Example: $this->last('table_name');

  since: 3.2.0
  return: ?int
end note

note right of ModelInterface::setTable
  Set the current active table

  since: 3.2.2
  return: void
end note

note left of ModelInterface::setAllowEmpty
  Set the switch to control the behaviour of empty values

  since: 3.2.2
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---8aef58c1_3f70_4bd4_b9e4_3f29fcd41cff---Power
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

