<div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Data Nasabah</h1>
            </div>

            <!-- ISI KONTEN -->

            <form id="formnasabah" method="post">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="col-md-2">Nama Terjamin</th>
                                            <th class="col-md-2">Alamat Terjamin</th>
                                            <th class="col-md-2">Usia Terjamin</th>
                                            <th class="col-md-2">KTP Terjamin</th>
                                            <th class="col-md-2">No Surat Izin Usaha Perdagangan</th>
                                            <th class="col-md-2">NPWP Terjamin</th>

                                            <th class="col-md-2">Kategori Pekerjaan</th>

                                            <th class="col-md-2">No Akad</th>
                                            <th class="col-md-2">Tanggal Akad</th>
                                            <th class="col-md-2">Jangka Waktu</th>
                                            <th class="col-md-2">Tanggal Awal</th>
                                            <th class="col-md-2">Tanggal Akhir</th>
                                            <th class="col-md-2">Plafond Kredit</th>
                                            <th class="col-md-2">Coverage Penjaminan</th>
                                            <th class="col-md-2">Nilai Penjaminan</th>
                                            <th class="col-md-2">Rate</th>
                                            <th class="col-md-2">Imbal Jasa</th>
                                            <th class="col-md-2">Tujuan Kredit</th>
                                            <th class="col-md-2">Jenis Agunan</th>
                                            <th class="col-md-2">Cara Pengikat</th>
                                            <th colspan ="2" class="col-md-2">Nilai Transaksi</th>
                                            <th class="col-md-2">Objek Penjaminan</th>
                                            <th class="col-md-2">Sektor Usaha</th>
                                        </tr>
                                        <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2"></th>
                                            <th class="col-md-2">Nilai Pasar</th>
                                            <th class="col-md-2">Nilai Likuidasi</th>

                                            <th class="col-md-2"></th>
                                        <tr>

                                        </tr>
                                    </thead>
                                    <tbody class="aselole">
                                        <div id="dynamic_field">

                                        <!-- looping -->
                                        <?php
