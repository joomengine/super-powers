```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Import (Details)
> namespace: **VDM\Joomla\Abstraction\Console**
> extends: **AbstractCommand**

```uml
@startuml
abstract Import  #Orange {
  # Items $items
  # ImportEngine $import
  # string $queueTable
  # string $targetName
  # string $targetImportClass
  # static $defaultName
  + __construct(?string $name = null)
  # configure() : void
  # doExecute(InputInterface $input, OutputInterface $output) : int
}

note right of Import::__construct
  Constructor.

  since: 5.0.2
end note

note right of Import::configure
  Configures the CLI command, setting up the description and help text.
This command parses the import queue and imports items that are still in the queue.
It is useful for automatically processing pending item imports in the virtual warehouse.

  since: 5.0.2
  return: void
end note

note right of Import::doExecute
  Executes the CLI command, processing each spreadsheet in the import queue.

  since: 5.0.2
  return: int
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---85321deb_5c3a_401b_9ce1_039a746add51---Power
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

