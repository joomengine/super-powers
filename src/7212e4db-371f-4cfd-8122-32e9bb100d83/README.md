```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface ItemsInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**

```uml
@startuml
interface ItemsInterface  #Lavender {
  + table(string $table) : self
  + get(array $values, string $key = 'guid') : ?array
  + values(array $values, string $key = 'guid', ...) : ?array
  + set(array $items, string $key = 'guid') : bool
  + delete(array $values, string $key = 'guid') : bool
  + getTable() : string
}

note right of ItemsInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of ItemsInterface::get
  Get list of items

  since: 3.2.2
  return: ?array
end note

note right of ItemsInterface::values
  Get the values

  since: 3.2.2
  return: ?array
  
  arguments:
    array $values
    string $key = 'guid'
    string $get = 'id'
end note

note right of ItemsInterface::set
  Set items

  since: 3.2.2
  return: bool
end note

note right of ItemsInterface::delete
  Delete items

  since: 3.2.2
  return: bool
end note

note right of ItemsInterface::getTable
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
Super---7212e4db_371f_4cfd_8122_32e9bb100d83---Power
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

