<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>kapino.ico">
        <title>Kapino &#8226; Home</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

        <!--     Fonts and icons     -->
            <!-- CDN's -->
                <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
                <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
                <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
                    <!--font-awesome-->
                <script src="https://use.fontawesome.com/7e20b3e3f4.js"></script>
                    <!--lobster|lobster2|montserrat-->
                <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Montserrat" rel="stylesheet">
            <!-- Host -->
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css"/>



        <!-- CSS Files -->
        <link href="<?php echo base_url(); ?>assets/js/animate.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/landing.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet"/>

    </head>

    <body class="landing-page">
        <!-- NAVBAR -->
        <nav class="navbar navbar-success navbar-fixed-top navbar-transparent navbar-color-on-scroll">
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
                        <li><a href="<?php echo site_url('aboutUs'); ?>"><i class="fa fa-comments"></i> About Us</a></li>
                        <li><a href="<?php echo site_url('profile'); ?>" id="adNav" class="animsition-link"><i class="fa fa-pencil"></i>Create an AD</a></li>
                        <li class="dropdown" id="user">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                              <i class="material-icons">account_circle</i> Hi, <?php echo str_replace('"', "", json_encode($userInfo)); ?>
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
        <!-- /NAVBAR -->
        <!--  WRAPPER -->
        <div class="wrapper">
        <!--  HEADER -->
            <div class="header header-img header-filter animsition" id="header"
                 data-animsition-in-class = "fade-in-down-sm"
                 data-animsition-out-class ="fade-out-up-sm"
                 data-animsition-in-duration ="1000"
                 data-animsition-in-duration = "1000">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1 class="title">Kapino</h1>
                            <h3>Shop, Sell, and Advertise your farm at The Market!
                            </h3>
                            <br>
                            <a type="button" class="btn btn-danger btn-lg btn-raised btn-round animsition-link" href="<?php echo site_url('signup');?>">Sign Up Now!  <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /HEADER -->
            <!--  MAIN -->
            <div class="main main-raised animsition" id="main"
                 data-animsition-in-class = "fade-in-up-sm"
                 data-animsition-out-class = "fade-out-down-sm"
                 data-animsition-in-duration = "2000"
                 data-animsition-out-duration = "2000">
                <div class="container">

                    <!-- SECTION-LANDING -->
                    <div class="section section-landing text-center">
                        <!-- WHAT IS COFFE MART? -->
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="page-header title section-heading">What is Kapino?</h2>
                                <h5 class="description">Kapino is a buy and sell website purely dedicated to coffee farmers, distributors, and enthusiasts alike in the Philippines.</h5>
                                <h5 class="description">Through Kapino, both the farmers and buyers are provided with a vibrant and friendly market where they get the opportunity to post varieties of beans produced, and to find diverse coffee products at their own convenience.</h5>
                            </div>
                        </div>
                        <!-- /WHAT IS COFFE MART -->

                        <!-- FEATURES -->
                        <div class="features">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <h2 class="title section-heading page-header">Introducing The Market:<br>Your Coffee Plaza</h2>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="feat-num">
                                            <h4 class="montserrat text-center">1</h4>
                                    </div>
                                    <div class="feature feature-primary">
                                        <i class="material-icons">shopping_cart</i>
                                        <h4 class="title">Browse</h4>
                                        <h5 class="description">Browse and discover varieties of coffee bean products that are handpicked by farmers all throughout the Philippines.</h5>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="feat-num">
                                            <h4 class="montserrat text-center">2</h4>
                                    </div>
                                    <div class="feature feature-success">
                                        <i class="material-icons">contact_phone</i>
                                        <h4 class="title">Contact &amp; Coordinate</h4>
                                        <h5 class="description">Contact and coordinate the seller to organize a meeting to check out the item in person and decide if it suits your needs.</h5>
                                    </div>

                                </div>
                                <div class="col-md-4">
                                    <div class="feat-num">
                                            <h4 class="montserrat text-center">3</h4>
                                    </div>
                                    <div class="feature feature-danger">
                                        <i class="fa fa-star-half-o"></i>
                                        <h4 class="title">Rate &amp; Check</h4>
                                        <h5 class="description">Rate the seller and check the product after transaction. Sending feedback will help other buyers see if the seller is credible.</h5>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /FEATURES -->
                    </div>
                    <!-- /SECTION-LANDING -->
                    <!-- WORK WITH US -->
                    <div class="section landing-section">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h2 class="text-center title montserrat seaction-heading">Work with us</h2>
                                <h4 class="text-center description">Divide details about your product or agency work into parts. Write a few lines about each one and contact us about any further collaboration. We will respond and get back to you in a couple of working days.</h4>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Name</label>
                                                <input type="text" class="form-control">
                                            <span class="material-input"></span></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating is-empty">
                                                <label class="control-label">Your Email</label>
                                                <input type="email" class="form-control">
                                            <span class="material-input"></span></div>
                                        </div>
                                    </div>

                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">Your Message</label>
                                        <textarea class="form-control" rows="4"></textarea>
                                    <span class="material-input"></span></div>

                                    <div class="row">
                                        <div class="col-md-4 col-md-offset-4 text-center">
                                            <button class="btn btn-primary btn-raised">
                                                Send Message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /WORK WITH US -->

                </div>
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /WRAPPER -->
        <!--  FOOTER -->
        <footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
	                <ul>
	                    <li>
	                        <a href="<?php echo site_url('home');?>">
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

        <!--  SIGN IN MODAL -->
        <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="SignInModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title montserrat" id="SignInLabel"> <i class="fa fa-user fa-lg"></i><br>Sign In!</h3>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body-form">
                            <form id="loginForm" action="<?php echo site_url('login');?>" method="post">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-group-lg">
                                        <input type="email" name="email" placeholder="Your Email" class="form-control" value="" required/>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </span>
                                    <div class="form-group-lg">
                                        <input type="password" name="password" placeholder="Your Password" class="form-control" value="" required/>
                                    </div>
                                </div>

                                <div class="montserrat">
                                    <button type="submit" class="btn btn-raised btn-primary btn-lg btn-success" id="signInButton">
                                    Login
                                    </button>
                                </div>

                            </form>
                        </div>
                        <hr>

                    </div>
                    <div class="modal-footer">
                        <div class="modal-footer-content">
                            <h6 class="text-center">Don't have an Account?</h6>
                            <a href="<?php echo site_url('signup');?>" class="btn btn-raised btn-primary btn-danger animsition-link" id="signUpButton">
                            Get Started <i class="fa fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /SIGN IN MODAL -->
    </body>

