<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROMPT INDUSTRIES</title>
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">
	<link href="dist/css/bootstrapValidator.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="dist/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="dist/css/daterangepicker.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="dist/css/datepicker3.css">
	<link rel="stylesheet" href="dist/css/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="dist/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="dist/css/select2.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/fullcalendar.min.css">
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="dist/css/style.css">
	<!-- iCheck -->
	<link rel="stylesheet" href="dist/css/blue.css">
	<!-- Morris chart -->
	<link rel="stylesheet" href="dist/css/morris.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="dist/css/jquery-jvectormap-1.2.2.css">
	
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="dist/css/bootstrap3-wysihtml5.min.css">
	<!-- jQuery 2.2.3 -->
	<script src="dist/js/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="dist/js/bootstrapValidator.min.js"></script>
</head>

<body class="hold-transition skin-blue fixed sidebar-mini">
	<!-- Site wrapper -->
	<div class="wrapper">
		<header class="main-header">
			<!-- Logo -->
			<a href="dashboard.php" class="logo">
				<!-- mini logo for sidebar mini 50x50 pixels --> <span class="logo-mini"><b>PI</b></span>
				<!-- logo for regular state and mobile devices --> <span class="logo-lg"><img style="height:50px;width:100%;" class="img-responsive" src="dist/img/logo.png"></span>
			</a>
			<!-- Header Navbar: style can be found in header.less -->
			<nav class="navbar navbar-static-top">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button"> <span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Messages: style can be found in dropdown.less-->
						<li class="dropdown messages-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
								<span class="label label-success">4</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 4 messages</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<!-- start message -->
											<a href="#">
												<div class="pull-left">
													<img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
												</div>
												<h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
												<p>Why not buy a new awesome theme?</p>
											</a>
										</li>
										<!-- end message -->
									</ul>
								</li>
								<li class="footer"><a href="#">See All Messages</a>
								</li>
							</ul>
						</li>
						<!-- Notifications: style can be found in dropdown.less -->
						<li class="dropdown notifications-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
								<span class="label label-warning">10</span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">You have 10 notifications</li>
								<li>
									<!-- inner menu: contains the actual data -->
									<ul class="menu">
										<li>
											<a href="#"> <i class="fa fa-users text-aqua"></i> 5 new members joined today</a>
										</li>
									</ul>
								</li>
								<li class="footer"><a href="#">View all</a>
								</li>
							</ul>
						</li>
						<!-- User Account: style can be found in dropdown.less -->
						<li class="dropdown user user-menu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="dist\img\user.png" class="user-image" alt="User Image"> <span class="hidden-xs">Admin</span>
							</a>
							<ul class="dropdown-menu">
								<!-- User image -->
								<li class="user-header">
									<img src="dist\img\user.png" class="img-circle" alt="User Image">
									<p>Admin <small>Admin</small>
									</p>
								</li>
								<!-- Menu Body -->
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left"> <a href="profile.php" class="btn btn-default btn-flat">Profile</a>
									</div>
									<div class="pull-right"> <a href="#" class="btn btn-default btn-flat">Sign out</a>
									</div>
								</li>
							</ul>
						</li>
						<!-- Control Sidebar Toggle Button -->
					</ul>
				</div>
			</nav>
		</header>
		<!-- =============================================== -->
		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel bg-profile">
					<div class="pull-left image">
						<img src="dist\img\user.png" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p> Admin</p> <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
	
				<!-- sidebar menu: : style can be found in sidebar.less -->
				<ul class="sidebar-menu">
					<li class="header">MAIN NAVIGATION</li>
					<li class="treeview">
						<a href="dashboard.php"> <i class="fa fa-dashboard"></i>  <span>Dashboard</span>
							<span class="pull-right-container">
              
            </span>
						</a>
					</li>
					<li class="treeview">
						<a href="#"> <i class="fa fa-info-circle"></i>  <span>Masters</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
						
							<li><a href="add-gsm.php">Add Gsm</a></li>
							<li><a href="add-size.php">Add Size</a></li>
							</ul>
	
					</li>
					<li class="treeview">
						<a href="#"> <i class="fa fa-info-circle"></i>  <span>Roll Details</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
						
							<li><a href="add-reel.php">Add Weight</a></li>
							<li><a href="reel-list.php">Roll List</a></li>
							</ul>
	
					</li>
					<li class="treeview">
						<a href="scratchcard.php"> <i class="fa fa-info-circle"></i>  <span>Packing Slip</span>
							<span class="pull-right-container">
							  <i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu" style="display: none;">
						
							<li><a href="packing-slip.php">Add Packing Slip</a></li>
							<li><a href="history.php">History</a></li>
							</ul>
	
	
					</li>
					<li class="treeview">
						<a href="#"> <i class="fa fa-sign-out"></i>  <span>Logout</span>
							
						</a>
						
					</li>
					
					
				
			</section>
			<!-- /.sidebar -->
		</aside>
		<!--view modals-->
		<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header bg-primary">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
						</button>
						<h3 class="modal-title" id="lineModalLabel">Profile View</h3>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3 col-lg-3 " align="center">
								<img alt="User Pic" src="https://image.flaticon.com/icons/svg/201/201811.svg" class="img-circle img-responsive">
							</div>
							<div class=" col-md-9 col-lg-9 ">
								<table class="table table-user-information">
									<tbody>
										<tr>
											<td>Department:</td>
											<td>Programming</td>
										</tr>
										<tr>
											<td>Hire date:</td>
											<td>06/23/2013</td>
										</tr>
										<tr>
											<td>Date of Birth</td>
											<td>01/24/1988</td>
										</tr>
										<tr>
											<tr>
												<td>Gender</td>
												<td>Female</td>
											</tr>
											<tr>
												<td>Home Address</td>
												<td>Kathmandu,Nepal</td>
											</tr>
											<tr>
												<td>Email</td>
												<td><a href="mailto:info@support.com">info@support.com</a>
												</td>
											</tr>
											<td>Phone Number</td>
											<td>123-4567-890(Landline)
												<br>
												<br>555-4567-890(Mobile)</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<div class="btn-group btn-group-justified" role="group" aria-label="group button">
							<div class="btn-group" role="group">
								<button type="button" class="btn btn-default" data-dismiss="modal" role="button">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>