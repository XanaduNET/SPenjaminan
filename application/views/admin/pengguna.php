<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?=form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');?>

            <?=$this->session->flashdata('message');?>
            <a href="<?=base_url('auth/registration');?>" class="btn btn-primary mb-3">Tambah Pengguna</a>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Pengguna</th>
                                    <th scope="col">Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($pengguna as $p): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$p['nama'];?></td>
                                    <td><?=$p['role'];?></td>
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