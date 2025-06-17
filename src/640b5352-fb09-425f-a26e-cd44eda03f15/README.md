### JCB! Power
# abstract class Helper (Details)
> namespace: **VDM\Joomla\Utilities\Component**

```uml
@startuml

abstract Helper  #Orange {
  + {static} setParams(string $target, mixed $value, ...) : mixed
  + {static} getParams(?string $option = null) : Registry
  + {static} setOption(?string $option) : void
  + {static} getOption(?string $default = 'empty') : ?string
  + {static} getCode(?string $option = null, ?string $default = null) : ?string
  + {static} get(?string $option = null, ?string $default = null) : ?string
  + {static} getNamespace(?string $option = null) : ?string
  + {static} getManifest(?string $option = null) : ?object
  + {static} methodExists(string $method, ?string $option = null) : bool
  + {static} _(string $method, array $arguments = [], ...) : mixed
  + {static} getModel(string $type, string $prefix = 'Administrator', ...) : BaseDatabaseModel
  - {static} getPrefixFromModelPath(string $path) : string
}

note right of Helper::setParams
  Sets a parameter value for the given target in the specified option's params.
If no option is provided, it falls back to the default option.
This method updates the parameters for a given extension in the database,
only if the new value differs from the existing one.

  since: 5.0.3
  return: mixed
  
  arguments:
    string $target
    mixed $value
    ?string $option = null
end note

note left of Helper::getParams
  Gets the parameter object for the component

  since: 3.0.11
  return: Registry
end note

note right of Helper::setOption
  Set the component option

  since: 3.2.0
  return: void
end note

note left of Helper::getOption
  Get the component option

  since: 3.0.11
  return: ?string
end note

note right of Helper::getCode
  Gets the component code name

  since: 3.0.11
  return: ?string
end note

note left of Helper::get
  Gets the component abstract helper class

  since: 3.0.11
  return: ?string
end note

note right of Helper::getNamespace
  Gets the component namespace if set

  since: 3.0.11
  return: ?string
end note

note left of Helper::getManifest
  Gets the component abstract helper class

  since: 3.0.11
  return: ?object
end note

note right of Helper::methodExists
  Check if the helper class of this component has a method

  since: 3.0.11
  return: bool
end note

note left of Helper::_
  Check if the helper class of this component has a method, and call it with the arguments

  since: 3.2.0
  return: mixed
  
  arguments:
    string $method
    array $arguments = []
    ?string $option = null
end note

note right of Helper::getModel
  Returns a Model object based on the specified type, prefix, and configuration.

  since: 5.0.3
  return: BaseDatabaseModel
  
  arguments:
    string $type
    string $prefix = 'Administrator'
    ?string $option = null
    array $config = []
end note

note left of Helper::getPrefixFromModelPath
  Get the prefix from the model path

  since: 5.0.3
  return: string
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
Super---640b5352_fb09_425f_a26e_cd44eda03f15---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")