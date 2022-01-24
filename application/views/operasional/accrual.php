<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

        <div>
            <?php $bulanini[1] = "BULAN INI";
$bulandepan[1] = "BULAN DEPAN";
$bulanjumlah = 00;
$awal = 1;
$u = 00;
$year = date("Y");
?>


    <?php

foreach ($table as $a) {
    $year = date("Y", strtotime($a->DJPtanggaldeklarasi));
}

foreach ($bulan as $u) {

    if ($u == 01) {
        $bulanini[1] = "JANUARI $year";
        $bulandepan[1] = "FEB-JAN " . $year + 1;
        $bulanjumlah = $u;
        $awal = 0;

        $kalibulan[1] = (20 / 100);
        $flagkali = 1;
        $flagkaliawal = 1;
        $flagbulan[1] = 0;

    } else if ($u == 02) {
        $bulanini[1] = "JAN-FEB $year";
        $bulandepan[1] = "MAR-FEB" . $year + 1;

        $bulanini[2] = "FEBRUARI $year";
        $bulandepan[2] = "MAR-FEB" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);

        $flagbulan[2] = 0;
        $flagbulan[1] = 1;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 2;
        $flagkaliawal = 1;

    } else if ($u == 03) {
        $bulanini[1] = "JAN-MAR $year";
        $bulandepan[1] = "APR-MAR" . $year + 1;
        $bulanini[2] = "FEB-MAR $year";
        $bulandepan[2] = "APR-MAR" . $year + 1;
        $bulanini[3] = "MARET $year";
        $bulandepan[3] = "APR-MAR" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);

        $flagbulan[3] = 0;
        $flagbulan[2] = 1;
        $flagbulan[1] = 2;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 3;

        $flagkaliawal = 1;
    } else if ($u == 04) {
        $bulanini[1] = "JAN-APR $year";
        $bulandepan[1] = "MEI-APR" . $year + 1;
        $bulanini[2] = "FEB-APR $year";
        $bulandepan[2] = "MEI-APR" . $year + 1;
        $bulanini[3] = "MAR-APR $year";
        $bulandepan[3] = "MEI-APR" . $year + 1;
        $bulanini[4] = "APRIL $year";
        $bulandepan[4] = "MEI-APR" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);

        $flagbulan[4] = 0;
        $flagbulan[3] = 1;
        $flagbulan[2] = 2;
        $flagbulan[1] = 3;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 4;

        $flagkaliawal = 1;
    } else if ($u == 05) {
        $bulanini[1] = "JAN-MEI $year";
        $bulandepan[1] = "JUN-MEI" . $year + 1;
        $bulanini[2] = "FEB-MEI $year";
        $bulandepan[2] = "JUN-MEI" . $year + 1;
        $bulanini[3] = "MAR-MEI $year";
        $bulandepan[3] = "JUN-MEI" . $year + 1;
        $bulanini[4] = "APR-MEI $year";
        $bulandepan[4] = "JUN-MEI" . $year + 1;
        $bulanini[5] = "MEI $year";
        $bulandepan[5] = "JUN-MEI" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);

        $flagbulan[5] = 0;
        $flagbulan[4] = 1;
        $flagbulan[3] = 2;
        $flagbulan[2] = 3;
        $flagbulan[1] = 4;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 5;

        $flagkaliawal = 1;
    } else if ($u == 06) {
        $bulanini[1] = "JAN-JUN $year";
        $bulandepan[1] = "JUL-JUN" . $year + 1;
        $bulanini[2] = "FEB-JUN $year";
        $bulandepan[2] = "JUL-JUN" . $year + 1;
        $bulanini[3] = "MAR-JUN $year";
        $bulandepan[3] = "JUL-JUN" . $year + 1;
        $bulanini[4] = "APR-JUN $year";
        $bulandepan[4] = "JUL-JUN" . $year + 1;
        $bulanini[5] = "MEI-JUN $year";
        $bulandepan[5] = "JUL-JUN" . $year + 1;
        $bulanini[6] = "JUNI $year";
        $bulandepan[6] = "JUL-JUN" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);
        $kalibulan[6] = (20 / 100);

        $flagbulan[6] = 0;
        $flagbulan[5] = 1;
        $flagbulan[4] = 2;
        $flagbulan[3] = 3;
        $flagbulan[2] = 4;
        $flagbulan[1] = 5;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 6;

        $flagkaliawal = 1;
    } else if ($u == 07) {
        $bulanini[1] = "JAN-JUL $year";
        $bulandepan[1] = "AGU-JUL" . $year + 1;
        $bulanini[2] = "FEB-JUL $year";
        $bulandepan[2] = "AGU-JUL" . $year + 1;
        $bulanini[3] = "MAR-JUL $year";
        $bulandepan[3] = "AGU-JUL" . $year + 1;
        $bulanini[4] = "APR-JUL $year";
        $bulandepan[4] = "AGU-JUL" . $year + 1;
        $bulanini[5] = "MEI-JUL $year";
        $bulandepan[5] = "AGU-JUL" . $year + 1;
        $bulanini[6] = "JUNI-JUL $year";
        $bulandepan[6] = "AGU-JUL" . $year + 1;
        $bulanini[7] = "JULI $year";
        $bulandepan[7] = "AGU-JUL" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);
        $kalibulan[6] = (20 / 100);
        $kalibulan[7] = (20 / 100);

        $flagbulan[7] = 0;
        $flagbulan[6] = 1;
        $flagbulan[5] = 2;
        $flagbulan[4] = 3;
        $flagbulan[3] = 4;
        $flagbulan[2] = 5;
        $flagbulan[1] = 6;

        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 7;
        $flagkaliawal = 1;
    } else if ($u == '08') {
        $bulanini[1] = "JAN-AGU $year";
        $bulandepan[1] = "SEP-AGU" . $year + 1;
        $bulanini[2] = "FEB-AGU $year";
        $bulandepan[2] = "SEP-AGU" . $year + 1;
        $bulanini[3] = "MAR-AGU $year";
        $bulandepan[3] = "SEP-AGU" . $year + 1;
        $bulanini[4] = "APR-AGU $year";
        $bulandepan[4] = "SEP-AGU" . $year + 1;
        $bulanini[5] = "MEI-AGU $year";
        $bulandepan[5] = "SEP-AGU" . $year + 1;
        $bulanini[6] = "JUN-AGU $year";
        $bulandepan[6] = "SEP-AGU" . $year + 1;
        $bulanini[7] = "JUL-AGU $year";
        $bulandepan[7] = "SEP-AGU" . $year + 1;
        $bulanini[8] = "AGUSTUS $year";
        $bulandepan[8] = "SEP-AGU" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);
        $kalibulan[6] = (20 / 100);
        $kalibulan[7] = (20 / 100);
        $kalibulan[8] = (20 / 100);

        $flagbulan[8] = 0;
        $flagbulan[7] = 1;
        $flagbulan[6] = 2;
        $flagbulan[5] = 3;
        $flagbulan[4] = 4;
        $flagbulan[3] = 5;
        $flagbulan[2] = 6;
        $flagbulan[1] = 7;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 8;

        $flagkaliawal = 1;

    } else if ($u == '09') {
        $bulanini[1] = "JAN-SEP $year";
        $bulandepan[1] = "OKT-SEP" . $year + 1;
        $bulanini[2] = "FEB-SEP $year";
        $bulandepan[2] = "OKT-SEP" . $year + 1;
        $bulanini[3] = "MAR-SEP $year";
        $bulandepan[3] = "OKT-SEP" . $year + 1;
        $bulanini[4] = "APR-SEP $year";
        $bulandepan[4] = "OKT-SEP" . $year + 1;
        $bulanini[5] = "MEI-SEP $year";
        $bulandepan[5] = "OKT-SEP" . $year + 1;
        $bulanini[6] = "JUN-SEP $year";
        $bulandepan[6] = "OKT-SEP" . $year + 1;
        $bulanini[7] = "JUL-SEP $year";
        $bulandepan[7] = "OKT-SEP" . $year + 1;
        $bulanini[8] = "AGUS-SEP $year";
        $bulandepan[8] = "OKT-SEP" . $year + 1;
        $bulanini[9] = "SEPTEMBER $year";
        $bulandepan[9] = "OKT-SEP" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);
        $kalibulan[6] = (20 / 100);
        $kalibulan[7] = (20 / 100);
        $kalibulan[8] = (20 / 100);
        $kalibulan[9] = (20 / 100);

        $flagbulan[9] = 0;
        $flagbulan[8] = 1;
        $flagbulan[7] = 2;
        $flagbulan[6] = 3;
        $flagbulan[5] = 4;
        $flagbulan[4] = 5;
        $flagbulan[3] = 6;
        $flagbulan[2] = 7;
        $flagbulan[1] = 8;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 9;
        $flagkaliawal = 1;
    } else if ($u == 10) {
        $bulanini[1] = "JAN-OKT $year";
        $bulandepan[1] = "NOV-OKT" . $year + 1;
        $bulanini[2] = "FEB-OKT $year";
        $bulandepan[2] = "NOV-OKT" . $year + 1;
        $bulanini[3] = "MAR-OKT $year";
        $bulandepan[3] = "NOV-OKT" . $year + 1;
        $bulanini[4] = "APR-OKT $year";
        $bulandepan[4] = "NOV-OKT" . $year + 1;
        $bulanini[5] = "MEI-OKT $year";
        $bulandepan[5] = "NOV-OKT" . $year + 1;
        $bulanini[6] = "JUN-OKT $year";
        $bulandepan[6] = "NOV-OKT" . $year + 1;
        $bulanini[7] = "JUL-OKT $year";
        $bulandepan[7] = "NOV-OKT" . $year + 1;
        $bulanini[8] = "AGU-OKT $year";
        $bulandepan[8] = "NOV-OKT" . $year + 1;
        $bulanini[9] = "SEP-OKT $year";
        $bulandepan[9] = "NOV-OKT" . $year + 1;
        $bulanini[10] = "OKTOBER $year";
        $bulandepan[10] = "NOV-OKT" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);
        $kalibulan[6] = (20 / 100);
        $kalibulan[7] = (20 / 100);
        $kalibulan[8] = (20 / 100);
        $kalibulan[9] = (20 / 100);
        $kalibulan[10] = (20 / 100);

        $flagbulan[10] = 0;
        $flagbulan[9] = 1;
        $flagbulan[8] = 2;
        $flagbulan[7] = 3;
        $flagbulan[6] = 4;
        $flagbulan[5] = 5;
        $flagbulan[4] = 6;
        $flagbulan[3] = 7;
        $flagbulan[2] = 8;
        $flagbulan[1] = 9;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 10;
        $flagkaliawal = 1;

    } else if ($u == 11) {
        $bulanini[1] = "JAN-NOV $year";
        $bulandepan[1] = "DES-NOV" . $year + 1;
        $bulanini[2] = "FEB-NOV $year";
        $bulandepan[2] = "DES-NOV" . $year + 1;
        $bulanini[3] = "MAR-NOV $year";
        $bulandepan[3] = "DES-NOV" . $year + 1;
        $bulanini[4] = "APR-NOV $year";
        $bulandepan[4] = "DES-NOV" . $year + 1;
        $bulanini[5] = "MEI-NOV $year";
        $bulandepan[5] = "DES-NOV" . $year + 1;
        $bulanini[6] = "JUN-NOV $year";
        $bulandepan[6] = "DES-NOV" . $year + 1;
        $bulanini[7] = "JUL-NOV $year";
        $bulandepan[7] = "DES-NOV" . $year + 1;
        $bulanini[8] = "AGU-NOV $year";
        $bulandepan[8] = "DES-NOV" . $year + 1;
        $bulanini[9] = "SEP-NOV $year";
        $bulandepan[9] = "DES-NOV" . $year + 1;
        $bulanini[10] = "OKT-NOV $year";
        $bulandepan[10] = "DES-NOV" . $year + 1;
        $bulanini[11] = "NOVEMBER $year";
        $bulandepan[11] = "DES-NOV" . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);
        $kalibulan[6] = (20 / 100);
        $kalibulan[7] = (20 / 100);
        $kalibulan[8] = (20 / 100);
        $kalibulan[9] = (20 / 100);
        $kalibulan[10] = (20 / 100);
        $kalibulan[11] = (20 / 100);

        $flagbulan[11] = 0;
        $flagbulan[10] = 1;
        $flagbulan[9] = 2;
        $flagbulan[8] = 3;
        $flagbulan[7] = 4;
        $flagbulan[6] = 5;
        $flagbulan[5] = 6;
        $flagbulan[4] = 7;
        $flagbulan[3] = 8;
        $flagbulan[2] = 9;
        $flagbulan[1] = 10;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 11;
        $flagkaliawal = 1;

    } else if ($u == 12) {
        $bulanini[1] = "JAN-DES $year";
        $bulandepan[1] = " " . $year + 1;
        $bulanini[2] = "FEB-DES $year";
        $bulandepan[2] = " " . $year + 1;
        $bulanini[3] = "MAR-DES $year";
        $bulandepan[3] = " " . $year + 1;
        $bulanini[4] = "APR-DES $year";
        $bulandepan[4] = " " . $year + 1;
        $bulanini[5] = "MEI-DES $year";
        $bulandepan[5] = " " . $year + 1;
        $bulanini[6] = "JUN-DES $year";
        $bulandepan[6] = " " . $year + 1;
        $bulanini[7] = "JUL-DES $year";
        $bulandepan[7] = " " . $year + 1;
        $bulanini[8] = "AGU-DES $year";
        $bulandepan[8] = " " . $year + 1;
        $bulanini[9] = "SEP-DES $year";
        $bulandepan[9] = " " . $year + 1;
        $bulanini[10] = "OKT-DES $year";
        $bulandepan[10] = " " . $year + 1;
        $bulanini[11] = "NOV-DES $year";
        $bulandepan[11] = " " . $year + 1;
        $bulanini[12] = "DESEMBER $year";
        $bulandepan[12] = " " . $year + 1;

        $kalibulan[1] = (20 / 100);
        $kalibulan[2] = (20 / 100);
        $kalibulan[3] = (20 / 100);
        $kalibulan[4] = (20 / 100);
        $kalibulan[5] = (20 / 100);
        $kalibulan[6] = (20 / 100);
        $kalibulan[7] = (20 / 100);
        $kalibulan[8] = (20 / 100);
        $kalibulan[9] = (20 / 100);
        $kalibulan[10] = (20 / 100);
        $kalibulan[11] = (20 / 100);
        $kalibulan[12] = (20 / 100);

        $flagbulan[12] = 0;
        $flagbulan[11] = 1;
        $flagbulan[10] = 2;
        $flagbulan[9] = 3;
        $flagbulan[8] = 4;
        $flagbulan[7] = 5;
        $flagbulan[6] = 6;
        $flagbulan[5] = 7;
        $flagbulan[4] = 8;
        $flagbulan[3] = 9;
        $flagbulan[2] = 10;
        $flagbulan[1] = 11;
        $bulanjumlah = $u;
        $awal = 0;
        $flagkali = 12;
        $flagkaliawal = 1;

    } else {
        $bulanini[1] = "BULAN INI";
        $bulandepan[1] = "BULAN DEPAN";
        $bulanjumlah = 01;

    }}?>


            <div><?=validation_errors()?></div>

            <?=form_open('Accrual/triggeredExport', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <input type="hidden" id="table" name="table"
                    value="<?php echo htmlspecialchars(json_encode($table)) ?>" />
                <input type="hidden" id="bulan" name="bulan"
                    value="<?php echo htmlspecialchars(json_encode($bulan)) ?>" />
                <input type="hidden" id="click" name="click" value='1' />

                <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />
            </form>


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">


                            <!-- LOOPING -->
                            <?php for ($i = 01; $i <= $bulanjumlah; $i++) {?>
                            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                <thead class="text-dark">

                                    <tr>
                                        <th>No.</th>
                                        <th width="300px">CABANG/CAPEM/KEDAI</th>
                                        <th>NO. SERTIFIKAT</th>
                                        <th>TGL SERTIFIKAT</th>
                                        <th>JLH TERJAMIN </th>
                                        <th>NAMA TERJAMIN</th>
                                        <th>COVERAGE</th>
                                        <th>PALFOND</th>
                                        <th>JML. JAMINAN</th>
                                        <th>AWAL</th>
                                        <th>AKHIR</th>
                                        <th>BLN</th>
                                        <th>TARIF</th>
                                        <th>IJP</th>
                                        <th>ADM</th>
                                        <th>MATERAI</th>
                                        <th>TOTAL</th>
                                        <th>FEE BANK</th>
                                        <th>TOTAL PENDAPATAN</th>
                                        <th width="130px"> <?php echo $bulanini[$i] ?></th>
                                        <th> <?php echo $bulandepan[$i] ?></th>
                                        <th>SISA</th>

                                    </tr>
                                </thead>
                                <tbody class="text-dark">


                                    <?php
$no = 1;
    $flag = 1;
    $DJPnoreg = " ";
    $sumbulanawal = 0;
    $sumbulanakhir = 0;
    $sumsisa = 0;
    $sumbayar = 0;
    $sumtotal = 0;
    $sisa = 0;

    if (!is_array($table) || is_array($table)) {
        foreach ($table as $u) {
            $bulansekarang = date('m', strtotime($u->DJPtanggalverif));
            if (($u->DJPnoreg != $DJPnoreg) && ($bulansekarang == $i)) {
                ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $u->PPnama ?></td>
                                        <td><?php echo $u->DJPnoreg ?></td>
                                        <td><?php echo $u->DJPtanggalverif ?></td>
                                        <td><?php echo "1" ?></td>
                                        <td><?php echo $u->TRJMnama ?></td>
                                        <td><?php echo $u->DJPDcoverage ?></td>
                                        <td><?php echo number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                        <td><?php echo $u->DJPDrate . "%" ?></td>
                                        <td><?php echo number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo $u->DJPDfeeadm ?></td>
                                        <td><?php echo $u->DJPDfeematerai ?></td>
                                        <td><?php echo number_format($total = $u->DJPDimbaljasa + $u->DJPDfeeadm + $u->DJPDfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo $u->DJPDfeebank ?></td>
                                        <td><?php echo number_format($total - $u->DJPDfeebank, 0, ".", ".") ?></td>
                                        <td> <?php echo number_format(($hasilbulanawal = (($u->DJPDimbaljasa * $kalibulan[$i]) + (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))), 0, ".", ".") ?>
                                        </td>
                                        <td><?php

                $date1 = $u->DJPtanggalverif;
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
                if ($u->DJPDjangkawaktu - $diff <= 12) {
                    $a = 12;
                    $a -= $bulanjumlah;
                } else {
                    $a = 12;
                }

                echo number_format(($hasilbulanakhir = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $a)), 0, ".", ".")?>
                                        </td>
                                        <td><?php
if (($u->DJPDimbaljasa - $hasilbulanawal - $hasilbulanakhir) < 0) {
                    echo "--";
                } else {
                    echo number_format($sisa = ($u->DJPDimbaljasa - $hasilbulanawal - $hasilbulanakhir), 0, ".", ".");
                }
                ?></td>

                                        <td><?php echo number_format($total = ($hasilbulanawal + $hasilbulanakhir + $sisa), 0, ".", ".") ?>
                                        </td>
                                        <td> -- </td>
                                        <td> <?php echo number_format($bayarminmal = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)), 0, ".", ".") ?>
                                        </td>

                                    </tr>

                                    <?php
$sumbulanawal += $hasilbulanawal;
                $sumbulanakhir += $hasilbulanakhir;
                $sumsisa += $sisa;
                $sumbayar += $bayarminmal;
                $sumtotal += $total;

                if ($flag == $u->DJPjumlahpk) {

                    ?>

                                    <tr>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo $u->DJPjumlahpk ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total = $u->DJPjumlahimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format($u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total - $u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumbulanawal, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumbulanakhir, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumsisa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumtotal, 0, ".", ".") ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo " " ?></td>


                                    </tr>

                                    <?php
$flag = 0;

                    $sumbulanawal = 0;
                    $sumbulanakhir = 0;
                    $sumsisa = 0;
                    $sumbayar = 0;
                    $sumtotal = 0;

                }

                ?>


                                    <?php
$no++;

            } else if ($bulansekarang == $i) {
                ?>


                                    <tr>
                                        <td><?php echo " " ?></td>
                                        <td><?php echo " " ?></td>
                                        <td><?php echo " " ?></td>
                                        <td><?php echo $u->DJPtanggalverif ?></td>
                                        <td><?php echo "1" ?></td>
                                        <td><?php echo $u->TRJMnama ?></td>
                                        <td><?php echo $u->DJPDcoverage ?></td>
                                        <td><?php echo number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                        <td><?php echo $u->DJPDrate . "%" ?></td>
                                        <td><?php echo number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo $u->DJPDfeeadm ?></td>
                                        <td><?php echo $u->DJPDfeematerai ?></td>
                                        <td><?php echo number_format($total = $u->DJPDimbaljasa + $u->DJPDfeeadm + $u->DJPDfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo $u->DJPDfeebank ?></td>
                                        <td><?php echo number_format($total - $u->DJPDfeebank, 0, ".", ".") ?></td>
                                        <td> <?php echo number_format(($hasilbulanawal = (($u->DJPDimbaljasa * $kalibulan[$i]) + (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))), 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format(($hasilbulanakhir = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * 12)), 0, ".", ".") ?>
                                        </td>
                                        <td><?php
if (($u->DJPDimbaljasa - $hasilbulanawal - $hasilbulanakhir) < 0) {
                    echo "--";
                } else {
                    echo number_format($sisa = ($u->DJPDimbaljasa - $hasilbulanawal - $hasilbulanakhir), 0, ".", ".");
                }
                ?></td>

                                        <td><?php echo number_format($total = ($hasilbulanawal + $hasilbulanakhir + $sisa), 0, ".", ".") ?>
                                        </td>
                                        <td> -- </td>
                                        <td> <?php echo number_format($bayarminmal = (($u->DJPDimbaljasa - ($u->DJPDimbaljasa * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)), 0, ".", ".") ?>
                                        </td>

                                    </tr>
                                    <?php
$sumbulanawal += $hasilbulanawal;
                $sumbulanakhir += $hasilbulanakhir;
                $sumsisa += $sisa;
                $sumbayar += $bayarminmal;
                $sumtotal += $total;

                if ($flag == $u->DJPjumlahpk) {

                    ?>
                                    <tr>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo $u->DJPjumlahpk ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total = $u->DJPjumlahimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format($u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total - $u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumbulanawal, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumbulanakhir, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumsisa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($sumtotal, 0, ".", ".") ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo " " ?></td>

                                    </tr>

                                    <?php

                    $flag = 0;

                    $sumbulanawal = 0;
                    $sumbulanakhir = 0;
                    $sumsisa = 0;
                    $sumbayar = 0;
                    $sumtotal = 0;

                }
                ?>
                                    <?php
} else {
                continue;
            }

            $DJPnoreg = $u->DJPnoreg;
            $flag += 1;

        }

    }
    ?>

                                </tbody>

                            </table>
                            <?php }?>

                            <!-- START -->
                            <?php if ($awal == 1) {?>
                            <table class=" table table-bordered" id="" width="100%" cellspacing="0">
                                <thead class="text-dark">

                                    <tr>
                                        <th>No.</th>
                                        <th width="300px">CABANG/CAPEM/KEDAI</th>
                                        <th>NO. SERTIFIKAT</th>
                                        <th>TGL SERTIFIKAT</th>
                                        <th>JLH TERJAMIN </th>
                                        <th>NAMA TERJAMIN</th>
                                        <th>COVERAGE</th>
                                        <th>PALFOND</th>
                                        <th>JML. JAMINAN</th>
                                        <th>AWAL</th>
                                        <th>AKHIR</th>
                                        <th>BLN</th>
                                        <th>TARIF</th>
                                        <th>IJP</th>
                                        <th>ADM</th>
                                        <th>MATERAI</th>
                                        <th>TOTAL</th>
                                        <th>FEE BANK</th>
                                        <th>TOTAL PENDAPATAN</th>
                                        <th width="130px"> BULAN INI </th>
                                        <th> BULAN DEPAN</th>
                                        <th>SISA</th>

                                    </tr>
                                </thead>
                                <tbody class="text-dark">


                                    <?php
$no = 1;
    $flag = 1;
    $DJPnoreg = " ";

    if (!is_array($table) || is_array($table)) {
        foreach ($table as $u) {
            $bulansekarang = date('m', strtotime($u->DJPtanggalverif));
            if (($u->DJPnoreg != $DJPnoreg)) {
                ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $u->PPnama ?></td>
                                        <td><?php echo $u->DJPnoreg ?></td>
                                        <td><?php echo $u->DJPtanggalverif ?></td>
                                        <td><?php echo "1" ?></td>
                                        <td><?php echo $u->TRJMnama ?></td>
                                        <td><?php echo $u->DJPDcoverage ?></td>
                                        <td><?php echo number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                        <td><?php echo $u->DJPDrate . "%" ?></td>
                                        <td><?php echo number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDfeeadm, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total = $u->DJPDimbaljasa + $u->DJPDfeeadm + $u->DJPDfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format($u->DJPDfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total - $u->DJPDfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>


                                    </tr>
                                    <?php
if ($flag == $u->DJPjumlahpk) {

                    ?>

                                    <tr>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo $u->DJPjumlahpk ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total = $u->DJPjumlahimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format($u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total - $u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>

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
                                        <td><?php echo " " ?></td>
                                        <td><?php echo " " ?></td>
                                        <td><?php echo " " ?></td>
                                        <td><?php echo $u->DJPtanggalverif ?></td>
                                        <td><?php echo "1" ?></td>
                                        <td><?php echo $u->TRJMnama ?></td>
                                        <td><?php echo $u->DJPDcoverage ?></td>
                                        <td><?php echo number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                        <td><?php echo $u->DJPDrate . "%" ?></td>
                                        <td><?php echo number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDfeeadm, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPDfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total = $u->DJPDimbaljasa + $u->DJPDfeeadm + $u->DJPDfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format($u->DJPDfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total - $u->DJPDfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>

                                    </tr>
                                    <?php
if ($flag == $u->DJPjumlahpk) {

                    ?>
                                    <tr>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo $u->DJPjumlahpk ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPnilaipenjaminan, 0, ".", ".") ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo "" ?></td>
                                        <td><?php echo number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeeadmin, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($u->DJPfeematerai, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total = $u->DJPjumlahimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai, 0, ".", ".") ?>
                                        </td>
                                        <td><?php echo number_format($u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo number_format($total - $u->DJPfeebank, 0, ".", ".") ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>
                                        <td><?php echo "--" ?></td>
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

                            <?php }?>



                            <!-- END -->
                        </div>




</div>
<div><?=validation_errors()?></div>

<?=form_open('Accrual', ['class' => 'form-horizontal'])?>
<form role="form" class="form-horizontal">
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
									<?php echo $u->OPKjenis; ?>
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


                            <div class="col-xl-4 mb-30">
<div class="card-box height-100-p pd-20">
<div class="font-weight-bold text-uppercase mb-1">
									<label> Tahun </label>

                                    <br>
                                        <select id="Tahun" name="Tahun">
                                        <?php foreach ($tahun as $u) {?>
                                        <option value="<?php echo $u->DJPtanggaldeklarasi ?>" <?php echo set_select('Tahun', "$u->DJPtanggaldeklarasi"); ?>>
											<?php echo $u->DJPtanggaldeklarasi; ?>
										</option>

                                        <?php }?>
</select>
									<br>
</div>

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