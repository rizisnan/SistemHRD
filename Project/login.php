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
        <a class="nav-link" href="home_belumlogin.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Log in</a>
      </li>
    </ul>
  </div>
  <div class="card bg-dark text-white">
        <img src="img/img.png" class="card-img">
            <div class="card-img-overlay">
                <div align="left" class="col-sm-5"><br>
        <div class="container">
                <h1 class="display-4">Halaman Log in</h1>
                <div style="color:#B3B6B5">
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Username atau password Anda salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Berhasil log out";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Masukan username dan password untuk masuk!";
                }else if($_GET['pesan'] == "daftar"){
                    echo "Pendaftaran berhasil!";
                }
            }
        ?>
                </div>
            <br><br>
                
            </div>
            <form method="post" action="check_login.php">
                <div class="container">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Masukkan username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                    </div>
                    <div class="form-group">
                        <label>Login Sebagai</label>
                        <select class="form-control" name="as">
                        <option selected> Login sebagai </option>
                        <option value="hrd"> Pimpinan </option>
                        <option value="karyawan"> Karyawan </option>
                        <option value="pengawas"> Pengawas </option>
                        <option value="recruit"> Recruiter </option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Log in</button>
                    <br><br>       
                   
                </div>
            </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
</body>
</html>