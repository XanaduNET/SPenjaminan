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
<!-- Modal -->
<div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="newRoleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newRoleModalLabel">Tambah Role Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?=base_url('admin/role');?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Nama Role">
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
            </div>
        </div>
    </div>
</div>

</div>