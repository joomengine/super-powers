```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface SubformInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**

```uml
@startuml
interface SubformInterface  #Lavender {
  + table(string $table) : self
  + get(string $linkValue, string $linkKey, ...) : ?array
  + set(mixed $items, string $indexKey, ...) : bool
  + getTable() : string
}

note right of SubformInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of SubformInterface::get
  Get a subform items

  since: 3.2.2
  return: ?array
  
  arguments:
    string $linkValue
    string $linkKey
    string $field
    array $get
end note

note right of SubformInterface::set
  Set a subform items

  since: 3.2.2
  return: bool
  
  arguments:
    mixed $items
    string $indexKey
    string $linkKey
    string $linkValue
end note

note right of SubformInterface::getTable
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
Super---34959721_415b_4b5e_8002_3d1fc84b3b2b---Power
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

