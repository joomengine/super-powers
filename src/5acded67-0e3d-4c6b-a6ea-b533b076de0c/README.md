```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# trait Guid (Details)
> namespace: **VDM\Joomla\Data**

```uml
@startuml
class Guid << (T,Orange) >> #Turquoise {
  + getGuid(string $key) : string
  + {static} validateGuid(string $guid) : bool
  - fallbackGuid(string $key) : string
  - checkGuid(string $guid, string $key) : string
}

note right of Guid::getGuid
  Returns a GUIDv4 string.
This function uses the best cryptographically secure method
available on the platform with a fallback to an older, less secure version.

  since: 5.0.2
  return: string
end note

note right of Guid::validateGuid
  Validate the Globally Unique Identifier

  since: 5.0.4
  return: bool
end note

note right of Guid::fallbackGuid
  Generates a fallback GUIDv4 using less secure methods.

  since: 5.0.2
  return: string
end note

note right of Guid::checkGuid
  Checks if the GUID value is unique and does not already exist.

  since: 5.0.2
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
Super---5acded67_0e3d_4c6b_a6ea_b533b076de0c---Power
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

