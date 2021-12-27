<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
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