<!DOCTYPE html>

<html>
<head>
	<title>Login to your account</title>
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
				<h2>Sign In</h2>
				
			</div>
			<div class="form-group">
				<label>NIK</label>
				<input type="text" class="form-control" name="nik" placeholder="08999xxxx" autocomplete="off" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="Password" class="form-control" name="pass" placeholder="Password" autocomplete="off" required>
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign In</button>
			</div>
			<?php include ("signin_user.php"); ?>
		</form>
		<div class="text-center small" style="color: #674288;">Tidak Punya Akun? <a href="signup.php">Buat Akun</a></div>
	</div>
</body>
</html>