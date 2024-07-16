```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class BaseRegistry (Details)
> namespace: **VDM\Joomla\Componentbuilder\Abstraction**
> extends: **JoomlaRegistry**

```uml
@startuml
abstract BaseRegistry  #Orange {
  + _(string $path) : ?\ArrayIterator
  + appendArray(string $path, mixed $value) : mixed
  + isArray(string $path) : bool
  + isString(string $path) : bool
  + isNumeric(string $path) : bool
}

note right of BaseRegistry::_
  Method to iterate over any part of the registry

  since: 3.4.0
  return: ?\ArrayIterator
end note

note right of BaseRegistry::appendArray
  Append value to a path in registry of an array

  since: 3.2.0
  return: mixed
end note

note right of BaseRegistry::isArray
  Check if a registry path exists and is an array

  since: 3.2.0
  return: bool
end note

note right of BaseRegistry::isString
  Check if a registry path exists and is a string

  since: 3.2.0
  return: bool
end note

note right of BaseRegistry::isNumeric
  Check if a registry path exists and is numeric

  since: 3.2.0
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---b84e947d_2a13_44f7_ac0f_3902ae55ae0c---Power
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

