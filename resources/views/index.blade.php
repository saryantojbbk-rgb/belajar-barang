<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Barang</title>
    <style>
    table { border-collapse: collapse; width: 80%; margin:auto; }
    th, td { border:1px solid #333; padding:8px; text-align:left; }
    a.button { padding:8px 12px; background:#228B22; color:#fff; text-decoration:none; border-radius:4px; }
    </style>
</head>
<body>
    <h2 style="text-align:center">Data Barang</h2>
    <p style="text-align:center"><a class="button" href="/barang/tambah">+ Tambah Barang</a></p>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Opsi</th>
        </tr>
        @foreach($barang as $b)
        <tr>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->kategori }}</td>
            <td>{{ $b->stok }}</td>
            <td>{{ $b->harga }}</td>
            <td>
                <a href="/barang/edit/{{ $b->barang_id }}">Edit</a> |
                <a href="/barang/hapus/{{ $b->barang_id }}" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
