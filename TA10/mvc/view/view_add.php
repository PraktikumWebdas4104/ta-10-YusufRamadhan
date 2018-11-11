<html>
	<head>
		<title>MVC</title>
	</head>
	<body>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr align="center">
					<td>NIM</td>
					<td>:</td>
					<td><input type="text" name="nim" size="45" /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" size="45"/></td>
				</tr>
				<tr>
					<td>Pilih Genre Film</td>
					<td>:</td>
					<td>
							<input type="checkbox" name="Genre[]" value ="Horror">Horror<br>
							<input type="checkbox" name="Genre[]" value ="Action">Action<br>
							<input type="checkbox" name="Genre[]" value ="Drama">Drama<br>
							<input type="checkbox" name="Genre[]" value ="Drama">Animation<br>
							<input type="checkbox" name="Genre[]" value ="Drama">Thriller
					</td>
				</tr>
				<tr>
					<td>Pilih Tujuan Wisata</td>
					<td>:</td>
					<td>
							<input type="checkbox" name="Place[]" value ="Bali">Bali<br>
							<input type="checkbox" name="Place[]" value ="Raja Ampat">Raja Ampat<br>
							<input type="checkbox" name="Place[]" value ="Pulau Derawan">Pulau Derawan<br>
							<input type="checkbox" name="Place[]" value ="Bangka Belitung">Bangka Belitung<br>
							<input type="checkbox" name="Place[]" value ="Labuan Bajo">Labuan bajo<br><br>
					</td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="submit"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi insert pada controller
		$main = new controller();
		$main->insert();//panggil controller insert
	}
?>
