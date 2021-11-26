<?php 

include('Alfin_db.php');

// input data
$judul      = $_POST['judul'];
$penulis    = $_POST['penulis'];
$tahun      = $_POST['tahun'];
$deskripsi  = $_POST['desc'];
$bahasa     = $_POST['bahasa'];
$tag        = implode(", ", $_POST['tags']);

$gambar     = $_POST['gambar'];

// Query  
$sql = "DELETE INTO buku_table (judul_buku, penulis_buku, tahun_terbit, deskripsi, gambar, tag, bahasa) 
        VALUES ('$judul', '$penulis', '$tahun', '$deskripsi', '$gambar', '$tag', '$bahasa')";

// Query status
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();

header('Location: Alfin_Home.php');

