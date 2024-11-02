

<?php
//echo 1;die;
extract($_REQUEST);
include('dbConnection.php');
//echo $del;die;
//echo "select * from project where id='$del'";die;
$sql=mysqli_query($con,"DELETE FROM `project` where id='$del'");
$row=mysqli_fetch_array($sql);

unlink("../images/files/$row[name]");

mysqli_query($con,"delete from upload where id='$del'");
//echo $del;
echo "<script>alert('delete Sucessfully');window.location.href='admin_PROJECT.php'; </script>";
 // header("Location:admin_Image.php");

?>