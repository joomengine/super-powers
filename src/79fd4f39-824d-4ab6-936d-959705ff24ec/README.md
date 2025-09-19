### JCB! Power
# final class Validator (Details)
> namespace: **VDM\Joomla\Componentbuilder\Table**

```uml
@startuml

class Validator << (F,LightGreen) >> #RoyalBlue {
  # Table $table
  # array $validators
  # array $defaults
  # array $datatypes
  + __construct(Table $table)
  + getValid(mixed $value, string $field, ...) : mixed
  - validate(mixed $value, array $dbField) : bool
  - getDefault(array $dbField, mixed $value) : mixed
  - parseDataType(string $datatype) : array
  - getDatabaseField(string $field, string $table) : array
  - registerValidators() : void
  - registerDefaults() : void
  - validateInteger(mixed $value, array $typeInfo) : bool
  - validateString(mixed $value, array $typeInfo) : bool
  - validateText(mixed $value, array $typeInfo) : bool
  - validateFloat(mixed $value, array $typeInfo) : bool
  - validateDecimal(mixed $value, array $typeInfo) : bool
  - validateDate(mixed $value, array $typeInfo) : bool
  - validateJson(mixed $value, array $typeInfo) : bool
  - validateBlob(mixed $value, array $typeInfo) : bool
}

note right of Validator::__construct
  Constructor.

  since: 5.3.0
end note

note left of Validator::getValid
  Returns the valid value based on datatype definition.
If the value is valid, return it. If not, return the default value,
NULL (if allowed), or an empty string if 'EMPTY' is set.

  since: 5.3.0
  return: mixed
  
  arguments:
    mixed $value
    string $field
    string $table
end note

note right of Validator::validate
  Validate if the given value is valid for the provided database field.
This is a private method as `getValid()` will handle the actual logic.

  since: 5.3.0
  return: bool
end note

note left of Validator::getDefault
  Handle returning the default value, null, or empty string if validation fails.

  since: 5.3.0
  return: mixed
end note

note right of Validator::parseDataType
  Parse the data type from the database field and extract details like type, size, and precision.

  since: 5.3.0
  return: array
end note

note left of Validator::getDatabaseField
  Retrieve the database field structure for the specified field and table.

  since: 5.3.0
  return: array
end note

note right of Validator::registerValidators
  Register validators for MySQL data types.

  since: 5.3.0
  return: void
end note

note left of Validator::registerDefaults
  Register default values for MySQL data types.

  since: 5.3.0
  return: void
end note

note right of Validator::validateInteger
  Validate integer types (including tinyint, smallint, mediumint, etc.).

  since: 5.3.0
  return: bool
end note

note left of Validator::validateString
  Validate string types like VARCHAR and CHAR.

  since: 5.3.0
  return: bool
end note

note right of Validator::validateText
  Validate text types like TEXT, TINYTEXT, MEDIUMTEXT, LONGTEXT.

  since: 5.3.0
  return: bool
end note

note left of Validator::validateFloat
  Validate float, double, and decimal types.

  since: 5.3.0
  return: bool
end note

note right of Validator::validateDecimal
  Validate decimal types (numeric precision and scale).

  since: 5.3.0
  return: bool
end note

note left of Validator::validateDate
  Validate date, datetime, timestamp, and time types.

  since: 5.3.0
  return: bool
end note

note right of Validator::validateJson
  Validate JSON types.

  since: 5.3.0
  return: bool
end note

note left of Validator::validateBlob
  Validate BLOB types (including TINYBLOB, MEDIUMBLOB, LONGBLOB).

  since: 5.3.0
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
Super---79fd4f39_824d_4ab6_936d_959705ff24ec---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")