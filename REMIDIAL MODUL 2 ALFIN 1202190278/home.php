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
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#Produk">Produk</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<section id="Home" class="vh-100">
			<div class="container py-5">
				<div class="text-center my-5 py-5">
					<h1 class="display-1">Alpin.co</h1>
					<p>Memberikan Pelayanan Pembuatan Website</p>
					<a href="#Produk" class="btn btn-outline-dark">Pilih Paket</a>
				</div>
			</div>
		</section>

		<section id="Produk" class="vh-100">
			<div class="container py-5">
				<div class="row row-cols-1 row-cols-md-3 g-4">
					<div class="col">
						<div class="card h-100">
							<img src="https://digitalmarketerschicago.com/wp-content/uploads/2018/11/ecommerce-marketing-for-companies.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Website E-Commerce</h5>
								<p class="card-text">Rp. 1.500.000</p>
							</div>
							<div class="card-footer text-center ">
								<a href="order.php?id=1" class="btn btn-primary w-100">Pilih</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card h-100">
							<img src="https://cdn.dribbble.com/users/2180907/screenshots/5029187/minimal.png" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Website Company Profile</h5>
								<p class="card-text">Rp. 750.000</p>
							</div>
							<div class="card-footer text-center ">
								<a href="order.php?id=2" class="btn btn-primary w-100">Pilih</a>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card h-100">
							<img src="https://www.thebusinessyear.com/content/tby-event/5faa45ad-b6ad-4270-843f-9bf533b64f63.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Website Education</h5>
								<p class="card-text">Rp. 1.000.000</p>
							</div>
							<div class="card-footer text-center ">
								<a href="order.php?id=3" class="btn btn-primary w-100">Pilih</a>
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