<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
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

                                    <div>
                                        <form action="<?php echo site_url('table/index'); ?>" method="post">
                                            <input type="text" name="keyword" />
                                            <input type="submit" value="Search" />
                                        </form>
                                    </div>

                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%"
                                                cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Acuang Hitung IJP</th>
                                                        <th>Penerima Jaminan</th>
                                                        <th>Perjanjian Kerjasama</th>
                                                        <th>No. Registrasi</th>
                                                        <th>No. Seri Sartifikat</th>
                                                        <th>Penerima Jaminan</th>
                                                        <th>Alamat</th>
                                                        <th>No. Deklarasi</th>
                                                        <th>Tgl Deklarasi</th>
                                                        <th>Periode Sertifikat</th>
                                                        <th>Jenis Kredit</th>
                                                        <th>Status Penjaminan</th>
                                                        <th>Jenis Pengajuan</th>
                                                        <th>Tgl Verifikasi</th>
                                                        <th>Tgl Terbit</th>
                                                        <th> Cek Sertifikat </th>
                                                        <th rowspan="2">Sertifikat</th>
                                                        <th rowspan="2">Cetak DJP Baru</th>
                                                        <th rowspan="2">Cetak Verifikasi DJP</th>
                                                        <th>Aksi</th>
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
                                                        <td><?php echo $u->DJPacuanhitung ?></td>
                                                        <td><?php echo $u->GPPnama ?></td>
                                                        <td><?php echo $u->PKSno1 ?></td>
                                                        <td><?php echo $u->DJPnoreg ?></td>
                                                        <td><?php echo $u->DJPnoseri ?></td>
                                                        <td><?php echo $u->PPnama ?></td>
                                                        <td><?php echo $u->PPalamat ?></td>
                                                        <td><?php echo $u->DJPnodeklarasi ?></td>
                                                        <td><?php echo $u->DJPtanggaldeklarasi ?></td>
                                                        <td><?php echo $u->DJPperiode ?></td>
                                                        <td><?php echo $u->PKSjenis ?></td>
                                                        <td><?php echo $u->SPJnama ?></td>
                                                        <td><?php echo $u->JSPjenis ?></td>
                                                        <td><?php echo $u->DJPtanggalverif ?></td>
                                                        <td><?php echo $u->DJPtanggalcetak ?></td>
                                                        <td>
                                                            <center> <a
                                                                    href="<?=base_url('table/cekdata/' . $u->DJPid);?>"
                                                                    target='_blank'
                                                                    class="fa fa-check-square fa-2x"></a>
                                                                <a href="<?=base_url('table/reportpdf/' . $u->DJPid);?>"
                                                                    target='_blank'
                                                                    class="fa fa-check-square fa-2x"></a>
                                                            </center>
                                                        </td>


                                                        <td> <a href="<?=base_url('table/sertifikat/' . $u->DJPid);?>"
                                                                target='_blank' class="fa fa-print fa-2x"></a>
                                                        </td>
                                                        <td> <a href="<?=base_url('table/reportpdf/' . $u->DJPid);?>"
                                                                target='_blank' class="fa fa-print fa-2x"></a></td>
                                                        <td> <a href="<?=base_url('table/pdfdatadjp/' . $u->DJPid);?>"
                                                                target='_blank' class="fa fa-print fa-2x"></a></td>
                                                        <td>
                                                            <?php

	if ($u->status == 0) {

		?>
                                                            <a href="<?=base_url('table/edit/' . $u->DJPid . '/' . $u->OPKid);?>"
                                                                class="
                                                        badge badge-warning">edit</a>
                                                            <a href="<?=base_url('table/hapus/' . $u->DJPid);?>" class="
                                                        badge badge-danger">hapus</a>

                                                            <?php } else {

		echo '<span style="color:#FF0000;text-align:center;">Sudah&nbspTercetak,&nbspTidak&nbspBisa&nbspEdit / Hapus!</span>';
	}
	?>
                                                        </td>
                                                        <td>
                                                            <?php
if ($u->status == 0) {
		echo '<span class="badge badge-danger">Belum Cetak</span>';
	} else {
		echo '<span class="badge badge-success">Sudah Cetak</span>';
	}
	?>
                                                        </td>

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