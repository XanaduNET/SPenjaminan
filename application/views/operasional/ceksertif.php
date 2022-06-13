<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
    .page_break {
        page-break-before: always;
    }
    </style>
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
                <td style="width:130%;"> <?php echo $u->DJPDrate ?> </td>
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
<table cellspacing="0" style="width:100%; font-size: 10pt;">
    <tr>
    <td colspan="4"style="width:130;"> <div align="justify">Sertifikat Penjaminan Kredit ini sekaligus berlaku sebagai nota tagihan, selanjutnya pembayaran biaya penjaminan tersebut di
atas harap dilimpahkan pada rekening atas nama PT. PENJAMINAN KREDIT DAERAH PROVINSI RIAU, Nomor : 101.20.03064 Di Bank Riau Kepri Cabang Utama</div></td>
</tr>
<tr>
    <td colspan="4"style="width:130;">
</td></tr>
<tr>
<td></td>
<td></td>
<td></td>
<td style="width:20%;"> <div align="Left;"> Dibuat di Pekanbaru </div></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td style="width:20%;"> <div align="Left;"> Tanggal <?php echo $u->DJPtanggalcetak; ?></div></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td style="width:20%;"> <div align="center;"> <br><b>PT. JAMKRIDA RIAU </b></div></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td style="width:20%;" height="40">  <div align="Left;"> </div></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td style="width:20%;"><div align="center;"> <b> <u> RM. IBNU LEGOWO </u> </b> </div>  </td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td style="width:20%;"> <div align="center;"> Direktur Umum </div>  </td>
</tr>
</table>
    </div>


    <div class="page_break"></div>
    <table cellspacing="0" style="width: 85%; text-align: center; ">
        <tr>
            <br>
            <td style="width:50%;" align="center">
                <span style="font-weight: bold; text-align: center; color: #000000">LIST VERIFIKASI DATA DJP</span><br>
                <span style="font-weight: bold; text-align: center; color: #000000">PENJAMINAN KREDIT</span>
                <br>

                <br>
            </td>
        </tr>
    </table>



    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;">
                <div align="left"> No Agenda</div>
            </td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:130%;"> <?php
$DJPnoreg = "";
foreach ($table as $u) {?>
                <?php if ($u->DJPnoreg != $DJPnoreg) {
    echo $u->DJPnoreg;
    $DJPnoreg = $u->DJPnoreg;
} else {

}}?></td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;">Bank Cabang</td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:130%;"><?php echo $u->PPnama ?> </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;"> &nbsp;</td>
            <td style="width:10%;"> &nbsp;</div>
            </td>
            <td style="width:130%;"><?php echo $u->PPalamat ?> </td>
        </tr>
    </table>
    <hr style="width: 85%;" align="right" width="100%" />

    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:20%;">DATA DJP</td>
            <td style="font-weight: bold; width:10%;">
                <div align="right"> Jenis : <?php if ($u->JSPjenis == "Kolektif") {
    echo "Massal";
} else {
    echo "Baru";
}?></div>
            </td>

        </tr>
    </table>

    <table cellspacing="0" style="width: 85%; ">
        <tr>

            <td style="width:30%;"> Nomor Deklarasi</td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;"><?php echo $u->DJPnodeklarasi ?></td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;"> Tanggal </td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;"><?php echo $u->DJPtanggaldeklarasi ?> </td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;"> Priode Deklarasi</td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;"><?php echo $u->DJPtanggaldeklarasi ?> </td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;"> Plafond/ Pert Rp. </td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;"> &nbsp; </td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;"> Debt./Tutup</td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;"> &nbsp; </td>
        </tr>
    </table>

    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="width:30%;"> Jumlah PK</td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;">
                <div align="right">Tanggal Rekam : <?=date('d-F-Y')?></div>
            </td>
        </tr>
    </table>
    <br>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> KETERANGAN</td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> &nbsp; </td>
            <td style="width:10%;"> &nbsp;</td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> &nbsp; </td>
            <td style="width:10%;"> &nbsp;</td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> &nbsp; </td>
            <td style="width:10%;"> &nbsp;</td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> &nbsp; </td>
            <td style="width:10%;"> &nbsp;</td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> &nbsp; </td>
            <td style="width:10%;"> &nbsp;</td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> &nbsp; </td>
            <td style="width:10%;"> &nbsp;</td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; "> &nbsp; </td>
            <td style="width:10%;"> &nbsp;</td>
            <td style="width:100%;">
                ...........................................................................................................
            </td>
        </tr>
    </table>
    <br>
    <table cellspacing="0" style="width: 85%;">
        <tr>
            <td style="font-weight: bold; width:30%; ">STATUS</td>
            <td style="width:10%;">
                <div align="center">:</div>
            </td>
            <td style="width:100%;"> Tutup/Tolak/Tutup Sebagian</td>
        </tr>
    </table>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <hr style="width: 85%;" align="right" width="100%" />



    <table cellspacing="0" style="width: 100%; text-align: left;">
        <tr>
            <td>
            <td style="width:90%;" align="center">
                <br><br>
                <b>Operator/User</b><br>
                <span>(nama dan tanda tangan)</span>
                <br>
                <br>
                <br>
                <br>
                <b><?php
echo strtoupper($user['nama']);
?></b>

            <td style="width:150%;" align="center">
                Tanggal Cetak : <?=date('d-F-Y')?> <br><br>
                <b>Persetujuan Pejabat</b><br>
                <span>(nama dan tanda tangan)</span>
                <br>
                <br>
                <br>
                <br>
                <b>SAMUEL P</b>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <p>*) Coret yang tidak perlu<br>
        LIST VERIFIKASI SETELAH DISETUJUI PEJABAT HARAP<br>
        DISATUKAN DENGAN DJP UNTUK PROSES<br>
        SELANJUTNYA............................</p>

</body>

</html