<?php
include 'koneksi.php';

// ambil id dari url
$id = $_get['id'];

// query untuk mengambil data berdasarkan id 
$query = "select * from transaksi where id = '$id'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("query error: " . mysqli_error($conn));
}

$data = mysqli_fetch_assoc($result);

if (!$data) {
    die("data tidak ditemukan!");
}

// sertakan file tampilan form 
include 'gusti.php';
?>