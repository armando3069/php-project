<?php
 $serever = "localhost";
 $username = "root";
 $password = "";
 $datebase = "Loflame";
 $connect = mysqli_connect($serever,$username,$password);
 if($connect== false)
 {
     die(mysqli_error($connect));
 }
 

?>