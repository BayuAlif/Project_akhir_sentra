<?php
        $firstname=$_POST['first-name'];
        $lastname=$_POST['last-name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $message=$_POST['message'];
        
    ?>
<html> 
    <head> 
       <title>Universtitas Sukacita</title> 
    </head> 
    <body> 
        <h1>Pendaftaran Mahasiswa Baru Universitas Sukacita</h1> 
        <?php 

            echo "<p>Nama Lengkap : ".$firstname. "</p>"; 
            echo "<p>Tempat Lahir : ".$lastname. "</p>"; 
            echo "<p>Tanggal Lahir : ".$email."</p>"; 
            echo "<p>Alamat Rumah : ".$mobile. "</p>"; 
            echo "<p>Jenis Kelamin : ".$message. "</p>"; 

        ?> 