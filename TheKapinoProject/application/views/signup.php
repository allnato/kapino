<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>kapino.ico">
        <title>Kapino &#8226; Sign Up</title>

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
        <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/signup.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet"/>
    </head>

    <body class="signup-page">
        <!-- NAVBAR -->
        <nav class="animsition navbar navbar-success navbar-fixed-top "
             data-animsition-in-class = "fade-in-right-sm"
             data-animsition-out-class = "fade-out-left-sm"
             data-animsition-in-duration = "1000"
             data-animsition-out-duration = "500">
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
                        <li class=""><a href="<?php echo site_url('home');?>" class="animsition-link"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php echo site_url('market');?>" class="animsition-link"><i class="fa fa-shopping-basket "></i> The Market</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><i class="fa fa-comments"></i> About Us</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#signInModal"><i class="fa fa-user"></i> Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /NAVBAR -->
        <!--  WRAPPER -->
        <div class="wrapper animsition"
             data-animsition-in-class = "fade-in-down-sm"
             data-animsition-out-class = "fade-out-up-sm"
             data-animsition-in-duration = "2000"
             data-animsition-out-duration = "2000">
            <div class="header header-filter" id="background">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="card card-signup">
                            <form class="form" id="signupForm" method="post" action="<?php echo site_url('addUsers');?>">
                                <div class="header header-info text-center">
                                    <h3 class="montserrat">
                                        Sign Up!
                                    </h3>
                                    <p class="text-divider">Fill up the form below.</p>
                                </div>
                                <div class="content">
                                    <!-- F.Name & L.Name -->
                                    <div class="form-group">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                  <div class="input-group has-feedback">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">face</i>
                                                      </span>

                                                      <input id="firstname" name="firstname" type="text" class="form-control" placeholder="First Name" />

                                                  </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                    </span>


                                                        <input id="lastname" name="lastname" type="text" class="form-control" placeholder="Last Name">

                                                </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                <!-- F.Name & L.Name -->
                                <!-- Email Address -->
                                    <div class="form-group has-feedback">
                                        <div class="input-group has-feedback">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <input id="email" name="email" class="form-control" type="text" placeholder="Email Address">
                                        </div>
                                    </div>
                                <!-- Email Address -->

                                <!--  Mobile Number and Birth Date -->
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <!-- Mobile Number -->
                                                    <div class="form-group has-feedback">
                                                        <div class="input-group has-feedback">
                                                            <span class="input-group-addon">
                                                              <i class="material-icons">phone_android</i>
                                                            </span>
                                                            <input id="mobile" name="mobile" class="form-control" type="text" placeholder="Mobile Number">

                                                        </div>
                                                    </div>
                                                    <!-- Mobile Address -->
                                                </div>
                                                <div class="col-sm-6">
                                                    <!--  Birth Date -->
                                                    <div class="form-group has-feedback">
                                                        <div class="input-group has-feedback">
                                                            <span class="input-group-addon">
                                                              <i class="material-icons">date_range</i>
                                                            </span>
                                                            <input type="text" class="form-control datepicker" name="birthdate" id="birthdate" placeholder="Birth Date" onkeydown="return false"  data-date-format="yyyy-mm-dd"/>
                                                        </div>
                                                    </div>
                                                    <!-- /Birth Date  -->
                                                </div>

                                            </div>
                                        </div>
                                <!--  //Mobile Number and Birth Date -->

                                <!-- Password & Password Confirmation -->
                                    <div class="form-group passwordForm">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                      <span class="input-group-addon">
                                                          <i class="material-icons">lock_open</i>
                                                      </span>
                                                        <label for="password" class="control-label">Password</label>
                                                        <input id="password" name="password" type="password" class="form-control">
                                                </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                    <span class="input-group-addon">
                                                        <i class="material-icons">lock</i>
                                                    </span>
                                                        <label for="confirm_password" class="control-label">Verify Password</label>
                                                        <input id="confirm_password" name="confirm_password" type="password" class="form-control">
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <!-- /Password & Password Confirmation -->
                                <!-- Address -->
                                    <div class="form-group has-feedback">
                                      <div class="input-group has-feedback">
                                          <span class="input-group-addon">
                                              <i class="material-icons">location_on</i>
                                          </span>

                                          <label for="inputAddress" class="control-label">Address (100 Char. Max)</label>
                                          <textarea class="form-control" rows="2" id="address" name="address" placeholder="Enter Your Address Here"></textarea>
                                      </div>
                                    </div>
                                <!-- /Address -->
                                    <div class="form-group text-right">
                                        <button id="submitButton" type="submit" class="btn btn-primary btn-raised btn-info">Submit</button>
                                    </div>

                            </div>
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
        </div>
        <!-- /WRAPPER -->


        <!--  SIGN IN MODAL -->
        <div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="SignInModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="modal-title montserrat" id="SignInLabel"> <i class="fa fa-user fa-lg"></i><br>Sign In!</h3>
                        <div class="social center-block page-header">
                            <ul class="list-inline">
                                <li><button type="button" class="btn"><i class="fa fa-facebook-square fa-lg"></i></button></li>
                                <li><button type="button" class="btn"><i class="fa fa-twitter fa-lg"></i></button></li>
                                <li><button type="button" class="btn"><i class="fa fa-google-plus fa-lg"></i></button></li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body-form">
                            <form id="loginForm" method="post" action="<?php echo site_url('login');?>">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">email</i>
                                    </span>
                                    <div class="form-group-lg">
                                        <input type="email" placeholder="Your Email" class="form-control" value="" required/>
                                    </div>
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="material-icons">lock</i>
                                    </span>
                                    <div class="form-group-lg">
                                        <input type="password" placeholder="Your Password" class="form-control" value="" required/>
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
                            <button type="submit" class="btn btn-raised btn-primary btn-round btn-danger btn-sm" id="signUpButton">
                            Get Started <i class="fa fa-heart"></i>
                            </button>
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

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>


