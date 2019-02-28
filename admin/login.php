<?php 
session_start();

require 'config.php';

if (isset($_POST['login'])) {
    $query=mysqli_query($con, "SELECT * FROM tb_admin WHERE username='$_POST[username]' AND password='$_POST[password]'");
    $data=mysqli_fetch_array($query);
    $cek=mysqli_num_rows($query);
    $user=$data[1];
    if ($data > 0 ) {
        $_SESSION['username']= $_POST['username'];
        echo "<script>alert('Selamat datang $user');document.location.href='datasiswa.php'</script>";
    }else{
        echo "<script>alert('Username dan password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Login</title>
	<link rel="stylesheet" href="login.css">
</head>
<body>

	<div class="box">
		<h2>Silakan Login:)</h2>
		<form method="post">
			<div class="inputBox">
				<input type="text" name="username" required="">
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div>
		<td><input type="submit" name="login" value="Login"></td>
		</form>
</div>
</body>
</html>