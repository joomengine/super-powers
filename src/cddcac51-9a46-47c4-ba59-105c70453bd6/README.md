```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class FilterHelper (Details)
> namespace: **VDM\Joomla\Componentbuilder\Utilities**
> extends: ****
```uml
@startuml
abstract FilterHelper  #Orange {
  + {static} extensions() : string
  + {static} names(string $type, ?string $limiter = null) : ?array
  + {static} linked(int $id, string $method) : ?array
  + {static} namespaces() : ?array
  + {static} namegroup(string $namespace) : ?array
  + {static} translation(int $extension, string $type) : ?array
  + {static} translations($language, $translated = true) : ?array
  + {static} languages() : ?array
  + {static} paths(string $path) : ?array
  + {static} repositories(int $target) : ?array
  - {static} joomla_component_admin_views(int $id) : ?array
  - {static} joomla_component_custom_admin_views(int $id) : ?array
  - {static} joomla_component_site_views(int $id) : ?array
  - {static} joomla_component(int $id) : ?array
  - {static} joomla_module(int $id) : ?array
  - {static} joomla_plugin(int $id) : ?array
  - {static} admin_view(int $id) : ?array
}

note right of FilterHelper::extensions
  get extensions grouped list xml

  since: 3.2.0
  return: string
end note

note left of FilterHelper::names
  Get by type the ids and system names

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::linked
  get any area linked IDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::namespaces
  get the substrings of the namespace until the last "\" or "."

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::namegroup
  get get IDs of powers matching namespaces

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::translation
  get translation extension ids

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::translations
  get translation ids

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::languages
  get available languages

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::paths
  get get IDs of powers link to this path

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::repositories
  get available repositories of target area

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_component_admin_views
  Get a component admin views IDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_component_custom_admin_views
  get a component custom admin views IDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_component_site_views
  get a component site views IDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_component
  get a component fields IDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::joomla_module
  get a module fields IDs

  since: 3.2.0
  return: ?array
end note

note left of FilterHelper::joomla_plugin
  get a plugin fields IDs

  since: 3.2.0
  return: ?array
end note

note right of FilterHelper::admin_view
  get an admin view fields IDs

  since: 3.2.0
  return: ?array
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

