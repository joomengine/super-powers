```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class PluginHelper (Details)
> namespace: **VDM\Joomla\Utilities\String**

```uml
@startuml
abstract PluginHelper  #Orange {
  + {static} safeFolderName(string $codeName, string $group) : string
  + {static} safeClassName(string $codeName, string $group) : string
  + {static} safeInstallClassName(string $codeName, string $group) : string
  + {static} safeLangPrefix(string $codeName, string $group) : string
}

note right of PluginHelper::safeFolderName
  Making plugin folder name safe

  since: 3.0.9
  return: string
end note

note right of PluginHelper::safeClassName
  Making plugin class name safe

  since: 3.0.9
  return: string
end note

note right of PluginHelper::safeInstallClassName
  Making plugin install class name safe

  since: 3.0.9
  return: string
end note

note right of PluginHelper::safeLangPrefix
  Making language prefix safe

  since: 3.0.9
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
Super---3cf76fbf_fd95_4a33_878e_7aff6d36b7f6---Power
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

