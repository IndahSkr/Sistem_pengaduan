<!DOCTYPE html>
<?php
session_start();
include ("include/connection.php");

if (!isset($_SESSION['user_nik'])) {
	header("location: signin.php");
}
else{
?>
<html lang="en">

<head>
    <title>Pendaftaran pengajuan surat menyurat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/signin.css">

</head>

<body>
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
                    	echo	"<li class='active'><a href='home.php?username=$user_name'>Home</a></li>
                    			<li><a href='home/syarat.php?username=$user_name'>Persyaratan</a></li>
                                <li><a href='chats.php?username=$user_name'>Chat</a></li>
                                <li><a href='bantuan.php?username=$user_name'>Bantuan</a></li>
					";
					?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user_nik'] ?></a></li>
					<li><a href="track.php?username=$user_name"><span class="glyphicon glyphicon-check"></span> Track</a></li>
					<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="margin-top: 80px;">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 ">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">AKTA KELAHIRAN</div>
                    <div class="panel-body" style="text-align: center"><img src="images/baby2.png" class="img-responsive" width="65%" style="margin: auto"></div>
                    <?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/akta_kelahiran.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">AKTA KEMATIAN</div>
                    <div class="panel-body" style="text-align: center"><img src="images/death.png" class="img-responsive" width="65%" style="margin: auto"></div>
                    <?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/akta_kematian.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">KTP ELEKTRONIK</div>
                    <div class="panel-body" style="text-align: center"><img src="images/business-card.png" class="img-responsive" width="65%" style="margin: auto"></div>
					<?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/ktp_elektronik.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
					
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">KERTU KELUARGA</div>
                    <div class="panel-body" style="text-align: center"><img src="images/real-estate.png" class="img-responsive" width="65%" style="margin: auto"></div>
                    <?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/kartu_keluarga.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">PERPINDAHAN</div>
                    <div class="panel-body" style="text-align: center"><img src="images/truck.png" class="img-responsive" width="65%" style="margin: auto"></div>
                    <?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/perpindahan.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">KEDATANGAN</div>
                    <div class="panel-body" style="text-align: center"><img src="images/new-arrivals.png" class="img-responsive" width="65%" style="margin: auto"></div>
                    <?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/kedatangan.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">KIA (KARTU IDENTITAS ANAK)</div>
                    <div class="panel-body" style="text-align: center"><img src="images/business-card-2.png" class="img-responsive" width="65%" style="margin: auto"></div>
                    <?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/kia.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">UPDATE DATA</div>
                    <div class="panel-body" style="text-align: center"><img src="images/update.png" class="img-responsive" width="65%" style="margin: auto"></div>
					<?php
						$user = $_SESSION['user_nik'];
						$get_user = "SELECT * FROM users ";
						$run_user = mysqli_query($con, $get_user);
						$row = mysqli_fetch_array($run_user);

						$user_name = $row['user_name'];
						$user_nik = $row['user_nik'];
						$user_profile = $row['user_profile'];
						echo "<a href='home/update_data.php?username=$user_name'><button type='button' class='btn btn-primary btn-block'>PILIH</button></a>"
					?>
					
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="text-align: center;">PELAYANAN LAIN</div>
                    <div class="panel-body" style="text-align: center"><img src="images/books.png" class="img-responsive" width="65%" style="margin: auto"></div>
                    <a href="#"><button type="button" class="btn btn-primary btn-block">PILIH</button></a>
                </div>
            </div>
        </div>
        <!-- <footer class="container-fluid text-center">
            <p>DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</p>
            <form class="form-inline">Get deals:
                <input type="email" class="form-control" size="50" placeholder="Email Address">
                <button type="button" class="btn btn-danger">Sign Up</button>
            </form>
        </footer> -->
    </div>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>
<?php } ?>
</html>