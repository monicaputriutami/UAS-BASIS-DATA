<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_kasir'];
	
	$id_kasir=$_POST['id_kasir'];
	$nama=$_POST['nama'];
    $alamat=$_POST['alamat'];
    $no_telp=$_POST['no_telp'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE kasir SET id_kasir='$id_kasir',nama='$nama',alamat='$alamat',no_telp='$no_telp' 
	WHERE id_kasir=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM kasir WHERE id_kasir=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_kasir = $user_data['id_kasir'];
	$nama = $user_data['nama'];
    $alamat = $user_data['alamat'];
    $no_telp = $user_data['no_telp'];
}
?>
<?php include('header.php');?>
<body>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_kasir.php">
		<table border="0">
			<tr> 
				<td>ID kasir</td>
				<td><input type="text" class="input" name="id_kasir" value=<?php echo $id_kasir;?>></td>
			</tr>
			<tr> 
				<td>Nama</td>
				<td><input type="text" class="input" name="nama" value=<?php echo $nama;?>></td>
			</tr>
            <tr> 
				<td>alamat</td>
				<td><input type="text" class="input" name="alamat" value=<?php echo $alamat;?>></td>
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