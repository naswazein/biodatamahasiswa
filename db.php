<?php 

    $koneksi = new PDO ("mysql:host=localhost;dbname=belajar", "root", "");
    if($koneksi){
        echo 'berhasil';
    }
    
    $koneksi->query("SELECT `nis`, `nama` FROM `siswa` WHERE 1");

?>