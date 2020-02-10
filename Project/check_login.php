<?php 
    session_start();
     $query = new mysqli('localhost','id11850620_db','12345','id11850620_db');
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);
    $selected_login = $_POST['as']; 

        $data = mysqli_query($query, "select * from user where id='$selected_login' and username='$username' and password='$password'") or die (mysqli_error($query));
        $cek = mysqli_num_rows($data);
        if($cek > 0){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['id'] = $selected_login;
            header("location:home.php?pesan=masuk");
        }else{
            header("location:login.php?pesan=gagal");
        }
