```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Items (Details)
> namespace: **VDM\Joomla\Data**

```uml
@startuml
class Items << (F,LightGreen) >> #RoyalBlue {
  # Load $load
  # Insert $insert
  # Update $update
  # Delete $delete
  # Database $database
  # string $table
  + __construct(Load $load, Insert $insert, ...)
  + table(string $table) : self
  + get(array $values, string $key = 'guid') : ?array
  + values(array $values, string $key = 'guid', ...) : ?array
  + set(array $items, string $key = 'guid') : bool
  + delete(array $values, string $key = 'guid') : bool
  + getTable() : string
  - insert(array $items) : bool
  - update(array $items, string $key) : bool
  - sort(array $items, string $key) : ?array
  - extractValues(array $items, string $key) : ?array
  - extractSet(array $items, array $set, ...) : ?array
}

note right of Items::__construct
  Constructor.

  since: 3.2.2
  
  arguments:
    Load $load
    Insert $insert
    Update $update
    Delete $delete
    Database $database
    ?string $table = null
end note

note left of Items::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Items::get
  Get list of items

  since: 3.2.2
  return: ?array
end note

note left of Items::values
  Get the values

  since: 3.2.2
  return: ?array
  
  arguments:
    array $values
    string $key = 'guid'
    string $get = 'id'
end note

note right of Items::set
  Set items

  since: 3.2.2
  return: bool
end note

note left of Items::delete
  Delete items

  since: 3.2.2
  return: bool
end note

note right of Items::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of Items::insert
  Insert a item

  since: 3.2.2
  return: bool
end note

note right of Items::update
  Update a item

  since: 3.2.2
  return: bool
end note

note left of Items::sort
  Sort items between insert and update.

  since: 3.2.2
  return: ?array
end note

note right of Items::extractValues
  Extracts values for a given key from an array of items.
Items can be either arrays or objects.

  since: 3.2.2
  return: ?array
end note

note left of Items::extractSet
  Extracts items from an array of items based on a set.
Items can be either arrays or objects.

  since: 3.2.2
  return: ?array
  
  arguments:
    array $items
    array $set
    string $key
    bool $inverse = false
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---21bca8a4_5b28_41c4_843e_8097f0ba7cca---Power
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

