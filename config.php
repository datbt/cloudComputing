<?php

session_start();

$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "tutorial"; /* Database name */
$port = '';
$con = pg_connect("host=$host port=<port> dbname=$dbname user=$user password=$password");
// Check connection
if (!$con) {
    echo "An error occurred.\n";
    exit;
}
