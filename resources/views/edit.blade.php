<!DOCTYPE html>
<html>
<head><meta charset="utf-8"><title>Edit Barang</title></head>
<body>
@foreach($barang as $b)
<form action="/barang/update" method="post" style="width:400px; margin:auto;">
{{ csrf_field() }}
<input type="hidden" name="id" value="{{ $b->barang_id }}">
<table>
<tr><td>Nama Barang</td><td><input type="text" name="nama_barang" value="{{ $b->nama_barang }}" required></td></tr>
<tr><td>Kategori</td><td><input type="text" name="kategori" value="{{ $b->kategori }}"></td></tr>
<tr><td>Stok</td><td><input type="number" name="stok" value="{{ $b->stok }}" required></td></tr>
<tr><td>Harga</td><td><input type="number" name="harga" value="{{ $b->harga }}" required></td></tr>
<tr><td><a href="/barang">Kembali</a></td><td><input type="submit" value="Update"></td></tr>
</table>
</form>
@endforeach
</body>
</html>
