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
    <title>Product</title>
  </head>
  <body class="move-right">
    <header class="no-margin no-padding">
      <div class="navbar-fixed">
        <nav>
         <div class="nav-wrapper blue-grey darken-2">
           <a href="index.php" class="brand-logo">&nbsp;&nbsp;&nbsp;E Mall</a>
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
            <li><a href="cart.php" data-activates="slide-out" class="waves-effect waves-light"><i class="material-icons">shopping_cart</i></a></li>
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
            <li><a href="cart.php" class="waves-effect waves-light"><i class="material-icons left">shopping_cart</i>Shopping Cart</a></li>
            <li><a class="waves-effect waves-light btn">Login</a></li>
           </ul>
         </div>
       </nav>
     </div>
   </header>

   <main class="cart-main">
     <h1>Cart</h1>
     <div class="divider"></div>
     <div>
       <table class="highlight bordered responsive-table">
          <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">clear</i></a></td>
              <td><img src="img/men1.jpg" alt="" class="circle responsive-img valign cart-img"></td>
              <td>Black suit</td>
              <td>$10.00</td>
              <td>2</td>
              <td>$20.00</td>
            </tr>
            <tr>
              <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">clear</i></a></td>
              <td><img src="img/men1.jpg" alt="" class="circle responsive-img valign cart-img"></td>
              <td>Black suit</td>
              <td>$10.00</td>
              <td>2</td>
              <td>$20.00</td>
            </tr>
            <tr>
              <td><a class="waves-effect waves-teal btn-flat"><i class="material-icons">clear</i></a></td>
              <td><img src="img/men1.jpg" alt="" class="circle responsive-img valign cart-img"></td>
              <td>Black suit</td>
              <td>$10.00</td>
              <td>2</td>
              <td>$20.00</td>
            </tr>
          </tbody>
        </table>
     </div>
     <br>
     <ul class="collection">
      <li class="collection-item">Cart Status</li>
      <li class="collection-item">Total <span class="secondary-content">RM 100</span></li>
    </ul>
     <a class="waves-effect waves-light btn">Update</a>
     <a class="waves-effect waves-light btn">Checkout</a>
   </main>

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
  </main>

  </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript">
      $( document ).ready(function(){
        $(".button-collapse").sideNav();
        $(".btn-collapse").sideNav();
        $('select').material_select();
      });
    </script>
  </body>
</html>
