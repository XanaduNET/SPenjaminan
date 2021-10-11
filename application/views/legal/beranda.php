
                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Data Case By Case -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Case By Case</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php
if ($cbc['CBCidhasil'] == 0) {
    echo "Tidak ada Case by Case Konsumtif yang perlu di Approve!";
} else {
    echo '<span style="color:red;font-weight:bold;">' . $cbc['CBCidhasil'] . "</span> Case by Case Konsumtif menunggu untuk di Approve ";
}
;

if ($cbcp['CBCPidhasil'] == 0) {
    echo "<br><br>Tidak ada Case by Case Produktif yang perlu di Approve!";
} else {
    echo '<br><br><span style="color:red;font-weight:bold;">' . $cbcp['CBCPidhasil'] . '</span> Case by Case Produktif menunggu untuk di Approve ';
}
;
?></div>
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
