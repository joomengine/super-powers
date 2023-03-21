```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# trait Utilities (Details)
> namespace: **VDM\Joomla**
```uml
@startuml
class Utilities << (T,Orange) >> #Turquoise {
  + static $langTag
  + {static} checkString($string) : bool
  + {static} shorten($string, $length = 40, ...)
  + {static} safeString($string, $type = 'L', ...)
  + {static} safeClassFunctionName($name)
  + {static} safeFieldName($string, $allcap = false, ...)
  + {static} safeTypeName($string)
  + {static} safeNamespace($string)
  + {static} transliterate($string)
  + {static} htmlEscape($var, $charset = 'UTF-8', ...)
  + {static} replaceNumbers($string)
  + {static} numberToString($x)
  + {static} randomkey($size) : string
  + {static} checkJson($string) : bool
  + {static} jsonToString($value, $sperator = ", ...)
  + {static} checkArray($array, $removeEmptyString = false) : int
  + {static} mergeArrays($arrays)
  + {static} checkObject($object) : bool
  + {static} getVar(string $table, string $where = null, ...) : mix
  + {static} getVars(string $table, string $where = null, ...) : array
  + {static} getAllBetween(string $content, string $start, ...) : array
  + {static} getBetween(string $content, string $start, ...) : string
  + {static} bcmath(string $type, int $val1, ...) : float|int
  + {static} bcsum(array $array, int $scale = 4) : float|int
  + {static} createPluginClassName($group, $name) : string
  + {static} GUID(bool $trim = true) : string
  + {static} validGUID(string $guid, string $table = null, ...) : bool
  + {static} getGUID(string $guid, string $table, ...) : mix
  # {static} validateGUID(string $guid) : bool
  + {static} zip(string $workingDIR, string $filepath) : bool
  + {static} getFileContents(string $path, string/bool $none = '') : string
  + {static} writeFile(string $path, string $data) : bool
  + {static} getAllFilePaths(string $folder, array $fileTypes = array('\.php') : void
  + {static} getFilePath(string $type = 'path', string $target = 'filepath', ...) : string
  + {static} urlExists(string $path) : bool
  + {static} setComponentOption(String|null $option = null)
}

note right of Utilities::checkString
  Check if have a string with a length

  since: 3.0.9
  return: bool
end note

note left of Utilities::shorten
  Shorten a string

  since: 3.0.9
  
  arguments:
    $string
    $length = 40
    $addTip = true
end note

note right of Utilities::safeString
  Making strings safe (various ways)

  since: 3.0.9
  
  arguments:
    $string
    $type = 'L'
    $spacer = '_'
    $replaceNumbers = true
    $keepOnlyCharacters = true
end note

note left of Utilities::safeClassFunctionName
  Making class or function name safe

  since: 3.0.9
end note

note right of Utilities::safeFieldName
  Making field names safe

  since: 3.0.9
  
  arguments:
    $string
    $allcap = false
    $spacer = '_'
end note

note left of Utilities::safeTypeName
  Making field type name safe

  since: 3.0.9
end note

note right of Utilities::safeNamespace
  Making namespace safe

  since: 3.0.9
end note

note left of Utilities::transliterate
  

  since: 3.0.9
end note

note right of Utilities::htmlEscape
  

  since: 3.0.9
  
  arguments:
    $var
    $charset = 'UTF-8'
    $shorten = false
    $length = 40
end note

note left of Utilities::replaceNumbers
  

  since: 3.0.9
end note

note right of Utilities::numberToString
  Convert an integer into an English word string
Thanks to Tom Nicholson <http://php.net/manual/en/function.strval.php#41988>

  since: 3.0.9
end note

note left of Utilities::randomkey
  Random Key

  since: 3.0.9
  return: string
end note

note right of Utilities::checkJson
  Check if you have a json string

  since: 3.0.9
  return: bool
end note

note left of Utilities::jsonToString
  

  since: 3.0.9
  
  arguments:
    $value
    $sperator = "
    $table = null
    $id = 'id'
    $name = 'name'
end note

note right of Utilities::checkArray
  Check if you have an array with a length

  since: 3.0.9
  return: int
end note

note left of Utilities::mergeArrays
  Merge an array of array's

  since: 3.0.9
end note

note right of Utilities::checkObject
  Check if you have an object with a length

  since: 3.0.9
  return: bool
end note

note left of Utilities::getVar
  Get a Variable

  since: 3.0.9
  return: mix
  
  arguments:
    string $table
    string $where = null
    string $whereString = 'user'
    string $what = 'id'
    string $operator = '='
    string $main = null
end note

note right of Utilities::getVars
  Get array of variables

  since: 3.0.9
  return: array
  
  arguments:
    string $table
    string $where = null
    string $whereString = 'user'
    string $what = 'id'
    string $operator = 'IN'
    string $main = null
    bool $unique = true
end note

note left of Utilities::getAllBetween
  get all strings between two other strings

  since: 3.0.9
  return: array
  
  arguments:
    string $content
    string $start
    string $end
end note

note right of Utilities::getBetween
  get a string between two other strings

  since: 3.0.9
  return: string
  
  arguments:
    string $content
    string $start
    string $end
    string $default = ''
end note

note left of Utilities::bcmath
  bc math wrapper (very basic not for accounting)

  since: 3.0.9
  return: float|int
  
  arguments:
    string $type
    int $val1
    int $val2
    int $scale
end note

note right of Utilities::bcsum
  Basic sum of an array with more precision

  since: 3.0.9
  return: float|int
end note

note left of Utilities::createPluginClassName
  create plugin class name

  since: 3.0.9
  return: string
end note

note right of Utilities::GUID
  Returns a GUIDv4 string
Thanks to Dave Pearson (and other)
https://www.php.net/manual/en/function.com-create-guid.php#119168
Uses the best cryptographically secure method
for all supported platforms with fallback to an older,
less secure version.

  since: 3.0.9
  return: string
end note

note left of Utilities::validGUID
  Validate the Globally Unique Identifier ( and check if table already has this identifier)

  since: 3.0.9
  return: bool
  
  arguments:
    string $guid
    string $table = null
    int $id
    string|null $component = null
end note

note right of Utilities::getGUID
  get the ITEM of a GUID by table

  since: 3.0.9
  return: mix
  
  arguments:
    string $guid
    string $table
    string/array $what = 'a.id'
    string|null $component = null
end note

note left of Utilities::validateGUID
  Validate the Globally Unique Identifier
Thanks to Lewie
https://stackoverflow.com/a/1515456/1429677

  return: bool
end note

note right of Utilities::zip
  The zipper method

  since: 3.0.9
  return: bool
end note

note left of Utilities::getFileContents
  get the content of a file

  since: 3.0.9
  return: string
end note

note right of Utilities::writeFile
  Write a file to the server

  since: 3.0.9
  return: bool
end note

note left of Utilities::getAllFilePaths
  get all the file paths in folder and sub folders

  since: 3.0.9
  return: void
end note

note right of Utilities::getFilePath
  Get the file path or url

  since: 3.0.9
  return: string
  
  arguments:
    string $type = 'path'
    string $target = 'filepath'
    string $fileType = null
    string $key = ''
    string $default = ''
    bool $createIfNotSet = true
end note

note left of Utilities::urlExists
  Check if file exist

  since: 3.0.9
  return: bool
end note

note right of Utilities::setComponentOption
  Set the component option

  since: 3.0.11
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

