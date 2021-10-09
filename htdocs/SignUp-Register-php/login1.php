<html>
    <head>
        <title>Procesing</title>
    </head>
    <body style="background-color: #63738a;">
        <?php
          $link= mysqli_connect("localhost","root","","register");

          if($link == false)
          {
              echo "Error conection DateBase".mysqli_connect_error($link);
          }
            //// Securizarea datelor
          $Nume = mysqli_real_escape_string($link, $_REQUEST['Nume']);
          $Prenume = mysqli_real_escape_string($link, $_REQUEST['Prenume']);
          $ID = mysqli_real_escape_string($link, $_REQUEST['ID']);
          $Parola = mysqli_real_escape_string($link,$_REQUEST['Parola']);
           
          $sql = "SELECT * FROM login
           WHERE Nume = '$Nume' and Parola = '$Parola' ";

         if($result = mysqli_query($link, $sql))
         {
            $row = mysqli_fetch_array($result);
           
            if($row['Nume'] == $Nume && $row['Parola'] == $Parola &&
             $row['ID']== $ID && $row['Prenume'] == $Prenume)
            {
                echo"<center>";
                  echo "Esti conectat ! !";
                echo "<center/>";
                //include_once 'cautare-account.php';
                include_once 'armando.html';
                
            }
            else
            {
                echo"<center>";
                 echo "Incerca din Nou !";
                echo "<center/>";
                die("");
            }

         }
          
        
        ?>
    </body>
</html>