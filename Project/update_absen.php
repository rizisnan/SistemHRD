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
    $id_karyawan = $_POST['id_karyawan'];
    $absen = $_POST['absen'];
    $posisi = $_GET['posisi'];
        
        if($posisi == "Staff"){
            $gaji = $absen*50000;
            if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jan='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_feb='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mar='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_apr='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mei='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jun='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jul='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_agu='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_sep='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_okt='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_nov='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_des='$gaji' where id_karyawan='$id_karyawan'");
            }}
        }elseif($posisi == "Manager"){
            $gaji = $absen*75000;
            if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jan='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_feb='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mar='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_apr='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mei='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jun='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jul='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_agu='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_sep='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_okt='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_nov='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_des='$gaji' where id_karyawan='$id_karyawan'");
            }}
        }elseif($posisi == "Senior Manager"){
            $gaji = $absen*100000;
            if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jan='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_feb='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mar='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_apr='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mei='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jun='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jul='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_agu='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_sep='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_okt='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_nov='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_des='$gaji' where id_karyawan='$id_karyawan'");
            }}
        }elseif($posisi == "Supervisor"){
            $gaji = $absen*175000;
            if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jan='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_feb='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mar='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_apr='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mei='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jun='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jul='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_agu='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_sep='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_okt='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_nov='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_des='$gaji' where id_karyawan='$id_karyawan'");
            }}
        }elseif($posisi == "Vice President"){
            $gaji = $absen*200000;
            if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jan='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_feb='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mar='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_apr='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mei='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jun='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jul='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_agu='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_sep='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_okt='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_nov='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_des='$gaji' where id_karyawan='$id_karyawan'");
            }}
        }if($posisi == "President"){
            $gaji = $absen*300000;
            if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jan='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_feb='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mar='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_apr='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_mei='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jun='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_jul='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_agu='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_sep='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_okt='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_nov='$gaji' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update gaji set id_karyawan='$id_karyawan', gaji_des='$gaji' where id_karyawan='$id_karyawan'");
            }}
        }

        if(isset($_SESSION['bulan'])){   
            if($_SESSION['bulan'] == "jan"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_jan='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "feb"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_feb='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mar"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_mar='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "apr"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_apr='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "mei"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_mei='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jun"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_jun='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "jul"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_jul='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "agu"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_agu='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "sep"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_sep='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "okt"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_okt='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "nov"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_nov='$absen' where id_karyawan='$id_karyawan'");
            }elseif($_SESSION['bulan'] == "des"){
                $query = mysqli_query($connect, "update absen set id_karyawan='$id_karyawan', absen_des='$absen' where id_karyawan='$id_karyawan'");
            }}

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