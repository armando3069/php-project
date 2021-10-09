<?php

 include("connect_db.php");

    if(isset($_GET['id']))
    {
       $id = $_GET['id'];
$sql = "DELETE FROM persoane WHERE id=$id";

if (mysqli_query($connect, $sql)) {
  header("Location:home.php");
} 
else
 {
  echo "Error deleting record: " . mysqli_error($connect);
}
    }
    
?>