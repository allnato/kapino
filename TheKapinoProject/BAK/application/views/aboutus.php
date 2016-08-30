<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="../kapino.ico">
        <title>Kapino &#8226; About Us</title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

        <!--     Fonts and icons     -->
        <!-- CDN's -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
        <!--font-awesome-->
        <script src="https://use.fontawesome.com/7e20b3e3f4.js"></script>
        <!--lobster|lobster2|montserrat-->
        <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Montserrat" rel="stylesheet">
        <!-- Host -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css"/>


        <!-- CSS Files -->
        <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/aboutus.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/js/animate.css" rel="stylesheet" />
    </head>

    <body class="aboutus-page">
      <!-- NAVBAR -->
      <nav class="navbar navbar-success navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#landing-navbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand animsition-link" href="<?php echo site_url('home');?>"><!--<i class="fa fa-coffee"></i>-->Kapino</a>
              </div>

              <div class="navbar-collapse collapse" id="landing-navbar">
                  <ul class="nav navbar-nav">
                      <li class="active"><a href="<?php echo site_url('home');?>" class="animsition-link"><i class="fa fa-home"></i> Home</a></li>
                      <li><a href="<?php echo site_url('market');?>" class="animsition-link"><i class="fa fa-shopping-basket "></i> The Market</a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                      <li><a href="#"><i class="fa fa-comments"></i> About Us</a></li>
                      <li><a href="<?php echo site_url('profile'); ?>" id="adNav" class="animsition-link"><i class="fa fa-pencil"></i>Create an AD</a></li>
                      <li class="dropdown" id="user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">account_circle</i> Hi, <?php echo json_encode($userInfo); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('profile'); ?>" class="animsition-link">My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('logout'); ?>" class="text-danger animsition-link">Logout</a></li>
                            <li class="divider"></li>
                            <li id="beASeller"><a href="<?php echo site_url('seller'); ?>" class="btn btn-danger btn-raised animsition-link">Become a Seller</a></li>

                        </ul>
                      </li>
                      <li><a id="signup" href="#" data-toggle="modal" data-target="#signInModal"><i class="fa fa-user"></i> Sign in</a></li>
                  </ul>
              </div>
          </div>
      </nav>

      <!-- WRAPPER -->
      <div class="wrapper animsition" data-animsition-in-class="fade-in-up-sm" data-animsition-out-class="fade-out-down-sm" data-animsition-in-duration="2000" data-animsition-out-duration="2000">
        <div class="main main-raised" id="main">
          <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header lobster">
                      Kapino
                    </h1>
                    <h4 class="montserrat kapino-info">Kapino is a local hub for buying and selling coffee products in the Philippines. This application is established to provide the Filipino farmers a place where they can market coffee beans of various types (Liberica, Robusta, Arabica) and varieties (roasted, dried, fresh). Consequently, users are given the opportunity to browse these products, coordinate with its seller, and check their quality especially if it suit customers' needs.
                    </h4>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header montserrat">Our Team</h2>
                </div>
            </div>

            <!-- Team Members Row -->
            <div class="row">
                <div class="row teamcontainer ">
                  <div class="col-md-4 text-center teamcontent">
                      <img class="img-circle img-responsive img-center" src="https://lh4.googleusercontent.com/-_4acvOgMwDM/Vjy5Db7izGI/AAAAAAAABfI/W8uKAs1uoIsW28jvGoR_JjMCu6NRIS6BgCL0B/s478-no/12063686_10201057701520261_1260738752876265908_n.jpg" alt="">
                      <h3 class="lobster name">Mark Sanchez<br />
                          <small class="montserrat">Project Manager</small>
                      </h3>
                  </div>
                  <div class="col-md-8 teamcontent teamdescription">
                    <h5 class="montserrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                  </div>
                </div>

                <div class="row teamcontainer ">
                  <div class="col-md-8 teamcontent1 teamdescription text-right">
                    <h5 class="montserrat">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                  </div>
                  <div class="col-md-4 text-center teamcontent1">
                      <img class="img-circle img-responsive img-center" src="https://lh4.googleusercontent.com/-GX87L7gkfsA/VTRzBRSAQ7I/AAAAAAAAADA/Mf2crGfn7ksrKJF2napMRQsh6LLW222zQCL0B/s629-no/e7c80196-6ec8-4289-a439-9272c2d49520" alt="">
                      <h3 class="lobster name">Allendale Nato<br />
                          <small class="montserrat">UX/UI</small>
                      </h3>
                  </div>

                </div>

                <div class="row teamcontainer ">
                  <div class="col-md-4 text-center teamcontent2">
                      <img class="img-circle img-responsive img-center" src="https://pbs.twimg.com/profile_images/678858913119272960/M2yqf4Ce.jpg" alt="">
                      <h3 class="lobster name">Joshua Ramos<br />
                          <small class="montserrat">Backend</small>
                      </h3>
                  </div>
                  <div class="col-md-8 teamcontent2 teamdescription">
                    <h5 class="montserrat">Hello there! I love coffees. I am a college student who loves to drink coffee to finish projects, play badminton with my dad, and talk about concepts about computer games and security.</h5>
                  </div>
                </div>

            </div>
          </div>
        </div>
        <!--  FOOTER -->
        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Facebook
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>

        </footer>
        <!-- /FOOTER -->
      </div>
      <!-- /WRAPPER -->
    </body>

    <!-- Core JS Files -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.matchHeight.js"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(document).ready(function() {

        $('.teamcontent').matchHeight();
        $('.teamcontent2').matchHeight();
        $('.teamcontent1').matchHeight();

        $('.animsition').animsition({
            linkElement: '.animsition-link',
            loading: true,
            loadingParentElement: 'html', //animsition wrapper element
            loadingClass: 'animsition-loading',
            loadingInner: '', // e.g '<img src="loading.svg" />'
            timeout: false,
            timeoutCountdown: 5000,
            onLoadEvent: true,
            browser: ['animation-duration', '-webkit-animation-duration'],

            overlay: false,
            overlayClass: 'animsition-overlay-slide',
            overlayParentElement: 'body',

        });

      });
    </script>

</html>
