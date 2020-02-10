<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
if($_SESSION['id'] == "hrd"){
?>

<html>
<head>
    <title>Human Resource Department</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="img/global.png">
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
                    <h1 class="display-4">Lihat laporan di bulan...</h1>
                    <form action="read_laporan.php" method="post">
                    <table>

                    <td> <div class="form-group">
                        <select class="form-control" name="bulan">
                        <option selected>Bulan</option>
                        <option value="jan">Januari</option>
                        <option value="feb">Februari</option>
                        <option value="mar">Maret</option>
                        <option value="apr">April</option>
                        <option value="mei">Mei</option>
                        <option value="jun">Juni</option>
                        <option value="jul">Juli</option>
                        <option value="agu">Agustus</option>
                        <option value="sep">September</option>
                        <option value="okt">Oktober</option>
                        <option value="nov">November</option>
                        <option value="des">Desember</option></select></div>
                    </td>
                    
                    <td><div class="form-group">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div></td>
                    </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
      
</body>
</html>
    <?php } ?>