<?php
    session_start();
    require_once('dbconnection.php');
    include('admin_sidenav.php');
    
?>
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
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="../js/DT_bootstrap.js"></script>
 <!-- top manu -->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Donate</span>
      </div>
      
     <?php
      include('admin_right_side_login.php');
      ?>
    </nav>
  <!-- end top manu -->

<div class="home-content">

      <div class="sales-boxes">
              <div class="recent-sales box">
                <div class="title" style="text-align: center;">Donate Forms</div>
                <div class="sales-details">
                  <form action="admin_donet_action.php" name="myForm" method="post" class="w3_form_post" onsubmit="return validateForm()" enctype="multipart/form-data">
                      <label for="name"> Name:</label>
                      <input type="text" id="name" name="name"><br><br>
                      <label for="email">Email Address:</label>
                      <input type="text" id="email" name="email"><br><br>
                      <label for="mobile">Mobile Number:</label>
                      <input type="text" id="mobile" name="mobile"><br><br>
                      <label for="address">Address:</label>
                      <input type="text" id="address" name="address"><br><br>
                      <label for="pin">Pin Code:</label>
                      <input type="text" id="pin" name="pin"><br><br>
                      <label for="City">City:</label>
                      <input type="text" id="city" name="city"><br><br>
                      <label for="State">State:</label>
                      <input type="text" id="state" name="state"><br><br>
                      <button type="submit" name="submit1" value="Submit" class="btn btn-default" id="login">Login</button>
                    </form>
                    
                
               
                </div>
               
              </div>
              <div class="top-sales box">
                <div class="title">QR code</div>
                <div class="sales-details">
                  <img src="../images/download.png" alt="Flowers in Chania" width="200" height="200">
                
                </div>
              </div>
      </div>
      <br>
      <div class="sales-boxes">
                <div class="recent-sales box" style="width: 99%;">
                        <div class="title">list of DONETs</div>
                       <div class="sales-details">
                         <table cellpadding="0" cellspacing="0" border="0" class="table table-condensed" id="example">
                            
                            <thead>
            
                                <tr> 
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>address</th>
                                    <th>pin</th>
                                    <th>city</th>
                                    <th>state</th>
                                    <th>date</th>
                                    <th>Amount</th>
                                    <!-- <th>set display</th> -->
                                    
                                    <th style="font-size:20px; color:red;">set display </th>
                                    <th style="font-size:20px; color:BlUE;">update </th>
                                    <th>downlord</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query=mysqli_query($con,"SELECT * FROM `donate`");
                                // echo 1;die;
                                while($row=mysqli_fetch_array($query)){
                                // $id=$row['id'];
                                //$name=$row['name'];
                                //$lname=$row['lname'];
                                //echo $lname;die;
                              
                              ?>
                               <form method="post" action="admin_donet_update.php?del=<?php echo $row['id'];?>" >
                                <tr>
                                  <td><?php echo $row['id']; ?></td>
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['email']; ?></td>
                                  <td><?php echo $row['mobile']; ?></td>
                                  <td><?php echo $row['address']; ?></td>
                                  <td><?php echo $row['pin']; ?></td>
                                  <td><?php echo $row['city']; ?></td>
                                  <td><?php echo $row['state']; ?></td>
                                  <td><?php echo $row['date']; ?></td>
                                  <td><?php echo $row['Amount']; ?></td>
                                  <!-- <td><a href="pdf/pdf_show.php?pdf=<?=$row['id'];?>" download title="click to download"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a></td> -->
                                  <td><input type="checkbox" id="disp" name="disp" value="1" <?php if($row['status']==1){?>checked <?php } ?> ></td> 
                                  
                                  <!-- <td><a href="admin_donet_update.php?del=<?php echo $row['id'];?>& <?php echo $name;?>"><i class="fa fa-refresh" id="a" name="a" style="font-size:40px;color:blue"></i></a></td> -->
                                  <td><button type="submit" name="submit1" value="Submit" class="btn btn-default" id="login">Login</button></td>
                                  <!-- <a href="admin_donet_update.php?del=<?php echo $row['id'];?>" >" > -->
                                   <!--  <td><a href="pdf/pdf_show.php?pdf=<?=$row['id'];?>" download title="click to download">d</a></td> -->
                                
                              </form>
                              <td><form action="pdf/pdf_show.php" method="post" target="_blank">
                                  
                                        <input type="text" value="<?php echo $row['id']; ?>" name="reg_id" hidden>
                                  <button class="card__btn" name="submit" value="Submit"><i class="fa fa-download" style="background-color: DodgerBlue; font-size: 20px;"></i></button>
                                    
                                    </form>
                                      </td>
                              </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                       </div>
                 
                </div>
        </div>
       
</div>
  
  

  <?php
    include('admin_footer.php');
    ?>
