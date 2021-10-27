<div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>


          <div><?=validation_errors()?></div>
          <div><?=$this->session->flashdata('error')?></div>
          <?=form_open('Accrual_baru/triggeredExport', ['class' => 'form-horizontal'])?>
          <form role="form" class="form-horizontal">
              <input type="hidden" id="table" name="table" value="<?php echo htmlspecialchars(json_encode($table)) ?>" />
              <input type="hidden" id="bulan" name="bulan" value="<?php echo htmlspecialchars(json_encode($bulanmax)) ?>" />
              <input type="hidden" id="click" name="click" value='1' />

              <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />
          </form>

          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
                  <div class="card-body">
                      <div class="table-responsive">

                          <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                              <thead class="text-dark">
                                  <tr>
                                      <th width="5%">No</th>
                                      <th>Bank x</th>
                                      <th>NOMOR SERTIFIKAT</th>
                                      <th>NAMA TERJAMIN</th>
                                      <th>Tanggal Akad</th>
                                      <th>Jangka Waktu (BULAN) </th>
                                      <th>Tanggal Selesai</th>
                                      <th>Premi</th>
                                      <th>Angsuran / Bulan </th>
                                      <?php
$tglawal = date('Y-01');

foreach ($bulanmax as $u) {

    $date1 = $tglawal;
    $date2 = $u->DJPDtanggalakhir;

    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);

    $year1 = date('Y', $ts1);
    $year2 = date('Y', $ts2);

    $month1 = date('m', $ts1);
    $month2 = date('m', $ts2);

    $diff = (($year2 - $year1) * 12) + ($month2 - $month1);

    $flagtanggal = $u->DJPDjangkawaktu + $diff;
    for ($i = 0; $i <= $flagtanggal; $i++) {

        $tglakhir = date('Y-M', strtotime('+ ' . $i . 'month', strtotime($tglawal)));
        ?><th> <?php echo $tglakhir; ?> </th><?php

    }

}?>
                                  </tr>
                              </thead>
                              <tbody class="text-dark">
                              <?php $no = 1;
foreach ($table as $u) {?>
                              <tr>

                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $u->PPnama; ?> </td>
                                    <td><?php echo $u->DJPnoreg; ?> </td>
                                    <td><?php echo $u->TRJMnama; ?></td>
                                    <td><?php echo $u->DJPDtanggalakad; ?></td>
                                    <td><?php echo $u->DJPDjangkawaktu; ?></td>
                                    <td><?php echo $u->DJPDtanggalakhir; ?></td>
                                    <td><?php echo "Rp." . number_format($u->DJPDimbaljasa, 0, ".", "."); ?></td>
                                    <td><?php echo "Rp." . number_format($angsuran = (int) ($u->DJPDimbaljasa / $u->DJPDjangkawaktu), 0, ".", "."); ?></td>
                                    <?php
$tglawal = date('Y-01');
    for ($i = 0; $i <= $u->DJPDjangkawaktu; $i++) {
        $time = strtotime($u->DJPtanggalcetak);
        $newtime = date('Y-M', $time);
        $tglakhir = date('Y-M', strtotime('+ ' . $i . 'month', strtotime($tglawal)));

        if ($newtime == $tglakhir) {

            for ($i = 0; $i <= $u->DJPDjangkawaktu; $i++) {?>
                                    <td><?php echo "Rp." . number_format($angsuran, 0, ".", "."); ?></td>
                                    <?php }} else {
            ?><td bgcolor="#FFC0CB"> -- </td> <?php

        }}?>
                                </tr>
                                <?php $no++;}?>

                              </tbody>

                          </table>





                      <!-- BATAS  -->





                      <div><?=validation_errors()?></div>
                      <div><?=$this->session->flashdata('error')?></div>
                      <?=form_open('Accrual_baru', ['class' => 'form-horizontal'])?>
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
                                                      <option value=01 <?php echo set_select('Month', '01'); ?>>Januari
                                                      </option>
                                                      <option value=02 <?php echo set_select('Month', '02'); ?>>Februari
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
                                                      <option value=08 <?php echo set_select('Month', '08'); ?>>Agustus
                                                      </option>
                                                      <option value=09 <?php echo set_select('Month', '09'); ?>>
                                                          September</option>
                                                      <option value=10 <?php echo set_select('Month', '10'); ?>>Oktober
                                                      </option>
                                                      <option value=11 <?php echo set_select('Month', '11'); ?>>November
                                                      </option>
                                                      <option value=12 <?php echo set_select('Month', '12'); ?>>Desember
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