```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Import (Details)
> namespace: **VDM\Joomla\Componentbuilder\Service\Item**

```uml
@startuml
class Import  #Gold {
  + register(Container $container) : void
  + getItemImport(Container $container) : ItemImport
  + getParentTable(Container $container) : ParentTable
  + getJoinTables(Container $container) : JoinTables
  + getRowDataArray(Container $container) : RowDataArray
}

note right of Import::register
  Registers the service provider with a DI container.

  since: 5.0.2
  return: void
end note

note right of Import::getItemImport
  Get The Import Class.

  since: 5.0.2
  return: ItemImport
end note

note right of Import::getParentTable
  Get The ParentTable Class.

  since: 5.0.2
  return: ParentTable
end note

note right of Import::getJoinTables
  Get The JoinTables Class.

  since: 5.0.2
  return: JoinTables
end note

note right of Import::getRowDataArray
  Get The RowDataArray Class.

  since: 5.0.2
  return: RowDataArray
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---b5184f80_613e_46c8_b40a_b60de779bb78---Power
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

