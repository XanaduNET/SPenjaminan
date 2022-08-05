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
                                    <th scope="col">Perihal</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Berkas</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
$j = 0;?>
                                <?php foreach ($sk as $s): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$s['SKasal'];?></td>
                                    <td><?=$s['SKnomor'];?></td>
                                    <td><?=$s['SKtanggalsurat'];?></td>
                                    <td><?=$s['SKperihal'];?></td>
                                    <td>Menunggu Akseptasi</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modalberkas<?=$s['SKid'];?>"
                                                    class="badge badge-info">Cek berkas</a></td>
                                                    <td>

<a href="<?=base_url("Direktur/approvalsk/");?><?=$s['SKid'];?>"
    class=" badge badge-primary">Akseptasi</a>
&nbsp;
<a href="<?=base_url("Direktur/tolaksk/");?><?=$s['SKid'];?>"
    class=" badge badge-danger">Tolak</a>
</td>              
                                </tr>

                                <!-- Modal Upload Doc -->
<div class="modal fade" id="modalberkas<?=$s['SKid'];?>" role="dialog">
         <div class="modal-dialog modal-sm vertical-align-center">
             <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close"
                         data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Berkas Terjamin</h4>
                 </div>
                 <div class="modal-body">



<?php
$SKid = $s['SKid'];
$query = "SELECT `tblsk`.*, `tbluploadsk`.*
FROM `tblsk` JOIN `tbluploadsk`
ON `tblsk`.`SKid` = `tbluploadsk`.`SKid`
WHERE `tblsk`.`SKid` = $SKid
";
$upld = $this->db->query($query)->result_array();

foreach ($upld as $u) {
    ?>

                     <a
                         href="../uploads/suratkeluar/<?=$u['UPLDnama']?>"><?=$u['UPLDnama']?></a><br>
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
<!-- Modal -->
           
        </div>
    </div>
</div>
</div>