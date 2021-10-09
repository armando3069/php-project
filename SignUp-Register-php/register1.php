<html>
    <head>
        <title>Procesing</title>
    </head>
    <body style="background-color: #63738a;">
        <?php
          $link= mysqli_connect("localhost","root","","register");// conencteaza un DB

          if($link == false)
          {
              echo "Error conection DateBase".mysqli_connect_error($link);
          }
          ///Verifica conexiunea

          $Nume = mysqli_real_escape_string($link, $_REQUEST['Nume']);
          $Prenume = mysqli_real_escape_string($link, $_REQUEST['Prenume']);
          $ID = mysqli_real_escape_string($link, $_REQUEST['ID']);
          $Varsta = mysqli_real_escape_string($link, $_REQUEST['Varsta']);
          $Parola = mysqli_real_escape_string($link,$_REQUEST['Parola']);

          $sql = "SELECT * FROM login
           WHERE Nume = '$Nume' and Prenume = '$Prenume' ";

         if($result = mysqli_query($link, $sql))
         {
            $row = mysqli_fetch_array($result);
           
            if($row['Nume'] == $Nume && $row['Prenume'] == $Prenume)
            {
                echo"<center>";
                echo "<h1>Exista acest utilizator : <h1/>";
                echo "Ai deja un cont existent ? ";
                echo '<a href="login.html">Loghează-te</a>';
                echo  "<br>";
                echo "<img src = 'https://static.thenounproject.com/png/219377-200.png'/> ";
                echo "<br>";
                echo "<center/>";
                die("");
            }
            else
            {
              echo "continue ...";
            }

         }

    
          
          $sql = "INSERT INTO  login(Nume,Prenume,ID,Varsta,Parola) VALUES 
          ('$Nume','$Prenume','$ID','$Varsta','$Parola') ";

          if(mysqli_query($link,$sql))
          {
            echo  "<center>";
              echo "<h1> Succesfull !!!<h1/> ";
                 echo"&nbsp";
                  echo"&nbsp" ;
              echo "<img src ='https://www.seekpng.com/png/full/72-722839_success-save-success-png-icon.png' width='300' height='300'\>";
              echo "<center/>";
          }
          else {
             echo "Error : ".mysqli_error($link);
          }
        
        ?>
    </body>
</html>