<?php
session_start();

include('Alfin_db.php');
include('Alfin_data registrasi.php');

if (isset($_POST['registrasi'])) {
    registrasi($_POST);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body style="background-color: #ffeaa7;">
    <!-- navbar -->
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid col-10">
            <a class="navbar-brand fw-bold">EAD Travel </a>
            <ul class="nav justify-content-end">
                <li class="nav-item ">
                    <a class="nav-link active" aria-current="page" href="Alfin_Registrasi.php">Registrasi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Alfin_Login.php">Login</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- alert -->
    <?php if (isset($_SESSION['gagal'])) :?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $_SESSION['gagal'];  ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php unset($_SESSION['gagal']);
    endif;
    ?>

    <!-- Form -->
    <div class="row border my-5 mx-5 p-5 bg-white">
        <p class="fs-2 fw-bold text-center">Register</p>
        <div class="container my-3" style="width: 100%; height:3px; background-color: #74b9ff;"></div>
        <form class="mx-5" action="" method="POST">

            <!-- Nama -->
            <div class="mb-3 col">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nama">
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>

            <!-- No hp -->
            <div class="mb-3">
                <label for="nama" class="form-label">Nomor Handphone</label>
                <input type="number" class="form-control" placeholder="First name" aria-label="First name" name="no_hp">
            </div>

            <!-- Password -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>

            <!-- Konfirmasi kata sandi  -->
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Konfirmasi Kata Sandi</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="konfirmasi">
            </div>

            <!-- checkbox -->
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            <div class="d-grid gap-2 col-2 mx-auto my-2">

                <button class="btn btn-primary" type="submit" name="registrasi">Daftar</button>
            </div>
            <p class="text-center">Anda sudah punya akun ?<a href="Alfin_Login.php" class="link-primary">Login</a></p>
        </form>
    </div>

    <!-- footer -->
    <div class="jumbotron jumbotron-fluid mt-5 py-5" style="background-color: #e3f2fd;">
        <div class="container">
            <p class="text-center">© 2021 Copyright:
                <an class="text-blue" data-bs-toggle="modal" data-bs-target="#identitas">Alfin_1202190278</an>
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