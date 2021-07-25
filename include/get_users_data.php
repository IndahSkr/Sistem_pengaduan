<?php

$con = mysqli_connect("localhost", "root", "", "database_sistem");

	$user = "SELECT * FROM users WHERE user_name='Admin'";

	$run_user = mysqli_query($con, $user);

	while ($row_user=mysqli_fetch_array($run_user)) {
		
		$user_id =$row_user['user_id'];
		$user_name = $row_user['user_name'];
		$user_profile = $row_user['user_profile'];
		$user_nik = $row_user['user_nik'];
		// $login = $row_user['log_in'];

		echo "
			<li>
				<div class='chat-left-img'>
				<img src='$user_profile'>
				</div>
				<div class='chat-left-detail'>
				<p><a href='chat.php?user_name=$user_name'>$user_name</a></p>
				<p><a href='chat.php?user_name=$user_nik'>$user_nik</a></p>";
				
			
			"
				</div>
			</li>

			";
		}
				
	

?>