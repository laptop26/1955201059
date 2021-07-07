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

 <form method="post" action="prosespustakawan.php" >
</body>
<tbody>
<div class="container">
  <h2>Biodata ADD Pustakawan:</h2>
  <form method="post">
  <div class="form-group">
      <label for="kodepustakawan">Kode Pustakawan:</label>
      <input type="text" class="form-control" id="kodepustakawan" placeholder="Isi Disini" name="kodepustakawan">
    </div>
    <div class="form-group">
      <label for="namapustakawan">Nama Pustakawan:</label>
      <input type="text" class="form-control" id="namapustakawan" placeholder="Isi Disini" name="namapustakawan">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="text" class="form-control" id="password" placeholder="Isi Disini" name="password">
    </div>
   <div class="form-group">
      <label for="nomortelepon">Nomor Telepon:</label>
      <input type="number" class="form-control" id="nomortelepon" placeholder="Isi Disini" name="nomortelepon">
    </div>
     
       <td><input type="submit" name="Simpan" value="Simpan"></td>
</form>
<form method="post" action="halamanawal.php" >
<td><input type="submit" name="Home" value="Home"></td>
</form>
    
</div>
</tbody>
</html>
  