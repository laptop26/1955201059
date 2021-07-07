<?php 

	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$id=$_GET['id'];
	$sql="DELETE FROM `pustaka` WHERE `pustaka`.`kodepustaka` = '".$id."'";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('Buku Dari Daftar Telah Berhasil Dihapus');
document.location.href='pustaka.php'</script>\n";
} else {
echo "<script>alert('Buku Dari Daftar Gagal Dihapus');
document.location.href='pustaka.php'</script>\n";
}
?>