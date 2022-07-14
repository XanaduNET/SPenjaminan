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
                                    <th scope="col">Asal Surat</th>
                                    <th scope="col">Nomor Surat</th>
                                    <th scope="col">Tanggal Surat</th>
                                    <th scope="col">Tanggal Terima Surat</th>
                                    <th scope="col">Perihal</th>
                                    <th scope="col">Untuk</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Keterangan Direksi</th>
                                    <th scope="col">Berkas </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
$j = 0;?>
                                <?php foreach ($small as $s): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$s['SMasal'];?></td>
                                    <td><?=$s['SMnomor'];?></td>
                                    <td><?=$s['SMtanggalsurat'];?></td>
                                    <td><?=$s['SMtanggalterima'];?></td>
                                    <td><?=$s['SMperihal'];?></td>
                                    <td><?=$s['SMuntuk'];?></td>
                                    <td><?php
if ($s['SMstatus'] == 0) {
    echo "Surat Masih Di CS, Sudah Diberikan Ke Sekper";
} else if ($s['SMstatus'] == 1) {
    echo "Surat Sudah Di Sekper, Menunggu Konfirmasi Sekdir Untuk Diberikan Ke Direksi Yang Bersangkutan";
} else if ($s['SMstatus'] == 2) {
    echo "Surat Sudah Di Sekdir, Menunggu Konfirmasi Direksi Yang Bersangkutan";
} else if ($s['SMstatus'] == 3) {
    echo "Surat Sudah Diberikan Kepada Divisi Yang Terkait";
} else if ($s['SMstatus'] == 4) {
    echo "Surat Sudah Di Sekper, Menunggu Konfirmasi Sekdir Untuk Diberikan Ke Direksi Yang Bersangkutan";
} else if ($s['SMstatus'] == 5) {
    echo "Surat Sudah Di Sekdir, Menunggu Konfirmasi Direksi Yang Bersangkutan";
} else if ($s['SMstatus'] == 6) {
    echo "Surat Sudah Diberikan Kepada Divisi Yang Terkait";
} else {
    echo "Data Surat Tidak Ditemukan";
}
?></td>
                                    <td><?=$s['SMketdir'];?></td>
                                    <td><a href="#" data-toggle="modal" data-target="#modalberkas<?=$s['SMid'];?>"
                                                    class="badge badge-info">Cek berkas</a></td>
                                </tr>


                                <!-- Modal Upload Doc -->
<div class="modal fade" id="modalberkas<?=$s['SMid'];?>" role="dialog">
         <div class="modal-dialog modal-sm vertical-align-center">
             <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close"
                         data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Berkas Terjamin</h4>
                 </div>
                 <div class="modal-body">



<?php
$SMid = $s['SMid'];
$query = "SELECT `tblsm`.*, `tbluploadsm`.*
FROM `tblsm` JOIN `tbluploadsm`
ON `tblsm`.`SMid` = `tbluploadsm`.`SMid`
WHERE `tblsm`.`SMid` = $SMid
";
$upld = $this->db->query($query)->result_array();

foreach ($upld as $u) {
    ?>

                     <a
                         href="../uploads/<?=$u['UPLDnama']?>"><?=$u['UPLDnama']?></a><br>
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