<?php
$connect = mysqli_connect("localhost","root","");
if($connect==false)
{
    die(mysqli_connect_error($connect));
}

  $sql = "CREATE DATABASE Demo3069";
  if(mysqli_query($connect,$sql))
  {
      echo "A fost creat cu succes !";
  }
else
{
    die(mysqli_error($connect));
}
 mysqli_close($connect);
?>