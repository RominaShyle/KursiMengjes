<?php

session_start();


if(!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']){


header('Location: login.php');


}


require_once('head.php');
require_once('navbar.php');

?>
<div class="container">


<h3> hi, <?=$_SESSION['first_name'] ?></h3>
</div>



