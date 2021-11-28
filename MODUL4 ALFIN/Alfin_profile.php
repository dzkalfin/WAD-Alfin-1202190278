<?php 
session_start();
include('Alfin_db.php');
include('Alfin_update.php');

$id = $_SESSION['id'];

if (isset($_POST['simpan'])) {
    simpan($_POST);
}

$query  = mysqli_query($conn, "SELECT * FROM users WHERE id='$id'");
$result = mysqli_fetch_array($query);

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
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><?= $_SESSION['nama'] ?></a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="">Profile</a></li>
                        <li><a class="dropdown-item" href="Alfin_data logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row border my-5 mx-5 p-5 bg-white">
    <form class="mx-5" action="" method="POST">
        <p class="fs-2 fw-bold text-center">Profile</p>
        
            <!-- Email -->
            <div class="row my-4">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control-plaintext" id="staticEmail" Value=<?php echo $result["email"] ?> >
                </div>
            </div>

            <!-- Nama -->
            <div class="row my-5">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text"  name="nama" class="form-control" id="nama" Value=<?php echo $result['nama']; ?>>
                </div>
            </div>

            <!-- no hp -->
            <div class="row my-5">
                <label for="no_hp" class="col-sm-2 col-form-label">Nomor Handphone</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="no_hp"  name="no_hp" value=<?php echo $result["no_hp"]; ?>>
                </div>
            </div>

            <div class="container my-3" style="width: 100%; height:3px; background-color: #74b9ff;"></div>

            <!-- password -->
            <div class="row my-5">
                <label for="no_hp" class="col-sm-2 col-form-label">Kata Sandi</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="no_hp" name="password" Value=<?php echo $result['password']; ?>>
                </div>
            </div>

            <!-- Konfirmasi password -->
            <div class="row my-5">
                <label for="no_hp" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="no_hp" name="konfirmasi" Value=<?php echo $result['konfirmasi']; ?>>
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto d-md-flex justify-content-center">
                <button class="btn btn-primary px-5" type="submit" name="simpan">Simpan</button>
                <button class="btn btn-warning px-5" type="button">Cancel</button>
            </div>
        </form>
    </div>

    <!-- footer -->
    <div class="jumbotron jumbotron-fluid mt-1  py-5" style="background-color: #e3f2fd;">
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