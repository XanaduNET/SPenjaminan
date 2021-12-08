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
?>


            <?php foreach ($bulan as $u) {
	if ($u == 01) {
		$bulanini[1] = "JANUARI 2021";
		$bulandepan[1] = "FEB-JAN 2022";
		$bulanjumlah = $u;
		$awal = 0;

		$kalibulan[1] = (20 / 100);
		$flagkali = 1;
		$flagkaliawal = 1;
		$flagbulan[1] = 0;

	} else if ($u == 02) {
		$bulanini[1] = "JAN-FEB 2021";
		$bulandepan[1] = "MAR-FEB 2022";

		$bulanini[2] = "FEBRUARI 2021";
		$bulandepan[2] = "MAR-FEB 2022";

		$kalibulan[1] = (20 / 100);
		$kalibulan[2] = (20 / 100);

		$flagbulan[2] = 0;
		$flagbulan[1] = 1;
		$bulanjumlah = $u;
		$awal = 0;
		$flagkali = 2;
		$flagkaliawal = 1;

	} else if ($u == 03) {
		$bulanini[1] = "JAN-MAR 2021";
		$bulandepan[1] = "APR-MAR 2022";
		$bulanini[2] = "FEB-MAR 2021";
		$bulandepan[2] = "APR-MAR 2022";
		$bulanini[3] = "MARET 2021";
		$bulandepan[3] = "APR-MAR 2022";

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
		$bulanini[1] = "JAN-APR 2021";
		$bulandepan[1] = "MEI-APR 2022";
		$bulanini[2] = "FEB-APR 2021";
		$bulandepan[2] = "MEI-APR 2022";
		$bulanini[3] = "MAR-APR 2021";
		$bulandepan[3] = "MEI-APR 2022";
		$bulanini[4] = "APRIL 2021";
		$bulandepan[4] = "MEI-APR 2022";

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
		$bulanini[1] = "JAN-MEI 2021";
		$bulandepan[1] = "JUN-MEI 2022";
		$bulanini[2] = "FEB-MEI 2021";
		$bulandepan[2] = "JUN-MEI 2022";
		$bulanini[3] = "MAR-MEI 2021";
		$bulandepan[3] = "JUN-MEI 2022";
		$bulanini[4] = "APR-MEI 2021";
		$bulandepan[4] = "JUN-MEI 2022";
		$bulanini[5] = "MEI 2021";
		$bulandepan[5] = "JUN-MEI 2022";

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
		$bulanini[1] = "JAN-JUN 2021";
		$bulandepan[1] = "JUL-JUN 2022";
		$bulanini[2] = "FEB-JUN 2021";
		$bulandepan[2] = "JUL-JUN 2022";
		$bulanini[3] = "MAR-JUN 2021";
		$bulandepan[3] = "JUL-JUN 2022";
		$bulanini[4] = "APR-JUN 2021";
		$bulandepan[4] = "JUL-JUN 2022";
		$bulanini[5] = "MEI-JUN 2021";
		$bulandepan[5] = "JUL-JUN 2022";
		$bulanini[6] = "JUNI 2021";
		$bulandepan[6] = "JUL-JUN 2022";

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
		$bulanini[1] = "JAN-JUL 2021";
		$bulandepan[1] = "AGU-JUL 2022";
		$bulanini[2] = "FEB-JUL 2021";
		$bulandepan[2] = "AGU-JUL 2022";
		$bulanini[3] = "MAR-JUL 2021";
		$bulandepan[3] = "AGU-JUL 2022";
		$bulanini[4] = "APR-JUL 2021";
		$bulandepan[4] = "AGU-JUL 2022";
		$bulanini[5] = "MEI-JUL 2021";
		$bulandepan[5] = "AGU-JUL 2022";
		$bulanini[6] = "JUNI-JUL 2021";
		$bulandepan[6] = "AGU-JUL 2022";
		$bulanini[7] = "JULI 2021";
		$bulandepan[7] = "AGU-JUL 2022";

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
		$bulanini[1] = "JAN-AGU 2021";
		$bulandepan[1] = "SEP-AGU 2022";
		$bulanini[2] = "FEB-AGU 2021";
		$bulandepan[2] = "SEP-AGU 2022";
		$bulanini[3] = "MAR-AGU 2021";
		$bulandepan[3] = "SEP-AGU 2022";
		$bulanini[4] = "APR-AGU 2021";
		$bulandepan[4] = "SEP-AGU 2022";
		$bulanini[5] = "MEI-AGU 2021";
		$bulandepan[5] = "SEP-AGU 2022";
		$bulanini[6] = "JUN-AGU 2021";
		$bulandepan[6] = "SEP-AGU 2022";
		$bulanini[7] = "JUL-AGU 2021";
		$bulandepan[7] = "SEP-AGU 2022";
		$bulanini[8] = "AGUSTUS 2021";
		$bulandepan[8] = "SEP-AGU 2022";

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
		$bulanini[1] = "JAN-SEP 2021";
		$bulandepan[1] = "OKT-SEP 2022";
		$bulanini[2] = "FEB-SEP 2021";
		$bulandepan[2] = "OKT-SEP 2022";
		$bulanini[3] = "MAR-SEP 2021";
		$bulandepan[3] = "OKT-SEP 2022";
		$bulanini[4] = "APR-SEP 2021";
		$bulandepan[4] = "OKT-SEP 2022";
		$bulanini[5] = "MEI-SEP 2021";
		$bulandepan[5] = "OKT-SEP 2022";
		$bulanini[6] = "JUN-SEP 2021";
		$bulandepan[6] = "OKT-SEP 2022";
		$bulanini[7] = "JUL-SEP 2021";
		$bulandepan[7] = "OKT-SEP 2022";
		$bulanini[8] = "AGUS-SEP 2021";
		$bulandepan[8] = "OKT-SEP 2022";
		$bulanini[9] = "SEPTEMBER 2021";
		$bulandepan[9] = "OKT-SEP 2022";

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
		$bulanini[1] = "JAN-OKT 2021";
		$bulandepan[1] = "NOV-OKT 2022";
		$bulanini[2] = "FEB-OKT 2021";
		$bulandepan[2] = "NOV-OKT 2022";
		$bulanini[3] = "MAR-OKT 2021";
		$bulandepan[3] = "NOV-OKT 2022";
		$bulanini[4] = "APR-OKT 2021";
		$bulandepan[4] = "NOV-OKT 2022";
		$bulanini[5] = "MEI-OKT 2021";
		$bulandepan[5] = "NOV-OKT 2022";
		$bulanini[6] = "JUN-OKT 2021";
		$bulandepan[6] = "NOV-OKT 2022";
		$bulanini[7] = "JUL-OKT 2021";
		$bulandepan[7] = "NOV-OKT 2022";
		$bulanini[8] = "AGU-OKT 2021";
		$bulandepan[8] = "NOV-OKT 2022";
		$bulanini[9] = "SEP-OKT 2021";
		$bulandepan[9] = "NOV-OKT 2022";
		$bulanini[10] = "OKTOBER 2021";
		$bulandepan[10] = "NOV-OKT 2022";

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
		$bulanini[1] = "JAN-NOV 2021";
		$bulandepan[1] = "DES-NOV 2022";
		$bulanini[2] = "FEB-NOV 2021";
		$bulandepan[2] = "DES-NOV 2022";
		$bulanini[3] = "MAR-NOV 2021";
		$bulandepan[3] = "DES-NOV 2022";
		$bulanini[4] = "APR-NOV 2021";
		$bulandepan[4] = "DES-NOV 2022";
		$bulanini[5] = "MEI-NOV 2021";
		$bulandepan[5] = "DES-NOV 2022";
		$bulanini[6] = "JUN-NOV 2021";
		$bulandepan[6] = "DES-NOV 2022";
		$bulanini[7] = "JUL-NOV 2021";
		$bulandepan[7] = "DES-NOV 2022";
		$bulanini[8] = "AGU-NOV 2021";
		$bulandepan[8] = "DES-NOV 2022";
		$bulanini[9] = "SEP-NOV 2021";
		$bulandepan[9] = "DES-NOV 2022";
		$bulanini[10] = "OKT-NOV 2021";
		$bulandepan[10] = "DES-NOV 2022";
		$bulanini[11] = "NOVEMBER 2021";
		$bulandepan[11] = "DES-NOV 2022";

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
		$bulanini[1] = "JAN-DES 2021";
		$bulandepan[1] = "2022";
		$bulanini[2] = "FEB-DES 2021";
		$bulandepan[2] = "2022";
		$bulanini[3] = "MAR-DES 2021";
		$bulandepan[3] = "2022";
		$bulanini[4] = "APR-DES 2021";
		$bulandepan[4] = "2022";
		$bulanini[5] = "MEI-DES 2021";
		$bulandepan[5] = "2022";
		$bulanini[6] = "JUN-DES 2021";
		$bulandepan[6] = "2022";
		$bulanini[7] = "JUL-DES 2021";
		$bulandepan[7] = "2022";
		$bulanini[8] = "AGU-DES 2021";
		$bulandepan[8] = "2022";
		$bulanini[9] = "SEP-DES 2021";
		$bulandepan[9] = "2022";
		$bulanini[10] = "OKT-DES 2021";
		$bulandepan[10] = "2022";
		$bulanini[11] = "NOV-DES 2021";
		$bulandepan[11] = "2022";
		$bulanini[12] = "DESEMBER 2021";
		$bulandepan[12] = "2022";

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
           
            <?=form_open('Fee/triggeredExport', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <input type="hidden" id="table" name="table"
                    value="<?php echo htmlspecialchars(json_encode($table)) ?>" />
                <input type="hidden" id="bulan" name="bulan"
                    value="<?php echo htmlspecialchars(json_encode($bulan)) ?>" />
                <input type="hidden" id="click" name="click" value='1' />

                <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />
            </form>
            <br>
            <br>

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">


                            <!-- LOOPING -->
                            <?php for ($i = 01; $i <= $bulanjumlah; $i++) {?>
                            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                <thead class="text-dark">

                                    <tr>
                                        <th width="300px">No.</th>
                                        <th width="300px">CABANG/CAPEM/KEDAI</th>
                                        <th width="300px">NO. SERTIFIKAT</th>
                                        <th width="300px">TGL SERTIFIKAT</th>
                                        <th width="300px">JLH TERJAMIN </th>
                                        <th width="300px">NAMA TERJAMIN</th>
                                        <th width="300px">COVERAGE</th>
                                        <th width="300px">PALFOND</th>
                                        <th width="300px">JML. JAMINAN</th>
                                        <th width="300px">AWAL</th>
                                        <th width="300px">AKHIR</th>
                                        <th width="300px">BLN</th>
                                        <th width="300px">TARIF</th>
                                        <th width="300px">IJP</th>
                                        <th width="300px">ADM</th>
                                        <th width="300px">MATERAI</th>
                                        <th width="300px">TOTAL</th>
                                        <th width="300px">FEE BANK</th>
                                        <th width="300px">TOTAL PENDAPATAN</th>
                                        <th width="130px"> <?php echo $bulanini[$i] ?></th>
                                        <th width="300px"> <?php echo $bulandepan[$i] ?></th>
                                        <th width="300px">SISA</th>

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
                                        <td>
                                            <?php echo number_format(

					($hasilbulanawal = (($u->DJPDfeebank * $kalibulan[$i]) + (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))

					), 0, ".", ".") ?>
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
				if ($bulanjumlah == 01 || $bulanjumlah == 02) {

					$hasilbulanakhir = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $a);
				} else {

					$hasilbulanakhir = $u->DJPDfeebank / $u->DJPDjangkawaktu * $a;
				}

				echo number_format($hasilbulanakhir, 0, ".", ".")?>
                                        </td>


                                        <td>
                                            <?php
if (($u->DJPDfeebank - $hasilbulanawal - $hasilbulanakhir) < 0) {
					echo "--";
				} else {
					echo number_format($sisa = ($u->DJPDfeebank - $hasilbulanawal - $hasilbulanakhir), 0, ".", ".");
				}
				?></td>

                                        <td><?php echo number_format($total = ($hasilbulanawal + $hasilbulanakhir + $sisa), 0, ".", ".") ?>
                                        </td>
                                        <td> -- </td>
                                        <td> <?php echo number_format($bayarminmal = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)), 0, ".", ".") ?>
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
                                        <td> <?php echo number_format(($hasilbulanawal = (($u->DJPDfeebank * $kalibulan[$i]) + (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * $flagbulan[$i]))), 0, ".", ".") ?>
                                        </td>
                                        <td><?php
if ($bulanjumlah == 01 || $bulanjumlah == 02) {
					$hasilbulanakhir = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal) * 12);
				} else {
					$hasilbulanakhir = $u->DJPDfeebank / $u->DJPDjangkawaktu * 12;
				}

				echo number_format($hasilbulanakhir, 0, ".", ".")?>
                                        </td>


                                        <td><?php
