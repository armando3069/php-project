<?php
  include("connect_db.php");

 $sql = "CREATE TABLE persoane (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Nume VARCHAR(30) NOT NULL,
    Prenume VARCHAR(30) NOT NULL,
    Parola INT(20) NOT NULL 
)";

    if(mysqli_query($connect,$sql))
    {
        print "succes table creat";
    }
    else
    {
    die (mysqli_error($connect));
    }
?>