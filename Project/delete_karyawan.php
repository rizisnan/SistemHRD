<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
if($_SESSION['id'] == "recruit"){
?>
<html>
<head>
    
</head>
<body>
<?php 
 $connect = new mysqli('localhost','id11850620_db','12345','id11850620_db');
$id_karyawan = $_GET['id_karyawan'];
$query = mysqli_query($connect, "delete from karyawan where id_karyawan='$id_karyawan'")or die(mysqli_error($connect));
if($query){
    header("location:read_karyawan.php");
}else{
    header("location:project.php");
}
?>

</body>
</html>
<?php } ?>