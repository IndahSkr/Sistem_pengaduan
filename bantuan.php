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
        <title>PENDAFTARAN KTP ELEKTRONIK</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link rel="stylesheet" type="text/css" href="css/body.css">
        <!-- <link rel="stylesheet" type="text/css" href="home.css"> -->
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
                            echo	"<li><a href='home.php?username=$user_name'>Home</a></li>
                                    <li><a href='home/syarat.php?username=$user_name'>Persyaratan</a></li>
                                    <li><a href='chats.php?username=$user_name'>Chat</a></li>
                                    <li class='active'><a href='bantuan.php?username=$user_name'>Bantuan</a></li>
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
        <div class="container-fluid " style="margin-left: 20px;margin-bottom: 20px; margin-top:30px;">
            <h1>Bantuan</h1>
            <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 panel panel-primary" style="margin-left: 5px;margin-bottom: 20px; margin-top: 10px;">
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">PENDAFTARAN</div>
                    <div class="panel-body" >
                        <h4>Siapa yang dapat melakukan pendaftaran?</h4>
                        <h5>Yang dapat melakukan pendaftaran adalah warga yang terdaftar di database kependudukan Kabupaten Tegal dan berusia 17 tahun ke atas.</h5><br>
                        <h4>Apa yang perlu dipersiapkan sebelum melakuakan pendaftaran?</h4>
                        <h5>Nomor NIK dan Nomor HP yang Aktif.</h5><br>
                        <h4>Bagaimana jika NIK saya tidak terdaftar</h4>
                        <h5>Jika NIK tidak terdaftar cek kembali NIK pada KTP-el dan Kartu Keluarga dipastikan harus sama. Atau dapat langsung datang ke Dinas Kependudukan dan Pencatatan Sipil Kabupaten Tegal untuk konfirmasi.</h5><br>
                        <h4>Bagaimana jika muncul peringatan NIK sudah terdaftar padahal saya belum pernah melakukan pendaftaran?</h4>
                        <h5>Silahkan datang ke Dinas Kependudukan dan Pencatatan Sipil Kabupaten Tegal dengan membawa Asli KTP dan Kartu Keluarga untuk pengecekan dan konfirmasi data.</h5>
                        
                    </div>
                </div> 
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">PELAPOR</div>
                    <div class="panel-body" >
                        <h4>Apa itu pelapor?</h4>
                        <h5>Pelapor merupakan warga yang sudah berhasil melakukan pendaftaran dan akan melakukan pelaporan Akta Kelahiran, Akta Kematian, dan lain-lain tergantung pelayananan yang disediakan.</h5><br>
                        <h4>Bagaimana mengubah dan melihat data saya (pelapor)?</h4>
                        <h5>Buka halaman Profil Pelapor nanti akan ditampilkan NIK, Nama Lengkap, Nomor HP dan Alamat Email. Data yang dapat dirubah adalah Nomor HP dan Alamat Email.</h5>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </body>
</html>
<?php } ?>