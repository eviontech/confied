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
										<a href="admin-all-listing.html">My listing</a>
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
							<a href="#">All Listings</a>
						</li>
						<li class="page-back">
							<a href="#">
								<i class="fa fa-plus" aria-hidden="true"></i> Post A Project</a>
						</li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4>Dashboard Title</h4>
						<div class="col-md-12 ">
							<div class="">
								<div class="lazy row">
								<?php 
									for ($x = 0; $x <= 5; $x++) {?>
									
									<div class="home-list-pop list-spac">
										
										<div class="col-md-2">
											<img src="images/services/s10.jpg" alt="" /> </div>
										
										<div class="col-md-10 home-list-pop-desc inn-list-pop-desc">
											<a href="listing-details.html">
												<h3>Property Luxury Homes</h3>
											</a>
											<h5>Express Avenue Mall, Los Angeles</h5>
											<p>
												<b>Address:</b> 28800 Orchard Lake Road, Suite 180 Farmington Hills, U.S.A.</p>
											<p>
												<b>Approx Budget: </b>28800&nbsp;
												<b>Approx Budget: </b>23/03/2019 </p>
										</div>
									</div>
									
									<?php }?>
								</div>
								<div class="row">
									<ul class="pagination list-pagenat">
										<li class="disabled">
											<a href="#!!">
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
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
     
	<script>
	function loadMore()
{
   console.log("More loaded");
    $("body").append("<div>");
   $(window).bind('scroll', bindScroll);
 }

 function bindScroll(){
   if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
       $(window).unbind('scroll');
       loadMore();
   }
}

$(window).scroll(bindScroll);
	</script>
</body>


<!-- Mirrored from www.rn53themes.net/themes/demo/directory/admin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 11:08:24 GMT -->

</html>