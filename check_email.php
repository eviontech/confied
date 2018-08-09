<?php
    
    include('conn.php');
 	if(isset($_POST['email']))
	{
        $email = $_POST['email'];
		
		$qry_v = "select * from user where email='$email' and status='pending'";
		$res_v = mysqli_query($conn,$qry_v);
		$row_v = mysqli_fetch_assoc($res_v);
        $c_v = mysqli_num_rows($res_v);
        if($c_v == 1)
		{
            echo "1";
        }else{
            echo "0";
        }
        
    }else
	{
		?><script>alert("Invalid URL access !!!"); window.location="login.php"; </script><?php   
	}
 ?> 