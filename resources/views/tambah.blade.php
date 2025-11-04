<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Tambah Barang</title></head>
<body>
<h3 style="text-align:center">Input Data Barang</h3>
<form action="/barang/store" method="post" style="width:400px; margin:auto;">
{{ csrf_field() }}
<table>
<tr><td>Nama Barang</td><td><input type="text" name="nama_barang" required></td></tr>
<tr><td>Kategori</td><td><input type="text" name="kategori"></td></tr>
<tr><td>Stok</td><td><input type="number" name="stok" value="0" required></td></tr>
<tr><td>Harga</td><td><input type="number" name="harga" value="0" required></td></tr>
<tr><td><a href="/barang">Kembali</a></td><td><input type="submit" value="Simpan"></td></tr>
</table>
</form>
</body>
</html>
