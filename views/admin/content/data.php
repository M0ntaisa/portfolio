<a href="data_add">Tambah Data</a>

<table border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Judul</th>
      <th>Link</th>
      <th>Text</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>    
    <?php
    $query  = $pdo->GetAll('tb_data', 'judul');
    $jumlah = $query->rowCount();
    $no = 1;
    if ($jumlah > 0) { while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><?= $row->judul; ?></td>
        <td><?= $row->link; ?></td>
        <td><?= $row->text; ?></td>
        <td>
          <a href="data_ubah&id=<?= $row->id_data ?>">Ubah</a>&nbsp;
          <a href="data_hapus&id=<?= $row->id_data ?>">Hapus</a>
        </td>
      </tr>
    <?php } } else { ?>
    <tr>
      <td colspan="5">Tidak Ada Data Dalam Tabel Ini !</td>
    </tr>
    <?php } ?>
  </tbody>
</table>
