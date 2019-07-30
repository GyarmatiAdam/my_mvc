<?php
include 'model/model.php';

function getAllLocations()
{
// Connecting to database
$link= open_connection('localhost', 'root', '');
// Performing SQL query
$result = query_database('SELECT * FROM locations', 'cr11_adam_gyarmati_travelmatic', $link);
// Filling up the array
$locations = array();
while ($row = fetch_results($result))
{
   $locations[] = $row;
}
// Closing connection
close_connection($link);
return $locations;
}
$title = 'List of locations';
$locations = getAllLocations();

?>