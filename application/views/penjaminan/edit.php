<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <?=form_open('Kredit/editkredit', ['class' => 'form-horizontal'])?>
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Acuan Hitung IJP</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <select class="form-control select2" id="DJPacuanhitung" name="DJPacuanhitung"
                            style="width: 70%;">
                            <option value="<?=$djpsertif['DJPacuanhitung'];?>"><?=$djpsertif['DJPacuanhitung'];?>
                            </option>
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
                            <option selected="<?=$djpsertif['GPPid'];?>" value="<?=$djpsertif['GPPid'];?>">
                                <?=$djpsertif['GPPnama'];?></option>
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
                        <select class="form-control" name="PKSid" id="PKSid">`

                            <?php
if ($djpsertif['PKSno2'] != null) {
	?> <option selected="<?=$djpsertif['PKSid'];?>" value="<?=$djpsertif['PKSid'];?>"><?=$djpsertif['PKSno2'];?></option>
                            <?php
} else {

	?>
                            <option selected="<?=$djpsertif['PKSid'];?>" value="<?=$djpsertif['PKSid'];?>">
                                <?=$djpsertif['PKSno1'];?></option>
                            <?php }
?>
                        </select>
                        <div id="loading" style="margin-top: 15px;">
                            <img src="../img/loading.gif" width="18"> <small>Loading...</small>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Registrasi</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" name="DJPnoreg" class="form-control"
                            value="<?=$djpsertif['DJPnoreg'];?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Urut</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" name="DJPnourut" class="form-control"
                            value="<?=$djpsertif['DJPnourut'];?>" readonly>


                        <input style="width: 100%;" type="text" name="DJPid" id="DJPid" class="form-control"
                            value="<?=$djpsertif['DJPid'];?>" hidden>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Seri Sartifikat</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" class="form-control" id="DJPnoseri" name="DJPnoseri"
                            placeholder="" value="<?=$djpsertif['DJPnoseri'];?>">
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Penerima Penjaminan</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <input type="text" name="PPid" class="form-control" id="PPid" value="<?=$djpsertif['PPid'];?>"
                            hidden>
                        <input type="text" name="PPnama" class="form-control" id="PPnama"
                            value="<?=$djpsertif['PPnama'];?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat Penjaminan</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <input type="text" name="PPalamat" class="form-control" id="PPalamat"
                            value="<?=$djpsertif['PPalamat'];?>" readonly></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nomor Deklarasi</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" class="form-control" id="DJPnodeklarasi"
                            name="DJPnodeklarasi" value="<?=$djpsertif['DJPnodeklarasi'];?>" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Tanggal Deklarasi</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="date" class="form-control" id="DJPtanggaldeklarasi"
                            name="DJPtanggaldeklarasi" value="<?=$djpsertif['DJPtanggaldeklarasi'];?>" placeholder="">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Periode Sertifikat</label>
                    <div class="form-group col-lg-3 col-sm-4">
                        <select id="DJPperiode" name="DJPperiode" style="width: 100%;" class="form-control">
                            <option selected="<?=$djpsertif['DJPperiode'];?>" value="<?=$djpsertif['DJPperiode'];?>">
                                <?=$djpsertif['DJPperiode'];?></option>
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
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis OPK</label>
                <div class="form-group col-lg-3 col-sm-4">
                    <select class="form-control select2" id="OPKid" name="OPKid" style="width: 100%;">
                        <option selected="<?=$djpsertif['OPKid'];?>" value="<?=$djpsertif['OPKid'];?>">
                            <?=$djpsertif['OPKjenis'];?></option>
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
                        <option selected="<?=$djpsertif['SPJid'];?>" value="<?=$djpsertif['SPJid'];?>">
                            <?=$djpsertif['SPJnama'];?></option>
                        <?php
foreach ($ambilSPJ as $row) {
	echo '<option value="' . $row->SPJid . '">' . $row->SPJnama . '</option>';
}
?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Jenis Pengajuan</label>
                <div class="form-group col-lg-3 col-sm-4">
                    <select class="form-control select2" id="JSPid" name="JSPid" style="width: 100%;">
                        <option selected="<?=$djpsertif['JSPid'];?>" value="<?=$djpsertif['JSPid'];?>">
                            <?=$djpsertif['JSPjenis'];?></option>
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
                <button type="submit" class="btn btn-primary">Pindah halaman</button>
            </div>
            </form>



        </div>
    </div>
</div>

</div>