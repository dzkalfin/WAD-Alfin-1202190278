<!DOCTYPE html>
<html lang="en">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/506e74c08a.js" crossorigin="anonymous"></script>

    <title>ALFIN | {{ $title }} </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="mx-auto order-0">
            <ul class="navbar-nav justify-content-center">
                <li class="nav-item">
                    <a class="fw-bold nav-link nav-item {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">HOME</a>
                </li>
                <li class="fw-bold nav-item">
                    <a class="fw-bold nav-link nav-item {{ ($title === "vaccine") ? 'active' : '' }}" href="/vaccine">VACCINE</a>
                </li>
                <li class="fw-bold nav-item">
                    <a class="fw-bold nav-link nav-item {{ ($title === "patient") ? 'active' : '' }}" href="/patient">PATIENT</a>
                </li>
        </div>
    </nav>

    <div class="container mt-4">
    @yield('container')
    </div>

    <!-- Footer -->
    <footer>

        <a href="#" class="position-absolute bottom-0 start-50 translate-middle-x nav-item nav-link" data-bs-toggle="modal" data-bs-target="#modal">Made with <i class="fas fa-heart"></i> Muhammad Dzaki Alfinansyah - 1202190278</a>


        <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Kesan Pesan Praktikum</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row my-3">
                                <div class="col-sm-5 col-md-2">Kesan :</div>
                                <div class="col-10">WAD sangat menyenangkan, karena menantang kita untuk bisa membuat website yang kita inginkan</div>
                            </div>
                            <div class="row my-3">
                                <div class="col-sm-5 col-md-2">Pesan :</div>
                                <div class="col-10">Semoga kedepannya praktikum WAD jauh lebih baik dengan memberi <b>waktu pengerjaan <b>TUGAS PENDAHULUAN</b> lebih banyak</b>, sisanya sudah baik :)</div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
</body>

</html>