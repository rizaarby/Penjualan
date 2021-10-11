<div class="container">
    <div class="row-mt-1">
        <div class="col-md-3">
        <div class="card">
            <h5 class="card-header">Detail Barang</h5>
            <div class="card-body">
                <h5 class="card-title"><?= isset($barang['nama_barang']); ?></h5>
                <p class="card-text"><?= isset($barang['harga']); ?></p>
                <p class="card-text"><?= isset($barang['stok']); ?></p>
                <a href="<?= base_url(); ?>barang" class="btn btn-primary">Kembali</a>
            </div>
            </div>
        </div>
    </div>
</div>