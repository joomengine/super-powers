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

