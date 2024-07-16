```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class BaseTable (Details)
> namespace: **VDM\Joomla\Abstraction**

```uml
@startuml
abstract BaseTable  #Orange {
  # array $tables
  + get(?string $table = null, ?string $field = null, ...) : mixed
  + title(string $table) : ?array
  + titleName(string $table) : string
  + tables() : array
  + exist(string $table, ?string $field = null) : bool
  + fields(string $table, bool $default = false, ...) : ?array
  # addDefault(array $fields) : array
  # addDefaultDetails(array $fields) : array
  # isDefault(string $field) : bool
  # getDefault(string $field) : ?array
  # getDefaultKey(string $field, string $key) : mixed
}

note right of BaseTable::get
  Get any value from a item/field/column of an area/view/table
Example: $this->get('table_name', 'field_name', 'value_key');
Get an item/field/column of an area/view/table
Example: $this->get('table_name', 'field_name');
Get all items/fields/columns of an area/view/table
Example: $this->get('table_name');
Get all areas/views/tables with all their item/field/column details
Example: $this->get('All');
Example: $this->get();

  since: 3.2.1
  return: mixed
  
  arguments:
    ?string $table = null
    ?string $field = null
    ?string $key = null
end note

note left of BaseTable::title
  Get title field from an area/view/table

  since: 3.2.0
  return: ?array
end note

note right of BaseTable::titleName
  Get title field name

  since: 3.2.0
  return: string
end note

note left of BaseTable::tables
  Get all tables

  since: 3.2.0
  return: array
end note

note right of BaseTable::exist
  Check if a table (and field) exist

  since: 3.2.0
  return: bool
end note

note left of BaseTable::fields
  Get all fields of an area/view/table

  since: 3.2.0
  return: ?array
  
  arguments:
    string $table
    bool $default = false
    bool $details = false
end note

note right of BaseTable::addDefault
  Add the default fields

  since: 3.2.0
  return: array
end note

note left of BaseTable::addDefaultDetails
  Add the default fields

  since: 3.2.0
  return: array
end note

note right of BaseTable::isDefault
  Check if the field is a default field

  since: 3.2.0
  return: bool
end note

note left of BaseTable::getDefault
  Get a default field

  since: 3.2.0
  return: ?array
end note

note right of BaseTable::getDefaultKey
  Get a default field property

  since: 3.2.0
  return: mixed
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---e0f6ddbe_2a35_4537_942c_faff2ebd04f6---Power
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

