<?php

include "../config/koneksi.php";

$id = @$_POST['id'];

//var_dump($Id); exit;

$data = [];

$query = mysqli_query($kon, "DELETE FROM `tampilan`
 WHERE `id`='". $id ."'");

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