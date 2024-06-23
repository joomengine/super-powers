```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Table (Details)
> namespace: **VDM\Joomla\Service**
> extends: ****
```uml
@startuml
class Table  #Gold {
  + register(Container $container) : void
  + getTable(Container $container) : DataTable
  + getSchema(Container $container) : Schema
}

note right of Table::register
  Registers the service provider with a DI container.

  since: 3.2.2
  return: void
end note

note right of Table::getTable
  Get The Componentbuilder Data Table Class.

  since: 3.2.2
  return: DataTable
end note

note right of Table::getSchema
  Get The Schema Class.

  since: 3.2.2
  return: Schema
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

