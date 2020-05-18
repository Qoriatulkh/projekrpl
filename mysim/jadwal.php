<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Jadwal Tes</title>
</head>

<body>
	<header>
		<h3>Jadwal Tes </h3>
	</header>

	<nav>
		<a href="formdaftar.php">[+] Tambah Baru</a>
	</nav>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>Lokasi</th>
			<th>Jadwal</th>
			<th>Hasil</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = mysqli_query("SELECT * FROM tes");
		// $query = mysqli_query($db, $sql);


		while($pendaftar = mysqli_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$pendaftar['Lokasi Tes']."</td>";
			echo "<td>".$pendaftar['Jadwal']."</td>";
			echo "<td>".$pendaftar['Hasil']."</td>";
			echo "<td>";
			echo "<a href='formedit.php?id=".$pendaftar['id']."'>|Edit|</a>";
			echo "<a href='hapus.php?id=".$pendaftar['id']."'>|Hapus|</a>";
			echo "</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	<p> <a href="index.php">Kembali</a> </p>
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "edit berhasil!";
			} else if($_GET['status'] == 'data terhapus'){
				echo "data terhapus";
			} else {
				echo "edit gagal";
			}
		?>
	</p>
	<?php endif; ?>
	</body>
</html>