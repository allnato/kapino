<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>kapino.ico">
    <title>Kapino &#8226; Profile</title>

    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />

    <!--     Fonts and icons     -->
    <!-- CDN's -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />

    <!--font-awesome-->
    <script src="https://use.fontawesome.com/e13547c890.js"></script>
    <!--lobster|lobster2|montserrat-->
    <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two|Montserrat" rel="stylesheet">
    <!-- Host -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/font-awesome/css/font-awesome.min.css" />



    <!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/js/animate.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/css/material-kit.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/fresh_bootstrap_table/assets/css/fresh-bootstrap-table.css" rel="stylesheet"/>
    <link href="<?php echo base_url(); ?>assets/css/profile.css" rel="stylesheet" />
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
                            <i class="material-icons">account_circle</i> Hi, <?php echo str_replace('"', "", json_encode($sessName)); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url('profile'); ?>" class="animsition-link">My Profile</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url('logout'); ?>" class="text-danger animsition-link">Logout</a></li>
                            <li class="divider"></li>
                            <li id="beASeller"><a href="<?php echo site_url('seller'); ?>" class="btn btn-danger btn-raised white">Become a Seller</a></li>

                        </ul>
                    </li>
                    <!-- END -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- /NAVBAR -->
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- HEADER -->
        <div class="header header-filter header-img animsition"
             data-animsition-in-class = "fade-in-down-sm"
             data-animsition-out-class ="fade-out-up-sm"
             data-animsition-in-duration ="1000"
             data-animsition-out-duration = "1000"></div>
        <!-- /HEADER -->
        <!-- MAIN -->
        <div class="main main-raised animsition" id="main"
             data-animsition-in-class = "fade-in-up-sm"
             data-animsition-out-class = "fade-out-down-sm"
             data-animsition-in-duration = "2000"
             data-animsition-out-duration = "2000">
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
                                <h3 class="title"><?php echo $userInfo['firstName']; ?> <?php echo $userInfo['lastName']; ?></h3>

                                <h3>
                                        <span class="label label-success">
                                            Buyer
                                        </span>

                                        <span id="isSeller"class="label label-danger">
                                            Seller
                                        </span>
                                </h3>
                            </div>
                            <!-- /NAME & STATUS -->

                            <!-- DATA CONTENT -->
                            <div class="row">

                                <!-- DATA NAVIGATION -->
                                <div class="col-sm-3">

                                    <div class="profile-tabs">
                                        <div class="nav-align-center">
                                            <ul class="nav nav-pills nav-pills-info nav-stacked" role="tablist" id="navPills">

                                                <li class="active">
                                                    <a href="#info" role="tab" data-toggle="tab">
                                                        <i class="material-icons">face</i> my account
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#faves" role="tab" data-toggle="tab">
                                                        <i class="material-icons">favorite</i> favorites
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#statistics" role="tab" data-toggle="tab">
                                                        <i class="material-icons">show_chart</i> Statistics
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="#ads" role="tab" data-toggle="tab" id="adsNav">
                                                        <i class="material-icons">receipt</i> Ads
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /DATA NAVIGATION -->

                                <!-- MAIN DATA -->
                                <div class="col-sm-9">


                                        <!-- ACCOUNT INFORMATION -->
                                        <div class="tab-content">
                                            <!-- PERSONAL & FARM INFORMATION -->
                                            <div class="tab-pane active well" id="info">
                                                <!-- PERSONAL INFORMATION -->
                                                        <div class="fresh-table toolbar-color-azure">
                                                            <div class="toolbar personal-toolbar montserrat">
                                                                <h4>
                                                                  <i class="fa fa-user" aria-hidden="true"></i> Personal Information
                                                                </h4>
                                                            </div>

                                                            <table id="personal-table" class="table">

                                                            </table>

                                                        </div>
                                                <!-- /PERSONAL INFORMATION -->

                                                        <div class="text-right">
                                                            <button id="editPersonalButton" type="button" class="btn btn-info btn-raised" data-toggle="modal" data-target="#editPersonal">Edit</button>
                                                        </div>

                                                <!-- FARM INFORMATION -->
                                                        <div id="farmTable" class="fresh-table toolbar-color-orange">
                                                                <div class="toolbar farm-toolbar">
                                                                       <h4><i class="fa fa-leaf" aria-hidden="true"></i> Farm Information</h4>
                                                                </div>

                                                                <table id="farm-table" class="table">

                                                            </table>
                                                        </div>
                                                <!-- /FARM INFORMATION -->

                                                        <div class="text-right">
                                                            <button id="editFarmButton" type="button" class="btn btn-info btn-raised" data-toggle="modal" data-target="#editFarm">Edit</button>
                                                        </div>

                                            </div>

                                            <!-- FAVORITES  -->
                                            <div class="tab-pane well" id="faves">

                                                <div class="text-center">
                                                    <h3 class="montserrat" id="yourFaves">
                                                        <i class="fa fa-thumbs-o-up fa-2x" aria-hidden="true"></i><br>
                                                        <span class="label label-danger montserrat">Your Favorites!</span>
                                                    </h3>
                                                </div>

                                                <div class="fresh-table toolbar-color-red">
                                                    <div class="toolbar fave-toolbar">
                                                        <h4><i class="fa fa-heart" aria-hidden="true"></i> Favorites</h4>
                                                    </div>

                                                    <table id="fave-table" class="table">
                                                    </table>
                                                </div>

                                            </div>
                                            <!-- /FAVORITES -->

                                            <!-- STATISTICS -->
                                            <div class="tab-pane well" id="statistics">

                                                <h2 class="text-center">Soon...<br />Work in Progress.</h2>

                                            </div>
                                            <!-- /STATISTICS -->

                                            <!-- ADS IF NOT SELLER-->
                                            <div class="tab-pane well" id="Buyerads">
                                                <div class="text-center">
                                                    <button class="btn btn-round btn-success btn-raised btn-fab">
                                                        <i class="fa fa-check">

                                                        </i>
                                                    </button>
                                                    <h3 class="montserrat">
                                                        Become a Seller Now!<br>
                                                        <small>
                                                            Just fill-up your farm information and wait for verification. :-&#41;
                                                        </small>
                                                    </h3>


                                                    <button class="btn btn-raised btn-danger" id="becomeSellerButton">
                                                        <a href="<?php echo site_url('seller'); ?>"><h4 class="montserrat white">Become a Seller</h4></a>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- ADS -->

                                            <!--  ADS IF SELLER-->
                                            <div class="tab-pane well" id="Sellerads">
                                                <div class="text-center">
                                                    <h3>
                                                        <i class="fa fa-newspaper-o fa-2x" aria-hidden="true"></i>
                                                    </h3>
                                                    <button class="btn btn-lg btn-info btn-raised montserrat" id="newAdButton"
                                                    data-toggle="modal"
                                                    data-target="#adModal">
                                                        Create New Ad
                                                    </button>

                                                    <div class="fresh-table toolbar-color-blue">
                                                    <div class="toolbar ads-toolbar">
                                                        <h4><i class="fa fa-file-text" aria-hidden="true"></i> Advertisements</h4>
                                                    </div>

                                                    <table id="ads-table" class="table"></table>
                                                </div>

                                                </div>


                                            </div>
                                            <!-- /ADS -->

                                        </div>
                                        <!-- /ACCOUNT INFORMATION -->
                                </div>
                                <!-- /MAIN DATA -->

                            </div>
                            <!-- /DATA CONTENT -->

                        </div>
                    </div>
                <!-- /CONTAINER -->
                </div>
            <!-- PROFILE CONTENT -->
            </div>
        <!-- /MAIN -->
        </div>
    <!-- /WRAPPER -->
    </div>

        <!-- FOOTER -->
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

        <!--  CREATE AD MODAL -->
        <div class="modal fade" id="adModal" tabindex="-1" role="dialog" aria-labelledby="AdModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="montserrat">
                            <i class="fa fa-newspaper-o fa-lg"></i>
                            <br>
                            <span class="text-info">Create a New Ad</span>
                        </h3>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body-form">
                            <form id= "adForm" action="<?php echo site_url('newAds') ?>" method="post">

                                <div class="form-group">
                                    <h4 class="text-center"><i class="fa fa-adjust"></i>
                                        <span class="montserrat">Type:</span>
                                    </h4>
                                    <div class="typeRadios text-center">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="typeRadio" value="Arabica"> Arabica
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="typeRadio" value="Liberica"> Liberica
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="typeRadio" value="Robusta"> Robusta
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h4 class="text-center">
                                        <i class="fa fa-map-signs"></i>
                                        <span class="montserrat">Variety:</span>
                                    </h4>
                                    <div class="varietyRadios text-center">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="varRadio" value="Roasted"> Roasted
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="varRadio" value="Dried"> Dried
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="radio radio-inline">
                                                    <label>
                                                        <input type="radio" name="varRadio" value="Fresh"> Fresh
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group-lg">


                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h4 class="text-center"><i class="fa fa-usd"></i>
                                            <span class="montserrat">Price per Kilo</span>
                                            </h4>
                                            <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                        <input id="inputAdPrice" name="price" type="number" class="form-control text-center" placeholder="Price" required>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" value="Create" class="btn btn-raised btn-info btn-lg montserrat">Create</button>
                                </div>


                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <!-- /CREATE AD MODAL -->

        <!--  EDIT AD MODAL -->
         <div class="modal fade" id="editAdModal" tabindex="-1" role="dialog" aria-labelledby="EditModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h3 class="montserrat">
                            <i class="fa fa-newspaper-o fa-lg"></i>
                            <br>
                            <span class="text-info">Edit Ad</span>
                        </h3>
                        <hr>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body-form">
                            <form id= "editForm" action="<?php echo site_url('editAds') ?>" method="post">

                                <div class="form-group">
                                    <h4 class="text-center"><i class="fa fa-adjust"></i>
                                        <span class="montserrat">Type:</span>
                                    </h4>
                                    <div class="typeRadios text-center">

                                    <div class="radio radio-inline">
                                        <label>
                                            <input id="radio-Arabica" type="radio" name="typeRadio" value="Arabica">
                                            Arabica
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input id="radio-Liberica" type="radio" name="typeRadio" value="Liberica">
                                            Liberica
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input id="radio-Robusta" type="radio" name="typeRadio" value="Robusta">
                                            Robusta
                                        </label>
                                    </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h4 class="text-center"><i class="fa fa-map-signs"></i>
                                        <span class="montserrat">Variety:</span>
                                    </h4>
                                <div class="varietyRadios text-center">

                                    <div class="radio radio-inline">
                                        <label>
                                            <input id="radio-Roasted" type="radio" name="varRadio" value="Roasted">
                                            Roasted
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input id="radio-Dried" type="radio" name="varRadio" value="Dried">
                                            Dried
                                        </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <label>
                                            <input id="radio-Fresh" type="radio" name="varRadio" value="Fresh">
                                            Fresh
                                        </label>
                                    </div>
                                </div>
                                </div>

                                <div class="form-group-lg">


                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <h4 class="text-center"><i class="fa fa-usd"></i>
                                            <span class="montserrat">Price per Kilo</span>
                                            </h4>
                                            <div class="form-group has-feedback">
                                                <div class="input-group has-feedback">
                                                        <input id="editAdPrice" type="number" name="priceRadio" class="form-control text-center" placeholder="Price" required>
                                                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                        <div class="help-block with-errors"></div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <div class="form-group text-center">
                                    <button type="submit" value="Create" class="btn btn-raised btn-info btn-lg montserrat">Save Changes</button>
                                </div>

                                <input type="hidden" name="prodID" id="prodidinput"/>
            <
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
        <!-- /EDIT AD MODAL -->
             <form id="deleteAd" method="POST" action="<?php echo site_url('deleteAds'); ?>">
                <input id="prodidToDelete" name="prodID" type="hidden">
             </form>

         <!--  EDIT PERSONAL MODAL -->
         <div class="modal fade" id="editPersonal" tabindex="-1" role="dialog" aria-labelledby="EditPersonalModal" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                     <div class="modal-header text-center">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                         <h3 class="montserrat">
                           <i class="fa fa-user fa-lg text-info"></i>
                           <br />
                           Edit Personal Information
                         </h3>
                         <hr />
                     </div>
                     <div class="modal-body">
                         <div class="modal-body-form">
                             <form id="editPersonalForm">
                                 <!-- F.Name & L.Name -->
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
                                         <!--  Birth Date -->
                                         <div class="col-sm-6">
                                             <div class="form-group has-feedback">
                                                 <div class="input-group has-feedback">
                                                     <span class="input-group-addon">
                                             <i class="material-icons">date_range</i>
                                           </span>
                                                     <input type="text" class="form-control datepicker" name="birthdate" id="birthdate" placeholder="Birth Date" onkeydown="return false" data-date-format="yyyy-mm-dd" />
                                                 </div>
                                             </div>
                                         </div>
                                         <!-- /Birth Date  -->
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
                                             <button id="submitPersonalButton" type="submit" class="btn btn-primary btn-raised btn-info">Save Changes</button>
                                         </div>


                                     </div>
                                 </div>

                             </form>
                         </div>
                     </div>
                     <div class="modal-footer">


                     </div>
                 </div>
             </div>
         </div>
         <!--  /EDIT PERSONAL MODAL -->

         <!--  EDIT FARM MODAL -->
         <div class="modal fade" id="editFarm" tabindex="-1" role="dialog" aria-labelledby="EditFarmModal" aria-hidden="true">
             <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header text-center">
                       <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                       <h3 class="montserrat">
                         <i class="fa fa-leaf fa-lg text-warning"></i>
                         <br />
                         Edit Farm Information
                       </h3>
                       <hr />
                   </div>
                     <div class="modal-body">
                       <div class="modal-body-form">
                         <form id="editFarmForm">
                           <div class="form-group">
                               <div class="row">

                                   <div class="col-sm-6">
                                       <div class="form-group has-feedback">
                                           <div class="input-group has-feedback">
                                               <span class="input-group-addon">
                                             <i class="material-icons">credit_card</i>
                                         </span>

                                               <input id="farmid" name="farmID" type="text" class="form-control" maxlength="50" placeholder="Farmer/Farm ID" required>
                                               <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                               <div class="help-block with-errors"></div>

                                           </div>
                                       </div>
                                   </div>

                                   <div class="col-sm-6">
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
                           <h5 class="form-label montserrat">Farm Size:</h5>
                           <div class="row">
                               <div class="form-group has-feedback">
                                   <div class="col-sm-6 radio text-center">
                                       <h4 class="farmtype"><span class="smallholderRadio"><i class="fa fa-home fa-lg text-warning"></i><br />Small Holder</span></h4>

                                       <label class="">
                                           <input type="radio" id="smallholder" name="farmtype" value="smallholder" required />
                                       </label>
                                   </div>
                                   <div class="col-sm-6 radio text-center">
                                       <h4 class="farmtype"><span class="plantationRadio"><i class="fa fa-building fa-lg text-warning"></i><br />Plantation</span></h4>

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
                               <button id="submitFarmButton" type="submit" class="btn btn-primary btn-raised btn-warning">Save Changes</button>
                           </div>
                         </form>
                       </div>
                     </div>
                     <div class="modal-footer">


                     </div>
                 </div>
             </div>
         </div>
         <!--  /EDIT FARM MODAL -->
