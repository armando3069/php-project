<?php
session_start();
$_SESSION['vac'] = $_POST['vaccin'];
header("Location: test34.html");


?>