<?php

$user = $_POST['n'];
$password = $_POST['p'];

if($user == "synevo" && $password == 123)
{
    header("Location: date-synevo.html");
}
else
{
    echo"<center>";
  echo "<h1>Parola incorecta !!<h1/>";
  echo "<h1>Mai incearca !!<h1/>";
 echo "<center>";
}


?>