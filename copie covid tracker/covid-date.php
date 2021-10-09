<?php
 session_start();
 $nr = $_SESSION['nr'];

$date = file_get_contents("https://api.covid19api.com/summary");
$stdInstance = json_decode($date);
$tara = $stdInstance->Countries[$nr]->Country . PHP_EOL;
$cazuri = $stdInstance->Countries[$nr]->TotalConfirmed . PHP_EOL;
$morti = $stdInstance->Countries[$nr]->TotalDeaths . PHP_EOL; 
$tratati =  $stdInstance->Countries[$nr]->TotalRecovered . PHP_EOL;
/*
print"<br>";
echo "Tara :".$stdInstance->Countries[112]->Country . PHP_EOL; 
print"<br>";
echo "Cazuri : ".$stdInstance->Countries[112]->TotalConfirmed . PHP_EOL;
print"<br>";
echo "Morti : ".$stdInstance->Countries[112]->TotalDeaths . PHP_EOL; 
print"<br>";
echo "Tratati : ".$stdInstance->Countries[112]->TotalRecovered . PHP_EOL; 
echo "<br>";
*/
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Covid Force</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="icon" href="https://images.squarespace-cdn.com/content/v1/5c4085e585ede1f50f94a4b9/1581018457505-JM3FO6WMFN9BGP3IOE8D/ke17ZwdGBToddI8pDm48kL5hQm_JZO5i_9Equza1B-57gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1URbcWFoTofQNHE0Fe4ADwtkYw2N2aveJw6FaFCcRrQmU3WUfc_ZsVm9Mi1E6FasEnQ/2019-nCoV-CDC-23312_without_background.png" type="image/x-icon">
<link href="https://fonts.googleapis.com/css2?family=Orelega+One&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="covid-date.css">
</head> 
<body style="background-image: url(https://c.files.bbci.co.uk/D505/production/_115033545_gettyimages-1226314512.jpg);">
<nav class="navbar navbar-expand-lg navbar-light">
	<a href="home.html" class="navbar-brand">Covid<b>Force</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="home.html" class="nav-item nav-link ">Acasa</a>
			<a href="covid-date.php" class="nav-item nav-link active">Cazuri de covid</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Servicii</a>
				<div class="dropdown-menu">					
				<a href="sondaj.html" class="dropdown-item ">Vaccinare</a>
				<a href="enter.html" class="dropdown-item ">Test Covid</a>
					<a href="Bmi.html" class="dropdown-item">BMI Calculator</a>
					<a href="chat.html" class="dropdown-item ">Medic-chat-Forum</a>
					<a href="admin.html" class="dropdown-item ">Admin</a>

                </div>
            </div>
			<a href="https://www.google.com/search?rlz=1C5CHFA_enMD949MD949&sxsrf=ALeKk00Yg0eMlJ7vy8RdRN3rZMfe51iPjA:1619375176068&q=covid+news&lco=ro:1&lr=lang_ro&lrs=0&sa=X&ved=2ahUKEwiupYLRgprwAhWGl4sKHaYcCZoQ-PEFKAB6BAgBEDU&biw=1440&bih=788" class="nav-item nav-link">Stiri</a>
			<a href="map.html" class="nav-item nav-link ">Map Covid</a>
			<a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
		<form class="navbar-form form-inline ml-auto" method="POST" action="hf.php">
			<div class="input-group search-box">
				<input type="text" name = "tara" class="form-control" placeholder="cauta o tara">
				<div class="input-group-append">
					<button type="submit" class="btn btn-danger"><span>Cauta</span></button>
				</div>
			</div>
		</form>		
	</div>
</nav>

<div class="box-container">
<h2 id="tara"><?php echo $tara ;?></h2>
<h3 id="cazuri">Cazuri: <?php echo $cazuri ;?></h3>
<h3 id="tratati">Tratati : <?php echo $tratati ;?></h3>
<h3 id="morti">Morti : <?php echo $morti;?></h3>

</div>

</body>

</html>



