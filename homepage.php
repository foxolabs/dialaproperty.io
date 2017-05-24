<?php
    session_start();
    require_once('config.php');
    //phpinfo();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Home Page</title>

    <meta name="description" content="foxolabs content" />
    <meta name="keywords" content="Startups, Mobile app development, Web App development, Cloud, cyber security" />
    <meta name="author" content="foxolabs.com" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Google material fonts -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

</head>

<body>
    
    <!-- Start Top Bar -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-bar">
                            <div class="row">
                                    
                                <div class="col-md-6">
                                    <!-- Start Contact Info -->
                                    <ul class="contact-details ">
                                        <li class="animated fadeIn"><a href="#"><i class="fa fa-phone"></i> +12 345 678 000</a>
                                        </li>
                                        <li class="animated fadeIn"><a href="#"><i class="fa fa-envelope-o"></i> support@mail.com</a>
                                        </li> 
                                    </ul>
                                    <!-- End Contact Info -->
                                </div><!-- .col-md-6 -->
                                
                                <div class="col-md-6">
                                    <!-- Start Social Links -->
                                    <ul class="social-list">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-google-plus"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-youtube"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-skype"></i></a>
                                        </li>
                                    </ul>
                                    <!-- End Social Links -->
                                </div><!-- .col-md-6 -->
                            </div>
                                
                                
                        </div>
                    </div>                        

                </div><!-- .row -->
            </div><!-- .container -->
            <!-- End Top Bar -->
    <!--Navbar-->
    <nav class="navbar navbar-inverse navbar-toggleable-md navbar-light">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.html"><i class="fa fa-home" aria-hidden="true"></i>
                <strong>DialHomeNow</strong>
            </a>
            <div class="collapse navbar-collapse " id="navbarNav1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select City</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item">Chennai</a>
                            <a class="dropdown-item">Mumbai</a>
                            <a class="dropdown-item">Pune</a>
                            <a class="dropdown-item">Madurai</a>
                            <a class="dropdown-item">Banglore</a>
                            <a class="dropdown-item">Delhi</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="How it works.html">How it works</a></li>
                    <li class="nav-item"><a class="nav-link" href="Company.html">Company</a></li>
                    <li class="nav-item"><a class="nav-link" href="Services.html">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="Overseas.html">Overseas</a></li>
                    <li class="nav-item btn-group">
                            <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hello <?php echo $_SESSION['username']; ?></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item">View Profile</a>
                            <a class="dropdown-item">Privacy</a>
                            <a class="dropdown-item">Settings</a>
                            <a class="dropdown-item" href="login.php">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
    <br>
    <br>

<!-- Button trigger modal -->
    <div class="center" id="#basicExample">
        <a data-toggle="modal" data-target="#basicExample">
           Refer & Earn
       </a>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="basicExample" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel">Refer & Earn</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body">
                <h3 class="text-center">SPECIAL LIMTED TIME OFFER</h3>
                <p class="text-center">We connect with property owner, tenants and property dealers /brokers to offer a wide range of services starting from maintenance of a property to finding a good tenant. Our services are extremely beneficial for the NRIs who are living abroad and have their property in India. 
                <br>
                We are offering a great referral opportunity for one and all including our existing customers. If you provide us any referral we pay you Rs 5,000 referral bonus as the referral registers with us to take our services
                </p>
            </div>
            <!--Footer-->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary">Terms and Conditions</button>
                <button type="button" class="btn btn-primary">Proceed to Refer</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Modal -->
<!-- Button trigger modal -->
<div class="container-fluid col-lg-12" id="main-wrapper">
        <center><h2>Home Page</h2></center>
        <center><h3>Welcome <?php echo $_SESSION['username']; ?></h3></center>
        
        <form action="login.php" method="post">
            <div class="text-center">
                <button type="logout-button" class="btn btn-primary purple" type="submit">Log Out</button>    
            </div>
        </form>
    </div>
    <br>

  <!--footer section start-->
    <footer id="foxo-footer">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6 foxo-footer-subheader">
                    <a class="navbar-brand" href="index.html">
                    <strong class="h6-responsive" style="color: #000;">Dial a property</strong>
                    </a>
                    <p class="text-fluid">Building a future in which people live in harmony with nature.</p>
                </div>
                <div class="col-lg-2 col-lg-push-1 ">
                    <h5 class="h5-responsive"><a href="startup.html">About</a></h5>
                    <ul class="foxo-footer-links">
                        <li><a href="startup.html#foxo-startup" class="text-fluid">Lean MVP GENIE</a></li>
                        <li><a href="services.html#foxo-services-web" class="text-fluid">Web Apps</a></li>
                        <li><a href="services.html#foxo-services-mobile" class="text-fluid">Client Speak</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-lg-push-1 ">
                    <h5 class="h5-responsive"><a href="services.html">Services</a></h5>                
                    <ul class="foxo-footer-links">
                        <li><a href="services.html#foxo-services-web" class="text-fluid">Avendus Services</a></li>
                        <li><a href="services.html#foxo-services-mobile" class="text-fluid">Rental Services</a></li>
                        <li><a href="services.html#foxo-services-cyber" class="text-fluid">Maintenance Services</a></li>
                    </ul>
                </div>

            </div>
            <br>

            <div class="row border-top">
                <div class="col-lg-12 copyright">
                    <div class="row col-md-12 offset-md-2">
                    <p>
                        <ul>
                            <li class="text-fluid"><a href="#!"></a>2017 &copy;. All Rights Reserved.</li>
                            <li class="text-fluid"><a href="#!"><i class="fa fa-phone fa-1x" aria-hidden="true"></i> </a>+12 345 678 000</li>
                            <li class="text-fluid"><a href="#!"><i class="fa fa-envelope fa-1x" aria-hidden="true"></i> </a>support@mail.com</li>
                        </ul>
                    </p>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!--footer section end-->


   <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Gototop JavaScript -->
    <script type="text/javascript" src="js/main.js"></script>

    <!--animationon on the scroll -->
    <script>
    new WOW().init(); 
    </script>

</body>

</html>