<!-- Jquery Validation -->
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function(){
			// the body of this function is in assets/material-kit.js
			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

      $('#birthdate').datepicker({});

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

            })

            $.validator.addMethod("regex", function(value, element, regexp){
          		return regexp.test(value);
          	}, "Please Enter a Valid Phone Number");

            $.validator.addMethod("checkAge", function(value, element){
                  var today = new Date();
                  var birthDate = new Date(value);
                  var age = today.getFullYear() - birthDate.getFullYear();
                  var m = today.getMonth() - birthDate.getMonth();

                  if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                  age--;
                  }


                  return age >= 18;

            }, "You must be at least 18 to Register.");


            $('#signupForm').validate({
                rules: {
                    firstname: {
                        required: true,
                        maxlength: 50
                    },
                    lastname: {
                        required: true,
                        maxlength: 50
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    mobile: {
                        required: true,
                        digits: true,
                        regex: /^(09)\d{9}$/
                    },
                    password: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password"
                    },
                    address: {
                        required: true,
                        maxlength: 100
                    },
                    birthdate: {
                        checkAge: true,
                        required: true,
                        date: true

                    }
                },
                messages: {
                    firstname: {
                        required: "Please enter your Firstname",
                        maxlength: "Maximum Character is 50."
                    },
                    lastname: {
                        required: "Please enter your Lastname.",
                        maxlength: "Maximum Character is 50."
                    },
                    password: {
                        required: "Please provide a password.",
                        minlength: "Your password must be at least 6 characters long."
                    },
                    confirm_password: {
                        required: "Please provide a password.",
                        minlength: "Your password must be at least 6 characters long.",
                        equalTo: "Password do not match."
                    },
                    address: {
                        required: "Please provide your Address.",
                        maxlength: 'Maximum of 100 Characters.'
                    },
                    birthdate: {
                        required: "Please Enter your Birth Date.",
                        checkAge: "You must be at least 18 to Register."
                    },
                    email: "Please enter a valid email address."

                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('help-block');


                    if (element.prop('type') === 'checkbox') {
                        error.insertAfter('element.parent("label")');
                    } else {
                        error.insertAfter(element);
                    }

                    if (!element.next('span')[0]) {
                        $("<span class='glyphicon glyphicon-remove form-control-feedback'></span>").insertAfter(element);
                    }

                },
                success: function(label, element) {
                    // Add the span element, if doesn't exists, and apply the icon classes to it.
                    if (!$(element).next("span")[0]) {
                        $("<span class='glyphicon glyphicon-ok form-control-feedback'></span>").insertAfter($(element));
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).parents(".form-group.has-feedback").addClass("has-error").removeClass("has-success");
                    $(element).next("span").addClass("glyphicon-remove").removeClass("glyphicon-ok");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).parents(".form-group.has-feedback").addClass("has-success").removeClass("has-error");
                    $(element).next("span").addClass("glyphicon-ok").removeClass("glyphicon-remove");
                }

            });

    });

</script>


</html>
