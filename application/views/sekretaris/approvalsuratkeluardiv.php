<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
        </script>


        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#akseptasisuratkeluar">Acc Surat Keluar</a>
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
                                    <th scope="col">Untuk</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Berkas</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
$j = 0;?>
                                <?php foreach ($skall as $s): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$s['role'];?></td>
                                    <td><?=$s['SKnomor'];?></td>
                                    <td><?=$s['SKtanggalsurat'];?></td>
                                    <td><?=$s['SKperihal'];?></td>
                                    <td><?=$s['SKuntuk'];?></td>
                                    <td>Menunggu Untuk Di Acc</td>
                                    <td><a href="#" data-toggle="modal" data-target="#modalberkas<?=$s['SKid'];?>"
                                                    class="badge badge-info">Cek berkas</a></td>
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
ON `tblsk`.`skid` = `tbluploadsk`.`skid`
WHERE `tblsk`.`skid` = $SKid
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
<div class="modal fade" id="akseptasisuratkeluar" tabindex="-1" role="dialog" aria-labelledby="akseptasisuratkeluarLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="akseptasisuratkeluarModalLabel">Akseptasi Surat Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('Sekretaris/akseptasisuratkeluar');?>" method="post">
                <div class="modal-body">

                <div class="form-group">
                <div class="form-group">
                        <select name="SKid" id="SKid" class="form-control">
                            <option value="">Pilih No Surat</option>
                            <?php foreach ($skreq as $r): ?>
                            <option value="<?=$r['SKid'];?>"><?=$r['role'];?> / <?=$r['SKperihal'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="ROLEid" id="ROLEid" class="form-control">
                            <option value="">Pilih Untuk</option>
                            <?php foreach ($skuntuk as $sku): ?>
                            <option value="<?=$sku['role'];?>"><?=$sku['role'];?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>