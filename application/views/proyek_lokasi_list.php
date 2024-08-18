<?php include('bahan/header.php'); ?>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Proyek Lokasi</h1>
        <div class="mb-3">
            <a href="<?php echo site_url('apicontroller/proyek_lokasi_tambah'); ?>" class="btn btn-primary">Tambah Proyek-Lokasi</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Proyek ID</th>
                        <th>Lokasi ID</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($proyek_lokasi as $item): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($item['id']['proyekId']); ?></td>
                            <td><?php echo htmlspecialchars($item['id']['lokasiId']); ?></td>
                            <td>
                                <a href="<?php echo site_url('apicontroller/proyek_lokasi_edit/'.$item['id']['proyekId'].'/'.$item['id']['lokasiId']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('apicontroller/proyek_lokasi_hapus/'.$item['id']['proyekId'].'/'.$item['id']['lokasiId']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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