$DJPid = $this->uri->segment(3);
$qry = $this->db->query("SELECT * FROM tbldjpd WHERE DJPid='$DJPid'");
$DJPD = $qry;
$i = 1;
foreach ($DJPD->result_array() as $djpdqry) {

    ?>
                                            <tr>
                                                <td><input type="text" id="TRJMnama<?=$i;?>" name="TRJMnama<?=$i;?>" class="TRJMnama" value="<?=$djpdqry['TRJMnama'];?>"></td>
                                                <td><input type="text" id="TRJMalamat<?=$i;?>" name="TRJMalamat<?=$i;?>" class="TRJMalamat" value="<?=$djpdqry['TRJMalamat'];?>" ></td>
                                                <td><input type="text" id="TRJMusia<?=$i;?>" name="TRJMusia<?=$i;?>" class="TRJMusia" value="<?=$djpdqry['TRJMusia'];?>"></td>
                                                <?php
$trjmid = (string) $djpdqry['TRJMid'];
    $qrytrjm2 = $this->db->query("SELECT * FROM tbltrjm WHERE TRJMid='$trjmid'");
    $TRJM = $qrytrjm2;
    foreach ($TRJM->result_array() as $trjmqry) {
        ?>
                                                <td><input type="text" id="TRJMsiup<?=$i;?>" name="TRJMsiup<?=$i;?>" class="TRJMsiup" value="<?=$trjmqry['TRJMsiup'];?>" > </td>
                                                <td><input type="text" id="TRJMktp<?=$i;?>" name="TRJMktp<?=$i;?>" class="TRJMktp" value="<?=$trjmqry['TRJMktp'];?>" ></td>
                                                <td><input type="text" id="TRJMnpwp<?=$i;?>" name="TRJMnpwp<?=$i;?>" class="TRJMnpwp" value="<?=$trjmqry['TRJMnpwp'];?>"  ></td>
    <?php }?>
                                                <input style="width: 100%;" type="hidden" name="DJPid<?=$i;?>" id="DJPid<?=$i;?>" class="DJPid"
                                                    class="form-control" value="<?php echo $this->uri->segment(3) ?> "
                                                    readonly>
                                                <input style="width: 100%;" type="hidden" name="OPKid<?=$i;?>" id="OPKid<?=$i;?>"
                                                    class="form-control" value="<?php echo $this->uri->segment(4) ?> "
                                                    readonly>

                                                <td><select id="PKRJid<?=$i;?>" name="PKRJid<?=$i;?>" class="PKRJid"/>
                                                        <option selected="selected"><?=$djpdqry['PKRJid'];?></option>
                                                        <?php

    foreach ($ambilpkrj as $row) {
        echo '<option value="' . $row->PKRJid . '">' . $row->PKRJnama . '</option>';
    }
    ?>   <div id="loading" style="margin-top: 15px;">
<img src="../img/loading.gif" width="18"> <small>Loading...</small>
</div></td>

                                                <td><input type="text" id="DJPDnoakad<?=$i;?>" name="DJPDnoakad<?=$i;?>" class="DJPDnoakad" value="<?=$djpdqry['DJPDnoakad'];?>" ></td>
                                                <td><input type="date" id="DJPDtanggalakad<?=$i;?>" name="DJPDtanggalakad<?=$i;?>" class="DJPDtanggalakad"
                                                        onchange='(copytextbox<?=$i;?>())' value="<?=$djpdqry['DJPDtanggalakad'];?>" ></td>
                                                <td><input type="text" id="DJPDjangkawaktu<?=$i;?>" name="DJPDjangkawaktu<?=$i;?>" class="DJPDjangkawaktu" value="<?=$djpdqry['DJPDjangkawaktu'];?>" >
                                                </td>
                                                <td><input type="date" id="DJPDtanggalawal<?=$i;?>" name="DJPDtanggalawal<?=$i;?>" class="DJPDtanggalawal"
                                                        readonly value="<?=$djpdqry['DJPDtanggalawal'];?>" ></td>
                                                <td><input type="date" id="DJPDtanggalakhir<?=$i;?>" name="DJPDtanggalakhir<?=$i;?>" class="DJPDtanggalakhir"
                                                        readonly value="<?=$djpdqry['DJPDtanggalakhir'];?>"></td>
                                                <td><input type="text" id="DJPDplafondkredit<?=$i;?>"
                                                        name="DJPDplafondkredit<?=$i;?>" class="DJPDplafondkredit" value="<?=$djpdqry['DJPDplafondkredit'];?>" ></td>
                                                <td><input type="text" id="DJPDcoverage<?=$i;?>" name="DJPDcoverage<?=$i;?>" class="DJPDcoverage"
                                                        onchange="(HitungPersendanRate<?=$i;?>())" value="<?=$djpdqry['DJPDcoverage'];?>" ></td>
                                                <td><input type="text" id="DJPDnilaipenjaminan<?=$i;?>"
                                                        name="DJPDnilaipenjaminan<?=$i;?>" class="DJPDnilaipenjaminan" value="<?=$djpdqry['DJPDnilaipenjaminan'];?>" readonly></td>
                                                <td><input type="text" id="DJPDrate<?=$i;?>" name="DJPDrate<?=$i;?>" class="DJPDrate" value="<?=$djpdqry['DJPDrate'];?>" ></td>
                                                <td><input type="text" id="DJPDimbaljasa<?=$i;?>" name="DJPDimbaljasa<?=$i;?>" class="DJPDimbaljasa"
                                                        readonly value="<?=$djpdqry['DJPDimbaljasa'];?>" ></td>
                                                <td><input type="text" id="DJPDtujuankredit<?=$i;?>" value="<?=$djpdqry['DJPDtujuankredit'];?>" name="DJPDtujuankredit<?=$i;?>" class="DJPDtujuankredit">
                                                </td>

                                                 <td><input type="text" id="DJPDjenisagunan<?=$i;?>" name="DJPDjenisagunan<?=$i;?>" class="DJPDjenisagunan" value="<?=$djpdqry['DJPDjenisagunan'];?>" ></td>
                                                <td><input type="text" id="DJPDcarapengikatan<?=$i;?>" name="DJPDcarapengikatan<?=$i;?>" class="DJPDcarapengikatan"  value="<?=$djpdqry['DJPDcarapengikatan'];?>" ></td>
                                                <td><input type="text" id="DJPDnilaitransaksipasar<?=$i;?>"
                                                        name="DJPDnilaitransaksipasar<?=$i;?>" class="DJPDnilaitransaksipasar" value="<?=$djpdqry['DJPDnilaitransaksipasar'];?>" ></td>
                                                <td><input type="text" id="DJPDnilaitransaksilikuidasi<?=$i;?>"
                                                        name="DJPDnilaitransaksilikuidasi<?=$i;?>" class="DJPDnilaitransaksilikuidasi" value="<?=$djpdqry['DJPDnilaitransaksilikuidasi'];?>" ></td>
                                                        <td><input type="text" id="DJPDsu<?=$i;?>" name="DJPDsu<?=$i;?>" class="DJPDsu" value="<?=$djpdqry['DJPDsu'];?>" ></td>
                                                        <td><input type="text" id="DJPDobjekpenjaminan<?=$i;?>" name="DJPDobjekpenjaminan<?=$i;?>" class="DJPDobjekpenjaminan" value="<?=$djpdqry['DJPDobjekpenjaminan'];?>" ></td>

                                            </tr>
<!-- Script Didalam Looping -->


    <!-- MUNCUL FORM -->

    <script>

    $(function() {


        $('#formnasabah').on('submit', function(e) {
            var data = $("#formnasabah :input").serialize();


            var TRJMnama = $('#TRJMnama').val();
            var TRJMalamat = $('#TRJMalamat').val();
            var TRJMusia = $('#TRJMusia').val();
            var TRJMsiup = $('#TRJMsiup').val();
            var TRJMktp = $('#TRJMktp').val();

            var TRJMnpwp = $('#TRJMnpwp').val();
            var PKRJid = $('#PKRJid').val();
            var DJPDnoakad = $('#DJPDnoakad').val();
            var DJPDtanggalakad = $('#DJPDtanggalakad').val();
            var DJPDjangkawaktu = $('#DJPDjangkawaktu').val();

            var DJPDtanggalawal = $('#DJPDtanggalawal').val();
            var DJPDtanggalakhir = $('#DJPDtanggalakhir').val();
            var DJPDplafondkredit = $('#DJPDplafondkredit').val();
            var DJPDnilaipenjaminan = $('#DJPDnilaipenjaminan').val();
            var DJPDcoverage = $('#DJPDcoverage').val();

            var DJPDrate = $('#DJPDrate').val();
            var DJPDimbaljasa = $('#DJPDimbaljasa').val();
            var DJPDtujuankredit = $('#DJPDtujuankredit').val();
            var DJPDjenisagunan = $('#DJPDjenisagunan').val();
            var DJPDcarapengikatan = $('#DJPDcarapengikatan').val();
            var DJPDnilaitransaksipasar = $('#DJPDnilaitransaksipasar').val();
            var DJPDnilaitransaksilikuidasi = $('#DJPDnilaitransaksilikuidasi').val();
            var DJPDsu = $('#DJPDsu').val();


        if(TRJMnama.length == 0 || TRJMalamat.length == 0 || TRJMusia.length == 0 || TRJMsiup.length == 0 || TRJMktp.   wlength == 0 || TRJMnpwp.length == 0 || PKRJid.length == 0 || DJPDnoakad.length == 0 || DJPDtanggalakad.length == 0 || DJPDjangkawaktu.length == 0 || DJPDtanggalawal.length == 0 || DJPDtanggalakhir.length == 0 || DJPDplafondkredit.length == 0 || DJPDnilaipenjaminan.length == 0 || DJPDcoverage.length == 0 || DJPDrate.length == 0 || DJPDimbaljasa.length == 0 || DJPDtujuankredit.length == 0 || DJPDjenisagunan.length == 0 || DJPDcarapengikatan.length == 0 || DJPDnilaitransaksipasar.length == 0 || DJPDnilaitransaksilikuidasi.length == 0 || DJPDsu.length == 0)
        {
            alert("Data Tidak Boleh Ada Yang Kosong !!");
            return false;
}
else{

    $.ajax({
                type: "POST",
                url: "<?=base_url('index.php/Nasabah/storePost');?>",
                data: data,
            });
}
            e.preventDefault();
            alert('Data Telah Berhasil Disimpan!');



});
});




    </script>

    <!-- END MUNCUL FORM -->







    <!-- STORE POST TOTAL-->
    <script>


    $(function() {
        $('#formbiayabiaya').on('submit', function(e) {

            var data = $("#formbiayabiaya :input").serialize();
            $.ajax({
                type: "POST",
                url: "<?=base_url('index.php/Nasabah/storePostTotal');?>",
                data: data,
            });
            ;
            alert('Data Telah Berhasil Disimpan!');


        });
    });
    </script>
    <!-- END  -->

    <!-- SCRIPT AUTO COPY -->
    <script>
    function copytextbox<?=$i;?>() {
        document.getElementById('DJPDtanggalawal<?=$i;?>').value = document.getElementById('DJPDtanggalakad<?=$i;?>').value;
    }
    </script>
    <!-- END -->
    <!-- SCRIPT AUTO -->
    <script type="text/javascript">
    function HitungPersendanRate<?=$i;?>() {
        var plafond = document.getElementById('DJPDplafondkredit<?=$i;?>').value;
        var coverage = document.getElementById('DJPDcoverage<?=$i;?>').value;
        var jwk = document.getElementById('DJPDjangkawaktu<?=$i;?>').value;
        var jenispkrj = document.getElementById('PKRJid<?=$i;?>').value;
        var opk = document.getElementById('OPKid<?=$i;?>').value;

        var plafond2 = parseInt(plafond.split('.').join(''));
        var coverage2 = parseInt(coverage);
        var nilaipnjm = (coverage2 / 100) * plafond2;

        document.getElementById("DJPDnilaipenjaminan<?=$i;?>").value = nilaipnjm;




        if (nilaipnjm != null) {
            $.ajax({
                url: "<?=base_url('index.php/Nasabah/cariRate');?>",
                type: 'post',
                data: {
                    coverage: coverage2,
                    jwk: jwk,
                    pkrj: jenispkrj,
                    opk: opk,
                    plafond: plafond2,
                },
                success: function(data) {
                    var data2 = $.parseJSON(data) // success callback function
                    document.getElementById('DJPDrate<?=$i;?>').value = data2[0].IJPrate
                    document.getElementById('DJPDimbaljasa<?=$i;?>').value = data2[0].IJPhasil
                }
            });

        }
    }
    </script>

    <!-- END -->

    <!-- SCRIPT KIRIM BULAN -->

    <script>
    $('#DJPDjangkawaktu<?=$i;?>').on('change', function() {
        const tglawal = document.getElementById('DJPDtanggalawal<?=$i;?>').value;
        const jwk = document.getElementById('DJPDjangkawaktu<?=$i;?>').value;

        $.ajax({
            url: "<?=base_url('index.php/Nasabah/kirimBulan');?>",
            type: 'post',
            data: {
                tglawal: tglawal,
                jwk: jwk
            },
            success: function(data) {
                var data2 = $.parseJSON(data) // success callback function
                document.getElementById('DJPDtanggalakhir<?=$i;?>').value = data2[0].tanggalakhir

            }
        });
    });
    </script>
    <!-- END  -->
   <script>

function convertRupiah(angka, prefix) {
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split  = number_string.split(","),
    sisa   = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

	if (ribuan) {
		separator = sisa ? "." : "";
		rupiah += separator + ribuan.join(".");
	}

	rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
	return prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "";
}

function isNumberKey(evt) {
    key = evt.which || evt.keyCode;
	if ( 	key != 188 // Comma
		 && key != 8 // Backspace
		 && key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
		 && (key < 48 || key > 57) // Non digit
		)
	{
		evt.preventDefault();
		return;
	}
}


    </script>

<script>

var DJPDplafondkreditrubah = document.getElementById("DJPDplafondkredit<?=$i;?>");
DJPDplafondkreditrubah.addEventListener('keyup', function(e) {
 DJPDplafondkreditrubah.value = convertRupiah(this.value);
});
DJPDplafondkreditrubah.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});

