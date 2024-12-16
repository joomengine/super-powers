```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface GrepInterface (Details)
> namespace: **VDM\Joomla\Interfaces**

```uml
@startuml
interface GrepInterface  #Lavender {
  + get(string $guid, ?array $order = null, ...) : ?object
  + getRemoteGuid() : ?array
  + setBranchField(string $field) : void
  + setBranchDefaultName(?string $name) : void
  + setIndexPath(string $indexPath) : void
  + getRemoteIndex(string $guid) : ?object
  + loadApi(Api $api, ?string $base, ...) : void
}

note right of GrepInterface::get
  Get an item

  since: 3.2.2
  return: ?object
  
  arguments:
    string $guid
    ?array $order = null
    ?object $repo = null
end note

note right of GrepInterface::getRemoteGuid
  Get all remote GUID's

  since: 3.2.0
  return: ?array
end note

note right of GrepInterface::setBranchField
  Set the branch field

  since: 3.2.2
  return: void
end note

note right of GrepInterface::setBranchDefaultName
  Set the DEFAULT branch name (only used if branch field is not found)

  since: 3.2.2
  return: void
end note

note right of GrepInterface::setIndexPath
  Set the index path

  since: 3.2.2
  return: void
end note

note right of GrepInterface::getRemoteIndex
  Get the index of a repo

  since: 3.2.2
  return: ?object
end note

note right of GrepInterface::loadApi
  Loads API config using the provided base URL and token.
This method checks if the base URL contains 'https://git.vdm.dev/'.
If it does, it uses the token as is (which may be null).
If not, it ensures the token is not null by defaulting to an empty string.

  since: 5.0.4
  return: void
  
  arguments:
    Api $api
    ?string $base
    ?string $token
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---c182506a_ab84_439c_b962_1e606b58d545---Power
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

