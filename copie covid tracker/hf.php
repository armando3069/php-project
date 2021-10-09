<?php
session_start();

$tara = $_POST['tara'];

  if($tara ==='Albania')
  {
   $_SESSION['nr']=1;
   header("Location: covid-date.php");
  }
  
  if($tara ==='Moldova')
  {
   $_SESSION['nr']=112;
   header("Location: covid-date.php");
   
}

  if($tara ==='Algeria')
  {
   $_SESSION['nr']=2;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }

  if($tara ==='Andorra')
  {
   $_SESSION['nr']=3;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }

  if($tara ==='Angola')
  {
   $_SESSION['nr']=4;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }

  if($tara ==='Italia')
  {
   $_SESSION['nr']=82;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }

  if($tara ==='Japonia')
  {
   $_SESSION['nr']=84;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }

  if($tara ==='Germania')
  {
   $_SESSION['nr']=63;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }

  if($tara ==='China')
  {
   $_SESSION['nr']=35;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }
    
  if($tara ==='Romania')
  {
   $_SESSION['nr']=139;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }
                    
  if($tara ==='Rusia')
  {
   $_SESSION['nr']=140;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }

  if($tara ==='Ucraina')
  {
   $_SESSION['nr']=178;
   print $_SESSION['nr'];
   header("Location: covid-date.php");

  }


?>