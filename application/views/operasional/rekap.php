<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div><?=validation_errors()?></div>

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

</div>


<?=form_open('Rekap', ['class' => 'form-horizontal'])?>
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