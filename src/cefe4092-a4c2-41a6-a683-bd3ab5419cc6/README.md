```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class GetHelperExtrusion (Details)
> namespace: **VastDevelopmentMethod\Joomla\Utilities**
> extends: **GetHelper**
```uml
@startuml
abstract GetHelperExtrusion  #Orange {
  + {static} allBetween(string $content, string $start, ...) : ?array
  + {static} between(string $content, string $start, ...) : string
}

note right of GetHelperExtrusion::allBetween
  get all strings between two other strings

  since: 3.0.9
  return: ?array
  
  arguments:
    string $content
    string $start
    string $end
end note

note right of GetHelperExtrusion::between
  get a string between two other strings

  since: 3.0.9
  return: string
  
  arguments:
    string $content
    string $start
    string $end
    string $default = ''
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

