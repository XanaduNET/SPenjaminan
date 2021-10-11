<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>

.page_break { page-break-before: always; }

    </style>
    </head>
    <body>


        <div id="container" style="font-family:sans-serif;">


 <table align="center" cellspacing="0" style="width: 50%; text-align: center; ">
        <tr>

                <br>
                <td>
                    <U><span style="font-weight: bold; font-size: 16px;  color: #000000">SERTIFIKAT PENJAMINAN KREDIT</span></U><br>

                    <?php
$DJPnoreg = "";
foreach ($table as $u) {?>
                    <?php if ($u->DJPnoreg != $DJPnoreg) {
    echo $u->DJPnoreg;
    $DJPnoreg = $u->DJPnoreg;
} else {

}}?> <br>

                     <?php
$JSPjenis = "";
foreach ($table as $u) {?>
                    <?php if ($u->JSPjenis != $JSPjenis) {
    echo '(' . $u->JSPjenis . ')';
    $JSPjenis = $u->JSPjenis;
} else {

}}?>

                    <br>
                </td>
        </tr>
  </table>

<div style="width: 85%; font-size: 15px; " align="justify">Dengan ini PENJAMIN memberikan Jaminan Kredit atas kredit-kredit dengan data dan ketentuan-ketentuan sebagai berikut :
<br>
<br>
    </div>

<table cellspacing="0" style="width: 85%; font-size: 10pt;">
  <tr>
    <td style="width:20%;"><div align="center">I.</div></td>
    <td style="width:70%;"><div align="left"> DATA PENJAMINAN</div></td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:130%;">PT. PENJAMINAN KREDIT DEARAH PROVINSI RIAU</td>
  </tr>
 </table>
 <table cellspacing="0" style="width: 85%; font-size: 10pt;">
  <tr>
    <td style="width:20%;">&nbsp;</td>
    <td style="width:70%;">&nbsp;</td>
    <td style="width:10%;">&nbsp;</td>
    <td style="width:130%;">Jl. Sumatera No. 25 Pekanbaru, Kel. Simpang Empat, Kec. Pekanbaru Kota</td>
  </tr>
 </table> <br>

<table cellspacing="0" style="width: 85%; font-size: 10pt;">
    <tr>
    <td style="width:20%;"><div align="center">II.</div></td>
    <td style="width:70%;">DATA PENERIMA JAMINAN</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:130%;"><?php echo $u->PPnama ?></td>
  </tr>
</table>
<table cellspacing="0" style="width: 85%; font-size: 10pt;">
    <tr>
    <td style="width:20%;">&nbsp;</td>
    <td style="width:70%;">&nbsp;</td>
    <td style="width:10%;">&nbsp;</div></td>
    <td style="width:130%;"> <?php echo $u->PPalamat ?> </td>
  </tr>
</table> <br>

<table cellspacing="0" style="width: 100%; font-size: 10pt;">
  <tr>
    <td style="width:20%;"><div align="center">III.</div></td>
    <td style="width:100%;">DATA MENGENAI KREDIT</td>
    <td style="width:10%;">&nbsp;</td>
    <td style="width:150%;">&nbsp;</td>
</tr>
</table>

<table cellspacing="0" style="width: 100%; font-size: 10pt;">
 <tr>
    <td style="width: 22%;">
    <td style="width:100%;"> Sesuai Surat Permohonan Penjaminan Kredit</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->DJPnodeklarasi ?> : <?php echo date('d F Y', strtotime($u->DJPtanggaldeklarasi)); ?> </td>
    </td>
    </tr>

    <?php
if ($u->PKSno2 != null) {
    ?>
 <tr>
    <td style="width: 5%">
    <td style="width:100%;"> Berdasarkasn Perjanjian Penjaminan Kredit </td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->PKSno2 ?> :  <?php echo date('d F Y', strtotime($u->PKStanggal)); ?> </td>
    </td>
    </tr>
<?php
} else {
    ?>
        <tr>
    <td style="width: 5%">
    <td style="width:100%;"> Berdasarkasn Perjanjian Penjaminan Kredit</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->PKSno1 ?> :  <?php echo date('d F Y', strtotime($u->PKStanggal)); ?> </td>
    </td>
        <?php
}
?>

</table><br>
<table cellspacing="0" style="width: 100%; font-size: 10pt;">
    <tr>
    <td style="width:20%;"><div align="center">IV.</div></td>
    <td style="width:100%;">KETENTUAN PENJAMINAN KREDIT</td>
    <td style="width:10%;">&nbsp;</td>
    <td style="width:150%;">&nbsp;</td>
    </tr>
</table>
<table cellspacing="0" style="width: 201%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">1.</div></td>
    <td style="width:100%;">Jumlah Plafond Kredit</td>
    <td style="width:11%;"><div align="right">:</div></td>
    <td style="width:18%;"><div align="right">Rp. </div></td>
    <td style="width:500%;"><div align="left"><?php echo number_format($u->DJPDplafondkredit, 2, ",", ".") ?></div></td>
    </tr>
