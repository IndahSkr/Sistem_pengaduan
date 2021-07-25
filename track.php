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
	<title>Tracking Berkas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script scr="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/body.css">
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
					
					$get_user = "SELECT * FROM users";
					$run_user = mysqli_query($con, $get_user);
					$row = mysqli_fetch_array($run_user);

					$user_name = $row['user_name'];
					$user_nik = $row['user_nik'];
					$user_profile = $row['user_profile'];
                    	echo	"<li><a href='home.php?username=$user_name'>Home</a></li>
                    			<li><a href='home/syarat.php?username=$user_name'>Persyaratan</a></li>
                                <li><a href='chats.php?username=$user_name'>Chat</a></li>
                                <li><a href='bantuan.php?username=$user_name'>Bantuan</a></li>
					";
					?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user_nik'] ?></a></li>
					<li class="active"><a href="#"><span class="glyphicon glyphicon-check"></span> Track</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid" style="margin-left: 20px;margin-bottom: 20px; margin-top:50px;">
        <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 panel panel-primary" style="margin-left: 5px;margin-bottom: 20px; margin-top: 10px;">
            <h3>Tracking Berkas</h3>
            <!-- <p>Kamu mengajukan berkas<?php echo $_SESSION['user_nik'] ?></p> -->
            <?php
            // $get_user = "SELECT user_nik FROM users where user.user_nik=perjalanan";
            // $run_user = mysqli_query($con, $get_user);
            // $row = mysqli_fetch_array($run_user);

            // $user_name = $row['user_name'];
            $user_nikss = $_SESSION['user_nik'];
            $sel_msg = "SELECT * from perjalanan  WHERE user_nik='$user_nikss'";
            $run_msg = mysqli_query($con, $sel_msg);

            while ($row = mysqli_fetch_array($run_msg)) {
                $user_niks = $row['user_nik'];
                $nama_data = $row['nama_data'];
                $daftar = $row['daftar'];
                $upload = $row['upload'];
                $proses = $row['proses'];
                $selesai = $row['selesai'];
                
                echo "<p>Kamu mengajukan berkas $nama_data</p>&nbsp
                
                <p>Saat ini berkasmu Telah $daftar</p>&nbsp
                <p>Saat ini berkasmu $upload</p>&nbsp
                <p>Saat ini berkasmu $proses</p>&nbsp
                <p>Apakah sudah dapat diambil? $selesai</p>&nbsp
                <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>";

                

            }
            ?>
        </div>
    </div>
</body>
</html>
<?php } ?>
<!-- <li><a href="logout.php">Logout</a></li> -->