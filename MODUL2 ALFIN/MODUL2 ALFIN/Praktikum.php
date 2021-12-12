<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Praktikum.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#booking">Booking</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="Booking" class="mt-3">
    <h3 style="text-align: center;" class="text-uppercase">welcome to esd venue reservation</h3>
    <div class="mx-5 p-1 bg-dark text-white">
      <h5 style="text-align: center; ">Find your Best Deal for your event, here!</h5>
    </div>
    <div class="mx-5 my-3 row row-cols-1 row-cols-md-3 g-2">
      <div class="col">
        <div class="card">
          <img src="Nusantara Hall.jpeg" class="card-img-top" alt="Nusantara Hall">
          <div class="card-body">
            <h3 class="card-title">Nusantara Hall</h3>
            <h5 class="card-text"><small class="text-muted">$2000 / Hour</small></h5>
            <h5 class="card-text"><small class="text-muted">5000 Capactiy</small></h5>
            <div class="card-text text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="color: #2ecc71;"></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Free Parking</b></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Full AC</b></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Cleaning Service</b></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Covid-19 Health Protocol</b></li>
              </ul>
              <div class="card-footer text-center">
                <a href="booking.php?BuildingType=Nusantara+Hall" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="Garuda Hall.jpg" class="card-img-top" alt="Garuda Hall">
          <div class="card-body">
            <h5 class="card-title">Garuda Hall</h5>
            <h5 class="card-text"><small class="text-muted">$1000 / Hour</small></h5>
            <h5 class="card-text"><small class="text-muted">2000 Capactiy</small></h5>
            <div class="card-text text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="color: #2ecc71;"></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Free Parking</b></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Full AC</b></li>
                <li class="list-group-item" style="color: red;"><b>No Cleaning Service</b></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Covid-19 Health Protocol</b></li>
              </ul>
              <div class="card-footer text-center">
                <a href="booking.php?BuildingType=Garuda+Hall" class="btn btn-primary">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <img src="Gedung Serbaguna.jpg" class="card-img-top" alt="Gedung Serbaguna">
          <div class="card-body">
            <h5 class="card-title">Gedung Serba Guna</h5>
            <h5 class="card-text"><small class="text-muted">$500 / Hour</small></h5>
            <h5 class="card-text"><small class="text-muted">500 Capactiy</small></h5>
            <div class="card-text text-center">
              <ul class="list-group list-group-flush">
                <li class="list-group-item" style="color: red;"></li>
                <li class="list-group-item" style="color: red;"><b>No Free Parking</b></li>
                <li class="list-group-item" style="color: red;"><b>No Full AC</b></li>
                <li class="list-group-item" style="color: red;"><b>No Cleaning Service</b></li>
                <li class="list-group-item" style="color: #2ecc71;"><b>Covid-19 Health Protocol</b></li>
              </ul>
              <div class="card-footer text-center">
                <button href="booking.php?BuildingType=Gedung+Serba+Guna" class="btn btn-primary">Book Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <footer style="text-align: center;">Created by : Alfin_1202190278</footer>
</body>

</html>