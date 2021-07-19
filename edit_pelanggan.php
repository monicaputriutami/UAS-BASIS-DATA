<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_pelanggan'];
	
	$id_pelanggan=$_POST['id_pelanggan'];
	$nama_pelanggan=$_POST['nama_pelanggan'];
    $alamat_pelanggan=$_POST['alamat_pelanggan'];
    $no_telp=$_POST['no_telp'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE pelanggan SET id_pelanggan='$id_pelanggan',nama_pelanggan='$nama_pelanggan',alamat_pelanggan='$alamat_pelanggan',no_telp='$no_telp' 
	WHERE id_pelanggan=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id_pelanggan=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_pelanggan = $user_data['id_pelanggan'];
	$nama_pelanggan = $user_data['nama_pelanggan'];
    $alamat_pelanggan = $user_data['alamat_pelanggan'];
    $no_telp = $user_data['no_telp'];
}
?>
<?php include('header.php');?>
<body>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_pelanggan.php">
		<table border="0">
			<tr> 
				<td>ID Pelanggan</td>
				<td><input type="text" class="input" name="id_pelanggan" value=<?php echo $id_pelanggan;?>></td>
			</tr>
			<tr> 
				<td>Nama Pelanggan</td>
				<td><input type="text" class="input" name="nama_pelanggan" value=<?php echo $nama_pelanggan;?>></td>
			</tr>
            <tr> 
				<td>alamat</td>
				<td><input type="text" class="input" name="alamat_pelanggan" value=<?php echo $alamat_pelanggan;?>></td>
            </tr>
            <tr> 
				<td>No TELP</td>
				<td><input type="text" class="input" name="no_telp" value=<?php echo $no_telp;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" class="btn btn-warning" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>