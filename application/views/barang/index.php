<div class="container">
<div class="row mt-2">
    <div class="colmd-5">
      <a href="" class="btn btn-primary">Tambah Data Barang</a>
    </div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Kode Barang</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach ($barang as $brg): ?>
      <td><?= $brg['id_barang']; ?></td>
      <td><?= $brg['nama_barang']; ?></td>
      <td><?= $brg['harga']; ?></td>
      <td><?= $brg['stok']; ?></td>
    </tr>
    <?php endforeach ?>

  </tbody>
</table>
</div>