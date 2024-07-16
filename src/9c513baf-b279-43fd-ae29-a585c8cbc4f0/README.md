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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---9c513baf_b279_43fd_ae29_a585c8cbc4f0---Power
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

