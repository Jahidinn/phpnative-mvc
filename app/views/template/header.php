<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> <?= $data['judul']; ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Bootstrap CSS File -->
	<link href="<?= BASEURL; ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">PHPMVC</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav">
			      <li class="nav-item <?php if ($data['judul']=='Home') { echo 'active'; }; ?>">
			        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item <?php if ($data['judul']=='About') { echo 'active'; }; ?>">
			        <a class="nav-link" href="about">About</a>
			      </li>
			      <li class="nav-item <?php if ($data['judul']=='Mahasiswa') { echo 'active'; }; ?>">
			        <a class="nav-link" href="mahasiswa">Mahasiswa</a>
			      </li>
<!-- 			      <li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      </li> -->
			    </ul>
			  </div>
		</div>
</nav>