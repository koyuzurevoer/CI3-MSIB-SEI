<?php include('bahan/header.php'); ?>

<h1>Edit Proyek</h1>
<form action="<?= site_url('apicontroller/proyek_update/' . $proyek['id']); ?>" method="post">
    <div class="mb-3">
        <label for="namaProyek" class="form-label">Nama Proyek</label>
        <input type="text" class="form-control" id="namaProyek" name="namaProyek" value="<?= $proyek['namaProyek']; ?>">
    </div>
    <div class="mb-3">
        <label for="client" class="form-label">Client</label>
        <input type="text" class="form-control" id="client" name="client" value="<?= $proyek['client']; ?>">
    </div>
    <div class="mb-3">
        <label for="tglMulai" class="form-label">Tanggal Mulai</label>
        <input type="datetime-local" class="form-control" id="tglMulai" name="tglMulai" value="<?= $proyek['tglMulai']; ?>">
    </div>
    <div class="mb-3">
        <label for="tglSelesai" class="form-label">Tanggal Selesai</label>
        <input type="datetime-local" class="form-control" id="tglSelesai" name="tglSelesai" value="<?= $proyek['tglSelesai']; ?>">
    </div>
    <div class="mb-3">
        <label for="pimpinanProyek" class="form-label">Pimpinan Proyek</label>
        <input type="text" class="form-control" id="pimpinanProyek" name="pimpinanProyek" value="<?= $proyek['pimpinanProyek']; ?>">
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan"><?= $proyek['keterangan']; ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php include('bahan/footer.php'); ?>
