<html>
<head>
	<title>Edit User</title>
</head>
<body>
	<center>
		<h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1>
		<h3>Edit Data</h3>
	</center>
	
	<form action="<?php echo base_url(). 'index.php/C_User/update'; ?>" method="post">
		<table style="margin:20px auto;">
		<?php foreach($user as $u){ ?>
			<tr>
				<td>Nama Depan</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $u->id ?>">
					<input type="text" name="fname" value="<?php echo $u->fname ?>">
				</td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td><input type="text" name="lname" value="<?php echo $u->lname ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $u->email ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		<?php } ?>
		</table>
	</form>		
</body>
</html>