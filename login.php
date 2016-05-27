<?php
session_start();

if(isset($_SESSION['usr_id'])!="") {
    header("Location: index.php");
}

include_once 'dbconnect.php';

//check if form is submitted
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $result = mysqli_query($con, "SELECT * FROM users WHERE email = '" . $email. "' and password = '" . md5($password) . "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['usr_id'] = $row['id'];
        $_SESSION['usr_name'] = $row['name'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Email or Password!!!";
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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/login.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Login</title>
  </head>
  <body class="orange darken-1">
    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="loginform">
      <div class="row">
        <div class="col s10 offset-s1 m6 offset-m3 l4 offset-l4">
          <span class=""><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
          <div class="login-card blue-grey lighten-5 z-depth-2">
            <div class="row">
              <div class="input-field col s10 offset-s1 l8 offset-l2">
                <input id="email" type="email" name="email" class="validate">
                <label for="email">Email</label>
              </div>
              <div class="input-field col s10 offset-s1 m10 offset-m1 l8 offset-l2">
                <input id="password" type="password" name="password" class="validate">
                <label for="password">Password</label>
              </div>
              <div class="col s4 offset-s4 l4 offset-l4">
                <button class="btn waves-effect waves-light" type="submit" name="login">Login
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
