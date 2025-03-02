```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ParentTable (Details)
> namespace: **VDM\Joomla\Componentbuilder\Item\Import**

```uml
@startuml
class ParentTable << (F,LightGreen) >> #RoyalBlue {
  # Row $row
  # ImportItem $importitem
  # Mapper $mapper
  # Message $message
  # Data $data
  # Item $item
  # Load $load
  # string $table
  # string $key
  # string $link
  + __construct(Row $row, ImportItem $importitem, ...)
  + set(string $linkKey, string $parentKey, ...) : ?string
  - getParent() : ?array
  - validateParent(?array $parent) : bool
  - processParent(array $parent) : ?string
  - validateParentGuid(?string $guid) : bool
}

note right of ParentTable::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Row $row
    ImportItem $importitem
    Mapper $mapper
    Message $message
    Data $data
    Item $item
    Load $load
end note

note right of ParentTable::set
  Set the parent data

  since: 5.0.2
  return: ?string
  
  arguments:
    string $linkKey
    string $parentKey
    string $parentTable
end note

note right of ParentTable::getParent
  Retrieve parent item.

  since: 5.0.2
  return: ?array
end note

note right of ParentTable::validateParent
  Validate the parent item.

  since: 5.0.2
  return: bool
end note

note right of ParentTable::processParent
  Process parent data, performing insert or update as needed.

  since: 5.0.2
  return: ?string
end note

note right of ParentTable::validateParentGuid
  Validate the retrieved parent guid.

  since: 5.0.2
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---cc923dc9_8f5c_46ea_810c_d93df2e5752b---Power
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

