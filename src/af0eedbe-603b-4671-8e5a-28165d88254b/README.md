```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Activestorageregistryinterface (Details)
> namespace: **VDM\Joomla\Interfaces**
```uml
@startuml
interface Activestorageregistryinterface  #Lavender {
  + isActive() : bool
  + allActive() : array
  + setActive(mixed $value, $keys) : void
  + addActive(mixed $value, bool $asArray, ...) : void
  + getActive(mixed $default, $keys) : mixed
  + removeActive($keys) : void
  + existsActive($keys) : bool
}

note right of Activestorageregistryinterface::isActive
  Check if the main storage has any content.

  since: 3.2.0
  return: bool
end note

note right of Activestorageregistryinterface::allActive
  Retrieves all value from the storage.

  since: 3.2.0
  return: array
end note

note right of Activestorageregistryinterface::setActive
  Sets a value into the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Activestorageregistryinterface::addActive
  Adds content into the storage. If a key exists,
it either appends or concatenates based on the value's type.

  since: 3.2.0
  return: void
  
  arguments:
    mixed $value
    bool $asArray
    $keys
end note

note right of Activestorageregistryinterface::getActive
  Retrieves a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Activestorageregistryinterface::removeActive
  Removes a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Activestorageregistryinterface::existsActive
  Checks the existence of a particular location in the storage using multiple keys.

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

