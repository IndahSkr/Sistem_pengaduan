<!DOCTYPE html>
<?php
session_start();
include ("include/connection.php");
include ("include/header.php");

if (!isset($_SESSION['user_nik'])) {
	header("location: signin.php");
}
else{
?>
<html>
<head>
	<title>Ganti Foto Profil || Coba</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,  initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	body{
		overflow-x: hidden;
	}

</style>
<body>
	<div class="row">
		<div class="col-sm-2">
		</div>
		<div class="col-sm-8">
			<form action="" method="post" enctype="multipart/form-data">
				<table class="table table-bordered table-hover">
					<tr align="center">
						<td colspan="6" class="active"><h2>Ubah Password</h2></td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Password saat ini </td>
						<td>
							<input type="password" name="current_pass" id="mypass" class="form-control" required placeholder="Password Saat ini" />
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Password Baru</td>
						<td>
							<input type="password" name="u_pass1" id="mypass" class="form-control" required placeholder="Password baru" />
						</td>
					</tr>
					<tr>
						<td style="font-weight: bold;">Konfirmasi Password</td>
						<td>
							<input type="password" name="u_pass2" id="mypass" class="form-control" required placeholder="Konfirmasi Password" />
						</td>
					</tr>
					<tr align="center">
						<td colspan="6">
							<input type="submit" name="change" value="Change" class="btn btn-info" />
						</td>
							
					</tr>
				</table>
			</form>
			<?php
				if (isset($_POST['change'])) {
					$c_pass = $_POST['current_pass'];
					$pass1 = $_POST['u_pass1'];
					$pass2 = $_POST['u_pass2'];

					$user = $_SESSION['user_nik'];
					$get_user = "SELECT * FROM users Where user_nik='$user'";
					$run_user = mysqli_query($con, $get_user);
					$row = mysqli_fetch_array($run_user);

					$user_pass = $row['user_pass'];

					if ($c_pass !== $user_pass) {
						echo "
							<div class='alert alert-danger'>
								<strong>Password lama tidak cocok</strong>
							</div>
						";
					}

					if ($pass1 != $pass2) {
						echo "
							<div class='alert alert-danger'>
								<strong>Password baru tidak cocok dengan konfirmasi password</strong>
							</div>
						";
					}

					if ($pass1 <9 AND $pass2 < 9) {
						echo "
							<div class='alert alert-danger'>
								<strong>Pakailah 9 atau lebih karakter </strong>
							</div>
						";
					}

					if ($pass1==$pass2 AND $c_pass == $user_pass) {
						$update_pass = mysqli_query($con, "UPDATE users SET user_pass='$pass1' WHERE user_nik='$user'");
						echo "
						<div class='alert alert-danger'>
							<strong>Passwordmu berhasil diubah</strong>
						</div>
						";
					}
				}
			?>
		</div>
		<div class="col-sm-2">
		</div>
	</div>
</body>
</html>
<?php } ?>