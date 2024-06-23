```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Factory (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: ****
```uml
@startuml
abstract Factory  #Orange {
  + {static} _(string $key) : Mixed
  + {static} getContainer() : Container
  # {abstract} {static} createContainer() : Container
}

note right of Factory::_
  Get any class from the package container

  since: 0.0.0
  return: Mixed
end note

note right of Factory::getContainer
  Get the global package container

  since: 0.0.0
  return: Container
end note

note right of Factory::createContainer
  Create a container object

  since: 0.0.0
  return: Container
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

