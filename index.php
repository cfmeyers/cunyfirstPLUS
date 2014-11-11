<?php 
include 'api_client.php';

$fields = array('start_after' => '09:00', 'course_id' => '6', 'end_before' => '20:00', 'verbose'=>'true');
 

$resource = 'sections';


$response = CallAPI($resource, $fields);

echo "<table>";
echo "<th><td>CFID</td><td>Start Time</td><td>End Time</td></th>";
foreach ($response as $value){
    $course_id = $value['course_id'];
    $cfid = $value['cfid'];
    $start_time = $value['start_time'];
    $end_time = $value['end_time'];
    echo "<p>";
    var_dump($value);
    echo "</p>";
    // echo "<tr>";
    // echo "<td>$course_id</td><td>$cfid</td><td>$start_time </td><td>$end_time</td>";
    // echo "</tr>";

}
echo "</table>";


?>