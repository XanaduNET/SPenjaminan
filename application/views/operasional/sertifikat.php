<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>


    <div id="container" style="font-family:sans-serif;">

        <table align="center" cellspacing="0" style="width: 100%; text-align: center; ">
            <tr>

                <br>
                <td>
                    <U><span style="font-weight: bold; font-size: 16px;  color: #000000">SERTIFIKAT PENJAMINAN
                            KREDIT</span></U><br>

                            <?php
$DJPnoreg = "";
foreach ($table as $u) {?>
                    <?php if ($u->DJPnoreg != $DJPnoreg) {
    echo $u->DJPnoreg;
    $DJPnoreg = $u->DJPnoreg;
} else {
}}?>


<br>
<?php if ($u->JSPid == 1) {
    echo '(Massal)';
} else {
    echo '(BARU)';
}?>

                    <br>
                </td>
            </tr>
        </table>

        <div style="width: 85%; font-size: 15px; " align="justify">Dengan ini PENJAMIN memberikan Jaminan Kredit atas
            kredit-kredit dengan data dan ketentuan-ketentuan sebagai berikut :
            <br>
            <br>
        </div>

        <table cellspacing="0" style="width: 100%; font-size: 10pt;">
            <tr>
                <td style="width:10%;"><div align="center"><b>I.</b></div></td>
                <td style="width:80%;"><div align="left"><b>DATA PENERIMA JAMINAN</b></div></td>
                <td style="width:10%;"><div align="center">:<br>:</div></td>
                <td style="width:130%;"><?php echo $u->PPnama . "<br>" . $u->PPalamat ?></td>
            </tr>
        </table> <br>

        <!-- If JSP Massal / Non Massal -->
        <!-- 1 Kolektif 2 By Person -->
        <?php if ($u->JSPid == 1) {?>

        <table cellspacing="0" style="width: 100%; font-size: 10pt;">
        <tr>
            <td style="width:10%;"><div align="center"><b>II.</b></div></td>
            <td style="width:80%;"><b>DATA MENGENAI KREDIT</b></td>
            <td style="width:10%;">&nbsp;</td>
            <td style="width:130%;">&nbsp;</td>
        </tr>
        <tr>
            <td style="width:10%;"></td>
            <td style="width:80%;">Sesuai Surat Permohonan Penjaminan Kredit</td>
            <td style="width:10%;"><div align="center">:</div></td>
            <td style="width:130%;"><?php echo $u->DJPnodeklarasi ?> :<?php echo date('d F Y', strtotime($u->DJPtanggaldeklarasi)); ?> </td>
        </tr>

        <?php
if ($u->PKSno2 != null) {
    ?>
        <tr>
            <td style="width:10%"> </td>
            <td style="width:80%;"> Berdasarkan Perjanjian Penjaminan Kredit </td>
            <td style="width:10%;"><div align="center">:</div></td>
            <td style="width:130%;"><?php echo $u->PKSno2 ?> : <?php echo date('d F Y', strtotime($u->PKStanggal)); ?></td>
        </tr>
        <?php
} else {
    ?>
        <tr>
            <td style="width:10%"></td>
            <td style="width:80%;"> Berdasarkasn Perjanjian Penjaminan Kredit</td>
            <td style="width:10%;"><div align="center">:</div></td>
            <td style="width:130%;"><?php echo $u->PKSno1 ?> : <?php echo date('d F Y', strtotime($u->PKStanggal)); ?></td>
            <?php
}?>

    </table><br>
<?php } else {
    ?>
        <table cellspacing="0" style="width: 100%; font-size: 10pt;">
            <tr>

                <td style="width:10%;"><div align="center"><b>II.</b></div></td>
                <td style="width:80%;"><b>DATA MENGENAI TERJAMIN</b></td>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:130%;"></td>
            </tr>

            <tr>
                <td style="width:10%;"> </td>
                <td style="width:80%;">1. Nama</td>
                <td style="width:10%;"> <div align="center">:</div></td>
                <td style="width:130%;"><?php echo strtoupper($u->TRJMnama); ?> </td>
            </tr>
            <tr>
                <td style="width:10%;"> </td>
                <td style="width:80%;">2. Alamat</td>
                <td style="width:10%;"> <div align="center">:</div></td>
                <td style="width:130%;"><?php echo strtoupper($u->TRJMalamat); ?> </td>
            </tr>
            <tr>
                <td style="width:10%;"> </td>
                <td style="width:80%;">3. No. Kartu Tanda Pengenal/KTP</td>
                <td style="width:10%;"> <div align="center">:</div></td>
                <td style="width:130%;"><?php echo strtoupper($u->TRJMktp); ?> </td>
            </tr>
            <tr>
                <td style="width:10%;"> </td>
                <td style="width:80%;">4. No. Surat Izin Usaha</td>
                <td style="width:10%;"> <div align="center">:</div></td>
                <td style="width:130%;"><?php echo strtoupper($u->TRJMsiup); ?> </td>
            </tr>
            <tr>
                <td style="width:10%;"> </td>
                <td style="width:80%;">5. NPWP</td>
                <td style="width:10%;"> <div align="center">:</div></td>
                <td style="width:130%;"><?php echo strtoupper($u->TRJMnpwp); ?> </td>
            </tr>
        </table>
        <br>
<?php }?>
<!-- End If-->


   <!-- If JSP Massal / Non Massal -->
   <!-- 1 Kolektif 2 By Person -->
