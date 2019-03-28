<?php 
require 'koneksi.php';

$id = $_GET["id"];
$sql = "DELETE FROM aspirasi WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Data Berhasil di Hapus!');self.location='admin.php';</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>