<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark mb-5">
        <div class="container-fluid my-1">
            <a class="navbar-brand" href="Alfin_Home.php">
                <img src="logo.png" alt="" width="130" length="150">
            </a>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end"D>
                <button class="btn btn-primary me-md-2" type="button">Tambahkan Buku</button>
            </div>
        </div>
    </nav>

    <div class="row border my-5 mx-5 shadow-lg p-5 mb-5 bg-white rounded">
        <div class="col my-5">
            <form class="mx-5" action="Alfin_data.php" method="POST">
                <p class="fs-1 fw-bolder text-center">Tambah Data Buku</p>

                <!--- Judul --->
                <div class="my-4">
                    <label for="judul buku" class="form-label fw-bolder">Judul Buku</label>
                    <input type="text" name="judul" class="form-control" id="judul buku" aria-describedby="emailHelp" placeholder="Contoh: Pemograman Web Bersama EAD">
                </div>

                <!--- Penulis --->
                <div class="my-4">
                    <label for="Penulis" class="form-label fw-bolder">Penulis</label>
                    <input type="text" name="penulis" class="form-control" value="Alfin_1202190278" aria-label="penulis" readonly>
                </div>

                <!--- Tahun --->
                <div class="my-4">
                    <label for="Tahun Terbit" class="form-label fw-bolder">Tahun Terbit</label>
                    <input type="text" name="tahun" class="form-control" id="tahun terbit" aria-describedby="emailHelp" placeholder="Contoh: 1990">
                </div>

                <!--- Deskripsi --->
                <div class="my-4">
                    <label for="Deskripsi" class="form-label fw-bolder">Deskripsi</label>
                    <textarea class="form-control" name="desc" id="Deskripsi" rows="3"></textarea>
                </div>

                <!--- Radio --->
                <div class="pe-2">
                    <label class="form-check-label fw-bolder mb-2" for="Bahasa">Bahasa </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa" id="Bahasa" value="Indonesia">
                        <label class="form-check-label" for="inlineRadio1">Indonesia</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="bahasa" id="Lainnya" value="Lainnya">
                        <label class="form-check-label" for="inlineRadio2">Lainnya</label>
                    </div>
                </div>

                <!--- checkbox --->
                <div>
                    <label class="form-check-label fw-bolder my-4" for="inlineRadio1">Tag </label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Pemograman" value="Pemograman" name="tags[]">
                        <label class="form-check-label" for="Pemograman">Pemograman</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Website" value="Website" name="tags[]">
                        <label class="form-check-label" for="Website">Website</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Java" value="Java" name="tags[]">
                        <label class="form-check-label" for="Java">Java</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="OOP" value="OOP" name="tags[]">
                        <label class="form-check-label" for="OOP">OOP</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="MVC" value="option" name="tags[]">
                        <label class="form-check-label" for="MVC">MVC</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Kalkulus" value="Kalkulus" name="tags[]">
                        <label class="form-check-label" for="Kalkulus">Kalkulus</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="Lainnya" value="Lainnya" name="tags[]">
                        <label class="form-check-label" for="Lainnya">Lainnya</label>
                    </div>
                </div>

                <!--- File --->
                <div class="mb-4">
                    <label for="formFile" class="form-label">Gambar</label>
                    <input class="form-control" type="file" id="formFile" name="gambar">
                </div>

                <div class="my-3 d-grid gap-2 col-6 mx-auto">
                    <button class="btn btn-primary" type="sumbit">+ Tambah</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>