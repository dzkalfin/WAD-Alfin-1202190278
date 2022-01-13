<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">


		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<style type="text/css">
			#Home{
				background-image: url('https://images.unsplash.com/photo-1518655048521-f130df041f66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: 100% 100%;

			}
		</style>

		<title>Hello, world!</title>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Ini Logo</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav ms-auto">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="home.php">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="home.php#Produk">Produk</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="Order" class="vh-100">
			<div class="container py-5">
				<div class="card mb-3">
					<div class="row g-0">
						<div class="col-md-6">
							<img src="https://www.seoclerk.com/pics/533775-1JtuyN1494964464.jpg" class="img-fluid rounded-start" alt="...">
						</div>
						<div class="col-md-6">
							<div class="card-body">
								<h5 class="card-title">Order</h5>
								<form action="keranjang.php" method="POST">
									<div class="my-3">
										<label for="paket" class="form-label">Jenis Paket</label>
										<input type="text" name="paket" id="paket" class="form-control" <?php if ($_GET['id'] == 1): ?>
										value="Website E-Commere"
									<?php endif ?>
									<?php if ($_GET['id'] == 2): ?>
										value="Website Company Profile"
									<?php endif ?>
									<?php if ($_GET['id'] == 2): ?>
										value="Website Education"
										<?php endif ?> readonly>
									</div>
									<div class="my-3">
										<label for="harga" class="form-label">Harga Paket</label>
										<input type="text" name="harga" id="harga" class="form-control" <?php if ($_GET['id'] == 1): ?>
										value="Rp 1.500.000"
									<?php endif ?>
									<?php if ($_GET['id'] == 2): ?>
										value="Rp 750.000"
									<?php endif ?>
									<?php if ($_GET['id'] == 2): ?>
										value="Rp 1.000.000"
										<?php endif ?> readonly>
									</div>
									<div class="my-3">
										<label for="nama" class="form-label">Nama Pembeli</label>
										<input type="text" name="nama" class="form-control">
									</div>
									<div class="my-3">
										<label for="tanggal" class="form-label">Pilih Tanggal Pesan</label>
										<input type="date" name="tanggal" class="form-control">
									</div>
									<div class="my-3">
										<button type="submit" name="order" class="btn btn-primary w-100">Order</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>


		<footer class="bg-dark text-light">
			<div class="text-center py-3">
				Dibuat Oleh Alpin Ganteng
			</div>
		</footer>
	</body>
	</html>