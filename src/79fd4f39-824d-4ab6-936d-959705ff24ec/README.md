```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
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
In your case, you use `$db = $this->table->get($table, $field, 'db')`.

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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---79fd4f39_824d_4ab6_936d_959705ff24ec---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