</table>
<table cellspacing="0" style="width: 201%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">2.</div></td>
    <td style="width:100%;">Jumlah Plafond Kredit</td>
    <td style="width:11%;"><div align="right">:</div></td>
    <td style="width:18%;"><div align="right">Rp. </div></td>
    <td style="width:500%;"><div align="left"><?php echo number_format($u->DJPnilaipenjaminan, 2, ",", ".") ?></div></td>
    </tr>
</table>
<table cellspacing="0" style="width: 198%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">3.</div></td>
    <td style="width:100%;">Jumlah Terjamin</td>
    <td style="width:19%;"><div align="center">:</div></td>
    <td style="width:500%;"><?php echo $u->DJPjumlahpk ?></td>
    </tr>
</table>
<table cellspacing="0" style="width: 198%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">4.</div></td>
    <td style="width:100%;">Jangka Waktu</td>
    <td style="width:19%;"><div align="center">:</div></td>
    <td style="width:500%;">Terlampir</td>
    </tr>
</table>
<table cellspacing="0" style="width: 198%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">5.</div></td>
    <td style="width:100%;">Coverage</td>
    <td style="width:19%;"><div align="center">:</div></td>
    <td style="width:500%;">Terlampir</td>
    </tr>
</table>
<table cellspacing="0" style="width: 198%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">6.</div></td>
    <td style="width:100%;">Jenis Penjaminan</td>
    <td style="width:19%;"><div align="center">:</div></td>
    <td style="width:500%;"><?php echo $u->OPKjenis ?></td>
    </tr>
</table>
<table cellspacing="0" style="width: 198%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">7.</div></td>
    <td style="width:100%;">Rate Penjaminan</td>
    <td style="width:19%;"><div align="center">:</div></td>
    <td style="width:500%;">Terlampir</td>
    </tr>
</table>
<table cellspacing="0" style="width: 198%; font-size: 10pt;">
    <tr>
    <td style="width:30%;"><div align="right">8.</div></td>
    <td style="width:100%;">Jumlah Biaya Penjaminan</td>
    <td style="width:19%;">&nbsp;</td>
    <td style="width:500%;">&nbsp;</td>
    </tr>
</table>

<table cellspacing="0" style="width: 80%; font-size: 10pt;">
    <tr>
    <td style="width:47%;"><div align="right">a.</div></td>
    <td style="width:180%;">Imbal Jasa Penjaminan (IJP)</td>
    <td style="width:20%;"><div align="center">:</div></td>
    <td style="width:60%;"><div align="left">Rp.</div></td>
    <td style="width:50%;"><div align="left"><?php echo number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?></div></td>
    </tr>

    <tr>
    <td style="width:47%;"><div align="right">b.</div></td>
    <td style="width:90%;">Feebank <?php echo $u->PKSratefee ?> x <?php echo number_format($u->DJPjumlahimbaljasa, 2, ",", ".") ?> </td>
    <td style="width:20%;"><div align="center">:</div></td>
    <td style="width:60%;"><div align="left">Rp. </div></td>
    <td style="width:50%;">  <div align="left"> <?php echo number_format($u->DJPfeebank, 2, ",", ".") ?></div></td>
    </tr>
    <tr>
    <td style="width:47%;"><div align="right">c.</div></td>
    <td style="width:90%;">Bea Materai </td>
    <td style="width:20%;"><div align="center">:</div></td>
    <td style="width:60%;"><div align="left">Rp.</div></td>
    <td style="width:50%;"><div align="left"> <?php echo number_format($u->DJPfeematerai, 2, ",", ".") ?></div></td>
    </tr>

    <tr><hr style="width: 25%;" align="right"  width="44%" />
    <td style="width:47%;"><div align="right">d.</div></td>
    <td style="width:90%;">Biaya Administrasi Penjaminan</td>
    <td style="width:20%;"><div align="center">:</div></td>
    <td style="width:60%;"><div align="left">Rp.</div></td>
    <td style="width:50%;"><div align="left"> <?php echo number_format($u->DJPfeeadmin, 2, ",", ".") ?></div></td>
    </tr>
</table>
<table cellspacing="0" style="width: 80%; font-size: 10pt;">
    <tr>
    <td style="width:37%;">&nbsp;</td>
    <td style="width:190%;"> Jumlah</td>
    <td style="width:20%;"><div align="center">:</div></td>
    <td style="width:60%;"><div align="left">Rp.</div></td>
    <td style="width:50%;"><div align="left"> <?php echo number_format($u->DJPjumlahbiaya, 2, ",", ".") ?></div></td>
    </tr>
