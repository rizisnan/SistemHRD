<?php
    session_start();
    if(empty($_SESSION['username'])){
        header("location:home_belumlogin.php?pesan=belum_login");
    }
if($_SESSION['id'] == "pengawas"){
?>
<html>
<head>
    
</head>
<body>
<?php
     $connect = new mysqli('localhost','id11850620_db','12345','id11850620_db');
    $id_karyawan = $_GET['id'];
    $gaji = 0;

        if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update gaji set gaji_jan='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update gaji set gaji_feb='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update gaji set gaji_mar='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update gaji set gaji_apr='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update gaji set gaji_mei='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update gaji set gaji_jun='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update gaji set gaji_jul='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update gaji set gaji_agu='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update gaji set gaji_sep='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update gaji set gaji_okt='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update gaji set gaji_nov='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update gaji set gaji_des='$gaji' where id_karyawan='$id_karyawan'");
            }
        }

if($query){
    $_SESSION['bulan'] = $_POST['bulan'];
    header("location:sort_gaji.php");
}else{
    header("location:read_gaji.php");
}
?>

</body>
</html>
    <?php } ?>