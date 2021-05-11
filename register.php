<!DOCTYPE html>
<html lang="en">
<head>

<?php


require_once 'head.php';
require_once 'database.php';


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }




?>
<link rel="stylesheet" href="styles/login.css">
<?php require_once 'navbar.php';
?>
</head>
<body>
<?php 

$first_name = $last_name = $email = $password = $cpwd = '';
$first_name_err = $last_name_err= $email_err= $cpwd_err = $password_err = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){



    if(!empty($_POST['first_name'])){
    $first_name = test_input($_POST['first_name']);
    if(empty($first_name)){
        $first_name_err = "Please enter your first name!";

    }else
    $first_name_err = "Please enter your first name!";
    }




    
    if(!empty($_POST['last_name'])){
        $last_name = test_input($_POST['last_name']);
        if(empty($last_name)){
            $last_name_err = "Please enter your last name!";
    
    }else
    $last_name_err = "Please enter your last name!";
}
    if(!empty($_POST['email'])){


        $email = test_input($_POST['email']);

        if(empty ($email)){

            $email_err = "Please enter an email!";
        }else 
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Invalid email format";
        }
    }else 
    $email_err = "Please enter an email!";


    if(!empty($_POST['password'])){

        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    }

    $password_err = 'Please enter your password';


    

    if(!empty($_POST['cpwd'])){

        if($_POST['cpwd'] != $_POST['password'])
        $cpwd_err = 'Passwords do not match!';
    }
    $cpwd_err = 'Please confirm your password';
}


?>

<div class="wrapper">
    <div class="form-left">
        <h2 class="text-uppercase">information</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo. </p>
        <p class="text"> <span>Sub Head:</span> Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel. </p>
        <div class="form-field">
        
     <a href="login.php" class="account btn btn-primary" > Have an Account? </a> </div>
    </div>
    <form class="form-right" method="POST">
        <h2 class="text-uppercase">Registration form</h2>
        <div class="row">
            <div class="col-sm-6 mb-3"> <label>First Name</label> <input type="text" name="first_name" id="first_name" class="input-field"> </div>
            <div class="col-sm-6 mb-3"> <label>Last Name</label> <input type="text" name="last_name" id="last_name" class="input-field"> </div>
        </div>
        <div class="mb-3"> <label>Your Email</label> <input type="email" class="input-field" name="email" required> </div>
        <div class="row">
            <div class="col-sm-6 mb-3"> <label>Password</label> <input type="password" name="password" id="pwd" class="input-field"> </div>
            <div class="col-sm-6 mb-3"> <label>Confirm Password</label> <input type="password" name="cpwd" id="cpwd" class="input-field"> </div>
        </div>
        <div class="mb-3"> <label class="option">I agree to the <a href="#">Terms and Conditions</a> <input type="checkbox" checked> <span class="checkmark"></span> </label> </div>
        <div class="form-field"> <input type="submit" value="Register" class="register" name="register"> </div>
    </form>
</div>

</body>