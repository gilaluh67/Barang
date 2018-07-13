<?php 
	$con = mysqli_connect("localhost","root","","db_barang");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Merek</title>
</head>
<body>
<center>
	<form method="post">
	<input type="text" name="tcari" placeholder="mau cari apa ??">
	<input type="submit" name="cari" value="Cari">
	<br>
	<br>
	<table border="1">
		<tr>
			<td>No</td>
			<td>kd Merek</td>
			<td>Merek</td>
			<td><center>Action</center></td>
		</tr>
		<?php 
			if (isset($_POST['cari'])) {
				$sql = "SELECT * FROM tbl_merek where merek like '%$_POST[tcari]%' or kd_merek like '%$_POST[tcari]%'";
			}else{
				$sql = "SELECT * FROM tbl_merek";
			}
			$query = mysqli_query($con,$sql);
			$no = 0;
			while ($row = mysqli_fetch_array($query)) {
				$no++;
		?>
		 <tr>
		 	<td><?php echo $no; ?></td>
		 	<td><?php echo $row[0]; ?></td>
		 	<td><?php echo $row[1]; ?></td>
		 	<td><a href="#">Hapus</a>  | <a href="#">Edit</a></td>
		 </tr>
		 <?php } ?>
	</table>
	</form>
 </center>	
</body>
</html>