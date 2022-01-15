<?php

Header('Content-type: text/xml');
//koneksi ke database
include 'config.php';
$xml = new SimpleXMLElement('<xml/>');
//menampilkan data dari database, table user
$sql = "select * from user ";
$result = mysqli_query($koneksi, $sql) or die("Error " . mysqli_error($koneksi));

//membuat array
while ($row = mysqli_fetch_assoc($result)) {

    $track = $xml->addChild('user');
    $track->addChild('nama', $row['nama']);
    $track->addChild('email', $row['email']);
    $track->addChild('level', $row['level']);
}

print($xml->asXML());
//tutup koneksi ke database
mysqli_close($koneksi);
?>