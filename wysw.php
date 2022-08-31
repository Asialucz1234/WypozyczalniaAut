<?php
$connect = mysqli_connect("localhost", "root", "", "wypozyczalnia");
$columns = array('marka', 'model', 'rocznik', 'os_wypoz', 'data_wypoz', 'ost_przeglad');

$query = "SELECT * FROM auta ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE marka LIKE "%'.$_POST["search"]["value"].'%" 
 OR model LIKE "%'.$_POST["search"]["value"].'%" 
 OR rocznik LIKE "%'.$_POST["search"]["value"].'%"
 OR os_wypoz LIKE "%'.$_POST["search"]["value"].'%"
 OR data_wypoz LIKE "%'.$_POST["search"]["value"].'%"
 OR ost_przeglad LIKE "%'.$_POST["search"]["value"].'%"
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY id DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="marka">' . $row["marka"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="model">' . $row["model"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="rocznik">' . $row["rocznik"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="os_wypoz">' . $row["os_wypoz"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="data_wypoz">' . $row["data_wypoz"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="ost_przeglad">' . $row["ost_przeglad"] . '</div>';
 $sub_array[] = '<button type="button" name="usun" class="w3-button w3-red w3-padding-small usun" id="'.$row["id"].'">Usuń</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM auta";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>
