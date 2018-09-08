<?php 
	echo 'asdas';
	include('session.php');
	include('main_session.php');

	if(isset($_GET['id'])){
		$project_id = $_GET['id'];
		$qry_fetch_project = "select * from project where id='$project_id' AND owner=$id;";
		//echo $qry_fetch_project;
		$res_fetch_project = mysqli_query($conn,$qry_fetch_project);
		if(mysqli_num_rows($res_fetch_project) !=1){
			//echo mysqli_num_rows($res_fetch_project);
			header('location:main-manage-projects.php');
		}else{
			$row_fetch_project = mysqli_fetch_assoc($res_fetch_project);
		}
	}else{
		header('location:main-manage-projects.php');
	}
	include('main-header.php');
	
?>
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
							<a href="#">Main Project</a>
						</li>
						<li class="page-back">
							<a href="main-manage-projects.php`">
								<i class="fa fa-backward" aria-hidden="true"></i> Back</a>
						</li>
					</ul>
				</div>
				<div class="tz-2 tz-2-admin">
					<div class="tz-2-com tz-2-main">
						<h4>Manage Project - <?php echo $row_fetch_project['title'];?></h4>
						<div class="tz-2-main-com bot-sp-20">
							<div class="tz-2-main-1 tz-2-main-admin">
								<div class="tz-2-main-2">
									<img src="images/icon/d1.png" alt="">
									<span>All Listings</span>
									<p>All the Lorem Ipsum generators on the</p>
									<h2>1024</h2>
								</div>
							</div>
							<div class="tz-2-main-1 tz-2-main-admin">
								<div class="tz-2-main-2">
									<img src="images/icon/d4.png" alt="">
									<span>Team</span>
									<p>All the Lorem Ipsum generators on the</p>
									<h2>428</h2>
								</div>
							</div>
							<div class="tz-2-main-1 tz-2-main-admin">
								<div class="tz-2-main-2">
									<img src="images/icon/d3.png" alt="">
									<span>Leads</span>
									<p>All the Lorem Ipsum generators on the</p>
									<h2>53</h2>
								</div>
							</div>
							<div class="tz-2-main-1 tz-2-main-admin">
								<div class="tz-2-main-2">
									<img src="images/icon/d2.png" alt="">
									<span>Reviews</span>
									<p>All the Lorem Ipsum generators on the</p>
									<h2>4.3</h2>
								</div>
							</div>
						</div>
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp ad-inn-page">
									<div class="inn-title">
										<h4>Project Details</h4>
									</div>
									<div class="tab-inn ad-tab-inn">
										<div class="hom-cre-acc-left hom-cre-acc-right">
											<div class="">
												<form method="post" action="post_project.php" id="post_form" enctype="multipart/form-data">
													<div class="row">
														<div class="input-field col s12">
															<input id="project_title" value="<?php echo $row_fetch_project['title'];?>" name="project_title" type="text" class="validate">
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
						<!-- Project Team Box -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp">
									<div class="inn-title">
										<h4>Project Team</h4>
										<a class="dropdown-button drop-down-meta" href="#" data-activates="dr-list-ad">
											<i class="material-icons">more_vert</i>
										</a>
										<ul id="dr-list-ad" class="dropdown-content">
											<li>
												<a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#add-new-team-member">
													<i class="fa fa-usd" aria-hidden="true"></i>Add New</a>
											</li>
											<li>
												<a href="#!">
													<i class="material-icons">subject</i>View All</a>
											</li>
											<li>
												<a href="#!">
													<i class="material-icons">play_for_work</i>Download</a>
											</li>
										</ul>
										<!-- Dropdown Structure -->
									</div>
									<div class="tab-inn">
										<div class="table-responsive table-desi">
											<table class="table table-hover">
												<thead>
													<tr>
														<th>User</th>
														<th>Name</th>
														<th>Phone</th>
														<th>Email</th>
														<th>Category</th>
														<th>Skills</th>
														<th>Delete</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<span class="list-img">
																<img src="images/users/1.png" alt="">
															</span>
														</td>
														<td>
															<a href="#">
																<span class="list-enq-name">Kimberly</span>
																<span class="list-enq-city">Illunois, United States</span>
															</a>
														</td>
														<td>+01 3214 6522</td>
														<td>chadengle@dummy.com</td>
														<td>Professional</td>
														<td>
															<span class="label label-primary">Architect</span>
														</td>
														<td>
															<span class="label label-danger">Delete</span>
														</td>
													</tr>
													<tr>
														<td>
															<span class="list-img">
																<img src="images/users/2.png" alt="">
															</span>
														</td>
														<td>
															<a href="#">
																<span class="list-enq-name"> Thomas</span>
																<span class="list-enq-city">Illunois, United States</span>
															</a>
														</td>
														<td>+01 3214 6522</td>
														<td>chadengle@dummy.com</td>
														<td>Contractor</td>
														<td>
															<span class="label label-primary">Human Labor</span>
														</td>
														<td>
															<span class="label label-danger">Delete</span>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Project Team Request Box -->
						<div class="split-row">
								<div class="col-md-12">
									<div class="box-inn-sp">
										<div class="inn-title">
											<h4>Project Team Request</h4>
											<a class="dropdown-button drop-down-meta" href="#" data-activates="dr-requestlist-ad">
												<i class="material-icons">more_vert</i>
											</a>
											<ul id="dr-requestlist-ad" class="dropdown-content">
												<li>
													<a href="#!">
														<i class="material-icons">subject</i>View All</a>
												</li>
												<li>
													<a href="#!">
														<i class="material-icons">play_for_work</i>Download</a>
												</li>
											</ul>
											<!-- Dropdown Structure -->
										</div>
										<div class="tab-inn">
											<div class="table-responsive table-desi">
												<table class="table table-hover">
													<thead>
														<tr>
															<th>User</th>
															<th>Name</th>
															<th>Phone</th>
															<th>Email</th>
															<th>Category</th>
															<th>Skills</th>
															<th>Response</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>
																<span class="list-img">
																	<img src="images/users/1.png" alt="">
																</span>
															</td>
															<td>
																<a href="#">
																	<span class="list-enq-name">Kimberly</span>
																	<span class="list-enq-city">Illunois, United States</span>
																</a>
															</td>
															<td>+01 3214 6522</td>
															<td>chadengle@dummy.com</td>
															<td>Professional</td>
															<td>
																<span class="label label-primary">Architect</span>
															</td>
															<td><i class="material-icons dp48">done</i><i class="material-icons dp48 red">delete</i></td>
														</tr>
														<tr>
															<td>
																<span class="list-img">
																	<img src="images/users/2.png" alt="">
																</span>
															</td>
															<td>
																<a href="#">
																	<span class="list-enq-name"> Thomas</span>
																	<span class="list-enq-city">Illunois, United States</span>
																</a>
															</td>
															<td>+01 3214 6522</td>
															<td>chadengle@dummy.com</td>
															<td>Contractor</td>
															<td>
																<span class="label label-primary">Human Labor</span>
															</td>
															<td><i class="material-icons dp48">done</i><i class="material-icons dp48 red">delete</i></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
	
						<!-- Review Box -->
						<div class="split-row">
							<div class="col-md-12">
								<div class="box-inn-sp">
									<div class="inn-title">
										<h4>Reviews</h4>
										<a class="dropdown-button drop-down-meta" href="#" data-activates="dr-review-ad">
											<i class="material-icons">more_vert</i>
										</a>
										<ul id="dr-review-ad" class="dropdown-content">
											<li>
												<a href="#!" data-dismiss="modal" data-toggle="modal" data-target="#add-new-review">
													<i class="fa fa-plus" aria-hidden="true"></i>Add New</a>
											</li>
											<li>
												<a href="#!">
													<i class="material-icons">subject</i>View All</a>
											</li>
											<li>
												<a href="#!">
													<i class="material-icons">play_for_work</i>Download</a>
											</li>
										</ul>
										<!-- Dropdown Structure -->
									</div>
									<div class="tab-inn">
										<!-- -->
										<div class="pglist-p3 pglist-bg pglist-p-com" id="ld-rer">
											<div class="list-pg-inn-sp">
												<div class="lp-ur-all-rat">
													<ul>
														<li>
															<div class="lr-user-wr-img">
																<img src="images/users/2.png" alt=""> </div>
															<div class="lr-user-wr-con">
																<h6>Jacob Michael
																	<span>4.5
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</span>
																</h6>
																<span class="lr-revi-date">19th January, 2017</span>
																<p>Good service... nice and clean rooms... very good spread of buffet and friendly staffs. Located in heart
																	of city and easy to reach any places in a short distance. </p>
															</div>
														</li>
														<li>
															<div class="lr-user-wr-img">
																<img src="images/users/3.png" alt=""> </div>
															<div class="lr-user-wr-con">
																<h6>Gabriel Elijah
																	<span>5.0
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</span>
																</h6>
																<span class="lr-revi-date">21th July, 2016</span>
																<p>The hotel is clean, convenient and good value for money. Staff are courteous and helpful. However, they need
																	more training to be efficient.</p>
															</div>
														</li>
														<li>
															<div class="lr-user-wr-img">
																<img src="images/users/4.png" alt=""> </div>
															<div class="lr-user-wr-con">
																<h6>Luke Mason
																	<span>4.2
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</span>
																</h6>
																<span class="lr-revi-date">21th March, 2018</span>
																<p>Too much good experience with hospitality, cleanliness, facility and privacy and good value for money...
																	To keep mind relaxing... Keep it up... </p>
															</div>
														</li>
														<li>
															<div class="lr-user-wr-img">
																<img src="images/users/5.png" alt=""> </div>
															<div class="lr-user-wr-con">
																<h6>Kevin Jack
																	<span>3.6
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</span>
																</h6>
																<span class="lr-revi-date">21th Aug, 2018</span>
																<p>I am deaf. Bar is closed and Restaurant is okay ... It should be more decoration as beautiful. I enjoyed
																	swimming top floor and weather is good</p>
															</div>
														</li>
														<li>
															<div class="lr-user-wr-img">
																<img src="images/users/6.png" alt=""> </div>
															<div class="lr-user-wr-con">
																<h6>Nicholas Tyler
																	<span>4.4
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</span>
																</h6>
																<span class="lr-revi-date">21th Aug, 2018</span>
																<p>Overall, it was good experience. Rooms were spacious and they were kept very clean and tidy. Room service
																	was good.</p>
															</div>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<!-- -->
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- POPUPS -->
	<section>
		<!-- add-new-team-member POPUP -->
		<div class="modal fade dir-pop-com" id="add-new-team-member" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header dir-pop-head">
						<button type="button" class="close" data-dismiss="modal">X</button>
						<h4 class="modal-title">Add New</h4>
						<!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
					</div>
					<div class="modal-body dir-pop-body">

						<!--SEARCH FOR TEAM MEMBER-->
						<div class="form-group has-feedback ak-field">
							<label class="col-md-2 control-label">Search</label>
							<div class="col-md-10">
								<input type="text" class="form-control" name="fname" placeholder="Name/Email" required>
							</div>
						</div>

						<!-- SEARCH LIST OF MEMBERS -->
						<div class="tab-inn">
							<div class="table-responsive table-desi">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>User</th>
											<th>Name</th>
											<th>City</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>
												<span class="list-img">
													<img src="images/users/1.png" alt="">
												</span>
											</td>
											<td>
												<a href="#">
													<span class="list-enq-name">Kimberly</span>
													<span class="list-enq-email">chadengle@dummy.com</span>
												</a>
											</td>
											<td>
												<span class="list-enq-city">Rajkot</span>
											</td>
										</tr>
										<tr>
											<td>
												<span class="list-img">
													<img src="images/users/2.png" alt="">
												</span>
											</td>
											<td>
												<a href="#">
													<span class="list-enq-name"> Thomas</span>
													<span class="list-enq-email">chadengle@dummy.com</span>
												</a>
											</td>
											<td>
												<span class="list-enq-city">Ahmedabad</span>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>

						<!-- ONLY APPLICABLE SELECTION WILL SHOW IN THIS SECTION AFTER SELECTING A TEAM MEMBER -->

						<div class="input-field col s12">
							<select multiple>
								<option value="" disabled selected>Category</option>
								<option value="1">Owner</option>
								<option value="2">Professional</option>
								<option value="3">Contractor</option>
								<option value="3">Supplier</option>
							</select>
						</div>

						<!-- ONLY APPLICABLE SELECTION WILL SHOW FROM THE SELECTED TEAM MEMBER'S PROFILE IN THIS SECTION AFTER SELECTING A CATEGORY -->

						<div class="input-field col s12">
							<select multiple>
								<option value="" disabled selected>Skills</option>
								<option value="1">Skill1</option>
								<option value="2">Skill2</option>
								<option value="3">Skill3</option>
								<option value="3">Skill4</option>
							</select>
						</div>

						<div class="form-group has-feedback ak-field">
							<div class="col-md-6 col-md-offset-4">
								<input type="submit" value="Add" class="pop-btn"> </div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- GET QUOTES Popup END -->
	</section>

	<section>
		<!-- add-new-review POPUP -->
		<div class="modal fade dir-pop-com" id="add-new-review" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header dir-pop-head">
						<button type="button" class="close" data-dismiss="modal">X</button>
						<h4 class="modal-title">Give Review</h4>
						<!--<i class="fa fa-pencil dir-pop-head-icon" aria-hidden="true"></i>-->
					</div>
					<div class="modal-body dir-pop-body">

							<p>Writing great reviews may help others.</p>
							<div class="row">
								<div class="col s12">
									<fieldset class="rating">
										<input type="radio" id="star5" name="rating" value="5" />
										<label class="full" for="star5" title="Awesome - 5 stars"></label>
										<input type="radio" id="star4half" name="rating" value="4 and a half" />
										<label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
										<input type="radio" id="star4" name="rating" value="4" />
										<label class="full" for="star4" title="Pretty good - 4 stars"></label>
										<input type="radio" id="star3half" name="rating" value="3 and a half" />
										<label class="half" for="star3half" title="Meh - 3.5 stars"></label>
										<input type="radio" id="star3" name="rating" value="3" />
										<label class="full" for="star3" title="Meh - 3 stars"></label>
										<input type="radio" id="star2half" name="rating" value="2 and a half" />
										<label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
										<input type="radio" id="star2" name="rating" value="2" />
										<label class="full" for="star2" title="Kinda bad - 2 stars"></label>
										<input type="radio" id="star1half" name="rating" value="1 and a half" />
										<label class="half" for="star1half" title="Meh - 1.5 stars"></label>
										<input type="radio" id="star1" name="rating" value="1" />
										<label class="full" for="star1" title="Sucks big time - 1 star"></label>
										<input type="radio" id="starhalf" name="rating" value="half" />
										<label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
									</fieldset>
								</div>
							</div>
							<!-- <div class="row">
								<div class="input-field col s12">
									<input id="re_name" type="text" class="validate">
									<label for="re_name">Team Member</label>
								</div>
							</div> -->
							<div class="input-field col s12">
							<select>
								<option value="" disabled selected>Select Team Member</option>
								<option value="1">Dhaval</option>
								<option value="2">Smeet</option>
								<option value="3">Sanjay</option>
								<option value="3">Rajesh</option>
							</select>
						</div>

							<div class="row">
								<div class="input-field col s12">
									<textarea id="re_msg" class="materialize-textarea"></textarea>
									<label for="re_msg">Write review</label>
								</div>
							</div>
							<div class="row">
								<div class="input-field col s12">
									<a class="waves-effect waves-light btn-large full-btn" href="#!">Submit Review</a>
								</div>
							</div>
						

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
</body>


<!-- Mirrored from www.rn53themes.net/themes/demo/directory/admin.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 19 Sep 2017 11:08:24 GMT -->

</html>