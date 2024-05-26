```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Activeregistryinterface (Details)
> namespace: **VastDevelopmentMethod\Joomla\Interfaces**
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

