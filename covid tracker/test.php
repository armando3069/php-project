<html>
    <head>

        <meta charset="UTF-8">
        <title></title>

        <style>

body
{
    color: darkblue;
    background: #fbfcf9;
    font-family: "Patua One", sans-serif;
    }

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

 th {
    background-color: red;
  border: 3px solid black;
  text-align: left;
  padding: 8px;
}
td {
  border: 3px solid black;
  text-align: left;
  padding: 8px;
}

}
</style>
    </head>
    <body>
        
   
<?php

require "connect-db.php";

$sql = "SELECT * FROM test1 LIMIT 100";
if($result = mysqli_query($connect, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Nr</th>";
                echo "<th>Data</th>";
                echo "<th>Nume</th>";
                echo "<th>Prenume</th>";
                echo "<th>ID</th>";
                echo "<th>Locatia</th>";
                echo "<th>Email</th>";
               
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['Nr'] . "</td>";
                echo "<td>" . $row['Dat'] . "</td>";
                echo "<td>" . $row['Nume'] . "</td>";
                echo "<td>" . $row['Prenume'] . "</td>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Locatia'] . "</td>";
                echo "<td>" . $row['omail'] . "</td>";
               
            echo "</tr>";
        }
        echo "</table>";
        // Close result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($connect);
}
 
?>

</body>
</html>
