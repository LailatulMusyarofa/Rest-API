<?php 
// $mahasiswa = [
//     "nama" => "Lailatul",
//     "npm" => "22161562020",
//     "email" => "lailatulmusyarofa287@gmail.com"

// ];

$dbh = new PDO('mysql:host=localhost;dbname=siakad','NO','root');
$db = $dbh->prepare('SELECT * mahasiswas');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data
?>