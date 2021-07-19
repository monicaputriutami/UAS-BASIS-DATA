<?php include('header.php');?>
<body>

	<br/><br/>
 
	<form action="add_pelanggan.php" method="post" name="form1" style="width:30%; text-align:center;">
		<table width="100%" border="0">
			
			<tr> 
				<td>Nama</td>
				<td><input type="text" class="input" name="nama_pelanggan"></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" class="input" name="alamat_pelanggan"></td>
			</tr>
			<tr>
				<td>No TELP</td>
				<td><input type="text" class="input" name="no_telp"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit"  class="btn btn-success" value="Add Pelanggan"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
	
		$nama_pelanggan = $_POST['nama_pelanggan'];
		$alamat_pelanggan = $_POST['alamat_pelanggan'];
        $no_telp = $_POST['no_telp'];
		
		// include database connection file
		include("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO pelanggan(id_pelanggan,nama_pelanggan,alamat_pelanggan,no_telp) 
		VALUES('','$nama_pelanggan','$alamat_pelanggan','$no_telp')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>View Users</a>";
	}
	?>
</body>
<?php include('footer.php');?>