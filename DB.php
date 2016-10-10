<?php

//Connect to CSDM WebServer and select DB

$DB = new mysqli(
    'eu-cdbr-azure-west-a.cloudapp.net',
    'b2b3e162e39141',
    '3cbbc206',
    '1303043cm3028'
);
//Test if connection was established, print errors
if($DB -> connect_errno){
    die('Connectfailed'[".$DB->connect_error."]);
}

//Create SQL queries

$Sql_query = "Select * FROM superheros WHERE superpower LIKE %laser%";

// execute the SQL query

$result = $db->query($sql_query);

// iterate over $result object one $row at a time
//use fetch_array() to return an associative array

while ($row = $result -> fetch_array()){
    //print data
    echo "<p>".$row ["SuperheroName"]."</p>";

}

$result -> dose();
$DB-> close();
