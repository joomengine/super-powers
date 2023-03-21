```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class FileHelper (Details)
> namespace: **VDM\Joomla\Utilities**
```uml
@startuml
abstract FileHelper  #Orange {
  # static $curlError
  + {static} zip(string $workingDirectory, string $filepath) : bool
  + {static} getContent(string $path, string/bool $none = '') : string
  + {static} write(string $path, string $data) : bool
  + {static} getPaths(string $folder, array $fileTypes = array('\.php') : void
  + {static} getPath(string $type = 'path', string $target = 'filepath', ...) : string
  + {static} exists(string $path) : bool
}

note right of FileHelper::zip
  The zipper method

  since: 3.0.9
  return: bool
end note

note right of FileHelper::getContent
  get the content of a file

  since: 3.0.9
  return: string
end note

note right of FileHelper::write
  Write a file to the server

  since: 3.0.9
  return: bool
end note

note right of FileHelper::getPaths
  get all the file paths in folder and sub folders

  since: 3.0.9
  return: void
end note

note right of FileHelper::getPath
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

note right of FileHelper::exists
  Check if file exist

  since: 3.0.9
  return: bool
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

