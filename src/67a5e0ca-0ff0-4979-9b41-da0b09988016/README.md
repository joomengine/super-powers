```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Manager (Details)
> namespace: **VDM\Joomla\Componentbuilder\File**

```uml
@startuml
class Manager << (F,LightGreen) >> #RoyalBlue {
  # Item $item
  # Items $items
  # Type $type
  # Handler $handler
  # string $table
  + __construct(Item $item, Items $items, ...)
  + upload(string $guid, string $entity, ...) : void
  + delete(string $guid, string $entity, ...) : void
  + table(string $table) : self
  + getTable() : string
  # modelFileDetails(array $details, string $guid, ...) : object
}

note right of Manager::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Item $item
    Items $items
    Type $type
    Handler $handler
end note

note right of Manager::upload
  Upload a file, of a given file type and link it to an entity.

  since: 5.0.2
  return: void
  
  arguments:
    string $guid
    string $entity
    string $target
end note

note right of Manager::delete
  Delete a file of a given entity.

  since: 5.0.2
  return: void
  
  arguments:
    string $guid
    string $entity
    string $target
end note

note right of Manager::table
  Set the current active table

  since: 5.0.2
  return: self
end note

note right of Manager::getTable
  Get the current active table

  since: 5.0.2
  return: string
end note

note right of Manager::modelFileDetails
  model the file details to store in the file table

  since: 5.0.2
  return: object
  
  arguments:
    array $details
    string $guid
    string $entity
    string $target
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---67a5e0ca_0ff0_4979_9b41_da0b09988016---Power
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

