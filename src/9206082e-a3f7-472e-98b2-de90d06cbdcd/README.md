```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Item (Details)
> namespace: **VDM\Joomla\Data**

```uml
@startuml
class Item << (F,LightGreen) >> #RoyalBlue {
  # Load $load
  # Insert $insert
  # Update $update
  # Delete $delete
  # Database $database
  # string $table
  + __construct(Load $load, Insert $insert, ...)
  + table(string $table) : self
  + get(string $value, string $key = 'guid') : ?object
  + value(string $value, string $key = 'guid', ...) : mixed
  + set(object $item, string $key = 'guid', ...) : bool
  + delete(string $value, string $key = 'guid') : bool
  + getTable() : string
  - insert(object $item) : bool
  - update(object $item, string $key) : bool
  - action(string $value, string $key) : string
}

note right of Item::__construct
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

note left of Item::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Item::get
  Get an item

  since: 3.2.2
  return: ?object
end note

note left of Item::value
  Get the value

  since: 3.2.2
  return: mixed
  
  arguments:
    string $value
    string $key = 'guid'
    string $get = 'id'
end note

note right of Item::set
  Set an item

  since: 3.2.2
  return: bool
  
  arguments:
    object $item
    string $key = 'guid'
    ?string $action = null
end note

note left of Item::delete
  Delete an item

  since: 3.2.2
  return: bool
end note

note right of Item::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of Item::insert
  Insert a item

  since: 3.2.2
  return: bool
end note

note right of Item::update
  Update a item

  since: 3.2.2
  return: bool
end note

note left of Item::action
  Get loading action

  since: 3.2.2
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
Super---9206082e_a3f7_472e_98b2_de90d06cbdcd---Power
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

