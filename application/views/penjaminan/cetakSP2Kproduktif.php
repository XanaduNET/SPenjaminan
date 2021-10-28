<?php
header('Content-disposition: attachment; filename=SP2KProduktif.pdf');
header('Content-type: application/pdf');
?>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
     @page { margin: 96px 50px; }
     #header { position: fixed; left: 0px; top: -96px; right: 0px; height: 150px;}

     .page_break { page-break-before: always; }
   </style>
    </head>
    <body>
           <!-- header -->
    <div id="header">
<table cellspacing="0" style="width: 100%; " >
<tr>
<td><img src="<?php echo base_url('assets/images/bground.png'); ?>" width="200px" height="100px"/> </td>
<td width="100%"><span style="font-weight: bold; font-size: 14pt;  color: #000000"> PT. PENJAMINAN KREDIT DAERAH PROVINSI RIAU<br>(PT. JAMKRIDA RIAU)</span>
<span style=" font-size: 8pt;  color: #000000"><br>Jl. Sumatera No. 25 Pekanbaru, Kel. Simpang Empat, Kec. Pekanbaru Kota, telp/fax. 0761-7871467
	            website : www.jamkridariau.co.id, email : jamkrida.riau03@gmail.com</span>
</td>
</table>
</div>
<!-- header end -->
<div id="container" style="font-family:Tahoma;">
<!-- Paragraf 1 -->
<br>
<?php
foreach ($table->result() as $u) {
    ?>
<table  cellspacing="0" style="width: 100%; text-align: left; ">
<tr>

<td width="60%" style="vertical-align: top;">


                    <span style="font-size: 11pt;  color: #000000">Nomor&nbsp;&nbsp;:&nbsp;.../SP2K/V/JR/2021</span><br>
                    <span style="font-size: 11pt;  color: #000000">Lamp&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;-</span><br>
                    <span style="font-size: 11pt;  color: #000000">Perihal&nbsp;&nbsp;:&nbsp;Persetujuan Penjaminan Kredit </span><br>


</td>

<td>
                    <span style="font-size: 11pt;  color: #000000">Pekanbaru, 20 Mei 2021</span><br>
                    <span style="font-size: 11pt;  color: #000000"></span><br>

                    <span style="font-size: 11pt;  color: #000000">Kepada Yth : <br> PT. Bank Riau Kepri <br> <?php echo $u->PPnama; ?> <br>  di - <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $u->DAERAHnama ?></span>

</td>
 </tr>


</table>
<br>
<!-- Paragraf 1 End -->
<!-- Paragraf 2 -->
<div style="text-align: justify">
<span style="font-size: 11pt;  color: #000000;">Menunjuk surat <?php echo $u->PPnama; ?>  Nomor : <?php echo $u->CBCPnomormemo; ?>  Tanggal 16 April 2021 dimana berdasarkan hasil analisa dan persetujuan komite penjaminan PT. Jamkrida Riau, maka dengan ini kami sampaikan bahwa pada prinsipnya kami dapat menyetujui penjaminan kredit yang diajukan sebesar nilai plafond data sebagai berikut:</span>
</div>
<br>
<!-- Paragraf 2 End -->
<!-- Paragraf 3 -->
<span style="font-size: 11pt;  color: #000000;">
<table  cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
<td width="2%"> - </td>
<td width="36%"> Penerima Jaminan</td>
<td width="2%"> :</td>
<td width="60%"><?php echo $u->PPnama; ?></td>
 </tr>
 <tr>
<td width="2%"> - </td>
<td width="36%"> Terjamin </td>
<td width="2%"> : </td>
<td width="60%"><?php echo $u->TRJMnama; ?></td>
 </tr>
 <tr>
<td width="2%"> - </td>
<td width="36%"> Alamat </td>
<td width="2%"> : </td>
<td width="60%"><?php echo $u->TRJMalamat; ?></td>
 </tr>
 <tr>
<td width="2%"> - </td>
<td width="36%"> Plafond Kredit </td>
<td width="2%"> : </td>
<td width="60%"><?php echo "Rp." . number_format($u->CBCPplafondkredit, 0, ".", "."); ?></td>
 </tr>
 <tr>
<td width="2%"> - </td>
<td width="36%"> Plafond Yang Dijamin </td>
<td width="2%"> : </td>
<td width="60%"><?php
$hasil = ($u->CBCPrate / 100) * $u->CBCPplafondkredit;
    echo "Rp." . number_format($hasil, 0, ".", ".");?></td>
 </tr>
 <tr>
<td width="2%"> - </td>
<td width="36%"> Jangka Waktu </td>
<td width="2%"> : </td>
<td width="60%"><?php echo $u->CBCPjwk . "  Bulan"; ?></td>
 </tr>
 <tr>
<td width="2%"> - </td>
<td width="36%"> Rate IJP </td>
<td width="2%"> : </td>
<td width="60%"><?php echo $u->CBCPrate . "%"; ?></td>
 </tr>
 <tr>
<td width="2%"> - <  /td>
<td width="36%"> Coverage </td>
<td width="2%"> : </td>
<td width="60%"><?php echo $u->CBCPcoverage . "%"; ?></td>
 </tr>
</table>
</span>
<br>

<!-- Paragraf 3 End -->
<!-- Paragraf 4 -->
<span style="font-size: 11pt;  color: #000000">
<table  cellspacing="0" style="width: 100%; text-align: left; ">
<tr>

<td width="45%"style="vertical-align: top;">
Nilai Penjaminan
</td>
<td width="10%"></td>
<td></td>
</tr>
<tr>
<td>
Perhitungan Imbal Jasa Penjaminan
</td>
<td></td>
<td></td>
</tr>
<tr>
<td>
(<?php echo $u->CBCPrate . "% x Rp." . number_format($u->CBCPplafondkredit, 0, ".", "."); ?>)
</td>
<td></td>
<td> = &nbsp;&nbsp;&nbsp; <?php $hasil = ($u->CBCPrate / 100) * $u->CBCPplafondkredit;
    echo "Rp." . number_format($hasil, 0, ".", ".");?>
</tr>
<tr>
<td>Fee Bank 10% x <?php echo "Rp." . number_format($hasil, 0, ".", "."); ?></td>
<td></td>
<td> = <u> &nbsp;&nbsp; <?php
$hasil2 = (10 / 100) * $hasil;
    echo "Rp." . number_format($hasil2, 0, ".", ".");
    ?> </u> &nbsp;- </td>
</tr>
<tr>
<td> <b> Total <b> </td>
<td></td>
<td> = <b> &nbsp;&nbsp;&nbsp;<?php $hasil3 = $hasil - $hasil2;
    echo "Rp." . number_format($hasil3, 0, ".", ".");?></b></td>
</tr>
<?php
function Terbilang($satuan)
    {
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam",
            "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        if ($satuan < 12) {
            return " " . $huruf[$satuan];
        } else if ($satuan < 20) {
            return Terbilang($satuan - 10) . " Belas";
        } else if ($satuan < 100) {
            return Terbilang($satuan / 10) . " Puluh" .
            Terbilang($satuan % 10);
        } else if ($satuan < 200) {
            return " Seratus" . Terbilang($satuan - 100);
        } else if ($satuan < 1000) {
            return Terbilang($satuan / 100) . " Ratus" .
            Terbilang($satuan % 100);
        } else if ($satuan < 2000) {
            return " Seribu" . Terbilang($satuan - 1000);
        } else if ($satuan < 1000000) {
            return Terbilang($satuan / 1000) . " Ribu" .
            Terbilang($satuan % 1000);
        } else if ($satuan < 1000000000) {
            return Terbilang($satuan / 1000000) . " Juta" .
            Terbilang($satuan % 1000000);
        } else if ($satuan < 1000000000000) {
            return Terbilang($satuan / 1000000000) . " Milyar" .
            Terbilang($satuan % 1000000000);
        } else if ($satuan < 1000000000000000) {
            return Terbilang($satuan / 1000000000000) . " Trilyun" .
            Terbilang($satuan % 1000000000000);
        }
    }
    ?>
