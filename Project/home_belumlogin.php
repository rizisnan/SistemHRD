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
        <a class="nav-link active" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="login.php">Log in</a>
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
        <?php if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "belum_login"){
                    echo "You must login first!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Log out success!";
                }
            } ?>
    </div>
        <a align="left" href="home.php" class="btn btn-primary">Mulai</a>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>