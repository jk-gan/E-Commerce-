<?php
session_start();

if(isset($_SESSION['usr_id'])) {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//set validation error flag as false
$error = false;

//check if form is submitted
if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $address = $_POST['address'];
	  $contactno = $_POST['contactno'];

    //name can contain only alpha characters and space
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
        $error = true;
        $name_error = "Name must contain only alphabets and space";
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Please Enter Valid Email ID";
    }
    if(strlen($password) < 8) {
        $error = true;
        $password_error = "Password must be minimum of 8 characters";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Password and Confirm Password doesn't match";
    }
    if (!preg_match('/.{2,60}$/', $address)) {
  		$error = true;
  		$address_error = "Street address must be valid";
  	}
  	if(!preg_match("/^[+#*\(\)\[\]]*([0-9][ ext+-pw#*\(\)\[\]]*){6,45}$/", $contactno)) {
  		$error = true;
  		$contactno_error = "Please Enter Valid Phone Number";
  	}
    if (!$error) {
      $sql = "INSERT INTO customer(customer_name, customer_email, password, customer_address, contact_number) VALUES('" . $name . "', '" . $email . "', '" . md5($password) . "', '" . $address . "', '" . $contactno . "')";
      if(mysqli_query($conn, $sql)) {
          $successmsg = "Successfully Registered! <a href='login.php'>Click here to Login</a>";
      } else {
          $errormsg = "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/normalize.css"/>
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/register.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Register</title>
  </head>
  <body class="deep-orange lighten-1">
    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="signupform">
      <div class="row">
        <div class="col s10 offset-s1 m6 offset-m3 l4 offset-l4">
          <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span><br>
          <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span><br>
          <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span><br>
          <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span><br>
          <span class="text-danger"><?php if (isset($contactno_error)) echo $contactno_error; ?></span><br>
          <span class="text-danger"><?php if (isset($address_error)) echo $address_error; ?></span><br>
          <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span><br>
          <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span><br>
          <div class="register-card blue-grey lighten-5 z-depth-2">
            <div class="row">
              <div class="input-field col s10 offset-s1 l8 offset-l2">
                <input id="name" type="text" name="name" class="validate">
                <label for="name">Name</label>
              </div>
              <div class="input-field col s10 offset-s1 l8 offset-l2">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s10 offset-s1 m10 offset-m1 l8 offset-l2">
                <input id="password" type="password" name="password" class="validate">
                <label for="password">Password</label>
              </div>
              <div class="input-field col s10 offset-s1 m10 offset-m1 l8 offset-l2">
                <input id="cf_password" type="password" name="cpassword" class="validate">
                <label for="cf_password">Confirmation Password</label>
              </div>
              <div class="input-field col s10 offset-s1 m10 offset-m1 l8 offset-l2">
                <input id="phone" type="text" class="validate" name="contactno" class="validate">
                <label for="phone">Phone</label>
              </div>
              <div class="input-field col s10 offset-s1 m10 offset-m1 l8 offset-l2">
                <textarea id="address" class="materialize-textarea" name="address"></textarea>
                <label for="address">Address</label>
              </div>
              <div class="col s4 offset-s4 l4 offset-l4">
                <button class="btn waves-effect waves-light" type="submit" name="signup">Register
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript">
      $( document ).ready(function(){
      });
    </script>
  </body>
</html>
