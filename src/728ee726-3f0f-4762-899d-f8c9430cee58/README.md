```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Get (Details)
> namespace: **VDM\Joomla\Abstraction\Remote**
> extends: **Base**

```uml
@startuml
abstract Get  #Orange {
  # Grep $grep
  # Item $item
  + __construct(Config $config, Grep $grep, ...)
  + init(array $items, ?object $repo = null) : array
  + path(string $guid) : ?object
  + paths() : ?array
  + list(?string $repo = null) : ?array
  + reset(array $items) : bool
  + item(string $guid, array $order = ['remote', 'local'], ...) : bool
}

note right of Get::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Config $config
    Grep $grep
    Item $item
    ?string $table = null
end note

note right of Get::init
  Initializes and categorizes items by checking their existence in the local database
and optionally retrieving them from a remote repository if not found locally.
This method processes an array of unique identifiers (`$items`) and checks each item:
- If found in the local database: categorized under 'local'.
- If not found locally and not available remotely: categorized under 'not_found'.
- If retrieved from the remote repository: categorized under 'added' and stored locally.
local: array<string, string>,
not_found: array<string, string>,
added: array<string, string>
} Associative arrays indexed by GUIDs indicating the status of each item:
- 'local': Items already present in the local database.
- 'not_found': Items not found locally or remotely.
- 'added': Items successfully retrieved from the remote repository and stored.

  since: 5.1.1
  return: array
end note

note right of Get::path
  Get the path/repo object

  since: 5.1.1
  return: ?object
end note

note right of Get::paths
  get all the available paths for this area

  since: 5.1.1
  return: ?array
end note

note right of Get::list
  Get all available items for the given repository, or all repositories if none specified.

  since: 5.1.1
  return: ?array
end note

note right of Get::reset
  Reset the items

  since: 3.2.0
  return: bool
end note

note right of Get::item
  Load an item

  since: 3.2.0
  return: bool
  
  arguments:
    string $guid
    array $order = ['remote', 'local']
    ?object $repo = null
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---728ee726_3f0f_4762_899d_f8c9430cee58---Power
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

