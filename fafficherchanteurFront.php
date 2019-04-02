<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Animation || Uniqlo-Minimalist eCommerce Bootstrap 4 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">
    <style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="images/logo/monalisa.png" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li class="drop"><a href="index.html">Home</a>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="drop"><a href="fafficherchanteurFront.php">Animation</a>
                                        <ul class="dropdown">
                                            <li><a href="fafficherchanteurFront.php">Chanteur</a></li>
                                            <li><a href="faffichertroupeFront.php">Troupes musicales</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="shop.html">Shop</a>
                                    </li>
                                    <li class="drop"><a href="#">pages</a>
                                        <ul class="dropdown">
                                            <li><a href="about.html">about</a></li>
                                            <li><a href="shop.html">shop</a></li>
                                            <li><a href="product-details.html">product details</a></li>
                                            <li><a href="cart.html">cart</a></li>
                                            <li><a href="wishlist.html">wishlist</a></li>
                                            <li><a href="checkout.html">checkout</a></li>
                                            <li><a href="team.html">team</a></li>
                                            <li><a href="login-register.html">login & register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                            
                            <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="fafficherchanteurFront.php">Animation </a>
                                            <ul>
                                                <li><a href="fafficherchanteurFront.php">Chanteur</a></li>
                                                <li><a href="faffichertroupeFront.php">Troupes musicales</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">pages</a>
                                            <ul>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">wishlist</a></li>
                                                <li><a href="checkout.html">checkout</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="login-register.html">login & register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>  
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li>
                                <li><a href="login-register.html"><span class="ti-user"></span></a></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li class="toggle__menu d-none d-md-block"><span class="ti-menu"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                        <div class="search__inner">
                                <form action="recherchechanteur.php" method="get">
                                    <input name="search" placeholder="Search here... " type="text" >
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        
                       

                           
    <?php
                            

        include '../../core/chanteurC.php';

         //$rec =new ReclamationC();
          $produitc=new chanteurC();
        $liste= $produitc->afficherChanteur();
if(isset($_POST['search']))
         { $val=$_POST['search'];
             $pe=new chanteurC();
             $liste=$pe->rechercherchanteurs($val);
             $liste=$pe->afficherChanteur();
                            
                }
	 else if(isset($_GET['ProduitsTries']))
	 {
         $liste = $produitc->triNom();
         $liste = $produitc->afficherChanteur();
	    
	 }
	 else if(isset($_GET['ProduitsTriesA']))
	 {
         $liste = $produitc->triNomA();
         $liste = $produitc->afficherChanteur();
         
	 }
	 else if(isset($_GET['ProduitsTriesZ']))
	 {
         $liste = $produitc->triNomZ();
         $liste = $produitc->afficherChanteur();
	 }
	 else if(isset($_GET['ProduitsTriesDesc']))
	 {
         $liste = $produitc->triNomDesc(); 
         $liste = $produitc->afficherChanteur();
	 }
	 else
	  {  $liste = $produitc->afficherChanteur(); 

	  }

 ?>
  
 
 
 

    <form name="form" > 
          	<h6>Trier par</h6>
          	<select size="1" onChange="location = this.options[this.selectedIndex].value;">
          		<option value="fafficherchanteurFront.php?fafficherchanteurFront=1">Default</option>
          	 <option value="fafficherchanteurFront.php?ProduitsTries=1" >id(low-high)</option> 
          	 <option value="fafficherchanteurFront.php?ProduitsTriesDesc=1" >id(high-low)</option> 
          	  <option value="fafficherchanteurFront.php?ProduitsTriesA=1" >Nom(A-Z)</option> 
          	  <option value="fafficherchanteurFront.php?ProduitsTriesZ=1" >Nom(Z-A)</option> 

          	
              </select> </form>
              
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            
            <!-- Start Offset MEnu -->
    

<div >
    
    

            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="index.html">
                                <img src="images/logo/monalisa.png" alt="logo">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="https://twitter.com/devitemsllc" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            
                            <li><a class="bg--instagram" href="https://www.instagram.com/devitems/" target="_blank" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                            <li><a class="bg--googleplus" href="https://plus.google.com/" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" target="_blank" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/1.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="images/product/sm-img/2.jpg" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.html">View Cart</a></li>
                        <li class="shp__checkout"><a href="checkout.html">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <div class="slider__container slider--one">
            <div class="slider__activation__wrap owl-carousel owl-theme">
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(images/rahma/10.mp4) no-repeat scroll center center / cover ;">
                   
                       
                <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-4 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                               
                                    <h1>Nous <span class="text--theme">Chanteurs</span></h1>
                                    
                                    <div class="slider__btn">
                                    <embed src="images/rahma/10.mp4" loop="true" autostart="true"  allowfullscreen="true" width="1100" height="600">
                                        <a class="htc__btn" href="cart.html">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide slider__full--screen" style="background: rgba(0, 0, 0, 0) url(images/rahma/9.png) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                                <div class="slider__inner">
                                    <h1>Nous<span class="text--theme">Chanteurs</span></h1>
                                    <div class="slider__btn">
                                        <a class="htc__btn" href="cart.html">Book now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
         <!-- Start Bradcaump area -->
         <div class="row product__list">
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 cat--1 col-sm-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/a.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Chames Edine becha</a></h2>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 cat--1 col-sm-12">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/b.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Diana Hayek</a></h2>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/c.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Hessin Eddik</a></h2>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--4">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/d.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Carole Sameha</a></h2>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 cat--1 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/e.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Haifa Wahbi</a></h2>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--3">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/f.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Elissa</a></h2>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/g.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">La Diva Amina</a></h2>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 single__pro col-lg-3 col-md-4 col-sm-12 cat--2">
                            <div class="product foo">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/rahma/h.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="add__to__wishlist">
                                        <a data-toggle="tooltip" title="Add To Wishlist" class="add-to-cart" href="wishlist.html"><span class="ti-heart"></span></a>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Hedi Donia</a></h2>
                                    <ul class="product__price">
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                       
                        </div>
                </div>
            </div>
        </section>
        <!-- Start Bradcaump area -->
  <!--      
