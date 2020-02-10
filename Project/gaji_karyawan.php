<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
    $_SESSION['bulan'] = $_GET['session'];
    if($_SESSION['id'] == "karyawan"){
?>

<html>
<head>
    <title>Human Resource Department</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
    
<body>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="home.php?pesan=masuk">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log out</a>
      </li>
    </ul>
  </div>
    <div class="card bg-dark text-white">
        <img src="img/project.png" class="card-img">
            <div class="card-img-overlay">
                <div align="right">
                <td>
                    <label> ID Karyawan = </label>
                </td>
                <td>
                    <?php 
                        $id_karyawan = $_GET['id_karyawan'];?>
                    <input type="text" value="<?php echo "$id_karyawan"?>" disabled>
                </td>
                </div>
                <div align="left" class="col-sm-7"><br>
                   
                    <h1 class="display-4">Info Gaji
            <?php 
            if(isset($_SESSION['id'])){   
                if($_SESSION['bulan'] == "jan"){ ?>
                <?php echo "Januari" ?>
            <?php }elseif($_SESSION['bulan'] == "feb"){ ?>
                <?php echo "Februari" ?>
            <?php }elseif($_SESSION['bulan'] == "mar"){ ?>
                <?php echo "Maret" ?>
            <?php }elseif($_SESSION['bulan'] == "apr"){ ?>
                <?php echo "April" ?>
            <?php }elseif($_SESSION['bulan'] == "mei"){ ?>
                <?php echo "Mei" ?>
            <?php }elseif($_SESSION['bulan'] == "jun"){ ?>
                <?php echo "Juni" ?>
            <?php }elseif($_SESSION['bulan'] == "jul"){ ?>
                <?php echo "Juli" ?>
            <?php }elseif($_SESSION['bulan'] == "agu"){ ?>
                <?php echo "Agustus" ?>
            <?php }elseif($_SESSION['bulan'] == "sep"){ ?>
                <?php echo "September" ?>
            <?php }elseif($_SESSION['bulan'] == "okt"){ ?>
                <?php echo "Oktober" ?>
            <?php }elseif($_SESSION['bulan'] == "nov"){ ?>
                <?php echo "November" ?>
            <?php }elseif($_SESSION['bulan'] == "des"){ ?>
                <?php echo "Desember" ?>
            <?php }}?>
                    </h1>
                    <i>
                        <p>Klik <a style="color:#B3B6B5" href="sort_karyawan.php"> disini</a> untuk kembali</p>
                    </i>
                </div>
            </div>
        </div>
    </div>

    
<center>
    <table class="table col-sm-7">
    <?php 
        $id_karyawan = $_GET['id_karyawan'];
         $connect = new mysqli('localhost','id11850620_db','12345','id11850620_db');
        $query = mysqli_query($connect, "select * from karyawan k JOIN gaji g USING(id_karyawan) where id_karyawan='$id_karyawan'");
        $output = mysqli_fetch_array($query);
    ?>
        <tr>
            <td><h3>ID Karyawan</h3></td>
            <td><h3><?php echo $output['id_karyawan'];?></h3></td>
        </tr>
        <tr>
            <td><h3>Nama</h3></td>
            <td><h3><?php echo $output['nama_karyawan'];?></h3></td>
        </tr>
        <tr>
            <td><h3>Gaji bulan <?php 
            if(isset($_SESSION['id'])){   
                if($_SESSION['bulan'] == "jan"){ ?>
                <?php echo "Januari" ?>
            <?php }elseif($_SESSION['bulan'] == "feb"){ ?>
                <?php echo "Februari" ?>
            <?php }elseif($_SESSION['bulan'] == "mar"){ ?>
                <?php echo "Maret" ?>
            <?php }elseif($_SESSION['bulan'] == "apr"){ ?>
                <?php echo "April" ?>
            <?php }elseif($_SESSION['bulan'] == "mei"){ ?>
                <?php echo "Mei" ?>
            <?php }elseif($_SESSION['bulan'] == "jun"){ ?>
                <?php echo "Juni" ?>
            <?php }elseif($_SESSION['bulan'] == "jul"){ ?>
                <?php echo "Juli" ?>
            <?php }elseif($_SESSION['bulan'] == "agu"){ ?>
                <?php echo "Agustus" ?>
            <?php }elseif($_SESSION['bulan'] == "sep"){ ?>
                <?php echo "September" ?>
            <?php }elseif($_SESSION['bulan'] == "okt"){ ?>
                <?php echo "Oktober" ?>
            <?php }elseif($_SESSION['bulan'] == "nov"){ ?>
                <?php echo "November" ?>
            <?php }elseif($_SESSION['bulan'] == "des"){ ?>
                <?php echo "Desember" ?>
            <?php }}?></h3></td>
            <?php 
            if(isset($_SESSION['id'])){   
                if($_SESSION['bulan'] == "jan"){ ?>
                <td><h3>Rp<?php echo $output['gaji_jan']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "feb"){ ?>
                <td><h3>Rp<?php echo $output['gaji_feb']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "mar"){ ?>
                <td><h3>Rp<?php echo $output['gaji_mar']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "apr"){ ?>
                <td><h3>Rp<?php echo $output['gaji_apr']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "mei"){ ?>
                <td><h3>Rp<?php echo $output['gaji_mei']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "jun"){ ?>
                <td><h3>Rp<?php echo $output['gaji_jun']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "jul"){ ?>
                <td><h3>Rp<?php echo $output['gaji_jul']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "agu"){ ?>
                <td><h3>Rp<?php echo $output['gaji_agu']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "sep"){ ?>
                <td><h3>Rp<?php echo $output['gaji_sep']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "okt"){ ?>
                <td><h3>Rp<?php echo $output['gaji_okt']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "nov"){ ?>
                <td><h3>Rp<?php echo $output['gaji_nov']; ?></h3></td>
            <?php }elseif($_SESSION['bulan'] == "des"){ ?>
                <td><h3>Rp<?php echo $output['gaji_des']; ?></h3></td>
            <?php }}?>
        </tr>

    </table>
</center>
</body>
</html>
    <?php } ?>