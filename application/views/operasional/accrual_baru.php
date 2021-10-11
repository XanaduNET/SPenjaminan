<div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
          <div><?=validation_errors()?></div>
          <div><?=$this->session->flashdata('error')?></div>
          <?=form_open('Accrual/isinanti', ['class' => 'form-horizontal'])?>
          <form role="form" class="form-horizontal">
              <input type="hidden" id="table" name="table"
                  value="<?php echo htmlspecialchars(json_encode($table)) ?>" />
              <input type="hidden" id="bulan" name="bulan"
                  value="<?php echo htmlspecialchars(json_encode($bulan)) ?>" />    
              <input type="hidden" id="click" name="click" value='1' />
              ps -e | grep [s]sh-agent

              <input type="submit" class="btn btn-primary" id="export" name="export" value="EXPORT" />
          </form>

          
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
              <div class="card">
                  <div class="card-body">
                      <div class="table-responsive">

                          <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                              <thead class="text-dark">
                                  <tr>
                                      <th>1. No</th>
                                      <th>2. Bank x</th>
                                      <th>3. NOMOR SERTIFIKAT</th>
                                      <th>4. NAMA TERJAMIN</th>
                                      <th>5. Tanggal Akad</th>
                                      <th>6. Jangka Waktu (BULAN) </th>
                                      <th>7. Tanggal Selesai</th>
                                      <th>8. Premi</th>
                                      <th>9. Angsuran / Bulan </th>
                                      <?php $no=1; 
                                      foreach  ($maxbulan as $u){ ?>
                                      <th> <?php echo $no; ?></th>
                                      <?php $no++; } ?>
                                  </tr>
                              </thead>
                              <tbody class="text-dark">
                              
                              <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <!-- looping disini menurut jangka waktu terbanyak dalam periode sertifikat -->
                                    <td>10</td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                    <td>6</td>
                                    <td>7</td>
                                    <td>8</td>
                                    <td>9</td>
                                    <td>10</td>
                                    <td>1</td>
                                    <!-- Endd looping-->
                                </tr>

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