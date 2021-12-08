<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <!--

            <div><?=validation_errors()?></div>
          
            <?=form_open('Nasabah/input', ['class' => 'form-horizontal'])?>
          <form role="form" class="form-horizontal">
 -->

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
                                    <h5 class="card-header">DATA SUBROGASI</h5>
                                    <br>
                                    <br>
                                    <form action="<?php echo site_url('data_klaim/index'); ?>" method="post">
                                        <div class="col-lg ">
                                            <label class="col-sm-1 col-form-label">Tanggal Masuk</label>
                                            <input type="date" class="" name="keyword" placeholder="">
                                            <input type="submit" value="Cari" />
                                        </div>
                                    </form>
                                    <br>
                                    <div class="col-lg">
                                        <label class="col-sm-1"></label>
                                        <?php if (empty($flag)) {
	?>
                                        <td> <a href="<?=base_url('data_klaim/cetak');?>"
                                                class="btn btn-primary">EXPORT</a></td>

                                        <?php } else {}?>
                                    </div>
                                    <br>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="150%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th class="header">No.</th>
                                                        <th class="header">Tgl Bayar Klaim</th>
                                                        <th class="header">Cabang/Capem/Kedai</th>
                                                        <th class="header">Produk</th>
                                                        <th class="header">Terjamin</th>
                                                        <th class="header">Plafond</th>
                                                        <th class="header">Nilai Jaminan</th>
                                                        <th class="header">Coverage</th>
                                                        <th class="header"> Nominal Klaim</th>
                                                        <th class="header">Status</th>
                                                    </tr>

                                                </thead>
                                                <tbody>

                                                    <?php
$no = 1;
foreach ($table as $u) {
	?>
                                                    <tr>

                                                        <td><?php echo $no ?></td>
                                                        <td><?php echo $u->sub_tglbayarklaim ?></td>
                                                        <td><?php echo $u->subPPnama ?></td>
                                                        <td><?php echo $u->subproduk ?></td>
                                                        <td><?php echo $u->subnmterjamin ?></td>
                                                        <td><?php echo $u->subplafond ?></td>
                                                        <td><?php echo $u->subnilai_jaminan ?></td>
                                                        <td><?php echo $u->subcoverage ?></td>
                                                        <td><?php echo $u->subnominal_klaim ?></td>
                                                        <td><?php echo $u->sub_status ?></td>

                                                        <!--
                                                <td>
                                                <?php
if ($u->status == 0) {
		echo "Pending";
	} else {
		echo "Sudah Cetak";
	}
	?>
                                                </td>
 -->
                                                        <?php if (!empty($flag)) {
		?> <td> <a href="<?=base_url('data_klaim/cetak/' . $u->tglmasuk);?>" class="btn btn-primary">EXPORT</a></td> <?php
} else {}?>

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
            </div>
        </div>
    </div>


    <!--               </form> -->



    <!-- BATAS KONTEN -->



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

</div>
</div>
</div>

</div>