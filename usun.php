<?php
$connect = mysqli_connect("localhost", "root", "", "wypozyczalnia");

if(isset($_POST["id"]))
{
 $query = "DELETE FROM auta WHERE id = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Rekord usunięty!';
 }
}
?>