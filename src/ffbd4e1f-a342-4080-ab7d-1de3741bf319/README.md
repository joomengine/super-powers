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

