<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=xshop", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Kết nối thành công";
} catch(PDOException $e) {
  echo "Lỗi kết nối: " . $e->getMessage();
}
?>