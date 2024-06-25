```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# interface MultiSubformInterface (Details)
> namespace: **VDM\Joomla\Interfaces\Data**
> extends: ****
```uml
@startuml
interface MultiSubformInterface  #Lavender {
  + get(array $getMap) : ?array
  + set(array $items, array $setMap) : bool
}

note right of MultiSubformInterface::get
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

note right of MultiSubformInterface::set
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

