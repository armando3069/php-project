<?php

 include("connect-datebase.php");
 session_start();

 $nume = $_POST['nume'];
 $prenume = $_POST['prenume'];
 $varsta = $_POST['varsta'];
 $parola = $_POST['parola'];
 $_SESSION['name']= $nume;

sleep(2);
  header("Location: date-signup.php");
  
//protejare de SQL Injection
 $fotografie = mysqli_real_escape_string($connect,$_POST['file']);
 $descriere = mysqli_real_escape_string($connect,$_POST['des']);
 $hobby = mysqli_real_escape_string($connect,$_POST['hobby']);
 $email = mysqli_real_escape_string($connect,$_POST['email']);
 $telefon = mysqli_real_escape_string($connect,$_POST['tel']);
 $Sex = mysqli_real_escape_string($connect,$_POST['sex']);

 $nume = mysqli_real_escape_string($connect,$_POST['nume']);
 $prenume = mysqli_real_escape_string($connect,$_POST['prenume']);
 $varsta = mysqli_real_escape_string($connect,$_POST['varsta']);
 $parola = mysqli_real_escape_string($connect,$_POST['parola']);


 

?>
