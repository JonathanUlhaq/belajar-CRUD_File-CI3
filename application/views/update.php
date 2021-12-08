<form action="<?= base_url(); ?>Admin/edit/<?= $detail['id']; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" class="form-control" value="<?= $detail['nama_belajar']; ?>" name="nama_belajar">
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input type="text" class="form-control" value="<?= $detail['alamat_belajar']; ?>" name="alamat_belajar">
    </div>

    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>


    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>