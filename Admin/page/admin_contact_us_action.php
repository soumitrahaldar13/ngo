<?php
session_start();
    require_once('dbConnection.php');
   include('admin_sidenav.php');
extract($_REQUEST);
include('dbConnection.php');
//echo $cont;die;
 if(isset($_POST['submit'])!=""){
             $description=$_POST['desc'];
             $qqq=$_POST['act'];
             //echo $description;
             //echo $qqq;die;
            // echo "UPDATE `inquiry` SET `status`='$qqq',`description`='$description' WHERE `id`=$cont";die;
             $query=$con->query("UPDATE `inquiry` SET `status`='$qqq',`description`='$description' WHERE `id`=$cont");
if($query){
echo "<script>alert('update Sucessfully');window.location.href='admin_contact_us.php'; </script>";
// header("location:admin_image.php");

}
else{
die(mysqli_error($conn));
}
}
          
?>
 <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>



<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
<link href="globe.png" rel="shortcut icon">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="../css/DT_bootstrap11.css">

</head>


<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
<?php
date_default_timezone_set("Asia/Calcutta");
//echo date_default_timezone_get();
?>



 <!-- top manu -->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Contact US </span>
      </div>
      
      <?php
      include('admin_right_side_login.php');
      ?>
    </nav>
  <!-- end top manu -->

<div class="home-content">
      <div class="sales-boxes">
                    <div class="recent-sales box" style="width: 99%;">
                        <div class="title" style="text-align: center;">Contact US modify<?php echo $cont; ?></div>

                                <?php 
                            	$query=mysqli_query($con," SELECT * FROM `inquiry` WHERE `id`= '$cont'")or die(mysqli_error($con));                           							
                            	while($row=mysqli_fetch_array($query)){
                            	$id=$row['id'];
                            	$name=$row['name'];
                            	$date=$row['date'];
                            	?>
		                 <div class="table-responsive box" style="text-align: center;">
                               <form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
		                       <!-- <form enctype="multipart/form-data"  action="admin_contact_us_action1.php"  id="wb_Form1" name="form" method="post"> -->
		                       	 <input type="text" id="fname" name="fname" value="<?php echo $row['id']; ?>" hoden><br>
								  <label for="name">Name</label><br>
								  <input type="text" id="fname" name="fname" value="<?php echo $row['name']; ?>" disabled><br>
								  <label for="email">email</label><br>
								  <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>" disabled><br>
								  <label for="mobile">Mobile</label><br>
								  <input type="text" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>" disabled><br>
								  <label for="comment">Message</label><br>
								  <input type="text" id="comment" name="comment" value="<?php echo $row['comment']; ?>" disabled><br>
								  <label for="date">Date</label><br>
								  <input type="text" id="date" name="date" value="<?php echo $row['date']; ?>" disabled><br><br>
								  <label for="lname">description</label><br>
								  <textarea id="desc" name="desc" rows="4" cols="50" <?php if($row['description']==''){}else{?> disabled <?php } ?>><?php echo $row['description']; ?></textarea><br><br>
								  <label for="lname">done</label><br>
								  <input type="radio" id="act" name="act" value="1" <?php if($row['status']==1){?>checked <?php } ?> requred><br>
								  <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit">
							   </form>
		                       
		                             
		                
		                 </div> 
		                        <?php } ?>         
                   </div>   

        </div> 

</div>
</section>
  

  <?php
    include('admin_footer.php');
    ?>