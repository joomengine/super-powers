### JCB! Power
# abstract class Versioning (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: **Database**

```uml
@startuml

abstract Versioning  #Orange {
  # CMSApplication $app
  # ContentHistory $contentHistory
  # ContentType $typeTable
  # Registry $params
  # int $userId
  # string $componentNamespace
  # ?string $entity
  # int $history
  # int $maxVersions
  + __construct(?JoomlaDatabase $db = null, ?CMSApplication $app = null, ...)
  + history(?int $trigger = null) : self
  # setHistory(int $id) : bool
  # setMultipleHistory(array $ids) : int
  # getTableClass() : ?string
  # getTableEntityName(string $table) : ?string
}

note right of Versioning::__construct
  Class constructor.
Initializes the component context by setting the application, database,
content history tracking, and content type table instances. Also loads
component-specific parameters like history tracking and version limits.

  since: 5.1.1
  
  arguments:
    ?JoomlaDatabase $db = null
    ?CMSApplication $app = null
    ?ContentHistory $history = null
    ?ContentType $typeTable = null
end note

note right of Versioning::history
  Switch to prevent/allow history from being set.

  since: 5.1.1
  return: self
end note

note right of Versioning::setHistory
  Save a history record for a stored item.

  since: 5.1.1
  return: bool
end note

note right of Versioning::setMultipleHistory
  Save multiple version records for already stored items.

  since: 5.1.1
  return: int
end note

note right of Versioning::getTableClass
  Get the fully qualified class name for a table if it exists.
This method first extracts the base table name using `getTableName`.
If the extraction fails (e.g., wrong component prefix), it returns null.
If successful, it constructs the FQCN in the format:
\Namespace\Component\ComponentName\Administrator\Table\TableNameTable
The table name is converted to PascalCase and suffixed with `Table`.
The constructed class name is verified with `class_exists`.

  since: 5.1.1
  return: ?string
end note

note right of Versioning::getTableEntityName
  Extract the actual table name by removing the component prefix.
This method checks whether the given table name includes the component-specific prefix,
which usually starts with `#__` followed by the component name and an underscore (e.g., `#__mycomponent_`).
If it matches this instance's component prefix stored in `$this->table`, the prefix is stripped and the short table name is returned.
If the prefix is different (implying a foreign component), `null` is returned.
If no prefix is present, the original value is returned unchanged.

  since: 5.1.1
  return: ?string
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
Super---d9839333_a8f1_4a36_9256_5df4d349b3f6---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")