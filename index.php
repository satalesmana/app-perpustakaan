<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
		<title>Latihan Jquery</title>
	</head>
	<link rel="stylesheet" href="lib/style.css"/>
	<link rel="stylesheet" href="lib/jquery-ui-1.12.1/jquery-ui.min.css"/>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css"/>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="#">Pustaka</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<?php  $active = isset($_GET['url'])?$_GET['url']:''; ?>
					<li class="nav-item <?php if($active =='biodata'){ echo "active"; } ?>">
						<a class="nav-link" href="index.php?url=biodata">Biodata</a>
					</li>
					<li class="nav-item <?php if($active =='buku'){ echo "active" ; } ?>">
						<a class="nav-link" href="index.php?url=buku">Buku</a>
					</li>
					<li class="nav-item <?php if($active =='peminjaman'){ echo "active" ; } ?>">
						<a class="nav-link" href="index.php?url=peminjaman">Peminjaman </a>
					</li>
					<li class="nav-item <?php if($active =='pengembalian'){ echo "active" ; } ?>">
						<a class="nav-link" href="index.php?url=pengembalian">Pengembalian </a>
					</li>
				</ul>
			</div>
		</nav>
		<br>
		
		<div class="row">
			<div class="container">
				<?php 
					include('module.php'); 
					if(isset($app_page) && $app_page !='')
						include($app_page);
				?>
			</div>
		</div>


		<script src="lib/jquery-3.4.1.min.js"></script>
		<script src="lib/jquery-ui-1.12.1/jquery-ui.min.js"></script>
		<script src="lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="lib/swal/dist/sweetalert2.all.min.js"></script>
		<script src="lib/jquery-loading/dist/jquery.loading.min.js"></script>

		<?php 
			if(isset($app_js) && $app_js !='')
				include($app_js);
		?>
		
	</body>
</html>