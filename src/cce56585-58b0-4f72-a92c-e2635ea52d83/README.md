### JCB! Power
# final class Update (Details)
> namespace: **VDM\Joomla\Database**
> extends: **Versioning**

```uml
@startuml

class Update << (F,LightGreen) >> #RoyalBlue {
  # bool $multiple
  # array $updateids
  + updateids(bool $reset = false) : array
  + rows(array $data, string $key, ...) : bool
  + items(array $data, string $key, ...) : bool
  + row(array $data, string $key, ...) : bool
  + item(object $data, string $key, ...) : bool
  + column(mixed $value, string $key, ...) : bool
  # extractUpdateIdentifiers(array $data, string $key) : array
  # applyUpdateDefaults(object $query, array $data) : void
  # resolveUpdateIds(?int $id, ?string $guid, ...) : array
  # lookupIdsByGuid(string $guid, string $table) : array
  # lookupIdsByWhere(string $where, string $table) : array
  # trackHistory(array $ids) : void
}

note right of Update::updateids
  Get the IDs affected by the most recent UPDATE batch.
This method returns the ordered list of entity IDs that were affected
by the last UPDATE operation or batch of UPDATE operations.
Behavioral notes:
- IDs are resolved deterministically (ID, GUID, or WHERE-clause fallback).
- The order of IDs reflects the order in which they were resolved.
- IDs may represent one or many rows, depending on the UPDATE scope.
- When `$reset` is enabled, the internal update ID bucket is cleared
after the values are retrieved.
after retrieval.

  since: 5.1.4
  return: array
end note

note left of Update::rows
  Update rows in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note right of Update::items
  Update items in the database (with remapping and filtering columns option)

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
    array $columns = []
end note

note left of Update::row
  Update row in the database.
Notes on ID tracking (critical for dependency + history workflows):
- This method ALWAYS tracks the affected ID(s) in `$this->updateids`, even when history tracking is disabled.
- ID resolution order (only fall back when the previous fails):
1) Use `id` from the provided dataset (if present).
2) Use `guid` from the provided dataset and resolve to ID(s).
3) Resolve ID(s) via the UPDATE WHERE clause (based on `$key` and its value).
Multi-row safety:
- If the WHERE clause matches more than one row, all matching IDs are tracked.

  since: 3.2.0
  return: bool
  
  arguments:
    array $data
    string $key
    string $table
end note

note right of Update::item
  Update item in the database

  since: 3.2.0
  return: bool
  
  arguments:
    object $data
    string $key
    string $table
end note

note left of Update::column
  Update a single column value for all rows in the table

  since: 5.1.1
  return: bool
  
  arguments:
    mixed $value
    string $key
    string $table
end note

note right of Update::extractUpdateIdentifiers
  Extract update identifiers from the dataset.
Identifier resolution inputs:
- `$keyValue` is always required to build the WHERE clause.
- `$id` and `$guid` are optional and are used to avoid the fallback WHERE lookup.

  since: 5.1.4
  return: array
end note

note left of Update::applyUpdateDefaults
  Apply Joomla update defaults (modified / modified_by) if enabled and missing.
This preserves the original behaviour:
- Only applied when `$this->defaults` is enabled.
- Only applied when the caller did not provide the columns already.

  since: 5.1.4
  return: void
end note

note right of Update::resolveUpdateIds
  Resolve the affected ID(s) for an UPDATE operation.
Resolution order (only fall back when the previous fails):
1) Use the provided `$id` if present and valid (>0).
2) Resolve by `$guid` if provided (returns one or multiple IDs).
3) Resolve by the WHERE clause (returns one or multiple IDs).

  since: 5.1.4
  return: array
  
  arguments:
    ?int $id
    ?string $guid
    string $table
    string $where
end note

note left of Update::lookupIdsByGuid
  Lookup ID(s) by GUID.

  since: 5.1.4
  return: array
end note

note right of Update::lookupIdsByWhere
  Lookup ID(s) by an UPDATE WHERE clause.
This is the final fallback and must only be used when:
- no valid `$id` was provided, and
- no `$guid` was provided or it could not be resolved.

  since: 5.1.4
  return: array
end note

note left of Update::trackHistory
  Apply history tracking for updated IDs.
History is optional.
- If history tracking is enabled and entity context exists, history is recorded.

  since: 5.1.4
  return: void
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
Super---cce56585_58b0_4f72_a92c_e2635ea52d83---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")