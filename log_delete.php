<?php include("header.php");?>

<div class="card-body">
<h3><b>Data History Transaksi</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
         <thead>
            <tr>
               <th>ID Log</th>
               <th>ID Transaksi</th>
               <th>ID Barang</th>
               <th>ID Pelanggan</th>
               <th>ID kasir</th>
               <th>Jumlah Beli</th>
               <th>Total Bayar</th>
               <th>Waktu </th>
            </tr>
         </thead>
         <?php
            include 'koneksi.php';		
            $sql = 'SELECT  * FROM log_delete_transaksi';
            $query = mysqli_query($conn, $sql);	
            while ($row = mysqli_fetch_array($query))
            {
            	?>
         <tbody>
            <tr>
               <td><?php echo $row['id_log'] ?></td>
               <td><?php echo $row['id_transaksi'] ?></td>
               <td><?php echo $row['id_barang'] ?></td>
               <td><?php echo $row['id_pelanggan'] ?></td>
               <td><?php echo $row['id_kasir'] ?></td>
               <td><?php echo $row['jumlah_beli'] ?></td>
               <td><?php echo $row['total_bayar'] ?></td>
               <td><?php echo $row['waktu'] ?></td>
            </tr>
         </tbody>
         <?php
            }
            ?>
      </table>
      <?php include('footer.php');?>