### JCB! Power
# final class MultiSubform (Details)
> namespace: **VDM\Joomla\Data**

```uml
@startuml

class MultiSubform << (F,LightGreen) >> #RoyalBlue {
  # Subform $subform
  + __construct(Subform $subform)
  + get(array $getMap) : ?array
  + set(mixed $items, array $setMap) : bool
  - getSubformData(array $map, ?array $coreData = null) : ?array
  - setSubformData(array $items, array $map, ...) : bool
  - setLinkValue(string $linkValue, ?array $data = null) : ?string
  - getNestedSubforms(array $getMap, array $subformData, ...) : array
  - setNestedSubforms(array $setMap, array $subformData, ...) : bool
  - processGetSubform(array $getMap, array $subform, ...) : array
  - processSetSubform(array $setMap, array $subform, ...) : bool
  - processGetMap($subform, array $map, ...) : void
  - processSetMap(array $subform, array $map, ...) : bool
  - handleCoreGetMap($subform, array $map, ...) : void
  - handleCoreSetMap(array $subform, array $map, ...) : bool
  - handleRegularGetMap($subform, array $map, ...) : void
  - handleRegularSetMap(array $subform, array $map, ...) : bool
  - validGetMap(array $map) : bool
  - validSetMap(array $map) : bool
  - prepLinkValue(array $subform, array $setMap) : void
}

note right of MultiSubform::__construct
  Constructor.

  since: 3.2.2
end note

note left of MultiSubform::get
  Get a subform items
Example:
$getMap = [
'_core' => [
'table' =>'data',
'linkValue' => $item->guid ?? '',
'linkKey' => 'look',
'field' => 'data',
'get' => ['guid','email','image','mobile_phone','website','dateofbirth']
],
'countries' => [
'table' =>'data_country',
'linkValue' => 'data:guid', // coretable:fieldname
'linkKey' => 'data',
'get' => ['guid','country','currency']
]
];

  since: 3.2.2
  return: ?array
end note

note right of MultiSubform::set
  Set a subform items
Example:
$items,
$setMap = [
'_core' => [
'table' => 'data',
'indexKey' => 'guid',
'linkKey' => 'look',
'linkValue' => $data['guid'] ?? ''
],
'countries' => [
'table' =>'data_country',
'indexKey' => 'guid',
'linkKey' => 'data',
'linkValue' => 'data:guid' // coretable:fieldname
]
];

  since: 3.2.2
  return: bool
end note

note left of MultiSubform::getSubformData
  Fetch data based on provided map configuration.

  since: 3.2.2
  return: ?array
end note

note right of MultiSubform::setSubformData
  Set data based on provided map configuration.

  since: 3.2.2
  return: bool
  
  arguments:
    array $items
    array $map
    ?array $coreData = null
end note

note left of MultiSubform::setLinkValue
  Set the linked value if needed, and posible.

  since: 3.2.2
  return: ?string
end note

note right of MultiSubform::getNestedSubforms
  Recursively process additional subform data.

  since: 3.2.2
  return: array
  
  arguments:
    array $getMap
    array $subformData
    string $table
end note

note left of MultiSubform::setNestedSubforms
  Recursively process additional subform data.

  since: 3.2.2
  return: bool
  
  arguments:
    array $setMap
    array $subformData
    string $table
end note

note right of MultiSubform::processGetSubform
  Process each subform entry based on the map.

  since: 3.2.2
  return: array
  
  arguments:
    array $getMap
    array $subform
    string $table
end note

note left of MultiSubform::processSetSubform
  Process each subform entry based on the map.

  since: 3.2.2
  return: bool
  
  arguments:
    array $setMap
    array $subform
    string $table
end note

note right of MultiSubform::processGetMap
  Process a given map by either fetching nested subforms or handling them directly.

  since: 3.2.2
  return: void
  
  arguments:
    $subform
    array $map
    string $key
    string $table
end note

note left of MultiSubform::processSetMap
  Process a given map by either setting nested subforms or handling them directly.

  since: 3.2.2
  return: bool
  
  arguments:
    array $subform
    array $map
    string $key
    string $table
end note

note right of MultiSubform::handleCoreGetMap
  Handle the processing of '_core' maps in a subform.

  since: 3.2.2
  return: void
  
  arguments:
    $subform
    array $map
    string $key
    string $table
end note

note left of MultiSubform::handleCoreSetMap
  Handle the processing of '_core' maps in a subform.

  since: 3.2.2
  return: bool
  
  arguments:
    array $subform
    array $map
    string $key
    string $table
end note

note right of MultiSubform::handleRegularGetMap
  Handle the processing of regular maps in a subform.

  since: 3.2.2
  return: void
  
  arguments:
    $subform
    array $map
    string $key
    string $table
end note

note left of MultiSubform::handleRegularSetMap
  Handle the processing of regular maps in a subform.

  since: 3.2.2
  return: bool
  
  arguments:
    array $subform
    array $map
    string $key
    string $table
end note

note right of MultiSubform::validGetMap
  Validate the get map configuration for fetching subform data.
Ensures all required keys are present and have valid values.

  since: 3.2.2
  return: bool
end note

note left of MultiSubform::validSetMap
  Validate the set map configuration for fetching subform data.
Ensures all required keys are present and have valid values.

  since: 3.2.2
  return: bool
end note

note right of MultiSubform::prepLinkValue
  Prepare the linkValue needed by the sub-subform

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
Super---e0198c3f_777a_4a0b_87b7_e6a198afc8f9---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")