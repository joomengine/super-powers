```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class Message (Details)
> namespace: **VDM\Joomla\Componentbuilder\Import**

```uml
@startuml
class Message << (F,LightGreen) >> #RoyalBlue {
  # Update $update
  # Insert $insert
  - array $success
  - array $error
  - ?string $guid
  - ?string $entity
  - ?string $table
  + __construct(Update $update, Insert $insert)
  + load(string $guid, string $entity, ...) : self
  + get() : object
  + reset() : void
  + archive() : self
  + set() : self
  + addSuccess(string $message) : self
  + addInfo(string $message) : self
  + addError(string $message) : self
}

note right of Message::__construct
  Constructor.

  since: 5.0.2
end note

note left of Message::load
  Load an entity that these message belong to

  since: 5.0.2
  return: self
  
  arguments:
    string $guid
    string $entity
    string $table
end note

note right of Message::get
  Get the messages of the last import event

  since: 5.0.2
  return: object
end note

note left of Message::reset
  Reset the messages of the last import event

  since: 5.0.2
  return: void
end note

note right of Message::archive
  Archive the messages in the DB of the last import event

  since: 5.0.2
  return: self
end note

note left of Message::set
  Set the messages in the DB of the last import event

  since: 5.0.2
  return: self
end note

note right of Message::addSuccess
  Adds a success message to the log.
This method records a success message for the import process. The message provides
relevant information, such as the number of rows processed and the success rate.

  since: 5.0.2
  return: self
end note

note left of Message::addInfo
  Adds a info message to the log.
This method records a info message for the import process. The message provides
relevant information, such as the number of rows processed and the info rate.

  since: 5.0.2
  return: self
end note

note right of Message::addError
  Adds an error message to the log.
This method records an error message when the import process encounters issues.
The message includes details about the failures, such as the number of failed rows
and the corresponding error rate.

  since: 5.0.2
  return: self
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---eef6ffc2_2af0_4336_958f_e0b9cf7c4ad0---Power
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

