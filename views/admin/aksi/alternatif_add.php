<?php
// $id_oto = $myfun->get_id_otomatis('tb_data', 'id_data');
// $id_data = strip_tags($id_oto);
$nm_kelp   = strip_tags($_POST['nm_kelp']);
$almt_kelp    = strip_tags($_POST['almt_kelp']);
$notelp_kelp    = strip_tags($_POST['notelp_kelp']);

echo "<pre>";
print_r($_POST);die;

$error = [];
foreach ($_POST as $key => $value) {
  if (empty($value)) {
    $error[] = $key;
  }
}

if (count($error) == 0) {
  $insert = $pdo->Insert("tb_data", ["id_data", "judul", "link", "text"], [$id_data, $judul, $link, $text]);
  
  if ($insert == TRUE) {
    exit(json_encode(array('title' => 'Berhasil!', 'text' => 'Data Jenis Barang ditambah.', 'type' => 'success', 'button' => 'Ok!')));
  } else {
    exit(json_encode(array('title' => 'Berhasil!', 'text' => 'Data Jenis Barang ditambah.', 'type' => 'success', 'button' => 'Ok!')));
  }
} else {
  exit(json_encode(array('type' => 'validasi', 'error' => $error)));
}
