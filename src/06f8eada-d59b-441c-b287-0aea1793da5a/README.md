### JCB! Power
# final class Load (Details)
> namespace: **VDM\Joomla\Database**
> extends: **Database**

```uml
@startuml

class Load << (F,LightGreen) >> #RoyalBlue {
  + rows(array $select, array $tables, ...) : ?array
  + items(array $select, array $tables, ...) : ?array
  + row(array $select, array $tables, ...) : ?array
  + item(array $select, array $tables, ...) : ?object
  + max(string $field, array $tables, ...) : ?int
  + count(array $tables, array $filter) : ?int
  + value(array $select, array $tables, ...) : mixed
  + values(array $select, array $tables, ...) : ?array
  # many(array $select, array $tables, ...) : bool
  # one(array $select, array $tables, ...) : bool
  # query(array $select, array $tables, ...) : ?object
  # applySelect(object $query, array $select) : void
  # applyFromAndJoins(object $query, array $tables) : void
  # applyWhere(object $query, ?array $where) : void
  # applyOrder(object $query, ?array $order) : void
  # applyLimit(object $query, ?int $limit) : void
  # getKey(array $select) : ?string
  # normalizeTables(array $tables) : ?array
  - normalizeKeys(array $data) : array
  - normalizeSelectArray(array $select) : array
  - extractAlias(string $column) : string
  - handleWhereCondition(object $query, string $column, ...) : void
  - handleAdvancedCondition(object $query, string $column, ...) : void
  - handleArrayCondition(object $query, string $column, ...) : void
  - handleScalarCondition(object $query, string $column, ...) : void
  - parseVariousSyntax(string $entry, $normalized, ...) : void
  - parseColonSyntax(string $entry, $normalized) : void
  - parsePipeSyntax(string $entry, $normalized) : void
  - parseDotSyntax(string $entry, $normalized) : void
  - parseArrayEntry(array $parts, $normalized) : void
  - parseFlatTable(string $table, $normalized) : void
  - parseAssocSyntax(string $alias, string|array $value, ...) : void
  - addTableEntry(string $alias, string $table, ...) : void
  - addJoinTableEntry(string $alias, string $table, ...) : void
  - normalizeColumn(string $alias, string $column) : string
}

note right of Load::rows
  Load data rows as an array of associated arrays

  since: 3.2.0
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note left of Load::items
  Load data rows as an array of objects

  since: 3.2.0
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note right of Load::row
  Load data row as an associated array

  since: 3.2.0
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note left of Load::item
  Load data row as an object

  since: 3.2.0
  return: ?object
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note right of Load::max
  Get the max value based on a filtered result from a given table

  since: 3.2.0
  return: ?int
  
  arguments:
    string $field
    array $tables
    array $filter
end note

note left of Load::count
  Count the number of items based on filter result from a given table

  since: 3.2.0
  return: ?int
end note

note right of Load::value
  Load one value from a row

  since: 3.2.0
  return: mixed
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note left of Load::values
  Load values from multiple rows

  since: 3.2.2
  return: ?array
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note right of Load::many
  Load many

  since: 3.2.0
  return: bool
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note left of Load::one
  Load one

  since: 3.2.0
  return: bool
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
end note

note right of Load::query
  Get the query object.

  since: 3.2.0
  return: ?object
  
  arguments:
    array $select
    array $tables
    ?array $where = null
    ?array $order = null
    ?int $limit = null
end note

note left of Load::applySelect
  Apply SELECT clause to the query.
Supports auto-aliasing and intelligent prefixing.

  since: 5.1.1
  return: void
end note

note right of Load::applyFromAndJoins
  Apply FROM and JOIN clauses.

  since: 5.1.1
  return: void
end note

note left of Load::applyWhere
  Apply WHERE clauses.

  since: 5.1.1
  return: void
end note

note right of Load::applyOrder
  Apply ORDER BY clause.

  since: 5.1.1
  return: void
end note

note left of Load::applyLimit
  Apply LIMIT clause.

  since: 5.1.1
  return: void
end note

note right of Load::getKey
  Get the key from the selection array.
This function retrieves a key from the provided selection array.
The key is removed from the array after being retrieved.

  since: 3.2.2
  return: ?string
end note

note left of Load::normalizeTables
  Normalize mixed-format table definitions to a consistent structure.
Supported formats:
- ['a' => 'table']
- ['a' => 'table', 'b' => ['name' => 'table2', 'join_on' => 'a.id', 'as_on' => 'b.entity']]
- ['a.table', 'b.table2.id.entity']
- ['a:table', 'b:table2:id:entity']
- ['table']
- ['table', 'table2.id.entity']
- ['table', 'table2:id:entity']

  since: 5.1.1
  return: ?array
end note

note right of Load::normalizeKeys
  Normalize all Keys in array by ensuring:
- All keys are fully qualified (add "a." if missing)

  since: 5.1.1
  return: array
end note

note left of Load::normalizeSelectArray
  Normalize SELECT array by ensuring:
- All keys are fully qualified (add "a." if missing)
- All values are aliases (either provided or extracted from key)

  since: 5.1.1
  return: array
end note

note right of Load::extractAlias
  Extracts the alias from a column name.
(e.g., "a.id" → "id", "b.user_name" → "user_name", "name" → "name")

  since: 5.1.1
  return: string
end note

note left of Load::handleWhereCondition
  Handle a single where condition.

  since: 5.1.1
  return: void
  
  arguments:
    object $query
    string $column
    mixed $condition
    int $counter
end note

note right of Load::handleAdvancedCondition
  Handle advanced (operator-based) where conditions.

  since: 5.1.1
  return: void
  
  arguments:
    object $query
    string $column
    mixed $value
    string $operator
    bool $quote = true
end note

note left of Load::handleArrayCondition
  Handle an array-based condition, e.g., IN (...) or NOT IN (...).

  since: 5.1.1
  return: void
  
  arguments:
    object $query
    string $column
    array $values
    string $operator
    bool $quote = true
end note

note right of Load::handleScalarCondition
  Handle a scalar value condition.

  since: 5.1.1
  return: void
  
  arguments:
    object $query
    string $column
    mixed $value
    string $operator
    bool $quote = true
end note

note left of Load::parseVariousSyntax
  Parse various short syntaxes: colon, pipe, dot, or fallback flat value.

  since: 5.1.1
  return: void
  
  arguments:
    string $entry
    $normalized
    ?string $alias = null
end note

note right of Load::parseColonSyntax
  Parse colon syntax such as "a:table", "b:table:join_on:as_on", or "table:join_on:as_on"

  since: 5.1.1
  return: void
end note

note left of Load::parsePipeSyntax
  Parse colon syntax such as "a|table", "b|table|join_on|as_on", or "table|join_on:as_on"

  since: 5.1.1
  return: void
end note

note right of Load::parseDotSyntax
  Parse dot syntax such as "a.table", "b.table2.id.entity", "table.join_on.as_on"

  since: 5.1.1
  return: void
end note

note left of Load::parseArrayEntry
  Combine the entry parts int the corret format

  since: 5.1.1
  return: void
end note

note right of Load::parseFlatTable
  Parse flat entry like "table" with automatic aliasing

  since: 5.1.1
  return: void
end note

note left of Load::parseAssocSyntax
  Parse associative array entry, either a raw string or a join structure

  since: 5.1.1
  return: void
  
  arguments:
    string $alias
    string|array $value
    $normalized
end note

note right of Load::addTableEntry
  Add a given set of entries to the normalized array

  since: 5.1.1
  return: void
  
  arguments:
    string $alias
    string $table
    $normalized
end note

note left of Load::addJoinTableEntry
  Add a given set of entries to the normalized array

  since: 5.1.1
  return: void
  
  arguments:
    string $alias
    string $table
    string $joinOn
    string $asOn
    ?string $join
    $normalized
end note

note right of Load::normalizeColumn
  Add table alias to column if not already present.

  since: 5.1.1
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
Super---06f8eada_d59b_441c_b287_0aea1793da5a---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")