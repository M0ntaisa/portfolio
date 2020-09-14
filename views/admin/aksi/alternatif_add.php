<?php
$kode = $myfun->get_kode_otomatis('tb_alternatif', 'id_alternatif', 'ALT');
$kd_alternatif = strip_tags($kode);
$nm_kelp   = strip_tags($_POST['nm_kelp']);
$almt_kelp    = strip_tags($_POST['almt_kelp']);
$notelp_kelp    = strip_tags($_POST['notelp_kelp']);
$kd_sub_krt0    = strip_tags($_POST['status_kelp']);
$kd_krt0    = "KRT001";
if ($_FILES['sertifi_kelp']['size'] == 0) {
  $kd_sub_krt1 = "SUB005";
} else {
  $kd_sub_krt1 = "SUB006";
}
$kd_krt1    = "KRT002";
$kd_sub_krt2    = strip_tags($_POST['status_bantuan']);
$kd_krt2    = "KRT003";
$kd_sub_krt3    = strip_tags($_POST['sistem_pemelihara']);
$kd_krt3    = "KRT004";
$kd_sub_krt4    = strip_tags($_POST['plyn_kesehatan']);
$kd_krt4    = "KRT005";

$kd_krt = array(0 => $kd_krt0, $kd_krt1, $kd_krt2, $kd_krt3, $kd_krt4);
$kd_sub_krt = array(0 => $kd_sub_krt0, $kd_sub_krt1, $kd_sub_krt2, $kd_sub_krt3, $kd_sub_krt4);

$error = [];
foreach ($_POST as $key => $value) {
  if (empty($value)) {
    $error[] = $key;
  }
}

if (count($error) == 0) {
  $insert1 = $pdo->Insert("tb_alternatif", ["kd_alternatif", "nama", "alamat", "telepon"], [$kd_alternatif, $nm_kelp, $almt_kelp, $notelp_kelp]);
  
  if ($insert1 == 1) {

    for ($i = 0; $i < 5; $i++) {
      $rows[] = [$kd_alternatif, $kd_krt[$i], $kd_sub_krt[$i]];
    }

    $insert2 = $pdo->batchInsert("tb_evaluasi", $rows, ["kd_alternatif", "kd_kriteria", "kd_subkriteria"]);


    if ($insert2 == 1) {
      exit(json_encode(array('title' => 'Berhasil!', 'text' => 'Data Contoh.', 'type' => 'success', 'button' => 'Ok!')));
    } else {
      exit(json_encode(array('title' => 'Gagal!', 'text' => 'Data Contoh.', 'type' => 'error', 'button' => 'Ok!')));
    }
  } else {
    exit(json_encode(array('title' => 'Gagal!', 'text' => 'Data Contoh.', 'type' => 'error', 'button' => 'Ok!')));
  }
} else {
  exit(json_encode(array('type' => 'validasi', 'error' => $error)));
}
