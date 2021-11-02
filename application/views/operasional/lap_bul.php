<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <!--
            <div><?=validation_errors()?></div>
            <div><?=$this->session->flashdata('error')?></div>
            <?=form_open('Nasabah/input', ['class' => 'form-horizontal'])?>
          <form role="form" class="form-horizontal">
 -->
            <div class="table-responsive">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Data</h1>
                    <!--  <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="date" name="DJPnoreg" class="form-control" value="<?=date('Y-m-d')?>" readonly>
                    </div>
                    <input style="width: 100%;" type="hidden" name="DJPid" class="form-control"
                        value="<?php echo $this->uri->segment(2) ?> " readonly>

                    <div class="container-fluid">
                        <div class="card-body">


                            <!-- ============================================================== -->
                            <!-- basic table  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                    <div>

                                        <a href="<?php echo base_url('lap_bul_excel/export_excel') ?>"><i
                                                class="fas fa-file-excel" style="font-size:36px"></i></i></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th rowspan="2" class="header">No.</th>
                                                        <th rowspan="2" class="header">CABANG/CAPEM/KEDAI</th>
                                                        <th rowspan="2" class="header">No. SERTIFIKAT</th>
                                                        <th rowspan="2" class="header">Tgl SERTIFIKAT</th>
                                                        <th rowspan="2" class="header">JLH TERJAMIN</th>
                                                        <th rowspan="2" class="header">NAMA TERJAMIN</th>
                                                        <th rowspan="2" class="header">COVERAGE</th>
                                                        <th rowspan="2" class="header">PLAFOND</th>
                                                        <th rowspan="2" class="header">JML JAMINAN</th>
                                                        <th colspan="2">JK. WAKTU</th>
                                                        <th rowspan="2" class="header">BULAN</th>
                                                        <th rowspan="2" class="header">TARIF</th>
                                                        <th colspan="3" class="header">BIAYA PENJAMINAN</th>
                                                        <th rowspan="2" class="header">TOTAL</th>
                                                        <th rowspan="2" class="header">FEE BANK</th>
                                                        <th rowspan="2" class="header">TOTAL PENDAPATAN</th>
                                                        <th rowspan="2" class="header">IJP DIREKENING</th>
                                                        <th rowspan="2" class="header">SELISIH</th>
                                                        <th rowspan="2" class="header">KETERANGAN</th>
                                                    </tr>
                                                    <tr>
                                                        <th>AWAL</th>
                                                        <th>AKHIR</th>


                                                        <th class="header">IJP</th>
                                                        <th class="header">ADM</th>
                                                        <th class="header">MATERAI</th>

                                                    </tr>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
$no = 1;
foreach ($table as $u) {
	?>
                                                    <tr>
                                                        <td><?php echo $no ?></td>
                                                        <td><?php echo $u->PPnama ?></td>
                                                        <td><?php echo $u->DJPnoreg ?></td>
                                                        <td><?php echo $u->DJPtanggaldeklarasi ?></td>
                                                        <td><?php echo $u->DJPjumlahpk ?></td>
                                                        <td><?php echo $u->TRJMnama ?></td>
                                                        <td><?php echo $u->DJPDcoverage ?></td>
                                                        <td><?php echo $u->DJPDplafondkredit ?></td>
                                                        <td><?php echo $u->DJPnilaipenjaminan ?></td>
                                                        <td><?php echo $u->DJPDtanggalawal ?></td>
                                                        <td><?php echo $u->DJPDtanggalakhir ?></td>
                                                        <td><?php echo $u->DJPDjangkawaktu ?></td>
                                                        <td><?php echo $u->DJPDrate ?></td>
                                                        <td><?php echo $u->DJPjumlahimbaljasa ?></td>
                                                        <td><?php echo $u->DJPfeeadmin ?></td>
                                                        <td><?php echo $u->DJPfeematerai ?></td>
                                                        <td></td>
                                                        <td><?php echo $u->DJPfeebank ?></td>
                                                        <td><?php echo $u->DJPjumlahbiaya ?></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>

                                                        <!--                                                     <td>
                                                      <a href="<?=base_url('index.php/detailtable/index/' . $u->DJPid)?>"  class="fa fa-eye"></a>
                                                      <a href="<?=base_url('index.php/detailtable/index/' . $u->DJPid);?>" class="fa fa-eye"></a>


                                                    </td> -->
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
                            <!-- ============================================================== -->
                            <!-- end basic table  -->
                            <!-- ============================================================== -->
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!--               </form> -->



        <!-- BATAS KONTEN -->


        <!-- Footer -->

        <!-- End of Footer -->

    </div>
</div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript-->

<script type="">
    function sum() {
    var x = document.getElementById('num1').value;
   /// x = parseFloat(x);

    var result = new Date(new Date().getTime('num2')+(x*24*60*60*1000));

  /*  var y = document.getElementById('num2').value;
    y = parseFloat(y);
*/
    document.getElementById('result').value = result;
  }
</script>

<script>
function myFunction() {
    var x = document.getElementById("myText").value;
    document.getElementById("demo").innerHTML = x;
}
</script>

<script type="text/javascript">
function HitungPersen() {
    plafond = document.getElementById("getplafond").value;
    coverage = document.getElementById("getcoverage").value;
    plafond2 = parseInt(plafond);
    coverage2 = parseInt(coverage);
    nilaipnjm = (coverage2 / 100) * plafond2;
    document.getElementById("nlipnjm").value = nilaipnjm;
}
</script>


<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>

</div>
</div>
</div>

</div>