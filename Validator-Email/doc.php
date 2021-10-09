
    <?php
      session_start();

$email = $_GET['email'];
$_SESSION['email']= $email;
 
$sanitizedEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
 
if($email == $sanitizedEmail && filter_var($email, FILTER_VALIDATE_EMAIL)){

     $_SESSION["check"] = "exist";

  print "exista";
  header("Location: home1.php");
  
}

 else
{
    $_SESSION["check"] = "notexist"; 
    header("Location: home2.php");

}

?>
