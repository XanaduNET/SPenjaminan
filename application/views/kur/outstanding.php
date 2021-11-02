<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
        </script>
        <div>
            <div class="card">
                <div class="card-body">
                    <div><?=validation_errors()?></div>
                    <div><?=$this->session->flashdata('error')?></div>
                    <?=form_open('Kur/triggeredExportOutstanding', ['class' => 'form-horizontal'])?>
                    <form role="form" class="form-horizontal">
                        <input type="hidden" id="datakur" name="datakur"
                            value="<?php echo htmlspecialchars(json_encode($dataKur)) ?>" />
                        <input type="hidden" id="click" name="click" value='1' />

                        <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />
                        <br>
                        <br>
                    </form>

                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead class="text-dark">
                                <tr>
                                    <th>No.</th>

                                    <th>Cabang</th>
                                    <th>Nasabah</th>
                                    <th>Alamat</th>
                                    <th>Pengunaan Kredit</th>
                                    <th>Plafond Kredit</th>
                                    <th>Coverage Penjaminan(%)</th>
                                    <th>Nilai Penjaminan</th>
                                    <th>Suku Bunga(Bulan)</th>
                                    <th>Jangka Waktu (Bulan)</th>
                                    <th>
                                        <center>Tanggal </center>
                                    </th>
                                    <th> </th>
                                    <th>Tarif</th>
                                    <th>IJP/Premi</th>
                                    <th>Fee Base</th>
                                    <th>IJP - NET</th>
                                    <th>Nomor Sartifikat Penjamin</th>
                                    <th>Lama Kredit Jalan</th>
                                    <th>Taksasi Cicilan (Rp.)</th>
                                    <th>Taksasi O/s Kredit (Rp.)</th>

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
                                    <td><b>Realisasi</b></td>
                                    <td><b>Jatuh&nbspTempo</b></td>
                                    <td></td>
                                    <td><b>Rp</b></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                <?php
$no = 1;
foreach ($dataKur as $u) {
	?>
                                <tr>
                                    <td><?php echo $no ?></td>

                                    <td></td>
                                    <td><?=$u['nama'];?></td>
                                    <td><?=$u['alamat'];?></td>
                                    <td><?php echo " " ?></td>
                                    <td><?="" . number_format($u['nilai_akad'], 0, ".", ".");?></td>
                                    <td><?php echo "75% " ?></td>
                                    <td><?="" . number_format(((int) $u['nilai_akad']) * 0.75, 0, ".", ".");?></td>
                                    <td><?php echo " " ?></td>
                                    <td><?php
$a = $u['tanggal_akad'];
	$b = $u['tgl_jatuh_tempo'];
	$timeStart = strtotime($a);
	$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
	$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
// hitung selisih bulan
	$numBulan += date("m", $timeEnd) - date("m", $timeStart);
	echo $numBulan;?></td>
                                    <td><?=$u['tanggal_akad'];?></td>
                                    <td><?=$u['tgl_jatuh_tempo'];?></td>
                                    <td><?php
if ($u['nilai_akad'] <= 50000000) {
		$rate = 1.75;
	} else {
		$rate = 1.50;
	}
	;
	echo $rate . "%";?></td>
                                    <td><?php
if ($u['nilai_akad'] <= 50000000) {
		$rate = 0.0175;
	} else {
		$rate = 0.015;
	}
	$c = $u['nilai_akad'];
	$a = $u['tanggal_akad'];
	$b = $u['tgl_jatuh_tempo'];
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
	echo "" . number_format($ijp, 0, ".", ".");?></td>
                                    <td><?php echo " " ?></td>
                                    <td><?php echo " " ?>
                                    </td>
                                    <td><?=$u['nomor_penjaminan'];?></td>
                                    <td><?php
$date1 = $u['tanggal_akad'];
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
                                    <td><?php $nilai_jamin = ((int) $u['nilai_akad']) * 0.75;
	$a = $u['tanggal_akad'];
	$b = $u['tgl_jatuh_tempo'];
	$timeStart = strtotime($a);
	$timeEnd = strtotime($b);
	// Menambah bulan ini + semua bulan pada tahun sebelumnya
	$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
	// hitung selisih bulan
	$numBulan += date("m", $timeEnd) - date("m", $timeStart);

	echo "IDR&nbsp" . number_format($taksasi = ($nilai_jamin / $numBulan * $diff), 0, ".", ".")?>
                                    </td>
                                    <td><?php echo "IDR&nbsp" . number_format($nilai_jamin - $taksasi, 0, ".", ".") ?>
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
        </div>
    </div>
</div>

</div>