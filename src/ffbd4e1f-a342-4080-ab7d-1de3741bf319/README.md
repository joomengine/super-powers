```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class BaseConfig (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: **JoomlaRegistry**

```uml
@startuml
abstract BaseConfig  #Orange {
  + __construct()
  + __set(string $key, mixed $value)
  + __get(string $key)
  + get(string $path, mixed $default = null) : mixed
  + appendArray(string $path, mixed $value) : mixed
}

note right of BaseConfig::__construct
  Constructor

  since: 3.2.0
end note

note right of BaseConfig::__set
  setting any config value

  since: 3.2.0
end note

note right of BaseConfig::__get
  getting any valid value

  since: 3.2.0
end note

note right of BaseConfig::get
  Get a config value.

  since: 3.2.0
  return: mixed
end note

note right of BaseConfig::appendArray
  Append value to a path in registry of an array

  since: 3.2.0
  return: mixed
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---ffbd4e1f_a342_4080_ab7d_1de3741bf319---Power
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

