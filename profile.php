<?php include( "header.php"); ?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
        User Profile
      </h1>
		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">User profile</li>
		</ol>
	</section>
	<!-- Main content -->
	<section class="content">
		<div class="row">
			<div class="col-md-3">
				<!-- Profile Image -->
				<div class="box box-primary">
					<div class="box-body box-profile">
						<img class="profile-user-img img-responsive img-circle" src="dist\img\user.png" alt="User profile picture">
						<h3 class="profile-username text-center">Admin</h3>
						<p class="text-muted text-center">Admin</p>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item"> <b>Email</b>  <a class="pull-right">admin@gmail.com</a>
							</li>
							<li class="list-group-item"> <b>Moible	</b>  <a class="pull-right">8945637825</a>
							</li>
						</ul>
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			<!-- /.col -->
			<div class="col-md-9">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title"> Information</h3>
						<a href="edit-profile.php" class=" pull-right btn btn-sm" style="background-color:#FC4A1A;color:#fff;"> Edit</a>
					</div>
					<!-- /.box-header -->
					<div class="box-body"> <strong><i class="fa fa-user margin-r-5"></i> Name</strong>
						<p class="h4">Chinna Gosala Bayapureddy</p>
						<hr> <strong><i class="fa fa-envelope margin-r-5"></i> Email</strong>
						<p class="h4">bayapureddy@gmail.com</p>
						<hr> <strong><i class="fa fa-mobile margin-r-5"></i> Mobile</strong>
						<p class="h4">8500226782</p>
						<hr> <strong><i class="fa fa-graduation-cap margin-r-5"></i> Qalification</strong>
						<p class="h4">B-Tech computer</p>
						<hr> <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
						<p class="text-muted">Malibu, California</p>
						
					</div>
					<!-- /.box-body -->
				</div>
			</div>
			<!-- /.row -->
	</section>
	<!-- /.content -->
	</div>
	<?php include( "footer.php"); ?>