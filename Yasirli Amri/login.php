<?php 
	session_start();
?>
<!DOCTYPE html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/login.css" />

  <title>Registrasi Web</title>
</head>

<?php 
require 'connect.php';
if (isset($_POST["submit"])) {
  

	if (register($_POST)>0) {
		echo "<script>
			alert('Data berhasil disimpan !');
			document.location.href='login.php';
			</script>";

    } else {
      echo mysqli_error($conn);
  }

} else if (isset($_POST["login"])){
    if (ceklogin($_POST)>0) {
		echo "<script>
			alert('Berhasil login !');
			document.location.href='admin2.php';
			</script>";

    } else {
      echo mysqli_error($conn);
    }
}
?>

<body>
  <div class="container" id="container">
    <div class="form-container sign-up-container">
      <form action="" method="POST">
        <h1>Create Account</h1>
        <span>or use your email for registration</span>
        <input type="text" name="username" placeholder="Username" autocomplete="off" required="true" />
        <input type="email" name="email" placeholder="Email" autocomplete="off" required="true" />
        <input type="password" name="password" placeholder="Password" required="true" />
        <input type="password" name="cpassword" placeholder="Confirm Password" required="true" />
        <button type="submit" name="submit">DAFTAR</button>
      </form>
    </div>
    <div class="form-container sign-in-container">
      <form action="" method="POST">
        <h1>Sign in</h1>
        <span>or use your account</span>
        <input type="text" name="email" placeholder="Email" autocomplete="off" required="true" />
        <input type="password" name="password" placeholder="Password" required="true" />
        <button type="submit" name="login">MASUK</button>
        <input type="checkbox" name="rememberme" value="rememberme">Remember Me<br>
      </form>
    </div>
    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <h1>Welcome Back!</h1>
          <p>To keep connected with us please login with your personal info</p>
          <button class="ghost" id="signIn">MASUK</button>
        </div>
        <div class="overlay-panel overlay-right">
          <h1>Hello, Friend!</h1>
          <p>Enter your personal details and start journey with us</p>
          <button class="ghost" id="signUp">DAFTAR</button>
        </div>
      </div>
    </div>
  </div>

  <script src="js/login.js"></script>
</body>
