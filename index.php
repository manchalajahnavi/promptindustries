<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROMPT INDUTRIES</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="dist/css/bootstrap.min.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="dist/css/blue.css">
</head>
<body class="login-page login-bg">
	<div class="login-box  ">
		<div class="login-logo"> <a href="#"><img class="img-responsive" src="dist/img/logo1.png"></a>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">
			<p class="login-box-msg">Login</p>
			<form action="#" method="post">
				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="Email"> <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password"> <span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8"></div>
					<!-- /.col -->
					<div class="col-xs-4" > <a href="dashboard.php" type="submit" style="background-color:#FC4A1A;color:#fff;" class="btn  btn-block btn-flat" >Sign In</a>
					</div>
					<!-- /.col -->
				</div>
			</form>
			<!-- /.social-auth-links --> <a href="forgot-password.php">I forgot my password</a>
			<br>
		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->
	<!-- jQuery 2.2.3 -->
	<script src="dist/js/jquery-2.2.3.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="dist/js/bootstrap.min.js"></script>
	<!-- iCheck -->
	<script src="dist/js/icheck.min.js"></script>
	<script>
		$(function () {
		    $('input').iCheck({
		      checkboxClass: 'icheckbox_square-blue',
		      radioClass: 'iradio_square-blue',
		      increaseArea: '20%' // optional
		    });
		  });
	</script>
</body>
</html>