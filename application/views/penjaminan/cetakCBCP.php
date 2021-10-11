<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
     @page { margin: 110px 50px; }
     #header { position: fixed; left: 0px; top: -110px; right: 0px; height: 160px;}

     .page_break { page-break-before: always; }

     td.border-bottom {
        border: 1pt solid #000000;
      }
   </style>
    </head>
    <body>
    <div id="header">
     <!-- header -->

<table style="width: 100%; " >
<tr>
<td><img src="<?php echo base_url('assets/images/bground.png'); ?>" width="200px" height="100px"/> </td>
<td width="100%"><span style="font-weight: bold; font-size: 14pt;  color: #000000"> PT. PENJAMINAN KREDIT DAERAH PROVINSI RIAU<br>(PT. JAMKRIDA RIAU)</span>
<span style=" font-size: 8pt;  color: #000000"><br>Jl. Sumatera No. 25 Pekanbaru, Kel. Simpang Empat, Kec. Pekanbaru Kota, telp/fax. 0761-7871467
	            <br>website : www.jamkridariau.co.id, email : jamkrida.riau03@gmail.com</span>
</td>
</tr>
</table>
</div>
<!-- header end -->
<br>
<!-- paragraf 1 -->

<table  align="center" id="paragraf1"  style="width: 100%; text-align: center; ">

<tr>
    <td>
<U><span style="font-weight: bold; font-size: 11pt;  color: #000000">ANALISIS PERMOHONAN PENJAMINAN KREDIT<br><br></span></U><br>
    </td>
</tr>
</table>

<!-- paragraf 1 end -->


<!-- paragraf 2 -->



<table  id="paragraf2" style="width: 100%; text-align: left;">

<tr>
    <td width="30%">
    <span style="font-weight: bold; font-size: 11pt;  color: #000000">Permohonan Nomor</span>
    </td>
    <td>
    <span style="font-size: 11pt; font-weight: bold;  color: #000000">
                    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPnomormemo;
}?>
</span>
    </td>
</tr>
<tr>
    <td>
    <span style="font-weight: bold; font-size: 11pt;  color: #000000">Prinsipal</span>
    </td>
    <td>
    <span style="font-size: 11pt; font-weight: bold;  color: #000000">
                    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPprinsipal;
}?>
</span>
    </td>
</tr>
</table>

<!-- paragraf 2 end -->

<!-- paragraf 3 -->


<br>
<table id="paragraf3" frame="box" border="1" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">A. DESKRIPSI CALON TERJAMIN </span>
    </td>
</tr>
</table>
<table id="paragraf3anak" frame="box" style="width: 100%; text-align: left;">
<tr>
    <td width="30%">1.&nbsp;Nama Lengkap</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMnama;
}?> </td>
</tr>
<tr>
    <td>2.&nbsp;Tempat/Tgl Lahir</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMttl;
}?> </td>
</tr>
<tr>
    <td>3.&nbsp;No. Identitas Diri</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMktp;
}?> </td>
</tr>
<tr>
    <td>4.&nbsp;Alamat Sesuai KTP</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMalamat;
}?> </td>
</tr>
<tr>
    <td>5.&nbsp;Alamat Tinggal Saat Ini</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMalamatsaatini;
}?> </td>
</tr>
<tr>
    <td>6.&nbsp;Pekerjaan Calon Terjamin</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMpekerjaan;
}?> </td>
 </tr>
 <tr>
    <td>7.&nbsp;Jenis Usaha</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMusaha;
}?> </td>
</tr>
<tr>
    <td>8.&nbsp;NPWP Pribadi</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMnpwp;
}?> </td>
</tr>
<tr>
    <td>9.&nbsp;Status Pernikahan</td>
    <td>          <?php
foreach ($table->result() as $u) {
    echo $u->TRJMstatuspernikahan;
}?> </td>
</tr>
<tr>
    <td>10.&nbsp;Nama Suami/Istri</td>
    <td>          <?php
foreach ($table->result() as $u) {

    $this->db->where('TRJMid', $u->TRJMpasangan);
    $this->db->from('tbltrjm');
    $this->db->limit(1);
    $query = $this->db->get();

    foreach ($query->result() as $row) {
        echo $row->TRJMnama;
        $alamatpartner = $row->TRJMalamat;
        $pekerjaanpartner = $row->TRJMpekerjaan;
    }
}?> </td>
</tr>
<tr>
    <td>11.&nbsp;Alamat Sesuai KTP</td>
   <td> <?php
