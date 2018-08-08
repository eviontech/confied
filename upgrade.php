<?php 
    include('session.php');
    include('guest_session.php');

        $qry_v = "update user set status='member' where user_id='$id';";
		$res_v = mysqli_query($conn,$qry_v);
        if($res_v)
        {
            echo "1";
        }else{
            echo "0";
        }
?>