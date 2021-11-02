<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div><?=validation_errors()?></div>
            <div><?=$this->session->flashdata('error')?></div>
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
                </div>
                <div><?=validation_errors()?></div>
                <div><?=$this->session->flashdata('error')?></div>
                <?=form_open('Outstanding', ['class' => 'form-horizontal'])?>
                <form role="form" class="form-horizontal">
                    <div class="col-xl-4 col-md-7 mb-5">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-success text-uppercase mb-1">
                                            <label> Data Grup Penerima Penjaminan </label>
                                            <br>
                                            <input name="semuaGPP" type="checkbox" id="Semua" class="semuaGPP"
                                                value="semua" <?php echo set_checkbox('semuaGPP', 'semua'); ?>> Select
                                            All
                                            <br>
                                            <?php
foreach ($gpp as $u) {
	?>
                                            <input name="GPPchecked[]" type="checkbox" value=<?php echo $u->GPPid ?>
                                                id=<?php echo $u->GPPid ?> class="checkedGPP"
                                                <?php echo set_checkbox('GPPchecked', '' . $u->GPPid . ''); ?> />
                                            <?php echo $u->GPPnama ?>
                                            <br>
                                            <?php }?>
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
                                        <div class="font-weight-bold text-success text-uppercase mb-1">
                                            <label> Data OPK </label>
                                            <br>
                                            <input name="semuaOPK" type="checkbox" id="Semua" class="semuaOPK"
                                                value="semua" <?php echo set_checkbox('semuaOPK', 'semua'); ?>> Select
                                            All
                                            <br>
                                            <?php
foreach ($opk as $u) {
	?>
                                            <input name="OPKchecked[]" type="checkbox" value=<?php echo $u->OPKid ?>
                                                id=<?php echo $u->OPKid ?> class="checkedOPK"
                                                <?php echo set_checkbox('OPKchecked', '' . $u->OPKid . ''); ?> />
                                            <?php echo $u->OPKjenis ?>
                                            <br>
                                            <?php }?>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-xl-4 col-md-7 mb-5">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="font-weight-bold text-success text-uppercase mb-1">
                                            <label> Bulan </label>
                                            <br>
                                            <input name="semuaMonth" type="checkbox" value="semua" id="semua"
                                                class="semuaMonth" <?php echo set_checkbox('semuaGPP', 'semua'); ?>>
                                            Select All
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="01" id="01"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '01'); ?> /> Januari
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="02" id="02"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '02'); ?> /> Februari
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="03" id="03"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '03'); ?> /> Maret
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="04" id="04"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '04'); ?> /> April
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="05" id="05"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '05'); ?> /> Mei
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="06" id="06"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '06'); ?> />Juni
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="07" id="07"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '07'); ?> /> Juli
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="08" id="08"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '08'); ?> />Agustus
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="09" id="09"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '09'); ?> /> September
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="10" id="10"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '10'); ?> /> Oktober
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="11" id="11"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '11'); ?> /> November
                                            <br>
                                            <input name="Monthchecked[]" type="checkbox" value="12" id="12"
                                                class="checkedMonth"
                                                <?php echo set_checkbox('Monthchecked', '12'); ?> /> Desember
                                            <br>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <input name="Kirim" type="submit" class="btn btn-primary" />
                </form>
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

                $('input.semuaMonth').on('change', function() {
                    $('input.checkedMonth').not(this).prop('checked', false);
                });

                $('input.checkedMonth').on('change', function() {
                    $('input.semuaMonth').not(this).prop('checked', false);
                });
                </script>
                <br />
                <br />
                <br />
            </div>
        </div>
    </div>
</div>

</div>