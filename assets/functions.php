<?php 
// Koneksi ke Database
$conn = mysqli_connect("localhost","root","","erpcanon");


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}
 
function tambah($data) {
	global $conn; 
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

		$query = "INSERT INTO mahasiswa VALUES('','$nrp','$nama','$email','$jurusan','$gambar')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn; 
	$id = $data["id"];
	$nrp = htmlspecialchars($data["nrp"]);
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

		$query = "UPDATE mahasiswa SET
		nrp = '$nrp',
		nama = '$nama',
		email = '$email',
		jurusan = '$jurusan',
		gambar = '$gambar'
		WHERE id = $id
		";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


function cari($keyword) {
	$query = "SELECT * FROM supplier WHERE nama LIKE '%$keyword%'";
	return query($query); 
}

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);


	// Cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar!')
			</script>";
		return false;
	}
	// Return digunakan untuk menghentikan supaya tidak ada username yang sama/atau mengagalkannya




	// Cek Konfirmasi Password
	if ($password !==$password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai')
			</script>";
		return false;
	}

	// Enkripsi Password
	$password = password_hash($password, PASSWORD_DEFAULT);


	// Tambahkan user baru ke database
	mysqli_query($conn, "INSERT INTO pengguna VALUES('','$username','$password')");

	return mysqli_affected_rows($conn);

}

 ?>