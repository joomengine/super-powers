```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Grep (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: ****
```uml
@startuml
abstract Grep  #Orange {
  + ?string $path
  + ?array $paths
  # array $order
  # Contents $contents
  # CMSApplication $app
  + __construct(Contents $contents, array $paths, ...)
  + getRemotePowersGuid() : ?array
  + get(string $guid, ?array $order = null) : ?object
  # {abstract} remoteIndex(object $path) : void
  # getFunctionName(string $name) : ?string
  # init() : void
}

note right of Grep::__construct
  Constructor.

  since: 3.2.0
  
  arguments:
    Contents $contents
    array $paths
    ?string $path = null
    ?CMSApplication $app = null
end note

note right of Grep::getRemotePowersGuid
  Get all remote powers GUID's

  since: 3.2.0
  return: ?array
end note

note right of Grep::get
  Get a power

  since: 3.2.0
  return: ?object
end note

note right of Grep::remoteIndex
  Load the remote repository index of powers

  since: 3.2.0
  return: void
end note

note right of Grep::getFunctionName
  Get function name

  since: 3.2.0
  return: ?string
end note

note right of Grep::init
  Set path details

  since: 3.2.0
  return: void
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

