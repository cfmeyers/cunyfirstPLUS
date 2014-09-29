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

##  Sections Queries

You can filter Sections by the following:

-  course_id

-  location_id

-  instructor_id

-  semester_id

-  start_after

-  start_before

-  end_before

-  end_after

-  open

-  closed

##  Using `CallAPI()`

First create an associative array with the filter options you want:

~~~

$fields = array('start_after' => '09:00',
                'course_id' => '5',
                'end_before' => '20:00');

~~~

Then name pick your resource:

~~~

$resource = 'sections';

~~~

Then use function `CallAPI` to get an array back with your results:

~~~

$response = CallAPI($resource, $fields);
echo $response;

~~~



