<?php

include('Alfin_db.php');

$sql    = "SELECT * FROM buku_table";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid my-1">
            <a class="navbar-brand" href="Alfin_Home.php">
                <img src="logo.png" alt="" width="130" length="150">
            </a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary me-md-2" type="button" href="Alfin_Halaman Tambah buku.php">Tambahkan Buku</a>
            </div>
        </div>
    </nav>
    <?php if($result->num_rows > 0) : ?>
        <?php while($row = $result->fetch_assoc()) : ?>
            <div class="row row-cols-1 row-cols-md-3 g-4 my-5 mx-5">
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $row['gambar']?>" class="card-img-top" alt="Gambar">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['judul_buku'] ?></h5>
                            <p class="card-text"><?php echo  $row['deskripsi'] ?></p>
                            <a type="submit" class="btn btn-primary" name="submit" value="submit" href="Alfin_Halaman Detail Buku.php?id_buku=<?=$row['id_buku']?>">Tampilkan Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="container my-5">
            <p class="text-center fs-1 fw-normal">Belum ada buku</p>
            <div class="container my-3" style="width: 100%; height:3px; background-color: #74b9ff;"></div>
            <p class="text-center" style="font-size: 20px;">Silahkan Menambahkan Buku</p>
        </div>
    <?php endif ; ?>

    <div class="jumbotron mx-5 text-center">
        <a class="navbar-brand" href="#">
            <img src="logo.png" class="rounded mx-auto d-block" alt="" width="130" length="150">
        </a>
        <h2 class="fw-bolder">Perpustakaan EAD</h2>
        <p>© Alfin_1202190278</p>
    </div>
</body>

</html>

<?php

// Close connection
$conn->close();

?>