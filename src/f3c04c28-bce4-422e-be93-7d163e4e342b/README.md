```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class Schema (Details)
> namespace: **VastDevelopmentMethod\Joomla\Abstraction**
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

note left of Schema::updateColumnsDataType
  Update the data type of the given fields.

  since: 3.2.1
  return: void
end note

note right of Schema::getTable
  Add the component name to get the full table name.

  since: 3.2.1
  return: string
end note

note left of Schema::isDataTypeChangeSignificant
  Determines if the change in data type between two definitions is significant.
This function checks if there's a significant difference between the current
data type and the expected data type that would require updating the database schema.
It ignores display width for numeric types where MySQL considers these attributes
irrelevant for storage but considers size and other modifiers for types like VARCHAR.

  since: 3.2.1
  return: bool
end note

note right of Schema::adjustExistingDefaults
  Updates existing rows in a column to a new default value

  since: 3.2.1
  return: bool
  
  arguments:
    string $table
    string $column
    mixed $currentDefault
    mixed $newDefault
end note

note left of Schema::updateColumnDataType
  Update the data type of the given field.

  since: 3.2.1
  return: bool
  
  arguments:
    string $updateString
    string $table
    string $field
end note

note right of Schema::getTableKeys
  Key all needed keys for this table

  since: 3.2.1
  return: string
end note

note left of Schema::setKeys
  Function to set the view keys

  since: 3.2.1
  return: void
end note

note right of Schema::setUniqueKey
  Function to set the unique key

  since: 3.2.1
  return: void
end note

note left of Schema::setKey
  Function to set the key

  since: 3.2.1
  return: void
end note

note right of Schema::getDefaultValue
  Adjusts the default value SQL fragment for a database field based on its type and specific rules.
If the field is of type DATETIME and the Joomla version is not 3, it sets the default to CURRENT_TIMESTAMP
if not explicitly specified otherwise. For all other types, or when a 'EMPTY' default is specified, it handles
defaults by either leaving them unset or applying the provided default, properly quoted for SQL safety.

  since: 3.2.1
  return: string
  
  arguments:
    string $type
    ?string $defaultValue
    bool $pure = false
end note

note left of Schema::quote
  Set a value based on data type

  since: 3.2.0
  return: mixed
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

