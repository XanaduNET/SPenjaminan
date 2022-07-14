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
                                    <th scope="col">Akses </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
$j = 0;?>
                                <?php foreach ($sm as $s): ?>

                                    <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$s['SMasal'];?></td>
                                    <td><?=$s['SMnomor'];?></td>
                                    <td><?=$s['SMtanggalsurat'];?></td>
                                    <td><?=$s['SMtanggalterima'];?></td>
                                    <td><?=$s['SMperihal'];?></td>
                                    <td> <a href="#" data-toggle="modal" data-target="#modalberkas<?=$s['SMid'];?>"
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




<!-- Modal -->
<div class="modal fade" id="inputsuratmasuk" tabindex="-1" role="dialog" aria-labelledby="inputsuratmasukLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputsuratmasukModalLabel">Input Surat Masuk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('Sekretaris/inputsuratmasuk');?>" method="post">
                <div class="modal-body">

                <div class="form-group">
                <input type="text" class="form-control" id="SMasal" name="SMasal" placeholder="Asal Surat">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" id="SMnomor" name="SMnomor" placeholder="Nomor Surat">
                </div>
                <div class="form-group">
                <input type="date" class="form-control" id="SMtanggalsurat" name="SMtanggalsurat" placeholder="Tanggal Surat">
                </div>
                <div class="form-group">
                <input type="date" class="form-control" id="SMtanggalterima" name="SMtanggalterima" placeholder="Tanggal Terima">
                </div>
                <div class="form-group">
                <input type="text" class="form-control" id="SMperihal" name="SMperihal" placeholder="Perihal">
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