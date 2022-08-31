<?php
	$connect = mysqli_connect("localhost", "root", "", "wypozyczalnia");

	$marka = mysqli_real_escape_string($connect, $_POST["marka"]);
	$model = mysqli_real_escape_string($connect, $_POST["model"]);
	$rocznik = mysqli_real_escape_string($connect, $_POST["rocznik"]);
	$os_wypoz = mysqli_real_escape_string($connect, $_POST["os_wypoz"]);
	$data_wypoz = mysqli_real_escape_string($connect, $_POST["data_wypoz"]);
	$ost_przeglad = mysqli_real_escape_string($connect, $_POST["ost_przeglad"]);
 
	$query = "INSERT INTO auta(`id`, `marka`, `model`, `rocznik`, `os_wypoz`, `data_wypoz`, `ost_przeglad`) VALUES(NULL,'$marka', '$model', '$rocznik', '$os_wypoz', '$data_wypoz', '$ost_przeglad')";

	if(mysqli_query($connect, $query))
	{
		echo 'Dodano!';
	}
?>