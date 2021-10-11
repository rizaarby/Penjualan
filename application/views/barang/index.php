<div class="container">
  <?php if ($this->session->flashdata('flash')): ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Data Barang,</strong> <?= $this->session->flashdata('flash'); ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  <?php endif ; ?>

<div class="row mt-2">
    <div class="colmd-5">
      <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Data Barang</a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Stok</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($barang as $brg): ?>
      <td><?= $brg['id_barang']; ?></td>
      <td><?= $brg['nama_barang']; ?></td>
      <td><?= $brg['harga']; ?></td>
      <td><?= $brg['stok']; ?></td>
      <td><a href="<?= base_url(); ?>barang/detail/ <?=$brg['id_barang'];?>" class="btn btn-primary">Detail</a>
      <a href="<?= base_url(); ?>barang/ubah/ <?=$brg['id_barang'];?>" class="btn btn-success">Ubah</a>
      <a href="<?= base_url(); ?>barang/hapus/ <?=$brg['id_barang'];?>" class="btn btn-danger" onclick="return confirm ('Apakah yakin data akan dihapus?');">Hapus</a></td>
    </tr>
    <?php endforeach ?>

  </tbody>
</table>
</div>