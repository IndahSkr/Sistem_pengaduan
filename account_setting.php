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
	<title>Setting || Coba</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width,  initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="../css/find_people.css"> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
</head>
<body>
		<div class="row">
			<div class="col-sm-2">
			</div>
			<?php
				$user = $_SESSION['user_nik'];
				$get_user = "SELECT * FROM users Where user_nik='$user'";
				$run_user = mysqli_query($con, $get_user);
				$row = mysqli_fetch_array($run_user);

				$user_name = $row['user_name'];
				$user_pass = $row['user_pass'];
				$user_nik = $row['user_nik'];
				$user_profile = $row['user_profile'];
				$user_kecamatan = $row['user_kecamatan'];
				$user_gender =$row['user_gender'];
			?>
			<div class="col-sm-8">
				<form action="" method="post" enctype="multipart/form-data">
					<table class="table table-bordered table-hover">
						<tr align="center">
							<td colspan="6" class="active"><h2>Ubah Pengaturan Akun</h2></td>
						</tr>
						<tr>
							<td style="font-weight: bold;">Ubah Username</td>
							<td>
								<input type="text" name="u_name" class="form-control" required value="<?php echo $user_name;?>"/>
							</td>
						</tr>
						<tr><td></td><td><a class="btn btn-default" style="text-decoration: none; font-size: 14px;" href="upload.php"><i class="fa fa-user" aria-hidden="true"></i> Ubah Profil</a></td></tr>

						<tr>
							<td style="font-weight: bold;">Ubah Nomor</td>
							<td>
								<input type="text" name="u_nik" class="form-control" required value="<?php echo $user_nik;?>"/>
							</td>
						</tr>

						<tr>
							<td style="font-weight: bold;">Kecamatan</td>
							<td>
								<select class="form-control" name="u_kecamatan">
									<option><?php echo $user_kecamatan; ?></option>
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
							</td>
						</tr>

						<tr>
							<td style="font-weight: bold;">Jenis Kelamin</td>
							<td>
								<select class="form-control" name="u_gender">
									<option><?php echo $user_gender; ?></option>
									<option>Laki-laki</option>
									<option>Perempuan</option>
									<option>Lainya</option>
								</select>
							</td>
						</tr>

						<tr>
							<td style="font-weight: bold;">Lupa Password</td>
							<td>
								<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Lupa Sandi</button>

								<div id="myModal" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>
											<div class="modal-body">
												<form action="recovery.php?id=<?php echo $user_id; ?>" method="post" id="f">
													<strong>Siapa nama sahabat sekolahmu? </strong>
													<textarea class="form-control" cols="83" rows="4" name="content" placeholder="Seseorang"></textarea><br>
													<input class="btn btn-default" type="submit" name="sub" value="Submit" style="width: 100px;"><br><br>
													<pre>Jawaban atas pertanyaan tersebut akan ditanyakan saat kamu melupakan <br> Password.</pre><br><br>
												</form>
												<?php

												if (isset($_POST['sub'])) {
													$bfn = htmlentities($_POST['content']);

													if ($bfn == '') {
														echo "<script>alert('Tolong masukan sesuatu.')</script>";
														echo "<script>window.open('account_setting.php', '_self')</script>";
														exit();
													}
													else{
														$update = "UPDATE users set forgotten_answer='$bfn' where user_nik='$user'";

														$run = mysqli_query($con, $update);

														if ($run) {
															echo "<script>alert('Working....')</script>";
														echo "<script>window.open('account_setting.php', '_self')</script>";
														}else{
															echo "<script>alert('Error ketika memperbaharui informasi')</script>";
														echo "<script>window.open('account_setting.php', '_self')</script>";
														}
													}
												}

												?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</td>
						</tr>
						<tr><td></td><td><a class="btn btn-default" style="text-decoration: none;font-size: 15px;" href="change_password.php"><i class="fa fa-key fa-fw" aria-hidden="true"></i> Ubah Password</a></td></tr>
						<tr align="center">
							<td colspan="6">
								<input type="submit" value="Update" name="update" class="btn btn-info">
							</td>
						</tr>
					</table>
				</form>
				<?php
					if (isset($_POST['update'])) {
						
						$user_name =htmlentities($_POST['u_name']);
						$nik = htmlentities($_POST['u_nik']);
						$u_kecamatan = htmlentities($_POST['u_kecamatan']);
						$u_gender = htmlentities($_POST['u_gender']);

						$update = "UPDATE users set user_name= '$user_name', user_nik = '$nik', user_kecamatan = '$u_kecamatan', user_gender = '$u_gender' where user_nik = '$user'";

						$run = mysqli_query($con, $update);


						if ($run) {
						echo "<script>window.open('account_setting.php', '_self')</script>";
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