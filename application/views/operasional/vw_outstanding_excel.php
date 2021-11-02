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
            <th rowspan="2" class="header">Tanggal</th>
            <th rowspan="2" class="header">Cabang</th>
            <th rowspan="2" class="header">Nasabah</th>
            <th rowspan="2" class="header">Alamat</th>
            <th rowspan="2" class="header">Pengunaan Kredit</th>
            <th rowspan="2" class="header">Plafond Kredit</th>
            <th rowspan="2" class="header">Coverage Penjaminan(%)</th>
            <th rowspan="2" class="header">Nilai Penjaminan</th>
            <th rowspan="2" class="header">Suku Bunga(Bulan)</th>
            <th rowspan="2" class="header">Jangka Waktu (Bulan)</th>
            <th colspan="2">Tanggal</th>
            <th rowspan="2" class="header">Tarif</th>
            <th rowspan="2" class="header">IJP/Premi</th>
            <th rowspan="2" class="header">Fee Base (10% x IJP)</th>
            <th rowspan="2" class="header">IJP - NET</th>
            <th rowspan="2" class="header">Nomor Sartifikat Penjamin</th>
            <th rowspan="2" class="header">Lama Kredit Jalan</th>
            <th rowspan="2" class="header">Taksasi Cicilan (Rp.)</th>
            <th rowspan="2" class="header">Taksasi O/s Kredit (Rp.)</th>
        </tr>
        <tr>
            <th class="header">Tanggal Relasi</th>
            <th class="header">Jatuh Tempo</th>
        </tr>
    </thead>
    <tbody>

        <?php
$no = 1;
foreach ($table as $u) {
	?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $u->DJPDtanggalakad ?></td>
            <td><?php echo $u->PPnama ?></td>
            <td><?php echo $u->TRJMnama ?></td>
            <td><?php echo $u->TRJMalamat ?></td>
            <td><?php echo $u->DJPDtujuankredit ?></td>
            <td><?php echo $u->DJPDplafondkredit ?></td>
            <td><?php echo $u->DJPDcoverage ?></td>
            <td><?php echo $u->DJPDnilaipenjaminan ?></td>
            <td></td>
            <td><?php echo $u->DJPDjangkawaktu ?></td>
            <td><?php echo $u->DJPDtanggalawal ?></td>
            <td><?php echo $u->DJPDtanggalakhir ?></td>
            <td><?php echo $u->DJPDrate ?></td>
            <td><?php echo $u->DJPDimbaljasa ?></td>
            <td></td>
            <td></td>
            <td><?php echo $u->DJPnoreg ?></td>
            <td></td>
            <td></td>
            <td></td>

            <!--                                                     <td>
                                                      <a href="<?=base_url('index.php/detailtable/index/' . $u->DJPid)?>"  class="fa fa-eye"></a>
                                                      <a href="<?=base_url('index.php/detailtable/index/' . $u->DJPid);?>" class="fa fa-eye"></a>


                                                    </td> -->
        </tr>
        <?php
$no++;
}?>

    </tbody>

</table>