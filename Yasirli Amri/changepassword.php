<?php
session_start();
include 'connect.php';

if (isset($_POST["change_password"])) {
	// Get all input fields
	$email = $_SESSION['user'];
	$current_password = $_POST["current_password"];
	$new_password = $_POST["new_password"];
	$confirm_password = $_POST["confirm_password"];

	// Check if current password is correct
	$sql = "SELECT * FROM users WHERE email = '" . $email . "'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_object($result);
	
	if (password_verify($current_password, $row->password))
	{
		// Check if password is same
		if ($new_password == $confirm_password)
		{
			// Change password
			$sql = "UPDATE users SET password = '" . password_hash($new_password, PASSWORD_DEFAULT) . "' WHERE email = '" . $email . "'";
			mysqli_query($conn, $sql);

			echo "<div class='alert alert-success'>Password berhasil diubah.</div>";
		}
		else
		{
			echo "<div class='alert alert-danger'>Password tidak cocok.</div>";
		}
	}
	else
	{
		echo "<div class='alert alert-danger'>Password salah.</div>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.min.changepassword.css">

</head>
<body>
<div class="container" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-12">
			<form action="" method="POST" >
				<div class="form-group">
					<label>Password anda saat ini</label>
					<input type="password" class="form-control" name="current_password" placeholder="Current password">
				</div>
				<div class="form-group">
					<label>Password baru</label>
					<input type="password" class="form-control" name="new_password" placeholder="New password">
				</div>

				<div class="form-group">
					<label>Konfirmasi password</label>
					<input type="password" class="form-control" name="confirm_password" placeholder="Confirm password">
				</div>

				<p>
					<input type="submit" class="btn btn-primary" name="change_password" value="Change password">
				</p>
			</form>
		</div>
	</div>
</div>
</body>
</html>


