<?php
// konfigurasi database
$host = 'localhost';
$dbname = 'classicmodels';
$username = 'root';
$password = '';

// membuat koneksi
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// customer number yang akan dihapus
$customerNumber = 103;

// query untuk hapus data
$sql = "DELETE FROM customers WHERE customerNumber = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$customerNumber]);

echo "Data berhasil dihapus";
?>
