

<?php
    session_start();
    require_once('Admin/page/dbConnection.php');
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Dorang landing page.">
    <meta name="author" content="Devcrud">
    <title>NGO</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap + Dorang main styles -->
  <link rel="stylesheet" href="assets/css/NGO.css">
<!-- donate -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/style11.css">

    <!-- datatable -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

<!-- end donate -->


<style>  

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
/*end gallary*/
/*NAV DROPDOWN    background-color: #04AA6D;*/
.dropbtn {
  
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
/*  background-color: #f1f1f1;*/
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 991;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #111111;}

#blink {
            font-size: 20px;
            font-weight: bold;
            font-family: sans-serif;
        }

.blink {
  animation: 2s linear infinite condemned_blink_effect;
  font-weight: bold;
  color: #f00;
}

@keyframes condemned_blink_effect {
  0% {
    visibility: hidden;
  }
  50% {
    visibility: hidden;
  }
  100% {
    visibility: visible;
  }
}
/*donate */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 991; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 10%;
  top: 0;
  width: 80%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;
  background-color: #5e5353;
}
table, th, td {
  text-align: center;
  border: 1px solid black;
   color: black;
  

}
.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}


/*select donate payment*/
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  
  padding: 20px;
}
 

/*pdf*/



/*end donate*/
</style>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("input[name='chkPassPort']").click(function () {
            if ($("#chkYes").is(":checked")) {
                $("#Indian_Donors").show();
            } else {
                $("#Indian_Donors").hide();
            }
            if ($("#chkNo").is(":checked")) {
                    $("#NRI").show();
                } else {
                    $("#NRI").hide();
                }
        });
    });
</script>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">
    
  
<?php
include('assets/page/header.php');


?>

<!-- nav -->

    <div class="theme-selector">
        <a href="javascript:void(0)" class="spinner">
            <i class="ti-paint-bucket"></i>
        </a>
        <div class="body">
            <a href="javascript:void(0)" class="light"></a>
            <a href="javascript:void(0)" class="dark"></a>
             <a href="Admin/index.php"target="_blank" ><img src="assets/imgs/images.png" style="width: 20px;
    height: 20px;border-radius: 50%; "></a>
        </div>
    </div>  

    <!-- page header  check -->
    <header class="header">
        <div class="overlay" style="filter: blur(6px);"></div>
        <div class="header-content">
            <h1 class="header-title"><img src="assets/imgs/SUNDARBAN WELFARE TRUS NAME.png"></h1>
            <p class="header-subtitle" style="font-size: 20px;font-weight: bold;">।। সকলের তরে সকলে আমরা , প্রত্যেকে আমরা পরের তরে ।।</p>

            <button class="btn btn-theme-color modal-toggle"><i class="ti-control-play text-danger"></i> Watch Video</button>

        </div>
    </header><!-- end of page header -->

    <!-- modal check-->
    <div class="modalBox">
        <div class="modalBox-body">
            <iframe width="100%" height="450px" class="border-0" 
            
             src="https://www.youtube.com/embed/uI9B1_5oniU">

            </iframe>
        </div>          
    </div><!-- end of modal -->
       <!-- About Us check-->
        <div  id="About"class=" about-section">
                    <div class="col-md-10 col-lg-8 m-auto">
                        <h6 class="title mb-4">About Us</h6>
                         <p class="mb-5"><strong>SUNDARBAN WELFARE TRUST</strong> is a non-profit NGO established under The certificate of Admissibility Rule 43,W.B. Registration Rules 1962 of Public Trust Act. (Registration No: IV-190200044/2021). SUNDARBAN WELFARE TRUST was established by a team of social workers who are working in the field of health, education, sustainability, vocational training, empowering women and child  development. SUNDARBAN WELFARE TRUST works among migrants, poor and abused women, neglected children, senior citizens, school drop outs, Self Help  Groups, and awareness on various social, health and current issues. The underprivileged need to be given the appropriate opportunities and they need to be motivated. SUNDARBAN WELFARE TRUST works with a view to help the poor community through various welfare activities.</p>
                    </div>  
       
        <!-- row -->
                <div class="row">
                    <div class="card1">
                                  <img src="assets/imgs/NARAN JANA PASSPORT PIC.jpg" alt="John" style="width:300px ;height: 300px;" >
                                   <h1>NARAYAN JANA</h1>
                                  <p class="title">PRESIDENT </p>                             
                    </div>

                    <div class="card1">
                                  <img src="assets/imgs/bimal pp new.jpg" alt="John" style="width:300px ;height: 300px;" >
                                  <h1>BIMAL</h1>
                                  <h1>RANG</h1>
                                  
                                  <p class="title">SECRETORY</p>                            
                    </div>
                     <div class="card1">
                                  <img src="assets/imgs/dipu pass port.jpg" alt="John" style="width:300px ;height: 300px;" >
                                   <h1>DIPANKAR DAS</h1>
                                  <p class="title">TREASURAR</p>                             
                    </div>
                </div>

        <!-- end row -->
       </div>
        <!-- end About Us -->

    <!-- Gallery check-->
    <br>

