<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `anggota`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
	$nomoranggota=$_POST['nomoranggota'];
	$namaanggota=$_POST['namaanggota'];
	$alamat=$_POST['alamat'];
	$tanggaldaftar=$_POST['tanggaldaftar'];
	$tanggalkadarluarsa=$_POST['tanggalkadarluarsa'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$sql="INSERT INTO `anggota` (`nomoranggota`, `namaanggota`, `alamat`, `tanggaldaftar`, `tanggalkadarluarsa`) VALUES ('".$nomoranggota."', '".$namaanggota."', '".$alamat."', '".$tanggaldaftar."', '".$tanggalkadarluarsa."');";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('data berhasil disimpan');
document.location.href='anggota.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='anggota.php'</script>\n";
}
?>