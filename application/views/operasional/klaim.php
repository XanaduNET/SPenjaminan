<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <div><?=validation_errors()?></div>
            
            <?=form_open('Klaim/input', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Masuk</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="date" class="form-control" id="tglmasuk" name="tglmasuk"
                                placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Berkas Langkap</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="date" class="form-control" id="tglberkas" name="tglberkas"
                                placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Klaim Bayar</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="date" class="form-control" id="tglklaimbayar"
                                name="tglklaimbayar" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Cabang/Capem/Kedai</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input type="text" name="PPid" class="form-control" id="PPid" hidden>
                            <input type="text" name="PPnama" class="form-control" id="PPnama">

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Penjaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="PPalamat" class="form-control" readonly></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Produk</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="produk" name="produk" class="form-control"
                                value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sertifikat</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="sertifikat" name="sertifikat"
                                class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Terjamin</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="nmterjamin" name="nmterjamin"
                                class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Plafond</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="palfond" name="plafond" class="form-control"
                                value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai Jaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="nilai_jaminan" name="nilai_jaminan"
                                class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Coverage</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="coverage" name="coverage" class="form-control"
                                value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nominal Klaim</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="nominal_klaim" name="nominal_klaim"
                                class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Subrogasi</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" id="subrogasi" name="subrogasi" class="form-control"
                                value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agunan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="agunan" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Taksasi Agunan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="taksasi_agunan" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jangka Waktu</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="Jkwaktu" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Awal</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="date" class="form-control" id="tglawal" name="tglawal"
                                placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Akhir</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="date" class="form-control" id="tglakhir" name="tglakhir"
                                placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Macet</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="macet" name="macet"
                                placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sektor</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="sektor" name="sektor"
                                placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Cover Reas</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="cover_reas" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Klaim dibayar Reas</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="klaim_reas" class="form-control" value="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Broker Reas</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="broker" class="form-control" value="">
                        </div>
                    </div>

                    <!-- <div class="col-lg-6 col-md-6 col-sm-12"> -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

</div>