var DJPDimbaljasarubah = document.getElementById("DJPDimbaljasa<?=$i;?>");
DJPDimbaljasarubah.addEventListener("click", function(e) {
 DJPDimbaljasarubah.value = convertRupiah(this.value);
});

DJPDimbaljasarubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});

var DJPDnilaipenjaminanrubah = document.getElementById("DJPDnilaipenjaminan<?=$i;?>");
DJPDnilaipenjaminanrubah.addEventListener("click", function(e) {
    DJPDnilaipenjaminanrubah.value = convertRupiah(this.value);
});
DJPDnilaipenjaminanrubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});

var DJPDnilaitransaksipasarrubah = document.getElementById("DJPDnilaitransaksipasar<?=$i;?>");
DJPDnilaitransaksipasarrubah.addEventListener("click", function(e) {
     DJPDnilaitransaksipasarrubah.value = convertRupiah(this.value);
});
DJPDnilaitransaksipasarrubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});

var DJPDnilaitransaksilikuidasirubah = document.getElementById("DJPDnilaitransaksilikuidasi<?=$i;?>");
DJPDnilaitransaksilikuidasirubah.addEventListener("click", function(e) {
     DJPDnilaitransaksilikuidasirubah.value = convertRupiah(this.value);
});
DJPDnilaitransaksilikuidasirubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});



