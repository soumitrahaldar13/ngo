<!DOCTYPE html>
<?php
session_start();
    require_once('dbconnection.php');
    ?>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> SUNDARBAN WELFARE TRUST </title>
    <link rel="stylesheet" href="../css/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <!-- side bar  -->
                  <div class="sidebar">
                    <div class="logo-details">
                      <!-- <i class='bx bxl-c-plus-plus'></i> -->
                      <i><img src="../../assets/imgs/SUNDARBAN WELFARE TRUS copy.png" style="width: 50px;"></i>
                      <span class="logo_name">SUNDARBAN WELFARE TRUST</span>

                    </div>

                      <ul class="nav-links">
                        <li>
                          <a href="admin_Dashboard.php" class="active">
                            <i class='bx bx-grid-alt' ></i>
                            <span class="links_name">Dashboard</span>
                          </a>
                        </li>
                        <li>
                          <a href="admin_Image.php" class="active">
                            <i class='bx bx-image-alt' ></i>
                            <span class="links_name">Image</span>
                          </a>
                        </li>
                        
                        <li>
                          <a href="admin_PROJECT.php" class="active">
                            <i class='bx bx-grid-alt' ></i>
                            <span class="links_name">PROJECT</span>
                          </a>
                        </li>
                        <li>
                          <a href="admin_donet.php" class="active">
                            <i class='bx bx-donate-heart' ></i>
                            <span class="links_name">DONATE</span>
                          </a>
                        </li>
                        <li>
                          <a href="admin_contact_us.php" class="active">
                            <i class='bx bx-donate-heart' ></i>
                            <span class="links_name">Contact US</span>
                          </a>
                        </li>
                        
                        <li class="log_out">
                          <a href="logout.php">
                            <i class='bx bx-log-out'></i>
                            <span class="links_name">Log out</span>
                          </a>
                        </li>
                      </ul>
                  </div>
  <!-- end side bars -->
 