```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class MapperDouble (Details)
> namespace: **VDM\Joomla\Componentbuilder\Abstraction**
```uml
@startuml
abstract MapperDouble  #Orange {
  + array $active
  + isActive(string $firstKey = null) : bool
  + set(string $firstKey, string $secondKey, ...) : void
  + get(string $firstKey, ?string $secondKey = null) : mixed
  + exist(string $firstKey, ?string $secondKey = null) : bool
  + add(string $firstKey, string $secondKey, ...) : void
  + remove(string $firstKey, ?string $secondKey = null) : void
  # {abstract} firstKey(string $key) : string
  # {abstract} secondKey(string $key) : string
}

note right of MapperDouble::isActive
  Check if any values are set in the active array.

  since: 3.2.0
  return: bool
end note

note left of MapperDouble::set
  Set dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
end note

note right of MapperDouble::get
  Get dynamic content

  since: 3.2.0
  return: mixed
end note

note left of MapperDouble::exist
  Does keys exist

  since: 3.2.0
  return: bool
end note

note right of MapperDouble::add
  Add dynamic content

  since: 3.2.0
  return: void
  
  arguments:
    string $firstKey
    string $secondKey
    mixed $value
    bool $array = false
end note

note left of MapperDouble::remove
  Remove dynamic content

  since: 3.2.0
  return: void
end note

note right of MapperDouble::firstKey
  Model the first key

  since: 3.2.0
  return: string
end note

note left of MapperDouble::secondKey
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

