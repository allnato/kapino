<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>kapino.ico">
        <title>Kapino &#8226; Market</title>

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
        <link href="<?php echo base_url(); ?>assets/js/animate.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/market.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/icheck/skins/flat/green.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/js/animate.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>assets/css/jPages.css" rel="stylsheet" />
    </head>

    <body class="market-page">
        <img src="https://www.transparenttextures.com/patterns/wood-pattern.png" id="backgroundImg" style="display:none;">
        <!-- NAVBAR -->
        <nav class="animsition navbar navbar-success navbar-fixed-top " data-animsition-in-class="fade-in-down-sm" data-animsition-out-class="fade-out-up-sm" data-animsition-in-duration="1000" data-animsition-out-duration="500">
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
                        <li><a href="<?php echo site_url('profile'); ?>" id="adNav" class="animsition-link"><i class="fa fa-pencil"></i>Create an AD</a></li>
                        <li><a href="<?php echo site_url('aboutUs'); ?>"><i class="fa fa-comments"></i> About Us</a></li>
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
                        <li><a id="signup" href="#" data-toggle="modal" data-target="#signInModal"><i class="fa fa-user"></i> Sign in</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- /NAVBAR -->
        <!--  WRAPPER -->
        <div class="wrapper animsition" data-animsition-in-class="fade-in-up-sm" data-animsition-out-class="fade-out-down-sm" data-animsition-in-duration="2000" data-animsition-out-duration="2000">
            <!-- MAIN -->
            <div class="main main-raised" id="main">
                <div class="container">
                    <!-- CAROUSEL -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-raised card-carousel">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <div class="carousel slide" data-ride="carousel">

                                        <!-- Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                                        </ol>

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item">
                                                <img src="<?php echo base_url(); ?>assets/img/The%20Cropped%204.jpg" alt="Awesome Image" class="slide-image">
                                                <div class="carousel-caption">
                                                    <h4><i class="material-icons">location_on</i></h4>
                                                </div>
                                            </div>
                                            <div class="item active">
                                                <img src="<?php echo base_url(); ?>assets/img/The%20Cropped%205.jpg" alt="Awesome Image" class="slide-image">
                                                <div class="carousel-caption">
                                                    <h4><i class="material-icons">location_on</i></h4>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <img src="<?php echo base_url(); ?>assets/img/The%20Cropped%2031.jpg" alt="Awesome Image" class="slide-image">
                                                <div class="carousel-caption">
                                                    <h4><i class="material-icons">location_on</i></h4>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                            <i class="material-icons">keyboard_arrow_left</i>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                            <i class="material-icons">keyboard_arrow_right</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /CAROUSEL -->

                    <!-- NAV PILLS -->
                    <div class="nav-align-center marketNav">
                        <ul class="nav nav-pills nav-pills-danger" role="tablist">
                            <li>
                                <a href="#dashboard" role="tab" data-toggle="tab">
                                    <i class="material-icons">new_releases</i> New
                                </a>
                            </li>
                            <li class="active">
                                <a href="#schedule" role="tab" data-toggle="tab">
                                    <i class="material-icons">dashboard</i> Market
                                </a>
                            </li>
                            <li>
                                <a href="#tasks" role="tab" data-toggle="tab">
                                    <i class="material-icons">whatshot</i> Featured
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /NAV PILLS -->

                    <!-- CONTENT -->
                    <div class="row">

                        <!-- SORT BY -->
                        <div class="col-md-3">
                            <h3 class="montserrat">Filter By:</h3>
                            <div class="well">
                                <h4 class="text-info montserrat">Type</h4>

                                <form method="get" action="<?php echo site_url('filter'); ?>">
                                    <label>
                                        <input type="checkbox" name="checkboxArabica" value="Arabica"> Arabica
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" name="checkboxLiberica" value="Liberica"> Liberica
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" name="checkboxRobusta" value="Robusta"> Robusta
                                    </label>



                                    <h4 class="text-primary montserrat">Variety</h4>


                                    <label>
                                        <input type="checkbox" name="checkboxRoasted" value="Roasted"> Roasted
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" name="checkboxDried" value="Dried"> Dried
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" name="checkboxFresh" value="Fresh"> Fresh
                                    </label>
                                    <br>

                                    <br>
                                    <br>
                                    <div class="center-block text-center">
                                        <input type="submit" name="submitFilter" value="Filter" class="btn btn-raised btn-success">
                                    </div>

                                </form>

                            </div>
                            <h3 class="montserrat">Sort By:</h3>
                            <div class="well">
                                <form method="get" action="<?php echo site_url('sort'); ?>">
                                    <label>
                                        <input type="checkbox" name="checkboxDate" value="date"> Date Added
                                    </label>
                                    <br>
                                    <label>
                                        <input type="checkbox" name="checkboxRate" value="rate"> Rating
                                    </label>

                                    <div class="center-block text-center">
                                        <input type="submit" name="submitSort" value="Sort" class="btn btn-raised btn-success">
                                    </div>

                                </form>

                            </div>
                        </div>
                        <!-- /SORT BY -->

                        <!-- ITEMS -->
                        <div class="col-md-9" id="productContent">

                        </div>
                        <!-- /ITEMS -->


                    </div>
                    <!-- /CONTENT -->

                    <!-- PAGINATION -->
                    <div class="row">
                        <div class="col-md-9 col-md-offset-3">
                            <div class="text-center">
                              <div class="page-navigation"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /PAGINATION -->
                </div>
            </div>
            <!-- /MAIN -->




            <!--  FOOTER -->
            <footer class="footer">
                <div class="container">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="<?php echo site_url("home"); ?>">
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

        <form method="POST" action="<?php echo base_url(); ?>index.php/marketitem" id="marketitemform">
            <input type="hidden" name="prodID" id="prodidinput"/>
            <
        </form>

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
    <script src="<?php echo base_url(); ?>assets/js/jPages.min.js" ></script>
    <script src="<?php echo base_url(); ?>assets/noty/packaged/jquery.noty.packaged.min.js"></script>

    <script src="<?php echo base_url(); ?>assets/js/market.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>

    <script src="<?php echo base_url(); ?>assets/icheck/icheck.js" type="text/javascript"></script>
    <script type="text/javascript">



        $(document).ready(function() {
          // [START] Navigation Bar Session
          var $isLogged = <?php echo json_encode($userInfo); ?>;
          var $isSeller = <?php echo json_encode($userFarmID); ?>;
          var $marketProducts = <?php echo json_encode($marketProducts); ?>;
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
                var $flooredStars;

            // INSERT MARKET ELEMENTS HERE
            for(var i = 0; i < $marketProducts.length; i++) {
                if($marketProducts[i]['avgRating'] == null) {
                    $marketProducts[i]['avgRating'] = "Not yet rated";
                }
                else {
                    var $str = $marketProducts[i]['avgRating'];
                    $marketProducts[i]['avgRating'] = $str + " Stars";
                }

                if($.isNumeric(parseInt($marketProducts[i]['avgRating']))) {
                    var $flooredStars = Math.floor(parseInt($marketProducts[i]['avgRating']));
                }
                else {
                    var $flooredStars = 0;
                }
                var $toComplete = 5 - $flooredStars;
                var $div1 = $('<div/>');
                    $div1.addClass('col-sm-4 col-lg-4 col-md-4');

                var $div2 = $('<div/>');
                    $div2.addClass('thumbnail');

                var $img1 = $('<span id="' + $marketProducts[i]['prodID']+'_'+$marketProducts[i]['sellerID']+'_'+$marketProducts[i]['releaseDate'] +'" class="clickable"><img src="" alt="" class="img-responsive img-type"></span>'),
                    $div3 = $('<div class="caption"></div>'),
                    $div4 = $('<h4><span class="label productType">' + $marketProducts[i]['type'] +'</span><span class="label label-danger productVar">'+ $marketProducts[i]['variety'] +'</span></h4>'),
                    $div5 = $('<h5 class="sellerInfo"><small class="text-info">by '+$marketProducts[i]['seller'] +'</small><br><small>'+ $marketProducts[i]['address'] +'</small></h5>'),
                    $div6 = $('<h4 class="productPrice">'+ $marketProducts[i]['price'] +'  PhP</h4>'),
                    $div7 = $('<div class="ratings"></div>'),
                    $div8 = $('<p class="pull-right">'+$marketProducts[i]['noOfRating'] +' reviews</p>'),
                    $div9 = $('<p></p>');
                    if($flooredStars > 0) {
                        for(var j = 0; j < $flooredStars; j++) {
                            $div9.append('<span class="glyphicon glyphicon-star">');
                        }
                        for(var j = 0; j < $toComplete; j++) {
                            $div9.append('<span class="glyphicon glyphicon-star-empty">');
                        }
                    }
                    else {
                        $div9.append('Not Yet Rated!');
                    }
                //Same Level
                $div7.append($div8, $div9);
                //Same Level
                $div3.append($div4, $div5, $div6);
                //Same Level
                $div2.append($img1, $div3, $div7);
                //Same Level
                $div1.append($div2);
                $('#productContent').append($div1);
            }


            $('.clickable').click(function(e){

                $("#prodidinput").val($(this).attr("id"));
                $("#marketitemform").submit();

                console.log("Hello?");

            });


            $("#productContent").css("visibility", "hidden");
            var imgarr = new Array(
              "<?php echo base_url(); ?>assets/img/itema.png",  //imgarr[0] == Robusta
              "<?php echo base_url(); ?>assets/img/itemb.png",  //imgarr[1] == Liberica
              "<?php echo base_url(); ?>assets/img/itemc.png"); //imgarr[2] == Arabica

            var thumbnails = document.getElementsByClassName('img-type');
            var types = document.getElementsByClassName('productType');
            var varieties = document.getElementsByClassName('productVar');
            for(var i = 0; i < thumbnails.length; i++){



              //Check what type is the product item
              var type = types[i].innerHTML;

              //Compare What type
              if(type.toLowerCase() == "robusta"){
                thumbnails[i].src = imgarr[0];
              }else if(type.toLowerCase() == "liberica"){
                thumbnails[i].src = imgarr[1];
              }else if(type.toLowerCase() == "arabica"){
                thumbnails[i].src = imgarr[2];
              }

              //get the value of the Variety
              var vary = varieties[i].innerHTML;
              if(vary.toLowerCase() == "dried"){
                varieties[i].className = "label label-primary productVar";
              } else if(vary.toLowerCase() == "roasted"){
                varieties[i].className = "label label-danger productVar";
              } else if(vary.toLowerCase() == "fresh"){
                varieties[i].className = "label label-success productVar";
              }
            }

            setTimeout(function(){
              $("#productContent").css("visibility", "visible");
              $("div.page-navigation").jPages({
                containerID : "productContent",
                perPage: 9,
                startPage: 1,
                startRange: 1,
                midRange: 7,
                endRange: 1,
                animation: 'bounceIn'
              });
             }, 3000);

            // the body of this function is in assets/material-kit.js
            $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

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

            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-green',
                radioClass: 'iradio_flat-green'
            });

            $(window).load(function() {
                $('#backgroundIMG').ready(function() {
                    $('body').addClass("bodyBG");
                });
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


            function getBaseURL() {
                var $url = <?php echo json_encode(base_url()); ?>;

                return $url;
            }
            function getMarketURL() {
                var $url = <?php echo json_encode(site_url('marketitem')); ?>;

                return $url;
            }

        });
    </script>
    <script src="<?php echo base_url(); ?>assets/js/validator.min.js"></script>

</html>
