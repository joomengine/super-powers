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

