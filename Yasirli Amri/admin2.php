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
<!doctype html>
<html lang="en">
<?php include('perintahquery.php') ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Yasirli Amri</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center">Yasirli Amri Administrator</h1>
        <table class="table table-bordered">
            <h4>Tabel User</h4>
            <thead class="table-dark">
                <tr>
                    <th scope="col">idMember</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($user)) : ?>
                    <tr>
                        <th scope="row"><?= $row['iduser']; ?></th>
                        <td><?= $row['username']; ?></td>
                        <td><?= $row['email']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-bordered">
            <h4>Jasa Finansial</h4>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor WhatsApp</th>
                    <th scope="col">Tanggal Daftar</th>
                    <th scope="col">Detail Masalah</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($finansialform)) : ?>
                    <tr>
                        <th scope="row"><?= $row['nama_lengkap']; ?></th>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['nomor_whatsapp']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['detail_masalah']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-bordered">
            <h4>Jasa Human Resource</h4>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor WhatsApp</th>
                    <th scope="col">Tanggal Daftar</th>
                    <th scope="col">Detail Masalah</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($hrform)) : ?>
                    <tr>
                        <th scope="row"><?= $row['nama_lengkap']; ?></th>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['nomor_whatsapp']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['detail_masalah']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-bordered">
            <h4>Jasa Marketing</h4>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor WhatsApp</th>
                    <th scope="col">Tanggal Daftar</th>
                    <th scope="col">Detail Masalah</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($marketingform)) : ?>
                    <tr>
                        <th scope="row"><?= $row['nama_lengkap']; ?></th>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['nomor_whatsapp']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['detail_masalah']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <table class="table table-bordered">
            <h4>Jasa Operasional</h4>
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nomor WhatsApp</th>
                    <th scope="col">Tanggal Daftar</th>
                    <th scope="col">Detail Masalah</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($operasionalform)) : ?>
                    <tr>
                        <th scope="row"><?= $row['nama_lengkap']; ?></th>
                        <td><?= $row['email']; ?></td>
                        <td><?= $row['nomor_whatsapp']; ?></td>
                        <td><?= $row['tanggal']; ?></td>
                        <td><?= $row['detail_masalah']; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <a class="btn btn-primary mt-4" href="logout.php" role="button" 
	onclick="return confirm('yakin akan logout ?')">Logout</a>
	</div>
    

    <!-- bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>