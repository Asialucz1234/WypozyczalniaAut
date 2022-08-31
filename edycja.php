<?php
$connect = mysqli_connect("localhost", "root", "", "wypozyczalnia");

if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["wart"]);
 $query = "UPDATE auta SET ".$_POST["kolumna"]."='".$value."' WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Edycja zakończona pomyślnie';
 }
}
?>
