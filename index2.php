<?php include("auth.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Admin Toko</title>
 <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link href="style_form.css" rel="stylesheet"/>
</head>
<body>
 <div class="navbar">
  <h3 class="admin">Welcome Administrator </h3>
 </div>
 <div class="sidebar">
  <div class="nav"><p style="color:white;">Welcome
                    <?php echo $_SESSION['username']; ?>!
                </p></div>
  <a href="index.php"><button class="btnt"><i style="margin-right: 5px" class="fa fa-home"></i>Home</button><br></a>
  <a href="add_barang.php"><button class="btnt"><i style="margin-right: 5px" class="glyphicon glyphicon-shopping-cart"></i></button><br></a>
  <a href="add_pelanggan.php"><button class="btnt"><i style="margin-right: 5px" class="fa fa-user"></i></button><br></a>
  <a href="add_kasir.php"><button class="btnt"><i style="margin-right: 5px" class="glyphicon glyphicon-user"></i></button><br></a>
  <a href="add_transaksi.php"><button class="btnt"><i style="margin-right: 5px" class="glyphicon glyphicon-transfer"></i></button><br></a>
  <a href="laporan.php"><button class="btnt"><i style="margin-right: 5px" class="glyphicon glyphicon-file"></i></button><br></a>
  <a href="log_delete.php"><button class="btnt"><i style="margin-right: 5px" class="glyphicon glyphicon-list-alt"></i></button><br></a>
  <a href="logout.php"><button class="btnn"><i style="margin-right: 5px" class="glyphicon glyphicon-log-out"></i></button><br></a>
 </div>
 <div class="wrapper">
  </div>
      <style>
         body {font-family:tahoma, arial}
         table {border-collapse: collapse}
         th, td {font-size: 13px; border: 1px solid #DEDEDE; padding: 3px 5px; color: #303030}
         th {background: #CCCCCC; font-size: 12px; border-color:#B0B0B0}
      </style>
   </head>
   <body>
      <center><h1>BOUTIQUE AMANAH</h1></center>
      <center><h3>Tabel Kasir</h3></center>
      <table>
         <thead>
            <tr>
               <th>ID Kasir</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No TELP</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM kasir';
            $query = mysqli_query($conn, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_kasir'] ?></td>
               <td><?php echo $row['nama'] ?></td>
               <td><?php echo $row['alamat'] ?></td>
               <td><?php echo $row['no_telp'] ?></td>
               <td><a href="edit_kasir.php?id=<?= $row['id_kasir']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_kasir']; ?>">Delete</a></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
     <center> <h3>Tabel Pelanggan</h3></center>
      <table>
         <thead>
            <tr>
               <th>ID Pelanggan</th>
               <th>Nama</th>
               <th>Alamat</th>
               <th>No TELP</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM pelanggan';
            $query = mysqli_query($conn, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_pelanggan'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['alamat_pelanggan'] ?></td>
               <td><?php echo $row['no_telp'] ?></td>
               <td><a href="edit_pelanggan.php?id=<?= $row['id_pelanggan']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_pelanggan']; ?>">Delete</a></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
     <center> <h3>Tabel Barang</h3> </center>
      <table>
         <thead>
            <tr>
               <th>ID Barang</th>
               <th>Nama Barang</th>
               <th>Jenis Barang</th>
               <th>Warna Barang</th>
               <th>Stok Barang</th>
               <th>Harga Barang</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';	
            $sql = 'SELECT  * FROM barang';
            $query = mysqli_query($conn, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row[0] ?></td>
               <td><?php echo $row[1] ?></td>
               <td><?php echo $row[2] ?></td>
               <td><?php echo $row[3] ?></td>
               <td><?php echo $row[4] ?></td>
               <td><?php echo $row[5] ?></td>
               <td><a href="edit_barang.php?id=<?= $row['id_barang']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_barang']; ?>">Delete</a>
               
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>

    <center>  <h3>Tabel Transaksi</h3></center>
      <table>
         <thead>
            <tr>
               <th>ID Transaki</th>
               <th>Barang</th>
               <th>Pelanggan</th>
               <th>Kasir</th>
               <th>Jumlah Beli</th>
               <th>Total Bayar</th>
               <th>Aksi</th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';	
            $sql = "SELECT * FROM transaksi
            INNER JOIN  barang ON transaksi.id_barang = barang.id_barang
            INNER JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan
            INNER JOIN kasir ON transaksi.id_kasir = kasir.id_kasir";
            $query = mysqli_query($conn, $sql);		
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_transaksi'] ?></td>
               <td><?php echo $row['id_barang'] ?></td>
               <td><?php echo $row['nama_pelanggan'] ?></td>
               <td><?php echo $row['id_kasir'] ?></td>
               <td><?php echo $row['jumlah_beli'] ?></td>
               <td><?php echo $row['total_bayar'] ?></td>
               <td><a href="edit_transaksi.php?id=<?= $row['id_transaksi']; ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id_transaksi']; ?>">Delete</a>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
    
   </body>
</html>