```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class JoinTables (Details)
> namespace: **VDM\Joomla\Componentbuilder\Item\Import**

```uml
@startuml
class JoinTables << (F,LightGreen) >> #RoyalBlue {
  # Mapper $mapper
  # ImportItem $importitem
  # Data $data
  # Item $item
  # Load $load
  + __construct(Mapper $mapper, ImportItem $importitem, ...)
  + set(string $parentJoinKey, string $parentGuid) : void
  - isJoinedItemReady(array $item, array $keyFields, ...) : bool
  - saveJoinedItem(array $item, array $keyFields, ...) : void
}

note right of JoinTables::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Mapper $mapper
    ImportItem $importitem
    Data $data
    Item $item
    Load $load
end note

note right of JoinTables::set
  Process the join tables and save the corresponding data.

  since: 5.0.2
  return: void
end note

note right of JoinTables::isJoinedItemReady
  Check if the item is ready to be processed.

  since: 5.0.2
  return: bool
  
  arguments:
    array $item
    array $keyFields
    string $table
end note

note right of JoinTables::saveJoinedItem
  Save the item (either insert or update).

  since: 5.0.2
  return: void
  
  arguments:
    array $item
    array $keyFields
    string $table
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---db00768d_c7a6_421d_8f39_577550ddf792---Power
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

