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
                        <h3>PENDAFTARAN AKTA KELAHIRAN</h3>
                        <h6>silahkan masukkan berkas</h6>
                        
                        <form method='post' enctype='multipart/form-data'>
                            
                                <label>SURAT KELAHIRAN (sesuai ketentuan)</label><br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image1' size='60'><br>
                                </label></br>
                            
                            
                                <label>KK ASLI (sesuai ketentuan)</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image2' size='60'></br>
                                </label></br>
                            
                                <label>KUTIPAN AKTA NIKAH/AKTA PERKAWINAN ORANG TUA ASLI</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image3' size='60'></br>
                                </label></br>

                                <label>KTP IBU</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image4' size='60'></br>
                                </label></br>

                                <label>KTP AYAH</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image5' size='60'></br>
                                </label></br>

                                <label>KTP PELAPOR</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image6' size='60'></br>
                                </label></br>

                                <label>KTP SAKSI 1</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image7' size='60'></br>
                                </label></br>

                                <label>KTP SAKSI 2</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image8' size='60'></br>
                                </label></br>

                                <label>SURAT KEMATIAN IBU (jika meninggal)</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image9' size='60'></br>
                                </label></br>

                                <label>SURAT KEMATIAN AYAH (jika meninggal)</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image10' size='60'></br>
                                </label></br>

                                <label>SURAT KETERANGAN KELAHIRAN DESA/KELURAHAN</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image11' size='60'></br>
                                </label></br>

                                <label>SURAT KUASA (BILA DIKUASAKAN)</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image12' size='60'></br>
                                </label></br>

                                <label>IJASAH TERAKHIR</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image13' size='60'></br>
                                </label></br>

                                <label>SURAT PERNYATAAN JARAK ANAK</label></br>
                                <label id='update_profile'><i class='fa fa-circle-o' aria-hidden='true'></i></br>
                                <input type='file' name='u_image14' size='60'></br>
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
            $u_image5 = $_FILES['u_image5']['name'];
            $u_image6 = $_FILES['u_image6']['name'];
            $u_image7 = $_FILES['u_image7']['name'];
            $u_image8 = $_FILES['u_image8']['name'];
            $u_image9 = $_FILES['u_image9']['name'];
            $u_image10 = $_FILES['u_image10']['name'];
            $u_image11 = $_FILES['u_image11']['name'];
            $u_image12 = $_FILES['u_image12']['name'];
            $u_image13 = $_FILES['u_image13']['name'];
            $u_image14 = $_FILES['u_image14']['name'];
            
            $image_tmp1 = $_FILES['u_image1']['tmp_name'];
            $image_tmp2 = $_FILES['u_image2']['tmp_name'];
            $image_tmp3 = $_FILES['u_image3']['tmp_name'];
            $image_tmp4 = $_FILES['u_image4']['tmp_name'];
            $image_tmp5 = $_FILES['u_image5']['tmp_name'];
            $image_tmp6 = $_FILES['u_image6']['tmp_name'];
            $image_tmp7 = $_FILES['u_image7']['tmp_name'];
            $image_tmp8 = $_FILES['u_image8']['tmp_name'];
            $image_tmp9 = $_FILES['u_image9']['tmp_name'];
            $image_tmp10 = $_FILES['u_image10']['tmp_name'];
            $image_tmp11 = $_FILES['u_image11']['tmp_name'];
            $image_tmp12 = $_FILES['u_image12']['tmp_name'];
            $image_tmp13 = $_FILES['u_image13']['tmp_name'];
            $image_tmp13 = $_FILES['u_image14']['tmp_name'];
            
            $random_number = rand(1,100);
    
            if ($u_image1=='') {
                echo "<script>alert('Tolong pilih file')</script>";
                echo "<script>window.open('upload.php', '_self')</script>";
                exit();
            }else{
                move_uploaded_file($image_tmp1, "../files/SK/$u_image1");
                move_uploaded_file($image_tmp2, "../files/KK_asli/$u_image2");
                move_uploaded_file($image_tmp3, "../files/akta_nikah/$u_image3");
                move_uploaded_file($image_tmp4, "../files/ktp_ibu/$u_image4");
                move_uploaded_file($image_tmp5, "../files/ktp_ayah/$u_image5");
                move_uploaded_file($image_tmp6, "../files/ktp_pelapor/$u_image6");
                move_uploaded_file($image_tmp7, "../files/ktp_saksi1/$u_image7");
                move_uploaded_file($image_tmp8, "../files/ktp_saksi2/$u_image8");
                move_uploaded_file($image_tmp9, "../files/surat_kematian_ibu/$u_image9");
                move_uploaded_file($image_tmp10, "../files/surat_kematian_ayah/$u_image10");
                move_uploaded_file($image_tmp11, "../files/surat_keterangan_lahir/$u_image11");
                move_uploaded_file($image_tmp12, "../files/surat_kuasa/$u_image12");
                move_uploaded_file($image_tmp13, "../files/ijasah_terakhir/$u_image13");
                move_uploaded_file($image_tmp14, "../files/surat_pernyataan_jarak_anak/$u_image13");
                               
                
                $insert_track = "INSERT INTO perjalanan (user_nik, nama_data, daftar, upload, proses, selesai) VALUES ('$user_nik', 'Akta Kelahiran', 'Terdaftar', 'Telah Diupload', 'Masih Dalam Proses', 'Belum')";
                $run = mysqli_query($con, $insert_track);
                $insert = "INSERT INTO data (user_nik, nama_data, file_1, file_2, file_3, file_4, file_5, file_6, file_7, file_8, file_9, file_10, file_11, file_12, file_13, file_14) VALUES ('$user_nik', 'Akta Kelahiran', '/files/SK/$u_image1', '/files/KK_asli/$u_image2', '/files/akta_nikah/$u_image3', '/files/ktp_ibu/$u_image4', '/files/ktp_ayah/$u_image5', '/files/ktp_pelapor/$u_image6', '/files/ktp_saksi1/$u_image7', '/files/ktp_saksi2/$u_image8', '/files/surat_kematian_ibu/$u_image9', '/files/surat_kematian_ayah/$u_image10', '/files/surat_keterangan_lahir/$u_image11', '/files/surat_kuasa/$u_image12', '/files/ijasah_terakhir/$u_image13', '/files/surat_pernyataan_jarak_anak/$u_image13')";
                $run = mysqli_query($con, $insert);
    
                if ($run) {
                    echo "<script>alert('Data Telah diupload')</script>";
                    echo "<script>window.open('akta_kelahiran.php', '_self')</script>";
                }
            }
        }
        ?>
    </body>
</html>
<?php } ?>