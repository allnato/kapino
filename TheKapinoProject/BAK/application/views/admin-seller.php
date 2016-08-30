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

    <link href="<?php echo base_url(); ?>assets/fresh_bootstrap_table/assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://use.fontawesome.com/025359d28b.js"></script>
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
                <li class="active">
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
                <li>
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
														<a href="">
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
										<div class="col-md-12">
												<div class="fresh-table toolbar-color-orange">

														<div class="toolbar">
																<h4><i class="fa fa-user-plus"></i> Pending Sellers</h4>
														</div>

														<table id="fresh-table" class="table">
																<tbody>
																		<tr>
																				<td>1</td>
																				<td>Allendale</td>
																				<td>Nato</td>
																				<td>allendalenato@gmail.com</td>
																				<td>Plantation</td>
																				<td>2.15 Hectares</td>
																				<td>Kapino</td>
																				<td>Imus, Cavite</td>
																		</tr>
																		<tr>
																				<td>12</td>
																				<td>Hector</td>
																				<td>Reyes</td>
																				<td>hectorreyes@gmail.com</td>
																				<td>Small Holder</td>
																				<td>0.75 Hectares</td>
																				<td>Kopika</td>
																				<td>China, Manila</td>
																		</tr>
																</tbody>
														</table>
												</div>
										</div>
								</div>
								<div class="row">

									<div class="col-md-3">
										<div class="card">
											<div class="header">
												<h4>No. of Active Sellers</h4>
												<p class="category">
													August 2016
												</p>
											</div>
											<div class="content">
												<h3>42 Active Sellers</h3>
												<div class="footer">
													<hr>
													<div class="stats">
															<i class="fa fa-history"></i> Updated 3 minutes ago
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-9">
										<div class="card">
											<div class="header">
												<h4 class="title montserrat">No. of Sellers per Month</h4>
												<p class="category">August 2016</p>
											</div>
											<div class="content">
												<div id="sellerLine" class="ct-chart">

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
														<a href="#">
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


    <script type="text/javascript" src="<?php echo base_url(); ?>assets/fresh_bootstrap_table/assets/js/bootstrap-table.js"></script>
		<script src="<?php echo base_url(); ?>assets/animsition/dist/js/animsition.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/chartist-js/chartist.min.js"></script>


		<script type="text/javascript">
        var $table = $('#fresh-table'),
            $alertBtn = $('#alertBtn'),
            full_screen = false;

        $(document).ready(function() {
            $table.bootstrapTable({
                toolbar: ".toolbar",

                showRefresh: true,
                search: true,
                showToggle: true,
                showColumns: true,
                pagination: true,
                striped: true,
                sortable: true,
                pageSize: 8,
                pageList: [8, 10, 25, 50, 100],

                formatShowingRows: function(pageFrom, pageTo, totalRows) {
                    //do nothing here, we don't want to show the text "showing x of y from..."
                },
                formatRecordsPerPage: function(pageNumber) {
                    return pageNumber + " rows visible";
                },
                icons: {
                    refresh: 'fa fa-refresh',
                    toggle: 'fa fa-th-list',
                    columns: 'fa fa-columns',
                    detailOpen: 'fa fa-plus-circle',
                    detailClose: 'fa fa-minus-circle'
                },
                columns: [{
                    field: 'userid',
                    title: 'User ID',
                    sortable: 'true',
                    align: 'left',
                    halign: 'left'
                }, {
                    field: 'firstname',
                    title: 'First Name',
                    sortable: 'true',
                    align: 'left',
                    halign: 'left'
                }, {
                    field: 'lastname',
                    title: 'Last Name',
                    sortable: 'true',
                    align: 'left',
                    halign: 'left'
                }, {
                    field: 'email',
                    title: 'Email',
                    sortable: 'true',
                    align: 'center',
                    halign: 'center'
                }, {
                    field: 'farmtype',
                    title: 'Farm Type',
                    sortable: 'true',
                    align: 'center',
                    halign: 'center'
                }, {
                    field: 'farmsize',
                    title: 'Farm Size',
                    sortable: 'true',
                    align: 'center',
                    halign: 'center'
                }, {
                    field: 'farmname',
                    title: 'Farm Name',
                    sortable: 'true',
                    align: 'center',
                    halign: 'center'
                }, {
                    field: 'farmlocation',
                    title: 'Farm Location',
                    sortable: 'true',
                    align: 'center',
                    halign: 'center'
                }, {
                    field: 'actions',
                    title: 'Actions',
                    formatter: 'operateFormatter',
                    events: 'operateEvents',
                    align: 'center',
                    halign: 'center'
                }]
            });

            $('.animsition').animsition({
                linkElement: '.animsition-link',
                loading: true,
                loadingParentElement: 'body', //animsition wrapper element
                loadingClass: 'animsition-loading',
                loadingInner: '', // e.g '<img src="loading.svg" />'
                timeout: false,
                timeoutCountdown: 5000,
                onLoadEvent: true,
                browser: ['animation-duration', '-webkit-animation-duration']
            });

        });

        new Chartist.Line('#sellerLine', {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            series: [
                [3, 4, 6, 1, 2, 0, 7, 4]
            ]
        });


        function operateFormatter(value, row, index) {
            return [
                '<a rel="tooltip" title="Approve" class="table-action approve" href="javascript:void(0)">',
                '<i class="fa fa-check"></i>',
                '</a>',
                '<a rel="tooltip" title="Reject" class="table-action reject" href="javascript:void(0)">',
                '<i class="fa fa-remove"></i>',
                '</a>'
            ].join('');
        };

        window.operateEvents = {
            'click .approve': function(e, value, row, index) {
                alert('You click like icon, row: ' + JSON.stringify(row));
                console.log(value, row, index);
            },
            'click .reject': function(e, value, row, index) {
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: [row.id]
                });

            }
        };
    </script>


</html>
