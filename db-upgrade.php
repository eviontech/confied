<?php include('session.php');?>
<?php include('guest_session.php');?>
<?php include('guest-header.php');?>

			<!--CENTER SECTION-->
			<div class="tz-2">
				<div class="tz-2-com tz-2-main">
					<h4>Upgrade</h4>
					<div class="db-list-com tz-db-table">
						<div class="ds-boar-title">
							<h2>What you get with Pro?</h2>
							<p>All the Lorem Ipsum generators on the All the Lorem Ipsum generators on the</p>
						</div>
						<div class="tz-com-p">
							<h5>Claim & Refund</h5>
							<p>search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the
								years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<h5>Where can I get some?</h5>
							<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some
								form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use
								a passage of Lorem Ipsum, you need to be sure there isn't anything </p>
							<h5>Why do we use it?</h5>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its
								layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed</p>
							<h5>Where does it come from?</h5>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature
								from 45 BC, making it over 2000 years old. </p>
							<div class="chec-out-pay">
								<h5>Select Payment Gateway</h5>
								<input name="group1" type="radio" id="pay1" />
								<label for="pay1">
									<img src="images/pay1.png" alt="">
								</label>
								<input name="group1" type="radio" id="pay2" />
								<label for="pay2">
									<img src="images/pay2.png" alt="">
								</label>
								<input name="group1" type="radio" id="pay3" />
								<label for="pay3">
									<img src="images/pay3.png" alt="">
								</label>
								<input name="group1" type="radio" id="pay4" />
								<label for="pay4">
									<img src="images/pay4.png" alt="">
								</label>
							</div>
							<div class="db-mak-pay-bot">
								<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at
									its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
								<a id="upgrade" onclick='upgrade()' class="waves-effect waves-light btn-large">Make Payment Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--RIGHT SECTION-->
			<div class="tz-3">
				<h4>Notifications(18)</h4>
				<ul>
					<li>
						<a href="#!">
							<img src="images/icon/dbr1.jpg" alt="" />
							<h5>Joseph, write a review</h5>
							<p>All the Lorem Ipsum generators on the</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<script>
		function upgrade() {              
			$.ajax({
				type: "POST",
				dataType: "text",
				url: 'upgrade.php',
				success: function(response) {
					if(response==1){
						location.reload();
					}else{
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
		}
	</script>
	<!--END DASHBOARD-->
	<?php include('footer.php');?>