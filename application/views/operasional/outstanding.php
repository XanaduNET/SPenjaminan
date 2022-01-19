<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div><?=validation_errors()?></div>

            <?=form_open('Outstanding/triggeredExport', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <input type="hidden" id="table" name="table"
                    value="<?php echo htmlspecialchars(json_encode($table)) ?>" />
                <input type="hidden" id="click" name="click" value='1' />
                <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />
                <br>
                <br>
                <br>
            </form>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-dark">
                                    <input style="width: 100%;" type="hidden" name="DJPid" class="form-control"
                                        value="<?php echo $this->uri->segment(2) ?> " readonly>
                                    <tr>
                                        <th rowspan="2">No.</th>
                                        <th rowspan="2">Tanggal</th>
                                        <th rowspan="2">Cabang</th>
                                        <th rowspan="2">Nasabah</th>
                                        <th rowspan="2">Alamat</th>
                                        <th rowspan="2">Pengunaan Kredit</th>
                                        <th rowspan="2">Plafond Kredit</th>
                                        <th rowspan="2">Coverage Penjaminan(%)</th>
                                        <th rowspan="2">Nilai Penjaminan</th>
                                        <th rowspan="2">Suku Bunga(Bulan)</th>
                                        <th rowspan="2">Jangka Waktu (Bulan)</th>
                                        <th colspan="2" rowspan="2">
                                            <center>Tanggal </center>
                                        </th>
                                        <th rowspan="2">Tarif</th>
                                        <th rowspan="2">IJP/Premi</th>
                                        <th rowspan="2">Fee Base</th>
                                        <th rowspan="2">IJP - NET</th>
                                        <th rowspan="2">Nomor Sartifikat Penjamin</th>
                                        <th rowspan="2">Lama Kredit Jalan</th>
                                        <th rowspan="2">Taksasi Cicilan (Rp.)</th>
                                        <th rowspan="2">Taksasi O/s Kredit (Rp.)</th>
                                    </tr>
                                </thead>
                                <tbody class="text-dark">
                                    <?php
?>
                                    <tr>
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
                                        <td></td>
                                        <td><b>Realisasi</b></td>
                                        <td><b>Jatuh&nbspTempo</b></td>
                                        <td></td>
                                        <td><b>Rp</b></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <?php
$no = 1;
foreach ($table as $u) {
    ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $u->DJPDtanggalakad ?></td>
                                        <td><?php echo $u->PPnama ?></td>
                                        <td><?php echo $u->TRJMnama ?></td>
                                        <td><?php echo " " ?></td>
                                        <td><?php echo " " ?></td>
                                        <td><?php echo number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                        <td><?php echo $u->DJPDcoverage ?></td>
                                        <td><?php echo number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td> <?php echo " " ?> </td>
                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                        <td><?php echo $u->DJPDrate . "%" ?></td>
                                        <td><?php echo number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) - ((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))))), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo $u->DJPnoreg ?></td>
                                        <td><?php
$date1 = $u->DJPDtanggalakad;
    $date2 = date('Y-m-d');

    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);

    $day1 = date('d', $ts1);
    $day2 = date('d', $ts2);

    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);

    echo $diff?></td>
                                        <td><?php echo "IDR&nbsp" . number_format($taksasi = ($u->DJPDnilaipenjaminan / $u->DJPDjangkawaktu * $diff), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "IDR&nbsp" . number_format($u->DJPDnilaipenjaminan - $taksasi, 0, ".", ".") ?>
                                        </td>
                                    </tr>
                                    <?php
$no++;
}?>
                                </tbody>
                            </table>
                            </div>

</div>


<?=form_open('Outstanding', ['class' => 'form-horizontal'])?>
<form role="form" class="form-horizontal">
<div class="row">
<div class="col-xl-4 mb-30">
<div class="card-box height-100-p pd-20">
<div class="font-weight-bold text-uppercase mb-1">
<label> Data Grup Penerima Penjaminan </label>
<br>
<input name="semuaGPP" type="checkbox" id="Semua" class="semuaGPP" value="semua"<?php echo set_checkbox('semuaGPP', 'semua'); ?>>
Select All <br>
</div>
            <?php
foreach ($gpp as $u) {
    ?>
            <input name="GPPchecked[]" type="checkbox"
                value=<?php echo $u->GPPid ?> id=<?php echo $u->GPPid ?>
                class="checkedGPP"
                <?php echo set_checkbox('GPPchecked', '' . $u->GPPid . ''); ?> />
            <?php echo $u->GPPnama ?>
            <br>
            <?php }?>
        </div>
    </div>
    <div class="col-xl-4 mb-30">
    <div class="card-box height-100-p pd-20">
    <div class="font-weight-bold text-uppercase mb-1">
            <label> Data OPK </label>
            <br>
            <input name="semuaOPK" type="checkbox" id="Semua"
                class="semuaOPK" value="semua"
                <?php echo set_checkbox('semuaOPK', 'semua'); ?>>
            Select All
            <br>
</div>
            <?php
foreach ($opk as $u) {
    ?>
            <input name="OPKchecked[]" type="checkbox"
                value=<?php echo $u->OPKid ?> id=<?php echo $u->OPKid ?>
                class="checkedOPK"
                <?php echo set_checkbox('OPKchecked', '' . $u->OPKid . ''); ?> />
            <?php echo $u->OPKjenis ?>
            <br>
            <?php }?>
        </div>
    </div>

    <div class="col-xl-4 mb-30">
<div class="card-box height-100-p pd-20">
<div class="font-weight-bold text-uppercase mb-1">
            <label> Bulan Periode </label>
            <br>
</div>
            <select id="Month" name="Month">
                <option selected="selected" value="00">Semua Bulan</option>
                <option value=01 <?php echo set_select('Month', '01'); ?>>
                    Januari
                </option>
                <option value=02 <?php echo set_select('Month', '02'); ?>>
                    Februari
                </option>
                <option value=03 <?php echo set_select('Month', '03'); ?>>
                    Maret
                </option>
                <option value=04 <?php echo set_select('Month', '04'); ?>>
                    April
                </option>
                <option value=05 <?php echo set_select('Month', '05'); ?>>
                    Mei
                </option>
                <option value=06 <?php echo set_select('Month', '06'); ?>>
                    Juni
                </option>
                <option value=07 <?php echo set_select('Month', '07'); ?>>
                    Juli
                </option>
                <option value=08 <?php echo set_select('Month', '08'); ?>>
                    Agustus
                </option>
                <option value=09 <?php echo set_select('Month', '09'); ?>>
                    September</option>
                <option value=10 <?php echo set_select('Month', '10'); ?>>
                    Oktober
                </option>
                <option value=11 <?php echo set_select('Month', '11'); ?>>
                    November
                </option>
                <option value=12 <?php echo set_select('Month', '12'); ?>>
                    Desember
                </option>

            </select>
            <br>
        </div>
    </div>
</div>



<br>
<input name="Kirim" type="submit" class="btn btn-primary" />
</form>

</div>

</div>

</div>

<script>
$('input.semuaGPP').on('change', function() {
$('input.checkedGPP').not(this).prop('checked', false);
});

$('input.checkedGPP').on('change', function() {
$('input.semuaGPP').not(this).prop('checked', false);
});

$('input.semuaOPK').on('change', function() {
$('input.checkedOPK').not(this).prop('checked', false);
});

$('input.checkedOPK').on('change', function() {
$('input.semuaOPK').not(this).prop('checked', false);
});
</script>