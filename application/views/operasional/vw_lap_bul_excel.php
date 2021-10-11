<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
  <table border="2px" class="table table-striped table-bordered first"> 
                                        <thead>
                                            <tr>
                                                <th rowspan="2" class="header">No.</th>
                                                <th rowspan="2" class="header">CABANG/CAPEM/KEDAI</th>
                                                <th rowspan="2" class="header">No. SERTIFIKAT</th>
                                                <th rowspan="2" class="header">Tgl SERTIFIKAT</th>
                                                <th rowspan="2"class="header">JLH TERJAMIN</th>
                                                <th rowspan="2"class="header">NAMA TERJAMIN</th>
                                                <th rowspan="2"class="header">COVERAGE</th>
                                                <th rowspan="2"class="header">PLAFOND</th>
                                                <th rowspan="2"class="header">JML JAMINAN</th>
                                                <th colspan="2">JK. WAKTU</th>
                                                <th rowspan="2"class="header">BULAN</th>
                                                <th rowspan="2"class="header">TARIF</th>
                                                <th colspan="3" class="header">BIAYA PENJAMINAN</th>
                                                <th  rowspan="2" class="header">TOTAL</th>
                                                <th  rowspan="2" class="header">FEE BANK</th>
                                                <th  rowspan="2" class="header">TOTAL PENDAPATAN</th>
                                                <th  rowspan="2" class="header">IJP DIREKENING</th>
                                                <th  rowspan="2" class="header">SELISIH</th>
                                                <th  rowspan="2" class="header">KETERANGAN</th>
                                            </tr>
                                                <tr>
                                            <th>AWAL</th>
                                            <th>AKHIR</th>
                                            
                                         
                                                <th class="header">IJP</th>
                                                <th class="header">ADM</th>
                                                <th class="header">MATERAI</th>
                                           
                                               </tr>
                                                   
                                      
                                                    
                                              
                                        
                                          
                                                 
                                          
                                             
                                                
                                              <!--   <th>Nama Terjamin</th>
                                                <th>Alamat Terjamin</th>
                                                <th>Katagori Pekerjaan</th>
                                                <th>Usia Terjamin</th>
                                                <th>No. Akad</th>
                                                <th>Tgl Akad</th>
                                                <th>Jangka Waktu</th>
                                                <th>Tgl Awal</th>
                                                <th>Tgl AKhir</th>
                                                <th>Plafond Kredit</th>
                                                <th>Nilai Penjaminan</th>
                                                <th>Coverage</th>
                                                <th>Rate</th>
                                                <th>Imbal Jasa</th>
                                                <th>Tujuan Kredit</th>
                                                <th>Jenis Agunan</th>
                                                <th>Cara Pengikat</th>
                                                <th>Nilai Transaksi</th>
                                                <th>Sektor Usaha</th>
                                                <th>detail</th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <?php 
                                            $no = 1;
                                            foreach($table as $u){ 
                                                ?>
                                              <tr>
                                                    <td><?php echo $no ?></td>
                                                    <td><?php echo $u->PPnama ?></td>
                                                    <td><?php echo $u->DJPnoreg ?></td>
                                                    <td><?php echo $u->DJPtanggaldeklarasi?></td>
                                                    <td><?php echo $u->DJPjumlahpk ?></td>
                                                    <td><?php echo $u->TRJMnama ?></td>
                                                    <td><?php echo $u->DJPDcoverage ?></td>
                                                    <td><?php echo $u->DJPDplafondkredit ?></td>
                                                    <td><?php echo $u->DJPnilaipenjaminan ?></td>
                                                    <td><?php echo $u->DJPDtanggalawal ?></td>
                                                    <td><?php echo $u->DJPDtanggalakhir ?></td>
                                                    <td><?php echo $u->DJPDjangkawaktu  ?></td>
                                                    <td><?php echo $u->DJPDrate  ?></td>
                                                    <td><?php echo $u->DJPjumlahimbaljasa ?></td>
                                                    <td><?php echo $u->DJPfeeadmin ?></td>
                                                    <td><?php echo $u->DJPfeematerai ?></td>
                                                    <td></td>
                                                    <td><?php echo $u->DJPfeebank?></td>
                                                     <td><?php echo $u->DJPjumlahbiaya?></td>
                                                      <td></td>
                                                       <td></td>
                                                        <td></td>
                                                  

                                             <?php 
                                             $no++;
                                         } ?>

                                        </tbody>
                                            
                                    </table>