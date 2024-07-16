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

```uml
@startuml
class Subform << (F,LightGreen) >> #RoyalBlue {
  # Items $items
  # string $table
  + __construct(Items $items, ?string $table = null)
  + table(string $table) : self
  + get(string $linkValue, string $linkKey, ...) : ?array
  + set(mixed $items, string $indexKey, ...) : bool
  + getTable() : string
  - purge(array $items, string $indexKey, ...) : void
  - converter(array $items, array $keySet, ...) : array
  - process(mixed $items, string $indexKey, ...) : array
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
    array $get
end note

note left of Subform::set
  Set a subform items

  since: 3.2.2
  return: bool
  
  arguments:
    mixed $items
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
    mixed $items
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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---85785701_07b2_4f81_bc1e_0f423700c254---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