echo $alamatpartner;
?> </td>
</tr>
<tr>
    <td>12.&nbsp;Pekerjaan Suami/Istri</td>
    <td> <?php echo $pekerjaanpartner;

?> </td>
</tr>

</table>
<!-- paragraf 3 end -->

<!-- paragraf 4 -->

<br>
<table id="paragraf4" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">B. DESKRIPSI PERMOHONAN KREDIT CALON TERJAMIN </span>
    </td>
</tr>
</table>
<table d="paragraf4anak" frame="box" style="width: 100%; text-align: left;">
<tr>
    <td width="30%">  1.&nbsp;Jenis Fasilitas Kredit  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPjenis;
}?>
    <td>
</tr>
<tr>
    <td>  2.&nbsp;Sifat Kredit  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPsifat;
}?>
    </td>
</tr>
<tr>
    <td>  3.&nbsp;Plafond Kredit  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo "Rp." . number_format($u->CBCPplafondkredit, 0, ".", ".");
    $plafond = $u->CBCPplafondkredit;
}?>
    </td>
 </tr>
 <tr>
    <td>  4.&nbsp;Jangka Waktu Kredit  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPjwk . " Bulan";
}?>
    </td>
</tr>
<tr>
    <td>  5.&nbsp;Angsuran Kredit  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo "Rp." . number_format($u->CBCPangsurankredit, 0, ".", ".");
}?>
    </td>
</tr>
<tr>
    <td style="vertical-align:top">  6.&nbsp;Agunan Kredit  </td>
    <td width="70%">  <span style="font-size: 11pt;  color: #000000">
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPagunankredit;
}
?>
</span>
    </td>
</tr>
<tr>
    <td>  7.&nbsp;Rencana Penggunaan Kredit  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPrencanakredit;
}
?>
    </td>
</tr>

</table>
<!-- paragraf 4 end -->


<!-- paragraf 5 -->
<div class="page_break"></div>
<br>
<table id="paragraf5" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">C. DESKRIPSI BANK PENERIMA JAMINAN </span>
    </td>
</tr>
</table>
<table id="paragraf5anak" frame="box" style="width: 100%; text-align: left;">
<tr>
    <td width="30%">  1.&nbsp;Nama Bank  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->PPnama;
}?>
    <td>
</tr>
<tr>
    <td>  2.&nbsp;Alamat Bank  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->PPalamat;
}?>
    </td>
</tr>
<tr>
    <td>  3.&nbsp;Telp/fax </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->PPtelpon;
}?>
    </td>
 </tr>
 <tr>
    <td>  4.&nbsp;Contact Person  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPcontactperson;
}?>
    </td>
</tr>
<tr>
    <td>  5.&nbsp;Surat Permohonan Penjaminan  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPsuratpermohonan;
}?>
    </td>
</tr>
<tr>
    <td>  6.&nbsp;Keputusan Kelompok Pemutus Kredit </td>
    <td>  <span style="font-size: 11pt;  color: #000000">
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPkeputusan;
}
?>
</span>
    </td>
</tr>
</table>
<!-- paragraf 5 end -->

<!-- paragraf 6 -->

<br>
<table id="paragraf6" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">D. DESKRIPSI LEGALITAS </span>
    </td>
</tr>
</table>
<table id="paragraf6anak" frame="box" style="width: 100%; text-align: left;">
<tr>
    <td width="30%">  1.&nbsp;NPWP </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->TRJMnpwp;
}?>
    <td>
</tr>
<tr>
    <td>  2.&nbsp;Surat Keterangan Izin Usaha  </td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->TRJMsiup;
}?>
    </td>
</tr>
<tr>
    <td>  3.&nbsp;Izin-Izin Yang Jatuh Tempo</td>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPizinjatuhtempo;
}?>
    </td>
 </tr>
</table>
<!-- paragraf 6 end -->

<!-- paragraf 7 -->

<br>
<table id="paragraf7" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">E. DESKRIPSI SUMBER PENDAPATAN </span>
    </td>
</tr>
</table>
<table id="paragraf7anak" frame="box" style="width: 100%; text-align: left;">
<tr>
    <td>Telaah <i> On The Desk </i> (OTD) terhadap dokumen Analisa Permohonan Kredit <?php
foreach ($table->result() as $u) {
    echo $u->PPnama;
}?>, berikut deskripsi yang dapat kami sampaikan:  </td>
</tr>
<tr>
    <td>
    <?php
