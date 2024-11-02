<?php
//echo 1;
session_start();
date_default_timezone_set("Asia/Calcutta");
require_once('../../Admin/page/dbConnection.php');


if (isset($_POST['submit']))
{
	//echo 15;die;
	include_once 'dbConnection.php';
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$comment = $_POST["comment"];
		$date = date('Y-m-d H:i:s');
        
        
		$f=0;
		
          //echo "INSERT INTO `inquiry`(`id`, `name`, `email`, `mobile`, `comment`, `date`, `status`,` description`) VALUES ('','$name','$email','$mobile','$comment','$date','0','')";die;

	 $q6=mysqli_query($con,"INSERT INTO `inquiry`(`id`, `name`, `email`, `mobile`, `comment`, `date`, `status`,`description`) VALUES ('','$name','$email','$mobile','$comment','$date','0','')");

    $firstErr = "Thank U";
	  $_SESSION['fname2']= $firstErr;
	  header('Location:../../index.php#Contact');
	  $first="";
	// echo "<script>alert('your inquiry has been sent successfully ;');window.location.href='../../index.php#Contact'; </script>";
					}
					else {
			   echo "failed";
			  				
}




?>
