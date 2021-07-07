<?php 
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `pustakawan`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
	$kodepustakawan=$_POST['kodepustakawan'];
	$namapustakawan=$_POST['namapustakawan'];
	$password=$_POST['password'];
	$nomortelepon=$_POST['nomortelepon'];
	$koneksi=new mysqli("localhost","root","","perpustakaan");
	$sql="INSERT INTO `pustakawan` (`kodepustakawan`, `namapustakawan`, `password`, `nomortelepon`) VALUES ('".$kodepustakawan."', '".$namapustakawan."', '".$password."', '".$nomortelepon."');";
	$q=$koneksi->query($sql);
	if ($q) {
echo "<script>alert('data berhasil disimpan');
document.location.href='pustakawan.php'</script>\n";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='inputpustakawan.php'</script>\n";
}
?>