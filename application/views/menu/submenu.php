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
                                    <th scope="col">Sub Menu</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;?>
                                <?php foreach ($submenu as $sm): ?>
                                <tr>
                                    <th scope="row"><?=$i;?></th>
                                    <td><?=$sm['title'];?></td>
                                    <td><?=$sm['menu'];?></td>
                                    <td><?=$sm['url'];?></td>
                                    <td><?=$sm['is_active'];?></td>
                                    <td>
                                        <a href="<?=base_url("menu/editsubMenu/");?><?=$sm['id'];?>"
                                            class=" badge badge-success">edit</a>
                                        <a href=" <?=base_url("menu/deletesubMenu/");?><?=$sm['id'];?>"
                                            class="badge badge-danger float right"
                                            onclick="return confirm('sure?');">delete</a>
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