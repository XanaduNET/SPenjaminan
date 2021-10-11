<?php
/**
 * HTML2PDF Librairy - example
 *
 * HTML => PDF convertor
 * distributed under the LGPL License
 *
 * @author      Laurent MINGUET <webmaster@html2pdf.fr>
 *
 * isset($_GET['vuehtml']) is not mandatory
 * it allow to display the result in the HTML format
 */

// get the HTML
//ob_start();

$tgl = date('d');
$bln = date('m');
$thn = date('Y');
switch ($bln) {
    case 1:{ $bln = 'Januari';}break;
    case 2:{ $bln = 'Februari';}break;
    case 3:{ $bln = 'Maret';}break;
    case 4:{ $bln = 'April';}break;
    case 5:{ $bln = 'Mei';}break;
    case 6:{ $bln = "Juni";}break;
    case 7:{ $bln = 'Juli';}break;
    case 8:{ $bln = 'Agustus';}break;
    case 9:{ $bln = 'September';}break;
    case 10:{ $bln = 'Oktober';}break;
    case 11:{ $bln = 'November';}break;
    case 12:{ $bln = 'Desember';}break;
    //pemberian nama default jika tidak ada nama bulan
    default:{ $bln = 'Tidak Terdeteksi';}break;
}

// $date1 = "2008-03-15";
// $date2 = "2011-03-16";

$tgl_awal1 = isset($val) ? $val->tanggal_akad : '';
$tgl_awal = date_format(date_create_from_format('Y-m-d', $tgl_awal1), 'd-m-Y');

$tgl_akhir1 = isset($val) ? $val->tgl_jatuh_tempo : '';
$tgl_akhir = date_format(date_create_from_format('Y-m-d', $tgl_akhir1), 'd-m-Y');

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

$diff = abs(strtotime($tgl_akhir1) - strtotime($tgl_awal1));

$years = floor($diff / (365 * 60 * 60 * 24));
$months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
$jml_rate = "$years.$months";
//debugCode($jml_rate);
$msg = isset($val) ? $val->nomor_penjaminan : '';
?>
<page backcolor="#FEFEFE" backimgx="center" backimgy="bottom" backimgw="100%" backtop="25" backbottom="3mm" style="font-size: 11pt
backbottom="10mm" backleft="20mm" backright="20mm" >
    <page_header>
        <table style="width: 100%; border: solid 0px black;">
            <tr>
                <td style="text-align: left;    width: 50%"></td>
                <td style="text-align: right;    width: 50%"></td>
            </tr>
        </table>
	</page_header>
  <div style="rotate: 90; position: absolute; width: 230mm; height: 30mm; left: 180mm; top: 0; font-style: italic; font-weight: normal; text-align: center; font-size: 2.5mm;">
  </div>
    <table align="center" cellspacing="0" style="width: 100%; text-align: left; font-size: 14px">
        <tr>
				<br>
                <br>
                <br>
                <td style="width:50%;" align="center">
					<span style="font-weight: bold; font-size: 14pt; text-align: center; color: #014505">SERTIFIKAT PENJAMINAN KUR</span><br>
					<b><?php echo isset($val) ? $val->nomor_penjaminan : ''; ?></b><br>
					<b><?php echo isset($val) ? $val->group : ''; ?></b><br>
					<br>
                </td>
        </tr>
  </table>
<?php
$kdcab = isset($val) ? $val->cabang : '';
//$query = $this->db->query("SELECT no_pks,tgl_pks,persen_fee from par_mitra where kode_inst='$inst'");

$qry = $this->db->query("SELECT * from par_cab_mitra WHERE kode_cab='$kdcab'");
$r = $qry->row();
//debugCode($kdcab);
//new
$tgl_awal = isset($val) ? $val->tanggal_akad : '';
$tgl_akhir = isset($val) ? $val->tgl_jatuh_tempo : '';
$diff = abs(strtotime($tgl_akhir) - strtotime($tgl_awal));
$bulan = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
$interval = date_diff($tgl_awal, $tgl_akhir);
$date1 = date_create($tgl_awal);
$date2 = date_create($tgl_akhir);
$diff12 = date_diff($date2, $date1);
$years = $diff12->y; //tahun pinjaman
//$months = $diff12->m;
$masa = $years * 12;
$jml_bln = $masa + $bulan;