<div  id="Gallery"class="gallery-section">
        <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">Gallery</h6>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
        </div>  
             
        <!-- row -->
       
       
        <!-- new gallary -->
        
        <!-- The four columns -->
              
                <div class="row mb-5">
                         <?php 
              $query=mysqli_query($con," SELECT * FROM `upload` ORDER BY `id` DESC LIMIT 4")or die(mysqli_error($con));
              
              while($row=mysqli_fetch_array($query)){
              $id=$row['id'];
              $name=$row['name'];
              $date=$row['date'];
              ?>
                      <div class="column">
                        <img src="Admin/images/files/<?=$row['name']?>" alt="<?php echo $row['description'] ?>" style="width:100%;height: 250px;" onclick="myFunction(this);">
                      </div>
                   <?php } ?>   
                </div>
               
                <div class="container">
                  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                  <img id="expandedImg" style="width:100%">
                  <div id="imgtext"></div>
                </div>
                <!-- end new gallary -->
               
                

        <a href="#" >Load More <i class="ti-angle-double-right angle"></i></a>

        <!-- end  -->
        
               <!--end Gallery -->
              <!--Mission and Vision  -->
        
  <div  id="MAV"class=" DONATE-section">
                  <div class="overlay"></div>
        <div class="col-md-10 col-lg-8 m-auto">
                  <h6 class="title mb-4">Mission and Vision</h6>
		            
                      <!-- check -->
                       <div class="row">
                               
                                <div class="col-md-8">
                                	<h5> VISION</h5>
                                    <p style="text-align: justify;text-justify: inter-word;"> Work as a catalyst in bringing sustainable change in the lives of underprivileged children, youth and women, with a life-cycle approach of development. Enable the civil society across the world to engage proactively in the change process through the philosophy of civic driven change. Adopt highest standards of governance to emerge as a leading knowledge and technology driven, innovative and scalable international development organization.</p>
                                </div> 
                                 <div class="col-md-4">
                                    <img src="assets/imgs/vission.jpg" alt="Italian Trulli" style="width: 100%;height: 100%;">
                                </div> 
                                                  
                            
                    </div>  
                     <br>
                     <div class="row ">
                                <div class="col-md-4">
                                	<img src="assets/imgs/Capture copy.jpg" alt="Italian Trulli" style="width: 100%;height: 100%;">
                                </div> 
                                <div class="col-md-8">
                                    
                                    <h5> MISSION</h5>
                                    <p style="text-align: justify;text-justify: inter-word;">Rebuild the human dignity of the poor and marginalized through an empowerment process, Education, food security, Health Care, employment to unemployed and create opportunities for a sustainable society. Our mission is the bringing of educational opportunity and to promote health and social rights to those to whom such opportunities have previously been denied to poverty family circumstances or oppression.</p>
                                </div> 
                       </div>
		    </div>  
 <!-- end of row -->

  </div>
</div>
                 <!--end Mission and Vision  -->
 <!-- PROJECT check-->
<div  id="our_courses"class="our_course">
                    <div class="col-md-10 col-lg-8 m-auto">
                        <h6 class="title mb-4">PROJECT</h6>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    </div>
                <!-- row mb-5-->
                <div class="row ">
                        <div class="col-md-4">
                            <a href="javascript:void(0)" class="card">
                                <img src="assets/imgs/blog-1.jpg" class="card-img" alt="">
                                <div class="card-body">
                                    <h6 class="card-subtitle">30 June, 2018</h6>
                                    <h3 class="card-title">Eiusmod
                                    tempor</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>                  
                            </a>
                        </div>  

                        <div class="col-md-4">
                            <a href="javascript:void(0)" class="card">
                                <img src="assets/imgs/blog-2.jpg" class="card-img" alt="">
                                <div class="card-body">
                                    <h6 class="card-subtitle">29 June, 2018</h6>
                                    <h3 class="card-title">Ut minim veniam</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>                  
                            </a>
                        </div>  
                        <div class="col-md-4">
                            <a href="javascript:void(0)" class="card">
                                <img src="assets/imgs/blog-1.jpg" class="card-img" alt="">
                                <div class="card-body">
                                    <h6 class="card-subtitle">30 June, 2018</h6>
                                    <h3 class="card-title">Eiusmod
                                    tempor</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>                  
                            </a>
                        </div> 
                 </div>
                    <a href="#">All Posts <i class="ti-angle-double-right angle"></i></a>





                 <!--end row  -->
