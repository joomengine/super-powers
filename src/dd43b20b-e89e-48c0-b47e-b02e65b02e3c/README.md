```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Config (Details)
> namespace: **VDM\Joomla\Abstraction\Remote**

```uml
@startuml
abstract Config  #Orange {
  # Table $core
  # string $table
  # ?string $area
  # array $ignore
  # array $map
  + __construct(Table $core)
  + getPlaceholders() : array
  + table(string $table) : self
  + getTable() : string
  + area(string $area) : self
  + getArea() : ?string
  + setSettingsPath(string $settingsPath) : self
  + getSettingsPath() : string
  + setIndexPath(string $indexPath) : void
  + getIndexPath() : string
  + getIndexMap() : array
  + getIndexHeader() : array
  + getSrcPath() : string
  + getMainReadmePath() : string
  + getMap() : array
  + getTitleName() : string
  + getGuidField() : string
  + getPrefixKey() : string
  + getSuffixKey() : string
}

note right of Config::__construct
  Constructor.

  since: 5.2.1
end note

note left of Config::getPlaceholders
  Get core placeholders

  since: 5.2.1
  return: array
end note

note right of Config::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note left of Config::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note right of Config::area
  Set the current active area

  since: 3.2.2
  return: self
end note

note left of Config::getArea
  Get the current active area

  since: 3.2.2
  return: ?string
end note

note right of Config::setSettingsPath
  Set the settings path

  since: 3.2.2
  return: self
end note

note left of Config::getSettingsPath
  Get the settings path

  since: 3.2.2
  return: string
end note

note right of Config::setIndexPath
  Set the index path

  since: 3.2.2
  return: void
end note

note left of Config::getIndexPath
  Get the index path

  since: 3.2.2
  return: string
end note

note right of Config::getIndexMap
  Get index map

  since: 5.2.1
  return: array
end note

note left of Config::getIndexHeader
  Get index header

  since: 5.2.1
  return: array
end note

note right of Config::getSrcPath
  Get src path

  since: 5.2.1
  return: string
end note

note left of Config::getMainReadmePath
  Get main readme path

  since: 5.2.1
  return: string
end note

note right of Config::getMap
  Get map
Builds (and caches) an associative map of the table’s field names,
automatically removing any fields defined in $this->ignore.

  since: 5.2.1
  return: array
end note

note left of Config::getTitleName
  Get the table title name field

  since: 5.2.1
  return: string
end note

note right of Config::getGuidField
  Get GUID field

  since: 5.2.1
  return: string
end note

note left of Config::getPrefixKey
  Get Prefix Key

  since: 5.2.1
  return: string
end note

note right of Config::getSuffixKey
  Get Suffix Key

  since: 5.2.1
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---dd43b20b_e89e_48c0_b47e_b02e65b02e3c---Power
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