foreach ($table->result() as $u) {
    echo $u->CBCPdeskripsisumberpendapatan;
}?>
    </td>
</tr>
</table>
<!-- paragraf 7 end -->

<!-- paragraf 8 -->

<br>
<table id="paragraf8" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">F. DESKRIPSI USAHA PRODUKTIF </span>
    </td>
</tr>
</table>
<table id="paragraf8anak" frame="box" style="width: 100%; text-align: left;">
<tr>
    <td> <?php
foreach ($table->result() as $u) {
    echo $u->CBCPdeskripsiusaha;
}?></td>
</tr>

</table>
<!-- paragraf 8 end -->

<!-- paragraf 9 -->
<div class="page_break"></div>
<br>
<table id="paragraf9" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">G. DESKRIPSI AGUNAN/JAMINAN </span>
    </td>
</tr>
</table>
<table id="paragraf9anak" frame="box" style="width: 100%; text-align: left;">
<tr>
    <td style="vertical-align:top"> 1. Jenis Agunan/Jaminan<br>(foto agunan/jaminan terlampir)</td>
    <td colspan="3">
    <span style="font-size: 12pt;  color: #000000">
    <?php

foreach ($tableJA->result() as $u) {
    echo $u->JAjenisagunan;

}?>
 </span>
    </td>
</tr>

<tr>
<td></td>
<td></td>
    <td width="50%" style="text-align: center;">
    Tanah/m
    </td>
    <td width="50%" style="text-align: center;">
    Bangunan
    </td>

</tr>

<?php
$i = 1;
$totaltasaksi = 0;
$totaldasar = 0;
foreach ($tableJA->result() as $u) {

    ?>

<tr>
<td width="50%">
    Nilai Taksasi Agunan <?php echo $i; ?>
</td>
<td style="text-align: left;" >
    <?php echo "Rp." . number_format($u->JAnilaitasaksi, 0, ".", ".");

    $totaltasaksi += $u->JAnilaitasaksi;
    ?>

</td>
<td style="text-align: center;" >
    <?php echo "Rp." . number_format($u->JAnilaitasaksitanah, 0, ".", "."); ?>
</td>
<td style="text-align: center;" >
    <?php echo "Rp." . number_format($u->JAnilaitasaksibangunan, 0, ".", "."); ?>
</td>


</tr>
<tr>
<td width="50%">
    Nilai Dasar Agunan <?php echo $i; ?>
</td>
<td style="text-align: left;" >
    <?php echo "Rp." . number_format($u->JAnilaidasar, 0, ".", ".");
    $totaldasar += $u->JAnilaidasar;
    ?>
</td>
<td style="text-align: center;" >
    <?php echo "Rp." . number_format($u->JAnilaidasartanah, 0, ".", "."); ?>
</td>
<td style="text-align: center;" >
    <?php echo "Rp." . number_format($u->JAnilaidasarbangunan, 0, ".", "."); ?>
</td>

</tr>

<?php $i++;}?>


<tr>
<td><br> Total Taksasi Agunan </td>
<td> <b> <br> <?php echo "Rp." . number_format($totaltasaksi, 0, ".", "."); ?> </b></td>
</tr>
<tr>
<td> Total Dasar Agunan </td>
<td> <b>  <?php echo "Rp." . number_format($totaldasar, 0, ".", "."); ?> </b></td>
</tr>
</table>
<!-- paragraf 9 end -->


<!-- paragraf 10 -->
<div class="page_break"></div>
<br>
<table id="paragraf10" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">H. ANALISA PERMOHONAN PENJAMINAN </span>
    </td>
</tr>
</table>

<table id="paragraf10anak" frame="box" style="width: 100%; text-align: left; page-break-inside: auto; " >

<tr>
    <td colspan="3">
    Berdasarkan hasil <i>On The Desk </i> (OTD) dokumen permohonan penjaminan dari <?php
foreach ($table->result() as $u) {echo $u->PPnama;}?> maka hasil analisa kami yang dapat menjadi bahan pertimbangan Bapak terhadap permohonan penjaminan kredit atas nama <?php
foreach ($table->result() as $u) {echo strtoupper($u->TRJMnama);}?>  sbb :
    </td>
</tr>

    <?php
$i = 1;
foreach ($table->result() as $u) {
    echo $i . "." . $u->CBCPanalisadokumenidentitas;
    $i++;}
?><br>
    <?php