<!--   Core JS Files   -->

<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/landing.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>assets/noty/packaged/jquery.noty.packaged.min.js"></script>
<script type="text/javascript">
// Pop up notifications.
  function generateError(message){
    var icon = '<div class="activity-item"> <i class="fa fa-times fa-lg"></i> <div class="activity">' + message + ' </div> </div>'
    var n = noty({
      text: icon,
      type: 'error',
      dismissQueue: true,
      timeout: 10000,
      closeWith: ['click'],
      layout: 'topCenter',
      theme: 'relax',
      maxVisible: 10,
      animation: {
        open  : 'animated shake',
        close : 'animated bounceOutUp',
        easing: 'swing',
        speed : 500
      }

    });
  };

  function generateSuccess(message){
    var icon = '<div class="activity-item"> <i class="fa fa-check fa-lg"></i> <div class="activity">' + message + ' </div> </div>'
    var n = noty({
      text: icon,
      type: 'success',
      dismissQueue: true,
      timeout: 10000,
      closeWith: ['click'],
      layout: 'topCenter',
      theme: 'relax',
      maxVisible: 10,
      animation: {
        open  : 'animated flipInX',
        close : 'animated flipOutX',
        easing: 'swing',
        speed : 500
      }

    });
  }

  function generateInfo(message){
    var icon = '<div class="activity-item"> <i class="fa fa-info-circle fa-lg"></i> <div class="activity">' + message + ' </div> </div>'
    var n = noty({
      text: icon,
      type: 'information',
      dismissQueue: true,
      timeout: 10000,
      closeWith: ['click'],
      layout: 'topCenter',
      theme: 'relax',
      maxVisible: 10,
      animation: {
        open  : 'animated flipInX',
        close : 'animated flipOutX',
        easing: 'swing',
        speed : 500
      }

    });
  }


    $(document).ready(function(){

      // [START] Navigation Bar Session
      var $isLogged = <?php echo json_encode($userInfo); ?>;
      var $isSeller = <?php echo json_encode($userFarmID); ?>;
      console.log($isLogged);
      console.log($isSeller);
      // Check if User is Logged In
      if($isLogged != false && $isLogged != null) {
          $('#signup').css('display', 'none');
      }
      else {
          $('#user').css('display', 'none');
          $('#signup').css('display', 'block');
          $('#adNav').css('display', 'none');

      }
      if($isSeller != false || $isSeller != null) {
          $('#beASeller').css('display','none');
          $('#adNav').css('display', 'block');
      }
      // [END] Navigation Bar Session

			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

            document.getElementById("signUpButton").onclick = function(){
                location.href = "<?php echo site_url('signup');?>";
            }

            $('.animsition').animsition({
                linkElement: '.animsition-link',
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: [ 'animation-duration', '-webkit-animation-duration']
            });
		});

</script>


</html>
