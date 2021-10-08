<!DOCTYPE html>
<html>
<head>
	<title>tampilan pemesanan tiket</title>
</head>
<body>
	
		<table>
			<tr>
				<th>Pemesanan Tiket Cinema 99</th>
			</tr>
			<tr>
				<td colspan="3" <br></td>
			</tr>
			<tr>
				<td>Nama Pemesan</td>
				<td>:</td>
				<td><?= $nama;?></td>
			</tr>
			<tr>
				<td>Judul Film</td>
				<td>:</td>
				<td><?= $judul ;?></td>
			</tr>
			<tr>
				<td>Pukul</td>
				<td>:</td>
				<td><?= $pukul ;?></td>
			</tr>
			<tr>
				<td>Tipe Studio</td>
				<td>:</td>
				<td><?= $tipe;?></td>
			</tr>
			<tr>
				<td>Jumlah Pesan</td>
				<td>:</td>
				<td><?= $jumlah ;?></td>
			</tr>
			<tr>
				<td>Harga Tiket</td>
				<td>:</td>
				<td><?= $harga_tiket; ?></td>
			</tr>
			<tr>
				<td>Total</td>
				<td>:</td>
				<td><?= $total; ?></td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url();?>/index.php/Cinema">Input Data Lagi</a>
				</td>
			</tr>
		</table>

</body>
</html>