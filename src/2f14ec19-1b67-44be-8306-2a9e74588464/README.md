### JCB! Power
# class Import (Details)
> namespace: **VDM\Joomla\Componentbuilder\Item\Cli**

```uml
@startuml

class Import  #Gold {
  # int $startingRow
  # string $parentTable
  # string $parentKey
  # string $parentJoinKey
  # string $linkField
  # string $importTable
  # string $statusField
  # string $statusProcessing
  # string $statusError
  # string $messageLogTable
  # string $fileTable
  # string $dataKey
  # Status $status
  # Message $message
  # Mapper $mapper
  # Data $data
  # Importer $importer
  # RowData $rowdata
  # Row $row
  # ParentTable $parentTableClass
  # JoinTables $joinTables
  # Assessor $assessor
  # Item $item
  + __construct(Status $status, Message $message, ...)
  + data(object $import) : void
  + message() : object
  - prematureError(string $guid, string $message) : void
  - import() : ?string
  - getFile(string $file) : ?object
}

note right of Import::__construct
  Constructor.

  since: 5.0.2
  
  arguments:
    Status $status
    Message $message
    Mapper $mapper
    Data $data
    Importer $importer
    RowData $rowdata
    Row $row
    ParentTable $parentTableClass
    JoinTables $joinTables
    Assessor $assessor
    Item $item
end note

note right of Import::data
  The trigger function called from the CLI to start the item import on a spreadsheet

  since: 5.0.2
  return: void
end note

note right of Import::message
  The message of the last import event

  since: 5.0.2
  return: object
end note

note right of Import::prematureError
  This is trigger on premature error

  since: 5.0.2
  return: void
end note

note right of Import::import
  Save the item calculated values

  since: 5.0.2
  return: ?string
end note

note right of Import::getFile
  Get the file details

  since: 5.0.2
  return: ?object
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
Super---2f14ec19_1b67_44be_8306_2a9e74588464---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")