<?php
 include("connect_db.php");
  if(isset($_GET['id']))
  {
 $id = $_GET['id'];
 $sql = "DELETE FROM list1 WHERE id = $id ";
 
  if(mysqli_query($connect,$sql))
  {
      header("Location: home.php");
  }
  else
  {
      die(mysqli_error($connect));
  }
}
?>