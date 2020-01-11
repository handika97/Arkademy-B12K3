<?php
$servername = "localhost";
$database = "tesarkademy";
$username = "root";
$password = "";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi

//if (!$conn) {
  //  die("Koneksi gagal: " . mysqli_connect_error());
//}
//else {echo "Koneksi berhasil";}
//$connection->query("INSERT INTO product VALUES (null,'".$Name."','".$Price."','".$Id_Category."','".$Id_Cashier."')");
//mysqli_close($conn);

?>