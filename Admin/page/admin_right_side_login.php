<?php
session_start();
    require_once('dbconnection.php');
    $nam=$_SESSION["name"];
    $query=mysqli_query($con," SELECT * FROM `login` WHERE `NAME`='$nam'")or die(mysqli_error($con));
							// echo 1;die;
							while($row=mysqli_fetch_array($query)){
							$id=$row['ID'];
							$image=$row['image'];
							$name=$row['NAME'];
							}

    

    ?>
<div class="search-box">
        <input type="text" placeholder="Search...">
        <i class='bx bx-search' ></i>
      </div>
<div class="profile-details">
        <img src="../../assets/imgs/<?php echo $image;?>" alt="">
        <span class="admin_name"><?php echo $name; ?></span>
        <i class='bx bx-chevron-down' ></i>
      </div>
      