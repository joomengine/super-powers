### JCB! Power
# final class Guid (Details)
> namespace: **VDM\Joomla\Data\Migrator**

```uml
@startuml

class Guid << (F,LightGreen) >> #RoyalBlue {
  # Items $items
  # Load $load
  # Update $update
  # array $guidCache
  # string $table
  - array $success
  + __construct(Items $items, Load $load, ...)
  + process(array $config) : array
  - processMapping(array $mapping) : void
  - processBasicValue(array $mapping) : void
  - processSubformValue(array $mapping) : void
  - processSubSubformValue(array $mapping) : void
  - processDashboardValue(array $mapping) : void
  - processFieldValue(array $mapping) : void
  - getItemGuid(string $table, string $column, ...) : ?string
  - updateSubformValue(string $table, array $row, ...) : bool
  - getSubfromFields(string $xml) : ?array
  - stringToIntArray(string $input) : array
  - processJson(string $values, string $linkedTable, ...) : string
  - processArray(array $values, string $linkedTable, ...) : array
  - updateValue(string $table, string $column, ...) : bool
  - setTable(string $table) : void
  - getTable() : string
}

note right of Guid::__construct
  Constructor.

  since: 5.0.4
  
  arguments:
    Items $items
    Load $load
    Update $update
end note

note left of Guid::process
  Processes the configuration to migrate IDs to GUIDs.

  since: 5.0.4
  return: array
end note

note right of Guid::processMapping
  Processes a single mapping based on its type.

  since: 5.0.4
  return: void
end note

note left of Guid::processBasicValue
  Processes basic values in a table and replaces IDs with GUIDs.

  since: 5.0.4
  return: void
end note

note right of Guid::processSubformValue
  Processes subform values in a table and replaces IDs with GUIDs.

  since: 5.0.4
  return: void
end note

note left of Guid::processSubSubformValue
  Processes sub-subform values in a table and replaces IDs with GUIDs.

  since: 5.0.4
  return: void
end note

note right of Guid::processDashboardValue
  Processes dashboard values in a table and replaces IDs with GUIDs.

  since: 5.1.1
  return: void
end note

note left of Guid::processFieldValue
  Processes field values in a table and replaces IDs with GUIDs.

  since: 5.1.1
  return: void
end note

note right of Guid::getItemGuid
  Retrieves or creates a GUID for a given linked table and ID (ITEM).

  since: 5.0.4
  return: ?string
  
  arguments:
    string $table
    string $column
    mixed $value
end note

note left of Guid::updateSubformValue
  Update the subform field.

  since: 5.1.1
  return: bool
  
  arguments:
    string $table
    array $row
    array $fields
end note

note right of Guid::getSubfromFields
  get the subfrom fields.

  since: 5.1.1
  return: ?array
end note

note left of Guid::stringToIntArray
  Convert a comma-separated string to an array of integers.

  since: 5.1.1
  return: array
end note

note right of Guid::processJson
  Processes an json-array of basic values and replaces them with GUIDs.

  since: 5.0.4
  return: string
  
  arguments:
    string $values
    string $linkedTable
    string $linkedColumn
    string $hasUpdate
end note

note left of Guid::processArray
  Processes an array values and replaces them with GUIDs.

  since: 5.0.4
  return: array
  
  arguments:
    array $values
    string $linkedTable
    string $linkedColumn
    string $hasUpdate
end note

note right of Guid::updateValue
  Updates a value in the database.

  since: 5.0.4
  return: bool
  
  arguments:
    string $table
    string $column
    string $value
    int $id
end note

note left of Guid::setTable
  Set the current active table

  since: 5.0.4
  return: void
end note

note right of Guid::getTable
  Get the current active table

  since: 5.0.4
  return: string
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
Super---0b746305_d34e_4c21_bc20_898c4aeac376---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")