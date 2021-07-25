<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sign_in.css">
</head>
<body>
	<div class="signin-form">
		<form action="" method="post">
			<div class="form-header">
				<p><img src="images/lg.png" class="img-responsive" width="80" style="margin: auto"></p>
				<h2>Sign Up</h2>
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" name="user_name" placeholder="Namamu" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" class="form-control" name="user_password" placeholder="Password" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>NIK</label>
				<input type="text" class="form-control" name="user_nik" placeholder="333xxxxxxx" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Kecamatan</label>
				<select class="form-control" name="user_kecamatan" required>
					<option disabled="">Select a District</option>
					<option>Getasan</option>
					<option>Tengaran</option>
					<option>Susukan</option>
					<option>Suruh</option>
					<option>Pabelan</option>
					<option>Tuntang</option>
					<option>Banyubiru</option>
					<option>Jambu</option>
					<option>Sumowono</option>
					<option>Ambarawa</option>
					<option>Bawen</option>
					<option>Bringin</option>
					<option>Bergas</option>
					<option>Pringapus</option>
				</select>
			</div>
			<!-- <div class="form-group">
				<label>jenis Kelamin</label>
				<select class="form-control" name="user_gender" required>
					<option disabled="">Pilih Jenis Kelamin</option>
					<option>Laki-laki</option>
					<option>Perempuan</option>
					<option>Lainya</option>
			</div> -->
			<div class="form-group">
				<label class="checkbox-inline"><input type="checkbox" required></label>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">Sign Up</button>
			</div>
			<?php 
			include ("signup_user.php"); ?>
		</form>
		<div class="text-center small" style="color: #674288;">Sudah punya akun? <a href="signin.php">Masuk disini</a></div>
	</div>
</body>
</html>