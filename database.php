<?php
// connect to sql database
$con = mysqli_connect("localhost","","","shoutit");

//test connection
if(mysqli_connect_errno ()){
    echo 'Failed to connect: ' .mysqli_connect_error();
}


