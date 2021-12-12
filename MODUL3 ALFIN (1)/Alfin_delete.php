 <?php 

include('Alfin_db.php');

// input data
$id_buku = $_GET['id_buku'];

// Query  
$sql    = "DELETE FROM buku_table WHERE id_buku='$id_buku'";
$update = mysqli_query($con, $sql);

// Close connection
$conn->close();

header('Location: Alfin_Home.php');