</script>

<!-- End Script Didalam Looping -->
                                            <?php $i++;}?>
                                            <!-- looping -->
                                        </div>
                                    </tbody>
                                </table>

                            </div>
                            <div class="card-footer">

                                <button type="submit" class="btn btn-primary" id="simpannasabah">Simpan</button>
                            </div>
            </form>
        </div>
    </div>



    <!-- DARI UNTUK FROM BIAYA -->


    <!-- Looping -->
    <?php
$DJPid = $this->uri->segment(3);
$qry = $this->db->query("SELECT * FROM tbldjph WHERE DJPid='$DJPid'");
$DJP = $qry;

foreach ($DJP->result_array() as $djpqry) {
    ?>

    <form id="formbiayabiaya" method="post">
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <div class="col md-auto">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card" style="text-align:right">
                                <h5 class="card-header">Biaya-biaya</h5>
                                <div class="card-body">

                                    <div class="form-group row " style="text-align:right">
                                        <label class="col-md-8">NILAI PLAFOND TERTINGGI</label>
                                        <div class="col ml-auto">
                                            <input style="width: 100%;" type="text"
                                                id="DJPmaxnilai" name="DJPmaxnilai" class="DJPmaxnilai" value="<?=$djpqry['DJPmaxnilai']?>" placeholder="">
                                        </div>
                                    </div>



                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">TAHUN</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" name="DJPtahun" class="DJPtahun" id="DJPtahun" value="<?=$djpqry['DJPtahun']?>">
                                        </div>
                                    </div>


                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">JUMLAH PK </label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" name="DJPpk" id="DJPpk" class="DJPpk"
                                                 value="<?=$djpqry['DJPjumlahpk']?>">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">PLAFOND KREDIT</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text"
                                                id="DJPjumlahnilaipk" name="DJPjumlahnilaipk" class="DJPjumlahnilaipk" value="<?=$djpqry['DJPjumlahnilaipk']?>" placeholder="">
                                        </div>
                                    </div>

                                    <!-- /.card-header -->

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">NILAI PENJAMINAN</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text"
                                                class="DJPnilaipenjaminan"
                                                data-dropdown-css-class="select2-danger"  id="DJPnilaipenjaminan"
                                                name="DJPnilaipenjaminan" value="<?=$djpqry['DJPnilaipenjaminan']?>" placeholder="">

                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">IMBAL JASA(IJP)</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="DJPjumlahimbaljasa"
                                                id="DJPjumlahimbaljasa" name="DJPjumlahimbaljasa" value="<?=$djpqry['DJPjumlahimbaljasa']?>" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">

                                        <label class="col-md-8"> <input type="checkbox" name="check_feebank" id="check_feebank"
                                                alt="Checkbox" value="feebank"> FEE BANK</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text"  id="DJPfeebank"
                                                name="DJPfeebank" class="DJPfeebank" value="<?=$djpqry['DJPfeebank']?>" placeholder="">
                                            <input style="width: 100%;" type="text"
                                                id="DJPjumlahfeebank" name="DJPjumlahfeebank" class="DJPjumlahfeebank" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8"><input type="checkbox" name="check_materai" id ="check_materai"
                                                alt="Checkbox" value="materai"> MATERAI</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="DJPfeematerai"
                                                id="DJPfeematerai" name="DJPfeematerai" value="<?=$djpqry['DJPfeematerai']?>" placeholder="" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">BIAYA ADM</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="DJPfeeadmin"
                                                id="DJPfeeadmin" name="DJPfeeadmin" value="<?=$djpqry['DJPfeeadmin']?>" placeholder="" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">JUMLAH BIAYA</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="DJPjumlahbiaya"
                                                id="DJPjumlahbiaya" name="DJPjumlahbiaya" placeholder="" value="<?=$djpqry['DJPjumlahbiaya']?>">
                                            <input style="width: 100%;" type="hidden" name="DJPid" id="DJPid"
                                                class="DJPid" value="<?php echo $this->uri->segment(3) ?> "
                                                readonly>
                                            <input style="width: 100%;" type="hidden" class="DJPjumlahbiayaterbilang"
                                                id="DJPjumlahbiayaterbilang" name="DJPjumlahbiayaterbilang"
                                                placeholder="" value="<?=$djpqry['DJPjumlahbiayaterbilang']?>" >
                                        </div>
                                    </div>


<?php }?>
<script>
var DJPmaxnilairubah = document.getElementById("DJPmaxnilai");
DJPmaxnilairubah.addEventListener("click", function(e) {
 DJPmaxnilairubah.value = convertRupiah(this.value);
});
DJPmaxnilairubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});

