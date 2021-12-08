<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <script>
        $(document).ready(function() {
            $('table.display').DataTable();
        });
        </script>
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>

            <a href="<?=base_url('auth/registration');?>" class="btn btn-primary mb-3">Tambah Pengguna</a>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
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