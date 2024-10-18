```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Mapper (Details)
> namespace: **VDM\Joomla\Componentbuilder\Import**

```uml
@startuml
class Mapper << (F,LightGreen) >> #RoyalBlue {
  # Table $table
  - array $parent
  - array $join
  + __construct(Table $table)
  + set(object $map, string $parentTable) : void
  + getParent() : array
  + getJoin() : array
  - getTableField(string $key) : ?object
}

note right of Mapper::__construct
  Constructor.

  since: 4.0.3
end note

note right of Mapper::set
  Set the tables mapper

  since: 4.0.3
  return: void
end note

note right of Mapper::getParent
  Get the parent table keys

  since: 4.0.3
  return: array
end note

note right of Mapper::getJoin
  Get the join tables keys

  since: 4.0.3
  return: array
end note

note right of Mapper::getTableField
  Get the table and field name

  since: 4.0.3
  return: ?object
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---90b48ea8_0930_48d1_869a_bce9c901589c---Power
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

