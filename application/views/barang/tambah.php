<div class="container">
    <div class="row mt-2">
        <div class="colmd-5">
            <?php if (validation_errors() ):?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="id_barang" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" name="id_barang" id="id_barang">
                </div>
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="text" class="form-control" name="harga" id="harga">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok" id="stok">
                </div>
                </div>
                <button nama="tambah" type="submit" class="btn btn-primary">Tambah Data</button>
        </action>
        </div>
    </div>
</div>