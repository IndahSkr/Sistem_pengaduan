<?php
    session_start();
    require_once ("database/aplikasi.php");
?>

<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="home.css">

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
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="img-responsive" width="140"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                    <?php
                        if(isset($_SESSION['nik'])){
                            $menu =get_menu_by_level(isset($_SESSION['level']));
                            $menu_list = array();
                            while ($row = mysqli_fetch_array($menu))
                            {
                                if($row['is_tampil']==1){
                                    echo '<li><a href="index.php?page='.$row['page'].'">';
                                    echo "<li>".$row['nama_menu']."</li>";
                                    echo "</a></li>";
                                }
                                $menu_list[] = $row['page'];
                            }
                            ?>
                            <li><a href="index.php?page=logout">Logout</a></li>
                        </ul>
                            <?php
                        }
                    ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"> </span>asdaa</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Track</a></li>
                    <li><a href="index.php?page=logout">Logout</a></li>
                </ul>
            </div>
            <div class="container-fluid" style="margin-top: 80px">
                <?php
                    define("INDEX", true);
                    if(isset($_GET['page']))
                    {
                        $page=$_GET['page'];
                    }
                    else
                    {
                        $page="home";
                    }
                    require_once "database/aplikasi.php";
                    $exception_page = ['login', 'login_process'];

                    if(in_array($page, $exception_page)==false){
                        //cek session
                        if($_SESSION['nik']==""){
                            echo "<script> 
                            window.location='index.php?page=login';
                            </script>";
                            exit;
                        }
                    }
                    $exception_page_otorisasi = array("logout");
                    if(isset($_SESSION['nik'])){
                        if(in_array($page, $menu_list)== false && in_array($page, $exception_page_otorisasi)==false)
                        {
                            die("your are not authorized to be here!");
                        }
                    }
                    require_once($page.".php");
                ?>
            </div>
        </div>
    </nav>
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
</body>
</html>