</div> 

                 <!-- end PROJECT -->

                 <!-- DONATE  check -->

<div  id="DONATE" class=" DONATE-section">
            <div class="overlay"></div>
            <div class="col-md-10 col-lg-8 m-auto">
            <h6 class="title mb-4">DONATE</h6>
            <p class="mb-5">SUNDARBAN WELFARE TRUST  is a non-profit organization. Your donation is eligible for tax exemption. You can also donate by sending your cheque/draft in favour of ‘SUNDARBAN WELFARE TRUST’ to: Office Narayanpur,Namkhana,kakdwip, Sundarban - 743357</p>
            </div>
             <!-- row -->
      <div class="row m-auto">
          <div class="col-md-6 m-auto " style="box-shadow: 0 1px 17px 0 rgb(0 0 0 / 60%);max-width: 450px;" >
                          <!-- <a href="javascript:void(0)" class="card">  -->
                                




                        <section class="swiper mySwiper">

                        <div class="swiper-wrapper">
                          <!--SELECT * FROM `donate` WHERE `status`='1' ORDER BY `id` DESC  -->
                               <?php 
                                $query=mysqli_query($con,"SELECT * FROM `donate` WHERE `status`='1' ORDER BY `id` DESC")or die(mysqli_error($con));
                                
                                while($row=mysqli_fetch_array($query)){
                                $id=$row['id'];
                                $name=$row['name'];
                                $date=$row['date'];
                                ?>
                                <div class="card10 swiper-slide">
                                      
                                    <form action="assets/page/pdf_show.php" method="post" target="_blank">
                                      <div class="card__content">
                                        <input type="text" value="<?php echo $row['id']; ?>" name="reg_id" hidden>
                                        <span class="card-title"><h3><?php echo $row['name']; ?></h3></span>
                                        <span class="card-subtitle"><p>Address:-<?php echo $row['address'].'<br />'. $row['city'] .'<br />'.$row['state'].'<br /> kol-'.$row['pin']; ?></p></span>
                                        
                                        <input type="text" id="mobile" name="mobile" placeholder="Enter your mobile No." style="padding: 5px;">
                                        <button class="card__btn" name="submit" value="Submit" style="padding: 1px;">Downlord PDF</button>
                                      </div>
                                    </form>
                                   <br/>
                                    <p>Not me. We try to be good together Let's move forward to make the impossible possible</p>
                                    <p>( আমি নয় আমরা, একসাথে ভালো থাকার প্রয়াস করি |
                                        আসুন এগিয়ে যাই অসম্ভবকে সম্ভব করার লক্ষ্যে ||  )</p>
                                    
                                    
                                </div>
                                  <?php } ?> 
                               
                          </div>

                              
                           </section> 



                               
                          <button id="myBtn">Open Modal</button>

      				<!-- The Modal -->
      				<div id="myModal" class="modal">

      						<!-- Modal content -->
      						<div class="modal-content">
      										    <div class="modal-header">
      										    	<h3 class="card-title">DONAER NAME LIST</h3>
      										      <span class="close">&times;</span>
      										      
      										    </div>
      									<div class="modal-body">
													<table id="example" class="display" style="width:100%">
													        <thead>
													            <tr>
                                                                    <th>Sl. No.</th>
													                <th>Name</th>
													                <th>Address</th>
													                
													               
													            </tr>
													        </thead>
													        <tbody>
													        	               <?php 
																			    $query=mysqli_query($con," SELECT * FROM `donate`ORDER BY `id` DESC")or die(mysqli_error($con));
																			    $cnt=1;
																			    while($row=mysqli_fetch_array($query)){
																			    
																			    ?>
															            <tr>
                                                                            <td><?php echo $cnt;?></td>
															                <td><?php echo $row['name']; ?></td>
															                <td><?php echo $row['address'].'<br />'. $row['city'] .'<br />'.$row['state'].'<br /> kol-'.$row['pin']; ?></td>
															                
															               
															            </tr>
															                      <?php
                                                                                $cnt=1+$cnt;
                                                                                   } ?>													             
													        </tbody>													       
													    </table>											
										    </div>
										    <div class="modal-footer">
										     <!--  <h3>Modal Footer</h3> -->
										    </div>
									</div>

							</div>
                          <!-- </a> -->
          </div>  
           <div class="col-md-6 m-auto " style="box-shadow: 0 1px 17px 0 rgb(0 0 0 / 60%);max-width: 450px;" >
                        <!-- <div class="col-md-4 card1" > -->
                            <h3 class="blink card-title" style="">DONATE</h3> 
                           
                          <label for="chkYes">
                              <input type="radio" id="chkYes" name="chkPassPort" checked/>
                              Indian Donors
                          </label>
                          <label for="chkNo">
                              <input type="radio" id="chkNo" name="chkPassPort" />
                              NRI
                          </label>
                          <hr />
                          <p class="mb-5"><?php echo $_SESSION['payment_id'];
                        unset($_SESSION['payment_id']);
                        ?></p>

                          <!-- style="display: none" -->
            <div id="Indian_Donors" >
                        <form action="assets/page/pay/pay.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
                          <div class="row">
                          <div class="col-6">
                            <label for="state">PRICE</label>
                            <input type="text" id="price" name="price" placeholder="1000"required>
                          </div>
                          <div class="col-6">
                            <label for="zip">PAN</label>
                            <input type="text" id="pan" name="pan" onkeyup="GetDetail(this.value)" placeholder="ABCD123A" required>
                          </div>
                        </div>
                        <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                        <input type="text" id="name" name="name" placeholder="John M. Doe" required><br>
                        <label for="email"><i class="fa fa-envelope"></i> Email</label>
                        <input type="text" id="email" name="email" placeholder="john@example.com"required><br>
                        <label for="mobile"><i class="fa fa-mobile"></i> Mobile</label>
                        <input type="text" id="phone" name="phone" maxlength="10"  pattern="[0-9]{10}" placeholder="111111111"required><br>
                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="address" name="address" placeholder="542 W. 15th Street11"><br>
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="kolkata11"required><br>

                        <div class="row">
                          <div class="col-6">
                            <label for="state">State</label>
                            <input type="text" id="state" name="state" placeholder="NY"required>
                          </div>
                          <div class="col-6">
                            <label for="zip">Zip</label>
                            <input type="text" id="zip" name="zip" placeholder="10001"required>
                          </div>
                        </div>
                         
                        <input type="submit" name="submit11" value="PROCESS" style="text-align: center;">
                         </form>
                      
            </div>
                    <div id="NRI" style="display: none">
                                 <form action="/action_page.php">
                                <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                <input type="text" id="email" name="email" placeholder="john@example.com">
                                <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
                                <label for="city"><i class="fa fa-institution"></i> country</label>
                                <input type="text" id="city" name="city" placeholder="New York">
                                <input type="submit" value="PROCESS" style="text-align: center;">
                                 </form>
                    </div>
       </div>   
      <!-- end row -->        
    </div>       
                 <!-- end DONATE -->
