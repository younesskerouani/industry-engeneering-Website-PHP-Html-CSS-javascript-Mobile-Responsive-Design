<?php

define('DB_SERVER', 'sql304.com');
define('DB_USERNAME', 'if0_383343495');
define('DB_PASSWORD', 'test2');
define('DB_NAME', 'test4');


$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
