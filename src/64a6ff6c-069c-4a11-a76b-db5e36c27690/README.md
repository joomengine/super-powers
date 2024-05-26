```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Base64Helper (Details)
> namespace: **VastDevelopmentMethod\Joomla\Utilities**
```uml
@startuml
abstract Base64Helper  #Orange {
  + {static} open(?string $data, ?string $key = '__.o0=base64=Oo.__', ...) : ?string
}

note right of Base64Helper::open
  open base64 string if stored as base64 (in JCB)

  since: 3.2.0
  return: ?string
  
  arguments:
    ?string $data
    ?string $key = '__.o0=base64=Oo.__'
    ?string $default = 'string'
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

