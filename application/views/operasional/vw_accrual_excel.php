<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
  <table border="2px" class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No.</th>
                                                <th rowspan="2">CABANG/CAPEM/KEDAI</th>
                                                <th rowspan="2">NO. SERTIFIKAT</th>
                                                <th rowspan="2">NAMA TERJAMIN</th>
                                                <th rowspan="2">COVERAGE</th>
                                                <th rowspan="2">PALFOND</th>
                                                <th rowspan="2">JML. JAMINAN</th>
                                                <th colspan="2">JK. WAKTU</th>
                                                <th rowspan="2">BLN</th>
                                                <th rowspan="2">TARIF</th>
                                                <th rowspan="2">TOTAL</th>
                                                <th rowspan="2">JANUARI 2021</th>
                                                <th rowspan="2">FEB-JANUARI 2022</th>
                                                <th rowspan="2">SISA</th>
                                        <tr>
                                            <th>AWAL</th>
                                            <th>AKHIR</th>
                                        </tr>
                                    
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
                                                    <td><?php echo $u->TRJMnama?></td>
                                                    <td><?php echo $u->DJPDcoverage ?></td>
                                                    <td><?php echo $u->DJPDplafondkredit ?></td>
                                                    <td><?php echo $u->DJPDnilaipenjaminan ?></td>
                                                    <td><?php echo $u->DJPDtanggalawal ?></td>
                                                    <td><?php echo $u->DJPDtanggalakhir ?></td>
                                                    <td><?php echo $u->DJPDjangkawaktu ?></td>
                                                    <td><?php echo $u->DJPDrate ?></td>
                                                    <td><?php echo $u->DJPDimbaljasa ?></td>
                                                     <td></td>
                                                      <td></td>
                                                       <td></td>
<!--                                                     <td>
                                                      <a href="<?= base_url('index.php/detailtable/index/'. $u->DJPid) ?>"  class="fa fa-eye"></a>
                                                      <a href="<?= base_url('index.php/detailtable/index/'. $u->DJPid);?>" class="fa fa-eye"></a>

                                                
                                                    </td> -->
                                              </tr>
                                             <?php 
                                             $no++;
                                         } ?>

                                        </tbody>
                                            
                                    </table>