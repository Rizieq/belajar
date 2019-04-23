<?php


// require sama seperti exteds yang ada di java
require 'koneksi.php';
$server = 'http://localhost/db_berita' // query  untuk menyisipkan kode sql 
$query = $conn->query("SELECT * FROM tb_berita ORDER BY id_berita DESC"); // unutuk menampilkan tb_berita dari id_berita
$server = 'http://localhost/db_berita'; // unutuk database-nya (db_berita)
$imageServer = $server."/img";

$berita = [];
while ($data = $query->fetch_assoc() ) { // fetcg assoc unutk menampilkan array
$berita [] = ['id' => $data['id_berita'], 'judul' => $data['judul'], 'gambar' => $imageServer, "".data['gambar']];
}

$json = ['berita' => berita];
print_r(json_encode($json));
?>