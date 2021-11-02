<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
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

                                                <a href="<?=base_url("casebc/CBCpdf/");?><?=$c['CBCid'];?>"
                                                    class=" badge badge-primary">Detail</a>
                                                &nbsp;
                                                <a href="#" data-toggle="modal" data-target="#modalcbc"
                                                    class="badge badge-info">Berkas</a>
                                            </td>
                                            <td>
                                                <?php

if ($c['CBCstatus'] == 0) {
	echo "Dokumen Tidak Lengkap!";
} else if ($c['CBCstatus'] == 1) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCstatus'] == 2) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCstatus'] == 3) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCstatus'] == 4) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCstatus'] == 5) {
	echo "Ditolak!";
}
?>
                                            </td>
                                        </tr>

                                        <!-- Modal Upload Doc -->
                                        <div class="modal fade" id="modalcbc" role="dialog">
                                            <div class="modal-dialog modal-sm vertical-align-center">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Berkas Terjamin</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?php
{
	$query = "SELECT `tblcbc`.*, `tblupload`.*
     FROM `tblcbc` JOIN `tblupload`
    ON `tblcbc`.`CBCid` = `tblupload`.`CBCid`

";
	$upld = $this->db->query($query)->result_array();
}

foreach ($upld as $u) {
	?>
                                                        <a
                                                            href="../../uploads/<?=$u['UPLDnama']?>"><?=$u['UPLDnama']?></a><br>
                                                        <?php
}
?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-default">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->
                                        <?php $i++;?>
                                        <?php endforeach;?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Produktif -->
            <h1 class="h3 mb-4 text-gray-800"><?=$title . " Produktif";?></h1>
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
                                        <?php foreach ($cbcp->result_array() as $c): ?>
                                        <tr>
                                            <th scope="row"><?=$i;?></th>
                                            <td><?=$c['TRJMnama'];?></td>
                                            <td><?=$c['CBCPnomormemo'];?></td>
                                            <td><?=$c['CBCPsuratpermohonan'];?></td>
                                            <td>
                                                <a href="<?=base_url("casebc/CBCPpdf/");?><?=$c['CBCPid'];?>"
                                                    class=" badge badge-primary">Detail</a>
                                                &nbsp;
                                                <a href="#" data-toggle="modal" data-target="#modalcbcp"
                                                    class="badge badge-info">Berkas</a>

                                            </td>
                                            <td>
                                                <?php

if ($c['CBCPstatus'] == 0) {
	echo "Dokumen Tidak Lengkap!";
} else if ($c['CBCPstatus'] == 1) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCPstatus'] == 2) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCPstatus'] == 3) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCPstatus'] == 4) {
	echo "Dokumen Lengkap!";
} else if ($c['CBCPstatus'] == 5) {
	echo "Ditolak!";
}
?>
                                            </td>
                                        </tr>

                                        <!-- Modal Upload Doc -->
                                        <div class="modal fade" id="modalcbcp" role="dialog">
                                            <div class="modal-dialog modal-sm vertical-align-center">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Bekas Terjamin</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- Disini -->
                                                        <?php $query = "SELECT `tblcbcp`.*, `tbluploadcbcp`.*
         FROM `tblcbcp` JOIN `tbluploadcbcp`
        ON `tblcbcp`.`CBCPid` = `tbluploadcbcp`.`CBCPid`

";
$upld = $this->db->query($query)->result_array();

foreach ($upld as $u) {
	?>
                                                        <a
                                                            href="../../uploads/<?=$u['UPLDPnama']?>"><?=$u['UPLDPnama']?></a><br>
                                                        <?php
}
?>


                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" data-dismiss="modal"
                                                            class="btn btn-default">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Modal -->

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
    </div>
</div>

</div>