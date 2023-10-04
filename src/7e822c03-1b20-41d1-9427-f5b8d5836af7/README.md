```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class StorageRegistry (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: **ActiveStorageRegistry**
```uml
@startuml
abstract StorageRegistry  #Orange {
  # ?string $separator
  + set(string $path, mixed $value) : void
  + add(string $path, mixed $value, ...) : void
  + get(string $path, mixed $default = null) : mixed
  + remove(string $path) : void
  + exists(string $path) : bool
  + setSeparator(?string $value) : void
  # getActiveKeys(string $path) : ?array
}

note right of StorageRegistry::set
  Sets a value into the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note right of StorageRegistry::add
  Adds content into the storage. If a key exists,
it either appends or concatenates based on $asArray switch.

  since: 3.2.0
  return: void
  
  arguments:
    string $path
    mixed $value
    bool $asArray = false
end note

note right of StorageRegistry::get
  Retrieves a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of StorageRegistry::remove
  Removes a value (or sub-array) from the storage using multiple keys.

  since: 3.2.0
  return: void
end note

note right of StorageRegistry::exists
  Checks the existence of a particular location in the storage using multiple keys.

  since: 3.2.0
  return: bool
end note

note right of StorageRegistry::setSeparator
  Sets a separator value

  since: 3.2.0
  return: void
end note

note right of StorageRegistry::getActiveKeys
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

