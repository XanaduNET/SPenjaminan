<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?=base_url('assets/img/profile/') . $user['image'];?>" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?=$user['nama'];?></h5>
                            <p class="card-text"><small class="text-muted">Anggota sejak
                                    <?=date('d F Y', $user['date_created']);?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>