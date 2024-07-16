```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Registry (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: **ActiveRegistry**

```uml
@startuml
abstract Registry  #Orange {
  # ?string $separator
  + set(string $path, mixed $value) : self
  + add(string $path, mixed $value, ...) : self
  + get(string $path, mixed $default = null) : mixed
  + remove(string $path) : self
  + exists(string $path) : bool
  + setSeparator(?string $value) : self
  # getActiveKeys(string $path) : ?array
}

note right of Registry::set
  Sets a value into the registry using multiple keys.

  since: 3.2.0
  return: self
end note

note right of Registry::add
  Adds content into the registry. If a key exists,
it either appends or concatenates based on $asArray switch.
Default is $addAsArray = false (if null) in base class.
Override in child class allowed set class property $addAsArray = true.

  since: 3.2.0
  return: self
  
  arguments:
    string $path
    mixed $value
    ?bool $asArray = null
end note

note right of Registry::get
  Retrieves a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Registry::remove
  Removes a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: self
end note

note right of Registry::exists
  Checks the existence of a particular location in the registry using multiple keys.

  since: 3.2.0
  return: bool
end note

note right of Registry::setSeparator
  Sets a separator value

  since: 3.2.0
  return: self
end note

note right of Registry::getActiveKeys
  Get that the active keys from a path

  since: 3.2.0
  return: ?array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---7e822c03_1b20_41d1_9427_f5b8d5836af7---Power
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

