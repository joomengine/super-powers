```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class MultiSubform (Details)
> namespace: **VDM\Joomla\Data**
> extends: ****
```uml
@startuml
class MultiSubform << (F,LightGreen) >> #RoyalBlue {
  # Subform $subform
  + __construct(Items $subform)
  + get(array $getMap) : ?array
  + set(array $items, array $setMap) : bool
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
'table' =>'data',
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

