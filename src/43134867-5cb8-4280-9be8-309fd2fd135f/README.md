```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class ActiveStorageRegistry (Details)
> namespace: **VDM\Joomla\Abstraction**
```uml
@startuml
abstract ActiveStorageRegistry  #Orange {
  # array $active
  + isActive() : bool
  + allActive() : array
  + setActive(mixed $value, $keys) : void
  + addActive(mixed $value, bool $asArray, ...) : void
  + getActive(mixed $default, $keys) : mixed
  + removeActive($keys) : void
  + existsActive($keys) : bool
  # validActiveKeys(array $keys) : bool
}

note right of ActiveStorageRegistry::isActive
  Check if the main storage has any content.

  since: 3.2.0
  return: bool
end note

note left of ActiveStorageRegistry::allActive
  Get all value from the active storage.

  since: 3.2.0
  return: array
end note

note right of ActiveStorageRegistry::setActive
  Sets a value into the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note left of ActiveStorageRegistry::addActive
  Adds content into the storage. If a key exists,
it either appends or concatenates based on the value's type.

  since: 3.2.0
  return: void
  
  arguments:
    mixed $value
    bool $asArray
    $keys
end note

note right of ActiveStorageRegistry::getActive
  Retrieves a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: mixed
end note

note left of ActiveStorageRegistry::removeActive
  Removes a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note right of ActiveStorageRegistry::existsActive
  Checks the existence of a particular location in the storage using multiple keys.

  since: 3.2.0
  return: bool
end note

note left of ActiveStorageRegistry::validActiveKeys
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

