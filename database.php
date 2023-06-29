<?php

// connect to the database using a connection object

$conn = mysqli_connect("localhost","root","","net_mgt");

if(!$conn) {
    echo "Unable to connect to the database".mysqli_connect_error();
}
?>