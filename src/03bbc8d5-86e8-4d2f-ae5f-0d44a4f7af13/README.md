```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface InsertInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**

```uml
@startuml
interface InsertInterface  #Lavender {
  + table(?string $table) : self
  + value(mixed $value, string $field, ...) : bool
  + row(array $item) : bool
  + rows(?array $items) : bool
  + item(object $item) : bool
  + items(?array $items) : bool
  + getTable() : string
}

note right of InsertInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of InsertInterface::value
  Insert a value to a given table
Example: $this->value(Value, 'value_key', 'GUID');

  since: 3.2.0
  return: bool
  
  arguments:
    mixed $value
    string $field
    string $keyValue
    string $key = 'guid'
end note

note right of InsertInterface::row
  Insert single row with multiple values to a given table
Example: $this->item(Array);

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::rows
  Insert multiple rows to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::item
  Insert single item with multiple values to a given table
Example: $this->item(Object);

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::items
  Insert multiple items to a given table
Example: $this->items(Array);

  since: 3.2.0
  return: bool
end note

note right of InsertInterface::getTable
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
Super---03bbc8d5_86e8_4d2f_ae5f_0d44a4f7af13---Power
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

