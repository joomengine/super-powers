```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# trait VarExport (Details)
> namespace: **VastDevelopmentMethod\Joomla\Abstraction\Registry\Traits**
```uml
@startuml
class VarExport << (T,Orange) >> #Turquoise {
  # int $indent
  + varExport(?string $path = null, int $indentation = 2) : ?string
  # convertIndent(array $matches) : string
}

note right of VarExport::varExport
  Method to export a set of values to a PHP array

  since: 3.4.0
  return: ?string
end note

note right of VarExport::convertIndent
  Method to convert found of grouped spaces to system indentation

  since: 3.4.0
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

