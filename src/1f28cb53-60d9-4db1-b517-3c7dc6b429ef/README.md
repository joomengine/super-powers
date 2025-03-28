```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class StringHelper (Details)
> namespace: **VDM\Joomla\Utilities**

```uml
@startuml
abstract StringHelper  #Orange {
  + static $langTag
  + {static} check(mixed $input) : bool
  + {static} shorten(mixed $string, int $length = 40, ...) : string|mixed
  + {static} safe(string $string, string $type = 'L', ...) : string
  + {static} transliterate($string) : string
  + {static} html(string $var, string $charset = 'UTF-8', ...) : string
  + {static} numbers($string) : ?string
  + {static} number($x)
  + {static} random(int $size) : string
}

note right of StringHelper::check
  Validate that input is a non-empty, non-whitespace-only string.

  since: 3.0.9
  return: bool
end note

note left of StringHelper::shorten
  Shortens a string to a specified length, optionally adding a tooltip with the full text.
This method safely shortens the input string without cutting words abruptly. If the string
exceeds the specified length, ellipses (...) are added. Optionally, a tooltip containing the
longer original string can be included.

  since: 3.2.1
  return: string|mixed
  
  arguments:
    mixed $string
    int $length = 40
    bool $addTip = true
end note

note right of StringHelper::safe
  Makes a string safe by sanitizing and formatting it according to the specified type.
This method can remove unwanted characters, transliterate text, replace numbers with
their English equivalents, and apply different case formatting styles.
- 'filename'  : Removes special characters and extra spaces.
- 'L'         : Converts to lowercase with underscores replacing spaces.
- 'strtolower': Alias for 'L'.
- 'W'         : Capitalizes the first letter of each word.
- 'w'         : Converts to lowercase (spaces remain).
- 'word'      : Alias for 'w'.
- 'Ww'        : Capitalizes only the first word.
- 'Word'      : Alias for 'Ww'.
- 'WW'        : Converts the entire string to uppercase.
- 'WORD'      : Alias for 'WW'.
- 'U'         : Converts to uppercase with underscores replacing spaces.
- 'strtoupper': Alias for 'U'.
- 'F'         : Capitalizes only the first letter of the entire string.
- 'ucfirst'   : Alias for 'F'.
- 'cA'        : Converts to camelCase.
- 'cAmel'     : Alias for 'cA'.
- 'camelcase' : Alias for 'cA'.

  since: 3.0.9
  return: string
  
  arguments:
    string $string
    string $type = 'L'
    string $spacer = '_'
    bool $replaceNumbers = true
    bool $keepOnlyCharacters = true
end note

note left of StringHelper::transliterate
  Convert none English strings to code usable string

  since: 3.0.9
  return: string
end note

note right of StringHelper::html
  Ensures a string is safe for HTML output by encoding entities and applying an input filter.
This method sanitizes the input string, converting special characters to HTML entities
and applying Joomla's `InputFilter` to remove potentially unsafe HTML.
Optionally, it can also shorten the string while preserving word integrity.

  since: 3.0.9
  return: string
  
  arguments:
    string $var
    string $charset = 'UTF-8'
    bool $shorten = false
    int $length = 40
    bool $addTip = true
end note

note left of StringHelper::numbers
  Convert all int in a string to an English word string

  since: 3.0.9
  return: ?string
end note

note right of StringHelper::number
  Convert an integer into an English word string
Thanks to Tom Nicholson <http://php.net/manual/en/function.strval.php#41988>

  since: 3.0.9
end note

note left of StringHelper::random
  Random Key

  since: 3.0.9
  return: string
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1f28cb53_60d9_4db1_b517_3c7dc6b429ef---Power
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

