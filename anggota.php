<!DOCTYPE html>
<html lang="en">
<head>

<title>Amatir Koding</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <title>Daftar Anggota</title>
  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
input[type=submit] {
  width: 100%;
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  }
  input[type=submit]:hover {
  background-color: darkgray;
}
</style>
</head>
<body>

  <div class="jumbotron text-center" style="margin-bottom:0">
  <h2>Perpustakaan Milik Universitas Muhammadiyah Bengkulu (UMB)</h2>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" >Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="halamanawal.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pustakawan.php">Pustakawan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="pustaka.php">Daftar Buku</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transaksi.php">Pinjam Buku</a>
      </li>   
      <li class="nav-item">
        <a class="nav-link" href="aboutme.php">About me</a>
      </li>   
    </ul>
   
</div>
</nav>

<?php
$koneksi=new mysqli("localhost","root","","perpustakaan");
$sql="SELECT * FROM `anggota`";
$q=$koneksi->query($sql);
$r=$q->fetch_array();
?>
<div class="container">
  <h2>Anggota Terdaftar</h2>
  <p>Berikut ini:</p> 
          
  <table class="table table-bordered ">
    <thead>
      <tr>
        <th>Nomor Anggota</th>
        <th>Nama Anggota</th>
        <th>Alamat</th>
    <th>Tanggal Daftar</th>
    <th>Tanggal Kadarluarsa</th>
    <th>Hapus</th>
    
      </tr>
    </thead>
    <tbody>
  <?php do{ 
  ?>
      <tr>
        <td><?php echo $r['nomoranggota'];?></td>
        <td><?php echo $r['namaanggota'];?></td>
        <td><?php echo $r['alamat'];?></td>
        <td><?php echo $r['tanggaldaftar'];?></td>
        <td><?php echo $r['tanggalkadarluarsa'];?></td>

<td class="center"><a href="hapusanggota.php?id=<?php echo $r['nomoranggota']; ?>"><button> hapus</button></a></td>


  </tr>
  <?php } while ($r=$q->fetch_array());
  ?>

    </tbody>
  </table>
  

<form method="post" action="inputanggota.php" >
<td><input type="submit" name="Tambah Anggota" value="Tambah Anggota"></td>
 </form>

</div>
</body>
</html>