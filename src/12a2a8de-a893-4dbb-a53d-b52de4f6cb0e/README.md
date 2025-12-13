### JCB! Power
# final class Type (Details)
> namespace: **VDM\Joomla\Componentbuilder\File**

```uml
@startuml

class Type << (F,LightGreen) >> #RoyalBlue {
  # Item $item
  # array $fileTypes
  + __construct(Item $item)
  + get(string $guid, string $target) : ?array
  + definition(string $guid, string $target) : ?TypeDefinition
  + details(string $guid) : ?object
  # validTarget(object $data, string $target) : bool
  # getFieldName(object $data) : string
  # getCropDetails(object $data) : array
  # getAllow(object $data) : string
  # getAllowSpan(object $data) : string
  # getAllowFormats(object $data) : ?array
  # getFileTypePath(object $data) : ?string
  # getLastFolderName(string $path) : ?string
}

note right of Type::__construct
  Constructor.

  since: 5.0.2
end note

note left of Type::get
  Retrieves the file type details (ajax)

  since: 5.0.2
  return: ?array
end note

note right of Type::definition
  Retrieves the file type details (upload)

  since: 5.0.2
  return: ?TypeDefinition
end note

note left of Type::details
  Retrieves the file type details

  since: 5.0.2
  return: ?object
end note

note right of Type::validTarget
  Valid if this is a correct target trying to call this file type

  since: 5.0.2
  return: bool
end note

note left of Type::getFieldName
  Retrieves the field name

  since: 5.0.2
  return: string
end note

note right of Type::getCropDetails
  Retrieves the image crop details if set.
Ensures the returned structure is always an array of arrays,
converting any stdClass to array recursively.

  since: 5.1.1
  return: array
end note

note left of Type::getAllow
  Retrieves the allow formats (for script)

  since: 5.0.2
  return: string
end note

note right of Type::getAllowSpan
  Retrieves the allow formats (for span)

  since: 5.0.2
  return: string
end note

note left of Type::getAllowFormats
  Retrieves the allow formats

  since: 5.0.2
  return: ?array
end note

note right of Type::getFileTypePath
  Retrieves the file type path based on provided data.
Performs safety checks and returns either a cleaned path if it exists
and is a writable directory, or constructs a relative path to the 'images' folder
based on the last folder name from the given path.

  since: 5.0.2
  return: ?string
end note

note left of Type::getLastFolderName
  Recursively retrieves the last folder name from a given path, ignoring any file names.
If the last part of the path contains a dot (indicating a file), it moves up the directory tree
until it finds a valid folder name. Returns null if no valid folder is found.

  since: 5.0.2
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
Super---12a2a8de_a893_4dbb_a53d_b52de4f6cb0e---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")