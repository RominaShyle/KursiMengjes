
<?php


require_once 'head.php';
require_once 'navbar.php';

?>

<link rel="stylesheet" href="styles/login.css">
<div class="wrapper">
    <div class="form-left">
        <h2 class="text-uppercase">information</h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo. </p>
        <p class="text"> <span>Sub Head:</span> Vitae auctor eu augudsf ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel. </p>
        <div class="form-field">
        
     <a href="register.php" class="account btn btn-primary" > Don't have an Account? </a> </div>
    </div>
    <form class="form-right">
        <h2 class="text-uppercase">Login form</h2>
        <div class="mb-3"> <label>Your Email</label> <input type="email" class="input-field" name="email" required> </div>
        <div class="row">
            <div class="col-sm-6 mb-3"> <label>Password</label> <input type="password" name="pwd" id="pwd" class="input-field"> </div>
        </div>
        <div class="form-field"> <input type="submit" value="Login" class="register" name="login"> </div>
    </form>
</div>