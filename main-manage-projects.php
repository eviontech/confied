<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.rn53themes.net/themes/demo/directory/admin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 11:08:23 GMT -->

<head>
	<title>Main Dashboard</title>
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
	<!--== MAIN CONTRAINER ==-->
	<div class="container-fluid sb1">
		<div class="row">
			<!--== LOGO ==-->
			<div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
				<a href="#" class="btn-close-menu">
					<i class="fa fa-times" aria-hidden="true"></i>
				</a>
				<a href="#" class="atab-menu">
					<i class="fa fa-bars tab-menu" aria-hidden="true"></i>
				</a>
				<a href="main.html" class="logo">
					<img src="images/logo1.png" alt="" /> </a>
			</div>
			<!--== SEARCH ==-->
			<div class="col-md-8 col-sm-6 mob-hide">
				<form class="app-search">
					<input type="text" placeholder="Search..." class="form-control">
					<a href="#">
						<i class="fa fa-search"></i>
					</a>
				</form>
			</div>
			<!--== MY ACCCOUNT ==-->
			<div class="col-md-2 col-sm-3 col-xs-6">
				<!-- Dropdown Trigger -->
				<a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'>
					<img src="images/users/6.png" alt="" />Switch Acc.
					<i class="fa fa-angle-down" aria-hidden="true"></i>
				</a>
				<!-- Dropdown Structure -->
				<ul id='top-menu' class='dropdown-content top-menu-sty'>
					<li>
						<a href="" class="waves-effect">
							<i class="fa fa-cogs"></i>Main Account</a>
					</li>
					<li>
						<a href="" class="waves-effect">
							<i class="fa fa-cogs"></i>Professional Account</a>
					</li>
					<li>
						<a href="" class="waves-effect">
							<i class="fa fa-cogs"></i>Contractor Account</a>
					</li>
					<li>
						<a href="" class="waves-effect">
							<i class="fa fa-cogs"></i>Supllier Account</a>
					</li>
					<li class="divider"></li>
					<li>
						<a href="#" class="ho-dr-con-last waves-effect">
							<i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!--== BODY CONTNAINER ==-->
	<div class="container-fluid sb2">
		<div class="row">
			<div class="sb2-1">
				<!--== USER INFO ==-->
				<div class="sb2-12">
					<ul>
						<li>
							<img src="images/users/2.png" alt=""> </li>
						<li>
							<h5>Full Name
								<span> City, State</span>
							</h5>
						</li>
						<li></li>
					</ul>
				</div>
				<!--== LEFT MENU ==-->
				<div class="sb2-13">
					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<a href="main-dashboard.html" class="menu-active">
								<i class="fa fa-tachometer" aria-hidden="true"></i>My Dashboard</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-user" aria-hidden="true"></i>My Profile</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-list-ul" aria-hidden="true"></i>Activities</a>
						</li>
						<li>
							<a href="main-manage-projects.html">
								<i class="fa fa-list-ul" aria-hidden="true"></i>Manage Projects</a>
						</li>
						<li>
							<a href="javascript:void(0)" class="collapsible-header">
								<i class="fa fa-list-ul" aria-hidden="true"></i>Project Listing</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li>
										<a href="main-all-listing.html">My listing</a>
									</li>
									<li>
										<a href="main-post-project.html">Post a Project</a>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-cogs" aria-hidden="true"></i> Setting</a>
						</li>
						<li>
							<a href="#" target="_blank">
								<i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
						</li>
					</ul>
				</div>
			</div>
			<!--== BODY INNER CONTAINER ==-->
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li>
							<a href="main.html">
								<i class="fa fa-home" aria-hidden="true"></i> Home</a>
						</li>
						<li class="active-bre">
							<a href="#">Manage Projects</a>
						</li>
						<li class="page-back">
							<a href="#">
								<i class="fa fa-plus" aria-hidden="true"></i> Add Project</a>
						</li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<section class="dir-pa-sp-top">
							<div class="container dir-hom-pre-tit col-md-12">
								<div class="com-title">
									<p>Open Projects</p>
								</div>
								<div class="row span-none">
									<div class="col-md-4">
										<a href="main-manage-project-details.html">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/1.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$720</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Holiday Inn Express</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/3.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$380</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Staybridger Suites</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/2.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>InterContinental</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/4.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$720</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Starboard Red Wines</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/5.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$380</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Pet Shops</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="com-title">
									<p>In-Process Projects</p>
								</div>
								<div class="row span-none">
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/6.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Philly Honeymoon Packages</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/7.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Shake Fashions</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/8.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Sparrow Chicken</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/9.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Big Jack T-stall</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="com-title">
									<p>Completed Projects</p>
								</div>
								<div class="row span-none">
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/10.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Continental Shopiing Street</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/11.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Flow Flower Shop</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/12.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Maths Tuitions Centre</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/13.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Indian Grill Chicken</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/14.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Suprime Car ShowRoom</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="col-md-4">
										<a href="#!">
											<div class="list-mig-like-com com-mar-bot-30">
												<div class="list-mig-lc-img">
													<img src="images/listing/15.jpg" alt="">
													<span class="home-list-pop-rat list-mi-pr">$420</span>
												</div>
												<div class="list-mig-lc-con">
													<h5>Joney Supermarket</h5>
													<p>Illinois City,</p>
												</div>
											</div>
										</a>
									</div>
									<div class="row col-md-12">
										<ul class="pagination list-pagenat">
											<li class="disabled">
												<a href="#!">
													<i class="material-icons">chevron_left</i>
												</a>
											</li>
											<li class="active">
												<a href="#!">1</a>
											</li>
											<li class="waves-effect">
												<a href="#!">2</a>
											</li>
											<li class="waves-effect">
												<a href="#!">3</a>
											</li>
											<li class="waves-effect">
												<a href="#!">4</a>
											</li>
											<li class="waves-effect">
												<a href="#!">5</a>
											</li>
											<li class="waves-effect">
												<a href="#!">6</a>
											</li>
											<li class="waves-effect">
												<a href="#!">7</a>
											</li>
											<li class="waves-effect">
												<a href="#!">8</a>
											</li>
											<li class="waves-effect">
												<a href="#!">
													<i class="material-icons">chevron_right</i>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--== BOTTOM FLOAT ICON ==-->
	<section>
		<div class="fixed-action-btn vertical">
			<a class="btn-floating btn-large red pulse">
				<i class="large material-icons">mode_edit</i>
			</a>
			<ul>
				<li>
					<a class="btn-floating red">
						<i class="material-icons">insert_chart</i>
					</a>
				</li>
				<li>
					<a class="btn-floating yellow darken-1">
						<i class="material-icons">format_quote</i>
					</a>
				</li>
				<li>
					<a class="btn-floating green">
						<i class="material-icons">publish</i>
					</a>
				</li>
				<li>
					<a class="btn-floating blue">
						<i class="material-icons">attach_file</i>
					</a>
				</li>
			</ul>
		</div>
	</section>
	<!--SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
</body>


<!-- Mirrored from www.rn53themes.net/themes/demo/directory/admin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 11:08:24 GMT -->

</html>