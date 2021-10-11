<div class="container">
    <div class="row mt-1">
        <div class="colmd-3">
            <?php if (validation_errors() ):?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
                </div>
            <?php endif; ?>
            <form action="" method="post">
                <input type="hidden" name="id_barang" id="nama_barang" value="<?= $barang['id_barang']; ?>">
                <div class="mb-3">
                <div class="mb-3">
                    <label for="nama_barang" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="<?= $barang['nama_barang']; ?>">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga Barang</label>
                    <input type="text" class="form-control" name="harga" id="harga" value="<?= $barang['harga']; ?>">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="text" class="form-control" name="stok" id="stok" value="<?= $barang['stok']; ?>">
                </div>
                </div>
                <button nama="ubah" type="submit" class="btn btn-primary">Ubah Data</button>
        </action>
        </div>
    </div>
</div>