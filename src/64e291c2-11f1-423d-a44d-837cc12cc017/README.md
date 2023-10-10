```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface Registryinterface (Details)
> namespace: **VDM\Joomla\Interfaces**
```uml
@startuml
interface Registryinterface  #Lavender {
  + set(string $path, mixed $value) : void
  + add(string $path, mixed $value, ...) : void
  + get(string $path, mixed $default = null) : mixed
  + remove(string $path) : void
  + exists(string $path) : bool
  + setSeparator(?string $value) : void
}

note right of Registryinterface::set
  Sets a value into the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Registryinterface::add
  Adds content into the registry. If a key exists,
it either appends or concatenates based on $asArray switch.

  since: 3.2.0
  return: void
  
  arguments:
    string $path
    mixed $value
    bool $asArray = false
end note

note right of Registryinterface::get
  Retrieves a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Registryinterface::remove
  Removes a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Registryinterface::exists
  Checks the existence of a particular location in the registry using multiple keys.

  since: 3.2.0
  return: bool
end note

note right of Registryinterface::setSeparator
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

