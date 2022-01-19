<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div class="row">

				<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">Case By Case</div>
                                <br>
                                <div class="h5 mb-0 text-gray-800">  <?php if ($cbc['CBCidhasil'] == 0) {
    echo "Tidak ada Case by Case Konsumtif yang perlu di Approve!";
} else {

    echo '<span style="color:red;font-weight:bold;">' . $cbc['CBCidhasil'] . "</span> Case by Case Konsumtif menunggu untuk di Approve ";
}

if ($cbcp['CBCPidhasil'] == 0) {
    echo "<br><br>Tidak ada Case by Case Produktif yang perlu di Approve!";
} else {
    echo '<br><br><span style="color:red;font-weight:bold;">' . $cbcp['CBCPidhasil'] . '</span> Case by Case Produktif menunggu untuk di Approve ';
}
;
?></div>
<br>
							</div>
						</div>
					</div>
<!--end box 1 -->

<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">KUR</div>
                                <br>
                                <div class="h5 mb-0 text-gray-800">      <?php
$ijphasil = 0;
foreach ($kur as $u) {
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

    $ijphasil += $ijp;
}
echo "Rp." . number_format($ijphasil, 0, ".", ".");

?></div>
<br>
							</div>
						</div>
					</div>
<!-- end box 2 -->
	<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">KLAIM</div>
                                <br>
                                <div class="h5 mb-0 text-gray-800">   <?php

foreach ($klaim as $u) {
    if ($u['status'] == 0) {
        echo 'Sebanyak <span style="color:red;font-weight:bold;">' . $u['idKlaim'] . '</span> terjamin yang masih Pending, dengan nominal klaim sebesar ' . "Rp." . number_format($u['nominal_klaim'], 0, ".", ".");
    } elseif ($u['status'] == 1) {
        echo '<br><br>Sebanyak <span style="color:red;font-weight:bold;">' . $u['idKlaim'] . '</span> terjamin yang telah di Tolak.';
    } elseif ($u['status'] == 2) {
        echo '<br><br>Sebanyak <span style="color:red;font-weight:bold;">' . $u['idKlaim'] . '</span> terjamin yang telah di Bayar, dengan nominal klaim sebesar ' . "Rp." . number_format($u['nominal_klaim'], 0, ".", ".");
    }
}
?></div>
<br>
							</div>
						</div>
					</div>
<!--end box 3 -->
<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">SUBROGASI</div>
                                <br>
                                <div class="h5 mb-0 text-gray-800">    <?php
foreach ($subrogasi as $u) {
    if ($u['subproduk'] == "KONSUMTIF") {
        echo 'Sebanyak <span style="color:red;font-weight:bold;">' . $u['idSubro'] . '</span> Terjamin untuk produk ' . $u['subproduk'];
    } elseif ($u['subproduk'] == "PRODUKTIF") {
        echo '<br><br>Sebanyak <span style="color:red;font-weight:bold;">' . $u['idSubro'] . '</span> Terjamin untuk produk ' . $u['subproduk'];
    } elseif ($u['subproduk'] == "PRODUKTIF KUR") {
        echo '<br><br>Sebanyak <span style="color:red;font-weight:bold;">' . $u['idSubro'] . '</span> Terjamin untuk produk ' . $u['subproduk'];
    } else {
        echo '<br><br>Sebanyak <span style="color:red;font-weight:bold;">' . $u['idSubro'] . '</span> Terjamin untuk produk yang tidak tertulis';
    }
}
?></div>
<br>
							</div>
						</div>
					</div>
<!--end box 4 -->
<div class="col-xl-3 mb-30">
					<div class="card-box height-100-p widget-style1">
						<div class="d-flex flex-wrap align-items-center">
							</div>
							<div class="widget-data">
								<div class="h4 mb-0">Conditional Automatic Cover</div>
                                <br>
                                <div class="h5 mb-0 text-gray-800"> <?php

foreach ($penjaminan as $u) {
    if ($u['status'] == 0) {

        echo 'Sebanyak <span style="color:red;font-weight:bold;">' . $u['DJPid'] . '</span> Sertifikat, Belum di Cetak';

    } elseif ($u['status'] == 1) {

        echo '<br><br>Sebanyak <span style="color:red;font-weight:bold;">' . $u['DJPid'] . '</span> Sertifikat, Telah di Cetak';

    }
}

?></div>
<br>
							</div>
						</div>
					</div>
<!--end box 5 -->


<!-- end row -->
				</div>


</div>
    </div>
</div>
</div>

</div>