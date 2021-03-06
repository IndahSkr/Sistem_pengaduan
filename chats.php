<!DOCTYPE html>
<?php
session_start();
include ("include/connection.php");

if (!isset($_SESSION['user_nik'])) {
	header("location: signin.php");
}
else{
?>
<html>
<head>
	<title>Chating || Coba</title>
	<title>Chating || Coba</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<div class="container main-section">
<nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive" width="140"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
				<?php
					
					$get_user = "SELECT * FROM users ";
					$run_user = mysqli_query($con, $get_user);
					$row = mysqli_fetch_array($run_user);

					$user_name = $row['user_name'];
					$user_nik = $row['user_nik'];
					$user_profile = $row['user_profile'];
                    	echo	"<li><a href='home.php?username=$user_name'>Home</a></li>
                    			<li><a href='home/syarat.php?username=$user_name'>Persyaratan</a></li>
                                <li class='active'><a href='chats.php?username=$user_name'>Chat</a></li>
                                <li><a href='bantuan.php?username=$user_name'>Bantuan</a></li>
								</ul>
								<ul class='nav navbar-nav navbar-right'>
									<li><a href='#'><span class='glyphicon glyphicon-user'></span> $user_nik </a></li>
									<li><a href='track.php?username=$user_name'><span class='glyphicon glyphicon-check'></span> Track</a></li>
					";
					?>
               
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

		<div class="row" style="margin-top: 50px;">
			<div  class="col-md-3 col-sm-3 col-xs-12 left-sidebar">
				<div class="input-group searchbox">
					<div  class="input-group-btn">
                        <h4 style="color: #3A3A3A">Chat</h4>
					</div>
				</div>
				<div class="left-chat">
					<ul>
						<?php include ("include/get_users_data.php"); ?>
					</ul>
				</div>
			</div>
			<div class="col-md-9 col-sm-9 col-xs-12 right-sidebar">
					<div class="row">
						<!-- getting the user information who is logged in -->
						<?php
							$user = $_SESSION['user_nik'];
							$get_user = "SELECT * FROM users WHERE user_nik='$user'";
							$run_user = mysqli_query($con, $get_user);
							$row = mysqli_fetch_array($run_user);

							$user_id = $row['user_id'];
							$user_name = $row['user_name'];
						?>

						<!-- getting the user data on which user click -->
						<?php
							// if (isset($_GET['user_name'])) {

							// 	global $con;

							// 	$get_username = $_GET['user_name'];
							// 	$get_user = "SELECT * FROM users WHERE user_name='$get_username'";

							// 	$run_user = mysqli_query($con, $get_user);

							// 	$row_user = mysqli_fetch_array($run_user);

							// 	$username = $row_user['user_name'];
							// 	$user_profile_image = $row_user['user_profile'];
							// }

							$total_message = "SELECT * FROM chat WHERE (sender_username= '$user_name' AND receiver_username='Admin') OR (receiver_username='$user_name' AND sender_username='Admin')";
							$run_message = mysqli_query($con, $total_message);
							$total = mysqli_num_rows($run_message);
						?>

						<div class="col-md-12 right-header">
							<div class="right-header-img">
								<img src="<?php echo "$user_profile"; ?>">
							</div>
							<div class="right-header-detail">
								<form method="post">
									<p><?php echo $user_name; ?></p>
									<span><?php echo $total; ?>  message</span>&nbsp &nbsp
									<button name="logout" class="btn btn-danger">Logout</button>
								</form>	
								<?php
									if (isset($_POST['logout'])) {
										header("location:logout.php");
										exit();
									}
								?>
							</div>
						</div>
					</div>
					<div class="row">
						<div id="scrolling_to_bottom" class="col-md-12 right-header-contentChat">
							<?php
								// $update_msg = mysqli_query($con, "UPDATE chat SET msg_status='read' WHERE sender_username='$username' AND receiver_username='$user_name'");
								$sel_msg = "SELECT * from chat WHERE (sender_username='$user_name' AND receiver_username='Admin') OR (receiver_username='$user_name' AND sender_username='Admin') ORDER BY 1 ASC";
								$run_msg = mysqli_query($con, $sel_msg);

								while ($row = mysqli_fetch_array($run_msg)) {
									$sender_username = $row['sender_username'];
									$receiver_username = $row['receiver_username'];
									$msg_content = $row['msg_content'];
									$msg_date = $row['msg_date'];
								?>
								<ul>
									<?php
										if ($user_name== $sender_username AND 'Admin' == $receiver_username) {
											echo "<li>
											<div class='rightside-right-chat'>
                                                <span> Admin <small>$msg_date</small></span><br><br>
                                                
												<p>$msg_content</p>
											</div>
                                            </li>
                                            <li>
											<div class='rightside-left-chat'>
												
                                                <p>Terimakasih. Pesan Akan Segera Direspon oleh Admin</p>
											</div>
											</li>
											";
										}

										else if ($user_name== $receiver_username AND 'Admin' == $sender_username) {
											echo "<li>
											<div class='rightside-left-chat'>
												<span> $username <small>$msg_date</small></span><br><br>
                                                <p>Terimakasih. Pesan Akan Segera Direspon oleh Admin</p>
                                                <p>$msg_content</p>
											</div>
											</li>
											";
										}

										
									?>
								</ul>
								<?php
									}
								?>
						</div>
						<div>
						<div class="col-md-12 right-chat-textbox">
							<form  method="post">                          
								<input autocomplete="off" type="text" name="msg_content" placeholder="Tulis pesanmu....">
								<button  class="btn" name="submit"><i class="fa fa-telegram" aria-hidden="true"></i></button>
							</form>
						</div>
					</div>
					</div>
				</div>
		</div>
	</div>
	<?php
		if (isset($_POST['submit'])) {
			$msg = htmlentities($_POST['msg_content']);
			if ($msg == "") {
				echo "<div class='alert alert-danger'>
					<strong><center>Message was ubable to send</center></strong>
				</div>
				";
			}
			else if (strlen($msg)>100) {
				echo "
					<div class='alert alert_danger'>
						<strong><center>Message is too long. Use only 100 Characters</center></strong>
					</div>
				";
			}
			else{
				$insert = "INSERT into chat(sender_username, receiver_username, msg_content, msg_date) VALUES ('$user_name', 'Admin', '$msg', NOW())";
				$run_insert = mysqli_query($con, $insert);
			}
		}
	?>

	<script>
		$('#scrolling_to_bottom'.animate({
			scrollTop: $('#scrolling_to_bottom').get(0).scrollHeight
		},100));
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			var height = $(window).height();
			$('.left-chat').css('height', (height - 92) + 'px');
			$('.right-header-contentChat').css('height', (height - 163) + 'px');
		});
	</script>
	
	<!-- <li><a href="logout.php">Logout</a></li> -->
</body>
</html>
<?php } ?>
<!-- <li><a href="logout.php">Logout</a></li> -->