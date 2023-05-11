<?php
// konfigurasi database
$host = 'localhost';
$dbname = 'classicmodels';
$username = 'root';
$password = '';

// membuat koneksi
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

// data untuk dimasukkan
$customerNumber = 103;
$customerName = 'Test Customer';
$contactLastName = 'Lastname';
$contactFirstName = 'Firstname';
$phone = '1234567890';
$addressLine1 = '123 Main St.';
$addressLine2 = 'Suite 100';
$city = 'Anytown';
$state = 'CA';
$postalCode = '12345';
$country = 'USA';
$salesRepEmployeeNumber = null;
$creditLimit = null;

// query untuk insert data
$sql = "INSERT INTO customers (customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->execute([$customerNumber, $customerName, $contactLastName, $contactFirstName, $phone, $addressLine1, $addressLine2, $city, $state, $postalCode, $country, $salesRepEmployeeNumber, $creditLimit]);

echo "Data berhasil ditambahkan";
?>
