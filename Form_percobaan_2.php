<html>
 <head> 
    <title>Form Registration</title> 
 </head> 
 
 <body> 
 <h1>Registration For New Member</h1> 

     <form method="POST" action="Hasil.php"> 
     <table border="2" >

        <tr>
            <td>Nama Legkap  </td> 
            <td colspan="3"><input type="text" name="nama"/></td>
        </tr> 
        <tr>
            <td>Nama Panggilan  </td> 
            <td colspan="3"><input type="text" name="panggil"/></td>
        </tr> 
        <tr>
            <td>Tempat Lahir </td>
            <td colspan="3"><input type="text" name="tempat" /></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><select name="tanggal">
            <?php
            for ($t=1;$t<=31;$t++)
            echo "<option value=\"$t\">$t</option>";
            ?>     
            </td>
            <td><select name="bulan">
            <?php
            echo "<option value= Januari>Januari</option>";
            echo "<option value= Februari>Februari</option>";
            echo "<option value= Maret>Maret</option>";
            echo "<option value= April>April</option>";
            echo "<option value= Mei>Mei</option>";
            echo "<option value= Juni>Juni</option>";
            echo "<option value= Juli>Juli</option>";
            echo "<option value= Agustus>Agustus</option>";
            echo "<option value= September>September</option>";
            echo "<option value= Oktober>Oktober</option>";
            echo "<option value= November>November</option>";
            echo "<option value= Desember>Desember</option>";
            ?>
            </td>
            <td><select name="tahun">
            <?php
            for ($i=1970;$i<=1987;$i++)
            echo "<option value=\"$i\">$i</option>";
            ?>
            </td>
        </tr>
        <tr>
            <td>Alamat Rumah</td>
            <td colspan="3"><input type="text" name="alamat" /></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td colspan="3"><input type="radio" name="kelamin" value="laki-laki" />laki-laki
            <input type="radio" name="kelamin" value="perempuan" />perempuan
        </td>
        </tr>
        <tr>
            <td>Asal Sekolah</td>
            <td colspan="3"><input type="text" name="sekolah" /></td>
        </tr>
        <tr>
            <td>Pilihan Paket Member</td>
            <td colspan="3"> <select name= "Member">
            <input type="checkbox" value="member"  name="member1"> Menulis <br/>
            <input type="checkbox" value="member"  name="member2"> Gold <br/>
            <input type="checkbox" value="member"  name="member3"> Silver <br/>       
            </td>
        </tr>
     </table> 
    <input type="submit"  value="Simpan" /> 
    </form> 
  

 </body> 
</html> 