var DJPjumlahnilaipkrubah = document.getElementById("DJPjumlahnilaipk");
DJPjumlahnilaipkrubah.addEventListener("click", function(e) {
 DJPjumlahnilaipkrubah.value = convertRupiah(this.value);
});
DJPjumlahnilaipk.addEventListener('click', function(event) {
	return isNumberKey(event);
});

var DJPnilaipenjaminanrubah = document.getElementById("DJPnilaipenjaminan");
DJPnilaipenjaminanrubah.addEventListener("click", function(e) {
    DJPnilaipenjaminanrubah.value = convertRupiah(this.value);
});
DJPnilaipenjaminanrubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});
var DJPfeebankrubah = document.getElementById("DJPfeebank");
DJPfeebankrubah.addEventListener("keyup", function(e) {
     DJPfeebankrubah.value = convertRupiah(this.value);
});
DJPfeebankrubah.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});
var DJPjumlahfeebankrubah = document.getElementById("DJPjumlahfeebank");
DJPjumlahfeebankrubah.addEventListener("click", function(e) {
     DJPjumlahfeebankrubah.value = convertRupiah(this.value);
});
DJPjumlahfeebankrubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});
var DJPfeematerairubah = document.getElementById("DJPfeematerai");
DJPfeematerairubah.addEventListener("keyup", function(e) {
     DJPfeematerairubah.value = convertRupiah(this.value);
});
DJPfeematerairubah.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});
var DJPfeeadminrubah = document.getElementById("DJPfeeadmin");
DJPfeeadminrubah.addEventListener("keyup", function(e) {
     DJPfeeadminrubah.value = convertRupiah(this.value);
});
DJPfeeadminrubah.addEventListener('keydown', function(event) {
	return isNumberKey(event);
});
var DJPjumlahbiayarubah = document.getElementById("DJPjumlahbiaya");
DJPjumlahbiayarubah.addEventListener("click", function(e) {
     DJPjumlahbiayarubah.value = convertRupiah(this.value);
});
DJPjumlahbiayarubah.addEventListener('click', function(event) {
	return isNumberKey(event);
});
</script>

