<div class="container-fluid">

    <!-- Page Heading -->

<div class="card body">
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

            <div class="table-responsive">
                <br>
            <form action="<?php echo site_url('kur/index');?>" method = "post">
            <div class="col-lg ">
            <label class="col-sm-1 col-form-label">Tanggal Masuk</label>
            <input  type="date" class="" name="keyword" placeholder="">
            <input type="submit" value = "Cari" />
            </div>
            </form>
        <br>
         <?php if (empty($flag)) {
        ?>
        
            <?=form_open('kur/triggeredExportkuraccrual', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
            <input type="hidden" id="dataKur" name="dataKur" value="<?php echo htmlspecialchars(json_encode($dataKur)) ?>" />
            <input type="hidden" id="click" name="click" value='1' />
            <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT BULAN" /> 
            </form>

           </td>
                <?php  } else{}?>
    <br><br>
                   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                         <tr>
                            <th rowspan="2">No</th>
                            <th rowspan="2">Cabang Bank Riau Kepri</th>
                            <th rowspan="2">Nomor Penjaminan</th>
                            <th rowspan="2">Tanggal Terbit</th>
                            <th rowspan="2">Tanggal Selesai</th>
                            <th rowspan="2">Nama Terjamin</th>
                            <th rowspan="2">COVER (75%)</th>
                            <th rowspan="2">plafon</th>
                            <th rowspan="2">Nilai Penjaminan</th>
                            <th rowspan="2">Tanggal Akad</th>
                            <th rowspan="2">Tanggal Jatuh Tempo</th>
                            <th rowspan="2">JW(Bln)</th>
                            <th rowspan="2">JW(Thn)</th>
                            <th rowspan="2">Jumlah IJP</th>
                            <th rowspan="2">Bulan Pengakuan</th>
                            <th rowspan="2">IJP per Bulan</th>
                            <th colspan="12" ><center>2021</center></th>
                            <th colspan="12" ><center>2022</center></th>
                            <th colspan="12" ><center>2023</center></th>
                            <th colspan="12" ><center>2024</center></th>
                            <th colspan="12" ><center>2025</center></th>
                            <th colspan="12" ><center>2026</center></th>
                        </tr>
                        <tr>
                            <th scope="col">Januari</th>
                            <th scope="col">Februari</th>
                            <th scope="col">Maret</th>
                            <th scope="col">April</th>
                            <th scope="col">Mei</th>
                            <th scope="col">Juni</th>
                            <th scope="col">Juli</th>
                            <th scope="col">Agustus</th>
                            <th scope="col">September</th>
                            <th scope="col">Oktober</th>
                            <th scope="col">November</th>
                            <th scope="col">Desember</th>

                            <th scope="col">Januari</th>
                            <th scope="col">Februari</th>
                            <th scope="col">Maret</th>
                            <th scope="col">April</th>
                            <th scope="col">Mei</th>
                            <th scope="col">Juni</th>
                            <th scope="col">Juli</th>
                            <th scope="col">Agustus</th>
                            <th scope="col">September</th>
                            <th scope="col">Oktober</th>
                            <th scope="col">November</th>
                            <th scope="col">Desember</th>

                            <th scope="col">Januari</th>
                            <th scope="col">Februari</th>
                            <th scope="col">Maret</th>
                            <th scope="col">April</th>
                            <th scope="col">Mei</th>
                            <th scope="col">Juni</th>
                            <th scope="col">Juli</th>
                            <th scope="col">Agustus</th>
                            <th scope="col">September</th>
                            <th scope="col">Oktober</th>
                            <th scope="col">November</th>
                            <th scope="col">Desember</th>

                            <th scope="col">Januari</th>
                            <th scope="col">Februari</th>
                            <th scope="col">Maret</th>
                            <th scope="col">April</th>
                            <th scope="col">Mei</th>
                            <th scope="col">Juni</th>
                            <th scope="col">Juli</th>
                            <th scope="col">Agustus</th>
                            <th scope="col">September</th>
                            <th scope="col">Oktober</th>
                            <th scope="col">November</th>
                            <th scope="col">Desember</th>

                            <th scope="col">Januari</th>
                            <th scope="col">Februari</th>
                            <th scope="col">Maret</th>
                            <th scope="col">April</th>
                            <th scope="col">Mei</th>
                            <th scope="col">Juni</th>
                            <th scope="col">Juli</th>
                            <th scope="col">Agustus</th>
                            <th scope="col">September</th>
                            <th scope="col">Oktober</th>
                            <th scope="col">November</th>
                            <th scope="col">Desember</th>

                            <th scope="col">Januari</th>
                            <th scope="col">Februari</th>
                            <th scope="col">Maret</th>
                            <th scope="col">April</th>
                            <th scope="col">Mei</th>
                            <th scope="col">Juni</th>
                            <th scope="col">Juli</th>
                            <th scope="col">Agustus</th>
                            <th scope="col">September</th>
                            <th scope="col">Oktober</th>
                            <th scope="col">November</th>
                            <th scope="col">Desember</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 1;?>
                        <?php foreach ($dataKur as $p): ?>
                        <tr>
                            <td scope="row"><?=$i;?></td>
                            <td><?=$p['nama_cabang'];?></td>
                            <td><?=$p['nomor_penjaminan'];?></td>
                            <td><?=$p['tanggal_terbit'];?></td>
                            <td><?=$p['tanggal_selesai'];?></td>                            
                            <td><?=$p['nama'];?></td>
                            <td>75%</td>
                            <td><?="" . number_format($p['nilai_akad'], 0, ".", ".");?></td>
                            <td><?="" . number_format(((int) $p['nilai_akad']) * 0.75, 0, ".", ".");?></td>
                            <td><?=$p['tanggal_akad'];?></td>
                            <td><?=$p['tgl_jatuh_tempo'];?></td>
<td>
<?php

$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
echo $numBulan;?>
</td>

<td>
<?php
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
echo $numBulan;?>
    
</td>
                          <td>
    <?php
if ($p['nilai_akad'] <= 50000000) {
    $rate = 0.0175;
} else {
    $rate = 0.015;
}
$c = $p['nilai_akad'];
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);

