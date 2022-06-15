<?php
$conn = mysqli_connect("localhost", "root", "", "database_new");

function register($infologin){
	global $conn;
	//kode php disini	
	$username = htmlspecialchars(stripcslashes($infologin["username"])) ;
	$email = htmlspecialchars(stripcslashes($infologin["email"])) ;
	$password = mysqli_real_escape_string($conn, $infologin["password"]) ;
	$cpassword = mysqli_real_escape_string($conn, $infologin["cpassword"]);
	$cek = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username' ");
	$cekEmail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email' ");
	
	if (mysqli_num_rows($cek) > 0){
		echo "<script>alert('Username sudah ada !');</script>";
		return false;
	}

	if (mysqli_num_rows($cekEmail) > 0){
		echo "<script>alert('Email sudah ada !');</script>";
		return false;
	}

	if ($password !== $cpassword){
		echo "<script>alert('Password tidak sama !');</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query = mysqli_query($conn, "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password') ");

	return mysqli_affected_rows($conn);
}

function ceklogin($datalogin){
	global $conn;
	//kode php disini
	$email	= $datalogin["email"];
	$password 	= $datalogin["password"];

	$cekuser = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

	if (mysqli_num_rows($cekuser) === 1){
		$hasil = mysqli_fetch_assoc($cekuser);

		if (password_verify($password, $hasil["password"])){
			$_SESSION["user"] = $email;
			$_SESSION["login"] = true;

			if (isset($datalogin["rememberme"])){
				setcookie("login", "tetap_ingat", time()+ (10 * 365 * 24 * 60 * 60));
			} 
			echo "<script>
			alert('Anda berhasil login !');
			document.location.href='member.php';
			</script>";
		}
		echo "<p style=\"color:blue; font-style : italic;\"> Email atau Password salah !</p>";
	} else {
		echo "<p style=\"color:blue; font-style : italic;\"> Email atau Password salah !</p>";
	}
}
?>