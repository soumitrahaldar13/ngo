<?php
    session_start();
    require_once('dbConnection.php');
    include('admin_sidenav.php');

        
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
        <span class="dashboard">Contact US</span>
      </div>
      
      <?php
      include('admin_right_side_login.php');
      ?>
    </nav>
  <!-- end top manu -->

<div class="home-content">

     <!--  <div class="sales-boxes">
                <div class="recent-sales box" style="width: 99%;text-align: center;">
                        <div class="title">Upload Image</div>
                        <br>
                       <div class="sales-details" >
                              
                             <table cellpadding="0" cellspacing="0" border="0">
    
                    <form enctype="multipart/form-data"  action="" id="wb_Form1" name="form" method="post">
                      
                        <input type="file" name="photo" id="photo"  required="required">
                        <input type="text" id="description" name="description" required="required">
                        <input type="submit" class="btn btn-danger" value="SUBMIT" name="submit1">
                    </form> 
                    <strong>SUBMIT HERE</strong>
              </table>
                
                        </div>
                 </div>
       </div>     
 -->





      <br>
      <div class="sales-boxes">
                <div class="recent-sales box" style="width: 99%;">
                        <div class="title">Display image</div>

                  <div class="table-responsive box">

                        
                  
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
                            
                            <thead>
            
                                <tr> 
                                   <th>ID</th>
                                   <th>NAME</th>
                                   <th>email</th>
                                   <th>Mobile</th>
                                   <th>Message</th>
                                   <th>Date</th>
                                                                    
                                   <th>done to </th>
                                   <th>Description</th>
                                   <th>Update</th>
                                </tr>
                            </thead>
                            <tbody>
                                          <?php 
                                          $query=mysqli_query($con," SELECT * FROM `inquiry` ORDER BY `id` DESC")or die(mysqli_error($con));
                                          // echo 1;die;
                                          while($row=mysqli_fetch_array($query)){
                                          $id=$row['id'];
                                          $name=$row['name'];
                                          $date=$row['date'];
                                          ?>
                                          <!-- ?del=<?php echo $row['id'];?>" >-->
                                  <!--  <form method="post" action="admin_contact_us_action.php?id=<?php echo $row['id'];?>"> -->
                                   <!-- <form method="post" action="admin_contact_us_action.php?con=<?php echo $row['id'];?>" >  -->                 
                                <tr>                    
                                          <td><?php echo $row['id'] ?></td>
                                         <td><?php echo $row['name'] ?></td>
                                         <td><?php echo $row['email'] ?></td>
                                         <td><?php echo $row['mobile'] ?></td>
                                         <td><?php echo $row['comment'] ?></td>
                                         <td><?php echo $row['date'] ?></td>
                                         <td><input type="checkbox" id="upd" name="upd" value="1" <?php if($row['status']==1){?>checked <?php } ?> ></td>  
                                        <td><?php echo $row['description'] ?></td>

                                         <td><a href="admin_contact_us_action.php?cont=<?php echo $row['id'];?>" ><span class="glyphicon glyphicon-edit" style="font-size:20px; color:red;"></span></a></td>
                                         
                                         <!-- <button type="submit" name="submit" value="submit" class="btn btn-default">Update</button> -->
                                </tr>
                          <!-- </form> -->
                                
                      <?php } ?>
                            </tbody>
                        </table>
            
                              
                             
                
                 </div>
              
              

              
                </div>
                 
                </div>
        </div>
       
</div>
  
  

  <?php
    include('admin_footer.php');
    ?>
