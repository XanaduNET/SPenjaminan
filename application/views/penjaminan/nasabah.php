<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
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
                                            <th colspan="2" class="col-md-2">Nilai Transaksi</th>
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
                                            <tr>
                                                <td><input type="text" id="TRJMnama" name="TRJMnama[]"></td>
                                                <td><input type="text" id="TRJMalamat" name="TRJMalamat[]"></td>
                                                <td><input type="text" id="TRJMusia" name="TRJMusia[]"></td>
                                                <td><input type="text" id="TRJMsiup" name="TRJMsiup[]"></td>
                                                <td><input type="text" id="TRJMktp" name="TRJMktp[]"></td>
                                                <td><input type="text" id="TRJMnpwp" name="TRJMnpwp[]"></td>
                                                <input style="width: 100%;" type="hidden" name="DJPid" id="DJPid"
                                                    class="form-control" value="<?php echo $this->uri->segment(2) ?> "
                                                    readonly>
                                                <input style="width: 100%;" type="hidden" name="OPKid" id="OPKid"
                                                    class="form-control" value="<?php echo $this->uri->segment(3) ?> "
                                                    readonly>

                                                <td><select id="PKRJid" name="PKRJid[]" />
                                                    <option selected="selected">--Pilih--</option>
                                                    <?php

