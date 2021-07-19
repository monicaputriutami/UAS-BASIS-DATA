<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id_transaksi'];
	
	$id_transaksi=$_POST['id_transaksi'];
	$id_barang=$_POST['id_barang'];
    $id_pelanggan=$_POST['id_pelanggan'];
    $id_kasir=$_POST['id_kasir'];
    $jumlah_beli=$_POST['jumlah_beli'];
    $total_bayar=$_POST['total_bayar'];
		
	// update user data
	$result = mysqli_query($conn, 
	"UPDATE transaksi SET id_transaksi='$id_transaksi',id_barang='$id_barang',id_pelanggan='$id_pelanggan',id_kasir='$id_kasir',jumlah_beli='$jumlah_beli',total_bayar='$total_bayar' 
	WHERE id_transaksi=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_transaksi=$user_data['id_transaksi'];
	$id_barang=$user_data['id_barang'];
    $id_pelanggan=$user_data['id_pelanggan'];
    $id_kasir=$user_data['id_kasir'];
    $jumlah_beli=$user_data['jumlah_beli'];
    $total_bayar=$user_data['total_bayar'];
}
?>
<?php include('header.php');?>
<body>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit_transaksi.php">
		<table border="0">
			<tr> 
				<td>ID Transaksi</td>
				<td><input type="text" class="input" name="id_transaksi" value=<?php echo $id_transaksi;?>></td>
			</tr>
			<tr> 
				<td>Barang</td>
				<td><input type="text" class="input" name="id_barang" value=<?php echo $id_barang;?>></td>
			</tr>
            <tr> 
				<td>Pelanggan</td>
				<td><input type="text" class="input" name="id_pelanggan" value=<?php echo $id_pelanggan;?>></td>
            </tr>
            <tr> 
				<td>Kasir</td>
				<td><input type="text" class="input" name="id_kasir" value=<?php echo $id_kasir;?>></td>
            </tr>
            <tr> 
				<td>Jumlah Beli</td>
				<td><input type="text" class="input" name="jumlah_beli" value=<?php echo $jumlah_beli;?>></td>
            </tr>
            <tr> 
				<td>Total Bayar</td>
				<td><input type="text" class="input" name="total_bayar" value=<?php echo $total_bayar;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" class="btn btn-warning" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
<?php include('footer.php');?>