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

    <table cellspacing="0" style="width:100%; font-size: 10pt;">
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
<table cellspacing="0" style="width:100%; font-size: 10pt;">
            <tr>
                <td style="width:15%;"><div align="center"></div></td>
                <td style="width:80%;">a. Imbal Jasa Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><?php echo "Rp. " . number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></div></td>
            </tr>
            <tr>
                <td style="width:15%;"><div align="center"></div></td>
                <td style="width:80%;">b. Fee Bank 10,00% x <?php echo "Rp. " . number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><u>
                <?php echo "Rp. " . number_format($u->DJPfeebank, 2, ",", ".") ?> </u> </div></td>
            </tr>
            <tr>
                <td style="width:15%;"><div align="center"></div></td>
                <td style="width:80%;">c. Bea Materai</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><?php echo "Rp. " . number_format($u->DJPfeematerai, 2, ",", ".") ?></div></td>
            </tr>
            <tr>
                <td style="width:15%;"><div align="center"></div></td>
                <td style="width:80%;">d. Biaya Administrasi Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><u><?php echo "Rp. " . number_format($u->DJPfeeadmin, 2, ",", ".") ?></u><br></div></td>
            </tr>
            <tr>
                <td style="width:15%;"><div align="center"></div></td>
                <td style="width:95%;">&nbsp;&nbsp;&nbsp;&nbsp;Jumlah</td>
                <td style="width:5%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><u><?php echo "Rp. " . number_format($u->DJPjumlahbiaya, 2, ",", ".") ?></u></div></td>
            </tr>
            <tr>
                <td style="width:15%;"><div align="center"></div></td>
                <td style="width:95%;">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="width:5%;"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                <td style="width:130%;"><div align="right">&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
            </tr>

            <tr>
                <td></td>
                <td colspan="3"style="width:130;"><div align="left">Terbilang : <i> <?php echo $u->DJPjumlahbiayaterbilang; ?></div></i></td>
            </tr>
</table>
<br>
<?php } else {
    ?>
 <table cellspacing="0" style="width: 100%; font-size: 10pt;">
        <tr>
            <td style="width:10%;"><div align="center"><b>III.</b></div></td>
            <td style="width:80%;"><b>DATA MENGENAI KREDIT</b></td>
            <td style="width:10%;">&nbsp;</td>
            <td style="width:130%;">&nbsp;</td>
        </tr>
        <tr>
            <td style="width:10%;"></td>
            <td style="width:80%;">Sesuai Surat Permohonan Penjaminan Kredit</td>
            <td style="width:10%;"><div align="center">:</div></td>
            <td style="width:130%;"><?php echo $u->DJPnodeklarasi ?> : <?php echo date('d F Y', strtotime($u->DJPtanggaldeklarasi)); ?> </td>
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

    </table>
    <br>
    <table cellspacing="0" style="width:100%; font-size: 10pt;">
            <tr>
                <td style="width:10%;"><div align="center"><b>IV.</b></div></td>
                <td style="width:80%;"><b>KETENTUAN PENJAMINAN KREDIT</b></td>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:130%;"></td>
            </tr>


            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">1. Jangka Waktu Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><?php echo $u->DJPDjangkawaktu . " Bulan. ( " . $u->DJPDtanggalawal . " s/d " . $u->DJPDtanggalakhir . " )"; ?></td>
            </tr>

            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">2. Jumlah Plafond.</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><?php echo "Rp." . number_format($u->DJPDplafondkredit, 2, ",", ".") ?></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">3. Jumlah Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><?php echo "Rp." . number_format($u->DJPDnilaipenjaminan, 2, ",", ".") ?></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">4. Coverage</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"> <?php echo $u->DJPDcoverage ?> </td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">5. Rate Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"> <?php echo $u->DJPDrate . "%" ?> </td>
            </tr>
</table>
<br>
<table cellspacing="0" style="width:100%; font-size: 10pt;">
            <tr>
                <td style="width:10%;"><div align="center"><b>V.</b></div></td>
                <td style="width:80%;"><b>BIAYA PENJAMINAN</b></td>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:130%;"></td>
            </tr>


            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">1. Imbal Jasa Penjaminan (IJP)</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><?php echo "Rp. " . number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></div></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">2. Fee Bank 10,00% x <?php echo "Rp. " . number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><u>
                <?php echo "Rp. " . number_format($u->DJPfeebank, 2, ",", ".") ?> </u> </div></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">3. Bea Materai</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><?php echo "Rp. " . number_format($u->DJPfeematerai, 2, ",", ".") ?></div></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:80%;">4. Biaya Administrasi Penjaminan</td>
                <td style="width:10%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><u><?php echo "Rp. " . number_format($u->DJPfeeadmin, 2, ",", ".") ?></u><br></div></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:95%;">&nbsp;&nbsp;&nbsp;&nbsp;Jumlah</td>
                <td style="width:5%;"><div align="center">:</div></td>
                <td style="width:130%;"><div align="right"><u><?php echo "Rp. " . number_format($u->DJPjumlahbiaya, 2, ",", ".") ?></u></div></td>
            </tr>
            <tr>
                <td style="width:10%;"><div align="center"></div></td>
                <td style="width:95%;">&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td style="width:5%;"><div align="center">&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
                <td style="width:130%;"><div align="right">&nbsp;&nbsp;&nbsp;&nbsp;</div></td>
            </tr>

            <tr>
                <td></td>
                <td colspan="3"style="width:130;"><div align="left">Terbilang : <i> <?php echo $u->DJPjumlahbiayaterbilang; ?></div></i></td>
            </tr>
</table>
<br>

<?php }?>
<!-- End If -->
<table>
    <tr>
    <td colspan="4"style="width:130;"> Sertifikat Penjaminan Kredit ini sekaligus berlaku sebagai nota tagihan,</td>
</tr>
</table>
    </div>
</body>

</html>