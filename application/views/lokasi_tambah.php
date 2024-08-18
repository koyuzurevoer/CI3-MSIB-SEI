<?php include('bahan/header.php'); ?>

<h1>Tambah Lokasi</h1>
<form action="<?= site_url('apicontroller/lokasi_simpan'); ?>" method="post">
    <div class="mb-3">
        <label for="namaLokasi" class="form-label">Nama Lokasi</label>
        <input type="text" class="form-control" id="namaLokasi" name="namaLokasi">
    </div>
    <div class="mb-3">
        <label for="negara" class="form-label">Negara</label>
        <input type="text" class="form-control" id="negara" name="negara">
    </div>
    <div class="mb-3">
        <label for="provinsi" class="form-label">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi">
    </div>
    <div class="mb-3">
        <label for="kota" class="form-label">Kota</label>
        <input type="text" class="form-control" id="kota" name="kota">
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php include('bahan/footer.php'); ?>
