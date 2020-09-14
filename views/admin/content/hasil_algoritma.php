<!-- [ navigation menu ] end -->
<div class="pcoded-content">
               <!-- [ breadcrumb ] start -->
               <div class="page-header">
                   <div class="page-block">
                       <div class="row align-items-center">
                           <div class="col-md-8">
                               <div class="page-header-title">
                                   <h4 class="m-b-10">Algoritma</h4>
                               </div>
                               <ul class="breadcrumb">
                                   <li class="breadcrumb-item">
                                       <a href="index.html">
                                           <i class="feather icon-layers"></i>
                                       </a>
                                   </li>
                                   <li class="breadcrumb-item">
                                       <a href="#!">Proses Algoritma</a>
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
                                               <!-- <button class="btn waves-effect waves-light btn-sm btn-outline-primary">
                                                   <i class="icofont icofont-puzzle"></i>Proses Ulang</button> -->
                                                   <a href="hasil_algoritma" type="button" class="btn waves-effect waves-light btn-sm btn-outline-primary"><i class="icofont icofont-puzzle"></i>Proses Ulang</button></a>
                                            </div>
                                            <div class="card-block">
                                                <div class="dt-responsive table-responsive">
                                                    <!-- <table id="simpletable"
                                                        class="table table-striped table-bordered nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th>No</th>
                                                                <th>Data</th>
                                                                <th>Data</th>
                                                                <th>Aksi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            </tr>
                                                        </tbody>
                                                    </table> -->
                                                    <?php
                                                    // SCRIPT UNTUK MENGAMBIL DATA PERBANDINGAN BERPASANGAN X DARI TABEL tb_evaluasi 
                                                        //-- query untuk mengambil data jumlah kriteria 'n'

                                                        $sql="SELECT COUNT(*) AS jumlah
                                                                FROM tb_kriteria";
                                                                
                                                        $query  = $pdo->Query($sql);
                                                        $row = $query->fetch(PDO::FETCH_OBJ);
                                                        
                                                        //--- inisialisasi jumlah kriteria 'n'
                                                        $n=$row->jumlah;

                                                        //-- query untuk mengambil data Perbandingan Berpasangan X
                                                        $sql="SELECT * 
                                                                FROM tb_evaluasi 
                                                                ORDER BY kd_alternatif,kd_kriteria";
                                                        // $result=$db->query($sql);
                                                        $query  = $pdo->Query($sql);
                                                        $X=array();
                                                        $alternatif='';
                                                        //-- inisialisasi jumlah alternatif 'm'
                                                        $m=0;
                                                        while($row = $query->fetch(PDO::FETCH_NUM)){
                                                            if($row[1]!=$alternatif){
                                                                $X[$row[1]]=array();
                                                                $alternatif=$row[1];
                                                                ++$m;
                                                            }
                                                            $X[$row[1]][$row[2]]=$row[3];
                                                        }
                                                        echo "<pre>";
                                                        print_r($X);

                                                    // END SCRIPT PERBANDINGAN BERPASANGAN X
                                                    
                                                    // SCRIPT PERBANDINGAN BERPASANGAN TERNORMALISASI (R)
                                                    
                                                        //-- menentukan nilai rata-rata kuadrat per-kriteria
                                                        $x_rata=array();
                                                        foreach($X as $i=>$X){
                                                          foreach($X as $j=>$value){
                                                            $x_rata[$j]=(isset($x_rata[$j])?$x_rata[$j]:0)+pow($value,2);
                                                          }
                                                        }
                                                        for($j=1;$j<=$n;$j++){
                                                          $x_rata[$j]=sqrt($x_rata[$j]);
                                                        }
                                                        // $x_rata=array();
                                                        // foreach($X as $i=>$x){
                                                        //     foreach($x as $j=>$value){
                                                        //         $x_rata[$j]=(isset($x_rata[$j])?$x_rata[$j]:0)+pow($value,2);
                                                        //     }
                                                        // }
                                                        // print_r($x_rata);
                                                        // for($j=1;$j<=$n;$j++){
                                                        //     $x_rata[$j]=sqrt($x_rata[$j]);
                                                        // }
                                                        // //-- menormalisasi matriks X menjadi matriks R
                                                        $R=array();
                                                        $alternatif='';
                                                        foreach($X as $i=>$x){
                                                            if($alternatif!=$i){
                                                            $alternatif=$i;
                                                            $R[$i]=array();
                                                            }
                                                            foreach($x as $j=>$value){
                                                            $R[$i][$j]=$value/$x_rata[$j];
                                                            }
                                                        }
                                                        // $R=array();
                                                        // $alternative='';
                                                        // foreach($X as $i=>$x){
                                                        // if($alternative!=$i){
                                                        //     $alternative=$i;
                                                        //     $R[$i]=array();
                                                        // }
                                                        // foreach($x as $j=>$value){
                                                        //     $R[$i][$j]=$value/$x_rata[$j];
                                                        // }
                                                        // }

                                                    // END SCRIPT PERBANDINGAN TERNORMALISASI

                                                    ?>
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