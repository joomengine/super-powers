```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Status (Details)
> namespace: **VDM\Joomla\Componentbuilder\Import**

```uml
@startuml
class Status << (F,LightGreen) >> #RoyalBlue {
  # Item $item
  # string $table
  # string $fieldName
  + __construct(Item $item, ?string $table = null, ...)
  + set(int $status, string $guid) : void
  + table(string $table) : self
  + field(string $fieldName) : self
  + getTable() : string
  + getField() : string
}

note right of Status::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Item $item
    ?string $table = null
    ?string $field = null
end note

note right of Status::set
  Updates the status in the database.
This method updates the import status in the database based on the result of the import process.
Status codes:
- 2: Being Processed.
- 3: Import completed successfully.
- 4: Import completed with errors.

  since: 5.0.2
  return: void
end note

note right of Status::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of Status::field
  Set the current target status field name

  since: 3.2.2
  return: self
end note

note right of Status::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note right of Status::getField
  Get the current target status field name

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
Super---d2a859ac_3f2a_4f69_a77f_f118b2e0a459---Power
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

