```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class FunctionRegistry (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: **Registry**

```uml
@startuml
abstract FunctionRegistry  #Orange {
  + __get(string $key)
  + get(string $path, mixed $default = null) : mixed
  + appendArray(string $path, mixed $value) : mixed
  # isCallableMethod(string $method) : bool
}

note right of FunctionRegistry::__get
  getting any valid value

  since: 3.2.0
end note

note right of FunctionRegistry::get
  Get a config value.

  since: 3.2.0
  return: mixed
end note

note right of FunctionRegistry::appendArray
  Append value to a path in registry of an array

  since: 3.2.0
  return: mixed
end note

note right of FunctionRegistry::isCallableMethod
  Determines if a method is callable on this object, excluding certain methods.
This method checks if a method exists on this object and is callable, but excludes
certain methods to prevent unintended access or recursion. It helps to safely determine
if a dynamic getter method can be invoked without interfering with core methods.

  since: 5.0.4
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

