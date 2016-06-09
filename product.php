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
     <br>
     <br>
     <div class="row">
       <div class="col s12 m10 offset-m1 l5 offset-l1">
         <img src="img/men3.jpg" class="responsive-img materialboxed" data-caption="A good quality men suit" />
       </div>
       <div class="col s12 m10 offset-m1 l5">
         <h3>Men Black Suit</h3>
         <h4>RM 150</h4>
         <!-- <div class="rate tooltipped" data-position="left" data-delay="20" data-tooltip="1 customer review">
           <i class="tiny material-icons small-width">star_rate</i>
           <i class="tiny material-icons small-width">star_rate</i>
           <i class="tiny material-icons small-width">star_rate</i>
           <i class="tiny material-icons small-width">star_half</i>
           <i class="tiny material-icons small-width">star_border</i>
         </div> -->
         <!-- <div class="discription section">
           <p>
             Material Design Lite is a light-weight implementation of design, specifically crafted for the web. For more detailed guidelines and specifications for other platforms please refer to the Material Design site. Thats the spirit of material design. Get started now.
           </p>
         </div> -->
         <br>
         <div class="choices">
           <div class="input-field col l8 offset-l2">
              <select>
                <option value="1" selected>S</option>
                <option value="2">M</option>
                <option value="3">L</option>
              </select>
              <label>Size</label>
            </div>
            <div class="input-field col l8 offset-l2">
               <select>
                 <option value="1" selected>Black</option>
                 <option value="2">Blue</option>
                 <option value="3">Grey</option>
               </select>
               <label>Color</label>
            </div>
           <div class="input-field col l2 offset-l2">
             <input type="number" name="name" value="1" min="1">
           </div>
           <div class="col l2 offset-l2">
             <button class="btn-floating btn-large waves-effect waves-light red tooltipped" type="submit" name="action" data-position="top" data-delay="20" data-tooltip="Add to Cart" onclick="Materialize.toast('Successfully added to cart', 2000);">
               <i class="material-icons">add</i>
             </button>
           </div>
           <div class="col l8 offset-l2 offset-m0 offset-s8">
             <p>
               Category: <a href="#">Men</a>
             </p>
           </div>
         </div>
       </div>
     </div>
     <br>
     <div class="row">
      <div class="col s10 offset-s1">
        <ul class="tabs">
          <li class="tab col s3 waves-effect waves-orange"><a class="active" href="#test1">Description</a></li>
          <li class="tab col s3 waves-effect waves-orange"><a href="#test2">Additional Information</a></li>
        </ul>
        <div class="divider"></div>
      </div>
      <div id="test1" class="col s10 offset-s1 tab-content">
        <br>
        <p>
          Jean shorts flannel banjo art party put a bird on it, bitters etsy. Leggings retro 8-bit, cray kinfolk occupy jean shorts tofu truffaut put a bird on it. Selvage mumblecore brooklyn, master cleanse craft beer viral portland. Etsy PBR&B freegan, flexitarian craft beer offal art party hoodie locavore typewriter. Selvage pop-up intelligentsia XOXO gastropub offal. Deep v PBR&B franzen, knausgaard 8-bit slow-carb williamsburg lomo meh. Tilde deep v pabst kale chips truffaut, 8-bit +1 street art.
        </p>

        <p>
          Helvetica pug direct trade, knausgaard forage sriracha messenger bag. Locavore hammock trust fund, flannel jean shorts affogato green juice banh mi messenger bag normcore VHS PBR&B vice put a bird on it irony. Leggings fap bespoke chicharrones deep v, meggings austin retro food truck biodiesel. Hashtag williamsburg chambray, beard keffiyeh street art four loko leggings kogi mlkshk whatever. Before they sold out beard pickled irony whatever, authentic four loko affogato gochujang gentrify williamsburg franzen marfa post-ironic. Flannel bushwick fixie chartreuse hella. Ethical single-origin coffee irony everyday carry.
        </p>
      </div>
      <div id="test2" class="col s10 offset-s1 tab-content">
        <br>
        <ul class="collection">
          <li class="collection-item">Size <span class="secondary-content">Small, Medium, Large</span></li>
          <li class="collection-item">Color <span class="secondary-content">Black, Blue, Grey</span></li>
        </ul>
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
