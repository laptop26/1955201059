<?php 

	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$id=$_GET['id'];
	$sql="DELETE FROM `pustakawan` WHERE `pustakawan`.`kodepustakawan` = '".$id."'";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('data berhasil dihapus');
document.location.href='pustakawan.php'</script>\n";
} else {
echo "<script>alert('data gagal dihapus');
document.location.href='pustakwan.php'</script>\n";
}
?>