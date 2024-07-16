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

```uml
@startuml
abstract Grep  #Orange {
  + ?string $path
  + ?array $paths
  # array $order
  # Contents $contents
  # CMSApplication $app
  + __construct(Contents $contents, array $paths, ...)
  + get(string $guid, ?array $order = null, ...) : ?object
  + exists(string $guid, ?object $repo = null, ...) : bool
  + getRemoteGuid() : ?array
  + setBranchField(string $field) : void
  + setBranchDefaultName(?string $name) : void
  + setIndexPath(string $indexPath) : void
  + getRemoteIndex(string $guid) : ?object
  # {abstract} setRemoteIndexMessage(string $message, string $path, ...) : void
  # getFunctionName(string $name, string $type = 'search') : ?string
  # searchSingleRepo(string $guid, array $order, ...) : ?object
  # searchAllRepos(string $guid, array $order) : ?object
  # itemExistsInRepo(string $guid, object $repo, ...) : bool
  # itemExistsInAllRepos(string $guid, array $order) : bool
  # getBranchField() : string
  # getBranchDefaultName() : ?string
  # getBranchName(object $item) : ?string
  # getIndexPath() : string
  # itemExists(string $guid, object $repo, ...) : bool
  # existsLocally(string $guid) : ?object
  # existsRemotely(string $guid) : ?object
  # existsLocal(string $guid, object $path) : bool
  # existsRemote(string $guid, object $path) : bool
  # indexRemote(object $path) : void
  # indexLocal(object $path) : void
  # initializeInstances() : void
  # loadRemoteFile(string $organisation, string $repository, ...) : mixed
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

note left of Grep::get
  Get an item

  since: 3.2.2
  return: ?object
  
  arguments:
    string $guid
    ?array $order = null
    ?object $repo = null
end note

note right of Grep::exists
  Check if an item exists in any repo or in a specific repo.

  since: 3.2.2
  return: bool
  
  arguments:
    string $guid
    ?object $repo = null
    ?array $order = null
end note

note left of Grep::getRemoteGuid
  Get all remote GUID's

  since: 3.2.0
  return: ?array
end note

note right of Grep::setBranchField
  Set the branch field

  since: 3.2.2
  return: void
end note

note left of Grep::setBranchDefaultName
  Set the DEFAULT branch name (only used if branch field is not found)

  since: 3.2.2
  return: void
end note

note right of Grep::setIndexPath
  Set the index path

  since: 3.2.2
  return: void
end note

note left of Grep::getRemoteIndex
  Get the index of a repo

  since: 3.2.2
  return: ?object
end note

note right of Grep::setRemoteIndexMessage
  Set repository messages and errors based on given conditions.

  since: 3.2.0
  return: void
  
  arguments:
    string $message
    string $path
    string $repository
    string $organisation
    ?string $base
end note

note left of Grep::getFunctionName
  Get function name

  since: 3.2.0
  return: ?string
end note

note right of Grep::searchSingleRepo
  Search a single repository for an item

  since: 3.2.2
  return: ?object
  
  arguments:
    string $guid
    array $order
    object $repo
end note

note left of Grep::searchAllRepos
  Search all repositories for an item

  since: 3.2.2
  return: ?object
end note

note right of Grep::itemExistsInRepo
  Check if an item exists in a specific repository.

  since: 3.2.2
  return: bool
  
  arguments:
    string $guid
    object $repo
    array $order
end note

note left of Grep::itemExistsInAllRepos
  Check if an item exists in any of the repositories.

  since: 3.2.2
  return: bool
end note

note right of Grep::getBranchField
  Get the branch field

  since: 3.2.2
  return: string
end note

note left of Grep::getBranchDefaultName
  Get the branch default name

  since: 3.2.2
  return: ?string
end note

note right of Grep::getBranchName
  Get the branch name

  since: 3.2.2
  return: ?string
end note

note left of Grep::getIndexPath
  Get the index path

  since: 3.2.2
  return: string
end note

note right of Grep::itemExists
  Check if an item exists in a specific repo and target.

  since: 3.2.2
  return: bool
  
  arguments:
    string $guid
    object $repo
    string $target
end note

note left of Grep::existsLocally
  Check if item exists locally

  since: 3.2.2
  return: ?object
end note

note right of Grep::existsRemotely
  Check if item exists remotely

  since: 3.2.2
  return: ?object
end note

note left of Grep::existsLocal
  Check if item exists locally

  since: 3.2.2
  return: bool
end note

note right of Grep::existsRemote
  Check if item exists remotely

  since: 3.2.2
  return: bool
end note

note left of Grep::indexRemote
  Load the remote repository index of powers

  since: 3.2.0
  return: void
end note

note right of Grep::indexLocal
  Load the local repository index of powers

  since: 3.2.0
  return: void
end note

note left of Grep::initializeInstances
  Set path details

  since: 3.2.0
  return: void
end note

note right of Grep::loadRemoteFile
  Load the remote file

  since: 3.2.0
  return: mixed
  
  arguments:
    string $organisation
    string $repository
    string $path
    ?string $branch
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1401a167_0ce4_4f4a_afee_2d8b02ed339b---Power
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