</body>

<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material.min.js"></script>
<script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>
<script src="<?php echo base_url(); ?>assets/noty/packaged/jquery.noty.packaged.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/moment.js"</script>

<script src="<?php echo base_url(); ?>assets/js/profile.js" type="text/javascript"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/material-kit.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/fresh_bootstrap_table/assets/js/bootstrap-table.js"></script>

<!-- Jquery Validation -->
<script src="<?php echo base_url(); ?>assets/js/jquery.validate.js" type="text/javascript"></script>


<script>
     //User Info
     var $profileData = <?php echo json_encode($userInfo); ?>;
     var $farmData = <?php echo json_encode($farmInfo); ?>;
     var $isSeller = $profileData['farmID'];
     var $favInfo = <?php echo json_encode($favInfo); ?>;
     var $prodInfo = <?php echo json_encode($prodInfo); ?>;
     var $prodID = $prodInfo['prodID'];
     var $disable = <?php echo json_encode($disable); ?>;
     //FRESH TABLE
        var $personal_table = $('#personal-table');
        var $farm_table = $('#farm-table');
        var $fave_table = $('#fave-table');
        var $ads_table = $('#ads-table');

        // Function to be called after successful form submit.
        function submitPersonalInfo(){
          console.log("Submmited successfully");
          $('#editPersonal').modal('hide');
          $.ajax({
            url: '<?php echo site_url('editProfile');?>',
            type: 'POST',
            dataType: 'json',
            data: {
              firstname : $('#firstname').val(),
              lastname : $('#lastname').val(),
              birthdate : $('#birthdate').val(),
              address : $('#address').val(),
              mobile : $('#mobile').val()}
          })
          .done(function(result) {
            console.log("success " + result);
            //Update the Table.
            updateProfileData();
            $personal_table.bootstrapTable(
              'updateRow',{
                index: 0,
                row: {
                  data: $('#firstname').val() + ' ' + $('#lastname').val()
                }
              }
            );
            $personal_table.bootstrapTable(
              'updateRow',{
                index: 1,
                row: {
                  data: $('#address').val()
                }
              }
            );
            $personal_table.bootstrapTable(
              'updateRow',{
                index: 2,
                row: {
                  data: $('#birthdate').val()
                }
              }
            );
            $personal_table.bootstrapTable(
              'updateRow',{
                index: 4,
                row: {
                  data: $('#mobile').val()
                }
              }
            );
            generateSuccess('Edit Successful!');

          })
          .fail(function(result) {
            console.log("error");
            generateError('Unable to Edit :(');
          })
          .always(function(result) {
            console.log("complete");
          });

        }

        function updateProfileData(){
          $profileData['firstName'] = $('#firstname').val();
          $profileData['lastName'] = $('#lastname').val();
          $profileData['birthDate'] = $('#birthdate').val();
          $profileData['address'] = $('#address').val();
          $profileData['mobileNum'] = $('#mobile').val();
          $profileData['email'] = $('#email').val();
        }

    $(document).ready(function () {

         console.log($disable + ' DIS!');
        // #adNav = Navigation
        // #adsNav = Profille Tab
         if($isSeller == null) {
             console.log($isSeller);
             $('#isSeller').css('display', 'none');
             $('#farmTable').css('display', 'none');
             $('#editFarmButton').css('display', 'none');
             $('#adsNav').attr('href', '#Buyerads');
             $('#Sellerads').css('display', 'none');
             $('#adNav').css('display', 'none');
         }
        else {
             $('#adsNav').attr('href', '#Sellerads');
             $('#Buyerads').css('display', 'none');
             $('#adNav').css('display', 'block');
        }
        var $data = [];
        if($isSeller != false || $isSeller != null) {
                $('#beASeller').css('display','none');
                $('#adNav').css('display', 'block');
            }
        if($disable == 1) {
            $('#adsNav').css('display', 'none');
        }
        else {
            $('#adsNav').css('display', 'block');
        }
        for(var i = 0; i < $favInfo.length; i++) {

            $data.push({
                    id: $favInfo[i]['prodID'],
                    type: $favInfo[i]['type'],
                    variety: $favInfo[i]['variety'],
                    seller: $favInfo[i]['seller'],
                    date: $favInfo[i]['faveDate'],
                });
        }
        var $products = [];
        for(var i = 0; i < $prodInfo.length; i++) {

            $products.push({
                    type: $prodInfo[i]['type'],
                    variety: $prodInfo[i]['variety'],
                    amount: $prodInfo[i]['price'],
                    date: $prodInfo[i]['updateDate'],
                    id: $prodInfo[i]['prodID'],

            });

        }

        // Set the value of form fields when edit is invoked.
        $('#editPersonalButton').click(function(event) {
          $('#firstname').val( $profileData['firstName'] );
          $('#lastname').val( $profileData['lastName'] );
          $('#birthdate').val( $profileData['birthDate'] );
          $('#address').val( $profileData['address'] );
          $('#mobile').val( $profileData['mobileNum'] );
          $('#email').val( $profileData['email']);
        });

        // Prevent page reload when Submit is called.
        $('#editPersonalForm').submit(function(event) {
          event.preventDefault();
        });


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
            browser: ['animation-duration', '-webkit-animation-duration'],

        });

        $personal_table.bootstrapTable({

            toolbar: '.personal-toolbar',

            showRefresh: true,
            showToggle: true,
            striped: true,

            icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
            },

            columns: [
                {
                    field: 'type'
                },
                {
                    field: 'data'
                }
            ],

            data: [
                {
                    type: 'Name',
                    data: $profileData['firstName'].concat(' ', $profileData['lastName'])
                },{
                   type: 'Address',
                    data: $profileData['address']
                },{
                    type: 'Birthdate',
                    data: $profileData['birthDateFull']
                },{
                    type: 'Email',
                    data: $profileData['email']
                },{
                    type: 'Mobile',
                    data: $profileData['mobileNum']
                }
            ]
        });

        $farm_table.bootstrapTable({
           toolbar: '.farm-toolbar',

            showRefresh: true,
            showToggle: true,
            striped: true,

            icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
            },

            columns: [
                {
                    field: 'type'
                },
                {
                    field: 'data'
                }
            ],

            data: [
                {
                    type: 'Farm ID',
                    data: $profileData['farmID']
                },{
                   type: 'Company',
                    data: $farmData['name']
                },
            ]

        });

        $fave_table.bootstrapTable({
           toolbar: '.fave-toolbar',


            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            sortable: true,
            pageSize: 8,
            pageList: [8,10,25,50,100],

            icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
            },

            formatShowingRows: function(pageFrom, pageTo, totalRows){
                //do nothing here, we don't want to show the text "showing x of y from..."
            },

            formatRecordsPerPage: function(pageNumber){
                return pageNumber + " rows visible";
            },

            columns: [
                {
                    field: 'id',
                    title: 'Product ID'
                },{
                    field: 'type',
                    title: 'Type'
                },{
                    field: 'variety',
                    title: 'Variety'
                },{
                    field: 'seller',
                    title: 'Seller'
                },{
                    field: 'date',
                    title: 'Date Posted'
                },{
                    field: 'actions',
                    title: 'Actions',
                    formatter: 'faveFormatter'
                }
            ],

            data: $data,

        });

        $ads_table.bootstrapTable({
           toolbar: '.ads-toolbar',


            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            sortable: true,
            pageSize: 8,
            pageList: [8,10,25,50,100],

            icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
            },

            formatShowingRows: function(pageFrom, pageTo, totalRows){
                //do nothing here, we don't want to show the text "showing x of y from..."
            },

            formatRecordsPerPage: function(pageNumber){
                return pageNumber + " rows visible";
            },

            columns: [
                {
                    field: 'type',
                    title: 'Type',
                    sortable: 'true'
                },{
                    field: 'variety',
                    title: 'Variety',
                    sortable: 'true'
                },{
                    field: 'amount',
                    title: 'Amount',
                    sortable: 'true'
                },{
                    field: 'date',
                    title: 'Date Posted',
                    sortable: 'true'
                },{
                    field: 'actions',
                    title: 'Actions',
                    formatter: 'adsFormatter',
                    events: 'operateEvents'
                }
            ],

            data: $products,

        });



        $(window).resize(function () {
        $personal_table.bootstrapTable('resetView');
          $farm_table.bootstrapTable('resetView');
          $fave_table.bootstrapTable('resetView');
          $ads_table.bootstrapTable('resetView');
        });

        $.validator.addMethod("regex", function(value, element, regexp) {
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

        // [START] EDIT PERSONAL FORM VALIDATOR
        $('#editPersonalForm').validate({
            rules: {
                firstname: {
                    required: true,
                    maxlength: 50
                },
                lastname: {
                    required: true,
                    maxlength: 50
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
            submitHandler: function(form){
              submitPersonalInfo();
            }
        });

    });

    function faveFormatter(value, row, index){
             return [
                '<a rel="tooltip" title="Visit Page" class="table-action edit" href="javascript:void(0)" title="Edit">',
                    '<i class="fa fa-external-link" aria-hidden="true"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        }
    window.operateEvents = {
			'click .edit': function(e, value, row, index) {
				console.log(value, row, index);
                var $type = row['type'];
                var $variety = row['variety'];
                var $amount = row['amount'];
                console.log("Price is " + $amount);
                var $date = row['date'];


                if($type == "Arabica") {
                    $('#radio-Arabica').attr("checked",true);



                }
                else if($type == "Liberica") {
                    $('#radio-Liberica').attr("checked",true);




                }
                else if($type == "Robusta") {
                    $('#radio-Robusta').attr("checked",true);




                }

                if($variety == "Roasted") {
                    $('#radio-Roasted').attr("checked",true);



                }
                else if($variety == "Dried") {
                    $('#radio-Dried').attr("checked",true);


                }
                else if($variety == "Fresh") {
                    $('#radio-Fresh').attr("checked",true);


                }

//                $('#editAdPrice').val($amount);
                $('#prodidinput').val(row['id']);

			},
			'click .remove': function(e, value, row, index) {



                $("#prodidToDelete").val(row['id']);
                $("#deleteAd").submit();



			}
		};

    function adsFormatter(value, row, index){
        return[
            '<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit" data-toggle="modal" data-target="#editAdModal">',
                    '<i class="fa fa-edit"></i>',
                '</a>',
                '<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
                    '<i class="fa fa-remove"></i>',
                '</a>'

        ].join('');
    }

    // Pop up notifications.
      function generateError(message){
        var icon = '<div class="activity-item"> <i class="fa fa-times fa-lg"></i> <div class="activity">' + message + ' </div> </div>'
        var n = noty({
          text: icon,
          type: 'error',
          dismissQueue: true,
          timeout: 10000,
          closeWith: ['click'],
          layout: 'bottomRight',
          theme: 'relax',
          maxVisible: 10,
          animation: {
            open  : 'animated shake',
            close : 'animated bounceOutRight',
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
          layout: 'bottomRight',
          theme: 'relax',
          maxVisible: 10,
          animation: {
            open  : 'animated bounceInRight',
            close : 'animated bounceOutRight',
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
<script src="<?php echo base_url(); ?>assets/js/validator.min.js"></script>
</html>
