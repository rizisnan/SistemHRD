<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
if($_SESSION['id'] == "recruit"){
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
                    <h1 class="display-4">Manage data karyawan</h1>
                    <i>
                    <p>Klik <a style="color:#B3B6B5" href="read_karyawan.php"> disini </a>untuk kembali ke daftar karyawan</p>
                    </i>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    $id_karyawan = $_GET['id_karyawan'];
    $connect = new mysqli('localhost','id11850620_db','12345','id11850620_db');
    $query = mysqli_query($connect, "select * from karyawan where id_karyawan='$id_karyawan'");
    $output = mysqli_fetch_array($query);
    $id = $output['id_karyawan'];
?>
    
<center><table>
    <form method="post" action="update_karyawan.php">
            <div class="container">
            <tr><div class="form-group">
                <td><label>ID</label></td>
                <td><input type="text" class="form-control" name="id_karyawan" value="<?php echo $output['id_karyawan'];?>" disabled></td>
            </div>
            </tr>
            <tr><div class="form-group">
                <td><label>Nama</label></td>
                <td><input type="text" class="form-control" name="nama_karyawan" value="<?php echo $output['nama_karyawan'];?>"></td>
            </div>
            </tr>
            <tr><div class="form-group">
                <td><label>Posisi</label></td>
                <td><select class="form-control" name="posisi_karyawan" >
                    <option selected value="<?php echo $output['posisi_karyawan'];?>"><?php echo $output['posisi_karyawan'];?></option>
                    <option value="Staff">Staff</option>
                    <option value="Manager">Manager</option>
                    <option value="Senior Manager">Senior Manager</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Vice President">Vice President</option>
                    <option value="President">President</option>
                    </select>
            </div>
            </tr>
            <tr><div class="form-group">
                <td><label>Department</label></td>
                <td><select class="form-control" name="department">
                    <option selected value="<?php echo $output['department'];?>"><?php echo $output['department'];?></option>
                    <option value="Finance">Finance</option>
                    <option value="HR">HR</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Public Relation">Public Relation</option>
                    <option value="Product Development">Product Development</option>
                    <option value="IT">IT</option>
                    </select>
            </div>
            </tr>
            <tr><div class="form-group">
                <td><label>Status</label></td>
                <td><select class="form-control" name="status" >
                    <option selected value="<?php echo $output['status'];?>"><?php echo $output['status'];?></option>
                    <option value="Tetap">Karyawan Tetap</option>
                    <option value="Kontrak">Karyawan Kontrak</option>
                    <option value="Magang">Karyawan Magang</option>
                    </select>
            </div>
            </tr>
            
            <tr>
                <td><button type="submit" class="btn btn-primary">Simpan</button></td>
            </tr>
                </div>
            </form>
        </table>
    </center>


</body>
</html>
<?php } ?>
