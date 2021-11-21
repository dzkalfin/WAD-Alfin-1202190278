<?php

include("Alfin_db.php");

if (isset($_GET['id_buku'])) {
    $id_buku    = $_GET['id_buku'];
} else {
    die("Error. No ID Selected!");
}

$query  = mysqli_query($conn, "SELECT * FROM buku_table WHERE id_buku='$id_buku'");
$result = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Halaman Detail Buku</title>
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
    <div class="row border my-5 mx-5 shadow-lg p-5 mb-5 bg-white rounded">
        <div class="col my-5">
            <p class="fs-1 fw-bolder my-1 text-center">Detail Buku</p>
            <img src="..." class="card-img-center" alt="...">
        </div>
        <div class="container my-3" style="width: 100%; height:3px; background-color: #74b9ff;"></div>

        <p class="fw-bolder my-1">Judul :</p>
        <P> <?php echo $result['judul_buku'] ?> </P>

        <p class="fw-bolder my-1">Penulis :</p>
        <P> <?php echo $result['penulis_buku'] ?> </P>

        <p class="fw-bolder my-1">Tahun Terbit :</p>
        <P> <?php echo $result['tahun_terbit'] ?> </P>

        <p class="fw-bolder my-1">Deskripsi :</p>
        <P> <?php echo $result['deskripsi'] ?> </P>

        <p class="fw-bolder my-1">Bahasa :</p>
        <P> <?php echo $result['bahasa'] ?> </P>

        <p class="fw-bolder my-1">Tag :</p>
        <P> <?php echo $result['tag'] ?> </P>

        <div class="row">
            <div class="d-grid gap-2 col-6 mx-auto">
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Sunting
                </button>
                <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Sunting</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form class="mx-5" action="Alfin_Sunting.php" method="POST">
                                    <input type="hidden" name="id_buku" value="<?php echo $result['id_buku'];?>">                                
                                    <!--- Judul --->
                                    <div class="my-4">
                                        <label for="judul buku" class="form-label fw-bolder">Judul Buku</label>
                                        <input type="text" name="input_judul" class="form-control" id="judul buku" aria-describedby="emailHelp" placeholder="Contoh: Pemograman Web Bersama EAD" value="<?php echo $result['judul_buku'];?>">
                                    </div>

                                    <!--- Penulis --->
                                    <div class="my-4">
                                        <label for="Penulis" class="form-label fw-bolder">Penulis</label>
                                        <input type="text" name="penulis" class="form-control" value="Alfin_1202190278" aria-label="penulis" readonly>
                                    </div>

                                    <!--- Tahun --->
                                    <div class="my-4">
                                        <label for="Tahun Terbit" class="form-label fw-bolder">Tahun Terbit</label>
                                        <input type="text" name="input_tahun" class="form-control" id="tahun terbit" aria-describedby="emailHelp" placeholder="Contoh: 1990" value="<?php echo $result['tahun_terbit'];?>">
                                    </div>

                                    <!--- Deskripsi --->
                                    <div class="my-4">
                                        <label for="Deskripsi" class="form-label fw-bolder">Deskripsi</label>
                                        <textarea class="form-control" name="input_desc" id="Deskripsi" rows="3"><?php echo $result['deskripsi'];?></textarea>
                                    </div>

                                    <!--- Radio --->
                                    <div class="pe-2">
                                        <label class="form-check-label fw-bolder mb-2" for="Bahasa">Bahasa </label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="input_bahasa" id="Bahasa" value="Indonesia" <?php echo ($result['bahasa'] == 'Indonesia') ? 'checked' : '' ?> >
                                            <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="input_bahasa" id="Lainnya" value="Lainnya" <?php echo ($result['bahasa'] == 'Lainnya') ? 'checked' : '' ?> >
                                            <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                                        </div>
                                    </div> 
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <a type="button" class="btn btn-danger" href="Alfin_delete.php?id_buku=<?php echo $result['id_buku']; ?>">
                    Hapus
                </a>
            </div>
        </div>
    </div>
</body>

</html>