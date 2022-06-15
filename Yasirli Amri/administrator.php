<?php 
session_start();
	//kode php disini
if (isset($_COOKIE["login"])){
		
			if ($_COOKIE["login"]=="true"){
				$_SESSION["login"] = true;
			}

		}

if (!isset($_SESSION["login"])){
	echo "<script>alert('Ilegal akses!');
	document.location.href='login.php';</script>";
	die;

}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container mt-4">
		<h1>Halaman Administrator Yasirli Amri</h1>
	
	<?php 
		require 'connect.php';
		echo "selamat datang ". "<b>".$_SESSION["user"]."</b><br><br>";

		$query = mysqli_query($conn, "SELECT * FROM users");

		if (mysqli_num_rows($query) > 0) {
			echo "<table border ='1'>";
			echo "<tr>";
			echo "	<th>ID User</th>";
			echo "	<th>Username</th>";
            echo "  <th>Email</th>";
			echo "</tr>";

			while ($row = mysqli_fetch_assoc($query)) {
				extract ($row);
				echo "<tr>";
				echo "	<td>{$idmember}</td>";
				echo "	<td>{$username}</td>";
                echo "  <td>{$email}</td>";
				echo "</tr>";
			}
			
			echo "</table>";
		} else {
			echo "0 results";
		}
	?>
	<br>
	<br>
	<a class="btn btn-primary mt-4" href="logout.php" role="button" 
	onclick="return confirm('yakin akan logout ?')">Logout</a>
	</div>
</body>
</html>