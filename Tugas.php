<?php
     $nis = "539211078";
     $nama = "Bayu Alif Aryo Wiputra";
     $kelas = "XI tel 13";
     $nilai_tugas = 80;
     $nilai_pts = 83;
     $nilai_pas = 85;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=\, initial-scale=1.0">
     <title>Tugas</title>
</head>
<body>
     <?php
     echo 'Nama : ' . $nama . '<br>'.
     'Nis : ' . $nis . "<br>" . 
     'Kelas : ' . $kelas . '<br>' . 
     'Nilai Tugas : ' . $nilai_tugas . "<br>" .
     'Nilai Pts : ' . $nilai_pts . '<br>' . 
     'Nilai Pas : ' . $nilai_pas . '<br>'. '<br>';

     $Nilai_tugas = ($nilai_tugas * 20) /100;
     $Nilai_Pas = ($nilai_pas * 50) / 100;
     $Nilai_Pts= ($nilai_pts * 30) / 100;
     $nilai_akhir = $Nilai_tugas + $Nilai_Pas + $Nilai_Pts;
     echo 'Hasil akhir : ' . $nilai_akhir . '<br>';
     if($nilai_akhir >= 90 and $nilai_akhir <= 100){
          echo 'A' . '<br>';
          echo 'Anda Lulus';
     }else if($nilai_akhir >= 80 and $nilai_akhir <=90){
          echo 'B' . '<br>';
          echo 'Anda Lulus';
     }else if($nilai_akhir >= 70 and $nilai_akhir <80){
          echo 'C' . '<br>';
          echo 'Anda Tidak Lulus';
     }else{
          echo 'out of the range' . '<br>';
          echo 'eror';
     }
     ?>
</body>
</html>