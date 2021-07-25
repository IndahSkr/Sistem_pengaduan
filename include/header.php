<?php
include ("../include/connection.php");


?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-inverse navbar-fixed-top">
	<?php
		// $user = $_SESSION['user_nik'];
        $get_user = "SELECT * FROM users ";
        $run_user = mysqli_query($con, $get_user);
        $row = mysqli_fetch_array($run_user);

		$user_name = $row['user_name'];
		$user_nik = $row['user_nik'];
		$user_profile = $row['user_profile'];
		
	echo "<div class='container-fluid'>
			<div class='navbar-header'>
				<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>                        
				</button>
				<a class='navbar-brand' href='#'><img src='../images/lg.png' class='img-responsive' width='20'></a>
			</div>
			<div class='collapse navbar-collapse' id='myNavbar'>
				<ul class='nav navbar-nav'>
					<li><a href='../home.php?username=$user_name'>Home</a></li>
					<li><a href='../home/syarat.php?username=$user_name'>Persyaratan</a></li>
					<li><a href='../chats.php?username=$user_name'>Chat</a></li>
					<li><a href='../bantuan.php?username=$user_name'>Bantuan</a></li>
					
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='#'><span class='glyphicon glyphicon-user'></span> $user_nik </a></li>
					<li><a href='../track.php?username=$user_name'><span class='glyphicon glyphicon-check'></span> Track</a></li>
					<li><a href='../logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>
				</ul>
			</div>
		</div>			
</nav><br>"
?>