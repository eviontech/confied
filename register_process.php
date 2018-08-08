<?php 
	include('conn.php');
?>
<!-- Insert Data into Databse -->
<?php
	if(isset($_POST['submit']))
	{
		//check username is already exist or not ? -- 
		
		$username = $_POST['username'];
		$email = $_POST['email'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$mobile = $_POST['phone'];
		
		$qry_check = "select username from user where username = '$username' OR email = '$email'";
		$res_check = mysqli_query($conn,$qry_check);
		$c_check = mysqli_num_rows($res_check);
		
		if($c_check >= 1)
		{?>
			<script> alert("Username OR Email is Alredy Exist... Please Try to use different Emial OR Username"); window.location="register.php";</script><?php
		}
		else
		{
        	$randstring = '';
    		for ($i = 0; $i < 5; $i++) {
				$randstring .= rand(0, 9);
			}
			
    		$vc = $randstring;
    		$txt="Your Username is:\t   ".$email."\nYour Code is:".$vc;
    		ini_set('SMTP', 'mail.eviontech.com'); 
    		ini_set('smtp_port', 465);	
    		$subject="Verification";	
    		$txt="Full Name:\t ".$name."\nEmail Id:\t   ".$email."\nVerification Code: ".$vc. "\n Verify Link:  www.eviontech.com/cc/verificationcode.php?username=$username";
    		$headers = 'From: Eviontech<developer.evion@gmail.com>' . "\r\n";			
    		$ok=mail($email,$subject,$txt,$headers);
			
			
			$qry = "INSERT INTO `temp_user`(`name`, `email`, `username`, `password`, `mobile`,`token`, `status`) VALUES ('$name','$email','$username','$password',$mobile,'$vc','pending')";
			
			$res = mysqli_query($conn,$qry);
			
			if($res){
				?><script>alert("Please Verify Your Mail..."); window.location="verificationcode.php?username=<?php echo $username; ?>"; </script><?php
			}
			else{
				?><script>alert("Sorry Some Error in Registration...");</script><?php
			}
		}
	}
	else{
		?><script>alert("Invalid Redirection...");</script><?php
	}
?>