<?php
// konfigurasi database
$host = 'localhost';
$dbname = 'classicmodels';
$username = 'root';
$password = '';

// membuat koneksi
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// query untuk select data
$sql = "SELECT * FROM customers";
$stmt = $conn->query($sql);

// menampilkan data
while ($row = $stmt->fetch()) {
  echo $row['customerNumber'] . ' - ' . $row['customerName'] . '<br>';
}
?>
