```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface GrepInterface (Details)
> namespace: **VDM\Joomla\Interfaces**
> extends: ****
```uml
@startuml
interface GrepInterface  #Lavender {
  + getRemotePowersGuid() : ?array
  + setBranchField(string $field) : void
  + get(string $guid, array $order = ['local', 'remote']) : ?object
}

note right of GrepInterface::getRemotePowersGuid
  Get all remote powers GUID's

  since: 3.2.0
  return: ?array
end note

note right of GrepInterface::setBranchField
  Set the branch field

  since: 3.2.2
  return: void
end note

note right of GrepInterface::get
  Get a power

  since: 3.2.0
  return: ?object
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

