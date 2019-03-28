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

