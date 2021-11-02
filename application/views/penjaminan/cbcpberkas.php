<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-box">
                    <div class="card-header">
                        Case By Case Terjamin
                    </div>
                    <div class="card-body">
                        <?=$table['TRJMnama'];?>

                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-box">
                    <div class="card-header">
                        Nomor Memo
                    </div>
                    <div class="card-body">
                        <?=$table['CBCPnomormemo'];?>

                    </div>
                </div>
            </div>
            <!-- KLAIM -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-box">
                    <div class="card-header">
                        Plafond Kredit
                    </div>
                    <div class="card-body">
                        <?php echo "Rp. " . number_format($table['CBCPplafondkredit'], 0, ".", "."); ?>

                    </div>
                </div>

            </div>

            <!-- Data Sertifikat Penjaminan -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card card-box">
                    <div class="card-header">
                        Berkas Terjamin
                    </div>
                    <div class="card-body">
                        <?php

foreach ($upld as $u) {
    ?>
                        <a href="../../uploads/<?=$u['UPLDPnama']?>"><?=$u['UPLDPnama']?></a><br>
                        <?php
}
?>

                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
</div>

</div>