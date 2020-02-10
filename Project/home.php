<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php");
    }
?>

<html>
<head>
    <title>Human Resource Department</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="img/global.png">

</head>
    
<body>
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "masuk"){ ?>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php">Log out</a>
      </li>
    </ul>
  </div>
<div class="card bg-dark text-white">
        <img src="img/img.png" class="card-img">
            <div class="card-img-overlay">
                <div align="left" class="col-sm-5"><br>
        <h1 class="display-4">Human Resource Department</h1>
        <h5 class="font-weight-light">Selamat Datang! <br> Ini adalah sistem yang dibuat oleh Human Resource Department untuk mengakses data karyawan dan gaji.</h5>
                    
        <div style="color:#B3B6B5">
        
    </div>
        <?php 
            if(isset($_SESSION['id'])){
            if($_SESSION['id'] == "hrd"){ ?>
                <a align="left" href="sort_laporan.php" class="btn btn-primary">Lihat Laporan</a>
            <?php }elseif($_SESSION['id'] == "karyawan"){ ?>
                <a align="left" href="sort_karyawan.php" class="btn btn-primary">Manage Kehadiran</a>
            <?php }elseif($_SESSION['id'] == "pengawas"){ ?>
                <a align="left" href="sort_gaji.php" class="btn btn-primary">Input Gaji</a>
            <?php }elseif($_SESSION['id'] == "recruit"){ ?>
                <a align="left" href="read_karyawan.php" class="btn btn-primary">Daftar Karyawan</a>
        <?php }} ?>
            </div>
        </div>
    </div>
</div>
    
<?php 
        }
    }
?>
    
</body>
</html>