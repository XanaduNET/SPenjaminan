<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
        </script>


<a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#inputsuratkeluar">Input Surat Keluar</a>

        <div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">

                        <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
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
                                    <td><?=$s['SKnomor'];?></td>
                                    <td><?=$s['SKtanggalsurat'];?></td>
                                    <td><?=$s['SKperihal'];?></td>
                                    <td><?=$s['SKket'];?></td>
                                    <td><a href="#" data-toggle="modal" data-target="#modalberkas<?=$s['SKid'];?>"
                                                    class="badge badge-info">Cek berkas</a>&nbsp;|&nbsp; <a href="#" data-toggle="modal" data-target="#modalsk<?=$s['SKid'];?>" class="badge badge-warning">Upload Berkas</a></td>
                                    <td>  <a href="<?=base_url("penjaminan/hapussk/");?><?=$s['SKid'];?>"
                                                    class=" badge badge-danger">Hapus</a></td>
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
     <!-- End --> 

     <!-- Upload Surat Keluar -->
     
     <div class="modal fade" id="modalsk<?=$s['SKid'];?>" role="dialog">
                                            <div class="modal-dialog modal-sm vertical-align-center">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                            data-dismiss="modal">&times;</button>
                                                        <h4 class="modal-title">Upload Dokumen Surat</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <?php echo form_open_multipart(base_url("table/uploaddokumenkeluar/") . $s['SKid']); ?>
                                                        <input type='file' name='userfile'/>

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
    <!-- End -->
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
<div class="modal fade" id="inputsuratkeluar" tabindex="-1" role="dialog" aria-labelledby="inputsuratkeluarLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputsuratkeluarModalLabel">Input Surat Keluar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('table/inputsk');?>" method="post">
                <div class="modal-body">

                <div class="form-group">
                <div class="form-group">
                <input type="date" class="form-control" id="SKtanggalsurat" name="SKtanggalsurat" placeholder="Tanggal Surat">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" id="SKperihal" name="SKperihal" placeholder="Perihal">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" id="SKket" name="SKket" placeholder="Keterangan">
                </div>
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