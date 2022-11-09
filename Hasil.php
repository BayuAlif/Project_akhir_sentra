<?php


    $nama = $_POST['nama'];

    $panggil = $_POST['panggil']; 

    $tempat = $_POST['tempat']; 

    $tanggal = $_POST['tanggal'];

    $bulan = $_POST['bulan'];
    
    $tahun = $_POST['tahun']; 

    $alamat = $_POST['alamat'];

    $jk = $_POST['kelamin'];

    $sekolah = $_POST['sekolah'];

    $nilai = $_POST['member'];

?> 
<html> 
    <head> 
       <title>Universtitas Sukacita</title> 
    </head> 
    <body> 
        <h1>Pendaftaran Mahasiswa Baru Universitas Sukacita</h1> 
        <?php 
            echo "<p>Terima kasih ".$panggil. " sudah mengisi form </p>";
            echo "<p>Nama Lengkap : ".$nama. "</p>"; 
            echo "<p>Tempat Lahir : ".$tempat. "</p>"; 
            echo "<p>Tanggal Lahir : ".$tanggal. " ".$bulan. " ".$tahun. "</p>"; 
            echo "<p>Alamat Rumah : ".$alamat. "</p>"; 
            echo "<p>Jenis Kelamin : ".$jk. "</p>"; 
            echo "<p>Asal Sekolah : ".$sekolah. "</p>"; 
            echo "<p>Pilihan Member : ".$nilai. "</p>"; 
        ?> 