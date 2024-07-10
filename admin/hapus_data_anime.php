<?php

require '../functions.php';

//AMBIL DATA YG DIKLIK HAPUS DI HALAMAN data_anime_shounen.php TADI 
$id_alternatif = $_GET['id_alternatif'];

//JALANKAN FUNGSI HAPUS
if (hapus_anime($id_alternatif)) {
    echo "<script>
    alert ('Data Berhasil Di Hapus')
    document.location.href='data_anime_shounen.php'
    </script>";
}
