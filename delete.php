<?php
// include database connection file
include("koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
// Delete table suplier
$result = mysqli_query($conn, "DELETE FROM pelanggan WHERE id_pelanggan=$id");
// Delete table produk
$result = mysqli_query($conn, "DELETE FROM barang WHERE id_barang=$id");
// Delete table pembeli
$result = mysqli_query($conn, "DELETE FROM kasir WHERE id_kasir=$id");
// Delete table transaksi
$result = mysqli_query($conn, "DELETE FROM transaksi WHERE id_transaksi=$id");
// After delete redirect to Home, so that latest user list will be displayed.a

header("Location: index.php");
?>