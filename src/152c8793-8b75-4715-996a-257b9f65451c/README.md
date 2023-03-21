```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class MathHelper (Details)
> namespace: **VDM\Joomla\Utilities**
```uml
@startuml
abstract MathHelper  #Orange {
  + {static} bc(string $type, int $val1, ...) : int
  + {static} sum(array $array, int $scale = 4) : float
}

note right of MathHelper::bc
  bc math wrapper (very basic not for accounting)

  since: 3.0.9
  return: int
  
  arguments:
    string $type
    int $val1
    int $val2
    int $scale
end note

note right of MathHelper::sum
  Basic sum of an array with more precision

  since: 3.0.9
  return: float
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

