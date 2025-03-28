```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class FileHelper (Details)
> namespace: **VDM\Joomla\Utilities**

```uml
@startuml
abstract FileHelper  #Orange {
  # static $curlError
  + {static} zip(string $workingDirectory, string $filepath) : bool
  + {static} getContent(string $path, mixed $none = '') : string
  + {static} write(string $path, string $data) : bool
  + {static} getPaths(string $folder, array $fileTypes = array('\.php') : array|null
  + {static} getPath(string $type = 'path', string $target = 'filepath', ...) : string
  + {static} exists(string $path) : bool
}

note right of FileHelper::zip
  The zipper method

  since: 3.0.9
  return: bool
end note

note right of FileHelper::getContent
  get the content of a file

  since: 3.0.9
  return: string
end note

note right of FileHelper::write
  Write a file to the server safely and efficiently.
This function will always overwrite the existing file with new data.

  since: 3.0.9
  return: bool
end note

note right of FileHelper::getPaths
  get all the file paths in folder and sub folders

  since: 3.0.9
  return: array|null
end note

note right of FileHelper::getPath
  Get the file path or url

  since: 3.0.9
  return: string
  
  arguments:
    string $type = 'path'
    string $target = 'filepath'
    string $fileType = null
    string $key = ''
    string $default = ''
    bool $createIfNotSet = true
end note

note right of FileHelper::exists
  Check if file exist

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
Super---a223b31e_ea1d_4cdf_92ae_5f9becffaff0---Power
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

