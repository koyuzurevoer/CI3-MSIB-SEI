<?php include('bahan/header.php'); ?>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Proyek</h1>
        <div class="mb-3">
            <a href="<?php echo site_url('apicontroller/proyek_tambah'); ?>" class="btn btn-primary">Tambah Proyek</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Proyek</th>
                        <th>Client</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Pimpinan Proyek</th>
                        <th>Keterangan</th>
                        <th>Created At</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proyek as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['namaProyek']; ?></td>
                            <td><?php echo $item['client']; ?></td>
                            <td><?php echo $item['tglMulai']; ?></td>
                            <td><?php echo $item['tglSelesai']; ?></td>
                            <td><?php echo nl2br(htmlspecialchars($item['pimpinanProyek'])); ?></td>
                            <td><?php echo nl2br(htmlspecialchars($item['keterangan'])); ?></td>
                            <td><?php echo $item['createdAt']; ?></td>
                            <td>
                                <a href="<?php echo site_url('apicontroller/proyek_edit/'.$item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('apicontroller/proyek_hapus/'.$item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php include('bahan/footer.php'); ?>