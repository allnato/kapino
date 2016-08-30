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
                                        <i id="user-robusta" class="fa fa-circle text-danger"></i><span class="pieRobusta"></span>
                                        <i id="user-arabica" class="fa fa-circle text-info"></i><span class="pieArabica"></span>
                                        <i id="user-liberica" class="fa fa-circle text-warning"></i><span class="pieLiberica"></span>
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
                                        <i id="user-roasted" class="fa fa-circle text-info"></i><span class="pieRoasted"></span>
                                        <i id="user-dried" class="fa fa-circle text-danger"></i><span class="pieDried"></span>
                                        <i id="user-fresh" class="fa fa-circle text-warning"></i><span class="pieFresh"></span>
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

    var cTypeOfMonth = <?php echo json_encode($cTypeOfMonth); ?>;
    var cVarOfMonth = <?php echo json_encode($cVarOfMonth); ?>;
    var cTypePerMonth = <?php echo json_encode($cTypePerMonth); ?>;
    var cVarPerMonth = <?php echo json_encode($cVarPerMonth); ?>;
    var cTrend = <?php echo json_encode($cTrend); ?>;
     
    $('.pieRobusta').empty();
    $('.pieRobusta').append("Robusta: " + cTypeOfMonth[0]['robusta']);
    $('.pieArabica').empty();
    $('.pieArabica').append("Arabica: " + cTypeOfMonth[0]['arabica']);
    $('.pieLiberica').empty();
    $('.pieLiberica').append("Liberica: " + cTypeOfMonth[0]['liberica']);
    
    $('.pieRoasted').empty();
    $('.pieRoasted').append("Roasted: " + cVarOfMonth[0]['roasted']);
    $('.pieDried').empty();
    $('.pieDried').append("Dried: " + cVarOfMonth[0]['dried']);
    $('.pieFresh').empty();
    $('.pieFresh').append("Fresh: " + cVarOfMonth[0]['fresh']);
        
  // No. of Coffee Types Advertised in the Current Month
	// Arabica, Robusta, Liberica
    var a = parseInt(cTypeOfMonth[0]['arabica']);
    var b = parseInt(cTypeOfMonth[0]['robusta']);
    var c = parseInt(cTypeOfMonth[0]['liberica']);
	var productTypePieData = {
		series: [a,b,c]
        //series: [46,100,54]
	}

  // No. of Coffee Varieties in the Current Month
  // Roasted, Dried, Fresh
    var d = parseInt(cVarOfMonth[0]['roasted']);
    var e = parseInt(cVarOfMonth[0]['dried']);
    var f = parseInt(cVarOfMonth[0]['fresh']);
	var productVarPieData = {
		series: [d,e,f]
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
	    	[parseInt(cTypePerMonth[0]['robusta']), parseInt(cTypePerMonth[1]['robusta']), 
            parseInt(cTypePerMonth[2]['robusta']), parseInt(cTypePerMonth[3]['robusta']), 
            parseInt(cTypePerMonth[4]['robusta']), parseInt(cTypePerMonth[5]['robusta']), 
            parseInt(cTypePerMonth[6]['robusta']), parseInt(cTypePerMonth[7]['robusta']), 
            parseInt(cTypePerMonth[8]['robusta']), parseInt(cTypePerMonth[9]['robusta']), 
            parseInt(cTypePerMonth[10]['robusta']), parseInt(cTypePerMonth[11]['robusta'])],
	    	[parseInt(cTypePerMonth[0]['arabica']), parseInt(cTypePerMonth[1]['arabica']), 
            parseInt(cTypePerMonth[2]['arabica']), parseInt(cTypePerMonth[3]['arabica']), 
            parseInt(cTypePerMonth[4]['arabica']), parseInt(cTypePerMonth[5]['arabica']), 
            parseInt(cTypePerMonth[6]['arabica']), parseInt(cTypePerMonth[7]['arabica']), 
            parseInt(cTypePerMonth[8]['arabica']), parseInt(cTypePerMonth[9]['arabica']), 
            parseInt(cTypePerMonth[10]['arabica']), parseInt(cTypePerMonth[11]['arabica'])],
	    	[parseInt(cTypePerMonth[0]['liberica']), parseInt(cTypePerMonth[1]['liberica']), 
            parseInt(cTypePerMonth[2]['liberica']), parseInt(cTypePerMonth[3]['liberica']), 
            parseInt(cTypePerMonth[4]['liberica']), parseInt(cTypePerMonth[5]['liberica']), 
            parseInt(cTypePerMonth[6]['liberica']), parseInt(cTypePerMonth[7]['liberica']), 
            parseInt(cTypePerMonth[8]['liberica']), parseInt(cTypePerMonth[9]['liberica']), 
            parseInt(cTypePerMonth[10]['liberica']), parseInt(cTypePerMonth[11]['liberica'])]
	  	]});

  // No. Of Coffe Varieties Advertised Per Month
  // Roasted, Dried, Fresh
	new Chartist.Line('#productVarLine', {
  		labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
	  	series: [
	    	[parseInt(cVarPerMonth[0]['roasted']), parseInt(cVarPerMonth[1]['roasted']), 
            parseInt(cVarPerMonth[2]['roasted']), parseInt(cVarPerMonth[3]['roasted']), 
            parseInt(cVarPerMonth[4]['roasted']), parseInt(cVarPerMonth[5]['roasted']), 
            parseInt(cVarPerMonth[6]['roasted']), parseInt(cVarPerMonth[7]['roasted']), 
            parseInt(cVarPerMonth[8]['roasted']), parseInt(cVarPerMonth[9]['roasted']), 
            parseInt(cVarPerMonth[10]['roasted']), parseInt(cVarPerMonth[11]['roasted'])],
	    	[parseInt(cVarPerMonth[0]['dried']), parseInt(cVarPerMonth[1]['dried']), 
            parseInt(cVarPerMonth[2]['dried']), parseInt(cVarPerMonth[3]['dried']), 
            parseInt(cVarPerMonth[4]['dried']), parseInt(cVarPerMonth[5]['dried']), 
            parseInt(cVarPerMonth[6]['dried']), parseInt(cVarPerMonth[7]['dried']), 
            parseInt(cVarPerMonth[8]['dried']), parseInt(cVarPerMonth[9]['dried']), 
            parseInt(cVarPerMonth[10]['dried']), parseInt(cVarPerMonth[11]['dried'])],
	    	[parseInt(cVarPerMonth[0]['fresh']), parseInt(cVarPerMonth[1]['fresh']), 
            parseInt(cVarPerMonth[2]['fresh']), parseInt(cVarPerMonth[3]['fresh']), 
            parseInt(cVarPerMonth[4]['fresh']), parseInt(cVarPerMonth[5]['fresh']), 
            parseInt(cVarPerMonth[6]['fresh']), parseInt(cVarPerMonth[7]['fresh']), 
            parseInt(cVarPerMonth[8]['fresh']), parseInt(cVarPerMonth[9]['fresh']), 
            parseInt(cVarPerMonth[10]['fresh']), parseInt(cVarPerMonth[11]['fresh'])]
	  	]});

      // Total No. Coffee Types and Varieties Advertised In the Current Year
      // RR = Roasted Robusta , DA = Dried Arabica, DL = Dried Liberica ...,
			var productTrend = {
			  labels: ['RR', 'DR', 'FR', 'RA', 'DA', 'FA', 'RL', 'DL', 'FL'],
			  series: [
			    [parseInt(cTrend[0]['rrcount']), parseInt(cTrend[0]['drcount']), parseInt(cTrend[0]['frcount']), 
                parseInt(cTrend[0]['racount']), parseInt(cTrend[0]['dacount']), parseInt(cTrend[0]['facount']), 
                parseInt(cTrend[0]['rlcount']), parseInt(cTrend[0]['dlcount']), parseInt(cTrend[0]['flcount'])]
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
