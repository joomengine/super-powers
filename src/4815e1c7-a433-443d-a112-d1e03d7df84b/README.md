```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Database (Details)
> namespace: **VDM\Joomla\Componentbuilder\Service**
```uml
@startuml
class Database  #Gold {
  + register(Container $container) : void
  + getLoad(Container $container) : Load
  + getInsert(Container $container) : Insert
  + getUpdate(Container $container) : Update
}

note right of Database::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note right of Database::getLoad
  Get the Core Load Database

  since: 3.2.0
  return: Load
end note

note right of Database::getInsert
  Get the Core Insert Database

  since: 3.2.0
  return: Insert
end note

note right of Database::getUpdate
  Get the Core Update Database

  since: 3.2.0
  return: Update
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

