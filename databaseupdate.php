<?php
// konfigurasi database
$host = 'localhost';
$dbname = 'classicmodels';
$username = 'root';
$password = '';

// membuat koneksi
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// data baru
$newCustomerName = 'New Customer Name';
$customerNumber = 103;

// query untuk update data
$sql = "UPDATE customers SET customerName = ? WHERE customerNumber = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$newCustomerName, $customerNumber]);

echo "Data berhasil diupdate";
?>
