<?php  

$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$nim = $_POST['nim'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['kelamin'];
$agama = $_POST['agama'];

$conn = new mysqli('localhost','root','','uaspweb');
if($conn->connect_error){
	echo "$conn->connect_error";
	die("Connection Failed : ". $conn->connect_error);
}
else{
	$stmt = $conn->prepare("insert into uaspweb(nama, kelas, nim, alamat, kelamin, agama) values(?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("sssssi", $nama, $kelas, $nim, $alamat, $kelamin, $agama);
	$execval = $stmt->execute();
	echo $execval;
	echo "your registration is successfull....";
	$stmt->close();
	$conn->close();
}

?>