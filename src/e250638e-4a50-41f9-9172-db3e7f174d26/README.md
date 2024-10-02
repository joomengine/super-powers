```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Exporter (Details)
> namespace: **VDM\Joomla\Componentbuilder\Spreadsheet**

```uml
@startuml
class Exporter << (F,LightGreen) >> #RoyalBlue {
  - User $user
  - Spreadsheet $spreadsheet
  - string $fileName
  - string $fileType
  - string $subjectTab
  - array $headerStyles
  - array $sideStyles
  - array $normalStyles
  + __construct()
  + export(array $rows, ?string $fileName = null, ...) : void
  - setDocumentProperties(string $creator, ?string $title = null, ...) : void
  - populateSpreadsheet(array $rows) : void
  - determineXlsMode(int $size) : int
  - applyStyles(Worksheet $sheet, int $rowIndex, ...) : void
  - outputSpreadsheet() : void
}

note right of Exporter::__construct
  SpreadsheetExporter constructor.
Initializes styles and the Spreadsheet object.

  since: 3.2.0
end note

note right of Exporter::export
  Prepares the spreadsheet with data.

  since: 3.2.0
  return: void
  
  arguments:
    array $rows
    ?string $fileName = null
    ?string $title = null
    ?string $subjectTab = null
    string $creator = 'Vast Development Method'
    ?string $description = null
    ?string $category = null
    ?string $keywords = null
    ?string $modified = null
end note

note right of Exporter::setDocumentProperties
  Set the document properties for the spreadsheet.

  since: 3.2.0
  return: void
  
  arguments:
    string $creator
    ?string $title = null
    ?string $description = null
    ?string $category = null
    ?string $keywords = null
    ?string $modified = null
end note

note right of Exporter::populateSpreadsheet
  Populate the spreadsheet with the provided rows.

  since: 3.2.0
  return: void
end note

note right of Exporter::determineXlsMode
  Determine the XLS mode based on the number of rows.

  since: 3.2.0
  return: int
end note

note right of Exporter::applyStyles
  Apply styles to the cells based on the row and column index.

  since: 3.2.0
  return: void
  
  arguments:
    Worksheet $sheet
    int $rowIndex
    string $columnIndex
    int $xlsMode
end note

note right of Exporter::outputSpreadsheet
  Output the spreadsheet as an Excel or CSV file.

  since: 3.2.0
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
Super---e250638e_4a50_41f9_9172_db3e7f174d26---Power
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

