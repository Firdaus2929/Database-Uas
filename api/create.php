<?php

include "../config/koneksi.php";


$bil1 = @$_POST ['bil1'];
$bil2 = @$_POST['bil2'];

$data = [];

$query = mysqli_query($kon, "INSERT INTO `tampilan`
( `bil1` , 
  `bil2` )
  VALUES
  ('". $bil1 ."',
  '". $bil2 ."')");

if($query){
    $status = true;
    $pesan = "request success";
    $data[] = $query;
}else{
    $status = false;
    $pesan = "request failed";
}

$json = [
  "status" => $status,
  "pesan" => $pesan,
  "data" => $data
];

header("Content-Type: application/json");
echo json_encode($json);

?>