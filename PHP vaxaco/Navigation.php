<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VaxAco</title>

    <!-- Bootstrap CSS-->
    <link href="./../static/vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" href="./../static/vendors/font-awesome/css/font-awesome.min.css">

    <!-- Vendors-->
    <link rel="stylesheet" href="./../static/vendors/flexslider/flexslider.min.css">
    <link rel="stylesheet" href="./../static/vendors/swipebox/css/swipebox.min.css">
    <link rel="stylesheet" href="./../static/vendors/slick/slick.min.css">
    <link rel="stylesheet" href="./../static/vendors/slick/slick-theme.min.css">
    <link rel="stylesheet" href="./../static/vendors/animate.min.css">
    <link rel="stylesheet" href="./../static/vendors/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="./../static/vendors/pageloading/css/component.min.css">
    <link rel="stylesheet" type="text/css" href="./../static/vendors/pageloading/sidebartransition/css/component.css">
    <link rel="stylesheet" href="./../static/vendors/fullpage/jquery.fullpage.min.css">

    <!-- Font-icon-->
    <link rel="stylesheet" href="./../static/fonts/font-icon/style.css">

    <!-- Style-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./../static/css/layout.css">
    <link rel="stylesheet" type="text/css" href="./../static/css/elements.css">
    <link rel="stylesheet" type="text/css" href="./../static/css/extra.css">
    <link rel="stylesheet" type="text/css" href="./../static/css/widget.css">
    <link rel="stylesheet" type="text/css" href="./../static/css/responsive.css">
    <link rel="stylesheet" type='text/css' href="./../static/css/color/colordefault.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700,700i" rel="stylesheet">

    <!-- Script Loading Page-->
    <script src="./../static/vendors/html5shiv.js"></script>
    <script src="./../static/vendors/respond.min.js"></script>
    <script src="./../static/vendors/pageloading/js/snap.svg-min.js"></script>
    <script src="./../static/vendors/pageloading/sidebartransition/js/modernizr.custom.js"></script>

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
                                <li class="dropdown current-menu-item"><a href="#" class="dropdown-toggle">Home</a></li>
                                <li><a href="#overview">Overview</a></li>
                                <li><a href="#reservation">Reservation</a></li>
                                <li><a href="#vaccines">Vaccines</a></li>
                                <li><a href="#help">Help</a></li>
                                <li><a href="#contact">Contact</a></li>
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
                    <div style="background-image: url('./../static/images/pages/header-bg.jpg');
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;" class="section nav-light pdn">
                        <div class="top-header top-bg-video">
                            <div class="slides">
                                <div class="slide-content slide-layout-02 slide-style-02">
                                    <div class="container">
                                        <div class="slide-content-inner text-center">
                                            <h3 data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="800" class="slide-title animated">VaxAco</h3>
                                            <p data-ani-in="fadeInUp" data-ani-out="fadeOutDown" data-ani-delay="1200" class="slide-sub-title animated"><span class="text">Fight against COVID-19 </span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section">
                        <section class="about-us-session padding-top-100 padding-bottom-100" id="overview">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6 colsm-12"><img src="./../static/images/pages/vaxaco.jpg" alt="" class="img img-responsive wow zoomIn"></div>
                                    <div class="col-md-6 col-sm-12">
                                        <div class="swin-sc swin-sc-title style-4 margin-bottom-20 margin-top-50">
                                            <p class="top-title"><span>Overview</span></p>
                                            <h3 class="title" style="font-size:70px">VaxAco</h3>
                                        </div>
                                        <p class="des font-bold text-center">VaxAco (Vaccine Against Covid)</p>
                                        <p class="des margin-bottom-20 text-center">VaxAco is an online web reservation system that enables the guests to book their reservations for their vaccination. Through the vaccination reservation system software, guests can choose their preferred date and time of vaccination. That way, they can complete the transaction quickly and efficiently from the comfort of their own home or office.</p>
                                        <div class="swin-btn-wrap center"><a href="#" class="swin-btn center form-submit btn-transparent"> <span>	About Us</span></a></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div style="background-image: url('./../static/images/pages/reservation.jpg');
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;" class="section nav-light" id="reservation">
                    <section class="product-sesction-02 padding-top-120 padding-bottom-100">
                        <div class="container">
                            <div class="swin-sc swin-sc-product products-02 carousel-02">
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div data-slide-toshow="2" class="cat-wrapper-02 main-slider col-md-8">
                                        <div class="item">
                                            <div class="cat-icons"><i class="icons fa fa-book"></i>
                                                <h5 class="cat-title">Make Reservation</h5>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="cat-icons"><i class="icons fa fa-eye"></i>
                                                <h5 class="cat-title">View Reservation</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                                <div class="products nav-slider">
                                    <div class="row slick-padding">
                                            <div class="blog-item item swin-transition">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="ft-fixed-area wow fadeInLeft">
                                                            <div class="form-pos-01 form-dark-wrapper section-dark">
                                                                <div class="swin-sc swin-sc-title style-3 light">
                                                                    <p class="title" style="font-family:'Montserrat', sans-serif"><span>Make A Reservation</span></p>
                                                                    <p class="subtitle">You can call us directly at <span class="text-default"> 123-4567</span></p>
                                                                </div>
                                                                <div class="swin-sc swin-sc-contact-form dark mtl">
                                                                    <form method="post" action="#reservation">          <!-- Start of Reservation -->
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
                                                                                <input type="number" placeholder="Age" id="age" name="age" min="18" max="100" class="form-control"  required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                                <input type="date" id="date" name="date" required="" placeholder="Date" class="form-control" min= "2021-11-12" max="2021-12-12">
                                                                            </div>
                                                                            <div class="input-group">
                                                                                <div class="input-group-addon"><i class="fa fa-clock-o"></i></div>
                                                                                <input type="time" id="timeslot" name="timeslot" required="" placeholder="Time" class="form-control" min="08:00" max="17:00" step="600">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <form method="get">
                                                                                <div class="swin-btn-wrap center"> <a href="#reservation"> <span><button class="swin-btn center form-submit" type="submit" name="book_user">Book Now!</button></span></a></div>
                                                                            </form>
                                                                        </div>
                                                                    </form>
                                                                    <!-- End of Reservation -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="row slick-padding">
                                            <div class="blog-item item swin-transition">
                                                <div class="ft-fixed-area wow fadeInLeft">
                                                    <div class="form-pos-01 form-dark-wrapper section-dark">
                                                        <table class="shop_table shop_table_responsive">
                                                            <thead>
                                                            <tr class="cart_item">
                                                                <th class="product-name">Date</th>
                                                                <th class="product-name">Time</th>
                                                                <th class="product-name">Name</th>
                                                                <th class="product-name">Email</th>
                                                                <th class="product-name">Age</th>
                                                                <th class="product-name">Contact</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php

                                                            $mysqli = new mysqli('localhost', 'root', '', 'bookingcalendar');

                                                            if (isset($_POST['book_user'])) {
                                                                $date = $_POST['date'];
                                                                $username = $_POST['username'];
                                                                $timeslot = $_POST['timeslot'];
                                                                $email = $_POST['email'];
                                                                $age = $_POST['age'];
                                                                $phone = $_POST['phone'];
                                                                $stmt = $mysqli->prepare("select * from bookings where date = ? AND timeslot=?");
                                                                $stmt->bind_param('ss', $date, $timeslot);

                                                                $account = $_SESSION['username'];
                                                                if ($stmt->execute()) {
                                                                    $result = $stmt->get_result();
                                                                    if ($result->num_rows > 0) {
                                                                        $msg = "<div class='alert alert-danger'>Already Booked</div>";
                                                                    } else {
                                                                        $stmt = $mysqli->prepare("INSERT INTO bookings (date, name, timeslot, email, age, contact, account) VALUES (?,?,?,?,?,?,?)");
                                                                        $stmt->bind_param('sssssss', $date, $username, $timeslot, $email, $age, $phone, $account);
                                                                        $stmt->execute();
                                                                        $bookings[] = $timeslot;
                                                                        $stmt->close();
                                                                        $mysqli->close();
                                                                    }
                                                                }
                                                            }

                                                            $account = $_SESSION['username'];

                                                            $db = mysqli_connect('localhost', 'root', '', 'bookingcalendar');
                                                            $query = "SELECT * FROM bookings WHERE account = '$account'";

                                                            $test = mysqli_query($db, $query);
                                                            $count = mysqli_num_rows($test);
                                                            ?>
                                                            <?php
                                                            if(isset($_POST['book_user'])) {
                                                            if ($count > 0){
                                                            while($row = $test->fetch_assoc()) {
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $_POST["date"] ?></td>
                                                                    <td><?php echo $_POST["timeslot"] ?></td>
                                                                    <td><?php echo $_POST["username"] ?></td>
                                                                    <td><?php echo $_POST["email"] ?></td>
                                                                    <td><?php echo $_POST["age"] ?></td>
                                                                    <td><?php echo $_POST["phone"] ?></td>
                                                                </tr>
                                                            <?php
                                                            }
                                                        }
                                                            }
                                                            ?>


                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                    <br><br><br><br>
                    <div class="section">
                        <section class="product-sesction-03" id="vaccines">
                            <div class="container">
                                <div class="swin-sc swin-sc-title style-2">
                                    <h3 class="title"><span>Vaccines</span></h3>
                                </div>
                                <div data-item="6" class="swin-sc swin-sc-timeline-2">
                                    <div class="main-slider">
                                        <div class="slides">
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">Pfizer</span></div><img src="./../static/images/vaccines/pfizer.jpg" alt="pfizer" class="img img-responsive">
                                            </div>
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">AstraZeneca</span></div><img src="./../static/images/vaccines/astra.jpg" alt="astrazeneca" class="img img-responsive">
                                            </div>
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">Sinovac</span></div><img src="./../static/images/vaccines/sinovac.jpg" alt="sinovac" class="img img-responsive">
                                            </div>
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">Sputnik</span></div><img src="./../static/images/vaccines/sputnik.jpg" alt="sputnik" class="img img-responsive">
                                            </div>
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">Janssen</span></div><img src="./../static/images/vaccines/janssen.jpg" alt="janssen" class="img img-responsive">
                                            </div>
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">Bharat</span></div><img src="./../static/images/vaccines/bharat.jpg" alt="bharat" class="img img-responsive">
                                            </div>
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">Moderna</span></div><img src="./../static/images/vaccines/moderna.jpg" alt="bharat" class="img img-responsive">
                                            </div>
                                            <div class="timeline-item item swin-transition">
                                                <div class="timeline-item-wrap"><span class="timeline-year swin-transition">Novavax</span></div><img src="./../static/images/vaccines/novavax.jpg" alt="bharat" class="img img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nav-slider">
                                        <div class="slides">
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Pfizer Biontech</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">mRNA</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">January 14, 2021 <br>
                                                                May 31, 2021 (Expanded EUA to include 12-15 y/o)
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">12 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 21 days apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">95% against symptomatic COVID-19 (CT done for 16 y/o and above) <br>
                                                                100% against symptomatic COVID-19 (CT done for 12 to 15 y/o)
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">short-term, mild-to-moderate pain at the injection site, fatigue, headache</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Oxford AstraZeneca</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">Viral Vector (non-replicating)</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">January 28, 2021 </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">18 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 4-12 weeks apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">70.4% against symptomatic COVID-19 <br>
                                                                100% against severe COVID-19100% against symptomatic COVID-19 (CT done for 12 to 15 y/o)
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">injection site pain and tenderness, fatigue, headache, feverishness, myalgia</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Sinovac CoronoVac</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">Inactivated Virus</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">February 22, 2021</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">18 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 28 days apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">51% overall VE against symptomatic COVID-19 <br>
                                                                100% against severe COVID-19 and hospitalization
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">local lymphadenopathy at the injection site, allergic reaction that may be cause by any component of the vaccine, convulsion (with or without fever)</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Gamelaya Sputnik V</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">Viral Vector (non-replicating)</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">March 19, 2021 <br></td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">18 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 3 weeks apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">91.6 against symptomatic COVID-19 <br>
                                                                100% against moderate or severe cases
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">pain on injection site, hyperthermia, swelling, headache, asthenia, muscle/joint pain, malaise, sore throat, diarrhea, rhinorrhea, loss of appetite, pain in the oropharynx, nasal congestion, colds, sneezing, cough</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Janssen</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">Viral Vector (non-replicating)</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">April 19, 2021 <br></td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">18 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">1 dose</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">66.1 ??? 66.9% against confirmed moderate to severe/critical COVID-19 <br>
                                                                77% - 85% against severe COVID-19
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">injection site pain, redness, swelling, tiredness, headache, muscle pain, chills, fever, nausea</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Bharat BioTech</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">Inactivated Virus</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">April 19, 2021</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">18 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 28 days apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">80.6% against PCR-confirmed symptomatic COVID-19 <br></td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">headache, fatigue, fever, body ache, abdominal pain, nausea, vomiting</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Moderna</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">mrNA</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">May 5, 2021 <br></td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">18 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 28 days apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">94.1% against symptomatic COVID-19 <br>
                                                                100% against severe COVID-19
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">pain/erythema/swelling on injection site, axillary lymphadenopathy, fever, headache, fatigue, myalgia, arthralgia, nausea, vomiting, chills</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Novavax</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">Protein Subunit</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">N/A (No EUA application yet)</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">N/A (No EUA application yet)</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 21 days apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">awaiting official Phase III Interim Journal Publication</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">awaiting official Phase III Interim Journal Publication</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="timeline-content-item">
                                                <p class="timeline-heading"><strong>Pfizer Biontech</strong></p>
                                                <div class="timeline-content-detail">
                                                    <table class="shop_table shop_table_responsive">
                                                        <tbody>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Technology Platform</td>
                                                            <td class="product-quantity">mRNA</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Philippine FDA EUA Approval</td>
                                                            <td class="product-quantity">January 14, 2021 <br>
                                                                May 31, 2021 (Expanded EUA to include 12-15 y/o)
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Age Group Covered by PH FDA EUA Approval</td>
                                                            <td class="product-quantity">12 y/o and above</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Dose and Frequency</td>
                                                            <td class="product-quantity">2 doses, 21 days apart</td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Vaccine Efficacy Based on Phase III Clinical Trial (CT)</td>
                                                            <td class="product-quantity">95% against symptomatic COVID-19 (CT done for 16 y/o and above) <br>
                                                                100% against symptomatic COVID-19 (CT done for 12 to 15 y/o)
                                                            </td>
                                                        </tr>
                                                        <tr class="cart_item">
                                                            <td class="product-name">Common Adverse Events Reported Observed in Phase III CT</td>
                                                            <td class="product-quantity">short-term, mild-to-moderate pain at the injection site, fatigue, headache</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </div>
                    <div style="background-color: #33ABCA;
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;" class="section" id="help">
                        <section class="service-section-02 padding-top-100 padding-bottom-100" style="background-color:white">
                            <div class="container">
                                <div class="swin-sc swin-sc-title">
                                    <p class="top-title"><span>Help</span></p>
                                    <h3 class="title">How our System Works</h3>
                                </div>
                                <div class="swin-sc swin-sc-iconbox">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons fa fa-sign-in" style="color:#33ABCA"></i><span class="number">1</span></div>
                                                <h4 class="title">Register and Login</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div data-wow-delay="0.5s" class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons fa fa-ticket"></i><span class="number">2</span></div>
                                                <h4 class="title">Make A Reservation</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div data-wow-delay="1s" class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons fa fa-calendar"></i><span class="number">3</span></div>
                                                <h4 class="title">Choose Date and Time</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <div data-wow-delay="1.5s" class="item icon-box-02 wow fadeInUpShort">
                                                <div class="wrapper-icon"><i class="icons fa fa-hand-pointer-o"></i><span class="number">4</span></div>
                                                <h4 class="title">Book Now!</h4>
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
                        <section class="ct-info-section padding-top-100 padding-bottom-100" id="contact">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <div class="swin-sc swin-sc-title style-2 text-left">
                                            <p class="title" style="font-size:40px"><span>Contact VaxAco</span></p>
                                        </div>
                                        <div class="reservation-form style-02">
                                            <div class="swin-sc swin-sc-contact-form light mtl style-full">
                                                <form>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                                            <input type="text" placeholder="Username" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                                                            <input type="text" placeholder="Email" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">
                                                                <div class="fa fa-phone"></div>
                                                            </div>
                                                            <input type="text" placeholder="Phone" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <textarea placeholder="Message" class="form-control"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="swin-btn-wrap"><a href="#" class="swin-btn center form-submit"><span>Send</span></a></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="swin-sc swin-sc-title style-2 text-left">
                                            <p class="title" style="font-size:40px"><span>Contact Info</span></p>
                                        </div>
                                        <div class="swin-sc swin-sc-contact">
                                            <div class="media item">
                                                <div class="media-left">
                                                    <div class="wrapper-icon"><i class="icons fa fa-map-marker"></i></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading title">Address</h4>
                                                    <div class="description">P. Paredes St, Sampaloc, Manila, 1015 Metro Manila</div>
                                                </div>
                                            </div>
                                            <div class="media item">
                                                <div class="media-left">
                                                    <div class="wrapper-icon"><i class="icons fa fa-phone"></i></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading title">Landline</h4>
                                                    <div class="description">Within MM: 8123???4567</div>
                                                    <div class="description">Outside MM: 02???8123???4567</div>
                                                </div>
                                            </div>
                                            <div class="media item">
                                                <div class="media-left">
                                                    <div class="wrapper-icon"><i class="icons fa fa-mobile-phone"></i></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading title">Mobile</h4>
                                                    <div class="description">Local: (+63) 912 3456 7890</div>
                                                    <div class="description">Overseas: +63???2???8123-4567</div>
                                                </div>
                                            </div>
                                            <div class="media item">
                                                <div class="media-left">
                                                    <div class="wrapper-icon"><i class="icons fa fa-envelope"></i></div>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading title">Mail</h4>
                                                    <div class="description">
                                                        <p>vaxaco@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    <div style="background-image: url('./../static/images/pages/footer.jpg');
                                background-attachment:fixed;
                                background-position:center;
                                background-size:cover;">
                        <footer>
                            <div class="footer-mains">
                                <div class="container">
                                    <div class="row">
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
                                                            <p style="text-align: center; font-style:italic;">If you have any questions or queries, a member of staff will always be happy to help.
                                                                Feel free to contact us by telephone or email and we will be sure to get back to you as soon as possible.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </>
                                </div>
                            </div>
                        </footer>
                    </div>
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
<script src="./../static/vendors/jquery-1.10.2.min.js"></script>
<!-- Bootstrap JavaScript-->
<script src="./../static/vendors/bootstrap/js/bootstrap.min.js"></script>
<!-- Vendors-->
<script src="./../static/vendors/flexslider/jquery.flexslider-min.js"></script>
<script src="./../static/vendors/swipebox/js/jquery.swipebox.min.js"></script>
<script src="./../static/vendors/slick/slick.min.js"></script>
<script src="./../static/vendors/isotope/isotope.pkgd.min.js"></script>
<script src="./../static/vendors/jquery-countTo/jquery.countTo.js"></script>
<script src="./../static/vendors/jquery-appear/jquery.appear.js"></script>
<script src="./../static/vendors/parallax/parallax.min.js"></script>
<script src="./../static/vendors/gmaps/gmaps.js"></script>
<script src="./../static/vendors/audiojs/audio.min.js"></script>
<script src="./../static/vendors/vide/jquery.vide.min.js"></script>
<script src="./../static/vendors/pageloading/js/svgLoader.js"></script>
<script src="./../static/vendors/pageloading/js/classie.js"></script>
<script src="./../static/vendors/pageloading/sidebartransition/js/sidebarEffects.js"></script>
<script src="./../static/vendors/pageloading/sidebartransition/js/classie1.js"></script>
<script src="./../static/vendors/wowjs/wow.min.js"></script>
<script src="./../static/vendors/skrollr.min.js"></script>
<script src="./../static/vendors/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="./../static/vendors/jquery-cookie/js.cookie.js"></script>
<!-- Own script-->
<script src="./../static/js/layout.js"></script>
<script src="./../static/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCdXpLSJ3Ibdu-Phs9QOvpqb9d1DtPf7wQ"></script>
<script src="./../static/js/elements.js"></script>
<script src="./../static/js/widget.js"></script>
<script src="./../static/vendors/fullpage/jquery.fullpage.min.js"></script>
<script src="./../static/vendors/fullpage/jquery.fullpage.extensions.min.js"></script>
<script src="./../static/js/fullpage.js"></script>
</body>
</html>