//$tahun_mulai = date_format(date_create_from_format('Y', $tgl_awal), 'Y-m-d');
$tahun_mulai = date_format($date1, "Y");

$date1 = date_create($tgl_awal);
//
$nmcab = $r->nama;
$alamat = $r->alamat;
$no_rekening = $r->no_rekening;
$cab_rekening = $r->cab_rekening;
$nilai_akad = isset($val) ? number_format($val->nilai_akad, 0, ',', '.') : '0';
$nilai_akad = str_replace(".", "", $nilai_akad);
//tambahan
$angsuran_pkk = $nilai_akad / $jml_bln;
$sisa_bln = $jml_bln % 12;
$pokok_pertahun = $angsuran_pkk * 12;
$baki1 = $nilai_akad;
$baki2 = $nilai_akad - $pokok_pertahun;
$baki3 = $baki2 - $pokok_pertahun;
$baki4 = $baki3 - $pokok_pertahun;
$baki5 = $baki4 - $pokok_pertahun;

$n_akad = isset($val) ? $val->nilai_akad : '';

if ($sisa_bln == "0") {
    if ($jml_bln == 12) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp = $ijp_th1;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp = $ijp_th1;
        }
    } else if ($jml_bln == 24) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp = $ijp_th1 + $ijp_th2;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp = $ijp_th1 + $ijp_th2;
        }
    } else if ($jml_bln == 36) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp_th3 = $baki3 * 0.015;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp_th3 = $baki3 * 0.0175;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3;
        }
    } else if ($jml_bln == 48) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp_th3 = $baki3 * 0.015;
            $ijp_th4 = $baki4 * 0.015;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp_th3 = $baki3 * 0.0175;
            $ijp_th4 = $baki4 * 0.0175;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4;
        }
    } else if ($jml_bln == 60) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp_th3 = $baki3 * 0.015;
            $ijp_th4 = $baki4 * 0.015;
            $ijp_th5 = $baki5 * 0.015;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4 + $ijp_th5;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp_th3 = $baki3 * 0.0175;
            $ijp_th4 = $baki4 * 0.0175;
            $ijp_th5 = $baki5 * 0.0175;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4 + $ijp_th5;
        }
    }
} else {
    //jika tidak genab
    if ($jml_bln <= 12) {
        $baki1 = $angsuran_pkk * $jml_bln;
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th1 = $ijp_th1 / 12;
            $ijp_th1 = $ijp_th1 * $sisa_bln;
            $ijp = $ijp_th1;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th1 = $ijp_th1 / 12;
            $ijp_th1 = $ijp_th1 * $sisa_bln;
            $ijp = $ijp_th1;
        }
    } else if ($jml_bln > 12 && $jml_bln <= 24) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp_th2 = $ijp_th2 / 12;
            $ijp_th2 = $ijp_th2 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp_th2 = $ijp_th2 / 12;
            $ijp_th2 = $ijp_th2 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2;

        }
    } else if ($jml_bln > 24 && $jml_bln <= 36) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp_th3 = $baki3 * 0.015;
            $ijp_th3 = $ijp_th3 / 12;
            $ijp_th3 = $ijp_th3 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp_th3 = $baki3 * 0.0175;
            $ijp_th3 = $ijp_th3 / 12;
            $ijp_th3 = $ijp_th3 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3;
        }
    } else if ($jml_bln > 36 && $jml_bln <= 48) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp_th3 = $baki3 * 0.015;
            $ijp_th4 = $baki4 * 0.015;
            $ijp_th4 = $ijp_th4 / 12;
            $ijp_th4 = $ijp_th4 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp_th3 = $baki3 * 0.0175;
            $ijp_th4 = $baki4 * 0.0175;
            $ijp_th4 = $ijp_th4 / 12;
            $ijp_th4 = $ijp_th4 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4;
        }
    } else if ($jml_bln > 48 && $jml_bln <= 60) {
        if ($tahun_mulai == "2016" || $n_akad > 50000000) {
            $ijp_th1 = $baki1 * 0.015;
            $ijp_th2 = $baki2 * 0.015;
            $ijp_th3 = $baki3 * 0.015;
            $ijp_th4 = $baki4 * 0.015;
            $ijp_th5 = $baki5 * 0.015;
            $ijp_th5 = $ijp_th5 / 12;
            $ijp_th5 = $ijp_th5 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4 + $ijp_th5;
        } else {
            $ijp_th1 = $baki1 * 0.0175;
            $ijp_th2 = $baki2 * 0.0175;
            $ijp_th3 = $baki3 * 0.0175;
            $ijp_th4 = $baki4 * 0.0175;
            $ijp_th5 = $baki5 * 0.0175;
            $ijp_th5 = $ijp_th5 / 12;
            $ijp_th5 = $ijp_th5 * $sisa_bln;
            $ijp = $ijp_th1 + $ijp_th2 + $ijp_th3 + $ijp_th4 + $ijp_th5;
        }
    }
}

