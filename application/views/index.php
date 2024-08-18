<?php include('bahan/header.php'); ?>

<h1>Halaman Utama</h1>

<div class="row">
    <div class="col-md-4">
        <h2>Proyek</h2>
        <ul class="list-group">
            <?php foreach ($proyek as $item): ?>
                <li class="list-group-item">
                    <?= $item['namaProyek']; ?>
                    <a href="<?= site_url('apicontroller/proyek_edit/' . $item['id']); ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= site_url('apicontroller/proyek_hapus/' . $item['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="<?= site_url('apicontroller/proyek_tambah'); ?>" class="btn btn-success mt-3">Tambah Proyek</a>
    </div>

    <div class="col-md-4">
        <h2>Lokasi</h2>
        <ul class="list-group">
            <?php foreach ($lokasi as $item): ?>
                <li class="list-group-item">
                    <?= $item['namaLokasi']; ?>
                    <a href="<?= site_url('apicontroller/lokasi_edit/' . $item['id']); ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="<?= site_url('apicontroller/lokasi_hapus/' . $item['id']); ?>" class="btn btn-sm btn-danger">Hapus</a>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="<?= site_url('apicontroller/lokasi_tambah'); ?>" class="btn btn-success mt-3">Tambah Lokasi</a>
    </div>

    <div class="col-md-4">
        <h2>Proyek-Lokasi</h2>
        <ul class="list-group">
            <?php foreach ($proyek_lokasi as $item): ?>
                <li class="list-group-item">
                    Proyek ID: <?= $item['id']['proyekId']; ?> - Lokasi ID: <?= $item['id']['lokasiId']; ?>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="<?= site_url('apicontroller/proyek_lokasi_list'); ?>" class="btn btn-success mt-3">Tambah Proyek-Lokasi</a>
    </div>
</div>

<?php include('bahan/footer.php'); ?>
