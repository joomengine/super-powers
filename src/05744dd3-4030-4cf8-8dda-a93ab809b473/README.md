```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface ItemInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**

```uml
@startuml
interface ItemInterface  #Lavender {
  + table(string $table) : self
  + get(string $value, string $key = 'guid') : ?object
  + value(string $value, string $key = 'guid', ...) : mixed
  + set(object $item, string $key = 'guid', ...) : bool
  + delete(string $value, string $key = 'guid') : bool
  + getTable() : string
}

note right of ItemInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of ItemInterface::get
  Get an item

  since: 3.2.2
  return: ?object
end note

note right of ItemInterface::value
  Get the value

  since: 3.2.2
  return: mixed
  
  arguments:
    string $value
    string $key = 'guid'
    string $get = 'id'
end note

note right of ItemInterface::set
  Set an item

  since: 3.2.2
  return: bool
  
  arguments:
    object $item
    string $key = 'guid'
    ?string $action = null
end note

note right of ItemInterface::delete
  Delete an item

  since: 3.2.2
  return: bool
end note

note right of ItemInterface::getTable
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
Super---05744dd3_4030_4cf8_8dda_a93ab809b473---Power
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

