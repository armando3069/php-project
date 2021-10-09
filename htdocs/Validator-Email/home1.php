<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="home.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
            <div class="container" >
                <a href="home.html" class="navbar-brand">Validator-Email</a>
            </div>
        </nav>
            <br>
            <br>
            <br>
        <h1>Wellcome to Validator Email</h1>
        <div class="con">  
            <center>  
        <form class="form-dark" action="doc.php">
            <br>
            <input type="email" class="form-control" placeholder="Enter email" name="email">
            <br>
            <button type="submit" class="btn btn-dark">Send</button>
          </form>

          <br>
          <?php

           session_start();

           $EEmail = $_SESSION['email'];

             echo"<a href = 'https://mail.google.com/mail/u/0/#search/$EEmail'>";
               echo '<img src = "https://thumbs.dreamstime.com/b/grunge-green-valid-square-rubber-seal-stamp-white-background-grunge-green-valid-square-rubber-seal-stamp-white-background-139592091.jpg" width = "350px" height="200px"/>';
               echo " </a>";
            ?>
        </center>  
    </div>
    </body>
</html>