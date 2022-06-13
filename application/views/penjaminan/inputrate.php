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
            <table class="display table table-striped table-bordered" width="100%" cellspacing="0">
<thead>
    <tr>
    <th scope="col">No</th>
        <th scope="col">IJP Rate</th>
        <th scope="col">Jenis Kredit (OPK)</th>
        <th scope="col">Jangka Waktu Min (Bulan)</th>
        <th scope="col">Jangka Waktu Max (Bulan)</th>
        <th scope="col">Coverage Min(%)</th>
        <th scope="col">Coverage Max(%)</th>
        <th scope="col">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $i = 1;?>
    <?php foreach ($rate as $r): ?>
    <tr>
        <td scope="row"> <center> <?=$i;?> </center></td>
        <td><?=$r['IJPrate'] . "%";?></td>
        <td><?=$r['OPKjenis'];?></td>
        <td><?=$r['JWKsatu'];?></td>
        <td><?=$r['JWKdua'];?></td>
        <td><?=$r['CVRsatu'] . "%";?></td>
        <td><?=$r['CVRdua'] . "%";?></td>
        <td>
            <a href="<?=base_url('Rate/editrate/') . $r['IJPid'];?>"
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