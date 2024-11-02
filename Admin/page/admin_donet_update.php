<?php
//echo "$del";die;
extract($_REQUEST);
include('dbConnection.php');
if (isset($_POST['submit1']))
{
		$sta = $_POST['disp'];
		if ($sta==''){
			//echo "UPDATE `donate` SET `status`='0' WHERE `id`=$del";die;
			$query=$con->query("UPDATE `donate` SET `status`='0' WHERE `id`=$del");
         if($query){
            echo "<script>alert('inactive');window.location.href='admin_donet.php'; </script>";
             }
			else{
			die(mysqli_error($conn));
			}

			
		}else{
			//echo "UPDATE `donate` SET `status`='$sta' WHERE `id`=$del";die;
			$query=$con->query("UPDATE `donate` SET `status`='$sta' WHERE `id`=$del");
         if($query){
            echo "<script>alert('active');window.location.href='admin_donet.php'; </script>";
             }
			else{
			die(mysqli_error($conn));
			}

		}
  

}
?>