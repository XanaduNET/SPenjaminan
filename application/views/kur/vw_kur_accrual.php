<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xlsx");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
  <table border="2px" class="table table-striped table-bordered first">                             
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