<?php
    session_start();
    require_once('dbConnection.php');
    include('admin_sidenav.php');

        if(isset($_POST['submit1'])!=""){
             // echo 1;die;
          $name1=$_POST['name1'];
          $description=$_POST['description'];
          $name=$_FILES['photo']['name'];
          $size=$_FILES['photo']['size'];
          $type=$_FILES['photo']['type'];
          $temp=$_FILES['photo']['tmp_name'];
          $date = $_POST['date'];
          $caption1=$_POST['caption'];
          $link=$_POST['link'];
  // echo "INSERT INTO `project`( name,description,date,image) VALUES ('$name1','$description','$date','$name')";die;
  move_uploaded_file($temp,"../images/project/".$name);

$query=$con->query("INSERT INTO `project`( name,description,date,image) VALUES ('$name1','$description','$date','$name')");
if($query){
echo "<script>alert('update PROJECT Sucessfully');window.location.href='admin_PROJECT.php'; </script>";
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
<style type="text/css">
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}



.pagination ul {
    display: inline-block;
    *display: inline;
    margin-bottom: 0;
    margin-left: 0;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    *zoom: 1;
    -webkit-box-shadow: 0 1px 2px rgb(0 0 0 / 5%);
    -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
    box-shadow: 0 1px 2px rgb(0 0 0 / 5%);
}
ol, ul {
    margin-top: 0;
    margin-bottom: 10px;
}
* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
user agent stylesheet
ul {
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
}


</style>


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
        <span class="dashboard">PROJECT</span>
      </div>
      
      <?php
      include('admin_right_side_login.php');
      ?>
    </nav>
  <!-- end top manu -->

<div class="home-content">

      <div class="sales-boxes">
                <div class="recent-sales box" style="width: 99%;text-align: center;">
                        <div class="title">PROJECT Update</div>
                        <br>
                       <div class="sales-details" >
                              
                             <table cellpadding="0" cellspacing="0" border="0">
    
							      <form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
							          <label for="name">W*H:1600*1024<br> size:600KB</label>
							          <input type="file" name="photo" id="photo"  required="required">
                        <label for="name"> Name:</label>
                        <input type="test" name="name1" id="name1"  required="required" placeholder="PROJECT NAME">
                        <label for="name"> Description:</label>
                        <input type="text" id="description" name="description" required="required" placeholder="Description 20 word's" >
                        <label for="birthday">DATE:</label>
                        <input type="date" id="date" name="date">
							          <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit1">
							      </form> 
							      <strong>SUBMIT HERE</strong>
							</table>
                
                        </div>
                 </div>
       </div>     






      <br>
      <div class="sales-boxes">
                <div class="recent-sales box" style="width: 99%;">
                        <div class="title">Display image</div>

                  <div class="table-responsive box">

                        
							    <form method="post" action="delete.php" >
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
                            
                            <thead>
						
                                <tr> 
                                   <th>ID</th>
                                   <th>FILE NAME</th>
                                   <th>Description</th>
                                   <th>Date</th>
                                   <th>IMAGE</th>
                                   <!-- <th>Download</th> -->
                                   <th>modify</th>
                                   <th>Remove</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                            							<?php 
                            							$query=mysqli_query($con," SELECT * FROM `project` ORDER BY `id` DESC")or die(mysqli_error($con));
                            							// echo 1;die;
                            							while($row=mysqli_fetch_array($query)){
                            							$id=$row['id'];
                            							$name=$row['name'];
                            							$date=$row['date'];
                            							?>
                                                          
										            <tr>
										
                                         <td><?php echo $row['id'] ?></td>
                                         <td><?php echo $row['name'] ?></td>
                                         <td><?php echo $row['description'] ?></td>
                                         <td><?php echo $row['date'] ?></td>
									                       <td><img src="../images/project/<?=$row['image']?>"style="width: 100px;"></td>
                                         <!-- <td><a href="../images/project/<?=$row['name'];?>" download title="click to download"><span class="glyphicon glyphicon-paperclip" style="font-size:20px; color:blue"></span></a></td> -->
                                         <!-- <td><a href="admin_PROJECT_modify.php?del=<?php echo $row['id'];?>" ><span class="glyphicon glyphicon-edit" style="font-size:20px; color:red;"></span></a></td> -->

               <td><button class="btn btn-warning" data-toggle="modal" type="button" data-target="#update_modal<?php echo $row['id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</button></td>
               
                                         <td><a href="admin_PROJECT_deleted.php?del=<?php echo $row['id'];?>" ><span class="glyphicon glyphicon-trash" style="font-size:20px; color:red;"></span></a></td>
                                          <?php 
include 'admin_PROJECT_modify.php';
                              } 
                                 
                                ?>
                                </tr>
                         
						         
                            </tbody>
                        </table>
						
                              <!-- admin_PROJECT_modify - Copy.php -->
                               
								
                 </div>
							
							

						  
                </div>
                 
                </div>
        </div>
       
</div>
  
  

  <?php
    include('admin_footer.php');
    ?>
