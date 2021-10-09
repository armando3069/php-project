<?php

include("connect-db.php");
session_start();


$nume = $_POST['Nume'];
$prenume = $_POST['Prenume'];
$id = $_POST['id'];
$email = $_POST['email'];
$location = $_POST['locatia'];
$data = date("d.m.Y / H:i");
 
echo $name;

 $sql = "INSERT INTO Test1(Dat,Nume,Prenume,ID,Locatia,omail) VALUES ('$data','$nume','$prenume','$id','$location','$email')";
 if(mysqli_query($connect,$sql))
 {
     header("Location: synevo.html");
     
 }

 else
 {
    die(mysqli_error($connect));
 }


?>

