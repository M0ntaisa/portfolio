           <!-- [ navigation menu ] end -->
           <div class="pcoded-content">
               <!-- [ breadcrumb ] start -->
               <div class="page-header">
                   <div class="page-block">
                       <div class="row align-items-center">
                           <div class="col-md-8">
                               <div class="page-header-title">
                                   <h4 class="m-b-10">Data Kelompok Ternak</h4>
                               </div>
                               <ul class="breadcrumb">
                                   <li class="breadcrumb-item">
                                       <a href="index.html">
                                           <i class="feather icon-layers"></i>
                                       </a>
                                   </li>
                                   <li class="breadcrumb-item">
                                       <a href="#!">Kelompok Ternak</a>
                                   </li>
                               </ul>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- [ breadcrumb ] end -->
               <div class="pcoded-inner-content">
                   <!-- Main-body start -->
                   <div class="main-body">
                       <div class="page-wrapper">
                           <!-- Page-body start -->
                           <div class="page-body">
                               <div class="row">
                                   <div class="col-sm-12">
                                       <!-- Zero config.table start -->
                                       <div class="card">
                                           <div class="card-header">
                                               <button class="btn waves-effect waves-light btn-sm btn-outline-primary"
                                                   type="button" class="btn btn-primary waves-effect"
                                                   data-toggle="modal" data-target="#large-Modal"><i
                                                       class="icofont icofont-ui-add"></i>Tambah Data Kelompok
                                                   Ternak</button>
                                           </div>
                                           <div class="card-block">
                                               <div class="dt-responsive table-responsive">
                                                   <table id="simpletable"
                                                       class="table table-striped table-bordered nowrap">
                                                       <thead>
                                                           <tr>
                                                               <th>No</th>
                                                               <th>Kode Kelompok</th>
                                                               <th>Nama Kelompok</th>
                                                               <th>Aksi</th>
                                                           </tr>
                                                       </thead>
                                                       <tbody>
                                                            <?php
                                                                $query  = $pdo->getAll('tb_alternatif', 'id_alternatif');
                                                                $jumlah = $query->rowCount();
                                                                $no = 1;
                                                                if ($jumlah > 0) {
                                                                    while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                                                <tr>
                                                                    <td width="10"><?= $no++; ?></td>
                                                                    <td><?= $row->kd_alternatif; ?></td>
                                                                    <td><?= $row->nama; ?></td>
                                                                    <td width="15">
                                                                        <button type="button" class="btn btn-warning btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#large-Modal">Ubah</button>&nbsp;
                                                                            <button type="button" class="btn btn-info btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#large-Modal">Detail</button>&nbsp;
                                                                        <button type="button" class="btn btn-danger btn-sm"
                                                                            data-toggle="modal"
                                                                            data-target="#large-Modal">Hapus</button>&nbsp;
                                                                    </td>
                                                                </tr>
                                                                <?php } ?>
                                                            <?php } ?>
                                                       </tbody>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <!-- Page-body end -->
                       </div>
                   </div>
                   <!-- Main-body end -->
                   <div id="styleSelector">

                   </div>
               </div>
           </div>
           <!-- [ style Customizer ] start -->
           <div id="styleSelector">
           </div>
           <!-- [ style Customizer ] end -->
           </div>
           </div>
           </div>
           </div>
           <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
               <div class="modal-dialog modal-lg" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title">Tambah Data Kelompok</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                           </button>
                       </div>
                       <form action="aksi/?aksi=alternatif_add" id="form-add">
                           <div class="modal-body">
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Nama Kelompok</label>
                                   <div class="col-sm-8">
                                       <input type="text" class="form-control" name="nm_kelp" id="nm_kelp">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Alamat Kelompok</label>
                                   <div class="col-sm-8">
                                       <input type="text" class="form-control" name="almt_kelp" id="almt_kelp">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">No Telepon Kelompok</label>
                                   <div class="col-sm-8">
                                       <input type="number" class="form-control" name="notelp_kelp" id="notelp_kelp">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Status Kelompok</label>
                                   <div class="col-sm-4">
                                       <select name="status_kelp" class="form-control" id="status_kelp">
                                           <option value="">Pilih Status</option>
                                           <!-- get sub kriteria -->
                                           <?php
                                                $query  = $pdo->getWhere('tb_subkriteria', 'kd_kriteria', 'KRT001');
                                                $jumlah = $query->rowCount();
                                                $no = 1;
                                                if ($jumlah > 0) {
                                                    while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                                    <!-- <input type="hidden"  name="kd_k_s_kelp" value="<?= $row->kd_kriteria ?>"> -->
                                                    <option value="<?= $row->kd_subkriteria ?>"><?= $row->nm_subkriteria; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Sertifikat Ternak</label>
                                   <div class="col-sm-8">
                                       <input type="file" class="form-control" name="sertifi_kelp" id="sertifi_kelp">
                                       <!-- <input type="hidden"  name="kd_k_sertifikat" value="KRT002"> -->
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Status Bantuan</label>
                                   <div class="col-sm-4">
                                       <select name="status_bantuan" class="form-control" id="status_bantuan">
                                           <option value="">Pilih Status Bantuan</option>
                                           <!-- get sub kriteria -->
                                           <?php
                                                $query  = $pdo->getWhere('tb_subkriteria', 'kd_kriteria', 'KRT003');
                                                $jumlah = $query->rowCount();
                                                $no = 1;
                                                if ($jumlah > 0) {
                                                    while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                                    <!-- <input type="hidden"  name="kd_k_s_bantuan" value="<?= $row->kd_kriteria ?>"> -->
                                                    <option value="<?= $row->kd_subkriteria ?>"><?= $row->nm_subkriteria; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Sistem Pemeliharaan</label>
                                   <div class="col-sm-4">
                                       <select name="sistem_pemelihara" class="form-control" id="sistem_pemelihara">
                                           <option value="">Pilih Sistem Pemeliharaan</option>
                                           <!-- get sub kriteria -->
                                           <?php
                                                $query  = $pdo->getWhere('tb_subkriteria', 'kd_kriteria', 'KRT004');
                                                $jumlah = $query->rowCount();
                                                $no = 1;
                                                if ($jumlah > 0) {
                                                    while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                                    <!-- <input type="hidden"  name="kd_k_s_pemelihara" value="<?= $row->kd_kriteria ?>"> -->
                                                    <option value="<?= $row->kd_subkriteria ?>"><?= $row->nm_subkriteria; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                       </select>
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <label class="col-sm-3 col-form-label">Pelayanan Kesehatan</label>
                                   <div class="col-sm-4">
                                       <select name="plyn_kesehatan" class="form-control" id="plyn_kesehatan">
                                           <option value="">Pilih Pelayanan Kesehatan</option>
                                           <!-- get sub kriteria -->
                                           <?php
                                                $query  = $pdo->getWhere('tb_subkriteria', 'kd_kriteria', 'KRT005');
                                                $jumlah = $query->rowCount();
                                                $no = 1;
                                                if ($jumlah > 0) {
                                                    while ($row = $query->fetch(PDO::FETCH_OBJ)) { ?>
                                                    <!-- <input type="hidden"  name="kd_k_pelayanan" value="<?= $row->kd_kriteria ?>"> -->
                                                    <option value="<?= $row->kd_subkriteria ?>"><?= $row->nm_subkriteria; ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                       </select>
                                   </div>
                               </div>

                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-default btn-sm waves-effect "
                                   data-dismiss="modal">Keluar</button>
                               <button type="submit" name="add" id="add"
                                   class="btn btn-primary btn-sm waves-effect waves-light ">Simpan
                                   Perubahan</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>