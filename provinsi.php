<?php
    include 'koneksi.php';

    echo "<option value=''>Pilih Provinsi</option>";
    
    $query="select * from tbl_provinsi";
    $eksekusi=mysqli_query($db1,$query);
    $provinsi=array();
    while($baris = mysqli_fetch_assoc($eksekusi)){
        // $provinsi[]=$baris;
        echo "<option value='" . $baris['kode_provinsi'] . "'>" . $baris['nama_provinsi'] . "</option>";
    }
?>