</div>    
 </div>


<!-- Documents -->
        <div  id="DOCUMENT" class="our_course">
                    <div class="col-md-10 col-lg-8 m-auto">
                        <h6 class="title mb-4">Documents</h6>
                        <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                    </div>
                <!-- row mb-5-->
                <div class="row ">
                     <div class="col-md-5 col-lg-4 m-auto ">
                             <h4 class="card-title"><u>TRUST DEED </u></h4>
                            <p>Open a PDF file:- <a href="assets/pdf/DEED OF TRUST 16 PAGE.pdf">TRUST DEED</a>.</p>
                    </div>
                </div>
                <div class="row ">
                  	 <div class="col-md-5 col-lg-4 m-auto ">
                              <h3 class="card-title"><u>FCI CERTIFICATE </u></h3>
                            <p>Open a PDF file:- <a href="assets/pdf/DEED OF TRUST 16 PAGE.pdf">TRUST DEED</a>.</p>
                            <h3 class="card-title"><u>PAN CARD </u></h3>
                            <p>Open a PDF file:- <a href="assets/pdf/DEED OF TRUST 16 PAGE.pdf">TRUST DEED</a>.</p>
                            <h3 class="card-title"><u>blank cheque</u></h3>
                            <p>Open a PDF file:- <a href="assets/pdf/DEED OF TRUST 16 PAGE.pdf">TRUST DEED</a>.</p>
                     </div>
                     <div class="col-md-5 col-lg-4 m-auto ">
                             <h3 class="card-title"><u>80G CERTIFICATE </u></h3>
                            <p>Open a PDF file:- <a href="assets/pdf/DEED OF TRUST 16 PAGE.pdf">TRUST DEED</a>.</p>
                            <h3 class="card-title"><u>12A CERTIFICATE </u></h3>
                            <p>Open a PDF file:- <a href="assets/pdf/DEED OF TRUST 16 PAGE.pdf">TRUST DEED</a>.</p>
                            <h3 class="card-title"><u>CSI CERTIFICATE </u></h3>
                            <p>Open a PDF file:- <a href="assets/pdf/DEED OF TRUST 16 PAGE.pdf">TRUST DEED</a>.</p>
                     </div>

                </div>
                



                 <!--end row  -->
        </div> 
                 <!-- end Documents -->

           

 <!-- Contact US  check-->
 <div id="Contact" class="contact-section">
        <div class="overlay"></div>
        <!-- container -->
    <!--footer & pre footer -->
    <div  id="Contact"class="contact-section">
       <div class="overlay"></div>
          <div class="col-md-10 col-lg-8 m-auto ">
                        <h6 class="title mb-4">Contact US</h6>
                        
                     
                <p class="mb-5"><?php echo $_SESSION['fname2'];
                        unset($_SESSION['fname2']);
                        ?></p>
                 <form action="assets/page/contact_action.php" name="myForm" method="post" class="w3_form_post" onsubmit="return validateForm()" enctype="multipart/form-data">
                    <input type="text" size="50" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required >
                    <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile" pattern="[0-9]{10}" maxlength="10" required>
                    <textarea name="comment" id="comment" name="comment" rows="4"   class="form-control" placeholder="Write Something"></textarea>
                    <input type="submit"  name="submit" value="Send Message" class="form-control">
                    
                </form>
          </div>
          <!-- End Contact Us -->
            <!-- footer -->
            <footer class="footer">
                <p class="infos">&copy; <script>document.write(new Date().getFullYear())</script>, Made with <i class="ti-heart text-danger"></i> by </p>       
                <span >|</span>  
                <div class="links">
                    <a href="#"><i class="fa fa-envelope"></i></a>
                    <span>|</span>
                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                    <span>|</span>
                     <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                </div>

                <span>|</span>
                <div class="links">
                    <a href="#">Registered Office Address:</a>
                   <p>SUNDARBAN WELFARE TRUST </p>
                   NARAYANPUR-NAMKHANA-SOUTH 24 PARGANAS,<br> 
                   PIN-7000000,
                </div>
            </footer><!-- end of footer -->

    </div><!-- end of container -->
 </div><!-- end of pre footer -->
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Dorang js -->
    <script src="assets/js/NGO.js"></script>
    <!-- DONATE -->


