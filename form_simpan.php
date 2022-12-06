<html>
<head>
	<title>Aplikasi CRUD dengan PHP</title>
	<link rel="stylesheet" href="form_simpan.css">
</head>
<body>
	<h1>Tambah Data Siswa</h1>
	<form method="post" action="proses_simpan.php" enctype="multipart/form-data">
	
	<div class="box">
	<table cellpadding="8">
	<tr>
		<td>NIS</td>
		<td><input type="text" name="nis"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>
		<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
		<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
		</td>
	</tr>
	<tr>
		<td>Telepon</td>
		<td><input type="text" name="telp"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td>Foto</td>
		<td><input type="file" name="foto"></td>
	</tr>
	</table>
	</div>
	
	<div class="act">
	<input type="submit" value="Simpan" class="btn">
	<a href="index.php"><input type="button" value="Batal" class="btn"></a>
	</div>
	</form>

</body>
</html>
