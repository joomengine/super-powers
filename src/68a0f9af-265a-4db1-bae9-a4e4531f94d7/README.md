```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Item (Details)
> namespace: **VDM\Joomla\Componentbuilder\Import**

```uml
@startuml
class Item << (F,LightGreen) >> #RoyalBlue {
  # Validator $validator
  # Item $item
  # Row $row
  + __construct(Validator $validator, Item $item, ...)
  + get(string $table, array $columns) : ?array
  - getImportValue(mixed $value, string $field, ...) : mixed
  - validImportValue(mixed $value, string $field, ...) : mixed
  - getLocalValue(mixed $value, array $link) : mixed|null
  - isValueExists(mixed $value, array $link) : bool
  - setLocalValue(mixed $value, array $link) : mixed|null
  - insertItemWithGuid(mixed $value, array $link) : ?string
  - insertItemWithId(mixed $value, array $link) : mixed|null
}

note right of Item::__construct
  Constructor.

  since: 4.0.3
  
  arguments:
    Validator $validator
    Item $item
    Row $row
end note

note left of Item::get
  Get the item from the import row values and ensure it is valid

  since: 4.0.3
  return: ?array
end note

note right of Item::getImportValue
  Get the correct value needed for the import of the related row (item).

  since: 4.0.3
  return: mixed
  
  arguments:
    mixed $value
    string $field
    string $table
    ?array $link
end note

note left of Item::validImportValue
  Make sure we have a valid import value

  since: 4.0.3
  return: mixed
  
  arguments:
    mixed $value
    string $field
    string $table
end note

note right of Item::getLocalValue
  Helper function to get the local value from the database table.

  since: 4.0.3
  return: mixed|null
end note

note left of Item::isValueExists
  Check if the value exists in the table for the given link.

  since: 4.0.3
  return: bool
end note

note right of Item::setLocalValue
  Create a new value in the database table if it doesn't already exist.

  since: 4.0.3
  return: mixed|null
end note

note left of Item::insertItemWithGuid
  Insert a new item with a GUID.

  since: 4.0.3
  return: ?string
end note

note right of Item::insertItemWithId
  Insert a new item with a non-numeric ID.

  since: 4.0.3
  return: mixed|null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---68a0f9af_265a_4db1_bae9_a4e4531f94d7---Power
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