<tr>
<td colspan=3> &nbsp;</td>
</tr>
<tr>
<td colspan=3> <b><i> Terbilang : (<?php echo Terbilang($hasil3); ?>) </td>
</tr>
</table>
<br>
<!-- Paragraf 4 End -->
<!-- Paragraf 5 -->
<table  cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
<td>
    Selanjutnya pembayaran biaya penjaminan tersebut harap dilimpahkan ke rekening PT. Jamkrida Riau No. 101.20.03064 di BANK RIAU KEPRI CABANG UTAMA.<br>
    <br>
    Konfirmasi Bapak mengenai Persetujuan Prinsip harap dikirim kepada kami selambat-lambatnya 7 (tujuh) hari kerja sejak diterimanya surat ini. Pengiriman melebihi batas waktu tersebut tidak mengikat Penjamin untuk menerbitkan Sertifikat Penjaminan Kredit.
    <br>
    <br>
    Demikian disampaikan, atas perhatian  dan kerjasamanya kami mengucapkan terimakasih.
</td>
</tr>
     </table>
<br>
<br>
<!-- Paragraf 5 End -->
<!-- Paragraf 6 -->

<table cellspacing="0" style="width: 100%; text-align: center; ">
<tr>
<td width="50%">
<?php echo strtoupper($u->PPnama); ?><br><br><br><br><br><br>............................</td>
<td width="50%"> PT. JAMKRIDA RIAU<br><br><br><br><br><br><br>............................ </td>
</tr>
</table>

<!-- Paragraf 6 End -->
</span>
<?php }?>
</div>

<?php
$output = $dompdf->output();
file_put_contents("file.pdf", $output);
?>