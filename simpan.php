<?php include("koneksi.php");

    $insert = mysqli_query($conn,"INSERT INTO transaksi VALUES('','$_POST[nama_barang]','$_POST[nama_pelanggan]','$_POST[nama]','$_POST[jumlah_beli]','$_POST[total_bayar]')");
    
    if($insert) {
        echo"transaction added successfully. <a href='index.php'>View Users</a>";
    }
    else{
        echo"transaction failed try again!!!";
    }
?>