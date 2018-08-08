<?php
    session_start();
    include('conn.php');

	if(isset($_POST['uname']))
	{
        $email = $_POST['uname'];
		$password = $_POST['password'];
		
		$qry_v = "select * from user where email='$email';";
		$res_v = mysqli_query($conn,$qry_v);
		$row_v = mysqli_fetch_assoc($res_v);
        $c_v = mysqli_num_rows($res_v);
        
        if($c_v == 1)
		{
            if($row_v['status']!='pending' && $row_v['password']== $password)
            {
                echo "1";
                $_SESSION['id']=$row_v['user_id'];
            }elseif($row_v['status']=='pending') {
                echo "2";
            }elseif($row_v['password']!=$password){
                echo "3";
            }
        }else{
            echo "0";
        }
        
    }else
	{
		?><script>alert("Invalid URL access !!!"); window.location="login.php"; </script><?php   
	}

?>