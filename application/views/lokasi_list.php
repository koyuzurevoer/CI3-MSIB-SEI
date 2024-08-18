<?php include('bahan/header.php'); ?>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Lokasi</h1>
        <div class="mb-3">
            <a href="<?php echo site_url('apicontroller/lokasi_tambah'); ?>" class="btn btn-primary">Tambah Lokasi</a>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Lokasi</th>
                        <th>Negara</th>
                        <th>Provinsi</th>
                        <th>Kota</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($lokasi as $item): ?>
                        <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo htmlspecialchars($item['namaLokasi']); ?></td>
                            <td><?php echo htmlspecialchars($item['negara']); ?></td>
                            <td><?php echo htmlspecialchars($item['provinsi']); ?></td>
                            <td><?php echo htmlspecialchars($item['kota']); ?></td>
                            <td>
                                <a href="<?php echo site_url('apicontroller/lokasi_edit/'.$item['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="<?php echo site_url('apicontroller/lokasi_hapus/'.$item['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
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