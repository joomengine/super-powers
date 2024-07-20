```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class SchemaChecker (Details)
> namespace: **VDM\Joomla\Abstraction**

```uml
@startuml
abstract SchemaChecker  #Orange {
  # ?Table $table
  # ?Schema $schema
  # $app
  + __construct(?Schema $schema = null, ?Table $table = null, ...)
  + run() : void
  # initializeInstances() : void
  # setSchemaInstance() : void
  # setTableInstance() : void
  # {abstract} getCode() : string
  # {abstract} getPowerPath() : string
  # {abstract} getSchemaClass() : string
  # {abstract} getTableClass() : string
}

note right of SchemaChecker::__construct
  Constructor.

  since: 3.2.2
  
  arguments:
    ?Schema $schema = null
    ?Table $table = null
    $app = null
end note

note left of SchemaChecker::run
  Make sure that the database schema is up-to-date.

  since: 3.2.2
  return: void
end note

note right of SchemaChecker::initializeInstances
  Initialize the needed class instances if needed

  since: 3.2.2
  return: void
end note

note left of SchemaChecker::setSchemaInstance
  set the schema class instance

  since: 3.2.2
  return: void
end note

note right of SchemaChecker::setTableInstance
  set the table class instance

  since: 3.2.2
  return: void
end note

note left of SchemaChecker::getCode
  Get the targeted component code

  since: 3.2.2
  return: string
end note

note right of SchemaChecker::getPowerPath
  Get the targeted component power path

  since: 3.2.2
  return: string
end note

note left of SchemaChecker::getSchemaClass
  Get the fully qualified name of the schema class.

  since: 3.2.2
  return: string
end note

note right of SchemaChecker::getTableClass
  Get the fully qualified name of the table class.

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
Super---5f0205fa_5c43_424a_af7d_abc943c17c8c---Power
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

