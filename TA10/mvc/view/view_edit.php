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
					<td><input type="text" name="nim" value="<?=$row[0]?>" size="45" readonly /></td>
				</tr>
				<tr align="center">
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?=$row[1]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Angkatan</td>
					<td>:</td>
					<td><input type="text" name="angkatan" value="<?=$row[2]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Fakultas</td>
					<td>:</td>
					<td><input type="text" name="fakultas" value="<?=$row[3]?>" size="45"/></td>
				</tr>
				<tr align="center">
					<td>Prodi</td>
					<td>:</td>
					<td><input type="text" name="prodi" value="<?=$row[4]?>" size="45"/></td>
				</tr>
				<tr>
					<td>Genre</td>
					<td>:</td>
					<td>
							<input type="checkbox" name="Genre[]" value ="Horror" <?php if (strpos(" ".$row['Genre'],"Horror")) {
								echo "checked";
							}?>>Horror<br>
							<input type="checkbox" name="Genre[]" value ="Action" <?php if (strpos(" ".$row['Genre'],"Action")) {
								echo "checked";
							}?>>Action<br>
							<input type="checkbox" name="Genre[]" value ="Drama" <?php if (strpos(" ".$row['Genre'],"Drama")) {
								echo "checked";
							}?>>Drama<br>
							<input type="checkbox" name="Genre[]" value ="Drama" <?php if (strpos(" ".$row['Genre'],"Animation")) {
								echo "checked";
							}?>>Animation<br>
							<input type="checkbox" name="Genre[]" value ="Drama" <?php if (strpos(" ".$row['Genre'],"Thriller")) {
								echo "checked";
							}?>>Thriller
					</td>
				</tr>
				<tr>
					<td>Pilih Tujuan Wisata</td>
					<td>:</td>
					<td>
							<input type="checkbox" name="Place[]" value ="Bali" <?php if (strpos(" ".$row['Travel'],"Bali")) {
								echo "checked";
							}?>>Bali<br>
							<input type="checkbox" name="Place[]" value ="Raja Ampat" <?php if (strpos(" ".$row['Travel'],"Raja Ampat")) {
								echo "checked";
							}?>>Raja Ampat<br>
							<input type="checkbox" name="Place[]" value ="Pulau Derawan" <?php if (strpos(" ".$row['Travel'],"Pulau Derawan")) {
								echo "checked";
							}?>>Pulau Derawan<br>
							<input type="checkbox" name="Place[]" value ="Bangka Belitung" <?php if (strpos(" ".$row['Travel'],"Bangka Belitung")) {
								echo "checked";
							}?>>Bangka Belitung<br>
							<input type="checkbox" name="Place[]" value ="Labuan Bajo" <?php if (strpos(" ".$row['Travel'],"Labuan bajo")) {
								echo "checked";
							}?>>Labuan bajo<br><br>
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
	if(isset($_POST['submit'])){ //jika button submit diklik maka panggil fungsi update pada controller
		$main = new controller();
		$main->update(); //panggil controller update
	}
?>
