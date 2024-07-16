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
  + {static} check($string) : bool
  + {static} shorten($string, $length = 40, ...)
  + {static} safe($string, $type = 'L', ...)
  + {static} transliterate($string)
  + {static} html($var, $charset = 'UTF-8', ...)
  + {static} numbers($string)
  + {static} number($x)
  + {static} random(int $size) : string
}

note right of StringHelper::check
  Check if we have a string with a length

  since: 3.0.9
  return: bool
end note

note left of StringHelper::shorten
  Shorten a string

  since: 3.2.0
  
  arguments:
    $string
    $length = 40
    $addTip = true
end note

note right of StringHelper::safe
  Making strings safe (various ways)

  since: 3.0.9
  
  arguments:
    $string
    $type = 'L'
    $spacer = '_'
    $replaceNumbers = true
    $keepOnlyCharacters = true
end note

note left of StringHelper::transliterate
  Convert none English strings to code usable string

  since: 3.0.9
end note

note right of StringHelper::html
  make sure a string is HTML save

  since: 3.0.9
  
  arguments:
    $var
    $charset = 'UTF-8'
    $shorten = false
    $length = 40
    $addTip = true
end note

note left of StringHelper::numbers
  Convert all int in a string to an English word string

  since: 3.0.9
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

