<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "projekt2";

$conn = new mysqli($servername, $username, $password,$database);

//kontrollojme nese eshte bere lidhja me serverin


if($conn->connect_error){

    die('<br>Sorry, check your credentials and try again!');
}



echo "jam tek lidhja me databazen";
