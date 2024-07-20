```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface SetInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Remote**

```uml
@startuml
interface SetInterface  #Lavender {
  + table(string $table) : self
  + area(string $area) : self
  + setSettingsPath(string $settingsPath) : self
  + setIndexSettingsPath(string $settingsIndexPath) : self
  + items(array $guids) : bool
}

note right of SetInterface::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of SetInterface::area
  Set the current active area

  since: 3.2.2
  return: self
end note

note right of SetInterface::setSettingsPath
  Set the settings path

  since: 3.2.2
  return: self
end note

note right of SetInterface::setIndexSettingsPath
  Set the index settings path

  since: 3.2.2
  return: self
end note

note right of SetInterface::items
  Save items remotely

  since: 3.2.2
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
Super---e335dd61_c2f9_4536_8ed9_aec5edee0b26---Power
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

