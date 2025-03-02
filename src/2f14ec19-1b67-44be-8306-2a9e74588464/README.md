```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Import (Details)
> namespace: **VDM\Joomla\Componentbuilder\Item**

```uml
@startuml
class Import << (F,LightGreen) >> #RoyalBlue {
  # int $startingRow
  # string $parentTable
  # string $parentKey
  # string $parentJoinKey
  # string $linkField
  # string $importTable
  # Status $status
  # Message $message
  # Mapper $mapper
  # Data $data
  # Importer $importer
  # RowData $rowdata
  # Row $row
  # ParentTable $parentTableClass
  # JoinTables $joinTables
  # Assessor $assessor
  # Item $item
  + __construct(Status $status, Message $message, ...)
  + data(object $import) : void
  + message() : object
  - prematureError(string $guid, string $message) : void
  - import() : ?string
  - getFile(string $file) : ?object
}

note right of Import::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Status $status
    Message $message
    Mapper $mapper
    Data $data
    Importer $importer
    RowData $rowdata
    Row $row
    ParentTable $parentTableClass
    JoinTables $joinTables
    Assessor $assessor
    Item $item
end note

note right of Import::data
  The trigger function called from the CLI to start the item import on a spreadsheet

  since: 5.0.2
  return: void
end note

note right of Import::message
  The message of the last import event

  since: 5.0.2
  return: object
end note

note right of Import::prematureError
  This is trigger on premature error

  since: 5.0.2
  return: void
end note

note right of Import::import
  Save the item calculated values

  since: 5.0.2
  return: ?string
end note

note right of Import::getFile
  Get the file details

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
Super---2f14ec19_1b67_44be_8306_2a9e74588464---Power
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

