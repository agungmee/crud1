<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "crud1";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if($connection) {
    echo "";
} else {
    echo "Connection Refused". mysqli_connect_error();
}

?>