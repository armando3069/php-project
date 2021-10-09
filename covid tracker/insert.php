<?php

include("connect-db.php");
session_start();

$vaccin = $_SESSION['vac'];

$nume = $_POST['Nume'];
$prenume = $_POST['Prenume'];
$id = $_POST['id'];
$email = $_POST['email'];
$location = $_POST['locatia'];
$data = date("d.m.Y / H:i");
 
echo $name;

 $sql = "INSERT INTO Test34(Dat,Nume,Prenume,ID,Locatia,omail,vaccin) VALUES ('$data','$nume','$prenume','$id','$location','$email','$vaccin')";
 if(mysqli_query($connect,$sql))
 {
     header("Location: synevo.html");
     
 }

 else
 {
    die(mysqli_error($connect));
 }

?>