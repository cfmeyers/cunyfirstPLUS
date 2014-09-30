<?php 
include 'api_client.php';

$fields = array('start_after' => '09:00',
                'course_id' => '5',
                'end_before' => '20:00');
 

$resource = 'sections';


$response = CallAPI($resource, $fields);

print_r($response);


?>