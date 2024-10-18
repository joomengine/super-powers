```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface ImportRowInterface (Details)
> namespace: **VDM\Joomla\Componentbuilder\Interfaces**

```uml
@startuml
interface ImportRowInterface  #Lavender {
  + set(int $index, array $values) : void
  + clear() : self
  + getIndex() : int
  + getValue(string $key) : mixed
  + unsetValue(string $key) : void
}

note right of ImportRowInterface::set
  Set the row details

  since: 3.0.3
  return: void
end note

note right of ImportRowInterface::clear
  Clear the row details

  since: 3.0.3
  return: self
end note

note right of ImportRowInterface::getIndex
  Get Index

  since: 3.0.3
  return: int
end note

note right of ImportRowInterface::getValue
  Get Value

  since: 3.0.3
  return: mixed
end note

note right of ImportRowInterface::unsetValue
  Unset Value

  since: 3.0.3
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---3d3ec064_9867_41e6_a48a_964c15d753aa---Power
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

