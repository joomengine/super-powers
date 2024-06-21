```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Model (Details)
> namespace: **VDM\Joomla\Service**
> extends: ****
```uml
@startuml
class Model  #Gold {
  + register(Container $container) : void
  + getLoad(Container $container) : Load
  + getUpsert(Container $container) : Upsert
}

note right of Model::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Model::getLoad
  Get The Load Class.

  since: 3.2.0
  return: Load
end note

note right of Model::getUpsert
  Get The Upsert Class.

  since: 3.2.0
  return: Upsert
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

