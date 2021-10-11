<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body>
<div id="container" style="font-family:sans-serif;">
       <table cellspacing="0" style="width: 85%; text-align: right; ">
        <tr>
                <td style="width:100%;" align="left">
                    <span style="font-weight: bold; color: #000000">Lampiran Entry Data Registrasi DJP (BARU) Nomor :</span>

                    <?php
$DJPnoreg = "";
foreach ($table as $u) {?>
                    <?php if ($u->DJPnoreg != $DJPnoreg) {
    echo $u->DJPnoreg;
    $DJPnoreg = $u->DJPnoreg;
} else {

}}?>
                </td>
        </tr>
  </table>


<table cellspacing="0" style=" width: 100%; ">
  <tr>
    <td style="font-weight: bold;  width:100%;"><div align="left"> PENERIMA JAMINAN</div></td>
    <td style="width:0%;"><div align="left">:</div></td>
    <td style="width:425%;"><?php echo $u->PPnama ?>, <?php echo $u->PPalamat ?></td>
  </tr>
 </table>

 <table cellspacing="0" style=" width: 100%; ">
  <tr>
    <td style="font-weight: bold;  width:100%;"><div align="left"> Jenis Kredit</div></td>
    <td style="width:0%;"><div align="left">:</div></td>
    <td style="width:425%;"><?php echo $u->OPKjenis ?></td>
  </tr>
 </table> <br><br>
<table border="1" >
                                        <thead>
                                            <tr style="font-size: 12px;">
                                                <th style="text-align: center; " rowspan="2" class="header">No.</th>
                                                <th width="1000px" style="text-align:center; " colspan="2">Terjamin</th>
                                                <th width="1200px" style="text-align: center; " colspan="2">Perjanjian Kredit</th>
                                                <th  width="1400px" style="text-align: center; " colspan="3">Jangka Waktu Kredit</th>
                                                <th style="text-align: center; " rowspan="2" class="header">Jumlah Plafond</th>
                                                <th style="text-align: center; " rowspan="2" class="header">Jumlah Penjaminan</th>
                                                <th style="text-align: center; " rowspan="2" class="header">Cvrg.</th>
                                                <th style="text-align: center; " rowspan="2" class="header">Rate</th>
                                                <th style="text-align: center; " rowspan="2" class="header">Imblas Jasa Penjaminan</th>
                                                <th style="text-align: center; " rowspan="2" class="header">FEE BANK</th>
                                                <th style="text-align: center; " rowspan="2" class="header">IJP NET</th>
                                                <th style="text-align: center; " rowspan="2" class="header">Sektor Usaha</th>
                                            </tr>
                                            <tr style="font-size: 12px;">
                                                <th width="100px" style="text-align: center;  ">Nama</th>
                                                <th width="100px" style="text-align: center;  ">Alamat</th>
                                                <th style="text-align: center; " class="header">Nomor</th>
                                                <th style="text-align: center; " class="header">Tanggal</th>
                                                <th width="30px" style="text-align: center; " class="header">bln</th>
                                                <th width="100px" style="text-align: center; " class="header">Awal</th>
                                                <th width="100px" style="text-align: center; " class="header">Akhir</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
$no = 1;
foreach ($table as $u) {
    ?>
                                            <tr style="font-size: 12px;">

                                                <td><?php echo $no ?></td>
                                                <td><?php echo $u->TRJMnama ?></td>
                                                <td><?php echo $u->TRJMalamat ?></td>
                                                <td><?php echo $u->DJPDnoakad ?></td>
                                                <td><?php echo $u->DJPDtanggalakad ?></td>
                                                <td style="text-align: center;"><?php echo $u->DJPDjangkawaktu ?></td>
                                                <td style="text-align: center;"><?php echo $u->DJPDtanggalawal ?></td>
                                                <td style="text-align: center;"><?php echo $u->DJPDtanggalakhir ?></td>
                                                <td><?php echo "Rp." . number_format($u->DJPDplafondkredit, 0, ".", ".") ?></td>
                                                <td><?php echo "Rp." . number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?></td>
                                                <td><?php echo $u->DJPDcoverage ?></td>
                                                <td><?php echo $u->DJPDrate ?></td>
                                                <td><?php echo "Rp." . number_format($u->DJPDimbaljasa, 0, ".", ".") ?></td>
                                                <td><?php echo "Rp." . number_format((int) (($u->DJPDimbaljasa + $u->DJPfeeadmin + $u->DJPfeematerai) * (((int) $u->PKSratefee / 100))), 0, ".", ".") ?></td>
                                                <td><?php echo "Rp." . number_format($u->DJPDnilaipenjaminan, 0, ".", ".") ?></td>
                                                <td><?php echo $u->DJPDsu ?></td>


                                                <!--                                                     <td>
                                                      <a href="<?=base_url('index.php/detailtable/index/' . $u->DJPid)?>"  class="fa fa-eye"></a>
                                                      <a href="<?=base_url('index.php/detailtable/index/' . $u->DJPid);?>" class="fa fa-eye"></a>


                                                    </td> -->
                                            </tr>
                                            <?php
$no++;
}?>

                                        </tbody>
<tfoot>
    <tr style="font-size: 12px;">
        <th></th>
        <th style="text-align: left;" colspan="7">JUMLAH</th>
        <th><?php echo "Rp." . number_format($u->DJPjumlahnilaipk, 0, ".", ".") ?></th>
        <th><?php echo "Rp." . number_format($u->DJPjumlahbiaya, 0, ".", ".") ?></th>
        <th></th>
        <th></th>
        <th><?php echo "Rp." . number_format($u->DJPjumlahimbaljasa, 0, ".", ".") ?></th>
        <th><?php echo "Rp." . number_format($u->DJPfeebank, 0, ".", ".") ?></th>
        <th><?php echo "Rp." . number_format($u->DJPjumlahbiaya, 0, ".", ".") ?></th>
        <th></th>
    </tr>
</tfoot>
</table>
</div>
    </body>
</html