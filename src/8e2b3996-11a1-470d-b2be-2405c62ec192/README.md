### JCB! Power
# final class TypeDefinition (Details)
> namespace: **VDM\Joomla\Componentbuilder\File**

```uml
@startuml

class TypeDefinition << (F,LightGreen) >> #RoyalBlue {
  # string $guid
  # string $name
  # int $access
  # int $quantity
  # int $downloadAccess
  # string $field
  # string $type
  # ?string $filter
  # string $path
  # array $formats
  # array $crop
  + __construct(array $config)
  + guid() : string
  + name() : string
  + access() : int
  + quantity() : int
  + downloadAccess() : int
  + field() : string
  + type() : string
  + filter() : ?string
  + path() : string
  + formats() : array
  + crop() : array
  + toArray() : array
}

note right of TypeDefinition::__construct
  Constructor.
Required keys:
- guid (string)
- name (string)
- access (int)
- quantity (int)
- download_access (int)
- field (string)
- type (string)
- path (string)
Optional:
- filter (string|null)
- formats (array)
- crop (array)

  since: 5.1.4
end note

note left of TypeDefinition::guid
  Get GUID.

  since: 5.1.4
  return: string
end note

note right of TypeDefinition::name
  Get human-readable name.

  since: 5.1.4
  return: string
end note

note left of TypeDefinition::access
  Get upload access level.

  since: 5.1.4
  return: int
end note

note right of TypeDefinition::quantity
  Get quantity limit.

  since: 5.1.4
  return: int
end note

note left of TypeDefinition::downloadAccess
  Get download access level.

  since: 5.1.4
  return: int
end note

note right of TypeDefinition::field
  Get upload field name.

  since: 5.1.4
  return: string
end note

note left of TypeDefinition::type
  Get type identifier.

  since: 5.1.4
  return: string
end note

note right of TypeDefinition::filter
  Get filter mode.

  since: 5.1.4
  return: ?string
end note

note left of TypeDefinition::path
  Get target path.

  since: 5.1.4
  return: string
end note

note right of TypeDefinition::formats
  Get allowed extensions.

  since: 5.1.4
  return: array
end note

note left of TypeDefinition::crop
  Get crop configuration.

  since: 5.1.4
  return: array
end note

note right of TypeDefinition::toArray
  Export the full type definition as an associative array.
This returns the exact structure used by the constructor,
ensuring it can be safely stored, serialized, or rebuilt.

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
Super---8e2b3996_11a1_470d_b2be_2405c62ec192---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")