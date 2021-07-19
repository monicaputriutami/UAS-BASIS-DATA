<?php include("koneksi.php")?>
<?php include('header.php')?>
<body>
<form action="simpan.php" method="post" style="width:30%; text-align:center;">
    <label>Nama Barang</label><br>
    <select class="input" name="nama_barang">
        <?php
        $sql = mysqli_query($conn,"SELECT * FROM barang");
        while ($data = mysqli_fetch_assoc($sql)) {
            echo '<option value="'.$data["id_barang"].'">'.$data["nama_barang"].', Rp.'.$data["harga_barang"].''.'</option>';
        }
        ?>
    </select><br>
    <label>Nama Pelanggan</label><br>
    <select class="input" name="nama_pelanggan">
        <?php
        $sql = mysqli_query($conn,"SELECT * FROM pelanggan");
        while ($data = mysqli_fetch_assoc($sql)) {
			echo '<option value="'.$data["id_pelanggan"].'">'.$data["nama_pelanggan"].'</option>';

        }
        ?>
    </select><br>
	<label>Nama Kasir</label><br>
    <select class="input" name="nama">
        <?php
        $sql = mysqli_query($conn,"SELECT * FROM kasir");
        while ($data = mysqli_fetch_assoc($sql)) {
            echo '<option value="'.$data["id_kasir"].'">'.$data["nama"].'</option>';

        }
        ?>
    </select><br>
    <label>
        Jumlah Beli</label><br>
    <input type="text" class="input" name="jumlah_beli"><br>

    <label>
        Total Bayar</label><br>
    <input type="text" class="input" name="total_bayar"><br>

	<br>
    <input type="submit" class="btn btn-success" name="simpan" value="simpan">
</form>
	</body>
    <?php include('footer.php');?>