<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div class="col-sm-12 col-md-4 mb-30">
                <div class="card card-box">
                    <div class="card-header">
                        Case By Case
                    </div>
                    <div class="card-body">

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
?>
                    </div>
                </div>
            </div>



        </div>
    </div>
</div>
</div>

</div>