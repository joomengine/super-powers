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
> extends: **Activeregistryinterface**
```uml
@startuml
interface Registryinterface  #Lavender {
  + set(string $path, mixed $value) : self
  + add(string $path, mixed $value, ...) : self
  + get(string $path, mixed $default = null) : mixed
  + remove(string $path) : self
  + exists(string $path) : bool
  + setSeparator(?string $value) : self
}

note right of Registryinterface::set
  Sets a value into the registry using multiple keys.

  since: 3.2.0
  return: self
end note

note right of Registryinterface::add
  Adds content into the registry. If a key exists,
it either appends or concatenates based on $asArray switch.
Default is $addAsArray = false (if null) in base class.
Override in child class allowed set class property $addAsArray = true.

  since: 3.2.0
  return: self
  
  arguments:
    string $path
    mixed $value
    ?bool $asArray = null
end note

note right of Registryinterface::get
  Retrieves a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Registryinterface::remove
  Removes a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: self
end note

note right of Registryinterface::exists
  Checks the existence of a particular location in the registry using multiple keys.

  since: 3.2.0
  return: bool
end note

note right of Registryinterface::setSeparator
  Sets a separator value

  since: 3.2.0
  return: self
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

