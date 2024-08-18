<?php include('bahan/header.php'); ?>

<h1>Edit Lokasi</h1>
<form action="<?= site_url('apicontroller/lokasi_update/' . $lokasi['id']); ?>" method="post">
    <div class="mb-3">
        <label for="namaLokasi" class="form-label">Nama Lokasi</label>
        <input type="text" class="form-control" id="namaLokasi" name="namaLokasi" value="<?= $lokasi['namaLokasi']; ?>">
    </div>
    <div class="mb-3">
        <label for="negara" class="form-label">Negara</label>
        <input type="text" class="form-control" id="negara" name="negara" value="<?= $lokasi['negara']; ?>">
    </div>
    <div class="mb-3">
        <label for="provinsi" class="form-label">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" value="<?= $lokasi['provinsi']; ?>">
    </div>
    <div class="mb-3">
        <label for="kota" class="form-label">Kota</label>
        <input type="text" class="form-control" id="kota" name="kota" value="<?= $lokasi['kota']; ?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>

<?php include('bahan/footer.php'); ?>
