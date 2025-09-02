### JCB! Power
# abstract class Set (Details)
> namespace: **VDM\Joomla\Abstraction\Remote**
> extends: **Base**

```uml
@startuml

abstract Set  #Orange {
  # Grep $grep
  # Items $items
  # ItemReadme $itemReadme
  # MainReadme $mainReadme
  # Git $git
  # Tracker $tracker
  # MessageBus $messages
  # ?Resolver $resolver
  + array $repos
  # array $settings
  # array $repoPlaceholders
  + __construct(Config $config, Grep $grep, ...)
  + items(array $guids) : bool
  # {abstract} updateItem(object $item, object $existing, ...) : bool
  # {abstract} createItem(object $item, object $repo) : bool
  # {abstract} updateItemReadme(object $item, object $existing, ...) : void
  # {abstract} createItemReadme(object $item, object $repo) : void
  # saveRepoMainSettings(array $repoBucket) : void
  # isInvalidIndexRepo(mixed $repo, mixed $settings) : bool
  # mergeIndexSettings(string $repoGuid, array $settings) : array
  # setMainRepoFile(object $repo, string $path, ...) : void
  # getLocalItems(array $guids) : ?array
  # save(object $rawItem) : bool
  # setRepoPlaceholders(object $repo) : void
  # getDependencies(object $item) : ?array
  # updatePlaceholders(string $string) : string
  # canWrite() : bool
  # targetRepo(object $item, object $repo) : bool
  # getRepoName(object $repo) : string
  # areObjectsEqual(?object $obj1, ?object $obj2) : bool
}

note right of Set::__construct
  Constructor.

  since: 3.2.2
  
  arguments:
    Config $config
    Grep $grep
    Items $items
    ItemReadme $itemReadme
    MainReadme $mainReadme
    Git $git
    Tracker $tracker
    MessageBus $messages
    array $repos
    ?string $table = null
    ?string $settingsName = null
    ?string $indexPath = null
end note

note left of Set::items
  Save items remotely

  since: 3.2.2
  return: bool
end note

note right of Set::updateItem
  update an existing item (if changed)

  since: 3.2.2
  return: bool
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note left of Set::createItem
  create a new item

  since: 3.2.2
  return: bool
end note

note right of Set::updateItemReadme
  update an existing item readme

  since: 3.2.2
  return: void
  
  arguments:
    object $item
    object $existing
    object $repo
end note

note left of Set::createItemReadme
  create a new item readme

  since: 3.2.2
  return: void
end note

note right of Set::saveRepoMainSettings
  Update/Create the repo main readme and index

  since: 3.2.2
  return: void
end note

note left of Set::isInvalidIndexRepo
  Validate repository and settings.
Repo must be an object and not empty.
Settings must be an object or an array and not empty.

  since: 3.2.2
  return: bool
end note

note right of Set::mergeIndexSettings
  Merge current settings with new settings

  since: 3.2.2
  return: array
end note

note left of Set::setMainRepoFile
  Update a file in the repository

  since: 3.2.2
  return: void
  
  arguments:
    object $repo
    string $path
    string $content
    string $updateMessage
    string $createMessage
end note

note right of Set::getLocalItems
  Get items

  since: 3.2.2
  return: ?array
end note

note left of Set::save
  Save an item remotely

  since: 3.2.2
  return: bool
end note

note right of Set::setRepoPlaceholders
  Set the Repo Placeholders

  since: 5.0.3
  return: void
end note

note left of Set::getDependencies
  Get the dependencies of this item

  since: 3.2.2
  return: ?array
end note

note right of Set::updatePlaceholders
  Update Placeholders in String

  since: 5.0.3
  return: string
end note

note left of Set::canWrite
  check that we have an active repo towards which we can write data

  since: 3.2.2
  return: bool
end note

note right of Set::targetRepo
  check that we have a target repo of this item

  since: 5.0.3
  return: bool
end note

note left of Set::getRepoName
  get the name of the repo

  since: 5.1.1
  return: string
end note

note right of Set::areObjectsEqual
  Checks if two objects are equal by comparing their properties and values.
This method converts both input objects to associative arrays, sorts the arrays by keys,
and compares these sorted arrays.
If the arrays are identical, the objects are considered equal.

  since: 5.0.2
  return: bool
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
Super---eb7d69c2_4ee9_4bd0_aacc_ab51a12be895---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")