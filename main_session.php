<?php 
    include('conn.php');
    $id = $_SESSION['id'];
	$qry_v = "select * from user where user_id='$id';";
	$res_v = mysqli_query($conn,$qry_v);
	$row_v = mysqli_fetch_assoc($res_v);
	if($row_v['status']=='guest')
	{
        //echo $row_v['status'];
        header('location:dashboard_guest.php');
	}
?>