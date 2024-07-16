```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Activeregistryinterface (Details)
> namespace: **VDM\Joomla\Interfaces**

```uml
@startuml
interface Activeregistryinterface  #Lavender {
  + isActive() : bool
  + allActive() : array
  + setActive(mixed $value, $keys) : void
  + addActive(mixed $value, ?bool $asArray, ...) : void
  + getActive(mixed $default, $keys) : mixed
  + removeActive($keys) : void
  + existsActive($keys) : bool
}

note right of Activeregistryinterface::isActive
  Check if the registry has any content.

  since: 3.2.0
  return: bool
end note

note right of Activeregistryinterface::allActive
  Retrieves all value from the registry.

  since: 3.2.0
  return: array
end note

note right of Activeregistryinterface::setActive
  Sets a value into the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Activeregistryinterface::addActive
  Adds content into the registry. If a key exists,
it either appends or concatenates based on the value's type.
Default is $addAsArray = false (if null) in base class.
Override in child class allowed set class property $addAsArray = true.

  since: 3.2.0
  return: void
  
  arguments:
    mixed $value
    ?bool $asArray
    $keys
end note

note right of Activeregistryinterface::getActive
  Retrieves a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Activeregistryinterface::removeActive
  Removes a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Activeregistryinterface::existsActive
  Checks the existence of a particular location in the registry using multiple keys.

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
Super---af0eedbe_603b_4671_8e5a_28165d88254b---Power
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

