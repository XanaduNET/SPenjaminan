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
                                    if($s['SMstatus'] == 0)
                                    {
                                        echo "Surat Masih Di CS, Sudah Diberikan Ke Sekper";
                                    }
                                    else if($s['SMstatus'] == 1)
                                    {
                                        echo "Surat Sudah Di Sekper, Menunggu Konfirmasi Sekdir Untuk Diberikan Ke Direksi Yang Bersangkutan";
                                    }
                                    else if($s['SMstatus'] == 2)
                                    {
                                        echo "Surat Sudah Di Sekdir, Menunggu Konfirmasi Direksi Yang Bersangkutan";
                                    }
                                    else if($s['SMstatus'] == 3)
                                    {
                                        echo "Surat Sudah Diberikan Kepada Divisi Yang Terkait";
                                    } 
                                    else if($s['SMstatus'] == 4)
                                    {
                                        echo "Surat Sudah Di Sekper, Menunggu Konfirmasi Sekdir Untuk Diberikan Ke Direksi Yang Bersangkutan";
                                    }
                                    else if($s['SMstatus'] == 5)
                                    {
                                        echo "Surat Sudah Di Sekdir, Menunggu Konfirmasi Direksi Yang Bersangkutan";
                                    }
                                    else if($s['SMstatus'] == 6)
                                    {
                                        echo "Surat Sudah Diberikan Kepada Divisi Yang Terkait";
                                    }
                                    else{
                                        echo "Data Surat Tidak Ditemukan";
                                    }
                                    ?></td>
                                    <td><?=$s['SMketdir'];?></td>

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