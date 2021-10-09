 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
 	<title>PHP</title>
 </head>
 <body>
 	<form method="GET">
 		<input type="number" name="num1" placeholder="Numarul 1">
 		<input type="number" name="num2" placeholder="Numarul 2">
 		
 		<select name = "operator">
 			<option>Gol</option>
 			<option>Adunare</option>
 			<option>Scadere</option>
 			<option>Imultire</option>
 			<option>Impartire</option>
 		</select>
 		<br>
 		<br>
 		 <button type="submit" name="buton" >Rezultat</button>
 	</form>
 	

 	<?php
      if(isset($_GET['buton']))
      {
      	$Rezult1 = $_GET['num1'];
      	$Rezult2 = $_GET['num2'];
      	$Oper = $_GET['operator'];

      	switch ($Oper) {
      		case 'Adunare':
      			$Sum = $Rezult1 + $Rezult2;
      		   	      			echo "<center><h3>Rezultatul = $Sum <h3/> <center/>";
      			break;

      		case 'Scadere' :
      		   	$Sum = $Rezult1 - $Rezult2;
      		   	      			echo "<center><h3>Rezultatul = $Sum <h3/> <center/>";

      		   	break;

      		   	case 'Imultire' :
      		   	$Sum = $Rezult1 * $Rezult2;
      		   	      			echo "<center><h3>Rezultatul = $Sum <h3/> <center/>";

      		   	break;

      		   	case 'Impartire' :
      		   	$Sum = $Rezult1 / $Rezult2;
      		   	      			echo "<center><h3>Rezultatul = $Sum <h3/> <center/>";

      		   	break;
      		default:
      		echo "Reincearca";
      			
      			break;
      	}

      }
   
 	?>
 
 </body>
 </html>