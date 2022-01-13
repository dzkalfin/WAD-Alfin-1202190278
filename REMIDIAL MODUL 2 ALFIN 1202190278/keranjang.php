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

		<section id="keranjang" class="vh-100">
			<div class="container py-5">
				<div class="text-center my-3">
					<h5 class="display-6">Pesanan</h5>
				</div>
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Jenis Paket</th>
							<th scope="col">Harga</th>
							<th scope="col">Pembeli</th>
							<th scope="col">Tanggal Order</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td scope="col">1</td>
							<td><?=$_POST['paket']?></td>
							<td><?=$_POST['paket']?></td>
							<td><?=$_POST['nama']?></td>
							<td><?=$_POST['tanggal']?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</section>


		<footer class="bg-dark text-light">
			<div class="text-center py-3">
				Dibuat Oleh Alpin Ganteng
			</div>
		</footer>
	</body>
	</html>