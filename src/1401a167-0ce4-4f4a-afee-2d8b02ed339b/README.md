### JCB! Power
# abstract class Grep (Details)
> namespace: **VDM\Joomla\Abstraction**

```uml
@startuml

abstract Grep  #Orange {
  + ?string $path
  + ?array $paths
  # ?string $target
  # string $entity
  # array $order
  # Config $config
  # Contents $contents
  # Resolve $resolve
  # Tracker $tracker
  # CMSApplication $app
  + __construct(Config $config, Contents $contents, ...)
  + get(string $guid, ?array $order = null, ...) : ?object
  + getPath(string $guid) : ?object
  + getPaths() : ?array
  + getPathsIndexes() : ?array
  + getPathIndexes(string $guid) : ?object
  + getRemoteIndex(string $guid) : ?object
  + getNetworkTarget() : ?string
  + exists(string $guid, ?object $repo = null, ...) : bool
  + setBranchField(string $field) : void
  + setBranchDefaultName(?string $name) : void
  + setIndexPath(string $indexPath) : void
  + loadApi(Api $api, ?string $base, ...) : void
  # {abstract} setRemoteIndexMessage(string $message, string $path, ...) : void
  # setRepoItemSha(object $power, object $path, ...) : void
  # getFunctionName(string $name, string $type = 'search') : ?string
  # searchSingleRepo(string $guid, array $order, ...) : ?object
  # searchAllRepos(string $guid, array $order) : ?object
  # itemExistsInRepo(string $guid, object $repo, ...) : bool
  # itemExistsInAllRepos(string $guid, array $order) : bool
  # getBranchField() : string
  # getBranchDefaultName() : ?string
  # getBranchName(object $item) : ?string
  # getIndexPath() : string
  # getSettingsName() : string
  # getGuidField() : string
  # getItemReadmeName() : string
  # hasItemReadme() : bool
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

  since: 3.2.1
  
  arguments:
    Config $config
    Contents $contents
    Resolve $resolve
    Tracker $tracker
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

note right of Grep::getPath
  Get the path/repo object

  since: 5.1.1
  return: ?object
end note

note left of Grep::getPaths
  Get all the available repos

  since: 5.1.1
  return: ?array
end note

note right of Grep::getPathsIndexes
  Get all paths + indexes (the active set)

  since: 5.1.1
  return: ?array
end note

note left of Grep::getPathIndexes
  Get the a path + indexes

  since: 5.1.1
  return: ?object
end note

note right of Grep::getRemoteIndex
  Get the index of a repo

  since: 3.2.2
  return: ?object
end note

note left of Grep::getNetworkTarget
  Get the network target name

  since: 5.1.1
  return: ?string
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

note left of Grep::setBranchField
  Set the branch field

  since: 3.2.2
  return: void
end note

note right of Grep::setBranchDefaultName
  Set the DEFAULT branch name (only used if branch field is not found)

  since: 3.2.2
  return: void
end note

note left of Grep::setIndexPath
  Set the index path

  since: 3.2.2
  return: void
end note

note right of Grep::loadApi
  Loads API config using the provided base URL and token.
This method checks if the base URL contains 'https://git.vdm.dev/'.
If it does, it uses the token as is (which may be null).
If not, it ensures the token is not null by defaulting to an empty string.

  since: 5.0.4
  return: void
  
  arguments:
    Api $api
    ?string $base
    ?string $token
end note

note left of Grep::setRemoteIndexMessage
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

note right of Grep::setRepoItemSha
  Injects metadata SHA into the power params object.

  since: 5.1.1
  return: void
  
  arguments:
    object $power
    object $path
    string $targetPath
    string $branch
    string $sourceKey
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

note right of Grep::getSettingsName
  Get the settings name

  since: 3.2.2
  return: string
end note

note left of Grep::getGuidField
  Get GUID field

  since: 5.1.1
  return: string
end note

note right of Grep::getItemReadmeName
  Get GUID field

  since: 5.1.1
  return: string
end note

note left of Grep::hasItemReadme
  Has item readme

  since: 5.1.1
  return: bool
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

The **Power** feature in JCB allows you to write PHP classes and their implementations,
making it easy to include them in your Joomla project. JCB handles linking, autoloading,
namespacing, and folder structure creation for you.

By using the **SPK** (Super Power Key) in your custom code (replacing the class name
in your code with the SPK), JCB will automatically pull the Power from the repository
into your project. This makes it available in your JCB instance, allowing you to edit
and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in
namespacing to prevent collisions and improve reusability across different JCB systems.

You can also set the **JCB powers path** globally or per component under the
**Dynamic Integration** tab, providing flexibility and maintainability.

To add this specific Power to your project in JCB:

> Simply use this SPK:
```
Super---1401a167_0ce4_4f4a_afee_2d8b02ed339b---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")