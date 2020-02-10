<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
    $_SESSION['bulan'] = $_POST['bulan'];
    if($_SESSION['id'] == "hrd"){
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
                <div align="left" class="col-sm-7"><br>
                   
                    <h1 class="display-4">Laporan Bulan
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
                        <p>Klik <a style="color:#B3B6B5" href="sort_laporan.php"> disini</a> untuk kembali</p>
                    </i>
                </div>
            </div>
        </div>
    </div>
    
    
<center><br>
    <div class="col-sm-10">
        <div class="container">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID Karyawan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Posisi</th>
                        <th scope="col">Department</th>
                        <th scope="col">Absen</th>
                        <th scope="col">Gaji</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
    <?php 
        $connect = new mysqli('localhost','id11850620_db','12345','id11850620_db');
        $query = mysqli_query($connect, "select * from karyawan k JOIN gaji g USING(id_karyawan) JOIN absen a USING(id_karyawan)");
        while($output = mysqli_fetch_array($query)) {
    ?>
                <tbody>
                    <tr>
                        <td><?php echo $output['id_karyawan']; ?></td>
                        <td><?php echo $output['nama_karyawan']; ?></td>
                        <td><?php echo $output['posisi_karyawan']; ?></td>
                        <td><?php echo $output['department']; ?></td>
        <?php 
            if(isset($_SESSION['id'])){   
                if($_SESSION['bulan'] == "jan"){ ?>
                <td><?php echo $output['gaji_jan']; ?></td>
                <td><?php echo $output['absen_jan']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "feb"){ ?>
                <td><?php echo $output['gaji_feb']; ?></td>
                <td><?php echo $output['absen_feb']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "mar"){ ?>
                <td><?php echo $output['gaji_mar']; ?></td>
                <td><?php echo $output['absen_mar']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "apr"){ ?>
                <td><?php echo $output['gaji_apr']; ?></td>
                <td><?php echo $output['absen_apr']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "mei"){ ?>
                <td><?php echo $output['gaji_mei']; ?></td>
                <td><?php echo $output['absen_mei']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "jun"){ ?>
                <td><?php echo $output['gaji_jun']; ?></td>
                <td><?php echo $output['absen_jun']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "jul"){ ?>
                <td><?php echo $output['gaji_jul']; ?></td>
                <td><?php echo $output['absen_jul']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "agu"){ ?>
                <td><?php echo $output['gaji_agu']; ?></td>
                <td><?php echo $output['absen_agu']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "sep"){ ?>
                <td><?php echo $output['gaji_sep']; ?></td>
                <td><?php echo $output['absen_sep']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "okt"){ ?>
                <td><?php echo $output['gaji_okt']; ?></td>
                <td><?php echo $output['absen_okt']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "nov"){ ?>
                <td><?php echo $output['gaji_nov']; ?></td>
                <td><?php echo $output['absen_nov']; ?></td>
            <?php }elseif($_SESSION['bulan'] == "des"){ ?>
                <td><?php echo $output['gaji_des']; ?></td>
                <td><?php echo $output['absen_des']; ?></td>
            <?php }}?>
                    <td><?php echo $output['status']; ?></td>
                    </tr>
    <?php }  ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
  
</body>
</html>
    <?php } ?>