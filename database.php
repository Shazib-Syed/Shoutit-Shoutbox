<?php
// connect to sql database
$con = mysqli_connect("localhost","bit_academy","bit_academy","shoutit");

//test connection
if(mysqli_connect_errno ()){
    echo 'Failed to connect: ' .mysqli_connect_error();
}


