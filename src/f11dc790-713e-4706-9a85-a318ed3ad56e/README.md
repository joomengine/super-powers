```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class MimeHelper (Details)
> namespace: **VDM\Joomla\Utilities**

```uml
@startuml
abstract MimeHelper  #Orange {
  + {static} extension(string $file) : string
  + {static} mimeType(string $file) : string
  # {static} mimeTypeFilename(string $file) : string
  + {static} getFileExtensions(string $target = null, boolean $sorted = false) : array
}

note right of MimeHelper::extension
  Get the file extension from a full path OR file name.

  since: 5.0.3
  return: string
end note

note right of MimeHelper::mimeType
  Get the mime type based on the full file path.

  since: 5.0.3
  return: string
end note

note right of MimeHelper::mimeTypeFilename
  Get the mime type based on the file extension from a file name.

  since: 5.0.3
  return: string
end note

note right of MimeHelper::getFileExtensions
  Get the file extensions

  return: array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---f11dc790_713e_4706_9a85_a318ed3ad56e---Power
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

