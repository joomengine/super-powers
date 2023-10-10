```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Registry (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: **ActiveRegistry**
```uml
@startuml
abstract Registry  #Orange {
  # ?string $separator
  + set(string $path, mixed $value) : void
  + add(string $path, mixed $value, ...) : void
  + get(string $path, mixed $default = null) : mixed
  + remove(string $path) : void
  + exists(string $path) : bool
  + setSeparator(?string $value) : void
  # getActiveKeys(string $path) : ?array
}

note right of Registry::set
  Sets a value into the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Registry::add
  Adds content into the registry. If a key exists,
it either appends or concatenates based on $asArray switch.

  since: 3.2.0
  return: void
  
  arguments:
    string $path
    mixed $value
    bool $asArray = false
end note

note right of Registry::get
  Retrieves a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Registry::remove
  Removes a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: void
end note

note right of Registry::exists
  Checks the existence of a particular location in the registry using multiple keys.

  since: 3.2.0
  return: bool
end note

note right of Registry::setSeparator
  Sets a separator value

  since: 3.2.0
  return: void
end note

note right of Registry::getActiveKeys
  Get that the active keys from a path

  since: 3.2.0
  return: ?array
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

