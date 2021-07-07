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

 <form method="post" action="prosespustaka.php" >
</body>
<tbody>
<div class="container">
  <h2>Data Tambah Buku Di Perpustakaan:</h2>
  <form method="post">
  <div class="form-group">
      <label for="kodepustaka">Kode Buku:</label>
      <input type="text" class="form-control" id="kodepustaka" placeholder="Isi Disini" name="kodepustaka">
    </div>
    <div class="form-group">
      <label for="namapustaka">Nama Buku:</label>
      <input type="text" class="form-control" id="namapustaka" placeholder="Isi Disini" name="namapustaka">
    </div>
    <div class="form-group">
      <label for="pengarang">Pengarang:</label>
      <input type="text" class="form-control" id="pengarang" placeholder="Isi Disini" name="pengarang">
    </div>
   <div class="form-group">
      <label for="penerbit">Penerbit:</label>
      <input type="text" class="form-control" id="penerbit" placeholder="Isi Disini" name="penerbit">
    </div>
    <div class="form-group">
      <label for="tahunterbit">Tahun Terbit:</label>
      <input type="Date" class="form-control" id="tahunterbit" placeholder="Isi Disini" name="tahunterbit">
    </div>
     
       <td><input type="submit" name="Simpan" value="Simpan"></td>
</form>
<form method="post" action="halamanawal.php" >
<td><input type="submit" name="Home" value="Home"></td>
</form>
    
</div>
</tbody>
</html>
  