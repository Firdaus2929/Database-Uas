<?php

include "../config/koneksi.php";

$id = @$_POST['id'];
$bil1 = @$_POST ['bil1'];
$bil2 = @$_POST['bil2'];
$hasil = @$_POST ['hasil'];

$data = [];

$query = mysqli_query($kon, "UPDATE `tampilan`
SET `bil1` ='". $bil1 ."',
`bil2`  = '". $bil2 ."',
`hasil`  = '". $hasil ."'
WHERE `id` ='". $id ."'");

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