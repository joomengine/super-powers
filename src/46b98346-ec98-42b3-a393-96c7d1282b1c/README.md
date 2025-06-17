### JCB! Power
# final class UsersSubform (Details)
> namespace: **VDM\Joomla\Data**

```uml
@startuml

class UsersSubform << (F,LightGreen) >> #RoyalBlue {
  # Items $items
  # string $table
  # array $user
  # User $identity
  # array $activeUsers
  + __construct(Items $items, ?string $table = null)
  + table(string $table) : self
  + get(string $linkValue, string $linkKey, ...) : ?array
  + set(mixed $items, string $indexKey, ...) : bool
  + getTable() : string
  - initializeUserProperties() : void
  - purge(array $items, string $indexKey, ...) : void
  - getUsersDetails(array $items) : array
  - getUserDetails(array $item) : void
  - converter(array $items, array $keySet, ...) : array
  - process(mixed $items, string $indexKey, ...) : array
  - getActiveUsers(string $linkKey, string $linkValue) : array
  - setUserDetails(array $item, array $activeUsers) : int
  - loadUser(array $item, array $activeUsers) : ?User
  - extractUserDetails(array $item, ?User $user) : array
  - assignUserGroups($details, ?User $user, ...) : void
  - saveUserDetails(array $details, int $userId) : int
  - isMultipleSets(array $array) : bool
}

note right of UsersSubform::__construct
  Constructor.

  since: 3.2.2
end note

note left of UsersSubform::table
  Set the current active table

  since: 3.2.2
  return: self
end note

note right of UsersSubform::get
  Get a subform items

  since: 3.2.2
  return: ?array
  
  arguments:
    string $linkValue
    string $linkKey
    string $field
    array $get
    bool $multi = true
end note

note left of UsersSubform::set
  Set a subform items

  since: 3.2.2
  return: bool
  
  arguments:
    mixed $items
    string $indexKey
    string $linkKey
    string $linkValue
end note

note right of UsersSubform::getTable
  Get the current active table

  since: 3.2.2
  return: string
end note

note left of UsersSubform::initializeUserProperties
  Initializes the user properties.

  since: 5.0.2
  return: void
end note

note right of UsersSubform::purge
  Purge all items no longer in subform

  since: 3.2.2
  return: void
  
  arguments:
    array $items
    string $indexKey
    string $linkKey
    string $linkValue
end note

note left of UsersSubform::getUsersDetails
  Get the users details found in the user table.

  since: 5.0.2
  return: array
end note

note right of UsersSubform::getUserDetails
  Get the user details found in the user table.

  since: 5.0.2
  return: void
end note

note left of UsersSubform::converter
  Filters the specified keys from an array of objects or arrays, converts them to arrays,
and sets them by association with a specified key and an incrementing integer.

  since: 3.2.2
  return: array
  
  arguments:
    array $items
    array $keySet
    string $field
    bool $multi
end note

note right of UsersSubform::process
  Processes an array of arrays based on the specified key.

  since: 3.2.2
  return: array
  
  arguments:
    mixed $items
    string $indexKey
    string $linkKey
    string $linkValue
end note

note left of UsersSubform::getActiveUsers
  Get current active Users Linked to this entity

  since: 5.0.2
  return: array
end note

note right of UsersSubform::setUserDetails
  Handles setting user details and saving them.
This function retrieves the user by ID, sets the user details,
and adds appropriate user groups before saving the user.

  since: 5.0.2
  return: int
end note

note left of UsersSubform::loadUser
  Load the user based on the user ID from the item array.

  since: 5.0.2
  return: ?User
end note

note right of UsersSubform::extractUserDetails
  Extract user details from the item array and prepare them for saving.

  since: 5.0.2
  return: array
end note

note left of UsersSubform::assignUserGroups
  Assigns user groups based on existing groups and entity type.

  since: 5.0.2
  return: void
  
  arguments:
    $details
    ?User $user
    array $item
end note

note right of UsersSubform::saveUserDetails
  Save the user details using UserHelper and handle exceptions.

  since: 5.0.2
  return: int
end note

note left of UsersSubform::isMultipleSets
  Function to determine if the array consists of multiple data sets (arrays of arrays).

  since: 5.0.2
  return: bool
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
Super---46b98346_ec98_42b3_a393_96c7d1282b1c---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")