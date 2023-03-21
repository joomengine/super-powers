```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class GetHelper (Details)
> namespace: **VDM\Joomla\Utilities**
```uml
@startuml
abstract GetHelper  #Orange {
  + {static} var(?string $table = null, mixed $where = null, ...) : mixed
  + {static} vars(?string $table = null, mixed $where = null, ...) : ?array
  + {static} allBetween(string $content, string $start, ...) : ?array
  + {static} between(string $content, string $start, ...) : string
}

note right of GetHelper::var
  Get a Variable

  since: 3.0.9
  return: mixed
  
  arguments:
    ?string $table = null
    mixed $where = null
    string $whereString = 'user'
    string $what = 'id'
    string $operator = '='
    ?string $main = null
end note

note right of GetHelper::vars
  Get array of variables

  since: 3.0.9
  return: ?array
  
  arguments:
    ?string $table = null
    mixed $where = null
    string $whereString = 'user'
    string $what = 'id'
    string $operator = 'IN'
    ?string $main = null
    bool $unique = true
end note

note right of GetHelper::allBetween
  get all strings between two other strings

  since: 3.0.9
  return: ?array
  
  arguments:
    string $content
    string $start
    string $end
end note

note right of GetHelper::between
  get a string between two other strings

  since: 3.0.9
  return: string
  
  arguments:
    string $content
    string $start
    string $end
    string $default = ''
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

