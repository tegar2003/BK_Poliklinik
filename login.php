<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Poliklinik</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
		<div class="login">
			
			<div class="welcome">
				<h1>Selamat Datang,</h1> 
				<h3>Website Poliklinik UDINUS</h3>
			</div>

				<form action="cek_login.php" method="post" class="form-abu border">
					<div class="logodok"><img src="asset/dokter.png" alt=""></div>
					<label for="">Username</label>
					<input type="text" name="username" placeholder="Username" class="full">
					<label for="">Password</label>
					<input type="password" name="password" placeholder="Password" class="full">
					<label for=""></label>
					<label for=""></label>
					<input type="submit" name="login" value="Login" class="hijau full">
					<label for=""></label>
					<label for=""></label>
					<a href="index.php">Kembali</a>
				</form>
		</div>




</body>
</html>
