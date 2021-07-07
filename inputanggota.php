<!DOCTYPE html>
<html lang="en">
<head>
  
  <style>
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
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

div {
  border-radius: 5px;
  background-color: ;
  padding: 20px;
}
  </style>
</head>
<body>

 <form method="post" action="prosesanggota.php" >
</body>
<tbody>
<div class="container">
  <h2>Biodata ADD Anggota:</h2>
  <form method="post">
    <div class="form-group">
      <label for="nomoranggota">Nomor Anggota:</label>
      <input type="text" class="form-control" id="nomoranggota" placeholder="Isi Disini" name="nomoranggota">
    </div>
    <div class="form-group">
      <label for="namaanggota">Nama Anggota:</label>
      <input type="text" class="form-control" id="namaanggota" placeholder="Isi Disini" name="namaanggota">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat:</label>
      <input type="text" class="form-control" id="alamat" placeholder="Isi Disini" name="alamat">
    </div>
   <div class="form-group">
      <label for="tanggaldaftar">Tanggal Daftar:</label>
      <input type="datetime-local" class="form-control" id="tanggaldaftar" placeholder="Isi Disini" name="tanggaldaftar">
    </div>
     <div class="form-group">
      <label for="tanggalkadarluarsa">Tanggal Kadarluarsa:</label>
      <input type="datetime-local" class="form-control" id="tanggalkadarluarsa" placeholder="Isi Disini" name="tanggalkadarluarsa">
    </div>
       <td><input type="submit" name="Simpan" value="Simpan"></td>
</form>
<form method="post" action="halamanawal.php" >
<td><input type="submit" name="Home" value="Home"></td>
</form>
    
</div>
</tbody>
</html>
  