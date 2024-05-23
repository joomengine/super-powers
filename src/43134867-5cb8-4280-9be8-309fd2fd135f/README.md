```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class ActiveRegistry (Details)
> namespace: **VDM\Joomla\Abstraction**
```uml
@startuml
abstract ActiveRegistry  #Orange {
  # array $active
  # bool $addAsArray
  # bool $uniqueArray
  + isActive() : bool
  + allActive() : array
  + setActive(mixed $value, $keys) : void
  + addActive(mixed $value, ?bool $asArray, ...) : void
  + getActive(mixed $default, $keys) : mixed
  + removeActive($keys) : void
  + existsActive($keys) : bool
  # validActiveKeys(array $keys) : bool
}

note right of ActiveRegistry::isActive
  Check if the registry has any content.

  since: 3.2.0
  return: bool
end note

note left of ActiveRegistry::allActive
  Get all value from the active registry.

  since: 3.2.0
  return: array
end note

note right of ActiveRegistry::setActive
  Sets a value into the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note left of ActiveRegistry::addActive
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

note right of ActiveRegistry::getActive
  Retrieves a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: mixed
end note

note left of ActiveRegistry::removeActive
  Removes a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note right of ActiveRegistry::existsActive
  Checks the existence of a particular location in the registry using multiple keys.

  since: 3.2.0
  return: bool
end note

note left of ActiveRegistry::validActiveKeys
  Checks that the keys are valid

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

