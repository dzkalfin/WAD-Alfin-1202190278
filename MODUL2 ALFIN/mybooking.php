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
  <title>My Booking</title>
</head>

<body>
  <?php
  $name = $_POST['Name'];
  $date = $_POST['date'];
  $time = $_POST['time'];
  $durasi = $_POST['durasi'];
  $telpon = $_POST['telpon'];
  $build = $_POST['BuildingTipe'];
  $service = $_POST['service[]'];
  $selisih = date('H:i', strtotime("$time+$durasi hour"));
  $list = array();

  $nus = 2000;
  $gar = 1000;
  $gsg = 500;
  $cat = 700;
  $dec = 450;
  $sound = 250;

  # N U S A N T A R A !1!!!1!1

  $nus1 = $cat + ($nus * $durasi);
  $nus2 = $dec + ($nus * $durasi);
  $nus3 = $sound + ($nus * $durasi);
  $nus4 = $cat + $dec + ($nus * $durasi);
  $nus5 = $cat + $sound + ($nus * $durasi);
  $nus6 = $cat + $dec + $sound + ($nus * $durasi);
  $nus7 = $dec + $sound + ($nus * $durasi);
  $nus8 = $nus * $durasi;



  # G A R U D A 

  $gar1 = $cat + ($gar * $durasi);
  $gar2 = $dec + ($gar * $durasi);
  $gar3 = $sound + ($gar * $durasi);
  $gar4 = $cat + $dec + ($gar * $durasi);
  $gar5 = $cat + $sound + ($gar * $durasi);
  $gar5 = $cat + $dec + $sound + ($gar * $durasi);
  $gar6 = $dec + $sound + ($gar * $durasi);
  $gar7 = $gar * $durasi;

  # G S G 

  $gsg1 = $cat + ($gsg * $durasi);
  $gsg2 = $dec + ($gsg * $durasi);
  $gsg3 = $sound + ($gsg * $durasi);
  $gsg4 = $cat + $dec + ($gsg * $durasi);
  $gsg5 = $cat + $sound + ($gsg * $durasi);
  $gsg5 = $cat + $dec + $sound + ($gsg * $durasi);
  $gsg6 = $dec + $sound + ($gsg * $durasi);
  $gsg7 = $gsg * $durasi;


  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Booking">Booking</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Booking Number</th>
          <th scope="col">Name</th>
          <th scope="col">Check-in</th>
          <th scope="col">Check-out</th>
          <th scope="col">Building type</th>
          <th scope="col">Phone number</th>
          <th scope="col">Service</th>
          <th scope="col">Total Price</th>
        </tr>
      </thead>
      <tbody>
        <tr style="background-color: #bdc3c7;">
          <th scope="row">
            <?php
            echo (rand() . "<br>");
            ?>
          </th>
          <td>
            <?php echo $name;
            ?>
          </td>
          <td>
            <?php echo $date ?> <?php echo $time; ?>
          </td>
          <td>
            <?php echo $date ?> <?php echo $selisih ?>
          </td>
          <td><?php echo $building ?></td>
          <td>
            <?php echo $telpon ?>
          </td>
          <td></td>
          <td>
            <?php if ($building == "Nusantara Hall") {
              if (empty($list)) {
                echo "$$nus7";
              } elseif (in_array("Catering", $list) and in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$nus6";
              } elseif (!in_array("Catering", $list) and in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$nus7";
              } elseif (!in_array("Catering", $list) and !in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$nus3";
              } elseif (in_array("Catering", $list) and !in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$nus5";
              } elseif (in_array("Catering", $list) and in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$nus4";
              } elseif (!in_array("Catering", $list) and in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$nus2";
              } elseif (in_array("Catering", $list) and !in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$nus1";
              }
            } elseif ($BuildingType == "Garuda Hall") {
              if (empty($list)) {
                echo "$$gar7";
              } elseif (in_array("Catering", $list) and in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gar6";
              } elseif (!in_array("Catering", $list) and in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gar7";
              } elseif (!in_array("Catering", $list) and !in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gar3";
              } elseif (in_array("Catering", $list) and !in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gar5";
              } elseif (in_array("Catering", $list) and in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$gar4";
              } elseif (!in_array("Catering", $list) and in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$gar2";
              } elseif (in_array("Catering", $list) and !in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$gar1";
              }
            } elseif ($BuildingType == "Garuda Hall") {
              if (empty($list)) {
                echo "$$gsg7";
              } elseif (in_array("Catering", $list) and in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gsg6";
              } elseif (!in_array("Catering", $list) and in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gsg7";
              } elseif (!in_array("Catering", $list) and !in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gsg3";
              } elseif (in_array("Catering", $list) and !in_array("Decoration", $list) and in_array("Sound System", $list)) {
                echo "$$gsg5";
              } elseif (in_array("Catering", $list) and in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$gsg4";
              } elseif (!in_array("Catering", $list) and in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$gsg2";
              } elseif (in_array("Catering", $list) and !in_array("Decoration", $list) and !in_array("Sound System", $list)) {
                echo "$$gsg1";
              }
            } ?>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>

</html>