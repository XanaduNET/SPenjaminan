
                <!-- Begin Page Content -->
                <div class="container-fluid">
                <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Data Case By Case -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-primary text-uppercase mb-1">
                                                Case By Case Terjamin </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?=$table['TRJMnama'];?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- KUR -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-success text-uppercase mb-1">
                                                Nomor Memo</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?=$table['CBCPnomormemo'];?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- KLAIM -->
<div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-info text-uppercase mb-1">
                                                Plafond Kredit</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo "Rp. " . number_format($table['CBCPplafondkredit'], 0, ".", "."); ?>
                                            </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Data Sertifikat Penjaminan -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-s font-weight-bold text-warning text-uppercase mb-1">
                                                Berkas Terjamin</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <?php

foreach ($upld as $u) {
    ?>
<a href="../../uploads/berkas_produktif/<?=$u['UPLDPnama']?>"><?=$u['UPLDPnama']?></a><br>
                                        <?php
}
?>
                                        </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
