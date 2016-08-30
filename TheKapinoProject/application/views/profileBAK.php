<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>kapino.ico">
        <title>Kapino &#8226; Profile</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

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
        <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/market.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/profile.css" rel="stylesheet"/>
    </head>
    
    <body class="profile-page">
        <!-- NAVBAR -->
        <nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll navbar-success">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#landing-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand animsition-link" href="<?php echo base_url(); ?>"><!--<i class="fa fa-coffee"></i>-->Kapino</a>
                </div>
                
                <div class="navbar-collapse collapse" id="landing-navbar">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo base_url(); ?>" class="animsition-link"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php echo base_url(); ?>/index.php/market" class="animsition-link"><i class="fa fa-shopping-basket "></i> The Market</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-comments"></i> About Us</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle ="dropdown">
                                <i class="material-icons">account_circle</i> Hi, <?php echo $this->session->userdata('name'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>/index.php/profile">My Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="#" class="text-danger">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /NAVBAR -->
        <!-- WRAPPER -->
        <div class="wrapper">
            <!-- HEADER -->
            <div class="header header-filter header-img"></div>
            <!-- /HEADER -->
            <!-- MAIN -->
            <div class="main main-raised">
                <!-- PROFILE CONTENT -->
                <div class="profile-content">
                    <!-- CONTAINER -->
                    <div class="container">
                        <div class="row">
                            <div class="profile">
                                <div class="avatar">
                                    <img src="<?php echo base_url(); ?>assets/img/profile-pic.jpg" alt="Circle Image" class="img-circle img-responsive img-raised">
                                </div>
                                <!-- NAME & STATUS -->
                                <div class="name">
                                    <h3 class="title">Joe Pakistan</h3>
                                    
                                    <h3>
                                        <span class="label label-danger">
                                            Buyer 
                                        </span>
                                        <span class="label label-success">
                                            Seller
                                        </span>
                                    </h3>
                                </div>
                                <!-- /NAME & STATUS -->
                                <div class="row">
                                    
                                    <div class="col-md-6 
                                                col-md-offset-3">
                                        
                                        <div class="profile-tabs">
                                            <div class="nav-align-center">
                                                <ul class="nav nav-pills nav-pills-info" role="tablist">
                                                    <li>
                                                        <a href="#deals" role="tab" data-toggle="tab">
                                                            <i class="material-icons">attach_money</i>
                                                            deals
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="active">
                                                        <a href="#info" role="tab" data-toggle="tab">
                                                            <i class="material-icons">face</i>
                                                            my account
                                                        </a>
                                                    </li>
                                                    
                                                    <li>
                                                        <a href="#faves" role="tab" data-toggle="tab">
                                                            <i class="material-icons">favorite</i>
                                                            favorites
                                                        </a>
                                                    </li>
                                                </ul>
                                                
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="info">
                                                        <div class="panel panel-info">
                                                            <div class="panel-heading">
                                                            Personal information
                                                            </div>
                                                            <div class="panel-body montserrat">
                                                                <table class="table table-responsive">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="strong">Name:</td>
                                                                            <td>Joe Pakistan</td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td class="strong">Address:</td>
                                                                            <td>New York, Manila</td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td class="strong">Birthdate:</td>
                                                                            <td>December 12, 1992</td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td class="strong">Gender:</td>
                                                                            <td>Male</td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td class="strong">E-Mail:</td>
                                                                            <td>joe.pakistan@yahoo.com</td>
                                                                        </tr>
                                                                        
                                                                        <tr>
                                                                            <td class="strong">Mobile:</td>
                                                                            <td>0916-283-8300</td>
                                                                        </tr>
                                                                        
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="tab-pane" id="faves">
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name:</td>
                                                                    <td>Joe Paksdistan</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    
                                                    </div>
                                                    
                                                    <div class="tab-pane" id="deals">
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <td>Name:</td>
                                                                    <td>Joe Pakijhgstan</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /CONTAINER -->
                </div>
                <!-- PROFILE CONTENT -->
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /WRAPPER -->
        <!-- FOOTER -->
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
    </body>
    
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>


    <script src="<?php echo base_url(); ?>assets/js/market-item.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>

    <script type="text/javascript">
        $().ready(function(){
                // the body of this function is in assets/material-kit.js
                $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

                $('.animsition').animsition({
                    linkElement: '.animsition-link',
                    loading: true,
                    loadingParentElement: 'body', //animsition wrapper element
                    loadingClass: 'animsition-loading',
                    loadingInner: '', // e.g '<img src="loading.svg" />'
                    timeout: false,
                    timeoutCountdown: 5000,
                    onLoadEvent: true,
                    browser: [ 'animation-duration', '-webkit-animation-duration'],

                });

            });
    </script>
    <script src="<?php echo base_url(); ?>assets/js/validator.min.js"></script>
    
    
</html>