<?php
//echo 1;
session_start();
date_default_timezone_set("Asia/Calcutta");
require_once('dbConnection.php');


if (isset($_POST['submit1']))
{
	//echo 15;die;
	include_once 'dbConnection.php';
		$name = $_POST['name'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$address = $_POST["address"];
		$pin = $_POST['pin'];
		$city = $_POST["city"];
		$state = $_POST['state'];
        $date = date('Y-m-d H:i:s');
        $amout=rand(10,100);
        
		$f=0;
		
           // echo "INSERT INTO `donate`(`name`, `email`, `mobile`, `address`, `pin`, `city`, `state`, `date`, `Amount`) VALUES ('$name','$email','$mobile','$address','$pin','$city','$state','$date','$amout')";die;

	 $q6=mysqli_query($con,"INSERT INTO `donate`(`name`, `email`, `mobile`, `address`, `pin`, `city`, `state`, `date`, `Amount`) VALUES ('$name','$email','$mobile','$address','$pin','$city','$state','$date','$amout')");

    
	echo "<script>alert('Donate Sucessfully done <br>password= $rand;');window.location.href='admin_donet.php'; </script>";
					}
					else {
			   echo "failed";
			  				
}




?>


                      