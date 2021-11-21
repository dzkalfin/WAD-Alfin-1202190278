<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Booking</title>
</head>

<body>
  <?php 
  $building=$_POST['BuildingType'];
  ?>
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
            <a class="nav-link" href="booking.php?BuildingType=Nusantara+Hall">Booking</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="mx-1 my-4 py-2 bg-dark text-white">
      <h5 style="text-align: center; ">Find your Best Deal for your event, here!</h5>
    </div>
    <div class="row border my-3 mx-3">
      <div class="col">
        <img src="img/<?php echo $building?>.jpeg" class="card-img-top " style="padding-top: 25%;" alt="Nusantara Hall">
      </div>
      <div class="col">
        <form action="mybooking.php" method="POST">
          <p class="my-2">Nama</p>
          <input name="Name" class="form-control mt-2" type="text" value="Alfin_1202190278" aria-label="readonly input example" readonly>
          <label for="date" class="form-label mt-2">Event Date</label>
          <input name="date" type="date" class="form-control" id="date" placeholder="mm / dd / yyyy">
          <label for="time" class="form-label mt-2">Start Time</label>
          <input name="time" type="time" class="form-control" id="waktu" placeholder="--:-- --">
          <label for="durasi" class="form-label mt-2">Duration Hours</label>
          <input name="durasi" type="number" class="form-control" id="date" min="0" max="24">
          <label for="tempat" class="form-label my-2">Building type</label>
          <select name="BuildingType" type="select" class="form-select" id="tempat" placeholder="Pilih Tempat">
            <option selected><?php echo $building; ?></option>
            <option value="Nusantara Hall">Nusantara Hall</option>
            <option value="Garuda Hall">Garuda Hall</option>
            <option value="Gedung Serba Guna">Gedung Serba Guna</option>
          </select>
          <label for="telpon" class="form-label mt-2">Phone Number</label>
          <input name="telpon" type="number" class="form-control" id="telpon" min="0" max="999999999">

          <p>Add Service(s)</p>
          <div class="form-check mx-1">
            <input name="service[]" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Catering / 700$
            </label>
          </div>
          <div class="form-check mx-1">
            <input name="service[]" class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              Decoration / 450$
            </label>
          </div>
          <div class="form-check mx-1">
            <input name="service[]" class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
            <label class="form-check-label" for="flexCheckChecked">
              Sound System / 250$
            </label>
          </div>
          <div class="d-grid gap-2 my-2">
            <button type="submit" class="btn btn-primary">Book</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>