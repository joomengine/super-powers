### JCB! Power
# interface GrepInterface (Details)
> namespace: **VDM\Joomla\Interfaces**

```uml
@startuml

interface GrepInterface  #Lavender {
  + get(string $guid, ?array $order = null, ...) : ?object
  + validRepo(object $repository, ?string $networkTarget) : bool
  + getValidGuids(array $values, ?object $repo) : array
  + getPath(string $guid) : ?object
  + getPaths() : ?array
  + getPathsIndexes() : ?array
  + getPathIndexes(string $guid, bool $reload = false) : ?object
  + getRemoteIndex(string $guid, bool $reload = false) : ?object
  + resetEntityIndex() : void
  + getNetworkTarget() : ?string
  + exists(string $guid, ?object $repo = null, ...) : bool
  + setBranchField(string $field) : void
  + setBranchDefaultName(?string $name) : void
  + setIndexPath(string $indexPath) : void
  + loadApi(Api $api, ?string $base, ...) : void
}

note right of GrepInterface::get
  Get an item

  since: 3.2.2
  return: ?object
  
  arguments:
    string $guid
    ?array $order = null
    ?object $repo = null
end note

note left of GrepInterface::validRepo
  Validate any repository

  since: 5.1.4
  return: bool
end note

note right of GrepInterface::getValidGuids
  Resolve and validate entity GUID values.
- Empty values are ignored.
- If the entity uses a GUID field, each value is validated:
- Valid GUIDs are accepted as-is.
- Invalid GUIDs are resolved via a helper field when available.
- If the entity does not use GUIDs, values are returned unchanged.

  since: 5.1.4
  return: array
end note

note left of GrepInterface::getPath
  Get the path/repo object

  since: 5.1.1
  return: ?object
end note

note right of GrepInterface::getPaths
  Get all the available repos

  since: 5.1.1
  return: ?array
end note

note left of GrepInterface::getPathsIndexes
  Get all paths + indexes (the active set)

  since: 5.1.1
  return: ?array
end note

note right of GrepInterface::getPathIndexes
  Get the a path + indexes

  since: 5.1.1
  return: ?object
end note

note left of GrepInterface::getRemoteIndex
  Get the index of a repo

  since: 3.2.2
  return: ?object
end note

note right of GrepInterface::resetEntityIndex
  Reset the index of a entity

  since: 5.1.2
  return: void
end note

note left of GrepInterface::getNetworkTarget
  Get the network target name

  since: 5.1.1
  return: ?string
end note

note right of GrepInterface::exists
  Check if an item exists in any repo or in a specific repo.

  since: 3.2.2
  return: bool
  
  arguments:
    string $guid
    ?object $repo = null
    ?array $order = null
end note

note left of GrepInterface::setBranchField
  Set the branch field

  since: 3.2.2
  return: void
end note

note right of GrepInterface::setBranchDefaultName
  Set the DEFAULT branch name (only used if branch field is not found)

  since: 3.2.2
  return: void
end note

note left of GrepInterface::setIndexPath
  Set the index path

  since: 3.2.2
  return: void
end note

note right of GrepInterface::loadApi
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
Super---c182506a_ab84_439c_b962_1e606b58d545---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")