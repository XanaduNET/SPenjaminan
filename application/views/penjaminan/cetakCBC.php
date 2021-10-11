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
    <div id="header">
     <!-- header -->


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
<!-- paragraf 1 -->

<table align="center" cellspacing="0" style="width: 50%; text-align: center; ">
<tr>

                <td>
                    <U><span style="font-weight: bold; font-size: 11pt;  color: #000000">MEMORANDUM</span></U><br>

                    <span style="font-size: 11pt;  color: #000000">
                    <?php
foreach ($table->result() as $u) {
    echo $u->CBCnomormemo;
}?>
</span>
</td>
        </tr>

</table>
<!-- paragraf 1 end -->

<!-- paragraf 2 -->
<table cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <span style="font-size: 11pt;  color: #000000">
    <td>Dari </td>
    <td>:   </td>
    <td>Divisi Penjaminan </td>
    </span>
</tr>

<tr>
    <span style="font-size: 11pt;  color: #000000">
    <td>Kepada </td>
    <td>:   </td>
    <td>Bapak Direktur PT. Jamkrida Riau </td>
    </span>
</tr>
<br>
<tr>
    <span style="font-size: 11pt;  color: #000000">
    <td>Tembusan </td>
    <td>:   </td>
    <td>Kadiv. Kepatuhan (Manajemen Resiko dan Legal) </td>
    </span>
</tr>
<br>
<tr>
    <span style="font-size: 11pt;  color: #000000">
    <td>Perihal </td>
    <td>:   </td>
    <td>Analisa Permohonan Penjaminan dari  <?php foreach ($table->result() as $u) {
    echo $u->PPnama;
}?> </td>
    </span>
</tr>

</table>
<!-- paragraf 2 end -->
___________________________________________________________________________________________
<br>
<br>
<br>

<!-- paragraf 3 -->
<table id="paragraf3" cellspacing="0" style="width: 100%; text-align: left; ">

<tr>
    <td> Dengan hormat, <br><br> </td>
</tr>
<tr>
<td> Menunjuk surat permohonan penjaminan kredit
<?php
foreach ($table->result() as $u) {
    echo $u->PPnama;
}?>
&nbsp;
a/n.
<?php
foreach ($table->result() as $u) {
    echo $u->TRJMnama;
}?>, dengan ini kami sampaikan gambaran singkat analisa untuk calon terjamin berdasarkan survei <i> on desk </i> yang kami lakukan tanggal 18 Februari 2021 :

</td>
</tr>

</table>
<!-- paragraf 3 end -->

<!-- paragraf 4 -->
<table id="paragraf4" cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <td colspan="2"> <br><br> <u> <b> Data Calon Terjamin </b> </u> </td>
</tr>
<tr>
    <td width="2%"> 1. </td>
    <td width="20%"> Nama </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->TRJMnama;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 2. </td>
    <td width="20%"> Tempat Tanggal Lahir </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->TRJMttl;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 3. </td>
    <td width="20%"> No. KTP </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->TRJMktp;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 4. </td>
    <td width="40%"> Alamat Sesuai KTP </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->TRJMalamat;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 5. </td>
    <td width="20%"> Pekerjaan </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->TRJMpekerjaan;
}
?> </td>
</tr>
</table>
<!-- paragraf 4 end -->

<!-- paragraf 5 -->

<table id="paragraf5" cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <td colspan="2"> <br><br> <u> <b> Data Permohonan Kredit </b> </u> </td>
</tr>
<tr>
    <td width="2%"> 1. </td>
    <td width="20%"> Jenis Fasilitas Kredit </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->CBCjenis;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 2. </td>
    <td width="20%"> Plafond Kredit </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo "Rp." . number_format($u->CBCplafondkredit, 0, ".", ".");
}
?> </td>
</tr>

<tr>
    <td width="2%"> 3. </td>
    <td width="20%"> Jangka Waktu Kredit </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->CBCjwk;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 4. </td>
    <td width="40%"> Angsuran Kredit </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo "Rp." . number_format($u->CBCangsurankredit, 0, ".", ".") . ",-Efektif Anuitas";
}
?> </td>
</tr>


</table>

<!-- paragraf 5 end -->


<!-- paragraf 6 -->

<table id="paragraf6" cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <td colspan="2"> <br><br> <u> <b> Data Bank Penerima Jaminan </b> </u> </td>
</tr>
<tr>
    <td width="2%"> 1. </td>
    <td width="20%"> Nama Bank </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->PPnama;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 2. </td>
    <td width="20%"> Alamat Bank </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->PPalamat;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 3. </td>
    <td width="20%"> Telp/fax </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->PPtelpon;
}
?> </td>
</tr>

<tr>
    <td width="2%"> 4. </td>
    <td width="40%"> Surat Permohonan Penjaminan </td>
    <td width="1%"> : </td>
    <td width="50%"> <?php foreach ($table->result() as $u) {
    echo $u->CBCsuratpermohonan;
}
?> </td>
</tr>
</table>

