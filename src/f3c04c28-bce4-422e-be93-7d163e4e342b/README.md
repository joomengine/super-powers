### JCB! Power
# abstract class Schema (Details)
> namespace: **VDM\Joomla\Abstraction**

```uml
@startuml

abstract Schema  #Orange {
  # Table $table
  # $db
  - array $tables
  - string $prefix
  - array $uniqueKeys
  - array $keys
  - array $columns
  - array $success
  # $currentVersion
  # string $dbVersion
  # string $dbType
  + __construct(Table $table)
  + update() : array
  # {abstract} getCode() : string
  # tableExists(string $table) : bool
  + updateSchema(string $table) : void
  + createTable(string $table) : void
  # getExistingColumns(string $table) : array
  # addMissingColumns(string $table, array $columns) : void
  # checkColumnsDataType(string $table, array $columns) : void
  # getColumnDefinition(string $table, string $field) : ?string
  # checkDefault(string $table, string $column) : bool
  # checkNull(string $table, string $column) : bool
  # updateColumnsDataType(string $table, array $columns) : void
  # getTable(string $table) : string
  # isDataTypeChangeSignificant(string $currentType, string $expectedType) : bool
  # adjustExistingDefaults(string $table, string $column, ...) : bool
  # updateColumnDataType(string $updateString, string $table, ...) : bool
  # getTableKeys() : string
  # setKeys(array $column) : void
  # setUniqueKey(array $column) : void
  # setKey(array $column) : void
  # getDefaultValue(string $type, ?string $defaultValue, ...) : string
  # quote(mixed $value) : mixed
}

note right of Schema::__construct
  Constructor.

  since: 3.2.1
end note

note left of Schema::update
  Check and update database schema for missing fields or tables.

  since: 3.2.1
  return: array
end note

note right of Schema::getCode
  Get the targeted component code

  since: 3.2.1
  return: string
end note

note left of Schema::tableExists
  Check if a table exists in the database.

  since: 3.2.1
  return: bool
end note

note right of Schema::updateSchema
  Update the schema of an existing table.

  since: 3.2.1
  return: void
end note

note left of Schema::createTable
  Create a table with all necessary fields.

  since: 3.2.1
  return: void
end note

note right of Schema::getExistingColumns
  Fetch existing columns from a database table.

  since: 3.2.1
  return: array
end note

note left of Schema::addMissingColumns
  Add missing columns to a table.

  since: 3.2.1
  return: void
end note

note right of Schema::checkColumnsDataType
  Validate and update the data type of existing fields/columns

  since: 3.2.1
  return: void
end note

note left of Schema::getColumnDefinition
  Generates a SQL snippet for defining a table column, incorporating column type,
default value, nullability, and auto-increment properties.

  since: 3.2.1
  return: ?string
end note

note right of Schema::checkDefault
  Check and Update the default values if needed, including existing data adjustments

  since: 3.2.1
  return: bool
end note

note left of Schema::checkNull
  Check and Update the null value if needed, including existing data adjustments

  since: 3.2.2
  return: bool
end note

note right of Schema::updateColumnsDataType
  Update the data type of the given fields.

  since: 3.2.1
  return: void
end note

note left of Schema::getTable
  Add the component name to get the full table name.

  since: 3.2.1
  return: string
end note

note right of Schema::isDataTypeChangeSignificant
  Determines if the change in data type between two definitions is significant.
This function checks if there's a significant difference between the current
data type and the expected data type that would require updating the database schema.
It ignores display width for numeric types where MySQL considers these attributes
irrelevant for storage but considers size and other modifiers for types like VARCHAR.

  since: 3.2.1
  return: bool
end note

note left of Schema::adjustExistingDefaults
  Updates existing rows in a column to a new default value

  since: 3.2.1
  return: bool
  
  arguments:
    string $table
    string $column
    mixed $currentDefault
    mixed $newDefault
end note

note right of Schema::updateColumnDataType
  Update the data type of the given field.

  since: 3.2.1
  return: bool
  
  arguments:
    string $updateString
    string $table
    string $field
end note

note left of Schema::getTableKeys
  Key all needed keys for this table

  since: 3.2.1
  return: string
end note

note right of Schema::setKeys
  Function to set the view keys

  since: 3.2.1
  return: void
end note

note left of Schema::setUniqueKey
  Function to set the unique key

  since: 3.2.1
  return: void
end note

note right of Schema::setKey
  Function to set the key

  since: 3.2.1
  return: void
end note

note left of Schema::getDefaultValue
  Adjusts the default value SQL fragment for a database field based on its type and specific rules.
If the field is of type DATETIME and the Joomla version is not 3, it sets the default to CURRENT_TIMESTAMP
if not explicitly specified otherwise. For all other types it handles defaults by either leaving them unset or applying
the provided default, properly quoted for SQL safety. When a 'EMPTY' default is specified, it returns no default at all. (:)

  since: 3.2.1
  return: string
  
  arguments:
    string $type
    ?string $defaultValue
    bool $pure = false
end note

note right of Schema::quote
  Set a value based on data type

  since: 3.2.0
  return: mixed
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
Super---f3c04c28_bce4_422e_be93_7d163e4e342b---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")