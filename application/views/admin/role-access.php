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
            <div class="row">
                <div class="col-lg-6">


                    <h5>Role : <?=$role['role'];?></h5>
                    <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Menu</th>
                                <th scope="col">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach ($menu as $m): ?>
                            <tr>
                                <th scope="row"><?=$i;?></th>
                                <td><?=$m['menu'];?></td>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="defaultCheck1"
                                            <?=check_access($role['id'], $m['id']);?> data-role="<?=$role['id'];?>"
                                            data-menu="<?=$m['id'];?>">
                                    </div>
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