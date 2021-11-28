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

    <!-- Navbar -->
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid col-10">
            <a class="navbar-brand fw-bold">EAD Travel </a>
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">nama disini</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Login</a></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Tempat</th>
                    <th scope="col">Lokal</th>
                    <th scope="col">Tanggal Perjalanan</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Akse</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </th>
                </tr>
            </tbody>
        </table>
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