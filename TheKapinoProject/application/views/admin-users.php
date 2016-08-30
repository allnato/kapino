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
		<link href="<?php echo base_url(); ?>assets/assets-admin/css/animate.min.css" rel="stylesheet" />

		<!--  Light Bootstrap Table core CSS    -->
		<link href="<?php echo base_url(); ?>assets/assets-admin/css/light-bootstrap-dashboard.css" rel="stylesheet" />

		<link href="<?php echo base_url(); ?>assets/fresh_bootstrap_table/assets/css/fresh-bootstrap-table.css" rel="stylesheet" />

		<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
			<script src="https://use.fontawesome.com/025359d28b.js"></script>
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url(); ?>assets/assets-admin/css/pe-icon-7-stroke.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/animsition/dist/css/animsition.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(); ?>assets/chartist-js/chartist.min.css" rel="stylesheet"  />
		<link href="<?php echo base_url(); ?>assets/css/admin.css" rel="stylesheet" />


		<style>
			.th-inner.sortable.both,
			.th-inner {
				color: white;
			}
		</style>
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
            <li class="active">
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
							<!-- User Table -->
							<div class="row">
								<div class="col-md-12">
									<div class="fresh-table full-color-azure">

										<div class="toolbar">
											<h4><i class="fa fa-users"></i> Kapino Users</h4>
										</div>

										<table id="fresh-table" class="table">

											<tbody>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
							<!-- User Statistics -->
							<div class="row numbers">
								<div class="col-md-3">
									<div class="card blue">
										<div class="header">
											<h4 class="title montserrat black">No. of Registered Users</h4>
											<p class="category"></p>
										</div>
										<div class="content black">
											<h3 id="user-registered"class="montserrat">So Many Registered Users</h3>
											<div class="footer">
												<hr />
												<div class="stats">
														<i class="fa fa-history"></i> Statistics is up-to-date.
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-3">
									<div class="card green">
										<div class="header">
											<h4 class="title montserrat">No. of Active Sellers</h4>
											<p class="category"></p>
										</div>
										<div class="content">
											<h3 id="user-seller" class="montserrat">So Many Active Users</h3>
											<div class="footer">
												<hr />
												<div class="stats">
														<i class="fa fa-history"></i> Statistics is up-to-date.
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-3">
									<div class="card red">
										<div class="header">
											<h4 class="title montserrat">No. of Banned Users</h4>
											<p class="category">
                                            </p>
										</div>
										<div class="content">
											<h3 id="user-banned"class="montserrat">Many Banned Users</h3>
											<div class="footer">
												<hr />
												<div class="stats">
														<i class="fa fa-history"></i> Statistics is up-to-date.
												</div>
											</div>
										</div>

									</div>
								</div>
								<div class="col-md-3">
									<div class="card yellow">
										<div class="header">
											<h4 class="title montserrat">No. of Active Users</h4>
											<p class="category"></p>
										</div>
										<div class="content">
											<h3 id="user-active">class="montserrat">71 Active Users</h3>
											<div class="footer">
												<hr />
												<div class="stats">
														<i class="fa fa-history"></i> Statistics is up-to-date.
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
											<h4 class="title montserrat">Registered Users per Month</h4>
											<p class="category">2016</p>
										</div>
										<div class="content">
											<div id="registeredUserBar" class="ct-chart">

											</div>
										</div>
										<div class="footer">

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
	<script src="<?php echo base_url(); ?>bootstrap/Material%20Kit/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>bootstrap/bootstrap3/js/bootstrap.min.js" type="text/javascript"></script>

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
        var $userList = <?php echo json_encode($userList); ?>;
        console.log("userList");
        var $regUserList = <?php echo json_encode($regUserList); ?>;


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

				var registeredUser = {
					labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
					series: [[$regUserList[0]['regusercount'],$regUserList[1]['regusercount'],$regUserList[2]['regusercount'],$regUserList[3]['regusercount'],$regUserList[4]['regusercount'],$regUserList[5]['regusercount'],$regUserList[6]['regusercount'],$regUserList[7]['regusercount'],$regUserList[8]['regusercount'],$regUserList[9]['regusercount'],$regUserList[10]['regusercount'],$regUserList[11]['regusercount']]]
				};
        
				new Chartist.Bar('#registeredUserBar', registeredUser, responsiveOptions);

		//id,firstname,lastname,mobile,email,birthdate,lastlogin,address,farmID
		$(document).ready(function() {
            var $data = [];
            var $activeSellers = <?php echo json_encode($activeSellers); ?>;
            var $registeredUsers = <?php echo json_encode($registeredUsers); ?>;
            var $bannedUsers = <?php echo json_encode($bannedUsers); ?>;
            var $activeUsers = <?php echo json_encode($activeUsers); ?>;
            
            $('#user-seller').empty();
            $('#user-seller').append($activeSellers + " Active Sellers.");
            $('#user-registered').empty();
            $('#user-registered').append($registeredUsers + " Registered Users.");
            $('#user-banned').empty();
            $('#user-banned').append($bannedUsers + " Banned Users.")
            $('#user-active').empty();
            $('#user-active').append($activeUsers + " Active Users.");
/*
            if($regUserList.length > 0) {
                console.log($RegUserList[0]);
                for(var i = 0; i < $regUserList.length; i++) {

                    $regData.push({
                        firstname: $regUserList[i]['firstname'],
                        lastname: $regUserList[i]['lastname'],
                        birthdate: $regUserList[i]['birthdate'],
                        email: $regUserList[i]['email'],
                        mobile: $regUserList[i]['mobile'],
                        address: $regUserList[i]['address'],
                        lastlogin: $regUserList[i]['lastlogin'],
                        userid: $regUserList[i]['userid'],
                    });
                }
            }
            
            console.log()
            */
            if($userList.length > 0) {
                console.log($userList[0]);
                for(var i = 0; i < $userList.length; i++) {

                    $data.push({


                        firstname: $userList[i]['firstname'],
                        lastname: $userList[i]['lastname'],
                        birthdate: $userList[i]['birthdate'],
                        email: $userList[i]['email'],
                        mobile: $userList[i]['mobile'],
                        address: $userList[i]['address'],
                        lastlogin: $userList[i]['lastlogin'],
                        userid: $userList[i]['userid'],

                    });
                }
            }
			$table.bootstrapTable({
				toolbar: ".toolbar",

				showRefresh: true,
				search: true,
				showToggle: true,
				showColumns: true,
				pagination: true,
				striped: true,
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
					field: 'birthdate',
					title: 'Birth Date',
					sortable: 'true',
					align: 'left',
					halign: 'left'
				}, {
					field: 'email',
					title: 'Email',
					sortable: 'true',
					align: 'left',
					halign: 'left'
				}, {
					field: 'mobile',
					title: 'Mobile Num',
					sortable: 'true',
					align: 'left',
					halign: 'left'
				}, {
					field: 'address',
					title: 'Address',
					sortable: 'true',
					align: 'left',
					halign: 'left'
				}, {
					field: 'lastlogin',
					title: 'Last Login',
					sortable: 'true',
					align: 'left',
					halign: 'left'
				}, {
					field: 'actions',
					title: 'Actions',
					formatter: 'operateFormatter',
					events: 'operateEvents',
					align: 'center',
					halign: 'center'
				}],

                data: $data,
			});

			$(window).resize(function() {
				$table.bootstrapTable('resetView');
			});



			$alertBtn.click(function() {
				alert("You pressed on Alert");
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


		function operateFormatter(value, row, index) {
			return [
				'<a rel="tooltip" title="Edit" class="table-action edit" href="javascript:void(0)" title="Edit">',
				'<i class="fa fa-edit"></i>',
				'</a>',
				'<a rel="tooltip" title="Remove" class="table-action remove" href="javascript:void(0)" title="Remove">',
				'<i class="fa fa-user-times"></i>',
				'</a>'
			].join('');
		};

		window.operateEvents = {
			'click .like': function(e, value, row, index) {
				alert('You click like icon, row: ' + JSON.stringify(row));
				console.log(value, row, index);
			},
			'click .edit': function(e, value, row, index) {
				alert('You click edit icon, row: ' + JSON.stringify(row));
				console.log(value, row, index);
			},
			'click .remove': function(e, value, row, index) {
				$table.bootstrapTable('remove', {
					field: 'id',
					values: [row.id]
				});

			}
		};
	</script>

</html>
