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

 <form method="post" action="prosestransaksi.php" >
</body>
<tbody>
<div class="container">
  <h2>Data Peminjaman Buku Siswa Di Perpustakaan:</h2>
  <form method="post">
  <div class="form-group">
      <label for="idtransaksi">ID Transaksi:</label>
      <input type="text" class="form-control" id="idtransaksi" placeholder="Isi Disini" name="idtransaksi">
    </div>
    <div class="form-group">
      <label for="kodepustaka">Kode Pustaka:</label>
      <input type="text" class="form-control" id="kodepustaka" placeholder="Isi Disini" name="kodepustaka">
    </div>
    <div class="form-group">
      <label for="nomoranggota">Nomor Anggota:</label>
      <input type="text" class="form-control" id="nomoranggota" placeholder="Isi Disini" name="nomoranggota">
    </div>
   <div class="form-group">
      <label for="kodepustakawanpinjam">Kode Pustakawan Pinjam:</label>
      <input type="text" class="form-control" id="kodepustakawanpinjam" placeholder="Isi Disini" name="kodepustakawanpinjam">
    </div>
    <div class="form-group">
      <label for="tanggalpinjam">Tanggal Pinjam:</label>
      <input type="Datetime-local" class="form-control" id="tanggalpinjam" placeholder="Isi Disini" name="tanggalpinjam">
    </div>
    <div class="form-group">
      <label for="kodepustakawankembali">Kode Pustakawan Kembali:</label>
      <input type="text" class="form-control" id="kodepustakawankembali" placeholder="Isi Disini" name="kodepustakawankembali">
    </div>
    <div class="form-group">
      <label for="tanggalkembali">Tanggal Kembali:</label>
      <input type="Datetime-local" class="form-control" id="tanggalkembali" placeholder="Isi Disini" name="tanggalkembali">
    </div>
     
       <td><input type="submit" name="Simpan" value="Simpan"></td>
</form>
<form method="post" action="halamanawal.php" >
<td><input type="submit" name="Home" value="Home"></td>
</form>
    
</div>
</tbody>
</html>
  