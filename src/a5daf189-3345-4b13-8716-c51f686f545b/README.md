```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Data (Details)
> namespace: **VDM\Joomla\Service**
> extends: ****
```uml
@startuml
class Data  #Gold {
  + register(Container $container) : void
  + getLoad(Container $container) : Load
  + getInsert(Container $container) : Insert
  + getUpdate(Container $container) : Update
  + getDelete(Container $container) : Delete
  + getItem(Container $container) : Item
  + getItems(Container $container) : Items
  + getSubform(Container $container) : Subform
  + getMultiSubform(Container $container) : MultiSubform
}

note right of Data::register
  Registers the service provider with a DI container.

  since: 3.2.0
  return: void
end note

note left of Data::getLoad
  Get The Load Class.

  since: 3.2.0
  return: Load
end note

note right of Data::getInsert
  Get The Insert Class.

  since: 3.2.0
  return: Insert
end note

note left of Data::getUpdate
  Get The Update Class.

  since: 3.2.0
  return: Update
end note

note right of Data::getDelete
  Get The Delete Class.

  since: 3.2.0
  return: Delete
end note

note left of Data::getItem
  Get The Item Class.

  since: 3.2.0
  return: Item
end note

note right of Data::getItems
  Get The Items Class.

  since: 3.2.0
  return: Items
end note

note left of Data::getSubform
  Get The Subform Class.

  since: 3.2.0
  return: Subform
end note

note right of Data::getMultiSubform
  Get The MultiSubform Class.

  since: 3.2.0
  return: MultiSubform
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

