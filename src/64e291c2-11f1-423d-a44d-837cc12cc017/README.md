```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Storageregistryinterface (Details)
> namespace: **VDM\Joomla\Interfaces**
```uml
@startuml
interface Storageregistryinterface  #Lavender {
  + set(string $path, mixed $value) : void
  + add(string $path, mixed $value, ...) : void
  + get(string $path, mixed $default = null) : mixed
  + remove(string $path) : void
  + exists(string $path) : bool
  + setSeparator(?string $value) : void
}

note right of Storageregistryinterface::set
  Sets a value into the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Storageregistryinterface::add
  Adds content into the storage. If a key exists,
it either appends or concatenates based on $asArray switch.

  since: 3.2.0
  return: void
  
  arguments:
    string $path
    mixed $value
    bool $asArray = false
end note

note right of Storageregistryinterface::get
  Retrieves a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Storageregistryinterface::remove
  Removes a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Storageregistryinterface::exists
  Checks the existence of a particular location in the storage using multiple keys.

  since: 3.2.0
  return: bool
end note

note right of Storageregistryinterface::setSeparator
  Sets a separator value

  since: 3.2.0
  return: void
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