<!-- Swiper JS -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
 -->
  <!-- Initialize Swiper -->
 <!--  <script src="script.js"></script> -->

 <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script src="assets/js/script11.js"></script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

<!--end DONATE -->
<!-- gallary -->
<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
<script type="text/javascript">
        var blink = 
            document.getElementById('blink');
  
        setInterval(function () {
            blink.style.opacity = 
            (blink.style.opacity == 0 ? 1 : 0);
        }, 1000); 
    </script>
<!-- end gallary -->

<!-- data table -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});

</script>
<!-- pdf -->

<script>
  
        // onkeyup event will occur when the user 
        // release the key and calls the function
        // assigned to this event
        function GetDetail(str) {
          //alert 1;
            if (str.length == 0) {
                document.getElementById("name").value = "";
                document.getElementById("email").value = "";
                return;
            }
            else {
  
                // Creates a new XMLHttpRequest object
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function () {
  
                    // Defines a function to be called when
                    // the readyState property changes
                    if (this.readyState == 4 && 
                            this.status == 200) {
                          
                        // Typical action to be performed
                        // when the document is ready
                        var myObj = JSON.parse(this.responseText);
  
                        // Returns the response data as a
                        // string and store this array in
                        // a variable assign the value 
                        // received to name input field
                          
                        document.getElementById("name").value = myObj[0];
                        // email input field
                        document.getElementById("email").value = myObj[1];
                        document.getElementById("phone").value = myObj[2];
                        document.getElementById("address").value = myObj[3];
                        document.getElementById("city").value = myObj[5];
                        document.getElementById("state").value = myObj[6];
                        document.getElementById("zip").value = myObj[4];




                    }
                };
  
                // xhttp.open("GET", "filename", true);
                xmlhttp.open("GET", "abc.php?pan=" + str, true);
                  
                // Sends the request to the server
                xmlhttp.send();
            }
        }
    </script>


</body>
</html>
