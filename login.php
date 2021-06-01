
<?php
session_start();

if(isset($_SESSION['logged_in'])){
    header('Location: welcome.php');

}

else {


require_once 'head.php';
require_once 'navbar.php';

require_once 'database.php';



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



$email = $password = '';
$email_err = $password_err = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){


    //kontrolloj nqs email-i eshte bosh

// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";


if(empty(test_input($_POST['email']))){

    $email_err = 'Email cannot be empty!';
}
else $email = test_input($_POST['email']);

if(empty($_POST['pwd'])){

    $password_err = 'Please enter a password!'; 
}

else  $password = $_POST['pwd'];



if($password_err == '' && $email_err == ''){

    
    $sql = 'SELECT id, email, password, firstname from users where email = ? ';


    if($stmt = $conn->prepare($sql)){


        $stmt->bind_param('s', $param_email);

        $param_email = $email;

        if($stmt->execute()){

            $stmt->store_result();

            if($stmt->num_rows == 1 ){

                $stmt->bind_result($id, $email, $password_hashed, $fname);
                if($stmt->fetch()){


                    if(password_verify($password, $password_hashed)){

                        
                        session_start();
                        $_SESSION['logged_in'] = true;
                        $_SESSION['id'] = $id;
                        $_SESSION['first_name'] = $fname;


                        header('Location: welcome.php');
                    }

                    $password_err = 'Your password is incorrect, please try again!';
                }
                else die ('error at fetching data!');


            }else $email_err=  "Email not found! please sign up!";

        }
      else  die('connection error');

    }
    else 
    die('connection error' . $stmt);


}




}
}

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
    <form class="form-right" method="post">
        <h2 class="text-uppercase">Login form</h2>
        <div class="mb-3"> <label>Your Email</label>
         <input type="email" class="form-control" name="email" required>
         <span> <small> <?= $email_err = empty($email_err) ? '' : $email_err ?></small> </span> </div>
        <div class="row">
            <div class="col-sm-6 mb-3"> <label>Password</label>
             <input type="password" name="pwd" id="pwd" class="form-control"> 
             <span> <small> <?= $password_err = empty($password_err) ? '' : $password_err ?></small> </span> </div>
        </div>
        <div class="form-field"> <input type="submit" value="Login" class="register" name="login"> </div>
    </form>
</div>