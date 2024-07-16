```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Get (Details)
> namespace: **VDM\Joomla\Data\Remote**

```uml
@startuml
class Get  #Gold {
  # Grep $grep
  # Item $item
  # string $table
  + __construct(Grep $grep, Item $item, ...)
  + table(string $table) : self
  + init() : bool
  + reset(array $items) : bool
  + item(string $guid, array $order = ['remote', 'local'], ...) : bool
  + getTable() : string
}

note right of Get::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Grep $grep
    Item $item
    ?string $table = null
end note

note right of Get::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Get::init
  Init all items not found in database

  since: 3.2.0
  return: bool
end note

note right of Get::reset
  Reset the items

  since: 3.2.0
  return: bool
end note

note right of Get::item
  Load an item

  since: 3.2.0
  return: bool
  
  arguments:
    string $guid
    array $order = ['remote', 'local']
    ?string $action = null
end note

note right of Get::getTable
  Get the current active table

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
Super---728ee726_3f0f_4762_899d_f8c9430cee58---Power
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

