<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
  <table border="2px" class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th class="header">No.</th>
                                                <th class="header">Tgl Masuk</th>
                                                <th class="header">Tgl Berkas Lengkap</th>
                                                <th class="header">Tanggal Bayar Klaim</th>
                                                <th class="header">Cabang/Capem/Kedai</th>
                                                <th class="header">Produk</th>
                                                <th class="header">Sertifikat</th>
                                                <th class="header">Terjamin</th>
                                                <th class="header">Plafond</th>
                                                <th class="header">Nilai Jaminan</th>
                                                <th class="header">Coverage</th>
                                                <th> Nominal Klaim</th>
                                                <th class="header">Subrogasi (RECOVERY)</th>
                                                <th class="header">Agunan</th>
                                                <th class="header">Taksasi Agunan</th>
                                                <th class="header">JW Kredit(bln)</th>
                                                <th class="header">Mulai</th>
                                                <th class="header">Selesai</th>
                                                <th class="header">Sebab Macet</th>
                                                <th class="header">Sektor</th>
                                                <th>Alamat</th>
                                                <th>COVER REAS</th>
                                                <th>Klaim Dibayar Reas</th>
                                                <th>Broker Reas</th>
                                                <th>Status</th>
                                                
                                            </tr>
                                          
                                        </thead>
                                        <tbody>

                                        <?php
                                                $no = 1;
                                                foreach ($table as $u) {
                                                    ?>
                                            <tr>

                                                <td><?php echo $no ?></td>
                                                <td><?php echo $u->tglmasuk ?></td>
                                                <td><?php echo $u->tglberkas ?></td>
                                                <td><?php echo $u->tglklaimbayar ?></td>
                                                <td><?php echo $u->PPnama ?></td>
                                                <td><?php echo $u->produk ?></td>
                                                <td><?php echo $u->sertifikat ?></td>
                                                <td><?php echo $u->nmterjamin ?></td>
                                                <td><?php echo $u->plafond ?></td>
                                                <td><?php echo $u->nilai_jaminan ?></td>
                                                <td><?php echo $u->coverage ?></td>
                                                <td><?php echo $u->nominal_klaim ?></td>
                                                <td><?php echo $u->subrogasi ?></td>
                                                <td><?php echo $u->agunan ?></td>
                                                <td><?php echo $u->taksasi_agunan ?></td>
                                                <td><?php echo $u->Jkwaktu ?></td>
                                                <td><?php echo $u->tglawal ?></td>
                                                <td><?php echo $u->tglakhir ?></td>
                                                <td><?php echo $u->macet ?></td>
                                                <td><?php echo $u->sektor ?></td>
                                                <td><?php echo $u->PPalamat ?></td>
                                                <td><?php echo $u->cover_reas ?></td>
                                                <td><?php echo $u->klaim_reas ?></td>
                                                <td><?php echo $u->broker ?></td>
                                                <td>
                                                <?php
                                              if ($u->status==0){
                                                echo "Pending";
                                              }else{
                                                echo "Sudah Cetak";
                                              }
                                               ?>  
                                                </td>

                                              

                                            </tr>
                                            <?php
                                                $no++;
                                                }?>

                                        </tbody>
                                            
                                    </table>