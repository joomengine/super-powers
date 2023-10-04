```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Mapper (Details)
> namespace: **VDM\Joomla\Componentbuilder\Abstraction**
```uml
@startuml
abstract Mapper  #Orange {
  + array $active
  + isActive() : bool
  + set(string $key, mixed $value) : void
  + get(string $key) : mixed
  + exist(string $key) : bool
  + add(string $key, mixed $value, ...) : void
  + remove(string $key) : void
  # {abstract} key(string $key) : string
  + isActive_(string $firstKey = null) : bool
  + set_(string $firstKey, string $secondKey, ...) : void
  + get_(string $firstKey, ?string $secondKey = null) : mixed
  + exist_(string $firstKey, ?string $secondKey = null) : bool
  + add_(string $firstKey, string $secondKey, ...) : void
  + remove_(string $firstKey, ?string $secondKey = null) : void
  # {abstract} firstKey(string $key) : string
  # {abstract} secondKey(string $key) : string
}

note right of Mapper::isActive
  Check if any values are set in the active array

  since: 3.2.0
  return: bool
end note

note left of Mapper::set
  Set content

  since: 3.2.0
  return: void
end note

note right of Mapper::get
  Get content

  since: 3.2.0
  return: mixed
end note

note left of Mapper::exist
  Does key exist

  since: 3.2.0
  return: bool
end note

note right of Mapper::add
  Add content

  since: 3.2.0
  return: void
  
  arguments:
    string $key
    mixed $value
    bool $array = false
end note

note left of Mapper::remove
  Remove content

  since: 3.2.0
  return: void
end note

note right of Mapper::key
  Model the key

  since: 3.2.0
  return: string
end note

note left of Mapper::isActive_
  Check if any values are set in the active array.

  since: 3.2.0
  return: bool
end note

note right of Mapper::set_
  Set dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
end note

note left of Mapper::get_
  Get dynamic content

  since: 3.2.0
  return: mixed
end note

note right of Mapper::exist_
  Does keys exist

  since: 3.2.0
  return: bool
end note

note left of Mapper::add_
  Add dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
    bool $array = false
end note

note right of Mapper::remove_
  Remove dynamic content

  since: 3.2.0
  return: void
end note

note left of Mapper::firstKey
  Model the first key

  since: 3.2.0
  return: string
end note

note right of Mapper::secondKey
  Model the second key

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

