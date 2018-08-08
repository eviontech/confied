<?php include('session.php');?>
<?php include('main_session.php');?>
<?php include('main-header.php');?>
			<!--== BODY INNER CONTAINER ==-->
			<div class="sb2-2">
				<!--== breadcrumbs ==-->
				<div class="sb2-2-2">
					<ul>
						<li>
							<a href="dashboard_main.php">
								<i class="fa fa-home" aria-hidden="true"></i> Home</a>
						</li>
						<li class="active-bre">
							<a href="#"> Post a Project</a>
						</li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4>Post a Project</h4>

						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="tab-inn ad-tab-inn">
										<div class="hom-cre-acc-left hom-cre-acc-right">
											<div class="">
												<form class="">
													<div class="row">
														<div class="input-field col s12">
															<input id="project_title" type="text" class="validate">
															<label for="project_title">Project Title</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12">
															<textarea id="project_desc" type="text" class="materialize-textarea"></textarea>
															<label for="project_desc">Project Description</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s6">
															<input id="project_area" type="text" class="validate">
															<label for="project_area">Area</label>
														</div>
														<div class="input-field col s6">
															<input id="project_city" type="text" class="validate">
															<label for="project_city">City</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12">
															<input id="list_addr" type="text" class="validate">
															<label for="list_addr">Address</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s6">
															<input id="approx_budget" type="text" class="validate">
															<label for="approx_budget">Approx Budget</label>
														</div>
														<div class="input-field col s6">
															<input id="approx_budget" type="date" class="validate">
															<label for="approx_budget"></label>
														</div>
													</div>
													<div class="row">
														<div class="db-v2-list-form-inn-tit">
															<h5>Cover Image
																<span class="v2-db-form-note">(image size 1350x500):
																	<span>
															</h5>
														</div>
													</div>
													<div class="row tz-file-upload">
														<div class="file-field input-field">
															<div class="tz-up-btn">
																<span>File</span>
																<input type="file"> </div>
															<div class="file-path-wrapper db-v2-pg-inp">
																<input class="file-path validate" type="text">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="db-v2-list-form-inn-tit">
															<h5>Photo Gallery
																<span class="v2-db-form-note">(upload multiple photos note:size 750x500):
																	<span>
															</h5>
														</div>
													</div>
													<div class="row tz-file-upload">
														<div class="file-field input-field">
															<div class="tz-up-btn">
																<span>File</span>
																<input type="file" multiple> </div>
															<div class="file-path-wrapper db-v2-pg-inp">
																<input class="file-path validate" type="text">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12 v2-mar-top-40">
															<a class="waves-effect waves-light btn-large full-btn" href="db-payment.html">Submit Listing</a>
														</div>
													</div>
												</form>
											</div>
										</div>
									</div>
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
</body>


<!-- Mirrored from www.rn53themes.net/themes/demo/directory/admin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 11:08:24 GMT -->

</html>