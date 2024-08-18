<?php include('bahan/header.php'); ?>

<h1>Edit Proyek-Lokasi</h1>
<form action="<?= site_url('apicontroller/proyek_lokasi_update/' . $proyek_lokasi['proyekId'] . '/' . $proyek_lokasi['lokasiId']); ?>" method="post">
    <div class="mb-3">
        <label for="proyekId" class="form-label">Pilih Proyek</label>
        <select class="form-control" id="proyekId" name="proyekId">
            <?php foreach ($proyek as $p) : ?>
                <option value="<?= $p['id']; ?>" <?= $p['id'] == $proyek_lokasi['proyekId'] ? 'selected' : ''; ?>><?= $p['namaProyek']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="lokasiId" class="form-label">Pilih Lokasi</label>
        <select class="form-control" id="lokasiId" name="lokasiId">
            <?php foreach ($lokasi as $l) : ?>
                <option value="<?= $l['id']; ?>" <?= $l['id'] == $proyek_lokasi['lokasiId'] ? 'selected' : ''; ?>><?= $l['namaLokasi']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php include('bahan/footer.php'); ?>