if (($u->DJPDfeebank - $hasilbulanawal - $hasilbulanakhir) < 0) {
					echo "--";
				} else {
					echo number_format($sisa = ($u->DJPDfeebank - $hasilbulanawal - $hasilbulanakhir), 0, ".", ".");
				}
				?></td>

                                        <td><?php echo number_format($total = ($hasilbulanawal + $hasilbulanakhir + $sisa), 0, ".", ".") ?>
                                        </td>
                                        <td> -- </td>
                                        <td> <?php echo number_format($bayarminmal = (($u->DJPDfeebank - ($u->DJPDfeebank * $kalibulan[$i])) / ($u->DJPDjangkawaktu - $flagkaliawal)), 0, ".", ".") ?>
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
                                        <th width="300px">NO. SERTIFIKAT</th>
                                        <th width="300px">TGL SERTIFIKAT</th>
                                        <th width="300px">JLH TERJAMIN </th>
                                        <th width="300px">NAMA TERJAMIN</th>
                                        <th width="300px">COVERAGE</th>
                                        <th width="300px">PALFOND</th>
                                        <th width="300px">JML. JAMINAN</th>
                                        <th width="300px">AWAL</th>
                                        <th width="300px">AKHIR</th>
                                        <th width="300px">BLN</th>
                                        <th width="300px">TARIF</th>
                                        <th width="300px">IJP</th>
                                        <th width="300px">ADM</th>
                                        <th width="300px">MATERAI</th>
                                        <th width="300px">TOTAL</th>
                                        <th width="300px">FEE BANK</th>
                                        <th width="300px">TOTAL PENDAPATAN</th>
                                        <th width="300px"> BULAN INI </th>
                                        <th width="300px"> BULAN DEPAN</th>
                                        <th width="300px">SISA</th>

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
                                        <td><?php echo number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></td>
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







                        <!-- BATAS  -->
                        <div><?=validation_errors()?></div>
                       
                        <?=form_open('Fee', ['class' => 'form-horizontal'])?>
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
                                                    <input name="GPPchecked[]" type="checkbox"
                                                        value=<?php echo $u->GPPid ?> id=<?php echo $u->GPPid ?>
                                                        class="checkedGPP"
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
                                                    <input name="OPKchecked[]" type="checkbox"
                                                        value=<?php echo $u->OPKid ?> id=<?php echo $u->OPKid ?>
                                                        class="checkedOPK"
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
                                                    <select id="Month" name="Month">
                                                        <option selected="selected" value="00">Semua Bulan</option>
                                                        <option value=01 <?php echo set_select('Month', '01'); ?>>
                                                            Januari
                                                        </option>
                                                        <option value=02 <?php echo set_select('Month', '02'); ?>>
                                                            Februari
                                                        </option>
                                                        <option value=03 <?php echo set_select('Month', '03'); ?>>Maret
                                                        </option>
                                                        <option value=04 <?php echo set_select('Month', '04'); ?>>April
                                                        </option>
                                                        <option value=05 <?php echo set_select('Month', '05'); ?>>Mei
                                                        </option>
                                                        <option value=06 <?php echo set_select('Month', '06'); ?>>Juni
                                                        </option>
                                                        <option value=07 <?php echo set_select('Month', '07'); ?>>Juli
                                                        </option>
                                                        <option value=08 <?php echo set_select('Month', '08'); ?>>
                                                            Agustus
                                                        </option>
                                                        <option value=09 <?php echo set_select('Month', '09'); ?>>
                                                            September
                                                        </option>
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
                                            <div class="col-auto">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                        </script>

                    </div>


                </div>
            </div>
        </div>

    </div>