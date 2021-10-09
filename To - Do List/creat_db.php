 <?php
 include("connect_db.php");

 $sql = "CREATE TABLE list1(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
       text VARCHAR(50) NOT NULL
     )";

      if(mysqli_query($connect,$sql))
      {
           echo "Succes";
      }
else
{
    die(mysql_errno($connect));
}
?>