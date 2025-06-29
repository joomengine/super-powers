### JCB! Power
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
Super---79d765b3_7319_4988_9730_446c7f347020---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")