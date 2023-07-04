```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Database (Details)
> namespace: **VDM\Joomla\Abstraction**
```uml
@startuml
abstract Database  #Orange {
  # \JDatabaseDriver $db
  # string $table
  + __construct(?\JDatabaseDriver $db = null)
  # quote(mixed $value) : mixed
  # getTable(string $table) : string
}

note right of Database::__construct
  Constructor

  since: 3.2.0
end note

note right of Database::quote
  Set a value based on data type

  since: 3.2.0
  return: mixed
end note

note right of Database::getTable
  Set a table name, adding the
core component as needed

  since: 3.2.0
  return: string
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

