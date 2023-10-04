```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class MapperSingle (Details)
> namespace: **VDM\Joomla\Componentbuilder\Abstraction**
```uml
@startuml
abstract MapperSingle  #Orange {
  + array $active
  + isActive() : bool
  + set(string $key, mixed $value) : void
  + get(string $key) : mixed
  + exist(string $key) : bool
  + add(string $key, mixed $value, ...) : void
  + remove(string $key) : void
  # {abstract} key(string $key) : string
}

note right of MapperSingle::isActive
  Check if any values are set in the active array

  since: 3.2.0
  return: bool
end note

note right of MapperSingle::set
  Set content

  since: 3.2.0
  return: void
end note

note right of MapperSingle::get
  Get content

  since: 3.2.0
  return: mixed
end note

note right of MapperSingle::exist
  Does key exist

  since: 3.2.0
  return: bool
end note

note right of MapperSingle::add
  Add content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $array = false
end note

note right of MapperSingle::remove
  Remove content

  since: 3.2.0
  return: void
end note

note right of MapperSingle::key
  Model the key

  since: 3.2.0
  return: string
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

