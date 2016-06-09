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
    <title>Men</title>
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

   <main>
     <div class="row box hide-on-small-only">
       <div class="col m12 l3 filter">
        <div class="card-panel brown darken-4" style="height: 480px;">
          <span class="white-text card-content">
            <h4>Categories</h4>
            <ul>
              <a href="#" class="white"><li>Men</li></a>
              <a href="#" class="white"><li>Women</li></a>
              <a href="#" class="white"><li>Kids</li></a>
            </ul>
            <br>
            <h4>Filter</h4>
            <form action="#">
              <p>
                <input type="checkbox" id="test5" />
                <label for="test5">Red</label>
              </p>
              <p>
                <input type="checkbox" id="test6" />
                <label for="test6">Yellow</label>
              </p>
              <p>
                <input type="checkbox" id="test7" />
                <label for="test7">White</label>
              </p>
              <p>
                <input type="checkbox" id="test8" />
                <label for="test8">Black</label>
              </p>
              <div class="col s4 l4">
                <button class="btn waves-effect waves-light" type="submit" name="action">Search
                </button>
              </div>
            </form>
          </span>
        </div>
       </div>
       <div class="col m12 l9">
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
              <img src="img/men2.jpg">
              <span class="card-title">Card Title</span>
            </div>
          </div>
        </div>
        <div class="col m4 offset-m4">
          <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!">4</a></li>
            <li class="waves-effect"><a href="#!">5</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div>
      </div>
    </div>
   </main>

   <nav class="cart-nav">
     <ul id="slide-out" class="side-nav">
       <h4 class="cart-title">Cart</h4>
       <div class="divider"></div>
       <div class="cart">
         <ul class="cart-list">
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men1.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men1.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men1.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men1.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men1.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men1.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men1.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
           <li class="cart-item">
            <div class="row valign-wrapper">
              <div class="col s3">
                <img src="img/men2.jpg" alt="" class="circle responsive-img valign">
              </div>
              <div class="col s8 cart-description">
                <span class="black-text cart-content valign">
                  Men Black Suit <br><span class="blue-grey-text text-lighten-2">RM 100</span>
                </span>
              </div>
            </div>
           </li>
         </ul>

       </div>
       <div class="cart-bottom">
         <div class="divider"></div>
         <div class="cart-subtotal">
           Subtotal: RM 300.00
         </div>
         <div class="divider"></div>
         <div class="cart-btns">
           <a class="waves-effect waves-teal btn-flat b-small">View</a>
           <a class="waves-effect waves-teal btn-flat b-small">Checkout</a>
         </div>
       </div>
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

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script type="text/javascript">
      $( document ).ready(function(){
        $(".btn-collapse").sideNav();
        $(".button-collapse").sideNav();
      });
    </script>
  </body>
</html>
