#CUNYfirstPLUS

Instead of having each one of us having a local database, we can use http://cuny-first-papi.herokuapp.com as our joint database.

We can access using the function `CallAPI($resource, $fields)` where `$resource` is the table we want and `$fields` is an associative array (dictionary) of restrictions on our query ("I only want sections that start after 9:00 AM").

##  Tables

-  courses

-  departments

-  institutions

-  instructors

-  locations

-  sections

-  semesters

##  Using `CallAPI()`
    



start_before (e.g. http://cuny-first-papi.herokuapp.com/sections?start_before=09:00)
start_after (e.g. http://cuny-first-papi.herokuapp.com/sections?start_after=09:00)
end_before (e.g. http://cuny-first-papi.herokuapp.com/sections?end_before=09:00)
end_after (e.g. http://cuny-first-papi.herokuapp.com/sections?end_after=09:00)
course_id (e.g. http://cuny-first-papi.herokuapp.com/sections?course_id=4)
location_id (e.g. http://cuny-first-papi.herokuapp.com/sections?location_id=4)
instructor_id (e.g. http://cuny-first-papi.herokuapp.com/sections?instructor_id=4)
semester_id (e.g. http://cuny-first-papi.herokuapp.com/sections?semester_id=1)
open (e.g. http://cuny-first-papi.herokuapp.com/sections?open=true)
closed (e.g. http://cuny-first-papi.herokuapp.com/sections?closed=true)
