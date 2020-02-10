<?php 
    session_start();
    $query = new mysqli('localhost','id11850620_db','12345','id11850620_db');
    $username = $_POST['username'];
    $password = base64_encode($_POST['password']);
    $selected_login = $_POST['as']; 

    $data = mysqli_query($query, "insert into user values('$selected_login','$username', '$password')") or die (mysqli_error($query));
    if($query){
        header("location:login.php?pesan=daftar");
    }else{
        header("location:newvolunteer.php");
    }
?>