</table><br>
<table cellspacing="0" style="width: 85%; ">
    <tr>

    <td style="width:10%;"> Terbilang</td>
    <td style="width:20%;"><div align="center">:</div></td>
    <td style="width:800%;"> <i><div align="left"> <?php echo $u->DJPjumlahbiayaterbilang ?></div></i></td>
    </tr>
</table>

<br>


<div style="width: 85%; " align="justify">Sertifikat penjaminan ini sekaligus berlaku sebagai nota tagihan, selanjutnya pembayaran biaya penjaminan tersebut diatas harap dilimpahkan pada rekening atas nama PT. PENJAMINAN KREDIT DAERAH PROVINSI RIAU, Nomor : <?php echo $u->RSrekening ?> Di <?php echo $u->RSbank ?>
<br>
<br>
    </div>

<table cellspacing="0" style="width: 80%; text-align: left;">
            <tr>
            <td></td>
                <td style="width:50%;" align="center">
                     Dibuat di Pekanbaru  <br> Tanggal <?php echo date('d F Y', strtotime($u->DJPtanggalcetak)); ?>   <br>
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

<div class="page_break"></div>
<table  cellspacing="0" style="width: 85%; text-align: center; ">
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
    <td style="width:30%;"><div align="left"> No Agenda</div></td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:130%;">  <?php
$DJPnoreg = "";
foreach ($table as $u) {?>
                    <?php if ($u->DJPnoreg != $DJPnoreg) {
    echo $u->DJPnoreg;
    $DJPnoreg = $u->DJPnoreg;
} else {

}}?></td>
  </tr>
 </table>

<table cellspacing="0" style="width: 85%;" >
    <tr>
    <td style="width:30%;">Bank Cabang</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:130%;"><?php echo $u->PPnama ?> </td>
  </tr>
</table>
<table cellspacing="0" style="width: 85%;" >
    <tr>
    <td style="width:30%;"> &nbsp;</td>
    <td style="width:10%;"> &nbsp;</div></td>
    <td style="width:130%;"><?php echo $u->PPalamat ?> </td>
  </tr>
</table>
<hr style="width: 85%;" align="right"  width="100%" />

<table cellspacing="0" style="width: 85%;">
  <tr>
    <td style="font-weight: bold; width:20%;">DATA DJP</td>
    <td style="font-weight: bold; width:10%;"><div align="right"> Jenis : <?php echo $u->JSPjenis ?></div></td>

</tr>
</table>

<table cellspacing="0" style="width: 85%; ">
 <tr>

    <td style="width:30%;"> Nomor Deklarasi</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->DJPnodeklarasi ?></td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> Tanggal </td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->DJPtanggaldeklarasi ?> </td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> Priode Deklarasi</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->DJPtanggaldeklarasi ?> </td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> Plafond/ Pert Rp. </td>
    <td style="width:10%;"><div align="center">:</div></td> 
    <td style="width:100%;"> <?php echo $u->DJPjumlahnilaipk.' / '. $u->DJPnilaipenjaminan ?> </td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> Debt./Tutup</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"> &nbsp; </td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> Jumlah PK</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"> <div align="right">Tanggal Rekam : <?=date('d-F-Y')?></div></td>
    </tr>
</table>
<br>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; "> KETERANGAN</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">  &nbsp; </td>
    <td style="width:10%;"> &nbsp;</td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">  &nbsp; </td>
    <td style="width:10%;"> &nbsp;</td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">  &nbsp; </td>
    <td style="width:10%;"> &nbsp;</td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">  &nbsp; </td>
    <td style="width:10%;"> &nbsp;</td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">  &nbsp; </td>
    <td style="width:10%;"> &nbsp;</td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">  &nbsp; </td>
    <td style="width:10%;"> &nbsp;</td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">  &nbsp; </td>
    <td style="width:10%;"> &nbsp;</td>
    <td style="width:100%;"> ...........................................................................................................</td>
    </tr>
</table>
<br>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%; ">STATUS</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"> Tutup/Tolak/Tutup Sebagian</td>
    </tr>
</table>
<?php if($u->JSPid == 2) { ?>

    <table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="font-weight: bold; width:30%;">DATA TERJAMIN</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%"> &nbsp; </td>
    </tr>
</table>


<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> Nama Terjamin</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->TRJMnama ?> </td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> Alamat Terjamin</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->TRJMalamat?> </td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> KTP</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->TRJMktp?> </td>
    </tr>
</table>

<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> SIUP</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->TRJMsiup?> </td>
    </tr>
</table>
<table cellspacing="0" style="width: 85%;">
 <tr>
    <td style="width:30%;"> NPWP</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:100%;"><?php echo $u->TRJMnpwp?> </td>
    </tr>
</table>
<?php } ?>

<br>
<br>
<br>
<br>
<br>


<hr style="width: 85%;" align="right"  width="100%" />



<table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
            <td><td style="width:90%;" align="center">
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
                    Tanggal Cetak :   <?=date('d-F-Y')?>  <br><br>
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

   <br>

    </body>
</html