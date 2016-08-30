<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
<link rel="shortcut icon" type="image/x-icon" href="../kapino.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kapino &#8226; Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>assets/assets-admin/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/assets-admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>assets/assets-admin/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<script src="https://use.fontawesome.com/025359d28b.js"></script>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url(); ?>assets/assets-admin/css/pe-icon-7-stroke.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet"/>
		<link href="<?php echo base_url(); ?>assets/chartist-js/chartist.min.css" rel="stylesheet"  />
		<link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="<?php echo base_url(); ?>assets/assets-admin/img/sidebar-3.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo site_url("dashboard"); ?>" class="simple-text">
                    Kapino
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo site_url('sellers'); ?>" class="animsition-link">
                        <i class="pe-7s-news-paper"></i>
                        <p>Pending Sellers</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url('users'); ?>" class="animsition-link">
                        <i class="pe-7s-id"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="active">
                    <a href="<?php echo site_url('products'); ?>" class="animsition-link">
                        <i class="pe-7s-ribbon"></i>
                        <p>Products</p>
                    </a>
                </li>

            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">

                    <!-- Dashboard Nav-->


                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="<?php echo site_url('logout'); ?>">
                              Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


				<div class="content animsition">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title montserrat">Coffee Type Ads</h4>
                                <p class="category">August 2016</p>
                            </div>
                            <div class="content">
                                <div id="productTypePie" class="ct-chart">

                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-danger"></i> Robusta = 73
                                        <i class="fa fa-circle text-info"></i> Arabica = 34
                                        <i class="fa fa-circle text-warning"></i> Liberica = 31
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> August 11, 2016
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title montserrat">Coffee Type Trends</h4>
                                <p class="category">2016</p>
                            </div>
                            <div class="content">
                                <div id="productTypeLine" class="ct-chart">
                                </div>
                                <div class="footer">
                                    <div class="legend productTypeLine">
                                        <i class="fa fa-circle text-info"></i> Robusta
                                        <i class="fa fa-circle text-danger"></i> Arabica
                                        <i class="fa fa-circle text-warning"></i> Liberica
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

								<div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="header">
                                <h4 class="title montserrat">Coffee Variety Ads</h4>
                                <p class="category">August 2016</p>
                            </div>
                            <div class="content">
                                <div id="productVarPie" class="ct-chart">

                                </div>

                                <div class="footer">
                                    <div class="legend productVarPie">
                                        <i class="fa fa-circle text-info"></i> Roasted = 64
                                        <i class="fa fa-circle text-danger"></i> Dried = 32
                                        <i class="fa fa-circle text-warning"></i> Fresh = 32
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> August 11, 2016
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title montserrat">Coffee Variety Trends</h4>
                                <p class="category">2016</p>
                            </div>
                            <div class="content">
                                <div id="productVarLine" class="ct-chart">
                                </div>
                                <div class="footer">
																		<div class="legend productVarLine">
																				<i class="fa fa-circle text-info"></i> Roasted
																				<i class="fa fa-circle text-danger"></i> Dried
																				<i class="fa fa-circle text-warning"></i> Fresh
																		</div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

								<div class="row">
									<div class="col-md-12">
											<div class="card">
													<div class="header">
															<h4 class="title montserrat">Coffee Product Trends</h4>
															<p class="category">2016</p>
													</div>
													<div class="content">
															<div id="productTrendBar" class="ct-chart">
															</div>
															<div class="footer">
																	<div class="legend productVarLine">
																			<i class="fa fa-circle text-info"></i> Roasted Robusta
																			<i class="fa fa-circle text-info"></i> Dried Robusta
																			<i class="fa fa-circle text-info"></i> Fresh Robusta
																			<i class="fa fa-circle text-info"></i> Roasted Arabica
																			<i class="fa fa-circle text-info"></i> Dried Arabica
																			<i class="fa fa-circle text-info"></i> Fresh Arabica
																			<i class="fa fa-circle text-info"></i> Roasted Liberica
																			<i class="fa fa-circle text-info"></i> Dried Liberica
																			<i class="fa fa-circle text-info"></i> Fresh Liberica
																	</div>
																	<hr>
																	<div class="stats">
																			<i class="fa fa-history"></i> Updated 3 minutes ago
																	</div>
															</div>
													</div>
											</div>
									</div>

								</div>


            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">
                                Dashboard
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url(); ?>assets/assets-admin/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/assets-admin/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url(); ?>assets/assets-admin/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url(); ?>assets/assets-admin/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url(); ?>assets/assets-admin/js/bootstrap-notify.js"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url(); ?>assets/assets-admin/js/light-bootstrap-dashboard.js"></script>

	<script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/chartist-js/chartist.min.js"></script>


	<script>

	var sum = function(a, b) { return a + b };

  // No. of Coffee Types Advertised in the Current Month
	// Arabica, Robusta, Liberica
	var productTypePieData = {
		series: [73, 34, 21]
	}

  // No. of Coffee Varieties in the Current Month
  // Roasted, Dried, Fresh
	var productVarPieData = {
		series: [64, 32, 32]
	}

	new Chartist.Pie('#productTypePie', productTypePieData, {
		labelInterpolationFnc: function(value) {
			return Math.round(value / productTypePieData.series.reduce(sum) * 100) + '%';
		}
	});

	new Chartist.Pie('#productVarPie', productVarPieData, {
		labelInterpolationFnc: function(value) {
			return Math.round(value / productVarPieData.series.reduce(sum) * 100) + '%';
		}
	});

  // No. Of Coffe Type Advertised Per Month
	// Robusta, Arabica, Liberica
	new Chartist.Line('#productTypeLine', {
  		labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
	  	series: [
	    	[12, 9, 7, 8, 5, 17, 21, 12],
	    	[2, 1, 3.5, 7, 3, 4, 5, 1],
	    	[1, 3, 4, 5, 6, 4, 10, 16]
	  	]});

  // No. Of Coffe Varieties Advertised Per Month
  // Roasted, Dried, Fresh
	new Chartist.Line('#productVarLine', {
  		labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
	  	series: [
	    	[12, 9, 7, 8, 5, 17, 15, 12],
	    	[2, 1, 3.5, 3, 3, 4, 5, 1],
	    	[4, 3, 7, 5, 6, 4, 10, 8]
	  	]});

      // Total No. Coffee Types and Varieties Advertised In the Current Year
      // RR = Roasted Robusta , DA = Dried Arabica, DL = Dried Liberica ...,
			var productTrend = {
			  labels: ['RR', 'DR', 'FR', 'RA', 'DA', 'FA', 'RL', 'DL', 'FL'],
			  series: [
			    [5, 4, 3, 7, 5, 10, 3, 4, 8]
			  ]
			};

			var responsiveOptions = [
			  ['screen and (max-width: 640px)', {
			    seriesBarDistance: 5,
			    axisX: {
			      labelInterpolationFnc: function (value) {
			        return value[0];
			      }
			    }
			  }]
			];

	new Chartist.Bar('#productTrendBar', productTrend, responsiveOptions);

		$(document).ready(function() {
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
