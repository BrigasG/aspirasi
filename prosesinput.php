 <?php
 require_once("koneksi.php");
 $content = $_POST['content'];
 $tujuan=$_POST['tujuan'];
 

$sql = "INSERT INTO aspirasi VALUES (NULL,'$content', '$tujuan',null)";

if ($conn->query($sql) === TRUE) {

   echo "<script>alert('Terimakasih Aspirasi anda Berhasil di kirimkan!');top.location='http://www.himsiunsri.org';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>