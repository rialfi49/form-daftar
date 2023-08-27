<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pendaftaran Beasiswa | Universitas Coding</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container-fluid p-5 text-center">
	<h1>Pendaftaran Beasiswa</h1>
	<p>Kampusku Jaya Jaya Jaya</p> 
	</div>

	<div>
        <nav class="navbar-light bg-light">
            <ul class="nav nav-pills nav-fill border">
                <li class="nav-item">
                    <a class="nav-link" href="beasiswa.php">Pilihan Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="form-daftar.php">Daftar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="list-pendaftar.php">Hasil</a>
                </li>
            </ul>
        </nav>
    </div>

	<div class="container mt-3">
		<h2>Mahasiswa yang sudah mendaftar</h2>
		<a href="form-daftar.php" class="btn btn-success">[+] Tambah Baru</a>

<!-- 		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Holy guacamole!</strong> You should check in on some of those fields below.
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
		</div> -->
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Email</th>
					<th>No HP</th>
					<th>Semester</th>
					<th>Pilihan Beasiswa</th>
					<th>Berkas Syarat</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM pendaftar";
				$query = mysqli_query($db, $sql);
				
				while($row = mysqli_fetch_array($query)){
					echo "<tr>";
					echo "<td>".$row['id']."</td>";
					echo "<td>".$row['nama']."</td>";
					echo "<td>".$row['email']."</td>";
					echo "<td>".$row['hp']."</td>";
					echo "<td>".$row['semester']."</td>";
					echo "<td>".$row['beasiswa']."</td>";
					echo "<td>".$row['berkas']."</td>";	
					echo "<td>".$row['status']."</td>";	
					echo "</tr>"; 

					?>
					<!-- <tr>
						<td><? echo $row["id"]; ?></td>
						<td><? echo $row["nama"]; ?></td>
						<td><? echo $row["email"]; ?></td>
						<td><? echo $row["hp"]; ?></td>
						<td><? echo $row["semester"]; ?></td>
						<td><? echo $row["beasiswa"]; ?></td>
						<td><img src="<?php echo "uploads/".$row['berkas']; ?>" width="50" height="55"></td>
						<td></td>
					</tr> -->
				<?php } ?>		

			</tbody>
		</table>
		<ul class="list-group">
			<li class="list-group-item active">Total: <?php echo mysqli_num_rows($query) ?></li>
			<li class="list-group-item" style="color: green;">
				<?php if(isset($_GET['status'])): ?>
				<p>
					<?php
						if($_GET['status'] == 'sukses'){
							echo "Pendaftaran pengajuan beasiswa baru berhasil!";
						} else {
							echo "Pendaftaran gagal!";
						}
					?>
				</p>
				<?php endif; ?>
			</li>
		</ul>
		
	</div>
</body>
</html>


