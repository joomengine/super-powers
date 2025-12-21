### JCB! Power
# interface EntityInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Import**

```uml
@startuml

interface EntityInterface  #Lavender {
  + getStartingRow() : int
  + setStartingRow(int $row) : self
  + getParentTable() : string
  + setParentTable(string $table) : self
  + getParentKey() : string
  + setParentKey(string $key) : self
  + getParentJoinKey() : string
  + setParentJoinKey(string $key) : self
  + getLinkField() : string
  + setLinkField(string $field) : self
  + getDataKey() : string
  + setDataKey(string $key) : self
  + getJoinFields() : array
  + setJoinFields(array $map) : self
}

note right of EntityInterface::getStartingRow
  Get the starting row number of the import.
This determines from which row the import engine begins reading data
(for example, skipping header rows in spreadsheets).

  since: 5.1.4
  return: int
end note

note left of EntityInterface::setStartingRow
  Set the starting row number of the import.

  since: 5.1.4
  return: self
end note

note right of EntityInterface::getParentTable
  Get the parent table name for each imported row.
This represents the primary table the import is targeting.

  since: 5.1.4
  return: string
end note

note left of EntityInterface::setParentTable
  Set the parent table name for each imported row.

  since: 5.1.4
  return: self
end note

note right of EntityInterface::getParentKey
  Get the parent table key field.
This is the primary identifier used to uniquely identify records
in the parent table (e.g. `id`, `guid`).

  since: 5.1.4
  return: string
end note

note left of EntityInterface::setParentKey
  Set the parent table key field.

  since: 5.1.4
  return: self
end note

note right of EntityInterface::getParentJoinKey
  Get the parent join key field.
This field is used to join the parent table to related tables
during import processing.

  since: 5.1.4
  return: string
end note

note left of EntityInterface::setParentJoinKey
  Set the parent join key field.

  since: 5.1.4
  return: self
end note

note right of EntityInterface::getLinkField
  Get the link field used to associate imported rows with existing data.
This field is typically used to detect updates vs inserts.

  since: 5.1.4
  return: string
end note

note left of EntityInterface::setLinkField
  Set the link field used to associate imported rows with existing data.

  since: 5.1.4
  return: self
end note

note right of EntityInterface::getDataKey
  Get the data key used within the import payload.
This key identifies the main data section inside the import structure.

  since: 5.1.4
  return: string
end note

note left of EntityInterface::setDataKey
  Set the data key used within the import payload.

  since: 5.1.4
  return: self
end note

note right of EntityInterface::getJoinFields
  Get the join tables key fields map.
Defines how related tables link back to the parent entity
during the import process.

  since: 5.1.4
  return: array
end note

note left of EntityInterface::setJoinFields
  Set the join tables key fields map.
Example: [
'table' => ['link_fields' => ['field']]
]

  since: 5.1.4
  return: self
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
Super---a522aab8_5edc_497d_bfbd_06fa6ab19f34---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")