<?php

include('Alfin_db.php');

$id_buku        = $_POST['id_buku'];
$judulbuku      = $_POST['input_judul'];
$tahun_terbit   = $_POST['input_tahun'];
$deskripsi      = $_POST['input_desc'];
$bahasa         = $_POST['input_bahasa'];

$query  = "UPDATE buku_table 
            SET judul_buku='$judulbuku', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi', bahasa='$bahasa' 
            WHERE id_buku='$id_buku'";
// $update = mysqli_query($conn, $update);

// Query status
// if ($conn->query($query) === TRUE) {
//     echo "New record created successfully";
// }
// else {
//     echo "Error: " . $query . "<br>" . $conn->error;
// }

// Close connection
$conn->close();

header('Location: Alfin_Halaman Detail Buku.php');