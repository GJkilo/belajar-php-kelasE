<?php
// Menghubungkan ke file koneksi.php
include 'koneksi.php';

// Query untuk mendapatkan semua data dari tabel transaksi
$query = "SELECT id, nama, email, nim, password, data_barang FROM transaksi"; // Menambahkan 'nim' ke dalam query
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Transaksi</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: left;
        }
        th, td {
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even){
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<!-- Tabel untuk menampilkan data -->

<h2>Data Transaksi</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>NIM</th> <!-- Mengubah header menjadi NIM -->
        <th>Password</th>
        <th>Data Barang</th>
        <th>Aksi</th>
    </tr>

    // Menampilkan data per baris
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['nama'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['nim'] . "</td>"; // Menampilkan NIM
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['data_barang'] . "</td>";
        echo "<td>
                <a href='edit.php?id=" . $row['id'] . "'>Edit</a> | 
                <a href='hapus.php?id=" . $row['id'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
              </td>";
        echo "</tr>";
    }

</table>
// Menutup koneksi database
mysqli_close($conn);
?>