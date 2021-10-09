<?php
include("connect_db.php");
  
$text = $_POST['make1'];
  $sql = "INSERT INTO list1 ( text ) VALUES ('$text') ";
 if(mysqli_query($connect,$sql))
 {
   
    header("Location: home.php");
 }
else {
 die(mysqli_error($connect));
}
?>