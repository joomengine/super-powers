```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class ObjectHelper (Details)
> namespace: **VastDevelopmentMethod\Joomla\Utilities**
```uml
@startuml
abstract ObjectHelper  #Orange {
  + {static} check($object)
  + {static} equal(?object $obj1, ?object $obj2) : bool
}

note right of ObjectHelper::check
  Check if have an object with a length

  since: 3.0.9
end note

note right of ObjectHelper::equal
  Compare two objects for equality based on their property values.
Note that this method works only for simple objects that don't
contain any nested objects or resource references. If you need
to compare more complex objects, you may need to use a
more advanced method such as serialization or reflection.

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

