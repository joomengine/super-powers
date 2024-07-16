```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Load (Details)
> namespace: **VDM\Joomla\Data\Action**

```uml
@startuml
class Load  #Gold {
  # Model $model
  # Database $load
  # string $table
  + __construct(Model $model, Database $load, ...)
  + table(?string $table) : self
  + value(array $keys, string $field) : mixed
  + values(array $keys, string $field) : ?array
  + item(array $keys) : ?object
  + items(array $keys) : ?array
  + getTable() : string
  - prefix(array $keys) : array
}

note right of Load::__construct
  Constructor

  since: 2.0.1
  
  arguments:
    Model $model
    Database $load
    ?string $table = null
end note

note left of Load::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Load::value
  Get a value from a given table
Example: $this->value(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
], 'value_key'
);

  since: 2.0.1
  return: mixed
end note

note left of Load::values
  Get a value from multiple rows from a given table
Example: $this->values(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
], 'value_key'
);

  since: 3.2.2
  return: ?array
end note

note right of Load::item
  Get values from a given table
Example: $this->item(
[
'guid' => 'xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'
]
);

  since: 2.0.1
  return: ?object
end note

note left of Load::items
  Get values from a given table
Example: $this->items(
[
'guid' => [
'operator' => 'IN',
'value' => [''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'', ''xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx'']
]
]
);
Example: $this->items($ids);

  since: 2.0.1
  return: ?array
end note

note right of Load::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of Load::prefix
  Add prefix to the keys

  since: 2.0.1
  return: array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---008d111c_9d43_427c_8dd4_2653e8b74be8---Power
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

