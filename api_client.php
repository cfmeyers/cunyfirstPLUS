<?php 
function CallAPI($resource, $fields = false)
{
    $base_url = 'http://cuny-first-papi.herokuapp.com/';
    if ( $fields ){
       $url = $base_url . $resource . '?' . http_build_query($fields);
    }
    else {
       $url = $base_url . $resource;
    }
    $result = file_get_contents($url);

    return json_decode($result);
}



?>