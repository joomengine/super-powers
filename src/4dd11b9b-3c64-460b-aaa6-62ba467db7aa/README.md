```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface SchemaInterface (Details)
> namespace: **VastDevelopmentMethod\Joomla\Interfaces**
```uml
@startuml
interface SchemaInterface  #Lavender {
  + update() : array
  + createTable(string $table) : void
  + updateSchema(string $table) : void
}

note right of SchemaInterface::update
  Check and update database schema for missing fields or tables.

  since: 3.2.1
  return: array
end note

note right of SchemaInterface::createTable
  Create a table with all necessary fields.

  since: 3.2.1
  return: void
end note

note right of SchemaInterface::updateSchema
  Update the schema of an existing table.

  since: 3.2.1
  return: void
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

