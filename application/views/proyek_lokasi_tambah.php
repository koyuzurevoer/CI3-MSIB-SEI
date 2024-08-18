<?php include('bahan/header.php'); ?>

<h1>Tambah Proyek-Lokasi</h1>
<form action="<?= site_url('apicontroller/proyek_lokasi_simpan'); ?>" method="post">
    <div class="mb-3">
        <label for="proyekId" class="form-label">Pilih Proyek</label>
        <select class="form-control" id="proyekId" name="proyekId">
            <?php foreach ($proyek as $p) : ?>
                <option value="<?= $p['id']; ?>"><?= $p['namaProyek']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="mb-3">
        <label for="lokasiId" class="form-label">Pilih Lokasi</label>
        <select class="form-control" id="lokasiId" name="lokasiId">
            <?php foreach ($lokasi as $l) : ?>
                <option value="<?= $l['id']; ?>"><?= $l['namaLokasi']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php include('bahan/footer.php'); ?>
