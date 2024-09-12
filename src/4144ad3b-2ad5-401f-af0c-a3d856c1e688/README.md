```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Handler (Details)
> namespace: **VDM\Joomla\Componentbuilder\File**
> extends: **UploadHelper**

```uml
@startuml
class Handler << (F,LightGreen) >> #RoyalBlue {
  + setUseStreams(bool $useStreams) : self
  + setAllowUnsafe(bool $allowUnsafe) : self
  + setSafeFileOptions(array $safeFileOptions) : self
  + setEnqueueError(bool $enqueueError) : self
  + setLegalFormats(array $legalFormats) : self
  + getFile(string $field, string $type, ...) : ?array
  + getErrors(bool $toString = true) : string|array
}

note right of Handler::setUseStreams
  Set the $useStreams property to use streams for file handling

  since: 5.0.3
  return: self
end note

note right of Handler::setAllowUnsafe
  Set the $allowUnsafe property to allow or disallow unsafe file uploads.

  since: 5.0.3
  return: self
end note

note right of Handler::setSafeFileOptions
  Set the $safeFileOptions property to define options for file safety checks.

  since: 5.0.3
  return: self
end note

note right of Handler::setEnqueueError
  Set the $enqueueError property to control error reporting behavior.

  since: 5.0.3
  return: self
end note

note right of Handler::setLegalFormats
  Set the $legalFormats property to define legal file formats.

  since: 5.0.3
  return: self
end note

note right of Handler::getFile
  Get a file from the input based on field name and file type, then process it.

  since: 3.0.11
  return: ?array
  
  arguments:
    string $field
    string $type
    string $filter = null
    string $path = null
end note

note right of Handler::getErrors
  Get the error messages as a string.

  since: 5.0.3
  return: string|array
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---4144ad3b_2ad5_401f_af0c_a3d856c1e688---Power
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

