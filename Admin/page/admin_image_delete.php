
<?php
//echo 1;die;
extract($_REQUEST);
include('dbConnection.php');
//echo $del;die;
$sql=mysqli_query($con,"select * from upload where id='$del'");
$row=mysqli_fetch_array($sql);

unlink("../images/files/$row[name]");

mysqli_query($con,"delete from upload where id='$del'");
//echo $del;
echo "<script>alert('delete Sucessfully');window.location.href='admin_Image.php'; </script>";
 // header("Location:admin_Image.php");

?>