foreach ($tableOJK->result() as $u) {
    if ($u->CBCPojknamabank == "-") {
        ?> <tr> <td colspan="3" class="border-bottom"> <br> <?php echo $i . "." . $u->CBCPojkanalisaslikojk; ?> <br> <b> ### Data Tidak Ditemukan### </b> </td>
         </tr>
       <?php
$i++;} else {
        ?>
    <tr >
    <td colspan="3" class="border-bottom">
    <br>
    <?php
$i++;
        echo $i + 1 . "." . $u->CBCPojkanalisaslikojk;

        ?>
    </td>
</tr>
<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Nama Bank </td>
    <td style="text-align: left;"class="border-bottom">
    <?php

        echo $u->CBCPojknamabank;
        ?>
    </td>
</tr>

<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Jangka Waktu </td>
    <td style="text-align: left;"class="border-bottom">
    <?php

        echo $u->CBCPojkjwk . " bulan";
        ?>
    </td>
</tr>

<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Plafond Kredit </td>
    <td style="text-align: left;"class="border-bottom">
    <?php

        echo "Rp." . number_format($u->CBCPojkplafondkredit, 0, ".", ".");
        ?>
    </td>
</tr>

<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Tunggakan Pokok </td>
    <td style="text-align: left;"class="border-bottom">
    <?php

        echo "Rp." . number_format($u->CBCPojktunggakanpokok, 0, ".", ".");
        ?>
    </td>
</tr>
<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Tunggakan Bunga </td>
    <td style="text-align: left;"class="border-bottom">
    <?php

        echo "Rp." . number_format($u->CBCPojktunggakanbunga, 0, ".", ".");
        ?>
    </td>
</tr>

<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Angsuran </td>
    <td style="text-align: left;"class="border-bottom">
    <?php

        echo "Rp." . number_format($u->CBCPojkangsuran, 0, ".", ".");
        ?>
    </td>
</tr>

<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Kualitas </td>
    <td style="text-align: left;"class="border-bottom">
    <?php
echo $u->CBCPojkkualitas;
        ?>
    </td>
</tr>

<tr>
    <td width="10%"></td>
    <td style="text-align: left;"width="20%" class="border-bottom"> Kondisi </td>
    <td style="text-align: left;"class="border-bottom">
    <?php

        $str = $u->CBCPojkkondisi;
        list($one, $two) = explode("-", $str);
        echo "Rp." . number_format($one, 0, ".", ".") . " " . $two;
    }
    ?>
    </td>
</tr>
<?php
}

$i++;
?>

<?php
$totalpendapatan = 0;
foreach ($tablependapatan->result() as $u) {?>

<tr>
<td colspan="3">
Sumber Pendapatan
<?php echo $u->CBCPsumberpendapatan; ?>
 Calon Terjamin dari hasil telaah <i> On The Desk </i> melihat historis sebelumnya (rata-rata/bulan)
</td>
</tr>

<tr>
<td></td>
<td width="40%">
<?php echo $u->CBCPnamapendapatan; ?>
</td>
<td>
<?php echo "Rp." . number_format($u->CBCPpendapatanbulan, 0, ".", ".");
    $totalpendapatan += $u->CBCPpendapatanbulan;
    ?>
</td>
</tr>
<?php }?>
<tr>
<td></td>
<td>
<b> Total Pendapatan kotor
</td>

<td>
<?php echo "Rp." . number_format($totalpendapatan, 0, ".", "."); ?>
</td>
</tr>



<tr>
<td colspan="3">
Pengeluaran Calon Terjamin dari hasil telaah <i> On The Desk </i> laporan keuangan dari penerima jaminan
</td>
</tr>

<?php
$totalpengeluaran = 0;
foreach ($tablepengeluaran->result() as $u) {?>
<tr>
<td></td>
<td width="40%">
<?php echo $u->CBCPnamapengeluaran; ?>
</td>
<td>
<?php echo "Rp." . number_format($u->CBCPpengeluaranbulan, 0, ".", ".");
    $totalpengeluaran += $u->CBCPpengeluaranbulan;
    ?>
</td>
</tr>
<?php }?>
<tr>
<td></td>
<td> <b> TOTAL </b> </td>
<td> <?php echo "Rp." . number_format($totalpengeluaran, 0, ".", "."); ?>
</tr>

<tr>
<td>
</td>
</tr>

<tr>
<td></td>

<td>
<b>Laba Sebelum Pajak</b>
</td>
<td>

    <?php
$labasebelumpajak = $totalpendapatan - $totalpengeluaran;
echo "Rp." . number_format($labasebelumpajak, 0, ".", ".");?>
</td>
</tr>


