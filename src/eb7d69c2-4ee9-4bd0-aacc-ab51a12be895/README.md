```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Set (Details)
> namespace: **VDM\Joomla\Abstraction\Remote**

```uml
@startuml
abstract Set  #Orange {
  # Grep $grep
  # Items $items
  # ItemReadme $itemReadme
  # MainReadme $mainReadme
  # Git $git
  + array $repos
  # string $table
  # string $area
  # array $map
  # array $settings
  # array $repoPlaceholders
  + __construct(array $repos, Grep $grep, ...)
  + table(string $table) : self
  + area(string $area) : self
  + setSettingsPath(string $settingsPath) : self
  + setIndexSettingsPath(string $settingsIndexPath) : self
  + items(array $guids) : bool
  # {abstract} updateItem(object $item, object $existing, ...) : bool
  # {abstract} createItem(object $item, object $repo) : void
  # {abstract} updateItemReadme(object $item, object $existing, ...) : void
  # {abstract} createItemReadme(object $item, object $repo) : void
  # getTable() : string
  # getArea() : string
  # saveRepoMainSettings(array $repoBucket) : void
  # isInvalidIndexRepo(mixed $repo, mixed $settings) : bool
  # mergeIndexSettings(string $repoGuid, array $settings) : array
  # updateIndexMainFile(object $repo, string $path, ...) : void
  # getLocalItems(array $guids) : ?array
  # mapItem(object $item) : object
  # save(object $item) : void
  # setRepoPlaceholders(object $repo) : void
  # updatePlaceholders(string $string) : string
  # getIndexItem(object $item) : ?array
  # canWrite() : bool
  # targetRepo(object $item, object $repo) : bool
  # areObjectsEqual(?object $obj1, ?object $obj2) : bool
  # getSettingsPath() : string
  # getIndexSettingsPath() : string
  # index_map_IndexName(object $item) : ?string
  # index_map_IndexSettingsPath(object $item) : string
  # index_map_IndexPath(object $item) : string
  # index_map_IndexKey(object $item) : string
  # index_map_IndexGUID(object $item) : string
}

note right of Set::__construct
  Constructor.

  since: 3.2.2
  
  arguments:
    array $repos
    Grep $grep
    Items $items
    ItemReadme $itemReadme
    MainReadme $mainReadme
    Git $git
    ?string $table = null
    ?string $settingsPath = null
    ?string $settingsIndexPath = null
end note

note left of Set::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Set::area
  Set the current active area

  since: 3.2.2
  return: self
end note

note left of Set::setSettingsPath
  Set the settings path

  since: 3.2.2
  return: self
end note

note right of Set::setIndexSettingsPath
  Set the index settings path

  since: 3.2.2
  return: self
end note

note left of Set::items
  Save items remotely

  since: 3.2.2
  return: bool
end note

note right of Set::updateItem
  update an existing item (if changed)

  since: 3.2.2
  return: bool
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note left of Set::createItem
  create a new item

  since: 3.2.2
  return: void
end note

note right of Set::updateItemReadme
  update an existing item readme

  since: 3.2.2
  return: void
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note left of Set::createItemReadme
  create a new item readme

  since: 3.2.2
  return: void
end note

note right of Set::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of Set::getArea
  Get the current active area

  since: 3.2.2
  return: string
end note

note right of Set::saveRepoMainSettings
  Update/Create the repo main readme and index

  since: 3.2.2
  return: void
end note

note left of Set::isInvalidIndexRepo
  Validate repository and settings

  since: 3.2.2
  return: bool
end note

note right of Set::mergeIndexSettings
  Merge current settings with new settings

  since: 3.2.2
  return: array
end note

note left of Set::updateIndexMainFile
  Update a file in the repository

  since: 3.2.2
  return: void
  
  arguments:
    object $repo
    string $path
    string $content
    string $message
end note

note right of Set::getLocalItems
  Get items

  since: 3.2.2
  return: ?array
end note

note left of Set::mapItem
  Map a single item to its properties

  since: 3.2.2
  return: object
end note

note right of Set::save
  Save an item remotely

  since: 3.2.2
  return: void
end note

note left of Set::setRepoPlaceholders
  Set the Repo Placeholders

  since: 5.0.3
  return: void
end note

note right of Set::updatePlaceholders
  Update Placeholders in String

  since: 5.0.3
  return: string
end note

note left of Set::getIndexItem
  Get index values

  since: 3.2.2
  return: ?array
end note

note right of Set::canWrite
  check that we have an active repo towards which we can write data

  since: 3.2.2
  return: bool
end note

note left of Set::targetRepo
  check that we have a target repo of this item

  since: 5.0.3
  return: bool
end note

note right of Set::areObjectsEqual
  Checks if two objects are equal by comparing their properties and values.
This method converts both input objects to associative arrays, sorts the arrays by keys,
and compares these sorted arrays.
If the arrays are identical, the objects are considered equal.

  since: 5.0.2
  return: bool
end note

note left of Set::getSettingsPath
  Get the settings path

  since: 3.2.2
  return: string
end note

note right of Set::getIndexSettingsPath
  Get the index settings path

  since: 3.2.2
  return: string
end note

note left of Set::index_map_IndexName
  Get the item name for the index values

  since: 3.2.2
  return: ?string
end note

note right of Set::index_map_IndexSettingsPath
  Get the item settings path for the index values

  since: 3.2.2
  return: string
end note

note left of Set::index_map_IndexPath
  Get the item path for the index values

  since: 3.2.2
  return: string
end note

note right of Set::index_map_IndexKey
  Get the item JPK for the index values

  since: 3.2.2
  return: string
end note

note left of Set::index_map_IndexGUID
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
Super---eb7d69c2_4ee9_4bd0_aacc_ab51a12be895---Power
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

