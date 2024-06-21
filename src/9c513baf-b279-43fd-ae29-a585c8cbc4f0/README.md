```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class GuidHelper (Details)
> namespace: **VDM\Joomla\Utilities**
> extends: ****
```uml
@startuml
abstract GuidHelper  #Orange {
  + {static} get(bool $trim = true) : string
  + {static} valid(string $guid, ?string $table = null, ...) : bool
  + {static} item(string $guid, string $table, ...) : mixed
  # {static} validate(string $guid) : bool
}

note right of GuidHelper::get
  Returns a GUIDv4 string
Thanks to Dave Pearson (and other)
https://www.php.net/manual/en/function.com-create-guid.php#119168
Uses the best cryptographically secure method
for all supported platforms with fallback to an older,
less secure version.

  since: 3.0.9
  return: string
end note

note right of GuidHelper::valid
  Validate the Globally Unique Identifier ( and check if table already has this identifier)

  since: 3.0.9
  return: bool
  
  arguments:
    string $guid
    ?string $table = null
    int $id
    ?string $component = null
end note

note right of GuidHelper::item
  get the item by guid in a table

  since: 3.0.9
  return: mixed
  
  arguments:
    string $guid
    string $table
    string|array $what = 'a.id'
    ?string $component = null
end note

note right of GuidHelper::validate
  Validate the Globally Unique Identifier
Thanks to Lewie
https://stackoverflow.com/a/1515456/1429677

  since: 3.0.9
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

