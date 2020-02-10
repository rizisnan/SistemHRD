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
    $id_karyawan = $_POST['id_karyawan'];
    $nama_karyawan = $_POST['nama_karyawan'];
    $posisi_karyawan = $_POST['posisi_karyawan'];
    $department = $_POST['department'];
    $status = $_POST['status'];

$query = mysqli_query($connect, "insert into karyawan values('$id_karyawan','$nama_karyawan','$posisi_karyawan','$department','$status')") or die(mysqli_error($connect));
if($query){
    $query = mysqli_query($connect, "insert into gaji values('$id_karyawan','','','','','','','','','','','','')") or die(mysqli_error($connect));
        if($query){
            $query = mysqli_query($connect, "insert into absen values('$id_karyawan','','','','','','','','','','','','')") or die(mysqli_error($connect));
        if($query){
            header("location:read_karyawan.php");
        }else{
            header("location:newkaryawan.php");
        }
        }else{
            header("location:newkaryawan.php");
        }
}else{
    header("location:newkaryawan.php");
}
?>

</body>
</html>
<?php } ?>