<?php include('bahan/header.php'); ?>

<h1>Tambah Proyek</h1>
<form action="<?= site_url('apicontroller/proyek_simpan'); ?>" method="post">
    <div class="mb-3">
        <label for="namaProyek" class="form-label">Nama Proyek</label>
        <input type="text" class="form-control" id="namaProyek" name="namaProyek">
    </div>
    <div class="mb-3">
        <label for="client" class="form-label">Client</label>
        <input type="text" class="form-control" id="client" name="client">
    </div>
    <div class="mb-3">
        <label for="tglMulai" class="form-label">Tanggal Mulai</label>
        <input type="datetime-local" class="form-control" id="tglMulai" name="tglMulai">
    </div>
    <div class="mb-3">
        <label for="tglSelesai" class="form-label">Tanggal Selesai</label>
        <input type="datetime-local" class="form-control" id="tglSelesai" name="tglSelesai">
    </div>
    <div class="mb-3">
        <label for="pimpinanProyek" class="form-label">Pimpinan Proyek</label>
        <input type="text" class="form-control" id="pimpinanProyek" name="pimpinanProyek">
    </div>
    <div class="mb-3">
        <label for="keterangan" class="form-label">Keterangan</label>
        <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php include('bahan/footer.php'); ?>
