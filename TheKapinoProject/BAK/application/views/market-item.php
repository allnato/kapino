<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>kapino.ico">
        <title>Kapino &#8226; Product</title>

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
        <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/fresh_bootstrap_table/assets/css/fresh-bootstrap-table.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/css/market-item.css" rel="stylesheet"/>
        <link href="<?php echo base_url(); ?>assets/rateyo/jquery.rateyo.css" rel="stylesheet" />
    </head>

    <body class="market-item animsition">
        <img src="https://www.transparenttextures.com/patterns/wood-pattern.png"
             id="backgroundImg"
             style="display:none;">
         <!-- NAVBAR -->
        <nav class="animsition navbar navbar-success navbar-fixed-top "
             data-animsition-in-class = "fade-in-down-sm"
             data-animsition-out-class = "fade-out-up-sm"
             data-animsition-in-duration = "1000"
             data-animsition-out-duration = "500">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#landing-navbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand animsition-link" href="<?php echo site_url("home"); ?>"><!--<i class="fa fa-coffee"></i>-->Kapino</a>
                </div>

                <div class="navbar-collapse collapse" id="landing-navbar">
                    <ul class="nav navbar-nav">
                        <li class=""><a href="<?php echo site_url("home"); ?>" class="animsition-link"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php echo site_url('market')?>" class="animsition-link"><i class="fa fa-shopping-basket "></i> The Market</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo site_url('profile'); ?>" id="adNav" class="animsition-link"><i class="fa fa-pencil"></i>Create an AD</a></li>
                        <li><a href="#"><i class="fa fa-comments"></i> About Us</a></li>
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
        <!-- WRAPPER -->
        <div class="wrapper animsition"
             data-animsition-in-class = "fade-in-up-sm"
             data-animsition-out-class = "fade-out-down-sm"
             data-animsition-in-duration = "2000"
             data-animsition-out-duration = "2000">
            <!-- MAIN -->
            <div class="main main-raised" id="main">
                <!-- CONTAINER -->
                <div class="container">

                    <div class="row">
                        <!-- SIDEBAR -->
                        <div class="col-md-3">
                            <div class="list-group">
                                <a href="<?php echo site_url("market"); ?>" class="list-group-item animsition-link">
                                <i class="fa fa-arrow-circle-left fa-lg" aria-hidden="true"></i>
                                     Back to Market
                                </a>
                                <a href="#" class="list-group-item animsition-link">
                                    <i class="fa fa-user fa-lg" aria-hidden="true"></i>
                                     Seller's Profile
                                </a>

                                <a href="#" class="list-group-item">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                     Send the Seller a Message
                                </a>
                            </div>

                            <div class="fresh-table toolbar-color-azure">
                                 <div class="toolbar information-toolbar">
                                 <h4><i class="fa fa-info-circle" aria-hidden="true"></i> Seller Information</h4>
                                </div>

                                <table id="information-table" class="table"></table>

                             </div>
                        </div>
                        <!-- /SIDEBAR -->
                        <!-- CONTENT -->
                        <div class="col-md-9">
                            <div class="thumbnail">
                                <img class="img-responsive img-thumbnail" src="http://placehold.it/800x300" alt="">
                                <div class="caption-full">
                                    <h3 id="market-price"class="pull-right productPrice">
                                        0.00 PhP
                                    </h3>
                                    <h3>
                                    <span id="market-type" class="label label-primary productType">Robusta</span>
                                    <span id="market-var" class="label label-danger productVar">Roasted</span>
                                    </h3>

                                    <h4 class="text-info" id="sellerInfo">
                                        <a href="#" id="market-name" class="text-info">
                                            By Joe Pakistan
                                        </a>
                                        <br>
                                        <small id="market-location">New York, Manila</small>
                                    </h4>

                                    <div class="text-right">
                                        <p class="">Interested? Click the button to notify the Seller.</p>
                                        <button class="btn btn-round btn-raised btn-danger btn-fab">
                                            <i class="material-icons">favorite</i>
                                        </button>
                                    </div>

                                </div>

                                
                            </div>

                            <div id="table" class="well">

                                <div class="text-right">
                                    <a class="btn btn-raised btn-info" data-toggle="modal" data-target="#reviewModal">Leave a Review</a>
                                </div>

                                <hr>

                            </div>

                        </div>
                        <!-- /CONTENT-->
                    </div>

                </div>
                <!-- /CONTAINER -->
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

        <!-- RATE MODAL -->
        <div class="modal fade" id="reviewModal" tabindex="-1" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h3 class="montserrat text-info">Rate And Review</h3>
                        <hr />
                    </div>
                    <div class="modal-body">
                        <form class="form" method="post" id="reviewForm">

                            <div id="stars" class="center-block"></div>

                            <!-- COMMENT  -->
                            <div class="form-group has-feedback">
                                <div class="input-group has-feedback">
                                    <span class="input-group-addon">
                            <i class="material-icons">comment</i>
                          </span>

                                    <label for="review" class="control-label">Comments</label>
                                    <textarea class="form-control" rows="4" id="review" name="review" placeholder="Enter your Comment Here"></textarea>
                                </div>
                            </div>
                            <!-- //COMMENT -->

                            <!-- RATING INPUT (HIDDEN) -->
                            <input type="text" style="display:none;" id="rating" />
                            <!-- //RATING INPUT (HIDDEN)-->

                        </form>
                        <hr />
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-raised btn-info btn-lg" id="reviewButton">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /RATE MODAL -->
    </body>

    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/market.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/rateyo/jquery.rateyo.min.js"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/fresh_bootstrap_table/assets/js/bootstrap-table.js"></script>


    <script type="text/javascript">

        //FRESH TABLE
        var $information_table = $('#information-table');

        $().ready(function(){
                // the body of this function is in assets/material-kit.js
                $(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

                // [START] Navigation Bar Session
                var $isLogged = <?php echo json_encode($userInfo); ?>;
                var $isSeller = <?php echo json_encode($userFarmID); ?>;
                var $userData = <?php echo json_encode($userData); ?>;
                var $releaseDate = <?php echo json_encode($releaseDate); ?>;
                var $prodData = <?php echo json_encode($prodData); ?>;
                var $rateData = <?php echo json_encode($rateData); ?>;
                console.log($userData);
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
                // Append User Details
                $('#market-name').empty();
                $('#market-name').append($userData['firstName'] + ' ' + $userData['lastName']);
                $('#market-location').empty();
                $('#market-location').append($userData['address']);
                $('#market-price').empty();
                $('#market-price').append($prodData['price'] + " PhP");
                $('#market-type').empty();
                $('#market-type').append($prodData['type']);
                $('#market-var').empty();
                $('#market-var').append($prodData['type']);
                $('#rating-count').empty();
                $('#rating-count').append($prodData['rateCount']);
            
                for(var i = 0; i < $rateData.length; i++) {
                    if($rateData[i]['prodID'] == $prodData['prodID']) {
                        var $rate = parseInt($rateData[i]['rate']);
                        var $toRate = 5-$rate;
                        var $div1 = $('<div class="row"></div>');
                        var $div2 = $('<div class="col-md-12"></div>');
                        for(var j = 0; j < $rate; j++) {
                            $div2.append('<span class="glyphicon glyphicon-star"></span>');
                        }
                        for(var j = 0; j < $toRate; j++) {
                            $div2.append('<span class="glyphicon glyphicon-star-empty"></span>');
                        }
                        $div2.append(' '+$rateData[i]['Rater']);
                        var $div3 = $('<p></p>');
                        $div3.append($rateData[i]['feedback']+'<br>');
                        $div2.append($div3);
                        $div1.append($div2);
                        $('#table').append($div1);
                    }
                }
            
                // [END] Navigation Bar Session

              // [START] Change the Image Thumbnail.
            
              var productItem = $('.productType').text();
              var thumbnail = document.getElementsByClassName('img-thumbnail');
              var imgarr = new Array(
                "<?php echo base_url(); ?>assets/img/market-item-arabica.png",  //imgarr[0] == Araibica
                "<?php echo base_url(); ?>assets/img/market-item-robusta.png",  //imgarr[1] == Robusta
                "<?php echo base_url(); ?>assets/img/market-item-liberica.png");
              if(productItem.toLowerCase() == "robusta"){
                thumbnail[0].src = imgarr[1];
              }else if (productItem.toLowerCase() == "liberica") {
                thumbnail[0].src = imgarr[2];
              }else if (productItem.toLowerCase() == "arabica") {
                thumbnail[0].src = imgarr[0];
              }
              
              // [END] Change the Image Thumbnail.
        

              // [START] Change the Variety and Type Label Color
              var productVar = $('.productVar').text();
              if(productVar.toLowerCase() == "roasted"){
                $('.productVar').attr('class', 'label label-danger productVar')
              }else if (productVar.toLowerCase() == "dried") {
                $('.productVar').attr('class', 'label label-primary productVar')
              }else if (productVar.toLowerCase() == "fresh") {
                $('.productVar').attr('class', 'label label-success productVar')
              }
              // [END] Change the Variety and Type Label Color

              // [START] Star Rating Plugin for Rating
              $('#stars').rateYo({
                  starWidth: "40px",
                  spacing: "10px",
                  fullStar: true
                });
              // [END] Star Rating Plugin for Rating

              // [START] Submit Button for Rating
              $('#reviewButton').click(function(){
                 var rating = $('#stars').rateYo("rating");
                 $("#rating").val(rating);
                 $("#reviewForm").submit();
              });
              // [END] Submit Button for Rating


                $('.animsition').animsition({
                    linkElement: '.animsition-link',
                    loading: true,
                    loadingParentElement: 'html', //animsition wrapper element
                    loadingClass: 'animsition-loading',
                    loadingInner: '', // e.g '<img src="loading.svg" />'
                    timeout: false,
                    timeoutCountdown: 5000,
                    onLoadEvent: true,
                    browser: [ 'animation-duration', '-webkit-animation-duration'],

                });

                $(window).load(function(){
                    $('#backgroundIMG').ready(function(){
                        $('body').addClass("bodyBG");
                    });
                });

                $information_table.bootstrapTable({
                    toolbar: '.toolbar',
                    striped: 'true',
                    cardView: true,

                    columns: [
                        {
                            field: 'type'
                        },{
                            field: 'data'
                        }
                    ],

                    data: [
                        {
                            type: 'Date Posted:',
                            data: $releaseDate
                        },{
                            type: 'Mobile:',
                            data: $userData['mobileNum']
                        },{
                            type: 'Email Address:',
                            data: $userData['email']
                        },{
                            type: 'Location:',
                            data: $userData['address']
                        }
                    ]

                })


            });
    </script>
    <script src="<?php echo base_url(); ?>assets/js/validator.min.js"></script>


</html>
