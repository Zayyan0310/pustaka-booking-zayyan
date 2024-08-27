<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/'); ?>logo-pb.png" />
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>user/css/bootstrap.css" />
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css" />
	<title>Pustaka-Booking</title>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url(); ?>">Pustaka</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link active" href="<?= base_url(); ?>">Beranda <span class="sr-only">(current)</span></a>
					<?php
					if (!empty($this->session->userdata('email'))) { ?>
						<a class="nav-item nav-link" href="<?= base_url('booking'); ?>">Booking <b> <?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
						<a class="nav-item nav-link" href="<?= base_url('booking/exporttopdf'); ?>"><i class="fas fw fa-login"></i> Cetak Bukti Booking</a>
						<a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
						<a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a>
					<?php } else { ?>
						<a href="#" class="nav-item nav-link" data-toggle="modal" data-target="#daftarModal"> <i class="fas fw fa-login">Daftar</i> </a>
						<a class="nav-item nav-link" data-toggle="modal" data-target="#loginModal" href="#"><i class="fas fw fa-login"></i> Log in</a>
					<?php } ?>
					<span class="nav-item nav-link nav-right" style="display:block; margin-left:20px;">Selamat Datang <b><?= $user; ?></b></span>
				</div>
			</div>
		</div>
	</nav>
	<div class="container mt-5">
</body>

</html>