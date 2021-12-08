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
            <?=form_open('Kredit/input', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Acuan Hitung IJP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <select class="form-control select2" id="DJPacuanhitung" name="DJPacuanhitung"
                                style="width: 70%;">
                                <option selected="selected">--Pilih--</option>
                                <option value="PLAFOND KREDIT">PLAFOND KREDIT</option>
                                <option value="NILAI PENJAMINAN">NILAI PENJAMINAN</option>
                            </select>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Grup Penerima Penjaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <select class="form-control" name="GPPid" id="GPPid">
                                <option selected="selected">--Pilih--</option>
                                <?php
foreach ($ambilgpp as $row) {
    echo '<option value="' . $row->GPPid . '">' . $row->GPPnama . '</option>';
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Perjanjian Kerja Sama</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <select class="form-control" name="PKSid" id="PKSid">
                                <option selected="selected">--Pilih--</option>
                            </select>
                            <div id="loading" style="margin-top: 15px;">
                                <img src="../img/loading.gif" width="18"> <small>Loading...</small>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Registrasi Sertifikat</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="DJPnoreg" class="form-control"
                                value="<?php echo $autogen; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Urut Sertifikat</label>
                        <div class="form-group col-lg-3 col-sm-4">
<input style="width: 100%;" type="text"  name="DJPnourut" class="form-control"
                                value="<?php echo $autogenurut; ?>"  onkeypress="return onlyNumberKey(event)">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Seri Sartifikat</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="DJPnoseri" name="DJPnoseri"
                                placeholder="" >
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Penerima Penjaminan (Cabang) </label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input type="text" name="PPid" class="form-control" id="PPid" hidden>
                            <input type="text" name="PPnama" class="form-control" id="PPnama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Penerima Penjaminan (Cabang) </label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="PPalamat" class="form-control" readonly></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Deklarasi</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="DJPnodeklarasi"
                                name="DJPnodeklarasi" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tanggal Deklarasi</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="date" class="form-control" id="DJPtanggaldeklarasi"
                                name="DJPtanggaldeklarasi" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Periode Sertifikat</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <select id="DJPperiode" name="DJPperiode" style="width: 100%;" class="form-control">
                                <option selected="selected" value="00">--Pilih--</option>
                                <option value=01 <?php echo set_select('DJPperiode', '01'); ?>>Januari
                                </option>
                                <option value=02 <?php echo set_select('DJPperiode', '02'); ?>>Februari
                                </option>
                                <option value=03 <?php echo set_select('DJPperiode', '03'); ?>>Maret
                                </option>
                                <option value=04 <?php echo set_select('DJPperiode', '04'); ?>>April
                                </option>
                                <option value=05 <?php echo set_select('DJPperiode', '05'); ?>>Mei
                                </option>
                                <option value=06 <?php echo set_select('DJPperiode', '06'); ?>>Juni
                                </option>
                                <option value=07 <?php echo set_select('DJPperiode', '07'); ?>>Juli
                                </option>
                                <option value=08 <?php echo set_select('DJPperiode', '08'); ?>>Agustus
                                </option>
                                <option value=09 <?php echo set_select('DJPperiode', '09'); ?>>
                                    September</option>
                                <option value=10 <?php echo set_select('DJPperiode', '10'); ?>>Oktober
                                </option>
                                <option value=11 <?php echo set_select('DJPperiode', '11'); ?>>November
                                </option>
                                <option value=12 <?php echo set_select('DJPperiode', '12'); ?>>Desember
                                </option>

                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <select class="form-control select2" id="OPKid" name="OPKid" style="width: 100%;">
                                <option selected="selected">--Pilih--</option>
                                <?php
foreach ($ambilOPK as $row) {
    echo '<option value="' . $row->OPKid . '">' . $row->OPKjenis . '</option>';
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Penjaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <select class="form-control select2" id="SPJid" name="SPJid" style="width: 100%;">
                                <option selected="selected">--Pilih--</option>
                                <?php
foreach ($ambilSPJ as $row) {
    echo '<option value="' . $row->SPJid . '">' . $row->SPJnama . '</option>';
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Pengajuan Penjaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <select class="form-control select2" id="JSPid" name="JSPid" style="width: 100%;">
                                <option selected="selected">--Pilih--</option>
                                <?php
foreach ($ambilJSP as $row) {
    echo '<option value="' . $row->JSPid . '">' . $row->JSPjenis . '</option>';
}
?>
                            </select>
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