<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <script>
            $(document).ready(function() {
                $('table.display').DataTable();
            });
            </script>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($menu as $m): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$m['menu'];?></td>
                                    <td>
                                        <a href="<?=base_url("menu/edit/");?><?=$m['id'];?>"" class=" badge
                                            badge-success">edit</a>
                                        <a href=" <?=base_url("menu/delete/");?><?=$m['id'];?>"
                                            class="badge badge-danger float right"
                                            onclick="return confirm('Yakin?');">delete</a>
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

</div>