<tr>
<td></td>

<td>
<b>Pajak Pendapatan</b>
</td>
<td>

    <?php
$pajakpendapatan = $labasebelumpajak * (10 / 100);
echo "Rp." . number_format($pajakpendapatan, 0, ".", ".");?>
</td>
</tr>

<tr>
<td></td>

<td>
<b>Laba Bersih</b>
</td>
<td>

    <?php
$lababersih = $labasebelumpajak - $pajakpendapatan;
echo "Rp." . number_format($lababersih, 0, ".", ".");?>
</td>

<td> <?php echo "Rp." . number_format($lababersih * 12, 0, ".", "."); ?>  /tahun</td>
</tr>

<!-- mulai angusran brk dan dispos -->
<tr><td></td></tr>
<tr>
    <td> </td>
    <td>
    Angsuran Bank
    </td>
    <td>
    <b>
<?php foreach ($table->result() as $u) {

    echo "Rp." . number_format($u->CBCPangsurankredit, 0, ".", ".");
    $angsuranbank = $u->CBCPangsurankredit;

}
?>
</b>
    </td>
</tr>

<tr>
    <td> </td>
    <td>Angsuran Exist</td>
<td><b>
<?php foreach ($table->result() as $u) {

    echo "Rp." . number_format($u->CBCPangsuranexist, 0, ".", ".");
    $angsuranexist = $u->CBCPangsuranexist;

}
?>
</b>
    </td>
</tr>

<tr>
<td colspan="3"> Analisa Perhitungan Kemampuan Bayar </td>
</tr>

<tr>
<td colspan="2"><b> Dissposible Income (DI) </b></td>
</tr>

<tr>
<td></td>
<td> Formula Yang Digunakan </td>
<td colspan="2"> DI = Total Penghasilan - Total Pengeluaran </td>
</tr>

<tr>
<td></td>
<td colspan="2" style="text-align: center;"> <b> <?php $di = $totalpendapatan - $totalpengeluaran;
echo "Rp." . number_format($di, 0, ".", ".");?> </b> </td>
<td>
<?php $persendi = ($di / ($totalpendapatan * (100 / 100))) * 100;
echo sprintf("%.2f", $persendi / 1) . "%";?>
</td>

<tr>
<td></td>
<td colspan ="3">
    <?php
if (sprintf("%.2f", $persendi / 1) <= 0.00) {
    echo "Dari hasil perhitungan, calon terjamin tidak memiliki sisa penghasilan dari penghasilan yang diterimanya.(" . sprintf("%.2f", $persendi / 1) . "%)";
} else {
    echo " Dari hasil perhitungan, calon terjamin memiliki sisa penghasilan sebesar "?> <b> <?php echo sprintf("%.2f", $persendi / 1) . "%"; ?> </b> <?php
}
?>
</td>
</tr>

<tr>
<td colspan="2"><b> Discretionary Income (Dis I) </b></td>
</tr>
<tr>
<td></td>
<td> Formula Yang Digunakan </td>
<td colspan="2"> Dis I = DI - Rencana Pengeluaran Angsuran dari total penghasilan </td>
</tr>

<tr>
<td></td>
<td colspan="2" style="text-align: center;"> <b> <?php $disi = $di - $angsuranbank;
echo "Rp." . number_format($disi, 0, ".", ".");?> </b> </td>
<td>
<?php $persendisi = ($disi / ($di * (100 / 100))) * 100;
echo sprintf("%.2f", $persendisi / 1) . "%";?>
</td>

<tr>
<td></td>
<td colspan ="3">
    <?php
if (sprintf("%.2f", $persendisi / 1) <= 0.00) {
    echo "Dari hasil perhitungan, calon terjamin tidak memiliki Discretionary Income (Dis I).(" . sprintf("%.2f", $persendisi / 1) . "%)";
} else {
    echo " Dari hasil perhitungan, calon terjamin Discretionary Income (Dis I) sebesar "?> <b> <?php echo sprintf("%.2f", $persendisi / 1) . "%"; ?> </b> <?php
}
?>
</td>
</tr>


<tr>
<td colspan="2"><b> Installment to Dispossible Income (IDIR) </b></td>
</tr>

<tr>
<td></td>
<td> Formula Yang Digunakan </td>
<td colspan="2"> IDIR=Rencana Angsuran + Angsuran Eksisting / Penghasilan Sebelum Angsuran X 100% </td>
</tr>

