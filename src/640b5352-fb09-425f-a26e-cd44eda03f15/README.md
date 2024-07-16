```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Helper (Details)
> namespace: **VDM\Joomla\Utilities\Component**

```uml
@startuml
abstract Helper  #Orange {
  + {static} getParams(?string $option = null) : Registry
  + {static} setOption(?string $option) : void
  + {static} getOption(?string $default = 'empty') : ?string
  + {static} getCode(?string $option = null, ?string $default = null) : ?string
  + {static} get(?string $option = null, ?string $default = null) : ?string
  + {static} getNamespace(?string $option = null) : ?string
  + {static} getManifest(?string $option = null) : ?object
  + {static} methodExists(string $method, ?string $option = null) : bool
  + {static} _(string $method, array $arguments = [], ...) : mixed
}

note right of Helper::getParams
  Gets the parameter object for the component

  since: 3.0.11
  return: Registry
end note

note left of Helper::setOption
  Set the component option

  since: 3.2.0
  return: void
end note

note right of Helper::getOption
  Get the component option

  since: 3.0.11
  return: ?string
end note

note left of Helper::getCode
  Gets the component code name

  since: 3.0.11
  return: ?string
end note

note right of Helper::get
  Gets the component abstract helper class

  since: 3.0.11
  return: ?string
end note

note left of Helper::getNamespace
  Gets the component namespace if set

  since: 3.0.11
  return: ?string
end note

note right of Helper::getManifest
  Gets the component abstract helper class

  since: 3.0.11
  return: ?object
end note

note left of Helper::methodExists
  Check if the helper class of this component has a method

  since: 3.0.11
  return: bool
end note

note right of Helper::_
  Check if the helper class of this component has a method, and call it with the arguments

  since: 3.2.0
  return: mixed
  
  arguments:
    string $method
    array $arguments = []
    ?string $option = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---640b5352_fb09_425f_a26e_cd44eda03f15---Power
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

