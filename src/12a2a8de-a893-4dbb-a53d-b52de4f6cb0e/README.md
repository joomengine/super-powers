```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Type (Details)
> namespace: **VDM\Joomla\Componentbuilder\File**

```uml
@startuml
class Type << (F,LightGreen) >> #RoyalBlue {
  # Item $item
  # array $fileTypes
  + __construct(Item $item)
  + get(string $guid, string $target) : ?array
  + load(string $guid, string $target) : ?array
  + details(string $guid) : ?object
  # validTarget(object $data, string $target) : bool
  # getFieldName(object $data) : string
  # getAllow(object $data) : string
  # getAllowSpan(object $data) : string
  # getAllowFormats(object $data) : ?array
  # getFileTypePath(object $data) : ?string
  # getLastFolderName(string $path) : ?string
}

note right of Type::__construct
  Constructor.

  since: 5.0.2
end note

note left of Type::get
  Retrieves the file type details (ajax)

  since: 5.0.2
  return: ?array
end note

note right of Type::load
  Retrieves the file type details (upload)

  since: 5.0.2
  return: ?array
end note

note left of Type::details
  Retrieves the file type details

  since: 5.0.2
  return: ?object
end note

note right of Type::validTarget
  Valid if this is a correct target trying to call this file type

  since: 5.0.2
  return: bool
end note

note left of Type::getFieldName
  Retrieves the field name

  since: 5.0.2
  return: string
end note

note right of Type::getAllow
  Retrieves the allow formats (for script)

  since: 5.0.2
  return: string
end note

note left of Type::getAllowSpan
  Retrieves the allow formats (for span)

  since: 5.0.2
  return: string
end note

note right of Type::getAllowFormats
  Retrieves the allow formats

  since: 5.0.2
  return: ?array
end note

note left of Type::getFileTypePath
  Retrieves the file type path based on provided data.
Performs safety checks and returns either a cleaned path if it exists
and is a writable directory, or constructs a relative path to the 'images' folder
based on the last folder name from the given path.

  since: 5.0.2
  return: ?string
end note

note right of Type::getLastFolderName
  Recursively retrieves the last folder name from a given path, ignoring any file names.
If the last part of the path contains a dot (indicating a file), it moves up the directory tree
until it finds a valid folder name. Returns null if no valid folder is found.

  since: 5.0.2
  return: ?string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---12a2a8de_a893_4dbb_a53d_b52de4f6cb0e---Power
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

