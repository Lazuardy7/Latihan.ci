<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Siswa</title>
</head>
<body>
<form method="POST" action="<?=site_url('welcome/do_update/siswa/'.$table['id_siswa'])?>">
	
<div align="center">
	<h1>Create table Siswa</h1>
	<table>
		<tr>
			<td>NISN</td>
			<td>:</td>
			<td><input type="number" name="nisn" value="<?=$table['nisn']?>"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?=$table['nama']?>"></td>
		</tr>
		<tr>
			<td>tgl_lahir</td>
			<td>:</td>
			<td><input type="date" name="tgl_lahir" value="<?=$table['tgl_lahir']?>"></td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" value="Simpan">
			</td>
		</tr>
	</table>
</div>

</form>
</body>
</html>