//$ijp= $ijp_th1 + $ijp_th2 + $ijp_th3+$ijp_th4+$ijp_th5;
//$ijp= $ijp_th1 + $ijp_th2;
// if ($masa <= 12){
// $baki1 = $angsuran_pkk * $masa;
// if ($tahun_mulai=="2016"){
// $ijp = $baki1 * 0.015;
// }else{
// $ijp = $baki1 * 0.0175;
// }
// }else{

//0.0175

//$ijpv=isset($ijpv)?number_format($ijp_total,0,',','.'):'0';
//$ijpv= $nilai_akad * 0.015 * $jml_rate;
//$ijpv=isset($ijpv)?number_format($ijpv,0,',','.'):'0';
//$ijpv=ijpv * $years;

$ijpv = isset($ijp) ? number_format($ijp, 0, ',', '.') : '0';

$sektor = isset($val) ? $val->sektor : '';
$qrysektor = $this->db->query("SELECT * from par_sektor WHERE sektor='$sektor'");
$rc = $qrysektor->row();
$nmsektor = $rc->keterangan;
?>

    <div align="justify">Dengan ini PENJAMIN (PT. Jamkrida Riau) yang berkedudukan di Jl. Sumatera No. 25 Pekanbaru, Kelurahan Simpang Empat, Kecamatan Pekanbaru Kota, memberikan Penjaminan Kredit Usaha Rakyat (KUR) atas kredit-kredit dengan data dan ketentuan-
	ketentuan sebagai berikut :
<br>
      <br>
	  <br>
	</div>
    <h4 align="center">IKHTISAR PENJAMINAN</h4>

