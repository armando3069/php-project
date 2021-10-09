<?php
include("connect-db.php");

    $sql = "CREATE TABLE TestCovid
    (
    Nr INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Data VARCHAR(100) NOT NULL,
    Nume VARCHAR(100) NOT NULL,
    Prenume VARCHAR(100) NOT NULL,
    ID VARCHAR(100) NOT NULL,
    Locatia VARCHAR(100) NOT NULL,
    Email VARCHAR(100) NOT NULL UNIQUE
    )";

    if(mysqli_query($connect,$sql))
    {
      echo "Goo";
    }

    else{

        die(mysqli_error($connect));
    }
 ?>
