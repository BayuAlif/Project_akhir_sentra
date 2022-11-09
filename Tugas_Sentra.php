<?php
    $nis = "539211120";
    $nama = "Elvina Ananda Trisna Widya";
    $kelas = "XI tel 8";
    $nilai_tugas = "83";
    $nilai_pts = "84";
    $nilai_pas = "92";
    $kali_tugas = "20";
    $kali_pts = "30";
    $kali_pas = "50";
    $bagi = "100";
    $hasil_akhir = $nilai_tugas*$kali_tugas/$bagi+$nilai_pts*$kali_pts/$bagi+$nilai_pas*$kali_pas/$bagi;

    echo"<h4>Hitung Nilai Akhir</h4>";
    echo"<h4>[NIS = $nis]</h4>";
    echo"<h4>[Nama = $nama</h4>";
    echo"<h4>[Kelas = $kelas]</h4>";
    echo"<h4>[Nilai Tugas = $nilai_tugas]</h4>";
    echo"<h4>[Nilai PTS = $nilai_pts]</h4>";
    echo"<h4>[Nilai PAS = $nilai_pas]</h4>";
    echo"<h4>[Nilai Akhir = $hasil_akhir]</h4>";

    if($hasil_akhir <= 70)
        echo"<h4>Grade D</h4><h4>Keterangan = Anda Tidak Lulus</h4>";
    elseif($hasil_akhir <= 80)
        echo"<h4>Grade C</h4><h4>Keterangan = Anda Lulus</h4>";
    elseif($hasil_akhir <= 90)
        echo"<h4>Grade B</h4><h4>Keterangan = Anda Lulus</h4>";
    elseif($hasil_akhir >= 90)
        echo"<h4>Grade A</h4><h4>Keterangan = Anda Lulus</h4>";
        ?>
