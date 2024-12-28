<?php
// Menghubungkan ke file koneksi.php
include 'koneksi.php';

// Cek apakah ID ada di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data
    $delete_query = "DELETE FROM transaksi WHERE id = $id";

    if (mysqli_query($conn, $delete_query)) {
        echo "Data berhasil dihapus. <a href='lihatdata.php'>Kembali ke Data Transaksi</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    die("ID tidak ditemukan.");
}

// Menutup koneksi database
mysqli_close($conn);
?>