$hasil1 = (int) (($numBulan / $numBulan) * $c);
$hasil2 = (int) ((($numBulan - 1) / $numBulan) * $c);
if ($hasil2 < 0) {
    $hasil7 = 0;
} else {
    $hasil7 = $hasil2;
}
$hasil3 = (int) ((($numBulan - 2) / $numBulan) * $c);
if ($hasil3 < 0) {
    $hasil8 = 0;
} else {
    $hasil8 = $hasil3;
}
$hasil4 = (int) ((($numBulan - 3) / $numBulan) * $c);
if ($hasil4 < 0) {
    $hasil9 = 0;
} else {
    $hasil9 = $hasil4;
}
$hasil5 = (int) ((($numBulan - 4) / $numBulan) * $c);
if ($hasil5 < 0) {
    $hasil6 = 0;
} else {
    $hasil6 = $hasil5;
}
$ijp = (int) ($hasil1 + $hasil7 + $hasil8 + $hasil9 + $hasil6) * $rate;
echo "" . number_format($ijp, 2, ".", ".");
?>
</td>

<td>
    <?php 
$a = $ijp;
$b = 20;
$timeStart = strtotime($a);
$timeEnd = strtotime($b);

$bulan = (int) (($a * $b ) / 100);
echo "" . number_format($bulan, 2, ".", ".");
?>  
</td>

<td>   
    <?php
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$ijp ;
$bulan ;

$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);

$IJPbulan = (int) (($ijp - $bulan) / ($numBulan - 1));
echo "" . number_format($IJPbulan, 2, ".", ".");

?>
</td>

<td>
    
<?php


$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$d = $p['tanggal_terbit'];
$e = $p['tanggal_selesai'];
$c = $IJPbulan;
$ijp ;
$bulan;

$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$JKW = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
// hitung selisih bulan
$JKW += date("m", $timeEnd) - date("m", $timeStart);    

    for ($i =2; $i < $JKW; $i++)
    {  
 echo "<td>";   


         $bln_a= date("m",strtotime($d));
               //echo '<td>'.' </td>';
    if ($bln_a== $i) {

              echo ''.number_format($bulan, 2, ".", ".");
        
            }
        
         
       $bln_batas = date("m",strtotime($d));
           //echo ' ' . strtoupper($JKW[$i]) .  ' ';
           // echo '<td>'.' </td>';
    if ($bln_batas == $i) {

           for ($i =2; $i < $JKW; $i++)
                
              echo '<td>'.number_format($c, 2, ".", ".") .'</td>';
      
            } 
             
echo "</td>";
        }
?>
</td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>

                        </tr>
                        <?php $i++;?>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>

<div><?=validation_errors()?></div>
<div><?=$this->session->flashdata('error')?></div>
<?=form_open('kur', ['class' => 'form-horizontal'])?>
  <form role="form" class="form-horizontal">
    <div class="col-xl-4 col-md-7 mb-5">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-success text-uppercase mb-1">
                                        <label> Tahun </label> <br>
                                   <!--   <input name="Tahunchecked[]" type="checkbox" value="semua" id="semua"
                                            class="checkedtahun" checked> Select All -->
                                        <br>

                                        <input name="Tahunchecked[]" type="checkbox" value="2015" id="01"
                                            class="checkedtahun"> 2015
                                        <br>
                                        <input name="Tahunchecked[]" type="checkbox" value="2016" id="02"
                                            class="checkedtahun"> 2016
                                        <br>
                                        <input name="Tahunchecked[]" type="checkbox" value="2017" id="03"
                                            class="checkedtahun"> 2017
                                        <br>
                                        <input name="Tahunchecked[]" type="checkbox" value="2018" id="04"
                                            class="checkedtahun"> 2018 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2019" id="05"
                                            class="checkedtahun"> 2019 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2020" id="06"
                                            class="checkedtahun"> 2020 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2021" id="07"
                                            class="checkedtahun"> 2021 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2022" id="08"
                                            class="checkedtahun"> 2022 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2023" id="09"
                                            class="checkedtahun"> 2023 <br>
                                    </div>
                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
         <div class="col-xl-4 col-md-7 mb-5">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <label> Bulan </label>
                                        <br>

                                <!--         <input name="Monthchecked" type="checkbox" value="semua" id="semua"
                                            class="Monthchecked" checked> Select All -->
                                        <br>

                                        <input name="Monthchecked[]" type="checkbox" value="01" id="01"
                                            class="checkedMonth"> Januari
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="02" id="02"
                                            class="checkedMonth"> Februari
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="03" id="03"
                                            class="checkedMonth"> Maret
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="04" id="04"
                                            class="checkedMonth"> April
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="05" id="05"
                                            class="checkedMonth"> Mei
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="06" id="06"
                                            class="checkedMonth"> Juni
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="07" id="07"
                                            class="checkedMonth"> Juli
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="08" id="08"
                                            class="checkedMonth"> Agustus
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="09" id="09"
                                            class="checkedMonth"> September
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="10" id="10"
                                            class="checkedMonth"> Oktober
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="11" id="11"
                                            class="checkedMonth"> November
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="12" id="12"
                                            class="checkedMonth"> Desember
                                        <br>
                                    </div>

                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    
                 <input name="Kirim" type="submit" class="btn btn-primary" />
                </div>
        </form>
</div>
</div>