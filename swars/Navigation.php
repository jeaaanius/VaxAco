<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S - WARS</title>
    <!-- Bootstrap CSS-->
    <link href="assets/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- Vendors-->
    <link rel="stylesheet" href="assets/vendors/flexslider/flexslider.min.css">
    <link rel="stylesheet" href="assets/vendors/swipebox/css/swipebox.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="assets/vendors/slick/slick-theme.min.css">
    <link rel="stylesheet" href="assets/vendors/animate.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/pageloading/css/component.min.css">
    <link rel="stylesheet" type="text/css" href="assets/vendors/pageloading/sidebartransition/css/component.css">
    <link rel="stylesheet" href="assets/vendors/fullpage/jquery.fullpage.min.css">
    <!-- Font-icon-->
    <link rel="stylesheet" href="assets/fonts/font-icon/style.css">
    <!-- Style-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/layout.css">
    <link rel="stylesheet" type="text/css" href="assets/css/elements.css">
    <link rel="stylesheet" type="text/css" href="assets/css/extra.css">
    <link rel="stylesheet" type="text/css" href="assets/css/widget.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
    <!--link#colorpattern(rel='stylesheet', type='text/css', href='assets/css/color/colordefault.css')-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rancho" rel="stylesheet">
    <!-- Script Loading Page-->
    <script src="assets/vendors/html5shiv.js"></script>
    <script src="assets/vendors/respond.min.js"></script>
    <script src="assets/vendors/pageloading/js/snap.svg-min.js"></script>
    <script src="assets/vendors/pageloading/sidebartransition/js/modernizr.custom.js"></script>
    <style>
        #myBtn {
            box-shadow:0 0 10px 0 rgb(0 0 0 / 20%);
            position: fixed;
            bottom: 40px;
            right: 1.5%;
            display: none;
            z-index: 9;
            background: #f15f2a;
            border: 3px solid #ffffff;
            border-radius: 50%;
            height: 47px;
            width: 47px;
            text-align: center;
            transition: all 0.2s linear;
            color:white;
            font-size:20px;
        }
        #myBtn:hover {
            background-color:#ffbb99;
        }
    </style>