<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
    <img src="images/rahma/1.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
    <img src="images/rahma/2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
    <img src="images/rahma/3.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
    <img src="images/rahma/4.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
    <img src="images/rahma/5.jpg" style="width:100%">
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
    <img src="images/rahma/7.jpg" style="width:100%">
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="images/rahma/1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/rahma/2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/rahma/3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/rahma/4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
    </div>
    <div class="column">
      <img class="demo cursor" src="images/rahma/5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Nature and sunrise">
    </div>    
    <div class="column">
      <img class="demo cursor" src="images/rahma/7.jpg" style="width:100%" onclick="currentSlide(6)" alt="Snowy Mountains">
    </div>
  </div>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>-->
    
</body>
        
        <!-- End Bradcaump area -->
        <!-- Start BLog Area -->
        
        
        <div class="htc__blog__area bg__white ptb--120">
            <div class="container">
                <div class="row blog__wrap blog--page clearfix">
                    <!-- Start Single Blog -->
                    
    
                    <table border="1">
                    <thead>
                                        <tr>
                                        <th class="product-price">Id</th>
                                            <th class="product-name">Nom chanteur</th>
                                            <th class="product-quantity">Type</th>
                                            <th class="product-thumbnail">Image</th>
                                          
                                           
                                        </tr>
                                    </thead>



<?PHP
foreach($liste as $row){
    ?>
     <tbody>
    <tr>
    <td><?PHP echo $row['id']; ?></td>
    <td><?PHP echo $row['nom']; ?></td>
    <td><?PHP echo $row['type']; ?></td>
    <td class="product-thumbnail"><a href="#"><img src="images/rahma/9.png" alt="product img" /></a></td>
   

                                          
    
    </tr>
    </tbody>
    <?PHP
}
?>
</table>
                    
                    <!-- End Single Blog -->
              
                    <!-- Start Single Blog -->
                    <!--<div class="col-md-6 col-lg-4 col-sm-12">
                        <div class="blog foo">
                            <div class="blog__inner">
                                <div class="blog__thumb">
                                    <a href="blog-details.html">
                                        <img src="images/blog/blog-img/1.jpg" alt="blog images">
                                    </a>
                                    <div class="blog__post__time">
                                        <div class="post__time--inner">
                                            <span class="date">2</span>
                                            <span class="month">Avril</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog__hover__info">
                                    <div class="blog__hover__action">
                                        <ul class="bl__meta">
                                            <li>By :<a href="#">Rahma</a></li>
                                            <li>Product</li>
                                        </ul>
                                        <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eius.</a></p>
                                        <div class="blog__btn">
                                            <a class="read__more__btn" href="blog-details.html">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- End Single Blog -->
               <!-- </div>-->
                <!-- Start Load More BTn -->
              <!--  <div class="row mt--60">
                    <div class="col-md-12">
                        <div class="htc__loadmore__btn">
                            <a href="#">load more</a>
                        </div>
                    </div>
                </div>-->
                <!-- End Load More BTn -->
            </div>
        </div>
        <!-- End BLog Area -->
        <!-- Start Footer Area -->
        <footer class="htc__foooter__area" style="background: rgba(0, 0, 0, 0) url(images/rahma/8.jpeg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <div class="ft__widget">
                            <div class="ft__logo">
                                <a href="index.html">
                                    <img src="images/logo/monalisa.png" alt="footer logo">
                                </a>
                            </div>
                            <div class="footer__details">
                                <p>Get 10% discount with notified about the latest news and updates.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6 smb-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Newsletter</h2>
                            <div class="newsletter__form">
                                <div class="input__box">
                                    <div id="mc_embed_signup">
                                        <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" novalidate>
                                            <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                <div class="news__input">
                                                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                </div>
                                                <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">

                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>        
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget contact__us">
                            <h2 class="ft__title">Contact Us</h2>
                            <div class="footer__inner">
                                <p> 319 Clematis St. <br> Suite 100 WPB, FL 33401 </p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-2 lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">Follow Us</h2>
                            <ul class="social__icon">
                                <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>© 2018 <a href="https://freethemescloud.com/" target="_blank">Free themes Cloud</a>
                                    All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="shop.html">Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- Bootstrap Framework js -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>