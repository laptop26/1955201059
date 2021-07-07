<?php 
 $koneksi=new mysqli("localhost","root","");
 $sql="create database perpustakaan";
 $q=$koneksi->query($sql);
 if ($q) {
	 echo "Database sudah dibuat !";
 } else {
	 echo "Database gagal dibuat !";
 }
 $sql2="CREATE TABLE `perpustakaan`. `pustakawan` (
  `kodepustakawan` varchar(10) NOT NULL,
  `namapustakawan` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nomortelepon` varchar(15) DEFAULT NULL
) ENGINE=InnoDB;";
$q2=$koneksi->query($sql2);
 if ($q2) {
     echo "Tabel pustakawan Sudah Dibuat !";
 } else {
     echo "Tabel pustakawan Gagal Dibuat !";
 }

$sql3="CREATE TABLE `perpustakaan`.`pustaka` (
  `kodepustaka` varchar(10) NOT NULL,
  `judulpustaka` text NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `tahunterbit` varchar(4) NOT NULL
) ENGINE=InnoDB;";
$q3=$koneksi->query($sql3);
if ($q3) {
    echo "Tabel pustaka Sudah Dibuat !";
} else {
    echo "Tabel pustaka Gagal Dibuat !";
}

$sql4="CREATE TABLE `perpustakaan`.`anggota` (
  `nomoranggota` varchar(10) NOT NULL,
  `namaanggota` varchar(40) NOT NULL,
  `alamat` text DEFAULT NULL,
  `tanggaldaftar` datetime NOT NULL,
  `tanggalkadarluarsa` datetime NOT NULL
) ENGINE=InnoDB;";
$q4=$koneksi->query($sql4);
 if ($q4) {
     echo "Tabel anggota Sudah Dibuat !";
 } else {
     echo "Tabel anggota gagal Dibuat !";
 }

 $sql5="CREATE TABLE `perpustakaan`. `transaksi` (
  `idtransaksi` int(10) NOT NULL,
  `kodepustaka` varchar(10) NOT NULL,
  `nomoranggota` varchar(10) NOT NULL,
  `kodepustakawanpinjam` varchar(10) NOT NULL,
  `tanggalpinjam` datetime NOT NULL,
  `kodepustakawankembali` varchar(10) NOT NULL,
  `tanggalkembali` datetime NOT NULL
) ENGINE=InnoDB;";
$q5=$koneksi->query($sql5);
 if ($q5) {
     echo "Tabel transaksi Sudah Dibuat !";
 } else {
     echo "Tabel transaksi gagal Dibuat !";
 }

?>