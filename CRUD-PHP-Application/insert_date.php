 <?php
    include("connect_db.php");
     
  $Nume = $_POST['name1'];
  $Prenume = $_POST['surname'];
  $Parola = $_POST['parola'];


       $sql ="INSERT INTO persoane(Nume,Prenume,Parola)
       VALUES ('$Nume','$Prenume','$Parola')";

     if(mysqli_query($connect,$sql))
     {
        
         header("Location: home.php");
     }
else
{
  die (mysqli_error($connect));
}
    


