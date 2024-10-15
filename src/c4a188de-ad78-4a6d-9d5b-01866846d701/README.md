```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Spreadsheet (Details)
> namespace: **VDM\Joomla\Componentbuilder\Service**

```uml
@startuml
class Spreadsheet  #Gold {
  + register(Container $container) : void
  + getHeader(Container $container) : Header
  + getExporter(Container $container) : Exporter
  + getImporter(Container $container) : Importer
  + getFileReader(Container $container) : FileReader
}

note right of Spreadsheet::register
  Registers the service provider with a DI container.

  since: 5.0.3
  return: void
end note

note right of Spreadsheet::getHeader
  Get The Header Class.

  since: 5.0.3
  return: Header
end note

note right of Spreadsheet::getExporter
  Get The Exporter Class.

  since: 5.0.3
  return: Exporter
end note

note right of Spreadsheet::getImporter
  Get The Importer Class.

  since: 5.0.3
  return: Importer
end note

note right of Spreadsheet::getFileReader
  Get The FileReader Class.

  since: 5.0.3
  return: FileReader
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---c4a188de_ad78_4a6d_9d5b_01866846d701---Power
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

