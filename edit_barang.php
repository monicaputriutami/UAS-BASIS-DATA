<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_barang'];
	
	$id_barang=$_POST['id_barang'];
	$nama_barang=$_POST['nama_barang'];
    $jenis_barang=$_POST['jenis_barang'];
    $stok_barang=$_POST['stok_barang'];
    $warna_barang=$_POST['warna_barang'];
    $harga_barang=$_POST['harga_barang'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE barang SET id_barang='$id_barang',nama_barang='$nama_barang',jenis_barang='$jenis_barang',stok_barang='$stok_barang',warna_barang='$warna_barang',harga_barang='$harga_barang' 
	WHERE id_barang=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_barang=$user_data['id_barang'];
	$nama_barang=$user_data['nama_barang'];
    $jenis_barang=$user_data['jenis_barang'];
    $stok_barang=$user_data['stok_barang'];
    $warna_barang=$user_data['warna_barang'];
    $harga_barang=$user_data['harga_barang'];
}
?>
<?php include('header.php');?>
<body>

	<br/><br/>
	
	<form name="update_user" method="post" action="edit_barang.php">
		<table border="0">
			<tr> 
				<td>ID barang</td>
				<td><input type="text" class="input" name="id_barang" value=<?php echo $id_barang;?>></td>
			</tr>
			<tr> 
				<td>nama barang</td>
				<td><input type="text" class="input" name="nama_barang" value=<?php echo $nama_barang;?>></td>
			</tr>
            <tr> 
				<td>Jenis barang</td>
				<td><input type="text" class="input" name="jenis_barang" value=<?php echo $jenis_barang;?>></td>
            </tr>
            <tr> 
				<td>stok</td>
				<td><input type="text" class="input" name="stok_barang" value=<?php echo $stok_barang;?>></td>
            </tr>
            <tr> 
				<td>Warna barang</td>
				<td><input type="text" class="input" name="warna_barang" value=<?php echo $warna_barang;?>></td>
            </tr>
            <tr> 
				<td>Harga barang</td>
				<td><input type="text" class="input" name="harga_barang" value=<?php echo $harga_barang;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" class="btn btn-warning" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>