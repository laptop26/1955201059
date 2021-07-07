<?php 

	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$id=$_GET['id'];
	$sql="DELETE FROM `transaksi` WHERE `transaksi`.`idtransaksi` = '".$id."'";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('Data Dihapus');
document.location.href='transaksi.php'</script>\n";
} else {
echo "<script>alert('Gagal Dihapus');
document.location.href='transaksi.php'</script>\n";
}
?>