<?php if ($u->JSPid == 1) {?>

    <table border="1" cellspacing="0" style="width:100%; font-size: 10pt;">
            <tr>
                <td style="width:10%;"><div align="center"><b>III.</b></div></td>
                <td style="width:80%;"><b>KETENTUAN PENJAMINAN KREDIT</b></td>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:130%;"></td>
            </tr>


            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">1.Jumlah Plafond Kredit</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><?php echo "Rp." . number_format($u->DJPjumlahnilaipk, 2, ",", ".") ?></td>
            </tr>

            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">2.Jumlah Penjaminan Kredit</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><?php echo "Rp." . number_format($u->DJPnilaipenjaminan, 2, ",", ".") ?></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">3.Jumlah Terjamin</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><?php echo $u->DJPjumlahpk . " Terjamin" ?></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">4.Jangka waktu</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"> Terlampir </td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">5.Coverage</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"> Terlampir </td>
            </tr>

            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">6.Rate Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"> Terlampir </td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">7.Jumlah Biaya Penjaminan</td>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:130%;"></td>
            </tr>
</table>
<br>
<table border="1" cellspacing="0" style="width:100%; font-size: 10pt;">
            <tr>
                <td style="width:30%;"><div align="center"></div></td>
                <td style="width:80%;">Imbal Jasa Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><?php echo "Rp." . number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></div></td>
            </tr>
            <tr>
                <td style="width:30%;"><div align="center"></div></td>
                <td style="width:80%;">Fee Bank 10,00% x <?php echo "Rp." . number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><u?>
                <?php echo "Rp" . number_format($u->DJPfeebank, 2, ",", ".") ?> </u> </div></td>
            </tr>
            <tr>
                <td style="width:30%;"><div align="center"></div></td>
                <td style="width:80%;">Bea Materai</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><?php echo "Rp" . number_format($u->DJPfeematerai, 2, ",", ".") ?></div></td>
            </tr>
            <tr>
                <td style="width:30%;"><div align="center"></div></td>
                <td style="width:80%;">Biaya Administrasi Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><?php echo "Rp" . number_format($u->DJPfeeadmin, 2, ",", ".") ?></div></td>
            </tr>
</table>
<?php }?>
<!-- End If -->
    <table cellspacing="0" style="width: 100%; font-size: 10pt;">
        <tr>
            <td style="width:20%;">
                <div align="center">IV.</div>
            </td>
            <td style="width:100%;">KETENTUAN PENJAMINAN KREDIT</td>
            <td style="width:10%;">&nbsp;</td>
            <td style="width:150%;">&nbsp;</td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 201%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">1.</div>
            </td>
            <td style="width:100%;">Jumlah Plafond Kredit</td>
            <td style="width:11%;">
                <div align="right">:</div>
            </td>
            <td style="width:18%;">
                <div align="right">Rp. </div>
            </td>
            <td style="width:500%;">
                <div align="left"><?php echo number_format($u->DJPDplafondkredit, 2, ",", ".") ?></div>
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 201%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">2.</div>
            </td>
            <td style="width:100%;">Nilai Penjaminan</td>
            <td style="width:11%;">
                <div align="right">:</div>
            </td>
            <td style="width:18%;">
                <div align="right">Rp. </div>
            </td>
            <td style="width:500%;">
                <div align="left"><?php echo number_format($u->DJPnilaipenjaminan, 2, ",", ".") ?></div>
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 198%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">3.</div>
            </td>
            <td style="width:100%;">Jumlah Terjamin</td>
            <td style="width:19%;">
                <div align="center">:</div>
            </td>
            <td style="width:500%;"><?php echo $u->DJPjumlahpk; ?></td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 198%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">4.</div>
            </td>
            <td style="width:100%;">Jangka Waktu</td>
            <td style="width:19%;">
                <div align="center">:</div>
            </td>
            <td style="width:500%;">Terlampir</td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 198%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">5.</div>
            </td>
            <td style="width:100%;">Coverage</td>
            <td style="width:19%;">
                <div align="center">:</div>
            </td>
            <td style="width:500%;">Terlampir</td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 198%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">6.</div>
            </td>
            <td style="width:100%;">Jenis Penjaminan</td>
            <td style="width:19%;">
                <div align="center">:</div>
            </td>
            <td style="width:500%;"><?php echo $u->OPKjenis ?></td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 198%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">7.</div>
            </td>
            <td style="width:100%;">Rate Penjaminan</td>
            <td style="width:19%;">
                <div align="center">:</div>
            </td>
            <td style="width:500%;">Terlampir</td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 198%; font-size: 10pt;">
        <tr>
            <td style="width:30%;">
                <div align="right">8.</div>
            </td>
            <td style="width:100%;">Jumlah Biaya Penjaminan</td>
            <td style="width:19%;">&nbsp;</td>
            <td style="width:500%;">&nbsp;</td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 80%; font-size: 10pt;">
        <tr>
            <td style="width:47%;">
                <div align="right">a.</div>
            </td>
            <td style="width:180%;">Imbal Jasa Penjaminan (IJP)</td>
            <td style="width:20%;">
                <div align="center">:</div>
            </td>
            <td style="width:60%;">
                <div align="left">Rp.</div>
            </td>
            <td style="width:50%;">
                <div align="left"><?php echo number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></div>
            </td>
        </tr>

        <tr>
            <td style="width:47%;">
                <div align="right">b.</div>
            </td>
            <td style="width:90%;">Feebank <?php echo $u->PKSratefee ?> x
                <?php echo number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?> </td>
            <td style="width:20%;">
                <div align="center">:</div>
            </td>
            <td style="width:60%;">
                <div align="left">Rp. </div>
            </td>
            <td style="width:50%;">
                <div align="left"> <?php echo number_format($u->DJPfeebank, 2, ",", ".") ?></div>
            </td>
        </tr>
        <tr>
            <td style="width:47%;">
                <div align="right">c.</div>
            </td>
            <td style="width:90%;">Bea Materai </td>
            <td style="width:20%;">
                <div align="center">:</div>
            </td>
            <td style="width:60%;">
                <div align="left">Rp.</div>
            </td>
            <td style="width:50%;">
                <div align="left"> <?php echo number_format($u->DJPfeematerai, 2, ",", ".") ?></div>
            </td>
        </tr>

        <tr>
            <hr style="width: 25%;" align="right" width="44%" />
            <td style="width:47%;">
                <div align="right">d.</div>
            </td>
            <td style="width:90%;">Biaya Administrasi Penjaminan</td>
            <td style="width:20%;">
                <div align="center">:</div>
            </td>
            <td style="width:60%;">
                <div align="left">Rp.</div>
            </td>
            <td style="width:50%;">
                <div align="left"> <?php echo number_format($u->DJPfeeadmin, 2, ",", ".") ?></div>
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 80%; font-size: 10pt;">
        <tr>
            <td style="width:37%;">&nbsp;</td>
            <td style="width:190%;"> Jumlah</td>
            <td style="width:20%;">
                <div align="center">:</div>
            </td>
            <td style="width:60%;">
                <div align="left">Rp.</div>
            </td>
            <td style="width:50%;">
                <div align="left"> <?php echo number_format($u->DJPjumlahbiaya, 2, ",", ".") ?></div>
            </td>
        </tr>
    </table><br>
    <table cellspacing="0" style="width: 85%; ">
        <tr>

            <td style="width:10%;"> Terbilang</td>
            <td style="width:20%;">
                <div align="center">:</div>
            </td>
            <td style="width:800%;"> <i>
                    <div align="left"> <?php echo $u->DJPjumlahbiayaterbilang ?></div>
                </i></td>
        </tr>
    </table>

    <br>


    <div style="width: 85%; " align="justify">Sertifikat penjaminan ini sekaligus berlaku sebagai nota tagihan,
        selanjutnya pembayaran biaya penjaminan tersebut diatas harap dilimpahkan pada rekening atas nama PT. PENJAMINAN
        KREDIT DAERAH PROVINSI RIAU, Nomor : <?php echo $u->RSrekening ?> Di <?php echo $u->RSbank ?>
        <br>
        <br>
    </div>

    <table cellspacing="0" style="width: 80%; text-align: left;">
        <tr>
            <td></td>
            <td style="width:50%;" align="center">
                Dibuat di Pekanbaru <br> Tanggal <?php echo date('d F Y', strtotime($u->DJPtanggalcetak)); ?> <br>
                <b>PT. JAMKRIDA RIAU</b><br>
                <br>
                <br>
                <br>
                <b><u>AFRIZAL BERRY</u></b><br>
                Direktur Utama<br>
            </td>
        </tr>
    </table>
    </div>
</body>

</html>