<!-- paragraf 6 end -->

<!-- paragraf 7 -->

<table id="paragraf7" cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <td> <br><br> <u> <b> Aspek Kesehatan </b> </u> </td>
</tr>

<tr>
<td>
<br>
<?php foreach ($table->result() as $u) {
    echo $u->CBCaspek_kesehatan;
}
?>
</td>
</tr>
</table>
<!-- paragraf 7 end -->

<!-- paragraf 8 -->

<table id="paragraf8" cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <td> <br><br> <u> <b> Aspek Agunan / Jaminan </b> </u> </td>
</tr>

<tr>
<td>
<br>
<?php foreach ($table->result() as $u) {
    echo $u->CBCaspek_agunan;
}
?>
</td>
</tr>
</table>
<!-- paragraf 8 end -->

<!-- paragraf 9 -->
<table id="paragraf9" cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <td> <br><br> <u> <b> Aspek Pinjaman </b> </u> </td>
</tr>

<tr>
<td>
<br>
<?php foreach ($table->result() as $u) {
    echo $u->CBCaspek_pinjaman;
}
?>
</td>
</tr>
</table>
<!-- paragraf 9 end -->

<!-- paragraf 10 -->
<table id="paragraf10" cellspacing="0" style="width: 100%; text-align: left; ">
<tr>
    <td> <br><br> <u> <b> Kesimpulan </b> </u> </td>
</tr>

<tr>
<td>
<br>
<?php foreach ($table->result() as $u) {
    echo $u->CBCkesimpulan;
}
?>
</td>
</tr>
</table>
<!-- paragraf 10 end -->

<!-- paragraf 11 -->

<table cellspacing="0" style="width: 100%; text-align: left;">
 <tr>
<td></td>
<td></td>
<td></td>
<td style="width: 100%; text-align: right;"> <br><br><br>Pekanbaru, <?=date('d F Y')?> </td>
<td style="width: 50%;"></td>
 </tr>
 <tr>
 <td style="width: 50%;"></td>
 <td height= "100px"> Mengetahui,</td>
 <td></td>
 <td></td>
 <td></td>
 </tr>
 <tr>
 <td height= "300px"></td>
 <td style="width: 100%; text-align: left;"  ><b><u> Samuel P </u></b><br>Plt. Kepala Divisi Penjaminan</td>
 <td></td>
 <td style="width: 100%; text-align: right;"><b><u> Ria Eka Sari Putri </u></b><br>Marketing/Analis</td>
 <td></td>
 </tr>
</table>
<!-- paragraf 11 end -->

<!-- paragraf 12 -->
<div class="page_break"></div>
<table align="center" cellspacing="0" style="width: 50%; text-align: center; ">
<tr>

                <td>
                    <U><span style="font-weight: bold; font-size: 11pt;  color: #000000"><br><br>LEMBAR PERSETUJUAN</span></U><br>

                    <span style="font-size: 11pt;  color: #000000">
                    <?php
foreach ($table->result() as $u) {
    echo $u->CBCnomormemo;
}?>
<br>
<br>
<br>
<br>
<br>
</span>
</td>
        </tr>

</table>

<!-- paragraf 12 end -->

<!-- paragraf 13 -->

<table frame="box" cellspacing="0" style="width: 100%; text-align:left;" >
<tr>
<td width="100%"> <b> KOMENTAR MANAJEMEN RESIKO</b> </td>
<td width="50%"> </td>
<td width="100%"></td>
</tr>
<tr>
<td><?php
foreach ($table->result() as $u) {
    echo $u->CBCmr;
}?> </td>
<td height="200px"></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td align="center">Ttd</td>
</tr>
</table >
<!-- paragraf 13 end -->
<br><br><br>
<!-- paragraf 14 -->

<table frame="box" cellspacing="0" style="width: 100%; text-align:left;" >
<tr>
<td width="100%"> <b>KOMENTAR LEGAL</b> </td>
<td width="50%"></td>
<td width="100%"></td>
</tr>
<tr>
<td><?php
foreach ($table->result() as $u) {
    echo $u->CBClegal;
}?> </td>
<td height="200px"></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td align="center">Ttd</td>
</tr>
</table >
<!-- paragraf 14 end -->
<br><br><br>
<!-- paragraf 14 -->

<table frame="box" cellspacing="0" style="width: 100%; text-align:left;" >
<tr>
<td width="100%"> <b>DIREKSI (SETUJU/TIDAK SETUJU)</b> </td>
<td width="50%"></td>
<td width="100%"></td>
</tr>
<tr>
<td><?php
foreach ($table->result() as $u) {
    echo $u->CBCdirektur;
}?> </td>
<td height="200px"></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td align="center">Ttd</td>
</tr>
</table >
<!-- paragraf 14 end -->
</div>
    </body>
</html>
