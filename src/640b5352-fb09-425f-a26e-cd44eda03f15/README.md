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
  + {static} getOption(string $default = 'empty') : ?string
  + {static} getCode(?string $option = null, ?string $default = null) : ?string
  + {static} get(string $option = null, string $default = null) : ?string
  + {static} getNamespace(?string $option = null) : ?string
  + {static} getManifest(?string $option = null) : ?object
  + {static} methodExists(string $method, string $option = null) : bool
  + {static} _(string $method, array $arguments = [], ...) : mixed
}

note right of Helper::getParams
  Gets the parameter object for the component

  since: 3.0.11
  return: Registry
end note

note left of Helper::getOption
  Gets the component option

  since: 3.0.11
  return: ?string
end note

note right of Helper::getCode
  Gets the component code name

  since: 3.0.11
  return: ?string
end note

note left of Helper::get
  Gets the component abstract helper class

  since: 3.0.11
  return: ?string
end note

note right of Helper::getNamespace
  Gets the component namespace if set

  since: 3.0.11
  return: ?string
end note

note left of Helper::getManifest
  Gets the component abstract helper class

  since: 3.0.11
  return: ?object
end note

note right of Helper::methodExists
  Check if the helper class of this component has a method

  since: 3.0.11
  return: bool
end note

note left of Helper::_
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

