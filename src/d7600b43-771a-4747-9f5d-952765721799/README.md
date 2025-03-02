```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class UploadHelper (Details)
> namespace: **VDM\Joomla\Utilities**

```uml
@startuml
abstract UploadHelper  #Orange {
  + {static} get(string $field, string $type, ...) : ?array
  + {static} getError(bool $toString = false) : array|string
  # {static} check(array $upload, string $type) : ?array
  # {static} remove(string $fullPath) : bool
  # {static} setError(string $message) : void
}

note right of UploadHelper::get
  Get file/files from a HTTP upload.

  since: 3.0.11
  return: ?array
  
  arguments:
    string $field
    string $type
    string $filter = null
    string $path = null
end note

note right of UploadHelper::getError
  Get the errors

  since: 3.0.11
  return: array|string
end note

note right of UploadHelper::check
  Check a file and verifies it as a allowed file format file

  since: 3.0.11
  return: ?array
end note

note right of UploadHelper::remove
  Clean up temporary uploaded file

  since: 3.0.11
  return: bool
end note

note right of UploadHelper::setError
  Set the errors

  since: 3.0.11
  return: void
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---d7600b43_771a_4747_9f5d_952765721799---Power
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

