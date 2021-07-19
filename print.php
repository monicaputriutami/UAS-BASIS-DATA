<?php include("koneksi.php");?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<header>
		</header>
		<div class='container' style='margin-top:70px'>
			<div class='row' style='min-height:520px'>
				<div class='col-md-12'>
					<div class='panel panel-success'>					
						<div class='panel-heading'>
            </div>
					
						
						<div class='panel-body'>
							<center>
								<h3></h3>
								<h3>Laporan Data Transaksi </h3>
								<p>&nbsp;</p>
							</center>

							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th>No</th>
								  <th>ID Transaksi</th>
                  <th>Barang</th>
								  <th>Jenis Barang</th>
								  <th>Harga Barang</th>
								  <th>nama Pelanggan </th>
								  <th>Alamat </th>
                  <th>Nama </th>
                  <th>jumlah Beli </th>
                  <th>Total Bayar </th>
								  
								</tr>
							  </thead>
							  <tbody> 
<?php
$query=mysqli_query($conn, "SELECT id_transaksi,nama_barang,jenis_barang,harga_barang,nama_pelanggan,alamat,nama,jumlah_beli,total_bayar  
FROM transaksi
CROSS JOIN barang ON transaksi.id_barang = barang.id_barang 
CROSS JOIN pelanggan ON transaksi.id_pelanggan = pelanggan.id_pelanggan 
CROSS JOIN kasir ON transaksi.id_kasir = kasir.id_kasir")or die (mysqli_error($conn)); 


$j=0; 
while ($row=mysqli_fetch_array($query)) {     
    echo "<tr><td align='left' bgcolor='#657FFF'>";
    echo $j+1;
    echo"</font>";
    echo"</td>";     
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo $row["id_transaksi"];
    echo"</font>";
    echo"</td>";  
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo $row["nama_barang"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["jenis_barang"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["harga_barang"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["nama_pelanggan"];
    echo"</font>";
    echo"</td>";     
    echo"<td align='left' bgcolor='#E8D3DF'>";
    echo $row["alamat"];
    echo"</font>";
    echo"</td>";     
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo $row["nama"];
    echo"</font>";
    echo"</td>";  
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo $row["jumlah_beli"];
    echo"</font>";
    echo"</td>"; 
    echo "<td align='left' bgcolor='#E8D3DF'>";
    echo $row["total_bayar"];
    echo"</font>";
    echo"</td>"; $j++;
} ?>
</tbody>
</table><br>
<div class='pull-right'>
							Cikarang Pusat, 13 juli 2021 <br>
							<b><center>Manager Marketing</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
                            <p>&nbsp;</p>
							<b><center></center>MONICA PUTRI UTAMI</b>
							</div>
                        </div>
                    </div>
                </div>
           <script>
           window.print()
           </script>
    </body>
</html>