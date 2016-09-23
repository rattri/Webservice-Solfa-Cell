<?php
include 'config.php';



$a=$_GET['name'];






$query = "SELECT * FROM nominal WHERE id_voucher='$a' ";

$result = mysqli_query($konek, $query); 


if (!$result) {

  die("Invalid query: " . mysqli_error($konek));

}



$arr = array();

while ($row = mysqli_fetch_assoc($result)) {



    $temp = array(
	"id" => $row["id"],
    "harga" => $row["nama"],
	"harga" => $row["harga"],
	 "id_voucher"=> $row["id_voucher"],

	 

	

      );



    array_push($arr, $temp);

}



$data = json_encode($arr);

echo "{\"menu\":" . $data . "}"; 

?>

