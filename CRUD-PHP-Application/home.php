<?php include("header.php");?>
 <br> <br>
<div class="container p-4 my-7 bg-dark " align = "center">
    
    <form  action ="insert_date.php" method ="POST">
         <center><h1 class="text-primary">Introdu date</h1></center>  
        <div class="form-group">
<input type="text" name="name1" placeholder="Nume">
    </div>
    <br>
        <div class="form-group">
    <input type="text" name ="surname" placeholder="Prenume">
        <br>
        <br>
            </div>
         <div class="form-group">
    <input type="password" name ="parola" placeholder="Parola">
        <br>
        <br>
            </div>
        
    <input type="submit" name="bot" value="Trimite" class="btn btn-primary">
</form>
    
</div>
<br>
<br>
<br>

<right>
<div class="col-md md-8">
   <table class ="table table-bordered">
   <thead>
   <tr>
   <th>ID</th>
   <th>Nume</th>
   <th>Prenume</th>
   <th>Parola</th>
   <th>Actiuni</th>
   </tr>
   </thead>

   <tbody>
       <?php   
         include("connect_db.php");
       
         $query = "SELECT * FROM persoane";
         $rezultat = mysqli_query($connect,$query);
       
         while($row = mysqli_fetch_array($rezultat))      
         {
             ?>
     <tr>
<td><?php echo $row['id']?></td>
<td><?php echo $row['Nume']?></td>
<td><?php echo $row['Prenume']?></td>
<td><?php echo $row['Parola']?></td>

<td>
<a href = "delete.php?id=<?php echo $row['id'] ?>">
<div class="btn btn-danger">
<img src = "img/del.png">
</div>
 </a>
<?php echo " \0 "?>
<a href = "modify.php?id=<?php echo $row['id'] ?>">
<div class="btn btn-warning">
<img src = "img/modify.png">
</div>
</a>

</td>

     </tr>
       <?php } ?>
   </tbody>
       
   </table>
</div>
</right>
<?php include("footer.php");?>
