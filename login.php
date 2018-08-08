<?php session_destroy();?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.rn53themes.net/themes/demo/directory/admin-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 11:09:09 GMT -->
<head>
	<title>World Best Local Directory Website template</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- FAV ICON(BROWSER TAB ICON) -->
	<link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
	<!-- GOOGLE FONT -->
	<link href="https://fonts.googleapis.com/css?family=Poppins%7CQuicksand:500,700" rel="stylesheet">
	<!-- FONTAWESOME ICONS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- ALL CSS FILES -->
	<link href="css/materialize.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
	<!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
	<section class="tz-login">
		<div class="tz-regi-form">
			<h4>Sign In</h4>
			<p>It's free and always will be.</p>
			<form class="col s12" id="login_form" method="POST" >
			<div id="login_message" class="row"></div>
				<div class="row">
					<div class="input-field col s12">
						<p for="uname"></p>
						<input type="email" name="uname" id="uname" class="validate" required="required">
						<label>Email Address</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="password" name="password" id="password" class="validate" required="required">
						<label>Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12"> <i class="waves-effect waves-light btn-large full-btn waves-input-wrapper" style="">
					<input type="submit" class="waves-button-input" value="Login"/></i> </div>
				</div>
			</form>
			<p><a href="admin-pass.html">forgot password</a> |<a data-dismiss="modal" href="#" data-toggle="modal" data-target="#verify-account">Verify Account</a>| Are you a new user ? <a href="admin-register.html">Register</a> </p>
		</div>
	</section>
	<!--QUOTS POPUP-->
	<section>
		<!-- GET QUOTES POPUP -->
		<div class="modal fade dir-pop-com" id="verify-account" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header dir-pop-head">
						<button type="button" class="close" data-dismiss="modal">×</button>
						<h4 class="modal-title">Account Verification</h4>
						<!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
					</div>
					<div class="modal-body dir-pop-body">
						<form method="post" class="form-horizontal">
							<!--LISTING INFORMATION-->
							<div class="form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Registered Email</label>
								<div class="col-md-8">
									<input type="email" class="verified form-control" id="vemail" name="email" placeholder="Valid Email address...."> </div>
							</div>
							<div class="first form-group has-feedback ak-field">
								<div class="col-md-6 col-md-offset-4">
									<a onclick='verifyEmail()' class="email-verify" >Verify email</a> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="hide second form-group has-feedback ak-field">
								<label class="col-md-4 control-label">Verification Code</label>
								<div class="col-md-8">
									<input type="text" class="form-control" id="vcode" name="code" placeholder="6 Digit verification code"> </div>
							</div>
							<!--LISTING INFORMATION-->
							<div class="hide second form-group has-feedback ak-field">
								<div class="col-md-6 col-md-offset-4">
									<input onclick='verify()' type="button" value="SUBMIT" class="pop-btn"> </div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- GET QUOTES Popup END -->
	</section>
	<!--SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script>
		function verify() {              
			$email = document.getElementById("vemail").value;
			$code = document.getElementById("vcode").value;
			$.ajax({
				type: "POST",
				dataType: "text",
				data: {email : $email,code : $code},
				url: 'verify-email.php',
				success: function(response) {
					alert(response);
				},
				error: function (jqXHR, exception) {
					var msg = '';
					if (jqXHR.status === 0) {
						msg = 'Not connect.\n Verify Network.';
					} else if (jqXHR.status == 404) {
						msg = 'Requested page not found. [404]';
					} else if (jqXHR.status == 500) {
						msg = 'Internal Server Error [500].';
					} else if (exception === 'parsererror') {
						msg = 'Requested JSON parse failed.';
					} else if (exception === 'timeout') {
						msg = 'Time out error.';
					} else if (exception === 'abort') {
						msg = 'Ajax request aborted.';
					} else {
						msg = 'Uncaught Error.\n' + jqXHR.responseText;
					}
					alert(msg);
				},
			});
		}
		/*$("#login_form").validate({
			errorPlacement: function(error, element) {
			// Append error within linked label
			$( element )
				.closest( "form" )
					.find( "p[for='uname']" )
						.append( error );
			},
			rules: {
				uname: {
					required: true,
					email: true
				},
				password: {
					required: true,
					minlength: 5
				}
			},
			messages: {
				firstname: "Please enter your firstname",
				lastname: "Please enter your lastname",
				uname: {
					required: "Please enter a Email address",
					email: "Please enter a valid email address"
				},
				password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				}
			}
		});*/

		$("#login_form").submit(function(e) {
			e.preventDefault();
			$uname = document.getElementById("uname").value;
			$password = document.getElementById("password").value;
			$.ajax({
				type: "POST",
				dataType: "text",
				data: {uname : $uname,password : $password},
				url: 'check_login.php',
				success: function(response) {
					if(response==1)
					{
						window.location = 'dashboard_guest.php';
					}else if(response == 2){
						var div = document.getElementById('login_message');
						div.innerHTML= '<div class="alert alert-warning fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><h5><label>Account verification pending...</label></h5></div>';
						
					}else if(response == 3){
						var div = document.getElementById('login_message');
						div.innerHTML= '<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><h5><label>Invalid Login credentials.Please enter a valid password.</label></h5></div>';
						
					}else if(response == 0) {
						var div = document.getElementById('login_message');
						div.innerHTML= '<div class="alert alert-danger fade in alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><h5><label>No Account Found ...</label></h5></div>';
					}else {
						alert(response);
					}
				},
				error: function (jqXHR, exception) {
					var msg = '';
					if (jqXHR.status === 0) {
						msg = 'Not connect.\n Verify Network.';
					} else if (jqXHR.status == 404) {
						msg = 'Requested page not found. [404]';
					} else if (jqXHR.status == 500) {
						msg = 'Internal Server Error [500].';
					} else if (exception === 'parsererror') {
						msg = 'Requested JSON parse failed.';
					} else if (exception === 'timeout') {
						msg = 'Time out error.';
					} else if (exception === 'abort') {
						msg = 'Ajax request aborted.';
					} else {
						msg = 'Uncaught Error.\n' + jqXHR.responseText;
					}
					alert(msg);
				},
			});
		});

		function verifyEmail() {              
			
			//alert(1);
			$email = document.getElementById("vemail").value;
			$.ajax({
				type: "POST",
				dataType: "json",
				data: {email : $email},
				url: 'check_email.php',
				success: function(response) {
					if(response == 1)
					{
						$('.second').removeClass('hide');
						$('.first').addClass('hide');
						$(".verified").prop('disabled', true);
					}else{
						alert('No pending account request with this email...');
					}
				}
			});
		}


	</script>
</body>


<!-- Mirrored from www.rn53themes.net/themes/demo/directory/admin-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 11:09:09 GMT -->
</html>