foreach ($ambilpkrj as $row) {
    echo '<option value="' . $row->PKRJid . '">' . $row->PKRJnama . '</option>';
}
?> <div id="loading" style="margin-top: 15px;">
                                                        <img src="../img/loading.gif" width="18">
                                                        <small>Loading...</small>
                                                    </div>
                                                </td>

                                                <td><input type="text" id="DJPDnoakad" name="DJPDnoakad[]"></td>
                                                <td><input type="date" id="DJPDtanggalakad" name="DJPDtanggalakad[]"
                                                        onchange="(copytextbox())"></td>
                                                <td><input type="text" id="DJPDjangkawaktu" name="DJPDjangkawaktu[]">
                                                </td>
                                                <td><input type="date" id="DJPDtanggalawal" name="DJPDtanggalawal[]"
                                                        readonly></td>
                                                <td><input type="date" id="DJPDtanggalakhir" name="DJPDtanggalakhir[]"
                                                        readonly></td>
                                                <td><input type="text" id="DJPDplafondkredit"
                                                        name="DJPDplafondkredit[]"></td>
                                                <td><input type="text" id="DJPDcoverage" name="DJPDcoverage[]"
                                                        onchange="(HitungPersendanRate())"></td>
                                                <td><input type="text" id="DJPDnilaipenjaminan"
                                                        name="DJPDnilaipenjaminan[]" readonly></td>
                                                <td><input type="text" id="DJPDrate" name="DJPDrate[]"></td>
                                                <td><input type="text" id="DJPDimbaljasa" name="DJPDimbaljasa[]"
                                                        readonly></td>
                                                <td><input type="text" id="DJPDtujuankredit" name="DJPDtujuankredit[]">
                                                </td>

                                                <td><input type="text" id="DJPDjenisagunan" name="DJPDjenisagunan[]">
                                                </td>
                                                <td><input type="text" id="DJPDcarapengikatan"
                                                        name="DJPDcarapengikatan[]"></td>
                                                <td><input type="text" id="DJPDnilaitransaksipasar"
                                                        name="DJPDnilaitransaksipasar[]"></td>
                                                <td><input type="text" id="DJPDnilaitransaksilikuidasi"
                                                        name="DJPDnilaitransaksilikuidasi[]"></td>
                                                <td><input type="text" id="DJPDsu" name="DJPDsu[]"></td>
                                                <td><input type="text" id="DJPDobjekpenjaminan"
                                                        name="DJPDobjekpenjaminan[]"></td>

                                            </tr>
                                        </div>
                                    </tbody>
                                </table>

                            </div>
                            <div class="card-footer">

                                <?php if ($this->uri->segment(4) == 2) {

    //
} else {?>
                                <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
                                <?php }?>
                                <button type="submit" class="btn btn-primary" id="simpannasabah">Simpan</button>
                            </div>
            </form>
        </div>
    </div>



    <!-- DARI UNTUK FROM BIAYA -->

    <form id="formbiayabiaya" method="post" style="display: none; ">
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
                                            <input style="width: 100%;" type="text" class="form-control"
                                                id="DJPmaxnilai" name="DJPmaxnilai" placeholder="">
                                        </div>
                                    </div>



                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">TAHUN</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" name="DJPtahun" id="DJPtahun"
                                                class="form-control" value="">
                                        </div>
                                    </div>


                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">JUMLAH PK </label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" name="DJPpk" id="DJPpk"
                                                class="form-control" value="">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">PLAFOND KREDIT</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="form-control"
                                                id="DJPjumlahnilaipk" name="DJPjumlahnilaipk" placeholder="">
                                        </div>
                                    </div>

                                    <!-- /.card-header -->

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">NILAI PENJAMINAN</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text"
                                                class="form-control select2 select2-danger"
                                                data-dropdown-css-class="select2-danger" id="DJPnilaipenjaminan"
                                                name="DJPnilaipenjaminan" placeholder="">

                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">IMBAL JASA(IJP)</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="form-control"
                                                id="DJPjumlahimbaljasa" name="DJPjumlahimbaljasa" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">

                                        <label class="col-md-8"> <input type="checkbox" name="check_feebank"
                                                id="check_feebank" alt="Checkbox" value="feebank"> FEE BANK</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="form-control" id="DJPfeebank"
                                                name="DJPfeebank" placeholder="">
                                            <input style="width: 100%;" type="text" class="form-control"
                                                id="DJPjumlahfeebank" name="DJPjumlahfeebank" placeholder="">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8"><input type="checkbox" name="check_materai"
                                                id="check_materai" alt="Checkbox" value="materai"> MATERAI</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="form-control"
                                                id="DJPfeematerai" name="DJPfeematerai" placeholder="" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">BIAYA ADM</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="form-control"
                                                id="DJPfeeadmin" name="DJPfeeadmin" placeholder="" value="0">
                                        </div>
                                    </div>

                                    <div class="form-group row" style="text-align:right">
                                        <label class="col-md-8">JUMLAH BIAYA</label>
                                        <div class="col md-auto">
                                            <input style="width: 100%;" type="text" class="form-control"
                                                id="DJPjumlahbiaya" name="DJPjumlahbiaya" placeholder="">
                                            <input style="width: 100%;" type="hidden" name="DJPid" id="DJPid"
                                                class="form-control" value="<?php echo $this->uri->segment(2) ?> "
                                                readonly>
                                            <input style="width: 100%;" type="hidden" class="form-control"
                                                id="DJPjumlahbiayaterbilang" name="DJPjumlahbiayaterbilang"
                                                placeholder="">
                                        </div>
                                    </div>


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

    <!-- Modal -->
    <div class="modal fade" id="ModalPKRJ" tabindex="-1" role="dialog" aria-labelledby="ModalPKRJLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalPKRJLabel">Tambah Pekerjaan Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="formModalPKRJ" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="PKRJ" name="PKRJ" placeholder="Nama Pekerjaan">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SAMPAI SINI -->


    <!-- MUNCUL FORM -->

    <script>
    $(function() {


        $('#formnasabah').on('submit', function(e) {

            $('#formbiayabiaya').css('display', 'block');
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


            if (TRJMnama.length == 0 || TRJMalamat.length == 0 || TRJMusia.length == 0 || TRJMsiup
                .length == 0 || TRJMktp.wlength == 0 || TRJMnpwp.length == 0 || PKRJid.length == 0 ||
                DJPDnoakad.length == 0 || DJPDtanggalakad.length == 0 || DJPDjangkawaktu.length == 0 ||
                DJPDtanggalawal.length == 0 || DJPDtanggalakhir.length == 0 || DJPDplafondkredit
                .length == 0 || DJPDnilaipenjaminan.length == 0 || DJPDcoverage.length == 0 || DJPDrate
                .length == 0 || DJPDimbaljasa.length == 0 || DJPDtujuankredit.length == 0 ||
                DJPDjenisagunan.length == 0 || DJPDcarapengikatan.length == 0 || DJPDnilaitransaksipasar
                .length == 0 || DJPDnilaitransaksilikuidasi.length == 0 || DJPDsu.length == 0) {
                alert("Data Tidak Boleh Ada Yang Kosong !!");
                return false;
            } else {

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
            });;
            alert('Data Telah Berhasil Disimpan!');


        });
    });
    </script>
    <!-- END  -->
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

                if (($("#check_feebank").prop("checked") == true) && ($("#check_materai").prop(
                        "checked") == true)) {
                    document.getElementById('DJPfeebank').value = data2[0].feebank;


                    $feebank = parseInt(data2[0].feebank);

                    $jumlahfeebank = $imbaljasa * ($feebank / 100);



                } else if (($("#check_feebank").prop("checked") == false) && ($("#check_materai")
                        .prop("checked") == true)) {
                    $jumlahfeebank = 0;


                    document.getElementById('DJPfeebank').value = "0%";
                    document.getElementById('DJPjumlahfeebank').value = 0;
                } else if (($("#check_feebank").prop("checked") == true) && ($("#check_materai")
                        .prop("checked") == false)) {
                    document.getElementById('DJPfeematerai').value = 0;

                    document.getElementById('DJPfeebank').value = data2[0].feebank;
                    $feebank = parseInt(data2[0].feebank);

                    $jumlahfeebank = $imbaljasa * ($feebank / 100);

                } else {

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



    <!-- SCRIPT ADD MORE -->


    <script type="text/javascript">
    $(document).ready(function() {

        var i = 1;



        $('#add').click(function() {
            i++;

            $('#myTable').append('<tbody id="tbltambah' + i +
                '"><tr>   <td><input type="text" id="TRJMnama' + i +
                '" name="TRJMnama[]"></td>   <td><input type="text" id="TRJMalamat' + i +
                '" name="TRJMalamat[]" ></td>  <td><input type="text" id="TRJMusia' + i +
                '" name="TRJMusia[]" ></td> <td><input type="text" id="TRJMsiup' + i +
                '" name="TRJMsiup[]" ></td>   <td><input type="text" id="TRJMktp' + i +
                '" name="TRJMktp[]" ></td>  <td><input type="text" id="TRJMnpwp' + i +
                '" name="TRJMnpwp[]" ></td>  <td><select id="PKRJid' + i +
                '" name="PKRJid[]">    <option selected="selected">--Pilih--</option>  <?php foreach ($ambilpkrj as $row) {echo '<option value="' . $row->PKRJid . '">' . $row->PKRJnama . '</option>';}?></td>   <td><input type="text" id="DJPDnoakad' +
                i + '" name="DJPDnoakad[]"></td>   <td><input type="date" id="DJPDtanggalakad' + i +
                '" name="DJPDtanggalakad[]" ></td>  <td><input type="text" id="DJPDjangkawaktu' +
                i + '" name="DJPDjangkawaktu[]"></td><td><input type="date" id="DJPDtanggalawal' +
                i + '" name="DJPDtanggalawal[]"></td> <td><input type="date" id="DJPDtanggalakhir' +
                i +
                '" name="DJPDtanggalakhir[]" readonly></td><td><input type="text" id="DJPDplafondkredit' +
                i +
                '" name="DJPDplafondkredit[]"></td>   <td><input type="text" id="DJPDcoverage' +
                i +
                '" name="DJPDcoverage[]"></td>   <td><input type="text" id="DJPDnilaipenjaminan' +
                i +
                '" name="DJPDnilaipenjaminan[]"></td>  <td><input type="text" id="DJPDrate' + i +
                '" name="DJPDrate[]"></td> <td><input type="text" id="DJPDimbaljasa' + i +
                '" name="DJPDimbaljasa[]"></td><td><input type="text" id="DJPDtujuankredit' + i +
                '" name="DJPDtujuankredit[]"></td> <td><input type="text" id="DJPDjenisagunan"' +
                i +
                '"name="DJPDjenisagunan[]"></td>    <td><input type="text" id="DJPDcarapengikatan"' +
                i +
                '" name="DJPDcarapengikatan[]"></td>  <td><input type="text" id="DJPDnilaitransaksipasar' +
                i +
                '" name="DJPDnilaitransaksipasar[]"> <td><input type="text" id="DJPDnilaitransaksilikuidasi' +
                i +
                '" name="DJPDnilaitransaksilikuidasi[]" > </td>    <td><input type="text" id="DJPDsu"' +
                i + '" name="DJPDsu[]"></td> <td><input type="text" id="DJPDobjekpenjaminan"' + i +
                '" name="DJPDobjekpenjaminan[]"></td><td> <button type="button" name="remove" id="' +
                i + '" class="btn btn-danger btn_remove">X</button> </td> </tbody>');


            var DJPDplafondkreditrubah = document.getElementById("DJPDplafondkredit" + i);
            DJPDplafondkreditrubah.addEventListener("keyup", function(e) {
                DJPDplafondkreditrubah.value = convertRupiah(this.value);
            });
            DJPDplafondkreditrubah.addEventListener('keydown', function(event) {
                return isNumberKey(event);
            });

            var DJPDimbaljasarubah = document.getElementById("DJPDimbaljasa" + i);
            DJPDimbaljasarubah.addEventListener("click", function(e) {
                DJPDimbaljasarubah.value = convertRupiah(this.value);
            });
            DJPDimbaljasa.addEventListener('click', function(event) {
                return isNumberKey(event);
            });

            var DJPDnilaipenjaminanrubah = document.getElementById("DJPDnilaipenjaminan" + i);
            DJPDnilaipenjaminanrubah.addEventListener("click", function(e) {
                DJPDnilaipenjaminanrubah.value = convertRupiah(this.value);
            });
            DJPDnilaipenjaminanrubah.addEventListener('click', function(event) {
                return isNumberKey(event);
            });

            var DJPDnilaitransaksipasarrubah = document.getElementById("DJPDnilaitransaksipasar" + i);
            DJPDnilaitransaksipasarrubah.addEventListener("click", function(e) {
                DJPDnilaitransaksipasarrubah.value = convertRupiah(this.value);
            });
            DJPDnilaitransaksipasarrubah.addEventListener('click', function(event) {
                return isNumberKey(event);
            });
            var DJPDnilaitransaksilikuidasirubah = document.getElementById(
                "DJPDnilaitransaksilikuidasi" + i);
            DJPDnilaitransaksilikuidasirubah.addEventListener("click", function(e) {
                DJPDnilaitransaksilikuidasirubah.value = convertRupiah(this.value);
            });
            DJPDnilaitransaksilikuidasirubah.addEventListener('click', function(event) {
                return isNumberKey(event);

            });


            function convertRupiah(angka, prefix) {
                var number_string = angka.replace(/[^,\d]/g, "").toString(),
                    split = number_string.split(","),
                    sisa = split[0].length % 3,
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
                if (key != 188 // Comma
                    &&
                    key != 8 // Backspace
                    &&
                    key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
                    &&
                    (key < 48 || key > 57) // Non digit
                ) {
                    evt.preventDefault();
                    return;
                }
            }

            $("#PKRJid" + i).dblclick(function() {

                $('#ModalPKRJ').modal('show');

            });

            $(document).ready(function() {

                $("#loading").hide();
                $("#formModalPKRJ").submit(function(e) {
                    $("#PKRJid" + i).eq().hide(); // Sembunyikan dulu combobox kota nya
                    $("#loading").show();

                    $.ajax({
                        type: "POST", // Method pengiriman data bisa dengan GET atau POST
                        url: "<?php echo base_url("index.php/Nasabah/inputPKRJ"); ?>", // Isi dengan url/path file php yang dituju
                        data: {
                            PKRJ: $("#PKRJ").val()
                        }, // data yang akan dikirim ke file yang dituju
                        dataType: "json",
                        beforeSend: function(e) {
                            if (e && e.overrideMimeType) {
                                e.overrideMimeType(
                                    "application/json;charset=UTF-8");
                            }
                        },
                        success: function(
                            response) { // Ketika proses pengiriman berhasil
                            $("#loading").hide(); // Sembunyikan loadingnya


                            $("#PKRJid" + i).html(response.list_pkrj)
                                .show();
                            $("#PKRJid").html(response.list_pkrj).show();
                            alert('Data Berhasil Ditambahkan!');
                        },
                        error: function(xhr, ajaxOptions,
                            thrownError) { // Ketika ada error
                            alert(xhr.status + "\n" + xhr.responseText +
                                "\n" +
                                thrownError); // Munculkan alert error
                        }
                    });

                    e.preventDefault();
                });
            });





            $('#DJPDtanggalakad' + i).on('change', function() {
                document.getElementById('DJPDtanggalawal' + i).value = document.getElementById(
                    'DJPDtanggalakad' + i).value;
            });

            $('#DJPDjangkawaktu' + i).on('change', function() {

                const tglawal = document.getElementById('DJPDtanggalawal' + i).value;
                const jwk = document.getElementById('DJPDjangkawaktu' + i).value;

                $.ajax({
                    url: "<?=base_url('index.php/Nasabah/kirimBulan');?>",
                    type: 'post',
                    data: {
                        tglawal: tglawal,
                        jwk: jwk
                    },
                    success: function(data) {
                        var data2 = $.parseJSON(data) // success callback function
                        document.getElementById('DJPDtanggalakhir' + i).value =
                            data2[0].tanggalakhir

                    }
                });
            });

            $('#DJPDcoverage' + i).on('change', function() {
                var plafond = document.getElementById("DJPDplafondkredit" + i).value;
                var coverage = document.getElementById("DJPDcoverage" + i).value;
                var jwk = document.getElementById('DJPDjangkawaktu' + i).value;
                var jenispkrj = document.getElementById('PKRJid' + i).value;
                var opk = document.getElementById('OPKid').value;

                var plafond2 = parseInt(plafond.split('.').join(''));
                var coverage2 = parseInt(coverage);
                var nilaipnjm = ((coverage2 / 100) * plafond2);

                document.getElementById("DJPDnilaipenjaminan" + i).value = Math.round(nilaipnjm);




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
                            var data2 = $.parseJSON(
                                data) // success callback function
                            document.getElementById('DJPDrate' + i).value = data2[0]
                                .IJPrate
                            document.getElementById('DJPDimbaljasa' + i).value =
                                data2[0].IJPhasil

                        }
                    });

                }
            });






        });




        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            var res = confirm('Ingin Menghapus Baris Ini?');
            if (res == true) {
                $('#tbltambah' + button_id + '').remove();
                $('#' + button_id + '').remove();

            }
        });

    });
    </script>





    <!-- END ADD -->

    <!-- SCRIPT AUTO COPY -->
    <script>
    function copytextbox() {
        document.getElementById('DJPDtanggalawal').value = document.getElementById('DJPDtanggalakad').value;
    }
    </script>
    <!-- END -->
    <!-- SCRIPT AUTO -->
    <script type="text/javascript">
    function HitungPersendanRate() {
        var plafond = document.getElementById("DJPDplafondkredit").value;
        var coverage = document.getElementById("DJPDcoverage").value;
        var jwk = document.getElementById('DJPDjangkawaktu').value;
        var jenispkrj = document.getElementById('PKRJid').value;
        var opk = document.getElementById('OPKid').value;

        var plafond2 = parseInt(plafond.split('.').join(''));
        var coverage2 = parseInt(coverage);
        var nilaipnjm = (coverage2 / 100) * plafond2;

        document.getElementById("DJPDnilaipenjaminan").value = Math.round(nilaipnjm);




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
                    document.getElementById('DJPDrate').value = data2[0].IJPrate
                    document.getElementById('DJPDimbaljasa').value = data2[0].IJPhasil
                }
            });

        }
    }
    </script>

    <!-- END -->

    <!-- SCRIPT KIRIM BULAN -->

    <script>
    $('#DJPDjangkawaktu').on('change', function() {
        const tglawal = document.getElementById('DJPDtanggalawal').value;
        const jwk = document.getElementById('DJPDjangkawaktu').value;

        $.ajax({
            url: "<?=base_url('index.php/Nasabah/kirimBulan');?>",
            type: 'post',
            data: {
                tglawal: tglawal,
                jwk: jwk
            },
            success: function(data) {
                var data2 = $.parseJSON(data) // success callback function
                document.getElementById('DJPDtanggalakhir').value = data2[0].tanggalakhir

            }
        });
    });
    </script>


    <!-- END  -->
    <script>
    function convertRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, "").toString(),
            split = number_string.split(","),
            sisa = split[0].length % 3,
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
        if (key != 188 // Comma
            &&
            key != 8 // Backspace
            &&
            key != 17 && key != 86 & key != 67 // Ctrl c, ctrl v
            &&
            (key < 48 || key > 57) // Non digit
        ) {
            evt.preventDefault();
            return;
        }
    }

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
    var DJPjumlahbiayarubah = document.getElementById("DJPjumlahbiaya");
    DJPjumlahbiayarubah.addEventListener("click", function(e) {
        DJPjumlahbiayarubah.value = convertRupiah(this.value);
    });
    DJPjumlahbiayarubah.addEventListener('click', function(event) {
        return isNumberKey(event);
    });
    </script>
    <script>
    var DJPDplafondkreditrubah = document.getElementById("DJPDplafondkredit");
    DJPDplafondkreditrubah.addEventListener("keyup", function(e) {
        DJPDplafondkreditrubah.value = convertRupiah(this.value);
    });
    DJPDplafondkreditrubah.addEventListener('keydown', function(event) {
        return isNumberKey(event);
    });

    var DJPDimbaljasarubah = document.getElementById("DJPDimbaljasa");
    DJPDimbaljasarubah.addEventListener("click", function(e) {
        DJPDimbaljasarubah.value = convertRupiah(this.value);
    });
    DJPDimbaljasa.addEventListener('click', function(event) {
        return isNumberKey(event);
    });

    var DJPDnilaipenjaminanrubah = document.getElementById("DJPDnilaipenjaminan");
    DJPDnilaipenjaminanrubah.addEventListener("click", function(e) {
        DJPDnilaipenjaminanrubah.value = convertRupiah(this.value);
    });
    DJPDnilaipenjaminanrubah.addEventListener('click', function(event) {
        return isNumberKey(event);
    });

    var DJPDnilaitransaksipasarrubah = document.getElementById("DJPDnilaitransaksipasar");
    DJPDnilaitransaksipasarrubah.addEventListener("click", function(e) {
        DJPDnilaitransaksipasarrubah.value = convertRupiah(this.value);
    });
    DJPDnilaitransaksipasarrubah.addEventListener('click', function(event) {
        return isNumberKey(event);
    });

    var DJPDnilaitransaksilikuidasirubah = document.getElementById("DJPDnilaitransaksilikuidasi");
    DJPDnilaitransaksilikuidasirubah.addEventListener("click", function(e) {
        DJPDnilaitransaksilikuidasirubah.value = convertRupiah(this.value);
    });
    DJPDnilaitransaksilikuidasirubah.addEventListener('click', function(event) {
        return isNumberKey(event);
    });
    </script>





</div>
</div>

</div>
</div>
</div>

</div>