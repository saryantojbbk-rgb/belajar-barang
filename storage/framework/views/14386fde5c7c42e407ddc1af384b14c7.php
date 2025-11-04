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
        <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($b->nama_barang); ?></td>
            <td><?php echo e($b->kategori); ?></td>
            <td><?php echo e($b->stok); ?></td>
            <td><?php echo e($b->harga); ?></td>
            <td>
                <a href="/barang/edit/<?php echo e($b->barang_id); ?>">Edit</a> |
                <a href="/barang/hapus/<?php echo e($b->barang_id); ?>" onclick="return confirm('Hapus data?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_temp\resources\views/index.blade.php ENDPATH**/ ?>