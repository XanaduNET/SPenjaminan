<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title . " Konsumtif";?></h1>

<script>

$(document).ready(function() {
    $('table.display').DataTable();
});


</script>

    <div class="row">
        <div class="col-lg">

            <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
                <?=validation_errors();?>
            </div>
            <?php endif;?>



            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Terjamin</th>
                                    <th scope="col">Nomor Memo</th>
                                    <th scope="col">Surat Permohonan</th>
                                    <th scope="col">Aksi</th>
                                    <th scope="col">Status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($cbc->result_array() as $c): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$c['TRJMnama'];?></td>
                                    <td><?=$c['CBCnomormemo'];?></td>
                                    <td><?=$c['CBCsuratpermohonan'];?></td>
                                    <td>

                                        <a href="<?=base_url("Legal/cbcdetail/");?><?=$c['CBCid'];?>"
                                            class=" badge badge-primary">Detail</a>
                                            &nbsp;
            <a href="<?=base_url("casebc/CBCberkas/");?><?=$c['CBCid'];?>"
                                            class=" badge badge-info">Berkas</a>
                                    </td>
                                    <td>
                                    <?php

if ($c['CBCstatus'] == 0) {
    echo "Dokumen Tidak Lengkap!";
} else if ($c['CBCstatus'] == 1) {
    echo "Dokumen Lengkap, Belum Di Approve Manajemen Resiko";
} else if ($c['CBCstatus'] == 2) {
    echo "Dokumen Lengkap, Belum Di Approve";
} else if ($c['CBCstatus'] == 3) {
    echo "Dokumen Lengkap, Dilanjutkan Ke Direktur";
} else if ($c['CBCstatus'] == 4) {
    echo "Dokumen Lengkap, Diterima";
} else if ($c['CBCstatus'] == 5) {
    echo "Ditolak!";
}
?>
                                    </td>
                                    </tr>

                                <?php $i++;?>
                                <?php endforeach;?>
                            </tbody>


                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->