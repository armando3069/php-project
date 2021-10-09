<!DOCTYPE html>
<html>
    <head>
        <title>ToDoList</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <style>

            body
            {
                background: #ee0979;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #ff6a00, #ee0979);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #ff6a00, #ee0979); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }
            .box
            {  margin-left: 320px;
                margin-top: 50px;
                border-radius:25px;
                background: #9CECFB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

                 width: 600px;
                height: 400px;
            }
             form input 
             {  margin-top: 50px;
                width: 500px;
                height: 40px;
                
             }
             .button input
             {
                 width: 120px;
                 height: 30px;
                 border-radius: 20px;
                 border: 1px;
                 background: linear-gradient(90deg, rgba(253,29,29,1) 12%, rgba(125,8,203,1) 79%);             }

             table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background: #9CECFB;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

td {
  border: 3px solid #f70404;
  text-align: left;
  padding: 8px;
}


h1
{
    margin-bottom: 30px;
    text-align: center;
    color :red;
}
             
        </style>

    </head>

    <body>
    <nav class="navbar navbar-dark bg-warning">
            <div class="container" >
                <a href="home.php" class="navbar-brand">To List</a>
            </div>
        </nav>
   <div class="box">    
    <form  action="insert.php" method="POST">
        <center>
            <div class="container">
        <input type="text" name="make1" placeholder="Ce sa fac azi !">
        </div>
        <div class="button">
            <input type="submit" value="Adauga">
        </div>
    </center>
    </form>
    <br>
    <table class="table table-striped">

             <?php
          include("connect_db.php");

              $sql = "SELECT * FROM list1";

             $query = mysqli_query($connect,$sql);

            while($row =  mysqli_fetch_array($query))

            {  ?>
            <tbody>
           <tr>
            <td><?php echo $row['text'] ?></td>
            <td>
                <a href ="delete_db.php?id=<?php echo $row['id'] ?>" >
                <img src = "img/del.png">
                </a>
            </td>
            </tr>
            </tbody>
          <?php }?> 
        
     </table>

   </div>
       
    </body>

</html>