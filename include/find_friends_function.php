<?php
$con = mysqli_connect("localhost", "root", "", "sistem") or die ("connection was not estabilished");
function search_user(){
	global $con;

	if (isset($_GET['search_btn'])) {
		$search_query = htmlentities($_GET['search_query']);
		$get_user = "SELECT * FROM users WHERE user_name LIKE '%$search_query%' OR user_kecamatan LIKE '%$search_query%'";
	} else{
		$get_user = "SELECT * FROM users Order By user_kecamatan , user_name DESC LIMIT 5";
	}
	$run_user = mysqli_query($con, $get_user);
	while ($row_user=mysqli_fetch_array($run_user)) {
		$user_name = $row_user['user_name'];
		$user_profile = $row_user['user_profile'];
		$kecamatan = $row_user['user_kecamatan'];
		$gender = $row_user['user_gender'];

		//now displaying all at once

		echo "
			<div class='card'>
				<img src='../$user_profile'>
				<h1>$user_name</h1>
				<p class='title'>$kecamatan</p>
				<p>$gender</p>
				<form method='post'>
					<p><button name='add'>Chat with $user_name</button></p>
				</form>
			</div><br><br>

		";

		if (isset($_POST['add'])) {
			echo "<script>window.open('../home.php?user_name=$user_name', '_self')</script>";
		}
	}
}
?>