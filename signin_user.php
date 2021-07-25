<?php 
session_start();

include ("include/connection.php");
	
	if (isset($_POST['sign_in'])) {
		$nik = htmlentities(mysqli_real_escape_string($con, $_POST['nik']));
		$pass = htmlentities(mysqli_real_escape_string($con, $_POST['pass']));

		$select_user = "SELECT * from users where user_nik='$nik' AND user_pass='$pass'";
		$query = mysqli_query($con, $select_user);
		$check_user = mysqli_num_rows($query);

		if ($check_user == 1 ) {
			$_SESSION['user_nik']=$nik;

			$update_msg = mysqli_query($con, "UPDATE users SET log_in='online' WHERE user_nik = '$nik'");
			$user = $_SESSION['user_nik'];
			$get_user = "select * from users where user_nik='$user'";
			$run_user = mysqli_query($con, $get_user);
			$row = mysqli_fetch_array($run_user);

			$user_name = $row['user_name'];

			echo "<script>window.open('home.php?user_name=$user_name', '_self')</script>";
		}
		else{
			echo "
			<div class='alert alert-danger'>
				<strong>Check your nik and password. </strong>
			</div>
			";
		}
	}
?>