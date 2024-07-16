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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---1198aecf_84c6_45d2_aea8_d531aa4afdfa---Power
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

