<script type="text/javascript">
$(document).ready(function() {

    var i = 1;

    $("#add").click(function() {
        i++;
        $('#formclone').append('<div class="cloning' + i +
            '"> <div class="form-group row"><label class="col-sm-2 col-form-label">Deskripsi Agunan / Jaminan</label></div><div class="form-group row"><label class="col-sm-2 col-form-label">Jenis Agunan/Jaminan</label><div class="form-group col-lg-3 col-sm-4"><textarea name="CBCPjenisagunan' +
            i +
            '" class="form-control"></textarea></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Nilai Tasaksi Agunan</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksi' +
            i + '" name="CBCPnilaitasaksi' + i +
            '"><input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksitanah' +
            i + '"name="CBCPnilaitasaksitanah' + i +
            '" placeholder="Tanah/m"><input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksibangunan' +
            i + '"name="CBCPnilaitasaksibangunan' + i +
            '" placeholder="Bangunan"></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Nilai Dasar Agunan</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasar' +
            i + '" name="CBCPnilaidasar' + i +
            '"><input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasartanah' +
            i + '"name="CBCPnilaidasartanah' + i +
            '" placeholder="Nilai Dasar Tanah/m"><input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasarbangunan' +
            i + '"name="CBCPnilaidasarbangunan' + i +
            '" placeholder="Nilai Dasar Bangunan"><button type="button" name="remove" id="' + i +
            '" class="btn btn-danger btn_remove">X</button> </div></div></div>');
    });

    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('.cloning' + button_id + '').remove();
        i--;
    });

    $("#submit").on('click', function() {
        var formdata = $("#formcbcproduktif").serialize();
        $.ajax({
            url: "Casebc/inputproduktif",
            type: "POST",
            data: formdata,
            cache: false,
            success: function(result) {
                alert(result);
                //pergi ke data cbc untuk upload dokumen
            }
        });
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {

    var i = 1;

    $("#addmore").click(function() {
        i++;
        $('#formslikojk').append('<div class="cloningojk' + i +
            '"><div class="form-group row"><label class="col-sm-2 col-form-label">Analisa Dokumen Identitas</label><div class="form-group col-lg-3 col-sm-4"><textarea name="CBCPanalisadokumenidentitas' +
            i +
            '" class="form-control"></textarea></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Analisa Slik OJK</label><div class="form-group col-lg-3 col-sm-4"><textarea name="CBCPanalisaslikojk' +
            i +
            '" class="form-control"></textarea></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Bank Umum</label></div><div class="form-group row"><label class="col-sm-2 col-form-label">Nama Bank</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;"type="text"class="form-control"id="CBCPnamabank' +
            i + '"name="CBCPojknamabank' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Jangka Waktu</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPojkjangkawaktu' +
            i + '"name="CBCPojkjangkawaktu' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Plafond Kredit</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text"class="form-control" id="CBCPojkplafondkredit' +
            i + '"name="CBCPojkplafondkredit' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Tunggakan Pokok</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPojktunggakanpokok' +
            i + '"name="CBCPojktunggakanpokok' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Tunggakan Bunga</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPojktunggakanbunga' +
            i + '"name="CBCPojktunggakanbunga' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Angsuran</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%"type="text"class="form-control"id="CBCPojkangsuran' +
            i + '"name="CBCPojkangsuran' + i +
            '" placeholder=""></div></div> <div class="form-group row"><label class="col-sm-2 col-form-label">Kualitas</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;"type="text"class="form-control"id="CBCPojkkualitas' +
            i + '"name="CBCPojkkualitas' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Kondisi</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPojkkondisi' +
            i + '" name="CBCPojkkondisi' + i +
            '" placeholder=""><button type="button" name="remove" id="' + i +
            '" class="btn btn-danger btn_remove_ojk">X</button> </div></div></div>');
    });

    $(document).on('click', '.btn_remove_ojk', function() {
        var button_id = $(this).attr("id");
        $('.cloningojk' + button_id + '').remove();
        i--;
    });

    $("#submit").on('click', function() {
        var formdata = $("#formcbcproduktif").serialize();
        $.ajax({
            url: "Casebc/inputproduktif",
            type: "POST",
            data: formdata,
            cache: false,
            success: function(result) {
                alert(result);
                //pergi ke data cbc untuk upload dokumen
            }
        });
    });
});
</script>

<script type="text/javascript">
$(document).ready(function() {

    var i = 1;

    $("#addpendapatan").click(function() {
        i++;
        $('#cloningpendapatan').append('<div class="cloningpendapatan' + i +
            '">  <div class="form-group row"><label class="col-sm-2 col-form-label">Sumber Pendapatan</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPsumberpendapatan' +
            i + '"name="CBCPsumberpendapatan' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Nama Pendapatan</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPnamapendapatan' +
            i + '"name="CBCPnamapendapatan' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Pendapatan /bulan</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control" id="CBCPpendapatanbulan' +
            i + '"name="CBCPpendapatanbulan' + i +
            '" placeholder=""></div></div><button type="button" name="remove" id="' + i +
            '" class="btn btn-danger btn_remove_pendapatan">X</button></div></div></div>');
    });

    $(document).on('click', '.btn_remove_pendapatan', function() {
        var button_id = $(this).attr("id");
        $('.cloningpendapatan' + button_id + '').remove();
        i--;
    });

    $("#submit").on('click', function() {
        var formdata = $("#formcbcproduktif").serialize();
        $.ajax({
            url: "Casebc/inputproduktif",
            type: "POST",
            data: formdata,
            cache: false,
            success: function(result) {
                alert(result);
                //pergi ke data cbc untuk upload dokumen
            }
        });
    });
});
</script>


<script type="text/javascript">
$(document).ready(function() {

    var i = 1;

    $("#addpengeluaran").click(function() {
        i++;
        $('#cloningpengeluaran').append('<div class="cloningpengeluaran' + i +
            '"><div class="form-group row"><label class="col-sm-2 col-form-label">Nama Pengeluaran</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;" type="text" class="form-control"id="CBCPnamapengeluaran' +
            i + '"name="CBCPnamapengeluaran' + i +
            '" placeholder=""></div></div><div class="form-group row"><label class="col-sm-2 col-form-label">Pengeluaran /bulan</label><div class="form-group col-lg-3 col-sm-4"><input style="width: 100%;"type="text"class="form-control"id="CBCPpengeluaranbulan' +
            i + '"name="CBCPpengeluaranbulan' + i +
            '" placeholder=""></div></div><button type="button" name="remove" id="' + i +
            '" class="btn btn-danger btn_remove_pengeluaran">X</button></div></div></div>');
    });

    $(document).on('click', '.btn_remove_pengeluaran', function() {
        var button_id = $(this).attr("id");
        $('.cloningpengeluaran' + button_id + '').remove();
        i--;
    });

    $("#submit").on('click', function() {
        var formdata = $("#formcbcproduktif").serialize();
        $.ajax({
            url: "Casebc/inputproduktif",
            type: "POST",
            data: formdata,
            cache: false,
            success: function(result) {
                alert(result);
                //pergi ke data cbc untuk upload dokumen
            }
        });
    });
});
</script>
<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>

            <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
                <?=validation_errors();?>
            </div>
            <?php endif;?>
            <?=form_open('Casebc/inputproduktif', ['class' => 'form-horizontal'])?>
            <form role="form" id="formcbcproduktif" class="form-horizontal">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Memo</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPnomormemo" id="CBCPnomormemo"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Prinsipal</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPprinsipal" id="CBCPprinsipal"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Input</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="date" name="CBCPtanggalinput" id="CBCPtanggalinput"
                                class="form-control" required>
                        </div>
                    </div>

                    <hr class="sidebar-divider">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Calon Terjamin</label>
                    </div>
                    <!-- Body  Data Calon Terjamin -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMnama" id="TRJMnama" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMttl" id="TRJMttl" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Usia</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMusia" id="TRJMusia" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No. Identitas Diri</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMktp" id="TRJMktp" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Sesuai KTP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMalamat" id="TRJMalamat"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Saat Ini</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMalamatsaatini" id="TRJMalamatsaatini"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMpekerjaan" id="TRJMpekerjaan"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Usaha</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMusaha" id="TRJMusaha"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NPWP Pribadi</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMnpwp" id="TRJMnpwp" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Pernikahan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMstatuspernikahan"
                                id="TRJMstatuspernikahan" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Suami/Istri</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMpartner" id="TRJMpartner"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Sesuai KTP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMalamatpartner" id="TRJMalamatpartner"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan Suami/Istri</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMpekerjaanpartner"
                                id="TRJMpekerjaanpartner" class="form-control" required>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Body Terjamin -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Permohonan Kredit Calon Terjamin</label>
                    </div>
                    <!-- Body Jenis Fasilitas Kredit -->

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Fasilitas Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPjenis" id="CBCPjenis"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sifat Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPsifat" id="CBCPsifat"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Plafond Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPplafondkredit" id="CBCPplafondkredit"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Rate</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPrate" id="CBCPrate" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Coverage</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPcoverage" id="CBCPcoverage"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jangka Waktu Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPjwk" id="CBCPjwk" class="form-control" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Angsuran Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="number" name="CBCPangsurankredit" id="CBCPangsurankredit"
                                class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agunan Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPagunankredit" id="CBCPagunankredit" class="form-control" rows="4"
                                cols="50" required>
                        </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Rencana Penggunaan Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPrencanakredit" id="CBCPrencanakredit" class="form-control" rows="4"
                                cols="50" required>
                        </textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->

                    <!-- Body Data Bank Penerima Penjaminan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Data Bank Penerima Penjaminan</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input type="text" name="PPid" class="form-control" id="PPid" hidden>
                            <input type="text" name="PPnama" class="form-control" id="PPnama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Bank </label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="PPalamat" class="form-control" readonly></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telp/Fax</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="PPtelpon" name="PPtelpon"
                                placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Contact Person</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPcontactperson"
                                name="CBCPcontactperson" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Surat Permohonan Penjaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPsuratpermohonan"
                                name="CBCPsuratpermohonan" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keputusan Kelompok Pemutus Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPkeputusan"
                                name="CBCPkeputusan" placeholder="" required>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->


                    <!-- Body Deskripsi Legalitas -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Legalitas</label>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NPWP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="TRJMnpwpcopy"
                                name="TRJMnpwpcopy" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Surat Keterangan Izin Usaha</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPsiup" name="CBCPsiup"
                                placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Izin-Izin Jatuh Tempo</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPizinjatuhtempo"
                                name="CBCPizinjatuhtempo" placeholder="" required>
                        </div>
                    </div>

                    <hr class="sidebar-divider">
                    <!-- End Deskripsi Legalitas -->


                    <!-- Deskripsi Sumber Pendapatan  -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Sumber Pendapatan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPdeskripsisumberpendapatan" id="CBCPdeskripsisumberpendapatan"
                                class="form-control" required></textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Sumber Pendapatan -->

                    <!-- Body Deskripsi Usaha Produktif -->

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Usaha Produktif</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPdeskripsiusaha" class="form-control" required></textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Deskripsi Usaha Porduktif -->

                    <!-- Body Deskripsi Agunan/Jaminan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Agunan / Jaminan</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Agunan/Jaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPjenisagunan[]" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai Tasaksi Agunan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksi[]"
                                name="CBCPnilaitasaksi[]" required>
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksitanah[]"
                                name="CBCPnilaitasaksitanah[]" placeholder="Tanah/m" required>
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksibangunan[]"
                                name="CBCPnilaitasaksibangunan[]" placeholder="Bangunan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai Dasar Agunan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasar[]"
                                name="CBCPnilaidasar[]" required>
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasartanah[]"
                                name="CBCPnilaidasartanah[]" placeholder="Nilai Dasar Tanah/m" required>
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasarbangunan[]"
                                name="CBCPnilaidasarbangunan[]" placeholder="Nilai Dasar Bangunan" required>


                        </div>

                    </div>


                    <!-- LOOPING FORM SEPERTI NASABAH -->
                    <div class="formclone" id="formclone">

                    </div>
                    <!-- END LOOPING -->
                    <button type="button" id="add">Add More</button>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->

                    <!-- Body Analisa Permohonan Penjaminan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Analisa Permohonan Penjaminan</label>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Analisa Dokumen Identitas</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPanalisadokumenidentitas" class="form-control" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Analisa Slik OJK</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPanalisaslikojk" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bank Umum</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojknamabank[]"
                                name="CBCPojknamabank[]" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jangka Waktu</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnamabank[]"
                                name="CBCPojkjangkawaktu[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Plafond Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkplafondkredit[]"
                                name="CBCPojkplafondkredit[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tunggakan Pokok</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojktunggakanpokok[]"
                                name="CBCPojktunggakanpokok[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tunggakan Bunga</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojktunggakanbunga[]"
                                name="CBCPojktunggakanbunga[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Angsuran</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkangsuran[]"
                                name="CBCPojkangsuran[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kualitas</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkkualitas[]"
                                name="CBCPojkkualitas[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kondisi</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkkondisi[]"
                                name="CBCPojkkondisi[]" placeholder="" required>
                        </div>
                    </div>

                    <div class="formslikojk" id="formslikojk">
                    </div>
                    <button type="button" id="addmore"> Add More </button>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><br>Sumber Pendapatan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPsumberpendapatan[]"
                                name="CBCPsumberpendapatan[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><br>Nama Pendapatan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnamapendapatan[]"
                                name="CBCPnamapendapatan[]" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pendapatan /bulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPpendapatanbulan[]"
                                name="CBCPpendapatanbulan[]" placeholder="" required>
                        </div>
                    </div>

                    <!-- Looping Pendapatan /Bulan -->

                    <div class="cloningpendapatan" id="cloningpendapatan" name="cloningpendapatan"> </div>
                    <button type="button" id="addpendapatan" name="addpendapatan">Add More</button>

                    <!-- End Looping Pendapatan-->

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><br>Pengeluaran Calon Terjamin / bulan</label>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pengeluaran</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnamapengeluaran[]"
                                name="CBCPnamapengeluaran[]" placeholder="" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pengeluaran /bulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPpengeluaranbulan[]"
                                name="CBCPpengeluaranbulan[]" placeholder="" required>
                        </div>
                    </div>



                    <div class="cloningpengeluaran" id="cloningpengeluaran" name="cloningpengeluaran"> </div>
                    <button type="button" id="addpengeluaran" name="addpengeluaran">Add More</button>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Angsuran Existing /bulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPangsuranexist"
                                name="CBCPangsuranexist" placeholder="" required>
                        </div>
                    </div>
                    <!-- End Analisa Permohonan Penjaminan -->


                    <!-- Kesimpulan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kesimpulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPkesimpulan" id="CBCPkesimpulan" class="form-control" rows="4" cols="50" required>
                        </textarea>
                        </div>
                    </div>
                    <!-- End Kesimpulan-->
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="card-footer">
                            <button type="submit" id="submit" class="btn btn-primary">Simpan</button>
                        </div>


            </form>





        </div>
    </div>
</div>
</div>

</div>