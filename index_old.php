
<?php

session_start();


if(!isset($_SESSION['counter'])){
  $_SESSION['counter'] = 1;
}else
$_SESSION['counter'] += 1;

// echo "<br>Kam ardhur ne faqe ". $_SESSION['counter'] . " here. <br>";

// echo "<pre>";

// var_dump($_GET);
// echo "</pre>";

// echo "<pre>";

// var_dump($_POST);
// echo "</pre>";

// echo "<pre>";

// var_dump($_SESSION);
// echo "</pre>";


##COOKIES ##

//setcookie("name","John", time() + 7200 , '/', "", 0);



if($_SERVER['REQUEST_METHOD'] == 'POST'){

  if(isset($_POST['username']) && !empty($_POST['username'])){

    $_SESSION['username'] = $_POST['username'];
  }
  if(isset($_POST['remember']) && $_POST['remember'] == 'on'){
   setcookie('username', $_POST['username'], time() + 3600, '/' , "", 0);
   setcookie('password', $_POST['password'], time() + 3600, '/' , "", 0);
  }else
  if(!isset($_POST['remember'])){
    setcookie('username', '', time() - 3600, '/' , "", 0);
    setcookie('password', '', time() - 3600, '/' , "", 0);
  }
}
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
    <div class="row">
        <div class="col-md-6">
<div class="card" style="width: 18rem;">
  <img src="images/avatar4.png" class="card-img-top" alt="...">
  <div class="card-body">
  </div>
</div>
        </div>
        <div class="col-md-6">
    <div class="card" style="width: 18rem;">
  <img src="images/avatar3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  </div>
</div>
        </div>
</div>
<?php 


if(isset($_POST['username']))
echo "<h3>Thank you ". $_POST['username']  .", your form has been submitted</h3>  
";
else 
echo '<div class="alert alert-danger my-3 text-center" role="alert">
Submit your form!
</div>';?></div>


<?php if(!isset($_SESSION['username'])){?>

<div class="col-md-4 p-4" style="
    background: gainsboro;
">


<form method="Post" action="index.php">
  <div class="form-group my-3">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name = "username" aria-describedby="emailHelp" placeholder="Enter username" value="<?= isset($_COOKIE['username']) ? $_COOKIE['username'] : '' ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password']: '' ?>" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" >
  </div>
  <div class="form-check my-3">
    <input type="checkbox" class="form-check-input " id="exampleCheck1" name="remember" <?= isset($_COOKIE['username']) ? 'checked' : '' ?>>
    <label class="form-check-label" for="exampleCheck1">Remember me </label>
  </div>
  <button type="submit" class="btn btn-primary">Log in</button>
</form>
</div>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="fileToUpload" id="fileToUpload">
<input type="submit" value="submit" name="submit" class="btn btn-primary">
</form>
</div>

</div>
<?php

}
else {
?>
<div class="col-md-4">
    <div class="card" style="width: 18rem;">
  <img src="images/avatar3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  </div>
</div>
        </div>
    <?php } ?>
</body>

<script>
$(document).ready(function(){

$.ajax({
    url:"http://api.tvmaze.com/schedule?country=US",
    type:"GET",
    success: function(response){
      $.each(response, function(index, value) {
        console.log(value.show);
    });      
  }
});






})</script>
</html>