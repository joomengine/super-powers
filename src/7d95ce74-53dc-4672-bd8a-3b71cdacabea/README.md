### JCB! Power
# abstract class Actions (Details)
> namespace: **VDM\Joomla\Componentbuilder\Utilities\Permitted**

```uml
@startuml

abstract Actions  #Orange {
  + {static} get(string $view, ?object $record = null, ...) : Registry
  # {static} resolveUser(mixed $user) : User
  # {static} safe(mixed $value, bool $allowNull = false) : ?string
  # {static} loadActions(string $component) : array
  # {static} hasRecordId(mixed $record) : bool
  # {static} resolveCreatedBy(string $component, string $view, ...) : ?int
  # {static} normalizeTargets(mixed $target) : array
  # {static} componentActions() : array
  # {static} processAction(string $actionName, Registry $result, ...) : void
  # {static} handleOwnEditItem(User $user, Registry $result, ...) : void
  # {static} handleCategoryScope(User $user, Registry $result, ...) : bool
  # {static} finalizeFallback(Registry $result, string $actionName, ...) : void
  # {static} filterActions(string $view, string $action, ...) : bool
  # {static} isOwnRecord(object $record, User $user) : bool
  # {static} hasCategory(object $record) : bool
  # {static} isEditAction(string $actionName, string $view) : bool
  # {static} coreOf(string $actionName) : string
  # {static} categoryActionName(string $actionName, string $view) : string
  # {static} assetComponent(string $component) : string
  # {static} assetItem(string $component, string $view, ...) : string
  # {static} assetCategory(string $component, string $views, ...) : string
}

note right of Actions::get
  Get the permitted actions of a user.

  since: 5.1.4
  return: Registry
  
  arguments:
    string $view
    ?object $record = null
    ?string $views = null
    mixed $target = null
    string $component = 'componentbuilder'
    object $user = null
end note

note left of Actions::resolveUser
  Ensure the user object is a valid Joomla User.

  since: 5.1.4
  return: User
end note

note right of Actions::safe
  Safe string normalization.

  since: 5.1.4
  return: ?string
end note

note left of Actions::loadActions
  Load all ACL actions from the component's access.xml.

  since: 5.1.4
  return: array
end note

note right of Actions::hasRecordId
  Ensure we have a valid record with id.

  since: 5.1.4
  return: bool
end note

note left of Actions::resolveCreatedBy
  Retrieve the created_by field for a given record if missing.

  since: 5.1.4
  return: ?int
  
  arguments:
    string $component
    string $view
    int $id
end note

note right of Actions::normalizeTargets
  Normalize target(s) into array.

  since: 5.1.4
  return: array
end note

note left of Actions::componentActions
  List of component-only actions.

  since: 5.1.4
  return: array
end note

note right of Actions::processAction
  Process a single ACL action and append to Registry.

  since: 5.1.4
  return: void
  
  arguments:
    string $actionName
    Registry $result
    User $user
    string $component
    ?string $view
    ?string $views
    object $record
    array $targets
    array $componentActions
end note

note left of Actions::handleOwnEditItem
  Handle item-level own-edit logic.

  since: 5.1.4
  return: void
  
  arguments:
    User $user
    Registry $result
    string $actionName
    string $component
    string $view
    int $id
    $fallback
end note

note right of Actions::handleCategoryScope
  Handle category-scope permission logic.

  since: 5.1.4
  return: bool
  
  arguments:
    User $user
    Registry $result
    string $actionName
    string $component
    string $views
    string $view
    object $record
    $fallback
end note

note left of Actions::finalizeFallback
  Final fallback rule: global override or block.

  since: 5.1.4
  return: void
  
  arguments:
    Registry $result
    string $actionName
    User $user
    string $component
    string $area
    bool $permission
    bool $catpermission
end note

note right of Actions::filterActions
  Filter action targets.

  since: 5.1.4
  return: bool
  
  arguments:
    string $view
    string $action
    array $targets
end note

note left of Actions::isOwnRecord
  Check if record is owned by current user.

  since: 5.1.4
  return: bool
end note

note right of Actions::hasCategory
  Check if record has category.

  since: 5.1.4
  return: bool
end note

note left of Actions::isEditAction
  Check if action is edit.

  since: 5.1.4
  return: bool
end note

note right of Actions::coreOf
  Extract core segment.

  since: 5.1.4
  return: string
end note

note left of Actions::categoryActionName
  Convert <view>.* to core.* for category ACL consistency.

  since: 5.1.4
  return: string
end note

note right of Actions::assetComponent
  Build component asset name.

  since: 5.1.4
  return: string
end note

note left of Actions::assetItem
  Build item asset name.

  since: 5.1.4
  return: string
  
  arguments:
    string $component
    string $view
    int $id
end note

note right of Actions::assetCategory
  Build category asset name.

  since: 5.1.4
  return: string
  
  arguments:
    string $component
    string $views
    int $catid
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
Super---7d95ce74_53dc_4672_bd8a_3b71cdacabea---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")