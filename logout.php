<?php 
	session_start();
	// logout process
	session_destroy();

	header("Location:signin.php")
	//redirect ke halaman login
	// echo "<script> 
	// 		window.location='signin.php';
	// 	</script>";
?>