<?php
  $NameServer= "localhost";
  $Username= "root";
  $password = "";
  $connect = new mysqli($NameServer,$Username,$password);
   if($connect->connect_error)
   {
       die($connect->connect_error);
   }
   else 
   {
       print "Succes connect server";
   }
?>