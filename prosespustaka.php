<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `pustaka`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
	$kodepustaka=$_POST['kodepustaka'];
	$judulpustaka=$_POST['judulpustaka'];
	$pengarang=$_POST['pengarang'];
	$penerbit=$_POST['penerbit'];
	$tahunterbit=$_POST['tahunterbit'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$sql="INSERT INTO `pustaka` (`kodepustaka`, `judulpustaka`, `pengarang`, `penerbit`, `tahunterbit`) VALUES ('".$kodepustaka."', '".$judulpustaka."', '".$pengarang."', '".$penerbit."', '".$tahunterbit."');";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('Buku Telah Terdaftar Diperpustakaan');
document.location.href='pustaka.php'</script>\n";
} else {
echo "<script>alert('Buku Gagal Terdaftar Diperpustakaan');
document.location.href='inputpustaka.php'</script>\n";
}
?>