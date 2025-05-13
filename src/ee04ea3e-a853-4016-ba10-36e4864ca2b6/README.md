```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Base (Details)
> namespace: **VDM\Joomla\Abstraction\Remote**

```uml
@startuml
abstract Base  #Orange {
  # Config $config
  + __construct(Config $config)
  + table(string $table) : self
  + getTable() : string
  + area(string $area) : self
  + getArea() : ?string
  + setSettingsPath(string $settingsPath) : self
  + getSettingsPath() : string
  + setIndexPath(string $indexPath) : void
  + getIndexPath() : string
  + getPlaceholders() : array
  + getIndexMap() : array
  + getIndexHeader() : array
  + getSrcPath() : string
  + getMap() : array
  + getTitleName() : string
  + getGuidField() : string
  + getMainReadmePath() : string
  + getPrefixKey() : string
  + getSuffixKey() : string
  + mapItem(object $item) : object
  + getIndexItem(object $item) : ?array
  # index_map_IndexName(object $item) : ?string
  # index_map_ShortDescription(object $item) : ?string
  # index_map_IndexSettingsPath(object $item) : string
  # index_map_IndexPath(object $item) : string
  # index_map_IndexKey(object $item) : string
  # index_map_IndexGUID(object $item) : string
}

note right of Base::__construct
  Constructor.

  since: 5.1.1
end note

note left of Base::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Base::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of Base::area
  Set the current active area

  since: 3.2.2
  return: self
end note

note right of Base::getArea
  Get the current active area

  since: 3.2.2
  return: ?string
end note

note left of Base::setSettingsPath
  Set the settings path

  since: 3.2.2
  return: self
end note

note right of Base::getSettingsPath
  Get the settings path

  since: 3.2.2
  return: string
end note

note left of Base::setIndexPath
  Set the index path

  since: 3.2.2
  return: void
end note

note right of Base::getIndexPath
  Get the index path

  since: 3.2.2
  return: string
end note

note left of Base::getPlaceholders
  Get core placeholders

  since: 5.1.1
  return: array
end note

note right of Base::getIndexMap
  Get index map

  since: 5.1.1
  return: array
end note

note left of Base::getIndexHeader
  Get index header

  since: 5.1.1
  return: array
end note

note right of Base::getSrcPath
  Get src path

  since: 5.1.1
  return: string
end note

note left of Base::getMap
  Get map

  since: 5.1.1
  return: array
end note

note right of Base::getTitleName
  Get the table title name field

  since: 5.1.1
  return: string
end note

note left of Base::getGuidField
  Get GUID field

  since: 5.1.1
  return: string
end note

note right of Base::getMainReadmePath
  Get main readme path

  since: 5.1.1
  return: string
end note

note left of Base::getPrefixKey
  Get Prefix Key

  since: 5.1.1
  return: string
end note

note right of Base::getSuffixKey
  Get Suffix Key

  since: 5.1.1
  return: string
end note

note left of Base::mapItem
  Map a single item to its properties

  since: 3.2.2
  return: object
end note

note right of Base::getIndexItem
  Get index values

  since: 3.2.2
  return: ?array
end note

note left of Base::index_map_IndexName
  Get the item name for the index values

  since: 3.2.2
  return: ?string
end note

note right of Base::index_map_ShortDescription
  Get the item Short Description for the index values

  since: 5.0.3
  return: ?string
end note

note left of Base::index_map_IndexSettingsPath
  Get the item settings path for the index values

  since: 3.2.2
  return: string
end note

note right of Base::index_map_IndexPath
  Get the item path for the index values

  since: 3.2.2
  return: string
end note

note left of Base::index_map_IndexKey
  Get the item [POWER KEY] for the index values

  since: 3.2.2
  return: string
end note

note right of Base::index_map_IndexGUID
  Get the item GUID for the index values

  since: 3.2.2
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
Super---ee04ea3e_a853_4016_ba10_36e4864ca2b6---Power
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

