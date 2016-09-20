<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>kapino.ico">
        <title>Kapino &#8226; Become a Seller!</title>

        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

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
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" />



        <!-- CSS Files -->
        <link href="<?php echo base_url(); ?>assets/js/animate.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/seller.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/tipped-4.5.7-light/css/tipped/tipped.css" />
        <!-- Jquery Form Validation StyleSheet -->
        <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/theme-default.min.css"
    rel="stylesheet" type="text/css" /> -->
    </head>

    <body class="becomeseller-page">
        <!-- NAVBAR -->
    <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll navbar-success">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#landing-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand animsition-link" href="<?php echo site_url('home'); ?>"><!--<i class="fa fa-coffee"></i>-->Kapino</a>
            </div>

            <div class="navbar-collapse collapse" id="landing-navbar">
                <ul class="nav navbar-nav">
                    <li class=""><a href="<?php echo site_url('home'); ?>" class="animsition-link"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="<?php echo site_url('market'); ?>" class="animsition-link"><i class="fa fa-shopping-basket "></i> The Market</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url('profile'); ?>" id="adNav" class="animsition-link"><i class="fa fa-pencil"></i>Create an AD</a></li>
                    <li><a href="<?php echo site_url('aboutUs'); ?>"><i class="fa fa-comments"></i> About Us</a></li>
                    <!-- Profile with Dropdown -->
                    <li class="dropdown" id="user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">account_circle</i> Hi, <?php echo str_replace('"', "", json_encode($userInfo)); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('profile'); ?>" class="animsition-link">My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('logout'); ?>" class="text-danger animsition-link">Logout</a></li>
                            <li class="divider"></li>
                            <li id="beASeller"><a href="<?php echo site_url('seller'); ?>" class="btn btn-danger btn-raised">Become a Seller</a></li>

                        </ul>
                    </li>
                    <!-- END -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NAVBAR -->

        <!--  WRAPPER -->
        <div class="wrapper animsition" data-animsition-in-class="fade-in-left-sm" data-animsition-out-class="fade-out-right-sm" data-animsition-in-duration="3000" data-animsition-out-duration="3000">
            <div class="header header-filter" id="background">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="card card-signup">
                                <!-- Become a Seller Form -->
                                <form class="form" id="becomeSellerForm" name="becomeSellerForm" data-toggle="validator"
                                      action="<?php echo site_url('addFarms');?>" method="post">
                                    <!-- Form Header -->
                                    <div class="header header-info text-center">
                                        <h3 class="montserrat">
                                          <i class="fa fa-usd fa-2x"></i>
                                          <br/>
                                          Become a <strong>Seller</strong>
                                        </h3>
                                        <h3 class="header-tag">
                                          <small class="header-tag">Tell us more about your farm:</small>
                                        </h3>
                                    </div>
                                    <!-- /Form Header -->
                                    <!-- Form Content -->
                                    <div class="content">

                                        <!-- F.Name & L.Name -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group has-feedback">
                                                        <div class="input-group has-feedback">
                                                            <span class="input-group-addon">
                                                          <i class="material-icons">business</i>
                                                      </span>


                                                            <input id="farmname" type="text" class="form-control" name="name" maxlength="50" placeholder="Farm Name" required>
                                                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                            <div class="help-block with-errors"></div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- F.Name & L.Name -->

                                        <!-- Address -->
                                            <div class="form-group has-feedback">
                                            <div class="input-group has-feedback">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">location_on</i>
                                                </span>

                                                <label for="farmaddress" class="control-label">Farm Address</label>
                                                <textarea class="form-control" rows="2" name="location" id="farmaddress" placeholder="Enter Your Address Here" maxlength="100" required></textarea>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>

                                            </div>
                                            </div>
                                        <!-- /Address -->

                                        <!-- Farm Size -->
                                        <h4 class="form-label montserrat">Farm Size:</h4>
                                        <div class="row">
                                            <div class="form-group has-feedback">
                                                <div class="col-sm-6 radio text-center">
                                                    <h4 class="farmtype"><span class="smallholderRadio"><i class="fa fa-home fa-2x text-info"></i><br /><br />Small Holder</span></h4>
                                                    <br />
                                                    <label class="">
                                                        <input type="radio" id="smallholder" name="farmtype" value="smallholder" required />
                                                    </label>
                                                </div>
                                                <div class="col-sm-6 radio text-center">
                                                    <h4 class="farmtype"><span class="plantationRadio"><i class="fa fa-building fa-2x text-info"></i><br /><br />Plantation</span></h4>
                                                    <br />
                                                    <label class="">
                                                        <input type="radio" id="plantation" name="farmtype" value="plantation" />
                                                        <br />
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- /Farm Size -->

                                        <div class="row">
                                          <div class="col-sm-4 col-sm-offset-4">
                                            <div class="form-group has-feedback">
                                            <div class="input-group has-feedback">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">border_all</i>
                                                </span>

                                                <label for="farmaddress" class="control-label">Size in Hectares (Optional)</label>
                                                <input class="form-control text-center" type="number" id="farmhectare" placeholder="Hectares" name="hectares" required>
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <div class="help-block with-errors"></div>

                                            </div>
                                            </div>
                                          </div>

                                        </div>

                                        <!-- Submit Button -->
                                        <div class="form-group text-right">
                                            <button id="submitButton" type="submit" class="btn btn-primary btn-raised btn-info">Submit</button>
                                        </div>
                                    </div>
                                    <!-- /Form Content -->
                                </form>
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
                                    <a href="<?php echo site_url('home'); ?>">
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
        </div>
        <!-- /WRAPPER -->



    </body>

    <!--   Core JS Files   -->

    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/noty/packaged/jquery.noty.packaged.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <!-- <script src="../bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script> -->

    <!-- Jquery Form Validation -->
    <script src="<?php echo base_url(); ?>assets/js/jquery-form-validator.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/tipped-4.5.7-light/js/tipped/tipped.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/validator.min.js"></script>

    <script type="text/javascript">
        function materialInit() {
            $.material.init();
        }

        $(document).ready(function() {

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

            $('.animsition').animsition({
                linkElement: '.animsition-link',
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: ['animation-duration', '-webkit-animation-duration'],

            });

            Tipped.create(".smallholderRadio", "Area of 1.5 Hectares or less.", {
                position: 'right'
            });
            Tipped.create(".plantationRadio", "Leases on public lands (CFBM and IFMA)", {
                position: 'left'
            });


        });

        $(window).load(function() {
            setTimeout(materialInit, 2000);

        });

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

    </script>

</html>
