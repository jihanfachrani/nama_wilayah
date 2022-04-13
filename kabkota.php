<?php
include 'koneksi.php';
$kode_prov = $_POST["provinsi"];
// var_dump($kode_prov);
echo "<option value=''>Pilih Kabupaten/Kota</option>";

    $query = "select * from tbl_kabkota where kode_provinsi='".$kode_prov."'";
    $eksekusi=mysqli_query($db1,$query);
    $hasil=array();
    while($baris = mysqli_fetch_assoc($eksekusi)){
        echo "<option value='" . $baris['id_kabkota'] . "'>" . $baris['nama_kabkota'] . "</option>";
        // $hasil[]=$baris;
    }
?> 

