### JCB! Power
# abstract class Registry (Details)
> namespace: **VDM\Joomla\Abstraction**
> extends: **ActiveRegistry**

```uml
@startuml

abstract Registry  #Orange {
  # ?string $separator
  # ?string $name
  + __construct(mixed $data = null, ?string $separator = null)
  + __get(string $name) : mixed
  + __set(string $name, mixed $value) : void
  + __isset(string $name) : bool
  + __unset(string $name) : void
  + __clone() : void
  + __toString() : string
  + loadString(string $data, string $format = 'JSON', ...) : self
  + loadObject(object $object) : self
  + loadArray(array $array) : self
  + loadFile(string $path, string $format = 'json') : self
  + set(string $path, mixed $value) : self
  + add(string $path, mixed $value, ...) : self
  + get(string $path, mixed $default = null) : mixed
  + remove(string $path) : self
  + exists(string $path) : bool
  + jsonSerialize() : mixed
  + count() : int
  + offsetExists(mixed $offset) : bool
  + offsetGet(mixed $offset) : mixed
  + offsetSet(mixed $offset, mixed $value) : void
  + offsetUnset(mixed $offset) : void
  + getIterator() : \Traversable
  + toArray() : array
  + toObject() : object
  + toString(string $format = 'JSON', array $options = []) : string
  + flatten(?string $separator = null, bool $full = false) : array
  + def(string $path, mixed $default) : mixed
  + merge(Registryinterface $source) : self
  + clear() : self
  + extract(string $path, mixed $default = null, ...) : self
  + append(string $path, mixed $value) : self
  + getName() : ?string
  + setName(?string $name) : self
  + setSeparator(?string $value) : self
  + getSeparator() : ?string
  # arrayToObject(mixed $data) : mixed
  # objectToArray(mixed $data) : mixed
  # arrayMergeRecursive(array $array1, array $array2) : array
  # flattenArray(array $array, string $separator, ...) : array
  # getActiveKeys(string $path) : ?array
}

note right of Registry::__construct
  Constructor.
Initializes the Registry object with optional data.
Can be an array, string, or object.

  since: 5.0.4
end note

note left of Registry::__get
  Magic method to get a value from the registry.
Allows for accessing registry data using object property syntax.

  since: 5.0.4
  return: mixed
end note

note right of Registry::__set
  Magic method to set a value in the registry.
Allows for setting registry data using object property syntax.

  since: 5.0.4
  return: void
end note

note left of Registry::__isset
  Magic method to check if a property is set in the registry.
Allows for using isset() on registry properties.

  since: 5.0.4
  return: bool
end note

note right of Registry::__unset
  Magic method to unset a property in the registry.
Allows for using unset() on registry properties.

  since: 5.0.4
  return: void
end note

note left of Registry::__clone
  Magic method to clone the registry.
Performs a deep copy of the registry data.

  since: 5.0.4
  return: void
end note

note right of Registry::__toString
  Magic method to convert the registry to a string.
Returns the registry data in JSON format.

  since: 5.0.4
  return: string
end note

note left of Registry::loadString
  Loads data into the registry from a string using Joomla's format classes.

  since: 5.0.4
  return: self
  
  arguments:
    string $data
    string $format = 'JSON'
    array $options = []
end note

note right of Registry::loadObject
  Loads data into the registry from an object.

  since: 5.0.4
  return: self
end note

note left of Registry::loadArray
  Loads data into the registry from an array.
The loaded data will be merged into the registry's existing data.

  since: 5.0.4
  return: self
end note

note right of Registry::loadFile
  Loads data into the registry from a file.

  since: 5.0.4
  return: self
end note

note left of Registry::set
  Sets a value into the registry using multiple keys.

  since: 3.2.0
  return: self
end note

note right of Registry::add
  Adds content into the registry. If a key exists,
it either appends or concatenates based on $asArray switch.
Default is $addAsArray = false (if null) in base class.
Override in child class allowed set class property $addAsArray = true.

  since: 3.2.0
  return: self
  
  arguments:
    string $path
    mixed $value
    ?bool $asArray = null
end note

note left of Registry::get
  Retrieves a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: mixed
end note

note right of Registry::remove
  Removes a value (or sub-array) from the registry using multiple keys.

  since: 3.2.0
  return: self
end note

note left of Registry::exists
  Checks the existence of a particular location in the registry using multiple keys.

  since: 3.2.0
  return: bool
end note

note right of Registry::jsonSerialize
  Specify data which should be serialized to JSON.
which is a value of any type other than a resource.

  since: 5.0.4
  return: mixed
end note

note left of Registry::count
  Count elements of the registry.

  since: 5.0.4
  return: int
end note

note right of Registry::offsetExists
  Whether a given offset exists in the registry.

  since: 5.0.4
  return: bool
end note

note left of Registry::offsetGet
  Retrieve the value at a given offset.

  since: 5.0.4
  return: mixed
end note

note right of Registry::offsetSet
  Set the value at a given offset.

  since: 5.0.4
  return: void
end note

note left of Registry::offsetUnset
  Unset the value at a given offset.

  since: 5.0.4
  return: void
end note

note right of Registry::getIterator
  Retrieve an external iterator for the registry.

  since: 5.0.4
  return: \Traversable
end note

note left of Registry::toArray
  Get the registry data as an associative array.

  since: 5.0.4
  return: array
end note

note right of Registry::toObject
  Get the registry data as an object.

  since: 5.0.4
  return: object
end note

note left of Registry::toString
  Converts the registry data to a string in the specified format.

  since: 5.0.4
  return: string
end note

note right of Registry::flatten
  Flattens the registry data into a one-dimensional array.

  since: 5.0.4
  return: array
end note

note left of Registry::def
  Sets a default value if not already set.

  since: 5.0.4
  return: mixed
end note

note right of Registry::merge
  Merges another registry into this one.
The data from the source registry will be merged into this registry,
overwriting any existing values with the same keys.

  since: 5.0.4
  return: self
end note

note left of Registry::clear
  Clears all data from the registry.

  since: 5.0.4
  return: self
end note

note right of Registry::extract
  Extracts a subset of the registry data based on a given path.

  since: 5.0.4
  return: self
  
  arguments:
    string $path
    mixed $default = null
    ?string $separator = null
end note

note left of Registry::append
  Appends content into the registry.
If a key exists, the value will be appended to the existing value.

  since: 5.0.4
  return: self
end note

note right of Registry::getName
  Gets the name of the registry.

  since: 5.0.4
  return: ?string
end note

note left of Registry::setName
  Sets the name of the registry.

  since: 5.0.4
  return: self
end note

note right of Registry::setSeparator
  Sets a separator value

  since: 3.2.0
  return: self
end note

note left of Registry::getSeparator
  Gets the current path separator used in registry paths.

  since: 5.0.4
  return: ?string
end note

note right of Registry::arrayToObject
  Recursively converts an array to an object.
This method is used to convert the internal array data into an object
structure suitable for serialization or other operations that require objects.

  since: 5.0.4
  return: mixed
end note

note left of Registry::objectToArray
  Recursively converts an object to an array.
This method is used to convert data loaded from formats that produce objects
(e.g., JSON, XML) into an array structure for internal storage.

  since: 5.0.4
  return: mixed
end note

note right of Registry::arrayMergeRecursive
  Recursively merges two arrays.
This method merges the elements of two arrays together so that the values of one
are appended to the end of the previous one. It preserves numeric keys.

  since: 5.0.4
  return: array
end note

note left of Registry::flattenArray
  Helper function to recursively flatten the array.

  since: 5.0.4
  return: array
  
  arguments:
    array $array
    string $separator
    bool $full
    array $flattened = []
    string $path = ''
end note

note right of Registry::getActiveKeys
  Get that the active keys from a path

  since: 3.2.0
  return: ?array
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
Super---7e822c03_1b20_41d1_9427_f5b8d5836af7---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")