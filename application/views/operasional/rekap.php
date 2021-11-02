<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div><?=validation_errors()?></div>
            <div><?=$this->session->flashdata('error')?></div>
            <?=form_open('Rekap/triggeredExport', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <input type="hidden" id="table" name="table"
                    value="<?php echo htmlspecialchars(json_encode($table)) ?>" />
                <input type="hidden" id="click" name="click" value='1' />


                <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />

            </form>



            <!-- SCRIPT ROWSPAN -->

            <!-- END -->


            <br>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">

                    <h5 class="card-header">DATA</h5>

                    <div class="card-body">




                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>CABANG / CAPEM / KEDAI</th>
                                        <th>NOMOR SERTIFIKAT</th>
                                        <th>TANGGAL SERTIFIKAT</th>
                                        <th>JUMLAH TERJAMIN</th>
                                        <th>NAMA TERJAMIN</th>
                                        <th>COVERAGE</th>
                                        <th>PLAFOND</th>
                                        <th>JUMLAH JAMINAN</th>
                                        <th colspan="2">JANGKA WAKTU</th>
                                        <th>BULAN</th>
                                        <th>TARIF</th>
                                        <th colspan="3">BIAYA PENJAMINAN</th>
                                        <th> TOTAL </th>
                                        <th>FEE BANK</th>
                                        <th>TOTAL PENDAPATAN</th>
                                        <th>Status</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
$no = 1;
$flag = 1;
$DJPnoreg = "";
if (!is_array($table) || is_array($table)) {
	foreach ($table as $u) {

		if ($u->DJPnoreg != $DJPnoreg) {
			?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $u->PPnama ?></td>
                                        <td><?php echo $u->DJPnoreg ?></td>
                                        <td><?php echo $u->DJPtanggalverif ?></td>
                                        <td><?php echo 1 ?></td>
                                        <td><?php echo $u->TRJMnama ?></td>
                                        <td><?php echo $u->DJPDcoverage ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                        <td><?php echo $u->DJPDrate . "%" ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format((int) ($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) - ((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))))), 0, ".", ".") ?>
                                        </td>
                                        <td>
                                            <?php
if ($u->status == 0) {
				echo "Belum Cetak";
			} else {
				echo "Sudah Cetak";
			}
			?>
                                        </td>
                                    </tr>
                                    <?php
if ($flag == $u->DJPjumlahpk) {
				?>
                                    <tr>
                                        <td><?php echo "" ?></td>

                                        <td><?php echo "TOTAL" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo $u->DJPjumlahpk ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPnilaipenjaminan, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>

                                        <td><?php echo "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPjumlahbiaya, 0, ".", ".") ?></td>
                                        <td>
                                            <?php
if ($u->status == 0) {
					echo "Belum Cetak";
				} else {
					echo "Sudah Cetak";
				}
				?>
                                        </td>
                                    </tr>
                                    <?php

				$flag = 0;
			}
			?>
                                    <?php
$no++;
		} else {
			?>
                                    <tr>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo 1 ?></td>
                                        <td><?php echo $u->TRJMnama ?></td>
                                        <td><?php echo $u->DJPDcoverage ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                        <td><?php echo $u->DJPDrate . "%" ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format((int) ($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) - ((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))))), 0, ".", ".") ?>
                                        </td>
                                        <td>
                                            <?php
if ($u->status == 0) {
				echo "Belum Cetak";
			} else {
				echo "Sudah Cetak";
			}
			?>
                                    </tr>
                                    <?php
if ($flag == $u->DJPjumlahpk) {
				?>
                                    <tr>
                                        <td><?php echo "" ?></td>

                                        <td><?php echo "TOTAL" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo $u->DJPjumlahpk ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPnilaipenjaminan, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo "Rp." . number_format($u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo "Rp." . number_format($u->DJPjumlahbiaya, 0, ".", ".") ?></td>
                                    </tr>

                                    <?php

				$flag = 0;
			}
			?>
                                    <?php
}
		$DJPnoreg = $u->DJPnoreg;
		$flag += 1;
	}
}
?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                    <!-- End of Main Content -->
                    <div><?=validation_errors()?></div>
                    <div><?=$this->session->flashdata('error')?></div>
                    <?=form_open('Rekap', ['class' => 'form-horizontal'])?>
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
                                                    value="semua" <?php echo set_checkbox('semuaGPP', 'semua'); ?>>
                                                Select
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
                                                    value="semua" <?php echo set_checkbox('semuaOPK', 'semua'); ?>>
                                                Select
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
                                                Select
                                                All
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="01" id="01"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '01'); ?> />
                                                Januari
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="02" id="02"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '02'); ?> />
                                                Februari
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="03" id="03"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '03'); ?> />
                                                Maret
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="04" id="04"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '04'); ?> />
                                                April
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="05" id="05"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '05'); ?> />
                                                Mei
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="06" id="06"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '06'); ?> />Juni
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="07" id="07"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '07'); ?> />
                                                Juli
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="08" id="08"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '08'); ?> />Agustus
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="09" id="09"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '09'); ?> />
                                                September
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="10" id="10"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '10'); ?> />
                                                Oktober
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="11" id="11"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '11'); ?> />
                                                November
                                                <br>
                                                <input name="Monthchecked[]" type="checkbox" value="12" id="12"
                                                    class="checkedMonth"
                                                    <?php echo set_checkbox('Monthchecked', '12'); ?> />
                                                Desember
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