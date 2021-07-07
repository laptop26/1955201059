<?php 

	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$id=$_GET['id'];
	$sql="DELETE FROM `anggota` WHERE `anggota`.`nomoranggota` = '".$id."'";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('data berhasil dihapus');
document.location.href='anggota.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='anggota.php'</script>\n";
}
?>