<table cellspacing="0" style="width: 88%; font-size: 10pt;">
  <tr>
    <td style="width:10%;"><div align="center">I</div></td>
    <td style="width:35%;">PENERIMA JAMINAN</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;"><?php echo $nmcab; ?></td>
  </tr>
  <tr>
    <td style="width:10%;">&nbsp;</td>
    <td style="width:35%;">&nbsp;</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo $alamat; ?></td>
  </tr>
  <tr>
    <td style="width:5%;"><div align="center">II</div></td>
    <td style="width:35%;">DATA MENGENAI TERJAMIN</td>
    <td style="width:10%;"><div align="center"></div></td>
    <td style="width:50%;" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:35%;">1. Nama</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo isset($val) ? $val->nama : ''; ?></td>
  </tr>
  <tr>
    <td style="width:10 %;"></td>
    <td style="width:35%;">2. Alamat</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo isset($val) ? $val->alamat : ''; ?></td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:30%;">3. No.KTP</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo isset($val) ? $val->nik : ''; ?></td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:35%;">4. No. Surat Izin Usaha</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo isset($val) ? $val->no_izin_usaha : ''; ?></td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:35%;">5. NPWP</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo isset($val) ? $val->npwp : ''; ?></td>
  </tr>
  <br><br>
  <tr>
    <td style="width:5%;"><div align="center">III</div></td>
    <td style="width:40%;">KETENTUAN PENJAMINAN KUR</td>
    <td style="width:10%;"><div align="center"></div></td>
    <td style="width:50%;" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:35%;">1. Jangka Waktu Penjaminan</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo isset($val) ? $val->tanggal_akad : ''; ?> s/d <?php echo isset($val) ? $val->tgl_jatuh_tempo : ''; ?></td>
  </tr>

  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:35%;">2. Jumlah Plafond</td>
    <td style="width:5%;"><div align="center">:</div></td>
    <td  style="width:35%;">Rp. <?php echo isset($val) ? number_format($val->nilai_akad, 0, ',', '.') : '0'; ?>,00
    <div align="right"></div></td>
    <td style="width:5%;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:35%;">3. Jumlah Penjaminan</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:40%;">Rp. <?php echo isset($val) ? number_format($val->nilai_dijamin, 0, ',', '.') : '0'; ?>,00</td>
    <td style="width:5%;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:35%;">4. Coverage</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:45%;">75 %</td>
    <td style="width:5%;">&nbsp;</td>
  </tr>
  <tr>
    <td style="width:10 %;"></td>
    <td style="width:35%;">5. Sektor Usaha</td>
    <td style="width:10%;"><div align="center">:</div></td>
    <td style="width:50%;" colspan="3"><?php echo isset($val) ? $val->sektor : ''; ?> <?php echo $nmsektor; ?></td>
  </tr>
  <tr>
    <td style="width:5%;">&nbsp;</td>
    <td style="width:40%;">6. Imbal Jasa Penjaminan (IJP)</td>
    <td style="width:5%;"><div align="center">:</div></td>
    <td style="width:50%;">Rp. <?php echo $ijpv; ?>,00</td>
    <td style="width:0%;">&nbsp;</td>
  </tr>
<?php

//$ijp = isset($val)?number_format($val->jumlah_ijp,0,',','.'):'0';
//$fee_bank= isset($val)?number_format($val->fee,0,',','.'):'0';
//$tot = $ijp - $fee_bank;
?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <?php
$total = isset($val) ? $val->total : '';
//$tgl_terakhir = date('t-M-Y', strtotime($tgl_awal)); * akhir bulan
//$tgl_terakhir = date('d-M-Y', strtotime($tgl_awal));
$tgl_terakhir = date('d-M-Y');
?>
  <tr>
    <td>&nbsp;</td>
    <td colspan="5">Terbilang : <span class="isi" style="width:450px; padding:5px; background: #ccc;"><i><b><?php echo trim(Terbilang($ijp)) == "" ? "Nol" : Terbilang($ijp); ?> Rupiah </b></i></span></td>
  </tr>
</table>

    <nobreak>
        <br>
        <p align="justify">Sertifikat penjaminan KUR ini sekaligus berlaku sebagai nota tagihan, selanjutnya pembayaran
		biaya penjaminan tersebut di atas harap dilimpahkan pada rekening atas nama PT. Penjaminan Kredit Daerah Provinsi Riau, nomor : 118-20-04732 di Bank Riau Kepri Cabang Pembantu Tangkerang.</p><br>
        <br>
      <table cellspacing="0" style="width: 100%; text-align: left;">
            <tr>
              <td style="width:50%;" align="center"><qrcode value="<?php echo $msg; ?>" style="width: 20mm;"></qrcode></td>
                <td style="width:50%;" align="center">
                    Dibuat di <?php echo myLetter($this->jCfg['user']['kota']) . ", " . $tgl_terakhir; ?> <br>
                    <b>PT. JAMKRIDA RIAU</b><br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<b><u>AFRIZAL BERRY</u></b><br>
					Direktur Utama<br>
              </td>
            </tr>
      </table>
    </nobreak>

</page>