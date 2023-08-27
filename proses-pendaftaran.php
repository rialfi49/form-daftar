<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$semester = $_POST['semester'];
/* 	$randIpk = $_POST['ipk']; */
	$beasiswa = $_POST['beasiswa'];
/*   	$berkas = $_POST['berkas'];  */
/* 2 	$proses = "Belum diverifikasi";  */



$rand = rand();
$ekstensi = array('png', 'jpg', 'jpeg');
$filename = $_FILES['berkas']['name'];
$ukuran = $_FILES['berkas']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if(!in_array($ext, $ekstensi)) {
	header("location:index.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){
		$xx = $rand.'_'.$filename;
		move_uploaded_file($_FILES['berkas']['tmp_name'], 'uploads/'.$rand.'_'.$filename);
		mysqli_query($db, "INSERT register INTO VALUES(NULL, '$nama', '$email', '$hp', '$semester', '$randIpk','$beasiswa', '$xx')");
		header("location:list-pendaftar.php?alert=berhasil");
	}else{
		header("location:index.php?alert=gagal_ukuran");
	}
}





/* 	$ekstensi_diperbolehkan	= array('png','jpg');
	$namagbr = $_FILES['berkas']['name'];
	$x = explode('.', $namagbr);
	$ekstensi = strtolower(end($x));
	$ukuran	= $_FILES['berkas']['size'];
	$file_tmp = $_FILES['berkas']['tmp_name'];	

		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
		if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, 'uploads/'.$namagbr); */

/* 			$query = mysqli_query("INSERT INTO register VALUES(NULL, '$nama', '$email', '$hp', '$semester', '$beasiswa', '$namagbr')"); */

/* 			$sql = "INSERT INTO register VALUES (NULL, '$nama', '$email', '$hp', '$semester', '$beasiswa', '$namagbr')"; */
/* 			$sql = "INSERT INTO register VALUES (NULL, '$nama', '$email', '$hp', '$semester', '$beasiswa', '$namagbr')";
			$query = mysqli_query($db, $sql); */

/* 			if($query){
				echo 'FILE BERHASIL DI UPLOAD';
			}else{
				echo 'GAGAL MENGUPLOAD GAMBAR';
			}
		}else{
			echo 'UKURAN FILE TERLALU BESAR';
		}
	}else{
		echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
	} */

	//lolos pengecekan berkas dengan buat move upload
/* 	     move_uploaded_file($tmpName, 'uploads/' . $namaFile);
		 return $namaFile;

    	('Location: list-pendaftar.php?status=sukses'); */


	
	// buat query
/* 	$sql = "INSERT INTO register  (nama, email, hp, semester, beasiswa) VALUES ('$nama', '$email', '$hp', '$semester', '$beasiswa')";
	$query = mysqli_query($db, $sql); */
	

	// apakah query simpan berhasil?
/* 	if( $query ) {


		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: list-pendaftar.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	} */


	
} else {
	die("Akses dilarang...");
}

?>
