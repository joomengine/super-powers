```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# abstract class DateHelper (Details)
> namespace: **VDM\Joomla\Utilities**

```uml
@startuml
abstract DateHelper  #Orange {
  + {static} fancyDate(string|int $date, bool $checkStamp = true) : string
  + {static} fancyDynamicDate(string|int $date, bool $checkStamp = true) : string
  + {static} fancyDayTimeDate(string|int $date, bool $checkStamp = true) : string
  + {static} fancyDateTime(string|int $date, bool $checkStamp = true) : string
  + {static} fancyTime(string|int $date, bool $checkStamp = true) : string
  + {static} setDayName(string|int $date, bool $checkStamp = true) : string
  + {static} setMonthName(string|int $date, bool $checkStamp = true) : string
  + {static} setDay(string|int $date, bool $checkStamp = true) : string
  + {static} setMonth(string|int $date, bool $checkStamp = true) : string
  + {static} setYear(string|int $date, bool $checkStamp = true) : string
  + {static} setYearMonth(string|int $date, string $spacer = '/', ...) : string
  + {static} setYearMonthDay(string|int $date, string $spacer = '/', ...) : string
  + {static} setDayMonthYear(string|int $date, string $spacer = '/', ...) : string
  + {static} getValidTimestamp(string|int $date, bool $checkStamp) : int
  + {static} isValidTimeStamp(mixed $timestamp) : bool
  + {static} isValidateDate(string $date, string $format = 'Y-m-d H:i:s') : bool
}

note right of DateHelper::fancyDate
  Convert a date to a human-readable fancy format (e.g., "1st of January 2024").

  since: 3.0.0
  return: string
end note

note left of DateHelper::fancyDynamicDate
  Get a formatted date based on the time period (dynamic format based on age of the date).

  since: 3.0.0
  return: string
end note

note right of DateHelper::fancyDayTimeDate
  Convert a date to a human-readable day, time, and date format (e.g., "Mon 12am 1st of January 2024").

  since: 3.0.0
  return: string
end note

note left of DateHelper::fancyDateTime
  Convert a date to a human-readable time and date format (e.g., "(12:00) 1st of January 2024").

  since: 3.0.0
  return: string
end note

note right of DateHelper::fancyTime
  Convert a time to a human-readable format (e.g., "12:00").

  since: 3.0.0
  return: string
end note

note left of DateHelper::setDayName
  Convert a date to the day name (e.g., "Sunday").

  since: 3.0.0
  return: string
end note

note right of DateHelper::setMonthName
  Convert a date to the month name (e.g., "January").

  since: 3.0.0
  return: string
end note

note left of DateHelper::setDay
  Convert a date to the day with suffix (e.g., "1st").

  since: 3.0.0
  return: string
end note

note right of DateHelper::setMonth
  Convert a date to the numeric month (e.g., "5").

  since: 3.0.0
  return: string
end note

note left of DateHelper::setYear
  Convert a date to the full year (e.g., "2024").

  since: 3.0.0
  return: string
end note

note right of DateHelper::setYearMonth
  Convert a date to a year/month format (e.g., "2024/05").

  since: 3.0.0
  return: string
  
  arguments:
    string|int $date
    string $spacer = '/'
    bool $checkStamp = true
end note

note left of DateHelper::setYearMonthDay
  Convert a date to a year/month/day format (e.g., "2024/05/03").

  since: 3.0.0
  return: string
  
  arguments:
    string|int $date
    string $spacer = '/'
    bool $checkStamp = true
end note

note right of DateHelper::setDayMonthYear
  Convert a date to a day/month/year format (e.g., "03/05/2024").

  since: 3.0.0
  return: string
  
  arguments:
    string|int $date
    string $spacer = '/'
    bool $checkStamp = true
end note

note left of DateHelper::getValidTimestamp
  Convert a date string to a valid timestamp.

  since: 3.0.0
  return: int
end note

note right of DateHelper::isValidTimeStamp
  Check if the input is a valid Unix timestamp.

  since: 3.0.0
  return: bool
end note

note left of DateHelper::isValidateDate
  Check if a string is a valid date according to the specified format.

  since: 3.0.0
  return: bool
end note
 
@enduml
```

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---993fe913_8e36_4800_a5f7_544aa728ee48---Power
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

