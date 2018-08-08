<?php include('header.php');?>
<?php include('conn.php');?>
	
	<section class="tz-register">
		<div class="tz-regi-form">
			<h4>Create an Account</h4>
			<p>It's free and always will be.</p>
			<form class="col s12" method="POST" action="register.php">
				<div class="row">
					<div class="input-field col m6 s12">
						<input name="fname" type="text" class="validate"/>
						<label class="">First Name</label>
					</div>
					<div class="input-field col m6 s12">
						<input name="lname" type="text" class="validate">
						<label>Last Name</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="number" type="number" class="validate">
						<label>Mobile</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="email" type="email" class="validate">
						<label>Email</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input name="password" type="password" class="validate">
						<label>Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<input type="password" class="validate">
						<label>Confirm Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12"> 
						<i class="waves-effect waves-light btn-large full-btn waves-input-wrapper" style="">
						<input type="submit" name="submit" id="submit" value="submit" class="waves-button-input">
						</i>
					</div>
				</div>
			</form>
			<p>Are you a already member ? <a href="login.html">Click to Login</a> </p>
			<div class="soc-login">
				<h4>Sign in using</h4>
				<ul>
					<li><a href="#"><i class="fa fa-facebook fb1"></i> Facebook</a> </li>
					<li><a href="#"><i class="fa fa-twitter tw1"></i> Twitter</a> </li>
					<li><a href="#"><i class="fa fa-google-plus gp1"></i> Google</a> </li>
				</ul>
			</div>			
		</div>
	</section>

<!-- register process -->
<?php
	//print_r($_POST);
	if(isset($_POST['submit']))
	{
		//check username is already exist or not ? 
		
		$email = $_POST['email'];
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$password = $_POST['password'];
		$mobile = $_POST['number'];
		
		$qry_check = "select * from user where email = '$email' AND status != 'pending'";
		//echo $qry_check;
		$res_check = mysqli_query($conn,$qry_check);
		$c_check = mysqli_num_rows($res_check);
		$qry_check1 = "select * from user where email = '$email' and status = 'pending'";
		//echo $qry_check1;
		$res_check1 = mysqli_query($conn,$qry_check1);
		$c_check1 = mysqli_num_rows($res_check1);
		if($c_check >= 1)
		{?>
			<script> alert("Email is Alredy Exist... Please Try to use different Emial OR Username"); window.location="register.php";</script><?php
		}else if($c_check1 >= 1)
		{?>
			<script> alert("Account registered... Please verify account..."); window.location="register.php";</script><?php
		}
		else
		{
        	$randstring = '';
    		for ($i = 0; $i < 5; $i++) {
				$randstring .= rand(0, 9);
			}
			
    		$vc = $randstring;
    		/*$txt="Your Username is:\t   ".$email."\nYour Code is:".$vc;
    		ini_set('SMTP', 'mail.eviontech.com'); 
    		ini_set('smtp_port', 465);	
    		$subject="Verification";	
    		$txt="Full Name:\t ".$name."\nEmail Id:\t   ".$email."\nVerification Code: ".$vc. "\n Verify Link:  www.eviontech.com/cc/verificationcode.php?username=$username";
    		$headers = 'From: Eviontech<developer.evion@gmail.com>' . "\r\n";			
    		$ok=mail($email,$subject,$txt,$headers);*/
			
			
			$qry = "INSERT INTO `user`(`fname`,`type_id`,`lname`, `email`,`password`, `mobile`,`token`, `status`) VALUES ('$fname','2','$lname','$email','$password',$mobile,'$vc','pending')";
			//echo $qry;
			$res = mysqli_query($conn,$qry);
			
			if(1){
				?><script>alert("Please Verify Your Mail..."); </script><?php
			}
			else{
				?><script>alert("Sorry Some Error in Registration...".mysqli_error());</script><?php
			}
		}
	}
?>

<?php include('footer.php');?>