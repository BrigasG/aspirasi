<html>
<center>
<form action="prosesinput.php" method="post"> 
 <table width="50%" align="left" cellspacing="1" cellpadding="5">
 

<tr>
   <td>Di tujukan kepada</td>
   <td> 
  <select name="tujuan" required="">
     <option value="">-Pilih salah satu-</option>
     <option value="dosen">Dosen</option>
      <option value="himsi">HIMSI</option>
     <option value="fasilitas">Fasilitas</option>
     <option value="fakultas">Fakultas</option>
     <option value="jurusan">Jurusan</option>
  </select>
  </tr>


 	<tr>
   <td>Kritik Dan Saran</td>
   <td>:<textarea   cols="27" rows="10" name="content" required=""></textarea></td>
  </tr>
  <tr>
    <td>
  <button type="submit" name="submit">submit</button>
</td>
  </tr>
  </table>
</form>
</center>
</html>
