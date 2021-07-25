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
                            echo	"<li><a href='../home.php?username=$user_name'>Home</a></li>
                                    <li class='active'><a href='home/syarat.php?username=$user_name'>Persyaratan</a></li>
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
        <div class="container-fluid " style="margin-left: 20px;margin-bottom: 20px; margin-top:30px;">
            <h1>Persyaratan</h1>
            <div class="row col-sm-12 col-md-12 col-lg-12 col-xl-12 panel panel-primary" style="margin-left: 5px;margin-bottom: 20px; margin-top: 10px;">
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">AKTA KELAHIRAN</div>
                    <div class="panel-body" >
                        <h5>Surat Kelahiran Bidan/Dokter/RS Asli (tanpa coretan/tipe-x)</h5>
                        <h5>Gunting (bukan CROP) Kartu Keluarga Asli sampai hilang ttw kadis dan potongan diletakkan disebelah KK</h5>
                        <h5>Kutipan Akta Nikah/Akta Perkawinan Orang Tua Asli</h5>
                        <h5>Kartu tanda Penduduk (KTP) Ibu</h5>
                        <h5>Kartu tanda Penduduk (KTP) Ayah</h5>
                        <h5>Kartu tanda Penduduk (KTP) Pelapor</h5>
                        <h5>Kartu tanda Penduduk (KTP) Saksi I</h5>
                        <h5>Kartu tanda Penduduk (KTP) Saksi II</h5>
                        <h5>Surat Kematian Ibu jika Sudah Meninggal</h5>
                        <h5>Surat Kematian Ayah jika Sudah Meninggal</h5>
                        <h5>Surat Keterangan Kelahiran Desa/Kelurahan (F-2.01)Asli</h5>
                        <h5>Surat Kuasa Bila Dikuasakan (materai baru bukan bekas)</h5>
                        <h5>Ijasah terakhir Asli yang Dimiliki</h5>
                        <h5>Surat pernyataan Jarak Anak</h5>
                    </div>
                </div> 
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">AKTA KEMATIAN</div>
                    <div class="panel-body" >
                        <h5>Surat Keterangan Kematian dari Kepala Desa/Lurah Asli</h5>
                        <h5>Kartu tanda Penduduk (KTP) Pelapor</h5>
                        <h5>Gunting (bukan CROP) Kartu Keluarga Asli sampai hilang ttw kadis dan potongan diletakkan disebelah KK</h5>
                        <h5>Keterangan Kematian Dokter atau Paramedis Asli</h5>
                        <h5>KTP yang Meninggal Asli Digunting Separuh Fotonya</h5>
                        <h5>KTP Suami/Istri dari yang Meninggal</h5>
                        <h5>Scan Surat Kuasa Bermaterai 6000</h5>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">KTP ELEKTRONIK</div>
                    <div class="panel-body" >
                        <h5>E-KTP ASLI (gunting ujung ktp hingga foto terpotong)</h5>
                        <h5>SUKET (Surat Keterangan) Asli yang rusak</h5>
                        <h5>Surat Tanda Laporan Kehilangan dari Kepolisian Asli jika Hilang</h5>
                        <h5>Kartu Keluarga Asli</h5>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">KARTU KELUARGA</div>
                    <div class="panel-body" >
                        <h5>Scan Kartu Keluarga Asli Potong/Gunting Kiri Atas</h5>
                        <h5>Surat Nikah</h5>
                        <h5>Akta Kelahiran</h5>
                        <h5>Ijazah</h5>
                        <h5>Formulir Perubahah data F1.05</h5>
                        <h5>Kartu Keluarga</h5>
                        <h5>Dokumen Tambahan Lainya</h5>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">PERPINDAHAN KELUAR</div>
                    <div class="panel-body" >
                        <h5>Kartu Keluarga</h5>
                        <h5>KTP</h5>
                        <h5>Formulir Permohonan Pindah</h5>
                        <h5>Foto Copy Surat Nikah jika memiliki</h5>
                        <h5>Foto Copy Surat Cerai Jika memiliki</h5>
                        <h5>Surat Pernyataan Persetujuan suami/istri</h5>
                        <h5>Formulir Pindah Ulang</h5>
                        <h5>Formulir batal pindah</h5>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">KEDATANGAN</div>
                    <div class="panel-body" >
                        <h5>Surat Pindah</h5>
                        <h5>Surat Nikah</h5>
                        <h5>Akta Kelahiran</h5>
                        <h5>Ijazah</h5>
                        <h5>Scan Kartu Keluarga Asli Potong Sampai Hilang tte Kadis dan Potongan Diletakkan Disebelah KK yang Ditempati Jika Numpang KK</h5>
                        <h5>KTP-EL</h5>
                        <h5>Surat Kuasa Bila Dikuasakan</h5>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">KIA (KARTU IDENTITAS ANAK)</div>
                    <div class="panel-body" >
                        <h5>Scan Kaeru Keluarga Asli</h5>
                        <h5>Scan Akta Kelahiran Asli</h5>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">UPDATE DATA</div>
                    <div class="panel-body" >
                        <h5>kartu keluarga</h5>
                        <h5>KTP-EL</h5>
                        <h5>Foto/Screenshoot Bukti error dari Instansi Tujuan</h5>
                    </div>
                </div>
                <div class="panel panel-default" style="margin-top: 10px;">
                    <div class="panel-heading"style="background: #3AC9D6">PELAYANAN LAINNYA</div>
                    <div class="panel-body" >
                        <h5>Formulir Batal Pindah</h5>
                        <h5>Formulir Surat Kuasa</h5>
                        <h5>Formulir Pernyataan Belum Terdaftar</h5>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php } ?>