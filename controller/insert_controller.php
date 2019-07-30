<?php 
   require_once 'model/model.php';
function insertToLocations()
{


    $link= open_connection('localhost', 'root', '');

    $city = isset($_POST['city']) ? $_POST['city'] : null;
    $zip_code = isset($_POST['zip_code']) ? $_POST['zip_code'] : null;
    $addr = isset($_POST['addr']) ? $_POST['addr'] : null;

    $result = query_database("INSERT INTO locations (city, zip_code, addr)
    VALUES(
    '$city',
    '$zip_code',
    '$addr')", 'cr11_adam_gyarmati_travelmatic', $link);
}
insertToLocations();