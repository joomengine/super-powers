```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Display (Details)
> namespace: **VDM\Joomla\Componentbuilder\File**

```uml
@startuml
class Display << (F,LightGreen) >> #RoyalBlue {
  # Item $item
  # Items $items
  # string $url
  # array $fileTypes
  # array $fileTypeTasks
  + __construct(Item $item, Items $items)
  + get(string $entity, string $target) : ?array
  # setFileTypeName(object $file) : void
  # setFileTypeTask(object $file) : void
  # setFileDownloadLink(object $file) : void
  # getFileTypeTask(object $data) : string
  # getFileType(?string $guid) : ?object
}

note right of Display::__construct
  Constructor.

  since: 5.0.2
end note

note right of Display::get
  Get the file data that belong to this entity

  since: 5.0.2
  return: ?array
end note

note right of Display::setFileTypeName
  Add the file type name to this file

  since: 5.0.2
  return: void
end note

note right of Display::setFileTypeTask
  Add the file type task to this file

  since: 5.0.2
  return: void
end note

note right of Display::setFileDownloadLink
  Add the file download link

  since: 5.0.2
  return: void
end note

note right of Display::getFileTypeTask
  Retrieves the file type task name

  since: 5.0.2
  return: string
end note

note right of Display::getFileType
  Retrieves the file type details

  since: 5.0.2
  return: ?object
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---d46c4667_378b_49e8_9782_ffb28d92415a---Power
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

