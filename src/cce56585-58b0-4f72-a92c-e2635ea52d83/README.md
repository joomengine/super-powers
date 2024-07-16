```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Update (Details)
> namespace: **VDM\Joomla\Database**
> extends: **Database**

```uml
@startuml
class Update << (F,LightGreen) >> #RoyalBlue {
  + rows(array $data, string $key, ...) : bool
  + items(array $data, string $key, ...) : bool
  + row(array $data, string $key, ...) : bool
  + item(object $data, string $key, ...) : bool
}

note right of Update::rows
  Update rows in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note right of Update::items
  Update items in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note right of Update::row
  Update row in the database

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
end note

note right of Update::item
  Update item in the database

  since: 3.2.0
  return: bool
  
  arguments:
    object $data
    string $key
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
Super---cce56585_58b0_4f72_a92c_e2635ea52d83---Power
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

