<?php include('header.php');?>
<body>
	<br/><br/>
 
	<form action="add_barang.php" method="post" name="form1" style="width:30%; text-align:center;" >
		<table width="100%" border="0">
			
			<tr> 
				<td>nama barang</td>
				<td><input type="text" class="input" name="nama barang"></td>
			</tr>
			<tr> 
				<td>Jenis barang</td>
				<td><input type="text" class="input" name="jenis barang"></td>
			</tr>
			<tr>
				<td>warna barang</td>
				<td><input type="text" class="input" name="warna barang"></td>
			</tr>
            <tr>
				<td>stok barang</td>
				<td><input type="text" class="input" name="stok barang"></td>
            </tr>
            <tr>
				<td>Harga barang</td>
				<td><input type="text" class="input" name="harga barang"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" class="btn btn-success" value="Add barang"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama_barang = $_POST['nama_barang'];
		$jenis_barang = $_POST['jenis_barang'];
		$warna_barang = $_POST['warna_barang'];
		$stok_barang = $_POST['stok_barang'];
        $harga_barang = $_POST['harga_barang'];
		
		// include database connection file
		include("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO barang(id_barang,nama_barang,jenis_barang,stok_barang,warna_barang,harga_barang) 
		VALUES('','$nama_barang','$jenis_barang','$stok_barang','$warna_barang','$harga_barang')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>