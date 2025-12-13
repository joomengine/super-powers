### JCB! Power
# class Manager (Details)
> namespace: **VDM\Joomla\Componentbuilder\File**

```uml
@startuml

class Manager  #Gold {
  # Item $item
  # Items $items
  # Type $type
  # Agent $agent
  # Image $image
  # User $user
  # string $table
  + __construct(Item $item, Items $items, ...)
  + upload(string $guid, string $entity, ...) : void
  + definition(string $guid) : ?Definition
  + download(string $guid) : ?array
  + delete(string $guid) : void
  + table(string $table) : self
  + getTable() : string
  # processImages(FileInterface $fileDefinition, string $guid, ...) : void
  # modelFileDefinition(FileInterface $fileDefinition, string $guid, ...) : object
  # getFileName(FileInterface $fileDefinition, string $entity) : string
  # getFileNumber(TypeDefinition $typeDefinition, string $entity) : int
  # getRandomFileName(string $guid) : string
  # limitFileType(TypeDefinition $typeDefinition, string $type, ...) : void
  - applyFileLimit(string $fileTypeGuid, string $entity, ...) : void
  # extractOldestFiles(array $files, int $quantity) : array
}

note right of Manager::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Item $item
    Items $items
    Type $type
    Agent $agent
    Image $image
end note

note left of Manager::upload
  Upload a file, of a given file type and link it to an entity.

  since: 5.0.2
  return: void
  
  arguments:
    string $guid
    string $entity
    string $target
end note

note right of Manager::definition
  Get the file definition

  since: 5.1.4
  return: ?Definition
end note

note left of Manager::download
  Get the file definition as array

  since: 5.0.2
  return: ?array
  deprecated: 5.1.4
end note

note right of Manager::delete
  Delete a file.

  since: 5.0.2
  return: void
end note

note left of Manager::table
  Set the current active table

  since: 5.0.2
  return: self
end note

note right of Manager::getTable
  Get the current active table

  since: 5.0.2
  return: string
end note

note left of Manager::processImages
  Process the image(s) as needed based on crop settings

  since: 5.1.1
  return: void
  
  arguments:
    FileInterface $fileDefinition
    string $guid
    string $entity
    string $target
    TypeDefinition $typeDefinition
end note

note right of Manager::modelFileDefinition
  model the file definition to store in the file table

  since: 5.1.4
  return: object
  
  arguments:
    FileInterface $fileDefinition
    string $guid
    string $entity
    string $target
    TypeDefinition $typeDefinition
end note

note left of Manager::getFileName
  Get the file name without extension.
If the original name is empty, return the entity GUID.
If the name does not contain a '.', return the name as is.
Otherwise, return the name without the final extension.

  since: 5.1.1
  return: string
end note

note right of Manager::getFileNumber
  Get the file number TODO: not ideal, if images are deleted we need a better solution

  since: 5.1.1
  return: int
end note

note left of Manager::getRandomFileName
  Generate a unique random-like 12-character string for a given GUID.
Guarantees:
- The same GUID will *never* produce the same value twice, even across executions.
- Different GUIDs will never collide (practically impossible).
- Safe alphanumeric output (A–Z, a–z, 0–9).
- Lightweight, stateless, and reproducible randomness within one call.

  since: 5.1.1
  return: string
end note

note right of Manager::limitFileType
  Enforces a file-count limit per entity and removes oldest excess files.
Also validates crop consistency for images.

  since: 5.1.4
  return: void
  
  arguments:
    TypeDefinition $typeDefinition
    string $type
    string $entity
    string $target
end note

note left of Manager::applyFileLimit
  Applies the file limit logic and verifies crop consistency.

  since: 5.1.4
  return: void
  
  arguments:
    string $fileTypeGuid
    string $entity
    string $target
    int $limit
    bool $isImage = false
    int $cropCount = 1
end note

note right of Manager::extractOldestFiles
  Returns the oldest files exceeding the desired quantity.

  since: 5.1.4
  return: array
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
Super---67a5e0ca_0ff0_4979_9b41_da0b09988016---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")