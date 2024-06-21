```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class FormHelper (Details)
> namespace: **VDM\Joomla\Utilities**
> extends: ****
```uml
@startuml
abstract FormHelper  #Orange {
  + {static} xml(array $attributes, ?array $options = null) : ?\SimpleXMLElement
  + {static} append(\SimpleXMLElement $xml, mixed $node) : void
  + {static} comment(\SimpleXMLElement $xml, string $comment) : void
  + {static} attributes(\SimpleXMLElement $xml, array $attributes = []) : void
  + {static} options(\SimpleXMLElement $xml, array $options = []) : void
  + {static} field(array $attributes, string $default = '', ...) : ?FormField
}

note right of FormHelper::xml
  get the field xml

  since: 3.2.0
  return: ?\SimpleXMLElement
end note

note right of FormHelper::append
  xmlAppend
or a stdClass object containing a comment attribute to be injected
before the XML node and a fieldXML attribute containing a SimpleXMLElement

  since: 3.2.0
  return: void
end note

note right of FormHelper::comment
  xmlComment

  since: 3.2.0
  return: void
end note

note right of FormHelper::attributes
  xmlAddAttributes

  since: 3.2.0
  return: void
end note

note right of FormHelper::options
  xmlAddOptions

  since: 3.2.0
  return: void
end note

note right of FormHelper::field
  get the field object

  since: 3.2.0
  return: ?FormField
  
  arguments:
    array $attributes
    string $default = ''
    ?array $options = null
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

