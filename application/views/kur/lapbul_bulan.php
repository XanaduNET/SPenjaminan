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

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <?=form_open_multipart('kur/aksi')?>
                            <div class="form-row">
                                <div class="col-2">
                                    <input type="file" class="form-control-file" id="file" name="file"
                                        accept=".xlsx,.xls">
                                </div>
                                <br>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Import</button>
                                </div>
                            </div>
                            <?=form_close();?>
                            <br>
                            <br>
                            <div><?=validation_errors()?></div>
                            <?=form_open('Kur/triggeredExport', ['class' => 'form-horizontal'])?>
                            <form role="form" class="form-horizontal">
                                <input type="hidden" id="datakur" name="datakur"
                                    value="<?php echo htmlspecialchars(json_encode($dataKur)) ?>" />
                                <input type="hidden" id="click" name="click" value='1' />

                                <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />
                            </form>


                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card body">
                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Nomor Akad</th>
                                        <th scope="col">Tanggal Akad</th>
                                        <th scope="col">Tanggal Jatuh Tempo</th>
                                        <th scope="col">Nilai Akad</th>
                                        <th scope="col">Nomor Penjaminan</th>
                                        <th scope="col">Kode Cabang</th>
                                        <th scope="col">Nama Cabang</th>
                                        <th scope="col">Nilai Dijamin</th>
                                        <th scope="col">JW(Bln)</th>
                                        <th scope="col">JW(Thn)</th>
                                        <th scope="col">Tahun Pertama</th>
                                        <th scope="col">Tahun Kedua</th>
                                        <th scope="col">Tahun Ketiga</th>
                                        <th scope="col">Tahun Keempat</th>
                                        <th scope="col">Tahun Kelima</th>
                                        <th scope="col">Rate</th>
                                        <th scope="col">Total IJP</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;?>
                                    <?php foreach ($dataKur as $p): ?>

                                    <tr>
                                        <th scope="row"><?=$i;?></th>
                                        <td><?=$p['nama'];?></td>
                                        <td><?=$p['alamat'];?></td>
                                        <td><?=$p['nomor_akad'];?></td>
                                        <td><?=$p['tanggal_akad'];?></td>
                                        <td><?=$p['tgl_jatuh_tempo'];?></td>
                                        <td><?="" . number_format($p['nilai_akad'], 0, ".", ".");?></td>
                                        <td><?=$p['nomor_penjaminan'];?></td>
                                        <td><?=$p['kode_cabang'];?></td>
                                        <td></td>
                                        <td><?="" . number_format(((int) $p['nilai_akad']) * 0.75, 0, ".", ".");?></td>

                                        <td><?php
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart)) * 12;
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
echo $numBulan;?></td>
                                        <td><?php
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
echo $numBulan;?></td>
                                        <td><?php
$c = $p['nilai_akad'];
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
$hasil = (int) (($numBulan / $numBulan) * $c);
echo "" . number_format($hasil, 0, ".", ".");?></td>
                                        <td><?php
$c = $p['nilai_akad'];
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
$hasil = (int) ((($numBulan - 1) / $numBulan) * $c);
echo "" . number_format($hasil, 0, ".", ".");?></td>
                                        <td><?php
$c = $p['nilai_akad'];
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
$hasil = (int) ((($numBulan - 2) / $numBulan) * $c);
echo "" . number_format($hasil, 0, ".", ".");?></td>
                                        <td><?php
$c = $p['nilai_akad'];
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
$hasil = (int) ((($numBulan - 3) / $numBulan) * $c);
if ($hasil <= 0) {
    echo "-";
} else {
    echo "" . number_format($hasil, 0, ".", ".");}?></td>
                                        <td><?php
$c = $p['nilai_akad'];
$a = $p['tanggal_akad'];
$b = $p['tgl_jatuh_tempo'];
$timeStart = strtotime($a);
$timeEnd = strtotime($b);
// Menambah bulan ini + semua bulan pada tahun sebelumnya
$numBulan = (date("Y", $timeEnd) - date("Y", $timeStart));
// hitung selisih bulan
$numBulan += date("m", $timeEnd) - date("m", $timeStart);
$hasil = (int) ((($numBulan - 4) / $numBulan) * $c);

if ($hasil <= 0) {
    echo "-";
} else {
    echo "" . number_format($hasil, 0, ".", ".");}?></td>

                                        <td><?php
if ($p['nilai_akad'] <= 50000000) {
    $rate = 1.75;
} else {
    $rate = 1.50;
}
;
echo $rate . "%";?></td>
                                        <td><?php
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
echo "" . number_format($ijp, 0, ".", ".");?></td>
                                    </tr>
                                    <?php $i++;?>
                                    <?php endforeach;?>
                                </tbody>


                            </table>

                        </div>



                    </div>
                    <br>
                    <br>

                    <!-- Filter Bulan -->

                    <div><?=validation_errors()?></div>

                    <?=form_open('Kur/lapbul_bulan', ['class' => 'form-horizontal'])?>
                    <form role="form" class="form-horizontal">
                        <select id="Month" name="Month">
                            <option selected="selected" value="--">Pilih Bulan</option>
                            <option value=Januari <?php echo set_select('Month', 'Januari'); ?>>Januari
                            </option>
                            <option value=Februari <?php echo set_select('Month', 'Februari'); ?>>Februari
                            </option>
                            <option value=Maret <?php echo set_select('Month', 'Maret'); ?>>Maret
                            </option>
                            <option value=April <?php echo set_select('Month', 'April'); ?>>April
                            </option>
                            <option value=Mei <?php echo set_select('Month', 'Mei'); ?>>Mei
                            </option>
                            <option value=Juni <?php echo set_select('Month', 'Juni'); ?>>Juni
                            </option>
                            <option value=Juli <?php echo set_select('Month', 'Juli'); ?>>Juli
                            </option>
                            <option value=Agustus <?php echo set_select('Month', 'Agustus'); ?>>Agustus
                            </option>
                            <option value=September <?php echo set_select('Month', 'September'); ?>>
                                September</option>
                            <option value=Oktober <?php echo set_select('Month', 'Oktober'); ?>>Oktober
                            </option>
                            <option value=November <?php echo set_select('Month', 'November'); ?>>November
                            </option>
                            <option value=Desember <?php echo set_select('Month', 'Desember'); ?>>Desember
                            </option>

                        </select>
                        <input name="Kirim" type="submit" class="btn btn-primary" />
                    </form>

                    <!-- End -->

                    <br>
                    <br>
                </div>

            </div>
        </div>
    </div>
</div>

</div>