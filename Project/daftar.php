<html>
<head>
    <title>GoVolunteering.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="img/global.png">
    <style>
        .margin{
            margin-bottom: 2px;
        }
    </style>
</head>
    
<body>

<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
        <a class="nav-link" href="home_belumlogin.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Sign Up</a>
      </li>
    </ul>
  </div>
  <div class="card bg-dark text-white">
        <img src="img/img.png" class="card-img">
            <div class="card-img-overlay">
                <div align="left" class="col-sm-5"><br>
        <div class="container">
                <h1 class="display-4">Sign up menu</h1>

            <br><br>
                
            </div>
            <form method="post" action="check_daftar.php">
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
                        <option selected></option>
                        <option value="hrd"> Pimpinan </option>
                        <option value="karyawan"> Karyawan </option>
                        <option value="pengawas"> Pengawas </option>
                        <option value="recruit"> Recruiter </option>
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Sign up</button>
                    <br><br>       
                   
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

  
</body>
</html>