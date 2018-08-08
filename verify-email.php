<?php
    
    include('conn.php');

	if(isset($_POST['email']))
	{
		$email = $_POST['email'];
		$vc = $_POST['code'];
		
		$qry_v = "select * from user where email='$email' and status = 'pending'";
		$res_v = mysqli_query($conn,$qry_v);
		$row_v = mysqli_fetch_assoc($res_v);
		$c_v = mysqli_num_rows($res_v);
		
		
		
		if($c_v == 1)
		{
			if($row_v['token'] == $vc)
			{
				$verify_query = "UPDATE `user` SET `status` = 'guest' WHERE `user`.`email` = '$email';" ;
				$verify_res = mysqli_query($conn,$verify_query);
				if($verify_res){
					echo "Your Account is Verified.Please Login !!!";
					reload();
				}else{
					echo "Verification failed Error: ".mysql_error($conn);
				}
				 
			}
			else
			{
				echo "Your Verification Code did not Match!...";
			}
		}
		else
		{
		    echo "Email is alredy verified or not registered with us....";  
		}
	}else
	{
		?><script>alert("Invalid URL access !!!"); window.location="login.php"; </script><?php   
	}

?>