<tr>
<td></td>
<td colspan="2" style="text-align: center;">
<b> <?php $idir = (($angsuranbank + $angsuranexist) / $di * (100 / 100)) * 100;
echo sprintf("%.2f", $idir / 1) . "%";?> </b> </td>

</tr>

<tr>
<td colspan="2"> Agunan Calon terjamin </td>
</tr>
<tr>
<td></td>
<td> Total Taksasi Agunan </td>
<td> <b>  <?php echo "Rp." . number_format($totaltasaksi, 0, ".", "."); ?>  </b></td>
<td> <?php $tasaksipersen = ($totalpengeluaran / $plafond * (100 / 100)) * 100;
echo sprintf("%.2f", $tasaksipersen / 1) . "%";?></td>
</tr>
<tr>
<td></td>
<td> Nilai Dasar Agunan </td>
<td> <b>  <?php echo "Rp." . number_format($totaldasar, 0, ".", "."); ?>  </b></td>
<td> <?php $dasarpersen = ($totaldasar / $plafond * (100 / 100)) * 100;
echo sprintf("%.2f", $dasarpersen / 1) . "%";?></td>
</tr>

<tr>
<td colspan="4">
Dari hasil <i> On The Desk </i> (OTD), maka nilai dasar agunan calon terjamin ditaksir cover agunan sebesar <b>
<?php echo sprintf("%.2f", ($dasarpersen) / 1) . "%" ?> </b> dari plafond yang diajukan sebesar  <b ><?php echo "Rp." . number_format($plafond, 0, ".", "."); ?> </b>
</td>
</tr>
</table>
<!-- paragraf 10 end-->

<!-- paragraf 11 -->

<div class="page_break"></div>

<table id="paragraf11" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">I. KESIMPULAN </span>
    </td>
</tr>
</table>

<table id="paragraf11anak" frame="box" style="width: 100%; text-align: left; page-break-inside: auto; " >

<tr>
    <td>
    <?php foreach ($table->result() as $u) {

    echo $u->CBCPkesimpulan;

}?>
    </td>
</tr>
</table>
<!-- paragraf 11 end -->

<!-- paragraf 12 -->


<table id="paragraf12" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td>

    </td>
</tr>
</table>

<table id="paragraf12anak" frame="box" style="width: 100%; text-align: left; page-break-inside: auto; " >

<tr>
    <td height="10%">
    </td>
    <td style="text-align: left;">
    Mengetahui
    </td>
    <td>
    </td>
</tr>
<tr>
    <td height="10%">
    </td>
   <td style="text-align: left;">
   <u> <b> SAMUEL P  </u> </b> <br><b> Plt. Kepala Divisi Penjaminan </b>
    </td>

    <td>
    </td>
    <td>
    </td>
    <td style="text-align: right;">
   <u> <b> RIA EKA SARI PUTRI </u> </b> <br><b> Marketing/Analis </b>
    </td>
</tr>

</table>
<!-- paragraf 11 end -->

<!-- paragraf 13 -->


<table id="paragraf13" frame="box" style="width: 100%; text-align: left;">

<tr>
    <td bgcolor="black" width="100%">
    <span style="font-weight: bold; font-size: 11pt;  color: #FFFFFF">PUTUSAN PEMUTUS</span>
    </td>
</tr>
</table>

<table id="paragraf13anak" frame="box" style="width: 100%; text-align: left; page-break-inside: auto; " >

<tr>
    <td style="vertical-align:top"> Catatan </td>
    <td colspan="2" style="border: 1px solid black; text-align:center; " >
    Tanda Tangan & Tanggal Keputusan
    </td>
</tr>
<tr>
    <td width="50%">  </td>

</tr>

<tr>
    <td width="50%">  </td>
    <td  style="border: 1px solid black;  text-align:center; " >
    Menyetujui
    </td>
    <td  style="border: 1px solid black;  text-align:center; " >
    Menolak
    </td>
</tr>

<tr>
<td width="50%">  </td>
    <td  style="border: 1px solid black;  text-align:center; height:10%;" >

    </td>
    <td  style="border: 1px solid black;  text-align:center; height:10%;" >

</td>
</tr>
<tr>
    <td width="50%">  </td>
    <td colspan="2" style="border: 1px solid black; text-align:center; " >
    <b><u> AFRIZAL BERRY </u></b> <br> <u> Direktur Utama </u>
        </td>
</tr>
</table>
<!-- paragraf 11 end -->
    </body>
</html>
