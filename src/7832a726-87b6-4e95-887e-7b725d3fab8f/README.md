### JCB! Power
# abstract class UserHelper (Details)
> namespace: **VDM\Joomla\Componentbuilder\Utilities**

```uml
@startuml

abstract UserHelper  #Orange {
  + {static} save(array $credentials, int $autologin, ...) : int
  + {static} create(array $credentials, int $autologin, ...) : int
  + {static} update(array $userDetails) : int
  + {static} getUserById(int $id) : User
  + {static} getUserIdByUsername(string $username) : ?int
  + {static} getUserIdByEmail(string $email) : ?int
  # {static} getModelByMode(int $mode) : BaseDatabaseModel
  # {static} prepareUserData(array $credentials, int $mode) : array
  - {static} adminRegister(BaseDatabaseModel $model, array $data) : int
  - {static} handlePostRegistration(int $userId, int $autologin, ...) : int
  - {static} setFormPathForUserClass(int $mode) : void
}

note right of UserHelper::save
  Save user details by either creating a new user or updating an existing user.

  since: 5.0.3
  return: int
  
  arguments:
    array $credentials
    int $autologin
    array $params = ['useractivation' => 0, 'sendpassword' => 1]
    int $mode = 1
end note

note left of UserHelper::create
  Create a user and update the given table.

  since: 5.0.3
  return: int
  
  arguments:
    array $credentials
    int $autologin
    array $params = ['useractivation' => 0, 'sendpassword' => 1]
    int $mode = 1
end note

note right of UserHelper::update
  Update user details.

  since: 5.0.3
  return: int
end note

note left of UserHelper::getUserById
  Method to get an instance of a user for the given id.

  since: 5.0.3
  return: User
end note

note right of UserHelper::getUserIdByUsername
  Retrieve the user ID by username.

  since: 5.0.3
  return: ?int
end note

note left of UserHelper::getUserIdByEmail
  Retrieve the user ID by email.

  since: 5.0.3
  return: ?int
end note

note right of UserHelper::getModelByMode
  Load the correct user model based on the registration mode.

  since: 5.0.3
  return: BaseDatabaseModel
end note

note left of UserHelper::prepareUserData
  Prepare user data array for registration or update.

  since: 5.0.3
  return: array
end note

note right of UserHelper::adminRegister
  Handle the registration process for admin mode.

  since: 5.0.3
  return: int
end note

note left of UserHelper::handlePostRegistration
  Handle post-registration processes like auto-login.

  since: 5.0.3
  return: int
  
  arguments:
    int $userId
    int $autologin
    array $credentials
end note

note right of UserHelper::setFormPathForUserClass
  Address bug on \Joomla\CMS\MVC\Model\FormBehaviorTrait Line 76
The use of JPATH_COMPONENT cause it to load the
active component forms and fields, which breaks the registration model.

  since: 5.0.3
  return: void
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
Super---7832a726_87b6_4e95_887e_7b725d3fab8f---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")