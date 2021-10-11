<div class="container-fluid">

    <div class="card-body">
        <div class="form-group">
            <input type="date" name="DJPnoreg" class="form-control" value="<?=date('Y-m-d')?>" readonly>
        </div>
        <input style="width: 100%;" type="hidden" name="DJPid" class="form-control"
            value="<?php echo $this->uri->segment(2) ?> " readonly>

        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">

                    <div class="col-lg">
                        <div class="card">
                            <h5 class="card-header">DATA</h5>
<br>
<br>
                                    <form action="<?php echo site_url('data_klaim/index'); ?>" method = "post">
                                    <div class="col-lg ">
                                    <label class="col-sm-1 col-form-label">Tanggal Masuk</label>
                                    <input  type="date" class="" name="keyword" placeholder="">
                                    <input type="submit" value = "Cari" />
                                   </div>
                                    </form>
     <br>
        <div class="col-lg">
        <label class="col-sm-1"></label>
        <?php if (empty($flag)) {
    ?>
           <td> <a href="<?=base_url('data_klaim/cetak');?>" class="btn btn-primary" >EXPORT SEMUA</a>
            <?=form_open('data_klaim/triggeredExport', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
            <input type="hidden" id="table" name="table" value="<?php echo htmlspecialchars(json_encode($table)) ?>" />
            <input type="hidden" id="click" name="click" value='1' />
            <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT BULAN" />
            </form>


           </td>

        <?php } else {}?>
    </div>
    <br>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="150%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="header">No.</th>
                                                <th class="header">Tgl Masuk</th>
                                                <th class="header">Tgl Berkas Lengkap</th>
                                                <th class="header">Tanggal Bayar Klaim</th>
                                                <th class="header">Cabang/Capem/Kedai</th>
                                                <th class="header">Produk</th>
                                                <th class="header">Sertifikat</th>
                                                <th class="header">Terjamin</th>
                                                <th class="header">Plafond</th>
                                                <th class="header">Nilai Jaminan</th>
                                                <th class="header">Coverage</th>
                                                <th> Nominal Klaim</th>
                                                <th class="header">Subrogasi (RECOVERY)</th>
                                                <th class="header">Agunan</th>
                                                <th class="header">Taksasi Agunan</th>
                                                <th class="header">JW Kredit(bln)</th>
                                                <th class="header">Mulai</th>
                                                <th class="header">Selesai</th>
                                                <th class="header">Sebab Macet</th>
                                                <th class="header">Sektor</th>
                                                <th>Alamat</th>
                                                <th>COVER REAS</th>
                                                <th>Klaim Dibayar Reas</th>
                                                <th>Broker Reas</th>
                                                <th>Status</th>

                                            </tr>

                                        </thead>
                                        <tbody>

                                        <?php
$no = 1;
foreach ($table as $u) {
    ?>
                                            <tr>

                                                <td><?php echo $no ?></td>
                                                <td><?php echo $u->tglmasuk ?></td>
                                                <td><?php echo $u->tglberkas ?></td>
                                                <td><?php echo $u->tglklaimbayar ?></td>
                                                <td><?php echo $u->PPnama ?></td>
                                                <td><?php echo $u->produk ?></td>
                                                <td><?php echo $u->sertifikat ?></td>
                                                <td><?php echo $u->nmterjamin ?></td>
                                                <td><?php echo $u->plafond ?></td>
                                                <td><?php echo $u->nilai_jaminan ?></td>
                                                <td><?php echo $u->coverage ?></td>
                                                <td><?php echo $u->nominal_klaim ?></td>
                                                <td><?php echo $u->subrogasi ?></td>
                                                <td><?php echo $u->agunan ?></td>
                                                <td><?php echo $u->taksasi_agunan ?></td>
                                                <td><?php echo $u->Jkwaktu ?></td>
                                                <td><?php echo $u->tglawal ?></td>
                                                <td><?php echo $u->tglakhir ?></td>
                                                <td><?php echo $u->macet ?></td>
                                                <td><?php echo $u->sektor ?></td>
                                                <td><?php echo $u->PPalamat ?></td>
                                                <td><?php echo $u->cover_reas ?></td>
                                                <td><?php echo $u->klaim_reas ?></td>
                                                <td><?php echo $u->broker ?></td>
                                                <td>
                                                <?php
if ($u->status == 0) {
        echo "Pending";
    } elseif ($u->status == 1) {
        echo "Tolak";
    } elseif ($u->status == 2) {
        echo "Bayar";
    } else {
        echo ("Data Tidak Ditemukan!");
    }
    ?>
                                                </td>

                                               <?php if (!empty($flag)) {
        ?> <td> <a href="<?=base_url('data_klaim/cetak/' . $u->tglmasuk);?>" class="btn btn-primary" >EXPORT</a></td> <?php
} else {}?>

                                            <?php
$no++;
}?>
                                            </tr>

                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<div><?=validation_errors()?></div>
<div><?=$this->session->flashdata('error')?></div>
<?=form_open('data_klaim', ['class' => 'form-horizontal'])?>
  <form role="form" class="form-horizontal">
    <div class="col-xl-4 col-md-7 mb-5">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="font-weight-bold text-success text-uppercase mb-1">
                                        <label> Tahun </label> <br>
                                   <!--   <input name="Tahunchecked[]" type="checkbox" value="semua" id="semua"
                                            class="checkedtahun" checked> Select All -->
                                        <br>

                                        <input name="Tahunchecked[]" type="checkbox" value="2015" id="01"
                                            class="checkedtahun"> 2015
                                        <br>
                                        <input name="Tahunchecked[]" type="checkbox" value="2016" id="02"
                                            class="checkedtahun"> 2016
                                        <br>
                                        <input name="Tahunchecked[]" type="checkbox" value="2017" id="03"
                                            class="checkedtahun"> 2017
                                        <br>
                                        <input name="Tahunchecked[]" type="checkbox" value="2018" id="04"
                                            class="checkedtahun"> 2018 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2019" id="05"
                                            class="checkedtahun"> 2019 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2020" id="06"
                                            class="checkedtahun"> 2020 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2021" id="07"
                                            class="checkedtahun"> 2021 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2022" id="08"
                                            class="checkedtahun"> 2022 <br>
                                            <input name="Tahunchecked[]" type="checkbox" value="2023" id="09"
                                            class="checkedtahun"> 2023 <br>
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
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <label> Bulan </label>
                                        <br>

                                <!--         <input name="Monthchecked" type="checkbox" value="semua" id="semua"
                                            class="Monthchecked" checked> Select All -->
                                        <br>

                                        <input name="Monthchecked[]" type="checkbox" value="01" id="01"
                                            class="checkedMonth"> Januari
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="02" id="02"
                                            class="checkedMonth"> Februari
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="03" id="03"
                                            class="checkedMonth"> Maret
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="04" id="04"
                                            class="checkedMonth"> April
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="05" id="05"
                                            class="checkedMonth"> Mei
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="06" id="06"
                                            class="checkedMonth"> Juni
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="07" id="07"
                                            class="checkedMonth"> Juli
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="08" id="08"
                                            class="checkedMonth"> Agustus
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="09" id="09"
                                            class="checkedMonth"> September
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="10" id="10"
                                            class="checkedMonth"> Oktober
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="11" id="11"
                                            class="checkedMonth"> November
                                        <br>
                                        <input name="Monthchecked[]" type="checkbox" value="12" id="12"
                                            class="checkedMonth"> Desember
                                        <br>
                                    </div>

                                </div>
                                <div class="col-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                <div class="col-xl-4 col-md-7 mb-5">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        <label> Status </label>
                                        <br>
                                        <input name="semuaStatus" type="checkbox" id="Semua" class="semuaStatus" value="semua"<?php echo set_checkbox('semuaStatus', 'semua'); ?> > Select
                                    All
                                        <br>
                                        <input name="Statuschecked[]" type="checkbox" value="0" id="0"
                                            class="checkedStatus"> Pending
                                        <br>
                                        <input name="Statuschecked[]" type="checkbox" value="1" id="1"
                                            class="checkedStatus"> Tolak
                                        <br>
                                        <input name="Statuschecked[]" type="checkbox" value="2" id="2"
                                            class="checkedStatus"> Bayar
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



<!-- -->

<script>

                $('input.semuaStatus').on('change', function() {
                    $('input.checkedStatus').not(this).prop('checked', false);
                });
                $('input.checkedStatus').on('change', function() {
                    $('input.semuaStatus').not(this).prop('checked', false);
                });
                </script>



<!-- BATAS KONTEN -->

</body>

</html>