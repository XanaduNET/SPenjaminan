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
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">User Request</th>
                                    <th scope="col">User Approval</th>
                                    <th scope="col">Nomor Registrasi</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Status Request</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($rfa as $r): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$r['nama'];?></td>
                                    <td>
                                        <?php

                        
if (empty($useraccept)) {
    echo "--";
} else if ($useraccept['USERidapp'] == $r['id']) {
    
    echo $useraccept['nama'];
}

?>
                                    </td>
                                    <td><?=$r['DJPnoreg'];?></td>
                                    <td><?=$r['RFAcomment'];?></td>
                                    <td>
                                    <?php if ($r['DJPcheckerstatus'] == 0) {
    echo "Menunggu approval";
} else if ($r['DJPcheckerstatus'] == 2) {
    echo "Data sudah di cek, menunggu approval kembali";
} else if ($r['DJPcheckerstatus'] == 4) {
    echo "Data sudah dikunci";
} else {
    echo "Data sudah di accept";
}

?>
                                    </td>
                                    <td>
                                    <a href="<?=base_url("kapenjaminan/apprfa/");?><?=$r['RFAid'];?>/<?=$r['DJPid'];?>"
                                                    class=" badge badge-primary">Accept</a>
                                    |
                                    <a href="<?=base_url("kapenjaminan/tolakrfa/");?><?=$r['RFAid'];?>"
                                                    class=" badge badge-warning">Tolak</a>
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

    </div>
</div>
</div>
</div>