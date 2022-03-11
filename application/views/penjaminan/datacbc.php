<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title . " Konsumtif";?></h1>
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
                                                    class="badge badge-danger">Upload Dokumen</a>
                                                &nbsp;
                                                <a href="<?=base_url("casebc/CBCedit/");?><?=$c['CBCid'];?>"
                                                    class=" badge badge-warning">Edit</a>
                                                &nbsp;
                                                <a href="<?=base_url("casebc/CBCberkas/");?><?=$c['CBCid'];?>"
                                                    class=" badge badge-info">Berkas</a>
                                                <?php if ($c['CBCstatus'] == 4) {?>
                                                &nbsp;
                                                <a href="<?=base_url("Direktur/CBCsp2k/");?><?=$c['CBCid'];?>"
                                                    class="badge badge-success">Download SP2K</a>
                                                <?php }?>
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
                                                        <h4 class="modal-title">Upload Dokumen Terjamin</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <?php echo form_open_multipart(base_url("casebc/uploadcbc/") . $c['CBCid']); ?>
                                                        <input type='file' name='userfile' size='20' />

                                                        <br>
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="doc_lengkap" id="doc_lengkap" checked>
                                                        <br>
                                                        <label class="form-check-label" for="doc_lengkap">
                                                            Sudah Lengkap
                                                        </label>
                                                        <br>
                                                        <br>
                                                        <input type='submit' name='submit' value='upload' />
                                                        </form>
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
                                    <!-- Produktif -->
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                                    class="badge badge-danger">Upload Dokumen</a>
                                                &nbsp;
                                                <a href="<?=base_url("casebc/CBCPedit/");?><?=$c['CBCPid'];?>"
                                                    class=" badge badge-warning">Edit</a>
                                                &nbsp;
                                                <a href="<?=base_url("casebc/CBCPberkas/");?><?=$c['CBCPid'];?>"
                                                    class=" badge badge-info">Berkas</a>
                                                    <?php if ($c['CBCPstatus'] == 4) {?>
                                                &nbsp;
                                                <a href="<?=base_url("Direktur/CBCPsp2k/");?><?=$c['CBCPid'];?>"
                                                    class=" badge badge-success">Download SP2K</a>
                                                <?php }?>

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
                                                        <h4 class="modal-title">Upload Dokumen Terjamin</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <?php echo form_open_multipart(base_url("casebc/uploadcbcp/") . $c['CBCPid']); ?>
                                                        <input type='file' name='userfile'/>

                                                        <br>
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="doc_lengkap" id="doc_lengkap" checked>
                                                        <br>
                                                        <label class="form-check-label" for="doc_lengkap">
                                                            Sudah Lengkap
                                                        </label>
                                                        <br>
                                                        <br>
                                                        <input type='submit' name='submit' value='upload' />
                                                        </form>
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