</head>
<body class="st-fullpage">
<div id="st-container" class="st-container">
    <div id="pagewrap" class="pagewrap">
        <div id="html-content" class="wrapper-content">
            <div class="header-sidebar">
                <div id="menu-1" class="menu-content st-menu st-effect-1">
                    <div class="swin-trigger-effects btn-close">
                        <button class="st-btn-efect"> x</button>
                    </div>
                    <div class="search-form search-layout-01">
                    </div>
                    <nav id="main-nav-offcanvas" class="main-nav-wrapper">
                        <div class="main-nav">
                            <ul id="main-nav" class="nav nav-pills">
                                <li><?php include('notification.php') ?></li><br>
                                <li class="dropdown current-menu-item"><a href="home-fullpage.php" class="dropdown-toggle">Home</a></li>
                                <li><a href="#overview">Overview</a></li>
                                <li><a href="#reservation">Reservation</a></li>
                                <li><a href="#menu">Menu</a></li>
                                <li><a href="#ratings">Ratings and Review</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <br><br>
                                <li><button name="logout" style="background-color: transparent;
                border-color:#d70040;"><a href="notification.php?logout='1'" onclick="return confirm('Are you sure you want to logout?')" style="color:#d70040">LOG OUT</a></button></li>
                            </ul>
                        </div>
                    </nav>
                    <ul class="socials socials-about list-unstyled list-inline">
                        <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <header class="header-transparent header-sidebar-menu">
                <div class="header-main">
                    <div id="st-trigger-effects" class="swin-trigger-effects btn-open">
                        <button data-effect="st-effect-1" class="st-btn-efect">&#9776;</button>
                    </div>
                </div>
            </header>
            <div class="page-container">
                <div id="fullpage">
                    <div style="background-image: url('assets/images/slider/header-bg.jpg');
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;" class="section nav-light pdn">
                        <div class="top-header top-bg-video">
                            <div class="slides">
                                <div class="slide-content slide-layout-02 slide-style-02">
                                    <div class="container">
                                        <div class="slide-content-inner text-center">
                                            <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="800" class="slide-title animated">S - WARS</h3>
                                            <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1200" class="slide-sub-title animated"><span class="line-before"></span><span class="line-after"></span><span class="text">Samgyupsalamat </span></p><img src="assets/images/slider/slider3-icon2.png" data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1500" alt="fooday" class="img img-responsive slide-icon animated">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <section class="about-us-session" id="overview">
                            <div class="page-container">
                                <div class="page-content-wrapper">
                                    <section id="about-us" class="about-us-session padding-top-100 padding-bottom-100">
                                        <div class="container">
                                            <div class="swin-sc swin-sc-title">
                                                <p class="top-title"><span>Overview</span></p>
                                                <h3 class="title">Introducing S - WARS </h3>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 colsm-12"><img src="assets/images/pages/meat.jpg" alt="" class="img img-responsive wow zoomIn"></div>
                                                <div class="col-md-6 col-sm-12">
                                                    <p class="des font-bold">Samgyeopsal - Web Application Reservation System (S-WARS)</p>
                                                    <p class="des swin-margin-bottom-40">S-WARS is a web application that aims to provide a quick search and reservation services for craving of users for the well-known Korean style grill restaurant-samgyeopsal.
                                                        This web application will only allow members with a 7 days prior reservation, while non-member can book their reservation for a duration of 24 hours.
                                                        Upon signing up on the website, the user will apply for membership. From tons of samgyeopsal in the Philippines we chose the most common samgyeopsal; which is Samgyupsalamat. </p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </section>
                    </div>                              <!-- RESERVATION -->
                    <div style="background-image: url('assets/images/background/samgyup2.jpg');
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;" class="section nav-light" id="reservation">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7 ft-fixed-area wow fadeInLeft">
                                        <div class="form-pos-01 form-dark-wrapper section-dark">
                                            <div class="swin-sc swin-sc-title style-3 light">
                                                <p class="title"><span>Make A Reservation</span></p>
                                                <p class="subtitle">You can call us directly at <span class="text-default"> 123-4567</span></p>
                                            </div>
                                            <div class="swin-sc swin-sc-contact-form dark mtl">
                                                <form method="post" action="calendar.php">          <!-- Start of Reservation -->
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                            <input type="textbox" id="username" name="username" value=<?php echo $_SESSION['username']?> readonly class="form-control">
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                            <input type="email" id="email" name="email" placeholder="Email" required="" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <div class="fa fa-phone"></div>
                                                            </div>
                                                            <input type="tel" id="phone" required="" placeholder="Phone" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" name="phone" class="form-control">
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-male"></i></div>
                                                            <form method="get">
                                                                <select type="text" placeholder="People" id="people" name="people" class="form-control">
                                                            </form>
                                                            
                                                            <?php 
                                                                $db = mysqli_connect('localhost', 'root', '', 'registration');
                                                                $res_username =$_SESSION['username'];
                                                                $memberhsip_query = "SELECT membership FROM users WHERE username='$res_username'";
                                                                $result = mysqli_query($db, $memberhsip_query);
                                                                $member = mysqli_fetch_assoc($result);

                                                                $option = ($member['membership'] == 'basic') ? 3 : 5;     
                                                                for ($i = 1; $i <= $option; $i++) {
                                                                    echo "<option>$i Person</option>";
                                                                }
                                                                
                                                                // pa send sa session yung number of guest
                                                                // tas email para di redundant yung inputs
                                                                // then automatic idisplay na sya don sa modal field
                                                                // nakaka lusot kasi yung number of guest.

                                                                if(isset($_GET['book_user'])) {
                                                                    $_SESSION['people'] = $_GET['people'];
                                                                } 
                                                            ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <form method="get">
                                                             <div class="swin-btn-wrap center"> <a href="calendar.php"> <span><button class="swin-btn center form-submit" type="submit" name="book_user">Book Table</button></span></a></div>
                                                        </form>
                                                       
                                                    </div>                         
                                                </form>             <!-- End of Reservation -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </div>
                    <div class="section">
                        <section class="product-sesction-03"id="menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="swin-sc swin-sc-title"><br><br><br>
                                            <p class="top-title wow fadeInUp"><span>Top Quality Menu</span></p>
                                            <h3 data-wow-delay="0.3s" class="title wow fadeInUp">Korean BBQ</h3>
                                        </div>
                                        <div data-wow-delay="0.6s" class="products-01 style-01 fadeInUp">
                                            <div class="row" >
                                                    <div class="cat-wrapper main-slider">
                                                        <div class="item"><img src="assets/images/pages/menu 1.jpg"  alt="" class="img img-responsive"></div>
                                                        <div class="item"><img src="assets/images/pages/menu 2.jpg"  alt="" class="img img-responsive"></div>
                                                        <div class="item"><img src="assets/images/pages/menu 3.jpg"  alt="" class="img img-responsive"></div>
                                                        <div class="item"><img src="assets/images/pages/menu 4.jpg"  alt="" class="img img-responsive"></div>
                                                    </div>
                                                    <div class="nav-slider">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div style="background-image: url('assets/images/pages/rating.jpg');
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;" class="section nav-light">
                        <section class="product-sesction-02 padding-top-120 padding-bottom-100" id="ratings">
                            <div class="container">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Ratings and Reviews</span></p>
                                    <h3 style="color:white;filter:brightness(200%)" class="title">Customer Reviews</h3>
                                </div>
                                <div class="swin-sc swin-sc-product products-02 carousel-02">
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div data-slide-toshow="5" class="cat-wrapper-02 main-slider col-md-8">
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                    <div class="products nav-slider">
                                        <div class="row slick-padding">
                                            <div class="col-md-4 col-sm-6 col-xs-12 img img-responsive wow zoomIn">
                                                <div style="background-color:white" class="blog-item item swin-transition">
                                                    <div class="block-img"><br><p style="background-color:white;padding-left:10px; padding-right:10px; text-align:justify;font-style:italic">"Very budget friendly and lots of meat varieties. Friendly and attentive staff.
                                                            It'a good to eat at especially for groups of 4 and above. Might just want to be there earlier because the waiting queue is long. But after the waiting, you'll know it's worth it."</p>
                                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span>4.0</span></div>
                                                    </div>
                                                    <div style="background-color:white;box-shadow:0 0 10px 0 rgb(0 0 0 / 20%);" class="block-content">
                                                        <div class="product-info">
                                                            <ul class="list-inline">
                                                                <li class="author"><span class="text">Ellie-Mae Orozco</span></li>
                                                                <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 img img-responsive wow zoomIn">
                                                <div style="background-color:white" class="blog-item item swin-transition">
                                                    <div class="block-img"><br><p style="background-color:white;padding-left:10px; padding-right:10px; text-align:justify;font-style:italic">"Service was great and speedy. The bulgogi is to die for! All side dishes were also tasty. The only downside is that they use bunch of charcoals (not environment-friendly) which has to be replaced every time the oils from the meat saturates it.
                                                            Had to wait for almost an hour but it was worth waiting. There was no limit on the time and we stayed for at least 4 hours (i think), which is fine coz there were less customers as the store was about to close by the time we left."</p>
                                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span>4.2</span></div>
                                                    </div>
                                                    <div style="background-color:white; box-shadow:0 0 10px 0 rgb(0 0 0 / 20%);" class="block-content">
                                                        <div class="product-info">
                                                            <ul class="list-inline">
                                                                <li class="author"><span class="text">Ryan Aguirre</span></li>
                                                                <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-full"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 img img-responsive wow zoomIn">
                                                <div style="background-color:white" class="blog-item item swin-transition">
                                                    <div class="block-img"><br><p style="background-color:white;padding-left:10px; padding-right:10px; text-align:justify;font-style:italic">"Worth the wait. If you just walk in, better if you'll be there as early as their opening time so that you can secure a slot for lunch. My bf and I love the unli meat.
                                                            Staff would assist you somehow though it really takes time to approach because of many customers they entertain. Nevertheless, our experience is good!"</p>
                                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span>4.5</span></div>
                                                    </div>
                                                    <div style="background-color:white;box-shadow:0 0 10px 0 rgb(0 0 0 / 20%);" class="block-content">
                                                        <div class="product-info">
                                                            <ul class="list-inline">
                                                                <li class="author"><span class="text">Stefano Silva</span></li>
                                                                <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 img img-responsive wow zoomIn">
                                                <div style="background-color:white" class="blog-item item swin-transition">
                                                    <div class="block-img"><br><p style="background-color:white;padding-left:10px; padding-right:10px; text-align:justify;font-style:italic">"well i love Korean cuisine the meat are great i love it! i love the ambiance here also. the only thing i didn't like was the service.
                                                            well i hope next time they can accommodate their customers well. but still i will definitely be back here."</p>
                                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span>3.7</span></div>
                                                    </div>
                                                    <div style="background-color:white;box-shadow:0 0 10px 0 rgb(0 0 0 / 20%);" class="block-content">
                                                        <div class="product-info">
                                                            <ul class="list-inline">
                                                                <li class="author"><span class="text">Jay-Jay Campos</span></li>
                                                                <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6 col-xs-12 img img-responsive wow zoomIn">
                                                <div style="background-color:white" class="blog-item item swin-transition">
                                                    <div class="block-img"><br><p style="background-color:white;padding-left:10px; padding-right:10px; text-align:justify;font-style:italic">"I ate here together with some friends and we decided to get the Unlimited 2 option wherein we can have both Pork and Beef. The meats are thick and does not burn easily.
                                                            Also, the charcoal grill is better now. The side dishes are generous in serving."</p>
                                                        <div class="block-circle price-wrapper"><span class="price woocommerce-Price-amount amount"><span class="price-symbol"></span>4.4</span></div>
                                                    </div>
                                                    <div style="background-color:white;box-shadow:0 0 10px 0 rgb(0 0 0 / 20%);" class="block-content">
                                                        <div class="product-info">
                                                            <ul class="list-inline">
                                                                <li class="author"><span class="text">Glenn Lee</span></li>
                                                                <li class="rating"><a href="javascript:void(0)"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </section>
                    </div>
                    <div style="background-color:white;
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;" class="section pbn">
                                <?php
                                // $db = mysqli_connect('localhost', 'root', '', 'registration');
                                // $res_username =$_SESSION['username']; ;
                                // $memberhsip_query = "SELECT membership FROM users WHERE username='$res_username'";
                                // $result = mysqli_query($db, $memberhsip_query);
                                // $member = mysqli_fetch_assoc($result);
                                    if($member['membership']=='member'){
                                        $_SESSION['product'] = 'Basic Plan'; 
                                        $_SESSION['price'] = 'P0 ';
                                        $_SESSION['button'] = 'Cancel Membership';
                                        $_SESSION['note'] = 'Reverting Membership to Basic Plan for '.$_SESSION['username'].'<br><br>Disregard Billing Address and Payment Information ';
                                        $place1 = 'payment.php'; $place2 = '#';
                                    }else{
                                        $_SESSION['product'] = 'Member Plan'; 
                                        $_SESSION['price'] = 'P50/month';
                                        $_SESSION['button'] = 'Continue to Checkout';
                                        $_SESSION['note'] = 'Availing Membership Plan for '.$_SESSION['username'];
                                        $place1 = '#'; $place2 = 'payment.php';
                                    }
                                ?>
                        <section class="blog-section-03 padding-top-100 padding-bottom-100" id="pricing">
                            <div class="container">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Pricing</span></p>
                                    <h3 class="title">Membership Plan</h3>
                                </div>
                                <div class="swin-sc swin-sc-blog-masonry">
                                    <div class="grid">
                                        <div class="grid-sizer col-md-1 col-sm-1 col-xs-1"></div>
                                        <div class="grid-item col-md-6 col-sm-6 grid-item-ha">
                                            <div class="blog-item img img-responsive wow zoomIn">
                                                <div class="blog-info clearfix">
                                                    <div class="blog-info-item blog-author">
                                                        <h1 style="font-weight:bold; margin-left:150px;font-family:Poppins,sans-serif" class="blog-title">BASIC</h1>
                                                    </div>
                                                </div>
                                                <div class="blog-featured-img"></div>
                                                <h1 style="visibility:hidden" class="blog-title"><a href="#" class="swin-transition" >BASIC</a></h1>
                                                <div class="blog-content"><br>
                                                    <div class="blog-date"><h3>FREE</h3></div>
                                                    <p style="text-align:center" class="blog-description">Reservation is made at least 24 hours in advance</p>
                                                    <p style="text-align:center" class="blog-description">No Cancellation Refund</p>
                                                    <p style="text-align:center" class="blog-description">✓ Reservation History</p>
                                                    <p style="text-align:center" class="blog-description">Maximum of 1 active reservations</p>
                                                    <p style="text-align:center" class="blog-description">Maximum of 3 guests per reservations</p>
                                                    <br>
                                                    <p style="font-size:8px;text-align:center" class="blog-description">*Full refunds will be issued for cancellations made at least 36 hour(s) before the reservation*</p>
                                                    <p style="font-size:8px;text-align:center" class="blog-description">*Maximum number of guests includes the one who reserved.*</p>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="swin-btn-wrap center"><a href=<?php echo $place1 ?> class="swin-btn center form-submit"> <span>GET PLAN</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid-item col-md-6 col-sm-6 grid-item-ha">
                                            <div class="blog-item img img-responsive wow zoomIn">
                                                <div class="blog-info clearfix">
                                                    <div class="blog-info-item blog-author">
                                                        <h1 style="font-weight:bold; margin-left:130px;font-family:Poppins,sans-serif" class="blog-title">MEMBERS</h1>
                                                    </div>
                                                </div>
                                                <div class="blog-featured-img"></div>
                                                <h1 style="visibility:hidden" class="blog-title"><a href="#" class="swin-transition">MEMBERS</a></h1>
                                                <div class="blog-content"><br>
                                                    <div class="blog-date"><h4>₱ 50 / MONTH</h4></div>
                                                    <p style="text-align:center" class="blog-description">Reservation is made at least 7 day(s) in advance</p>
                                                    <p style="text-align:center" class="blog-description">No Cancellation Refund</p>
                                                    <p style="text-align:center" class="blog-description">✓ Reservation History</p>
                                                    <p style="text-align:center" class="blog-description">Maximum of 5 active reservations</p>
                                                    <p style="text-align:center" class="blog-description">Maximum of 5 guests per reservations</p>
                                                    <br>
                                                    <p style="font-size:8px;text-align:center" class="blog-description">*Full refunds will be issued for cancellations made at least 36 hour(s) before the reservation*</p>
                                                    <p style="font-size:8px;text-align:center" class="blog-description">*Maximum number of guests includes the one who reserved.*</p>
                                                    <br>
                                                    <div class="form-group">
                                                        <div class="swin-btn-wrap center"><a href=<?php echo $place2 ?> class="swin-btn center form-submit" name="member_pay"> <span>GET PLAN</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div style="background-image: url('assets/images/background/samgyup3.jpg');
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover; class="section pbn nav-light">
                        <footer>
                            <div class="footer-mains">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="ft-fixed-area wow fadeInLeft">
                                                <div class="reservation-box">
                                                    <div class="reservation-wrap">
                                                        <h3 class="res-title">Opening Hours</h3>
                                                        <div class="res-date-time">
                                                            <div class="res-date-time-item">
                                                                <div class="res-date">
                                                                    <div class="res-date-item">
                                                                        <div class="res-date-text">
                                                                            <p>Monday:</p>
                                                                        </div>
                                                                        <div class="res-date-dot">.......................................</div>
                                                                    </div>
                                                                </div>
                                                                <div class="res-time">
                                                                    <div class="res-time-item">
                                                                        <p>9AM - 9PM</p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="res-date-time-item">
                                                                <div class="res-date">
                                                                    <div class="res-date-item">
                                                                        <div class="res-date-text">
                                                                            <p>Tuesday:</p>
                                                                        </div>
                                                                        <div class="res-date-dot">.......................................</div>
                                                                    </div>
                                                                </div>
                                                                <div class="res-time">
                                                                    <div class="res-time-item">
                                                                        <p>9AM - 9PM</p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="res-date-time-item">
                                                                <div class="res-date">
                                                                    <div class="res-date-item">
                                                                        <div class="res-date-text">
                                                                            <p>Wednesday:</p>
                                                                        </div>
                                                                        <div class="res-date-dot">.......................................</div>
                                                                    </div>
                                                                </div>
                                                                <div class="res-time">
                                                                    <div class="res-time-item">
                                                                        <p>9AM - 9PM</p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="res-date-time-item">
                                                                <div class="res-date">
                                                                    <div class="res-date-item">
                                                                        <div class="res-date-text">
                                                                            <p>Thursday:</p>
                                                                        </div>
                                                                        <div class="res-date-dot">.......................................</div>
                                                                    </div>
                                                                </div>
                                                                <div class="res-time">
                                                                    <div class="res-time-item">
                                                                        <p>9AM - 9PM</p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="res-date-time-item">
                                                                <div class="res-date">
                                                                    <div class="res-date-item">
                                                                        <div class="res-date-text">
                                                                            <p>Friday:</p>
                                                                        </div>
                                                                        <div class="res-date-dot">.......................................</div>
                                                                    </div>
                                                                </div>
                                                                <div class="res-time">
                                                                    <div class="res-time-item">
                                                                        <p>9AM - 9PM</p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="res-date-time-item">
                                                                <div class="res-date">
                                                                    <div class="res-date-item">
                                                                        <div class="res-date-text">
                                                                            <p>Saturday:</p>
                                                                        </div>
                                                                        <div class="res-date-dot">.......................................</div>
                                                                    </div>
                                                                </div>
                                                                <div class="res-time">
                                                                    <div class="res-time-item">
                                                                        <p>9AM - 9PM</p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                            <div class="res-date-time-item">
                                                                <div class="res-date">
                                                                    <div class="res-date-item">
                                                                        <div class="res-date-text">
                                                                            <p>Sunday:</p>
                                                                        </div>
                                                                        <div class="res-date-dot">.......................................</div>
                                                                    </div>
                                                                </div>
                                                                <div class="res-time">
                                                                    <div class="res-time-item">
                                                                        <p>9AM - 9PM</p>
                                                                    </div>
                                                                </div>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <h3 class="res-title">Reservation Number</h3>
                                                        <p class="res-number">123 - 4567</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="ft-widget-area">
                                                <div class="ft-area1">
                                                    <div class="swin-wget swin-wget-about">
                                                        <div class="clearfix"><a class="wget-logo"></a>
                                                            <ul class="socials socials-about list-unstyled list-inline">
                                                                <li><a href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                                                                <li><a href="https://twitter.com"><i class="fa fa-twitter"></i></a></li>
                                                                <li><a href="https://pinterest.com"><i class="fa fa-pinterest"></i></a></li>
                                                                <li><a href="https://myaccount.google.com/"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="wget-about-content">
                                                            <p>The S-WARS web application aims to provide quick search and reservation services to fulfill the cravings of the user for the well-known Korean style grill restaurant—samgyeopsal.
                                                                Summary access to the desired information is included in each marked area, ranging from: restaurant overview, menu, ratings and reviews, pricing, and the booking page.
                                                                Fast tap to your cravings at S-WARS.</p>
                                                        </div>
                                                        <div class="about-contact-info clearfix">
                                                            <div class="address-info">
                                                                <div class="info-icon"><i class="fa fa-map-marker"></i></div>
                                                                <div class="info-content">
                                                                    <p>P. Paredes St, Sampaloc, Manila, 1015 Metro Manila </p>
                                                                </div>
                                                            </div>
                                                            <div class="phone-info">
                                                                <div class="info-icon"><i class="fa fa-mobile-phone"></i></div>
                                                                <div class="info-content">
                                                                    <p>(02) 8281 8888</p>
                                                                    <p>(02) 1234 5678</p>
                                                                </div>
                                                            </div>
                                                            <div class="email-info">
                                                                <div class="info-icon"><i class="fa fa-envelope"></i></div>
                                                                <div class="info-content">
                                                                    <p>admin@swars.com</p>
                                                                    <p>support@swars.com</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                </div>
            </div><a id="totop" href="#" class="animated"><i class="fa fa-angle-double-up"></i></a>
        </div>
        <div id="loader" data-opening="m -5,-5 0,70 90,0 0,-70 z m 5,35 c 0,0 15,20 40,0 25,-20 40,0 40,0 l 0,0 C 80,30 65,10 40,30 15,50 0,30 0,30 z" class="pageload-overlay">
            <div class="loader-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewbox="0 0 80 60" preserveaspectratio="none">
                    <path d="m -5,-5 0,70 90,0 0,-70 z m 5,5 c 0,0 7.9843788,0 40,0 35,0 40,0 40,0 l 0,60 c 0,0 -3.944487,0 -40,0 -30,0 -40,0 -40,0 z"></path>
                </svg>
                <div class="sk-circle">
                    <div class="sk-circle1 sk-child"></div>
                    <div class="sk-circle2 sk-child"></div>
                    <div class="sk-circle3 sk-child"></div>
                    <div class="sk-circle4 sk-child"></div>
                    <div class="sk-circle5 sk-child"></div>
                    <div class="sk-circle6 sk-child"></div>
                    <div class="sk-circle7 sk-child"></div>
                    <div class="sk-circle8 sk-child"></div>
                    <div class="sk-circle9 sk-child"></div>
                    <div class="sk-circle10 sk-child"></div>
                    <div class="sk-circle11 sk-child"></div>
                    <div class="sk-circle12 sk-child"></div>
                </div>
                <div class="sk-circle sk-circle-out">
                    <div class="sk-circle1 sk-child"></div>
                    <div class="sk-circle2 sk-child"></div>
                    <div class="sk-circle3 sk-child"></div>
                    <div class="sk-circle4 sk-child"></div>
                    <div class="sk-circle5 sk-child"></div>
                    <div class="sk-circle6 sk-child"></div>
                    <div class="sk-circle7 sk-child"></div>
                    <div class="sk-circle8 sk-child"></div>
                    <div class="sk-circle9 sk-child"></div>
                    <div class="sk-circle10 sk-child"></div>
                    <div class="sk-circle11 sk-child"></div>
                    <div class="sk-circle12 sk-child"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top" class="animated zoomIn" ">&#10514;</button>
