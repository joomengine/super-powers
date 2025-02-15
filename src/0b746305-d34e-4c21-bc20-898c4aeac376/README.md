```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Guid (Details)
> namespace: **VDM\Joomla\Data\Migrator**

```uml
@startuml
class Guid << (F,LightGreen) >> #RoyalBlue {
  # Items $items
  # Load $load
  # Update $update
  # array $guidCache
  # string $table
  - array $success
  + __construct(Items $items, Load $load, ...)
  + process(array $config) : array
  - processMapping(array $mapping) : void
  - processBasicValue(array $mapping) : void
  - processSubformValue(array $mapping) : void
  - processSubSubformValue(array $mapping) : void
  - getItemGuid(string $table, string $column, ...) : ?string
  - processJson(string $values, string $linkedTable, ...) : string
  - processArray(array $values, string $linkedTable, ...) : array
  - updateValue(string $table, string $column, ...) : bool
  - setTable(string $table) : void
  - getTable() : string
}

note right of Guid::__construct
  Constructor.

  since: 5.0.4
  
  arguments:
    Items $items
    Load $load
    Update $update
end note

note left of Guid::process
  Processes the configuration to migrate IDs to GUIDs.

  since: 5.0.4
  return: array
end note

note right of Guid::processMapping
  Processes a single mapping based on its type.

  since: 5.0.4
  return: void
end note

note left of Guid::processBasicValue
  Processes basic values in a table and replaces IDs with GUIDs.

  since: 5.0.4
  return: void
end note

note right of Guid::processSubformValue
  Processes subform values in a table and replaces IDs with GUIDs.

  since: 5.0.4
  return: void
end note

note left of Guid::processSubSubformValue
  Processes sub-subform values in a table and replaces IDs with GUIDs.

  since: 5.0.4
  return: void
end note

note right of Guid::getItemGuid
  Retrieves or creates a GUID for a given linked table and ID (ITEM).

  since: 5.0.4
  return: ?string
  
  arguments:
    string $table
    string $column
    mixed $value
end note

note left of Guid::processJson
  Processes an json-array of basic values and replaces them with GUIDs.

  since: 5.0.4
  return: string
  
  arguments:
    string $values
    string $linkedTable
    string $linkedColumn
    string $hasUpdate
end note

note right of Guid::processArray
  Processes an array values and replaces them with GUIDs.

  since: 5.0.4
  return: array
  
  arguments:
    array $values
    string $linkedTable
    string $linkedColumn
    string $hasUpdate
end note

note left of Guid::updateValue
  Updates a value in the database.

  since: 5.0.4
  return: bool
  
  arguments:
    string $table
    string $column
    string $value
    int $id
end note

note right of Guid::setTable
  Set the current active table

  since: 5.0.4
  return: void
end note

note left of Guid::getTable
  Get the current active table

  since: 5.0.4
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---0b746305_d34e_4c21_bc20_898c4aeac376---Power
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

