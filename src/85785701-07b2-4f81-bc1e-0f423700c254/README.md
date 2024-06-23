```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Subform (Details)
> namespace: **VDM\Joomla\Data**
> extends: ****
```uml
@startuml
class Subform << (F,LightGreen) >> #RoyalBlue {
  # Items $items
  # string $table
  + __construct(Items $items, ?string $table = null)
  + table(string $table) : self
  + get(string $linkValue, string $linkKey, ...) : ?array
  + set(array $items, string $indexKey, ...) : bool
  + getTable() : string
  - purge(array $items, string $indexKey, ...) : void
  - converter(array $items, array $keySet, ...) : array
  - process(array $items, string $indexKey, ...) : array
  - setGuid(string $key, bool $trim = true) : string
}

note right of Subform::__construct
  Constructor.

  since: 3.2.2
end note

note left of Subform::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Subform::get
  Get a subform items

  since: 3.2.2
  return: ?array
  
  arguments:
    string $linkValue
    string $linkKey
    string $field
    array $set
end note

note left of Subform::set
  Set a subform items

  since: 3.2.2
  return: bool
  
  arguments:
    array $items
    string $indexKey
    string $linkKey
    string $linkValue
end note

note right of Subform::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of Subform::purge
  Purge all items no longer in subform

  since: 3.2.2
  return: void
  
  arguments:
    array $items
    string $indexKey
    string $linkKey
    string $linkValue
end note

note right of Subform::converter
  Filters the specified keys from an array of objects or arrays, converts them to arrays,
and sets them by association with a specified key and an incrementing integer.

  since: 3.2.2
  return: array
  
  arguments:
    array $items
    array $keySet
    string $field
end note

note left of Subform::process
  Processes an array of arrays based on the specified key.

  since: 3.2.2
  return: array
  
  arguments:
    array $items
    string $indexKey
    string $linkKey
    string $linkValue
end note

note right of Subform::setGuid
  Returns a GUIDv4 string
Thanks to Dave Pearson (and other)
https://www.php.net/manual/en/function.com-create-guid.php#119168
Uses the best cryptographically secure method
for all supported platforms with fallback to an older,
less secure version.

  since: 3.0.9
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

