<?php
    session_start();
    if (!isset($_SESSION['user_level']) or ($_SESSION['user_level'] != 2))
        {
       header("Location: dashboard.php");
       exit();
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>247 Property - Add Property</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="css/font-awesome-all.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/dashbord-mobile-menu.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/lightcase.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" id="color" href="css/default.css">
</head>

<body class="inner-pages maxw1600 m0a dashboard-bd">
    <!-- Wrapper -->
    <div id="wrapper" class="int_main_wraapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <div class="dash-content-wrap">
            <header id="header-container" class="db-top-header">
                <!-- Header -->
                <div id="header">
                    <div class="container-fluid">
                        <!-- Left Side Content -->
                        <div class="left-side">
                            <!-- Logo -->
                            <div id="logo">
                                <a href="index.html"><img src="images/logo.svg" alt=""></a>
                            </div>
                            <!-- Mobile Navigation -->
                            <div class="mmenu-trigger">
                                <button class="hamburger hamburger--collapse" type="button">
                                    <span class="hamburger-box">
							<span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                            <!-- Main Navigation -->
                            <nav id="navigation" class="style-1">
                                <ul id="responsive">
                                <li><a href="#">Dashboard</a>
                                    <!-- <ul>
                                        <li><a href="#">Home Map</a>
                                            <ul>
                                                <li><a href="index-9.html">Home Map Style 1</a></li>
                                                <li><a href="index-12.html">Home Map Style 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Home Image</a>
                                            <ul>
                                               <li><a href="index.html">Modern Home</a></li>
                                                <li><a href="index-2.html">Home Boxed Image</a></li>
                                                <li><a href="index-3.html">Home Modern Image</a></li>
                                                <li><a href="index-5.html">Home Minimalist Style</a></li>
                                                <li><a href="index-6.html">Home Parallax Image</a></li>
                                                <li><a href="index-8.html">Home Search Form</a></li>
                                                <li><a href="index-10.html">Modern Full Image</a></li>
                                                <li><a href="index-15.html">Home Typed Image</a></li>
                                                <li><a href="index-17.html">Modern Parallax Image</a></li>
                                                <li><a href="index-18.html">Image Filter Search</a>
                                                <li><a href="index-21.html">Parallax Image video</a></li>
												<li><a href="index-23.html">Home Image</a></li>
												<li><a href="index-24.html">Image and video</a></li>
                                            </ul>
                                            </li>
                                            <li><a href="#">Home Video</a>
                                                <ul>
                                                    <li><a href="index-4.html">Home Video Image</a></li>
                                                    <li><a href="index-7.html">Home Video</a></li>
                                                    <li><a href="index-20.html">Home Modern Video</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Slider</a>
                                                <ul>                                                    
                                                    <li><a href="index-11.html">Slider Presentation 2</a></li>
                                                    <li><a href="index-16.html">Slider Presentation 3</a></li>
                                                    <li><a href="index-19.html">Home Modern Slider</a></li>
                                                    <li><a href="index-22.html">Home Image Slider</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Home Styles</a>
                                                <ul>
                                                    <li><a href="index-13.html">Home Style Dark</a></li>
                                                    <li><a href="index-14.html">Home Style White</a></li>
                                                </ul>
                                            </li>
                                    </ul> -->
                                    </li>
                                    <li><a href="#">My Listings</a>
                                        <!-- <ul>
                                            <li><a href="#">Listing Grid</a>
                                                <ul>
                                                    <li><a href="properties-grid-1.html">Grid View 1</a></li>
                                                    <li><a href="properties-grid-2.html">Grid View 2</a></li>
                                                    <li><a href="properties-grid-3.html">Grid View 3</a></li>
                                                    <li><a href="properties-grid-4.html">Grid View 4</a></li>
                                                    <li><a href="properties-full-grid-1.html">Grid Fullwidth 1</a></li>
                                                    <li><a href="properties-full-grid-2.html">Grid Fullwidth 2</a></li>
                                                    <li><a href="properties-full-grid-3.html">Grid Fullwidth 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Listing List</a>
                                                <ul>
                                                    <li><a href="properties-full-list-1.html">List View 1</a></li>
                                                    <li><a href="properties-list-1.html">List View 2</a></li>
                                                    <li><a href="properties-full-list-2.html">List View 3</a></li>
                                                    <li><a href="properties-list-2.html">List View 4</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Listing Map</a>
                                                <ul>
                                                    <li><a href="properties-half-map-1.html">Half Map 1</a></li>
                                                    <li><a href="properties-half-map-2.html">Half Map 2</a></li>
                                                    <li><a href="properties-half-map-3.html">Half Map 3</a></li>
                                                    <li><a href="properties-top-map-1.html">Top Map 1</a></li>
                                                    <li><a href="properties-top-map-2.html">Top Map 2</a></li>
                                                    <li><a href="properties-top-map-3.html">Top Map 3</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Agent View</a>
                                                <ul>
                                                    <li><a href="agents-listing-grid.html">Agent View 1</a></li>
                                                    <li><a href="agents-listing-row.html">Agent View 2</a></li>
                                                    <li><a href="agents-listing-row-2.html">Agent View 3</a></li>
                                                    <li><a href="agent-details.html">Agent Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Agencies View</a>
                                                <ul>
                                                    <li><a href="agencies-listing-1.html">Agencies View 1</a></li>
                                                    <li><a href="agencies-listing-2.html">Agencies View 2</a></li>
                                                    <li><a href="agencies-details.html">Agencies Details</a></li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li><a href="#">Post a Property</a>
                                        <!-- <ul>
                                            <li><a href="single-property-1.html">Single Property 1</a></li>
                                            <li><a href="single-property-2.html">Single Property 2</a></li>
                                            <li><a href="single-property-3.html">Single Property 3</a></li>
                                            <li><a href="single-property-4.html">Single Property 4</a></li>
                                            <li><a href="single-property-5.html">Single Property 5</a></li>
                                            <li><a href="single-property-6.html">Single Property 6</a></li>
                                        </ul>
                                    </li> -->
                                    <li><a href="#">Profile</a>
                                        <!-- <ul>
                                            <li><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop-with-sidebar.html">Product Sidebar</a></li>
                                                    <li><a href="shop-full-page.html">Product Fullpage</a></li>
                                                    <li><a href="shop-single.html">Product Single</a></li>
                                                    <li><a href="shop-checkout.html">Checkout Page</a></li>
                                                    <li><a href="shop-order.html">Order Page</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">User Panel</a>
                                                <ul>
                                                    <li><a href="dashboard.html">Dashboard</a></li>
                                                    <li><a href="user-profile.html">User Profile</a></li>
                                                    <li><a href="my-listings.html">My Properties</a></li>
                                                    <li><a href="favorited-listings.html">Favorited Properties</a></li>
                                                    <li><a href="add-property.html">Add Property</a></li>
                                                    <li><a href="payment-method.html">Payment Method</a></li>
                                                    <li><a href="invoice.html">Invoice</a></li>
                                                    <li><a href="change-password.html">Change Password</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="faq.html">Faq</a></li>
                                            <li><a href="pricing-table.html">Pricing Tables</a></li>
                                            <li><a href="404.html">Page 404</a></li>
                                            <li><a href="login.html">Login</a></li>
                                            <li><a href="register.html">Register</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="under-construction.html">Under Construction</a></li>
                                            <li><a href="ui-element.html">UI Elements</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="#">Subscription</a>
                                        <!-- <ul>
                                            <li><a href="#">Grid Layout</a>
                                                <ul>
                                                    <li><a href="blog-full-grid.html">Full Grid</a></li>
                                                    <li><a href="blog-grid-sidebar.html">With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">List Layout</a>
                                                <ul>
                                                    <li><a href="blog-full-list.html">Full List</a></li>
                                                    <li><a href="blog-list-sidebar.html">With Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul> -->
                                    </li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="login.html">Login</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block"><a href="register.html">Register</a></li>
                                    <li class="d-none d-xl-none d-block d-lg-block mt-5 pb-4 ml-5 border-bottom-0"><a href="add-property.html" class="button border btn-lg btn-block text-center">Add Listing<i class="fas fa-laptop-house ml-2"></i></a></li>
                            </ul>
                            </nav>
                            <div class="clearfix"></div>
                            <!-- Main Navigation / End -->
                        </div>
                        <!-- Left Side Content / End -->
                        <!-- Right Side Content / -->
                        <div class="header-user-menu user-menu">
                            <div class="header-user-name">
                                <!-- username and picture -->
                                <span>
                                    <img src="images/testimonials/ts-1.jpg" alt="">
                                </span>
                                <?php if (isset($_SESSION['fname'])){
                                    echo "{$_SESSION['fname']}";
                                } ?>
                            </div>
                            <ul>
                                <li><a href="user-profile.html"> Edit profile</a></li>
                                <li><a href="add-property.html"> Add Property</a></li>
                                <li><a href="payment-method.html">  Payments</a></li>
                                <li><a href="change-password.html"> Change Password</a></li>
                                <li><a href="logout.php">Log Out</a></li>
                            </ul>
                        </div>
                        <!-- Right Side Content / End -->
                    </div>
                </div>
                <!-- Header / End -->
            </header>
        </div>
        <div class="clearfix"></div>
        <!-- Header Container / End -->

        <!-- START SECTION USER PROFILE -->
        <section class="user-page section-padding pt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-xs-12 pl-0 pr-0 user-dash">
                    <div class="user-profile-box mb-0">
                            <div class="sidebar-header">
                                <!-- <img src="images/logo2.png"  alt="header-logo2.png">  -->
                            </div>
                            <div class="header clearfix">
                                <img src="images/testimonials/ts-1.jpg" alt="avatar" class="img-fluid profile-img">
                            </div>
                            <div class="active-user">
                                <h2><?php if (isset($_SESSION['fname'])){
                                    echo "{$_SESSION['fname']}";
                                } ?></h2>
                            </div>
                            <div class="detail clearfix">
                                <ul class="mb-0">
                                    <li>
                                        <a class="active" href="dashboard.php">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                             Dashboard
                                        </a>
                                    </li>
                                    <li>
                                        <a href="user-profile.html">
                                            <i class="fa fa-user"></i>Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a href="my-listings.html">
                                            <i class="fa fa-list" aria-hidden="true"></i>My Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="favorited-listings.html">
                                            <i class="fa fa-heart" aria-hidden="true"></i>Favorited Properties
                                        </a>
                                    </li>
                                    <li>
                                        <a href="add-property.php">
                                            <i class="fa fa-list" aria-hidden="true"></i>Add Property
                                        </a>
                                    </li>
                                    <li>
                                        <a href="payment-method.html">
                                            <i class="fas fa-credit-card"></i>Payments
                                        </a>
                                    </li>
                                    <li>
                                        <a href="invoice.html">
                                            <i class="fas fa-paste"></i>Invoices
                                        </a>
                                    </li>
                                    <li>
                                        <a href="change-password.html">
                                            <i class="fa fa-lock"></i>Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index.html">
                                            <i class="fas fa-sign-out-alt"></i>Log Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-xs-12 royal-add-property-area section_100 pl-0 user-dash2">
                        <div class="col-lg-12 mobile-dashbord dashbord">
                            <div class="dashboard_navigationbar dashxl">
                                <div class="dropdown">
                                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10 mr-2"></i> Dashboard Navigation</button>
                                    <ul id="myDropdown" class="dropdown-content">
                                        <li>
                                            <a href="dashboard.html">
                                                <i class="fa fa-map-marker mr-3"></i> Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-profile.html">
                                                <i class="fa fa-user mr-3"></i>Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="my-listings.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>My Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a href="favorited-listings.html">
                                                <i class="fa fa-heart mr-3" aria-hidden="true"></i>Favorited Properties
                                            </a>
                                        </li>
                                        <li>
                                            <a class="active" href="add-property.html">
                                                <i class="fa fa-list mr-3" aria-hidden="true"></i>Add Property
                                            </a>
                                        </li>
                                        <li>
                                            <a href="payment-method.html">
                                                <i class="fas fa-credit-card mr-3"></i>Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="invoice.html">
                                                <i class="fas fa-paste mr-3"></i>Invoices
                                            </a>
                                        </li>
                                        <li>
                                            <a href="change-password.html">
                                                <i class="fa fa-lock mr-3"></i>Change Password
                                            </a>
                                        </li>
                                        <li>
                                            <a href="logout.php">
                                                <i class="fas fa-sign-out-alt mr-3"></i>Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Property description and price</h3>
                            <div class="property-form-group">
                                <form method="post" action="addproperty_processor.php" >
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="title">Property Title</label>
                                                <input type="text" name="title" id="title" placeholder="Enter your property title">
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p>
                                                <label for="description">Property Description</label>
                                                <textarea id="description" name="pro-dexc" placeholder="Describe about your property"></textarea>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Select status</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Sale</li>
                                                        <li data-value="2" class="option">Rent</li>
                                                        <li data-value="3" class="option">Shortlet</li>
                                                        <li data-value="4" class="option">Land</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Type</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">Terraced Duplex</li>
                                                        <li data-value="2" class="option">Terraced Bungalow</li>
                                                        <li data-value="3" class="option">Detached Duplex</li>
                                                        <li data-value="4" class="option">Detached Bungalow</li>
                                                        <li data-value="5" class="option">Semi Detached Duplex</li>
                                                        <li data-value="1" class="option">Semi Detached Bungalow</li>
                                                        <li data-value="2" class="option">Flats and Apartment</li>
                                                        <li data-value="3" class="option">Mini Flat</li>
                                                        <li data-value="4" class="option">Terraced Duplex</li>
                                                        <li data-value="5" class="option">Self Contain</li>
                                                        <li data-value="4" class="option">Co-working Space</li>
                                                        <li data-value="5" class="option">House</li>
                                                        <li data-value="1" class="option">Shop in a Mall</li>
                                                        <li data-value="2" class="option">Warehouse</li>
                                                        <li data-value="3" class="option">Office Space</li>
                                                        <li data-value="4" class="option">Shop</li>
                                                        <li data-value="5" class="option">Land</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                            <div class="form-group categories">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Rooms</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option">1</li>
                                                        <li data-value="2" class="option">2</li>
                                                        <li data-value="3" class="option">3</li>
                                                        <li data-value="4" class="option">4</li>
                                                        <li data-value="5" class="option">5</li>
                                                        <li data-value="1" class="option">6</li>
                                                        <li data-value="2" class="option">7</li>
                                                        <li data-value="3" class="option">8</li>
                                                        <li data-value="4" class="option">9</li>
                                                        <li data-value="5" class="option">10</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb">
                                                <label for="price">Price</label>
                                                <input type="text" name="price" placeholder="NGN" id="price">
                                            </p>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <p class="no-mb last">
                                                <label for="area">Area</label>
                                                <input type="text" name="area" placeholder="Mtr" id="area">
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Media</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form action="/file-upload" class="dropzone"></form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>property Location</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="address">Address</label>
                                            <input type="text" name="address" placeholder="Enter Your Address" id="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="city">City</label>
                                            <input type="text" name="city" placeholder="Enter Your City" id="city">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="state">State</label>
                                            <input type="text" name="state" placeholder="Enter Your State" id="state">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="country">Country</label>
                                            <input type="text" name="country" placeholder="Enter Your Country" id="country">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb first">
                                            <label for="latitude">Google Maps latitude</label>
                                            <input type="text" name="latitude" placeholder="Google Maps latitude" id="latitude">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb last">
                                            <label for="longitude">Google Maps longitude</label>
                                            <input type="text" name="longitude" placeholder="Google Maps longitude" id="longitude">
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Extra Information</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <div class="nice-select form-control wide" tabindex="0"><span class="current">Select Age</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">0-1 years</li>
                                                    <li data-value="2" class="option">0-5 years</li>
                                                    <li data-value="1" class="option">0-10 years</li>
                                                    <li data-value="2" class="option">0-15 years</li>
                                                    <li data-value="1" class="option">0-20 years</li>
                                                    <li data-value="2" class="option">0-50 years</li>
                                                    <li data-value="1" class="option">50+ years</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <div class="nice-select form-control wide" tabindex="0"><span class="current">Select Rooms</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">1</li>
                                                    <li data-value="2" class="option">2</li>
                                                    <li data-value="1" class="option">3</li>
                                                    <li data-value="2" class="option">4</li>
                                                    <li data-value="1" class="option">5</li>
                                                    <li data-value="2" class="option">6</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12 dropdown faq-drop">
                                        <div class="form-group categories">
                                            <div class="nice-select form-control wide" tabindex="0"><span class="current">Select Bathrooms</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option">1</li>
                                                    <li data-value="2" class="option">2</li>
                                                    <li data-value="1" class="option">3</li>
                                                    <li data-value="2" class="option">4</li>
                                                    <li data-value="1" class="option">5</li>
                                                    <li data-value="2" class="option">6</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Property Features</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="pro-feature-add pl-0">
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-a" type="checkbox" name="check">
                                                        <label for="check-a">Air Conditioning</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-b" type="checkbox" name="check">
                                                        <label for="check-b">Swimming Pool</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-c" type="checkbox" name="check">
                                                        <label for="check-c">Central Heating</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-d" type="checkbox" name="check">
                                                        <label for="check-d">Laundry Room</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-e" type="checkbox" name="check">
                                                        <label for="check-e">Gym</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-g" type="checkbox" name="check">
                                                        <label for="check-g">Alarm</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-h" type="checkbox" name="check">
                                                        <label for="check-h">Window Covering</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-i" type="checkbox" name="check">
                                                        <label for="check-i">Refrigerator</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-j" type="checkbox" name="check">
                                                        <label for="check-j">TV Cable & WIFI</label>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="fl-wrap filter-tags clearfix">
                                                <div class="checkboxes float-left">
                                                    <div class="filter-tags-wrap">
                                                        <input id="check-k" type="checkbox" name="check">
                                                        <label for="check-k">Microwave</label>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-add-property">
                            <h3>Contact Information</h3>
                            <div class="property-form-group">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="con-name">Name</label>
                                            <input type="text" placeholder="Enter Your Name" id="con-name" name="con-name">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p>
                                            <label for="con-user">Username</label>
                                            <input type="text" placeholder="Enter Your Username" id="con-user" name="con-user">
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb first">
                                            <label for="con-email">Email</label>
                                            <input type="email" placeholder="Enter Your Email" id="con-email" name="con-email">
                                        </p>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <p class="no-mb last">
                                            <label for="con-phn">Phone</label>
                                            <input type="text" placeholder="Enter Your Phone Number" id="con-phn" name="con-phn">
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="add-property-button pt-5">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="prperty-submit-button">
                                            <button type="submit">Submit Property</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION USER PROFILE -->

        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="second-footer">
                <div class="container">
                    <p>2021 © Copyright - All Rights Reserved.</p>
                    <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        <!-- ARCHIVES JS -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/tether.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/mmenu.min.js"></script>
        <script src="js/mmenu.js"></script>
        <script src="js/swiper.min.js"></script>
        <script src="js/swiper.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/slick2.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/smooth-scroll.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/newsletter.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/dashbord-mobile-menu.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/color-switcher.js"></script>
        <script src="js/dropzone.js"></script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>
        <script>
            $(".dropzone").dropzone({
                dictDefaultMessage: "<i class='fa fa-cloud-upload'></i> Click here or drop files to upload",
            });

        </script>
        <script>
            $(".header-user-name").on("click", function() {
                $(".header-user-menu ul").toggleClass("hu-menu-vis");
                $(this).toggleClass("hu-menu-visdec");
            });

        </script>

    </div>
    <!-- Wrapper / End -->
</body>

</html>
