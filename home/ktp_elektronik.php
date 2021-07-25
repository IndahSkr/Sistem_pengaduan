<!DOCTYPE html>
<?php
session_start();
include ("../include/connection.php");
// include ("../include/header.php");

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
        <link rel="stylesheet" type="text/css" href="../css/body.css">
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
                    <a class="navbar-brand" href="#"><img src="../images/logo.png" class="img-responsive" width="140"></a>
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
                            echo	"<li class='active'><a href='../home.php?username=$user_name'>Home</a></li>
                                    <li><a href='home/syarat.php?username=$user_name'>Persyaratan</a></li>
                                    <li><a href='../chats.php?username=$user_name'>Chat</a></li>
                                    <li><a href='../bantuan.php?username=$user_name'>Bantuan</a></li>
                        ";
                        ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user_nik'] ?></a></li>
                        <li><a href="../track.php?username=$user_name"><span class="glyphicon glyphicon-check"></span> Track</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <?php

        $user = $_SESSION['user_nik'];
        $get_user = "SELECT * FROM users Where user_nik='$user'";
        $run_user = mysqli_query($con, $get_user);
        $row = mysqli_fetch_array($run_user);

        $user_name = $row['user_name'];
        $user_nik = $row['user_nik'];
        $user_profile = $row['user_profile'];
        echo"   <div class='container-fluid col-sm-12 col-md-12 col-lg-12 col-xl-12 panel panel-primary' style='margin-top: 100px;margin-left: 20px'>
                    <div class='row' style='margin-left: 20px;margin-bottom: 20px'>
                        <h3>PENDAFTARAN KTP ELEKTRONIK</h3>
                        <h6>silahkan masukkan berkas</h6>
                        
                        <form method='post' enctype='multipart/form-data'>
                            
                                <label>SUKET</label><br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image1' size='60'><br>
                                </label></br>
                            
                            
                                <label>E-KTP ASLI</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image2' size='60'></br>
                                </label></br>
                            
                                <label>SURAT TANDA LAPOR KEHILANGAN</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image3' size='60'></br>
                                </label></br>

                                <label>KK ASLI</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image4' size='60'></br>
                                </label></br>
                            
                            <button id='button_profile' name='update'> <span class='glyphicon glyphicon-cloud-upload'></span> Upload</button>
                        </form>
                    </div>
                </div>";
        if (isset($_POST['update'])) {
            $u_image1 = $_FILES['u_image1']['name'];
            $u_image2 = $_FILES['u_image2']['name'];
            $u_image3 = $_FILES['u_image3']['name'];
            $u_image4 = $_FILES['u_image4']['name'];
            
            $image_tmp1 = $_FILES['u_image1']['tmp_name'];
            $image_tmp2 = $_FILES['u_image2']['tmp_name'];
            $image_tmp3 = $_FILES['u_image3']['tmp_name'];
            $image_tmp4 = $_FILES['u_image4']['tmp_name'];
            
            $random_number = rand(1,100);
    
            if ($u_image1=='') {
                echo "<script>alert('Tolong pilih file')</script>";
                echo "<script>window.open('upload.php', '_self')</script>";
                exit();
            }else{
                move_uploaded_file($image_tmp1, "../files/suket/$u_image1");
                move_uploaded_file($image_tmp2, "../files/e-ktp/$u_image2");
                move_uploaded_file($image_tmp3, "../files/surat_kehilangan/$u_image3");
                move_uploaded_file($image_tmp4, "../files/kk/$u_image4");
                               
                
                $insert_track = "INSERT INTO perjalanan (user_nik, nama_data, daftar, upload, proses, selesai) VALUES ('$user_nik', 'KTP Elektronik', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum')";
                $run = mysqli_query($con, $insert_track);
                $insert = "INSERT INTO data (user_nik, nama_data, file_1, file_2, file_3, file_4, file_5, file_6, file_7, file_8, file_9, file_10, file_11, file_12, file_13, file_14) VALUES ('$user_nik', 'KTP Elektronik', '/files/suket/$u_image1', '/files/e-ktp/$u_image2', '/files/surat_kehilangan/$u_image3', '/files/kk/$u_image4', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-')";
                $run = mysqli_query($con, $insert);
    
                if ($run) {
                    echo "<script>alert('Data Telah diupload')</script>";
                    echo "<script>window.open('ktp_elektronik.php', '_self')</script>";
                }
            }
        }
        ?>
    </body>
</html>
<?php } ?>