<script>
    var mybutton = document.getElementById("myBtn");
    var rootElement = document.documentElement
    window.onscroll = function() {scrollFunction()};
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    function scrollToTop() {
        rootElement.scrollTo({
            top: 0,
            behavior: "smooth"
        })
    }
    mybutton.addEventListener("click", scrollToTop)
    document.addEventListener("scroll", scrollFunction)
</script>
<!-- jQuery-->
<script src="assets/vendors/jquery-1.10.2.min.js"></script>
<!-- Bootstrap JavaScript-->
<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- Vendors-->
<script src="assets/vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="assets/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="assets/vendors/slick/slick.min.js"></script>
<script src="assets/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="assets/vendors/jquery-countTo/jquery.countTo.js"></script>
<script src="assets/vendors/jquery-appear/jquery.appear.js"></script>
<script src="assets/vendors/parallax/parallax.min.js"></script>
<script src="assets/vendors/gmaps/gmaps.js"></script>
<script src="assets/vendors/audiojs/audio.min.js"></script>
<script src="assets/vendors/vide/jquery.vide.min.js"></script>
<script src="assets/vendors/pageloading/js/svgLoader.js"></script>
<script src="assets/vendors/pageloading/js/classie.js"></script>
<script src="assets/vendors/pageloading/sidebartransition/js/sidebarEffects.js"></script>
<script src="assets/vendors/pageloading/sidebartransition/js/classie1.js"></script>
<script src="assets/vendors/wowjs/wow.min.js"></script>
<script src="assets/vendors/skrollr.min.js"></script>
<script src="assets/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/vendors/jquery-cookie/js.cookie.js"></script>
<!-- Own script-->
<script src="assets/js/layout.js"></script>
<script src="assets/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdXpLSJ3Ibdu-Phs9QOvpqb9d1DtPf7wQ"></script>
<script src="assets/js/elements.js"></script>
<script src="assets/js/widget.js"></script>
<script src="assets/vendors/fullpage/jquery.fullpage.min.js"></script>
<script src="assets/vendors/fullpage/jquery.fullpage.extensions.min.js"></script>
<script src="assets/js/fullpage.js"></script>
</body>
</html>