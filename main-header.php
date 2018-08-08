<?php include('session.php');?>
<?php include('main_session.php');?>
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
			<div class="col-md-2 col-sm-3 col-xs-6 sb1-1"> <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a> <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
				<a href="main.html" class="logo"><img src="images/logo1.png" alt="" /> </a>
			</div>
			<!--== SEARCH ==-->
			<div class="col-md-8 col-sm-6 mob-hide">
				<form class="app-search">
					<input type="text" placeholder="Search..." class="form-control"> <a href="#"><i class="fa fa-search"></i></a> </form>
			</div>
			<!--== MY ACCCOUNT ==-->
			<div class="col-md-2 col-sm-3 col-xs-6">
				<!-- Dropdown Trigger -->
				<a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/users/6.png" alt="" />Switch Acc. <i class="fa fa-angle-down" aria-hidden="true"></i> </a>
				<!-- Dropdown Structure -->
				<ul id='top-menu' class='dropdown-content top-menu-sty'>
					<li><a href="" class="waves-effect"><i class="fa fa-cogs"></i>Main Account</a> </li>
					<li><a href="" class="waves-effect"><i class="fa fa-cogs"></i>Professional Account</a> </li>
					<li><a href="" class="waves-effect"><i class="fa fa-cogs"></i>Contractor Account</a> </li>
					<li><a href="" class="waves-effect"><i class="fa fa-cogs"></i>Supllier Account</a> </li>
					<li class="divider"></li>
					<li><a href="logout.php" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a> </li>
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
						<li><img src="<?php echo $row_v['profile_pic'];?>" alt=""> </li>
						<li>
							<h5><?php echo $row_v['fname']." ".$row_v['lname'];?><span> City, State</span></h5> </li>
						<li></li>
					</ul>
				</div>
				<!--== LEFT MENU ==-->
				<div class="sb2-13">
					<ul class="collapsible" data-collapsible="accordion">
						<li><a href="dashboard_main.php" class="menu-active"><i class="fa fa-tachometer" aria-hidden="true"></i>My Dashboard</a> </li>
						<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i>My Profile</a></li>
						<li><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i>Activities</a></li>
						<li><a href="main-manage-projects.php"><i class="fa fa-list-ul" aria-hidden="true"></i>Manage Projects</a></li>
						<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-list-ul" aria-hidden="true"></i>Project Listing</a>
							<div class="collapsible-body left-sub-menu">
								<ul>
									<li><a href="main-all-listing.php">My listing</a> </li>
									<li><a href="main-post-project.php">Post a Project</a> </li>
								</ul>
							</div>
						</li>
						<li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Setting</a> </li>
						<li><a href="#" target="_blank"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a> </li>
					</ul>
				</div>
			</div>