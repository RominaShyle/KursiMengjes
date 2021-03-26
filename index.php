
<?php



echo "<pre>";

var_dump($_GET);
echo "</pre>";

echo "<pre>";

var_dump($_POST);
echo "</pre>";

echo "<pre>";

var_dump($_COOKIE);
echo "</pre>";

##COOKIES ##

setcookie("name","John", time() + 7200 , '/', "", 0);

?>



<!DOCTYPE html>
<html lang="en">
<head>

  
    <title>Home</title>

    <?php 

require_once 'head.php';
?>

</head>


<body>


<?php

require_once 'navbar.php';
?>
<div class="container my-4">

<div class="row">
<div class="col-md-8">

<?php 


if(isset($_POST['username']))
echo "<h3>Thank you ". $_POST
['username']  .", your form has been submitted</h3>  
";
else 
echo "Submit your form!";?></div>

<div class="col-md-4 p-4" style="
    background: gainsboro;
">
<form method="Post" action="leksione.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "username" aria-describedby="emailHelp" placeholder="Enter username" value="<?= isset($_COOKIE['name']) ? $_COOKIE['name'] : '' ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form></div>
</div>

</div>
<?php


?>

    
</body>
</html>