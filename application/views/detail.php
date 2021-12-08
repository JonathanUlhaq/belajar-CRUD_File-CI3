<!-- Button trigger modal -->
<button style="margin: 1vw;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url(); ?>Admin/tambah" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_belajar">
                    </div>

                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name="alamat_belajar">
                    </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>


                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>

        </div>
    </div>
</div>
</div>

<table class="table">
    <thead>
        <tr>

            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Foto</th>
            <th scope="col">aksi</th>
        </tr>
    </thead>
    <tbody>


        <tr>

            <td><?= $detail['nama_belajar']; ?></td>
            <td><?= $detail['alamat_belajar']; ?></td>
            <td><?= $detail['foto']; ?></td>
            <td> <a href="<?= base_url(); ?>">Kembali</a> </td>
        </tr>

    </tbody>
</table>