<?php
  require_once 'dbConnection.php';
  // require_once('dbConnection.php');
  if(ISSET($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $date= $_POST['date'];
    $description = $_POST['description'];
    echo "UPDATE `project` SET  `name`='$name',`date`='$date',`description`='$description' WHERE `id`='$id'";die;

    // mysqli_query($conn, "UPDATE `items` SET `name`='$name',`price`='$price',`description`='$description',`category`='$category' WHERE `id`='$id'") or die(mysqli_error());

    // header("location: admin_item_add.php");
  
$query=$con->query("UPDATE `items` SET `name`='$name',`price`='$price',`description`='$description',`category`='$category' WHERE `id`='$id'");
if($query){
header("location:admin_item_add.php");
}

  }
?>