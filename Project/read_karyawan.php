<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
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
                    <h1 class="display-4">Daftar karyawan</h1>
                    <i>
                    <p>Klik <a style="color:#B3B6B5" href="newkaryawan.php"> di sini </a> untuk input karyawan baru </p>
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
                        <th scope="col">Status</th>
                        <th scope="col">Opsi</th>
                    </tr>
                </thead>
    <?php 
        $connect = new mysqli('localhost','id11850620_db','12345','id11850620_db');
        $query = mysqli_query($connect, "select * from karyawan");
        while($output = mysqli_fetch_array($query)) {
    ?>
                <tbody>
                    <tr>
                        <td><?php echo $output['id_karyawan']; ?></td>
                        <td><?php echo $output['nama_karyawan']; ?></td>
                        <td><?php echo $output['posisi_karyawan']; ?> </td>
                        <td><?php echo $output['department']; ?></td>
                        <td><?php echo $output['status']; ?></td>
                        
                        <td><a class="btn btn-secondary" href="manage_karyawan.php?id_karyawan=<?php echo $output['id_karyawan'];?>" role="button" >Manage</a>
                        
                        <a class="btn btn-danger" href="delete_karyawan.php?id_karyawan=<?php echo $output['id_karyawan'];?>" role="button">Delete</a></td>
                    </tr>
    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</center>
    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>
