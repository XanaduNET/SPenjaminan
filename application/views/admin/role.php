<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
        </script>
        <div class="card">
            <div class="card-body">
                <div class="col-lg-6">
                    <?=form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>');?>

                    <?=$this->session->flashdata('message');?>
                    <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Tambah
                        Role</a>
                    <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Role</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($role as $r): ?>
                            <tr>
                                <th scope="row"><?=$i;?></th>
                                <td><?=$r['role'];?></td>
                                <td>
                                    <a href="<?=base_url('admin/roleaccess/') . $r['id'];?>"
                                        class="badge badge-warning">akses</a>
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