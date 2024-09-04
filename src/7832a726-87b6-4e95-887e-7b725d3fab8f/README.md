```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---7832a726_87b6_4e95_887e_7b725d3fab8f---Power
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