<script>
    $('#DJPjumlahimbaljasa').on('click', function() {

        var djp = document.getElementById('DJPid').value;



        $.ajax({
            url: "<?=base_url('index.php/Nasabah/penjaminanHasil');?>",
            type: 'post',
            data: {
                djpid: djp,
            },
            success: function(data) {
                var data2 = $.parseJSON(data) // success callback function

                document.getElementById('DJPmaxnilai').value = data2[0].nilaipert;
                document.getElementById('DJPtahun').value = new Date().getFullYear();
                document.getElementById('DJPpk').value = data2[0].jumlahPK;
                document.getElementById('DJPjumlahnilaipk').value = data2[0].plafond;
                document.getElementById('DJPnilaipenjaminan').value = data2[0].nilaipenjaminan;
                document.getElementById('DJPjumlahimbaljasa').value = data2[0].imbaljasa;
                var DJPjumlahimbaljasarubah = document.getElementById("DJPjumlahimbaljasa");
DJPjumlahimbaljasarubah.addEventListener("mouseover", function(e) {
     DJPjumlahimbaljasarubah.value = convertRupiah(this.value);
});
DJPjumlahimbaljasarubah.addEventListener('mouseover', function(event) {
	return isNumberKey(event);
});
                $imbaljasa = parseInt(data2[0].imbaljasa);

                if( ($("#check_feebank").prop("checked") == true ) && ($("#check_materai").prop("checked") == true)   ){
                document.getElementById('DJPfeebank').value = data2[0].feebank;


                $feebank = parseInt(data2[0].feebank);

                $jumlahfeebank = $imbaljasa * ($feebank / 100);


                }

                else if ( ($("#check_feebank").prop("checked") == false)  && ($("#check_materai").prop("checked") == true)){
                $jumlahfeebank = 0;


                document.getElementById('DJPfeebank').value = "0%";
                document.getElementById('DJPjumlahfeebank').value = 0;
                }

                else if(($("#check_feebank").prop("checked") == true)  && ($("#check_materai").prop("checked") == false))
                {
                document.getElementById('DJPfeematerai').value = 0;

                document.getElementById('DJPfeebank').value = data2[0].feebank;
                $feebank = parseInt(data2[0].feebank);

                $jumlahfeebank = $imbaljasa * ($feebank / 100);

                }

                else{

                document.getElementById('DJPfeematerai').value = 0;
                $jumlahfeebank = 0;
                document.getElementById('DJPfeebank').value = "0%";
                document.getElementById('DJPjumlahfeebank').value = 0;
                }


                $adm = parseInt(document.getElementById('DJPfeeadmin').value);
                $materai = parseInt(document.getElementById('DJPfeematerai').value);
                document.getElementById('DJPjumlahfeebank').value = $jumlahfeebank;
                $jumlahbiaya = ($imbaljasa - $jumlahfeebank) + $materai + $adm;
                var jumlahterbilang = $jumlahbiaya;
                document.getElementById('DJPjumlahbiaya').value = $jumlahbiaya;

            }
        });
    });
    </script>

<!-- End Looping -->
                                    <div class="form-group row" style="text-align:right">

                                        <div class="col md-auto">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </form>




</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>