<?php
session_start();

$logged_in = false;

if(isset($_SESSION['usr_id'])) {
    // header("Location: login.php");
    $logged_in = true;
}

include_once 'dbconnect.php';
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
    <link type="text/css" rel="stylesheet" href="css/mystyle.css"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Home</title>
  </head>
  <body>
    <div id="preloader">
      <div id="status">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div><div class="gap-patch">
                <div class="circle"></div>
              </div><div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <header class="no-margin no-padding">
      <div class="navbar-fixed">
        <nav>
         <div class="nav-wrapper blue-grey darken-2">
           <a href="index.php" class="brand-logo">E Mall</a>
           <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <li><a href="#!" class="waves-effect waves-light">Home</a></li>
             <li><a href="#!" class="waves-effect waves-light">Treding</a></li>
             <li><a href="men.php" class="waves-effect waves-light">Men</a></li>
             <li><a href="#!" class="waves-effect waves-light">Women</a></li>
             <li><a href="#!" class="waves-effect waves-light">Kids</a></li>
             <li>
              <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
              </form>
            </li>
            <li><a href="#" data-activates="slide-out" class="btn-collapse waves-effect waves-light"><i class="material-icons">shopping_cart</i></a></li>
              <?php if($logged_in) { ?>
                <li><?php echo $_SESSION['usr_email']; ?></li>
                <li><a href="logout.php" class="waves-effect waves-light btn">Logout</a></li>
              <?php } else { ?>
                <li><a href="login.php" class="waves-effect waves-light btn">Login</a></li>
              <?php } ?>
            </li>
           </ul>
           <ul id="mobile-demo" class="side-nav grey">
             <li><a href="#!" class="waves-effect waves-light">Home</a></li>
             <li><a href="#!" class="waves-effect waves-light">Treding</a></li>
             <li><a href="#!" class="waves-effect waves-light">Men</a></li>
             <li><a href="#!" class="waves-effect waves-light">Women</a></li>
             <li><a href="#!" class="waves-effect waves-light">Kids</a></li>
             <li>
              <form>
              <div class="input-field">
                <input id="search" type="search" required>
                <label for="search"><i class="material-icons">search</i></label>
                <i class="material-icons">close</i>
              </div>
              </form>
            </li>
            <li><a href="#!" class="waves-effect waves-light"><i class="material-icons left">shopping_cart</i>Shopping Cart</a></li>
            <li><a class="waves-effect waves-light btn">Login</a></li>
           </ul>
         </div>
       </nav>
     </div>
   </header>

   <div class="content">
     <div class="slider">
      <ul class="slides">
        <li>
          <img src="img/men2.jpg"> <!-- random image -->
          <div class="caption center-align">
            <h3>This is our big Tagline!</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
        <li>
          <img src="img/men1.jpg"> <!-- random image -->
          <div class="caption left-align">
            <h3>Left Aligned Caption</h3>
            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
          </div>
        </li>
      </ul>
    </div>

    <!-- grid pictures -->
     <div class="row no-margin no-padding box">
       <div class="col s12 m12 l6 no-padding no-margin p-relative grid-pic">
         <img class="responsive-img" src="//emerald.sekizgen.net/wp-content/uploads/2015/07/emerald-209-1024x683.jpg">
         <div class="layer">
         </div>
         <p class="p-absolute">
           Treding
         </p>
       </div>
       <div class="col s12 m12 l6 no-padding">
        <div class="col s12 m6 l6 no-padding p-relative grid-pic">
          <img class="responsive-img" src="img/men1.jpg">
          <div class="layer">
          </div>
          <p class="p-absolute">
            Men
          </p>
        </div>
        <div class="col s12 m6 l6 no-padding p-relative grid-pic">
          <img class="responsive-img" src="img/men1.jpg">
          <div class="layer">
          </div>
          <p class="p-absolute">
            Women
          </p>
        </div>
        <div class="col s12 m6 l6 no-padding p-relative grid-pic">
          <img class="responsive-img" src="img/men1.jpg">
          <div class="layer">
          </div>
          <p class="p-absolute">
            Kids
          </p>
        </div>
        <div class="col s12 m6 l6 no-padding p-relative grid-pic">
          <img class="responsive-img" src="img/men1.jpg">
          <div class="layer">
          </div>
          <p class="p-absolute">
            Testing
          </p>
        </div>
       </div>
    </div>

   </div>

   <nav>
     <ul id="slide-out" class="side-nav">
       <h4 class="cart-title">Cart</h4>
       <div class="divider"></div>
       <li>
        <div class="row valign-wrapper">
          <div class="col s3">
            <img src="img/men.jpg" alt="" class="circle responsive-img">
          </div>
          <div class="col s8">
            <p class="black-text cart-content">
              Men Black Suit
            </p>
            <span class="black-text cart-price">
              RM 100
            </span>
          </div>
        </div>
       </li>
       <li>
         <div class="row valign-wrapper">
           <div class="col s3">
             <img src="img/men1.jpg" alt="" class="circle responsive-img">
           </div>
           <div class="col s8">
             <p class="black-text">
               Men Black Suit
             </p>
           </div>
         </div>
       </li>
       <li>
         <div class="row valign-wrapper">
           <div class="col s3">
             <img src="img/men2.jpg" alt="" class="circle responsive-img">
           </div>
           <div class="col s8">
             <p class="black-text">
               Men Black Suit
             </p>
           </div>
         </div>
       </li>
     </ul>
   </nav>

   <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">E Mall</h5>
          <p class="grey-text text-lighten-4">E Mall operates Southeast Asia’s number one online shopping and selling destination in Indonesia, Malaysia, Philippines, Singapore, Thailand and Vietnam. Pioneering eCommerce in the region, E Mall provides customers with an effortless shopping experience and retailers with simple and direct access to the largest customer base in Southeast Asia.</p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Treding</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Men</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Women</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Kids</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2016 Copyright Text
      <a class="grey-text text-lighten-4 right" href="#!">Made with  <i class="material-icons">favorite</i> by E-mall team.</a>
      </div>
    </div>
  </footer>

    <!--Import jQuery  before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/myscript.js"></script>

    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $(".btn-collapse").sideNav();
        $('.slider').slider({indicators: false, height: 510});
      });
    </script>
  </body>
</html>
