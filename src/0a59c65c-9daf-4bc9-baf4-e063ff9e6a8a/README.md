```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class ArrayHelper (Details)
> namespace: **VDM\Joomla\Utilities**
> extends: ****
```uml
@startuml
abstract ArrayHelper  #Orange {
  + {static} check($array, $removeEmptyString = false)
  + {static} merge($arrays) : ?array
  + {static} intersect($a_array, $b_array) : bool
}

note right of ArrayHelper::check
  Check if have an array with a length

  since: 3.2.0
end note

note right of ArrayHelper::merge
  Merge an array of array's

  since: 3.0.9
  return: ?array
end note

note right of ArrayHelper::intersect
  Check if arrays intersect

  since: 3.1.1
  return: bool
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

