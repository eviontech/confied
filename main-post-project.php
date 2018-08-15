<?php include('session.php');?>
<?php include('main_session.php');?>
<?php include('main-header.php');?>
<style>
	::-webkit-datetime-edit-year-field:not([aria-valuenow]),
	::-webkit-datetime-edit-month-field:not([aria-valuenow]),
	::-webkit-datetime-edit-day-field:not([aria-valuenow]) {
		color: transparent;
	}
	input::-webkit-datetime-edit{ color: transparent; }
 
</style>
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
												<form method="post" action="post_project.php" id="post_form" enctype="multipart/form-data">
													<div class="row">
														<div class="input-field col s12">
															<input id="project_title" name="project_title" type="text" class="validate">
															<label for="project_title">Project Title</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12">
															<textarea id="project_desc" name="project_desc" type="text" class="materialize-textarea"></textarea>
															<label for="project_desc">Project Description</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s6">
															<input id="project_area" name="project_area" type="text" class="validate">
															<label for="project_area">Area</label>
														</div>
														<div class="input-field col s6">
															<input id="project_city" name="project_city" type="text" class="validate">
															<label for="project_city">City</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12">
															<input id="project_address" name="project_address" type="text" class="validate">
															<label for="project_address">Address</label>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s6">
															<input id="approx_budget" name="approx_budget" type="number" min="0" class="validate">
															<label for="approx_budget">Approx Budget</label>
														</div>
														<div class="input-field col s6">
															<input id="project_date" name="project_date" type="date" class="validate">
															<label for="project_date">Start date</label>
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
																<input id="image" name="image" type="file"> </div>
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
																<input type="file" id="image_multiple" name="image_multiple" multiple> </div>
															<div class="file-path-wrapper db-v2-pg-inp">
																<input class="file-path validate" type="text">
															</div>
														</div>
													</div>
													<div class="row">
														<div class="input-field col s12 v2-mar-top-40">
															<a onclick="post_pro()" class="waves-effect waves-light btn-large full-btn">Submit Listing</a>
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
	
	<!--SCRIPT FILES-->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	<script src="js/materialize.min.js" type="text/javascript"></script>
	<script src="js/custom.js"></script>
</body>
<script>
	function post_pro(){
		document.getElementById('post_form').submit();
	}
	
	/*document.getElementById('approx_budget').addEventListener('keydown', function(e) {
    var key   = e.keyCode ? e.keyCode : e.which;

    if (!( [8, 9, 13, 27, 46, 110, 190].indexOf(key) !== -1 ||
         (key == 65 && ( e.ctrlKey || e.metaKey  ) ) || 
         (key >= 35 && key <= 40) ||
         (key >= 48 && key <= 57 && !(e.shiftKey || e.altKey)) ||
         (key >= 96 && key <= 105)
       )) e.preventDefault();
	});*/
	/*function post(){
		$title = document.getElementById("project_title").value;
		$desc = document.getElementById("project_desc").value;
		$area = document.getElementById("project_area").value;
		$city = document.getElementById("project_city").value;
		$address = document.getElementById("project_address").value;
		$date = document.getElementById("project_date").value;
		$budget = document.getElementById("approx_budget").value;
		$image = document.getElementById("image").value;
		$mimage = document.getElementById("image_multiple").value;
		data = "title : "+$title+", description : "+$desc+", area : "+$area +", city : "+$city +", address : "+$address  + ", image : "+$image +", date : "+$date +", budget : "+$budget +", mimage : "+$mimage;
		//alert($data);
		$.ajax({
				type: "POST",
				dataType: "text",
				data: {title : $title , description : $desc, area : $area , city : $city , address : $address  , image : $image , date : $date , budget : $budget , mimage : $mimage},
				url: 'post_project.php',
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
	}*/
</script>
</html>