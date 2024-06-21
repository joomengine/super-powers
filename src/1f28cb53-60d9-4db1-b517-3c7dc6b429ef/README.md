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
> extends: ****
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

