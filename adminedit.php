
kalau kalau misal perlu hapus aspirasi yang gak sopan sgl macem tinggal pakek code ini
tinggal tambahi isset/session aja yg ini / (login require) biar orang lain gak asal hapus;




 <?php

require_once("koneksi.php");

$sql = "SELECT * FROM aspirasi";
$result = $conn->query($sql);
?>
<html>
<center>
    <table border="1" cellpadding="10" cellspacing="0" style="overflow: auto;">
  <tr>
    <th>no</th>
     <th>kepada</th>
    <th>kritik dan saran</th>
    <th>waktu</th>
    <th>option</th>
  </tr> 
 
  <?php
$i=1; 
if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
   
?>
  <tr>
    
    <td><?= $i; ?></td>
    <td><?= $row['tujuan'] ?></td>
    <td><?= $row['content'] ?></td>
    <td><?= $row['waktu'] ?></td>
     <td>
      <center><button><a href="delete.php?id=<?= $row["id"]?>" onclick =" return confirm ('are u sure wanna delete this post?');">hapus</a></button></center>
    </td>
  </tr>


<?php $i++; ?>
<?php
    }
} 
$conn->close();

?>
</table>
</center>
</html>

