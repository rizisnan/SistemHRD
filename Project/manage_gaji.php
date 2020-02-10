<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
if($_SESSION['id'] == "pengawas"){
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
                    <h1 class="display-4">Manage data gaji karyawan</h1>
                    <i>
                    <p>Klik <a style="color:#B3B6B5" href="sort_gaji.php"> disini </a>untuk kembali ke pencarian</p>
                    </i>
                </div>
            </div>
        </div>
    </div>
    
<?php 
    $id_karyawan = $_GET['id_karyawan'];
    $connect = new mysqli('localhost','id11850620_db','12345','id11850620_db');
    $query = mysqli_query($connect, "select * from karyawan k JOIN gaji g USING(id_karyawan)");
    $output = mysqli_fetch_array($query);
    $id = $output['id_karyawan'];
?>
    
<center><table>
    <form method="post" action="update_gaji.php">
            <div class="container">
            <tr><div class="form-group">
                
                <td><input type="hidden" class="form-control" name="id_karyawan" value="<?php echo $output['id_karyawan'];?>"></td>
            </div>
            </tr>
            <tr><div class="form-group">
                <td><label>Nama</label></td>
                <td><input type="text" class="form-control" name="nama_karyawan" value="<?php echo $output['nama_karyawan'];?>" disabled></td>
            </div>
            </tr>
            <tr><div class="form-group">
                <td><label>Status</label></td>
                <td><select class="form-control" name="status">
                    <option selected value="<?php echo $output['status'];?>"><?php echo $output['status'];?></option>
                    </select>
            </div>
            </tr>
            <tr><div class="form-group">
                <td><label>Gaji</label></td>
                <td><input type="text" class="form-control" name="gaji" value="<?php 
            if(isset($_SESSION['bulan'])){   
                if($_SESSION['bulan'] == "jan"){
                    echo $output['gaji_jan'];
            }elseif($_SESSION['bulan'] == "feb"){
                echo $output['gaji_feb'];
            }elseif($_SESSION['bulan'] == "mar"){
                echo $output['gaji_mar'];
            }elseif($_SESSION['bulan'] == "apr"){
                echo $output['gaji_apr'];
            }elseif($_SESSION['bulan'] == "mei"){
                echo $output['gaji_mei'];
            }elseif($_SESSION['bulan'] == "jun"){
                echo $output['gaji_jun'];
            }elseif($_SESSION['bulan'] == "jul"){
                echo $output['gaji_jul'];
            }elseif($_SESSION['bulan'] == "agu"){
                echo $output['gaji_agu'];
            }elseif($_SESSION['bulan'] == "sep"){
                echo $output['gaji_sep'];
            }elseif($_SESSION['bulan'] == "okt"){
                echo $output['gaji_okt'];
            }elseif($_SESSION['bulan'] == "nov"){
                echo $output['gaji_nov'];
            }elseif($_SESSION['bulan'] == "des"){
                echo $output['gaji_des'];
            }}?>" placeholder="Gaji dalam Rp"></td>
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