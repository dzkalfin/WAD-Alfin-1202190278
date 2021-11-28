<?php
session_start();
include('Alfin_db.php');

$tempat = $_GET
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid col-10">
            <a class="navbar-brand fw-bold">EAD Travel </a>
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= $_SESSION['nama'] ?></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Alfin_profile.php">Profile</a></li>
                        <li><a class="dropdown-item" href="Alfin_data logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Alerts -->
    <?php if (isset($_SESSION['alert'])) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $_SESSION['alert']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php
        unset($_SESSION['alert']);
    endif;
    ?>


    <div class="jumbotron jumbotron-fluid mx-5 my-5" style="background-color: #00b894">
        <div class="container">
            <h1 class="fs-1 fw-bold text-center">EAD Travel </h1>
        </div>
    </div>

    <!-- Cards -->
    <div class="card-group mx-5">

        <!-- Raja Ampat -->
        <div class="card">
            <img src="raja ampat.jfif" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Raja Ampat, Papua</h5>
                <p class="card-text">Kepulauan Raja Ampat Adalah Kepulauan Indonesia di ujung barat laut semenanjung
                    Kepala Burung di Papua Barat. Terdiri dari ratusan pulau yang tertutup hutan, Raja Ampat dikenal
                    dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan gua kuno berada di Pulau Misool,
                    sedangkan cendrawasih merah hidup di Pulau Waigeo. Batanta dan Salawati adalah pulau-pulau utama lainnya dinusantara</p>
            </div>
            <div class="container my-5" style="width: 95%; height:3px; background-color: #dfe6e9;"></div>
            <p class="fw-bolder mx-3">Rp 7.000.000</p>
            <div class="card-footer">
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#perjalanan">Pesan Tiket</a>
                </div>

                <!-- Modal tambah -->
                <form action="" method="POST" name="raja_ampat">
                    <div class="modal fade" id="perjalanan" tabindex="-1" aria-labelledby="perjalanan" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h5 class="modal-title mx-4 my-2" id="perjalanan">Tanggal Perjalanan</h5>
                                <div class="modal-header mx-2">
                                    <label for="date" class="form-label">Event Date</label>
                                    <input name="date" type="date" class="form-control" id="date" placeholder="mm / dd / yyyy">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-3 my-3">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a type="button" class="btn btn-primary" href="Alfin_booking cart.php">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Gunung Bromo -->
        <div class="card">
            <img src="gunung bromo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Gunung Bromo, Malang</h5>
                <p class="card-text">Kepulauan Raja Ampat adalah kepulauan Indonesia di ujung barat laut Semenanjung Kepala Burung di Papua Barat.
                    Terdiri dari ratusan pulau yang tertutup hutan; Raja Ampat dikenal dengan pantai dan terumbu karangnya yang kaya dengan kehidupan laut. Lukisan batu dan gua kuno berada di Pulau Misool,
                    sedangkan cendrawasih merah hidup di Pulau Waigeo. Batanta dan Salawati adalah pulau-pulau utama lainnya di nusantara</p>
                </p>
                <div class="container my-5" style="width: 95%; height:3px; background-color: #dfe6e9;"></div>
            </div>
            <p class="fw-bolder mx-3">Rp 2.000.000</p>
            <div class="card-footer">
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#perjalanan2">Pesan Tiket</a>
                </div>

                <!-- Modal tambah -->
                <form action="" method="POST" name="gunung_bromo">
                    <div class="modal fade" id="perjalanan2" tabindex="-1" aria-labelledby="perjalanan2" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h5 class="modal-title mx-4 my-2" id="perjalanan2">Tanggal Perjalanan</h5>
                                <div class="modal-header mx-2">
                                    <label for="date" class="form-label">Event Date</label>
                                    <input name="date" type="date" class="form-control" id="date" placeholder="mm / dd / yyyy">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-3 my-3">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a type="button" class="btn btn-primary" href="Alfin_booking cart.php">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>

        <!-- Tanah Lot  -->
        <div class="card">
            <img src="tanah lot.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Tanah Lot,Bali</h5>
                <p class="card-text">Tanah Lot adalah formasi batuan di lepas pantai pulau Bali, Indonesia. ini adalah rumah bagi kuil ziarah Hindu
                    kuno Pura Tanah Lot, ikon wisata dan budaya yang populer untuk fotografi. Disini ada dua pura yang terletak diatas batu besar. Satu terletak
                    di atas bongkahan batu dan satunya terletak diatas tebing mirip dengan Pura Uluwatu. Pura Tanah Lot ini merupakan bagian dari pura Dang Kahyangan.</p>
            </div>
            <div class="container my-5" style="width: 95%; height:3px; background-color: #dfe6e9;"></div>
            <p class="fw-bolder mx-3">Rp 5.000.000</p>
            <div class="card-footer">
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#perjalanan3">Pesan Tiket</a>
                </div>

                <!-- Modal tambah -->
                <form action="" method="POST" name="tanah_lot">
                    <div class="modal fade" id="perjalanan3" tabindex="-1" aria-labelledby="perjalanan3" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <h5 class="modal-title mx-4 my-2" id="perjalanan3">Tanggal Perjalanan</h5>
                                <div class="modal-header mx-2">
                                    <label for="date" class="form-label">Event Date</label>
                                    <input name="date" type="date" class="form-control" id="date" placeholder="mm / dd / yyyy">
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-3 my-3">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a type="button" class="btn btn-primary" href="Alfin_booking cart.php">Tambahkan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid mt-5 py-5" style="background-color: #e3f2fd;">
        <div class="container">
            <p class="text-center">© 2021 Copyright:
                <a class="text-blue" data-bs-toggle="modal" data-bs-target="#identitas">Alfin_1202190278</a>
            </p>

            <!-- Modal -->

            <div class="modal fade" id="identitas" tabindex="-1" aria-labelledby="identitas" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="identitas">Created By</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row align-items-start">
                                    <div class="col">
                                        Nama
                                    </div>
                                    <div class="col">
                                        : Dzaki Alfin
                                    </div>
                                </div>
                                <div class="row align-items-start">
                                    <div class="col">
                                        NIM
                                    </div>
                                    <div class="col">
                                        : 1202190278
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>