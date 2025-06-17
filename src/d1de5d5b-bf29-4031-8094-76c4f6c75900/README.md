### JCB! Power
# interface ContentsInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Git\Repository**
> extends: **ApiInterface**

```uml
@startuml

interface ContentsInterface  #Lavender {
  + get(string $owner, string $repo, ...) : mixed
  + metadata(string $owner, string $repo, ...) : null|array|object
  + create(string $owner, string $repo, ...) : ?object
  + root(string $owner, string $repo, ...) : ?array
  + update(string $owner, string $repo, ...) : ?object
  + delete(string $owner, string $repo, ...) : ?object
  + editor(string $owner, string $repo, ...) : ?string
  + blob(string $owner, string $repo, ...) : ?object
}

note right of ContentsInterface::get
  Get a file from a repository.
Default the repository's default branch (usually master).

  since: 3.2.0
  return: mixed
  
  arguments:
    string $owner
    string $repo
    string $filepath
    ?string $ref = null
end note

note left of ContentsInterface::metadata
  Get the metadata and contents (if a file) of an entry in a repository,
or a list of entries if a directory.
Default the repository's default branch (usually master).

  since: 3.2.0
  return: null|array|object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    ?string $ref = null
end note

note right of ContentsInterface::create
  Create a file in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $content
    string $message
    string $branch = 'master'
    ?string $authorName = null
    ?string $authorEmail = null
    ?string $committerName = null
    ?string $committerEmail = null
    ?string $newBranch = null
    ?string $authorDate = null
    ?string $committerDate = null
    ?bool $signoff = null
end note

note left of ContentsInterface::root
  Get the metadata of all the entries of the root directory.

  since: 3.2.0
  return: ?array
  
  arguments:
    string $owner
    string $repo
    ?string $ref = null
end note

note right of ContentsInterface::update
  Update a file in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $content
    string $message
    string $sha
    string $branch = 'master'
    ?string $authorName = null
    ?string $authorEmail = null
    ?string $committerName = null
    ?string $committerEmail = null
    ?string $authorDate = null
    ?string $committerDate = null
    ?string $fromPath = null
    ?string $newBranch = null
    ?bool $signoff = null
end note

note left of ContentsInterface::delete
  Delete a file in a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $message
    string $sha
    ?string $branch = null
    ?string $authorName = null
    ?string $authorEmail = null
    ?string $committerName = null
    ?string $committerEmail = null
    ?string $authorDate = null
    ?string $committerDate = null
    ?string $newBranch = null
    ?bool $signoff = null
end note

note right of ContentsInterface::editor
  Get the EditorConfig definitions of a file in a repository.

  since: 3.2.0
  return: ?string
  
  arguments:
    string $owner
    string $repo
    string $filepath
    string $ref = null
end note

note left of ContentsInterface::blob
  Get the blob of a repository.

  since: 3.2.0
  return: ?object
  
  arguments:
    string $owner
    string $repo
    string $sha
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
Super---d1de5d5b_bf29_4031_8094_76c4f6c75900---Power
```
> Remember to replace the `---` with `___` to activate this Power in your code.

### Used in [Joomla Component Builder](https://www.joomlacomponentbuilder.com) - [Source](https://git.vdm.dev/joomla/Component-Builder) - [Mirror](https://github.com/vdm-io/Joomla-Component-Builder) - [Download](https://git.vdm.dev/joomla/pkg-component-builder/releases)

---
[![Joomla Volunteer Portal](https://img.shields.io/badge/-Joomla-gold?logo=joomla)](https://volunteers.joomla.org/joomlers/1396-llewellyn-van-der-merwe "Join Llewellyn on the Joomla Volunteer Portal: Shaping the Future Together!") [![Octoleo](https://img.shields.io/badge/-Octoleo-black?logo=linux)](https://git.vdm.dev/octoleo "--quiet") [![Llewellyn](https://img.shields.io/badge/-Llewellyn-ffffff?logo=gitea)](https://git.vdm.dev/Llewellyn "Collaborate and Innovate with Llewellyn on Git: Building a Better Code Future!") [![Telegram](https://img.shields.io/badge/-Telegram-blue?logo=telegram)](https://t.me/Joomla_component_builder "Join Llewellyn and the Community on Telegram: Building Joomla Components Together!") [![Mastodon](https://img.shields.io/badge/-Mastodon-9e9eec?logo=mastodon)](https://joomla.social/@llewellyn "Connect and Engage with Llewellyn on Joomla Social: Empowering Communities, One Post at a Time!") [![X (Twitter)](https://img.shields.io/badge/-X-black?logo=x)](https://x.com/llewellynvdm "Join the Conversation with Llewellyn on X: Where Ideas Take Flight!") [![GitHub](https://img.shields.io/badge/-GitHub-181717?logo=github)](https://github.com/Llewellynvdm "Build, Innovate, and Thrive with Llewellyn on GitHub: Turning Ideas into Impact!") [![YouTube](https://img.shields.io/badge/-YouTube-ff0000?logo=youtube)](https://www.youtube.com/@OctoYou "Explore, Learn, and Create with Llewellyn on YouTube: Your Gateway to Inspiration!") [![n8n](https://img.shields.io/badge/-n8n-black?logo=n8n)](https://n8n.io/creators/octoleo "Effortless Automation and Impactful Workflows with Llewellyn on n8n!") [![Docker Hub](https://img.shields.io/badge/-Docker-grey?logo=docker)](https://hub.docker.com/u/llewellyn "Llewellyn on Docker: Containerize Your Creativity!") [![Open Collective](https://img.shields.io/badge/-Donate-green?logo=opencollective)](https://opencollective.com/joomla-component-builder "Donate towards JCB: Help Llewellyn financially so he can continue developing this great tool!") [![GPG Key](https://img.shields.io/badge/-GPG-blue?logo=gnupg)](https://git.vdm.dev/Llewellyn/gpg "Unlock Trust and Security with Llewellyn's GPG Key: Your Gateway to Verified Connections!")