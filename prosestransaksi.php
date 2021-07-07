<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `transaksi`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
	$idtransaksi=$_POST['idtransaksi'];
	$kodepustaka=$_POST['kodepustaka'];
	$nomoranggota=$_POST['nomoranggota'];
	$kodepustakawanpinjam=$_POST['kodepustakawanpinjam'];
	$tanggalpinjam=$_POST['tanggalpinjam'];
	$kodepustakawankembali=$_POST['kodepustakawankembali'];
	$tanggalkembali=$_POST['tanggalkembali'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$sql="INSERT INTO `transaksi` (`idtransaksi`, `kodepustaka`, `nomoranggota`, `kodepustakawanpinjam`, `tanggalpinjam`, `kodepustakawankembali`, `tanggalkembali`) VALUES ('".$idtransaksi."', '".$kodepustaka."', '".$nomoranggota."', '".$kodepustakawanpinjam."', '".$tanggalpinjam."', '".$kodepustakawankembali."', '".$tanggalkembali."');";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('Data Peminjaman Telah Terdaftar');
document.location.href='transaksi.php'</script>\n";
} else {
echo "<script>alert('Data Peminjaman Gagal Terdaftar ');
document.location.href='inputtransaksi.php'</script>\n";
}
?>