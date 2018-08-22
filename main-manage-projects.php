<?php include('session.php');?>
<?php include('main_session.php');?>
<?php include('main-header.php');?>
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
								<i class="fa fa-plus" aria-hidden="true"></i>Manage Project List</a>
						</li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<section class="dir-pa-sp-top">
							<div class="container dir-hom-pre-tit col-md-12">
								<?php
									$qry_fetch_project = "select * from project where owner='$id' AND status='1';";
									$res_fetch_project = mysqli_query($conn,$qry_fetch_project);
									if(mysqli_num_rows($res_fetch_project)!=0){
								?>
								<div class="com-title">
									<p>Open Projects</p>
								</div>
								<?php
									}
								?>
								<div class="row span-none">
									<?php 
										while($row_fetch_project = mysqli_fetch_assoc($res_fetch_project)){
											?>
											<div class="col-md-4">
											<a href="main-manage-project-details.php?id=<?php echo $row_fetch_project['id'];?>">
													<div class="list-mig-like-com com-mar-bot-30">
														<div class="list-mig-lc-img">
															<img src="images/listing/1.jpg" alt="">
															<span class="home-list-pop-rat list-mi-pr">$720</span>
														</div>
														<div class="list-mig-lc-con">
															<h5><?php echo $row_fetch_project['title'];?></h5>
															<p><?php echo $row_fetch_project['city'];?></p>
														</div>
													</div>
												</a>
											</div>
											
											
											<?php
										}

									?>
								</div>
								<?php
									$qry_fetch_project = "select * from project where owner='$id' AND status='2';";
									$res_fetch_project = mysqli_query($conn,$qry_fetch_project);
									if(mysqli_num_rows($res_fetch_project)!=0){
								?>
								<div class="com-title">
									<p>In-Process Projects</p>
								</div>
								<?php
									}
								?>
								<div class="row span-none">
									<?php 
										while($row_fetch_project = mysqli_fetch_assoc($res_fetch_project)){
											?>
											<div class="col-md-4">
												<a href="main-manage-project-details.php?id=<?php echo $row_fetch_project['id'];?>">
													<div class="list-mig-like-com com-mar-bot-30">
														<div class="list-mig-lc-img">
															<img src="images/listing/1.jpg" alt="">
															<span class="home-list-pop-rat list-mi-pr">$720</span>
														</div>
														<div class="list-mig-lc-con">
															<h5><?php echo $row_fetch_project['title'];?></h5>
															<p><?php echo $row_fetch_project['city'];?></p>
														</div>
													</div>
												</a>
											</div>
											
											
											<?php
										}

									?>
								</div>
								<?php
									$qry_fetch_project = "select * from project where owner='$id' AND status='3';";
									$res_fetch_project = mysqli_query($conn,$qry_fetch_project);
									if(mysqli_num_rows($res_fetch_project)!=0){
								?>
								<div class="com-title">
									<p>Completed Projects</p>
								</div>
								<?php
									}
								?>
								<div class="row span-none">
									<?php 
										while($row_fetch_project = mysqli_fetch_assoc($res_fetch_project)){
											?>
											<div class="col-md-4">
											<a href="main-manage-project-details.php?id=<?php echo $row_fetch_project['id'];?>">
													<div class="list-mig-like-com com-mar-bot-30">
														<div class="list-mig-lc-img">
															<img src="images/listing/1.jpg" alt="">
															<span class="home-list-pop-rat list-mi-pr">$720</span>
														</div>
														<div class="list-mig-lc-con">
															<h5><?php echo $row_fetch_project['title'];?></h5>
															<p><?php echo $row_fetch_project['city'];?></p>
														</div>
													</div>
												</a>
											</div>
											
											
											<?php
										}

									?>
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