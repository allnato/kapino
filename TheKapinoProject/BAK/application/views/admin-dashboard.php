<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" type="image/x-icon" href="../kapino.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Kapino &#8226; Admin</title>

	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url(); ?>bootstrap/bootstrap3/css/bootstrap.min.css" rel="stylesheet"/>

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url(); ?>assets/assets-admin/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url(); ?>assets/assets-admin/css/light-bootstrap-dashboard.css" rel="stylesheet"/>

    <!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>assets/assets-admin/css/pe-icon-7-stroke.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet"/>
		<link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="green" data-image="<?php echo base_url(); ?>assets/assets-admin/img/sidebar-3.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo site_url("dashboard"); ?>" class="simple-text">
                    Kapino
                </a>
            </div>

						<ul class="nav">
                <li class="active">
                    <a href="<?php echo site_url("dashboard"); ?>" class="animsition-link">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("sellers"); ?>" class="animsition-link">
                        <i class="pe-7s-news-paper"></i>
                        <p>Pending Sellers</p>
                    </a>
                </li>
                <li >
                    <a href="<?php echo site_url("users"); ?>" class="animsition-link">
                        <i class="pe-7s-id"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo site_url("products"); ?>" class="animsition-link">
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
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                           <a href="">
                               <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <!-- Notification -->
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-globe"></i>
                                <b class="caret"></b>
                                <span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                            </ul>
                        </li>
                        <!-- Search -->
                        <li>
                            <a href="#">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

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
                                <h4 class="title">Ad Statistics</h4>
                                <p class="category">Last Month</p>
                            </div>
                            <div class="content">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth">
                                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-pie" style="width: 100%; height: 100%;">
                                        <g class="ct-series ct-series-c"><path d="M146.5,5A117.5,117.5,0,0,0,102.864,13.403L146.5,122.5Z" class="ct-slice-pie" value="6"></path></g><g class="ct-series ct-series-b"><path d="M103.245,13.251A117.5,117.5,0,0,0,66.365,208.434L146.5,122.5Z" class="ct-slice-pie" value="32"></path></g><g class="ct-series ct-series-a"><path d="M66.066,208.154A117.5,117.5,0,1,0,146.5,5L146.5,122.5Z" class="ct-slice-pie" value="62"></path></g><g><text dx="201.12436854593477" dy="144.12731747022482" text-anchor="middle" class="ct-label">62%</text><text dx="88.79062401968952" dy="111.49134776808874" text-anchor="middle" class="ct-label">32%</text><text dx="135.49134776808862" dy="64.79062401968955" text-anchor="middle" class="ct-label">6%</text></g>
                                    </svg>
                                </div>

                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Arabica
                                        <i class="fa fa-circle text-danger"></i> Robusta
                                        <i class="fa fa-circle text-warning"></i> Liberica
                                    </div>
                                    <hr>
                                    <div class="stats">
                                        <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Transactions</h4>
                                <p class="category">24 Hours Performance</p>
                            </div>
                            <div class="content">
                                <div id="chartHours" class="ct-chart">
                                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="245px" class="ct-chart-line" style="width: 100%; height: 245px;"><g class="ct-grids"><line y1="210" y2="210" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="185.625" y2="185.625" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="161.25" y2="161.25" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="136.875" y2="136.875" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="112.5" y2="112.5" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="88.125" y2="88.125" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="63.75" y2="63.75" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="39.375" y2="39.375" x1="50" x2="631" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="631" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M50,210L50,140.044C74.208,140.044,98.417,116.156,122.625,116.156C146.833,116.156,171.042,90.563,195.25,90.563C219.458,90.563,243.667,90.075,267.875,90.075C292.083,90.075,316.292,74.963,340.5,74.963C364.708,74.963,388.917,67.163,413.125,67.163C437.333,67.163,461.542,39.863,485.75,39.863C509.958,39.863,534.167,40.594,558.375,40.594C582.583,40.594,606.792,26.7,631,26.7C655.208,26.7,679.417,17.925,703.625,17.925C727.833,17.925,752.042,3.787,776.25,3.787C800.458,3.787,824.667,-20.1,848.875,-20.1L848.875,210Z" class="ct-area" values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path></g><g class="ct-series ct-series-b"><path d="M50,210L50,193.669C74.208,193.669,98.417,172.95,122.625,172.95C146.833,172.95,171.042,175.144,195.25,175.144C219.458,175.144,243.667,151.5,267.875,151.5C292.083,151.5,316.292,140.044,340.5,140.044C364.708,140.044,388.917,128.344,413.125,128.344C437.333,128.344,461.542,103.969,485.75,103.969C509.958,103.969,534.167,103.481,558.375,103.481C582.583,103.481,606.792,78.619,631,78.619C655.208,78.619,679.417,77.887,703.625,77.887C727.833,77.887,752.042,77.4,776.25,77.4C800.458,77.4,824.667,52.294,848.875,52.294L848.875,210Z" class="ct-area" values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path></g><g class="ct-series ct-series-c"><path d="M50,210L50,204.394C74.208,204.394,98.417,182.456,122.625,182.456C146.833,182.456,171.042,193.669,195.25,193.669C219.458,193.669,243.667,183.675,267.875,183.675C292.083,183.675,316.292,163.688,340.5,163.688C364.708,163.688,388.917,151.744,413.125,151.744C437.333,151.744,461.542,135.169,485.75,135.169C509.958,135.169,534.167,134.925,558.375,134.925C582.583,134.925,606.792,102.994,631,102.994C655.208,102.994,679.417,110.063,703.625,110.063C727.833,110.063,752.042,110.063,776.25,110.063C800.458,110.063,824.667,85.931,848.875,85.931L848.875,210Z" class="ct-area" values="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">9:00AM</span></foreignObject><foreignObject style="overflow: visible;" x="122.625" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">12:00AM</span></foreignObject><foreignObject style="overflow: visible;" x="195.25" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="267.875" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="340.5" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">9:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="413.125" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">12:00PM</span></foreignObject><foreignObject style="overflow: visible;" x="485.75" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">3:00AM</span></foreignObject><foreignObject style="overflow: visible;" x="558.375" y="215" width="72.625" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 73px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">6:00AM</span></foreignObject><foreignObject style="overflow: visible;" y="185.625" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="161.25" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">100</span></foreignObject><foreignObject style="overflow: visible;" y="136.875" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject><foreignObject style="overflow: visible;" y="112.5" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">300</span></foreignObject><foreignObject style="overflow: visible;" y="88.125" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject><foreignObject style="overflow: visible;" y="63.75" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">500</span></foreignObject><foreignObject style="overflow: visible;" y="39.375" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="24.375" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">700</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject></g></svg>
                                </div>
                                <div class="footer">
                                    <div class="legend">
                                        <i class="fa fa-circle text-info"></i> Open
                                        <i class="fa fa-circle text-danger"></i> Click
                                        <i class="fa fa-circle text-warning"></i> Click Second Time
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

	<script>
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
