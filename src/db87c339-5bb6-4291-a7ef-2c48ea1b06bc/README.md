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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---db87c339_5bb6_4291_a7ef_2c48ea1b06bc---Power
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

