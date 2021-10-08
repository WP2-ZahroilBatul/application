<!DOCTYPE html>
<html>
<head>
	<title>pemesanantiket</title>
</head>
<body>
	
		<form  method="post" action="<?php echo base_url();?>index.php/Cinema/cetak">
			<table>
				<tr>
					<th colspan="3">
						Pemesanan Tiket Cinema 99
					</th>
				</tr>
				<tr>
					<td>Nama Pemesan</td>
					<td>:</td>
					<td><input type="text" name="nama" id="nama"></td>
				</tr>
				<tr>
					<td>Judul Film</td>
					<td>:</td>
					<td>
						<select name="judul" id="judul">
						<option value=" ">-Pilih-</option>
						<option value="Parasite">Parasite</option>
						<option value="Hereditary">Hereditary</option>
						<option value="The Closet">The Closet</option>
						<option value="Kamen Rider Reiwa">Kamen Rider Reiwa</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Pukul</td>
					<td>:</td>
					<td>
						<input type="radio" name="pukul" value="14.20"> 14.20 WIB
						<input type="radio" name="pukul" value="15.40"> 15.40 WIB
						<input type="radio" name="pukul" value="16.40"> 16.40 WIB
					</td>
				</tr>
				<tr>
					<td>Tipe Studio</td>
					<td>:</td>
					<td>
						<input type="radio" name="tipe" value="Reguler 2D"> Reguler 2D
						<input type="radio" name="tipe" value="3D"> 3D
						<input type="radio" name="tipe" value="Velvet"> Velvet
					</td>
				</tr>
				<tr>
					<td>Jumlah Pesan</td>
					<td>:</td>
					<td><input type="text" name="jumlah"></td>
				</tr>
				<tr>
					<td></td>
					<td colspan="3">
						<input type="submit" value="Hitung">
						<input type="reset" value="Kembali">

					</td>
					
				</tr>
			</table>
</form>
</body>
</html>