<?php
include ("include/connection.php");

	if (isset($_POST['sign_up'])) {
		$name = htmlentities(mysqli_real_escape_string($con, $_POST['user_name']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['user_password']));
		$nik = htmlentities(mysqli_real_escape_string($con, $_POST['user_nik']));
		$kec = htmlentities(mysqli_real_escape_string($con, $_POST['user_kecamatan']));
		// $gender = htmlentities(mysqli_real_escape_string($con, $_POST['user_gender']));
		$rand = rand(1, 2);

		if ($name == '') {
			echo "<script>alert('Kami tidak bisa mengidentifikasi namamu)</script>";
		}
		if (strlen($pass)<4) {
			echo "<script>alert('Password harus lebih dari 4 karakter!')</script>";
			exit();
		}

		$check_nik = "select * from users where user_nik='$nik'";
		$run_nik = mysqli_query($con, $check_nik);

		$check = mysqli_num_rows($run_nik);

		// $check_hp = "select * from users where user_email='$mail'";
		// $run_email = mysqli_query($con, $check_email);

		// $check = mysqli_num_rows($run_hp);

		if($check==1){

			echo "<script>alert('NIK sudah ada'</script>)";
			echo "<script>window.open('signup.php,'_self')</script>";
			exit();
		}

		if ($rand == 1) {
			$profile_pic = "images/users.png";}
		elseif ($rand == 2) {
			$profile_pic = "images/users.png";
		}
		$insert = "INSERT INTO users (user_name, user_pass, user_nik, user_profile, user_kecamatan) values('$name', '$pass', '$nik', '$profile_pic', '$kec')";
		$query = mysqli_query($con, $insert);
		if ($query) {
			echo "<script>alert('Selamat $name, Akunmu berhasil dibuat')</script>";
			echo "<script>window.open('signin.php', '_self')</script>";
		}
		else{
			echo "<script>alert('Registrasi gagak, Silahkan Coba Lagi!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
		}
		
	}

?>