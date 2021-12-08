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
            <?=form_open('Casebc/editcbc', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <div class="card-body">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Memo</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input type="text" name="CBCid" class="form-control" id="CBCid"
                                value="<?=$this->uri->segment(3);?> " hidden>
                            <input style="width: 100%;" value="<?=$table['CBCnomormemo'];?>" type="text"
                                name="CBCnomormemo" id="CBCnomormemo" class="form-control">
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Data Calon Terjamin</label>
                    </div>
                    <!-- Body  Data Calon Terjamin -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="form-group col-lg-3 col-sm-4">

                            <input type="text" name="TRJMid" class="form-control" id="TRJMid"
                                value="<?=$table['TRJMid'];?> " hidden>
                            <input style="width: 100%;" type="text" name="TRJMnama" id="TRJMnama"
                                value="<?=$table['TRJMnama'];?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMttl" id="TRJMttl"
                                value="<?=$table['TRJMttl'];?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor KTP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMktp" id="TRJMktp"
                                value="<?=$table['TRJMktp'];?> " class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Sesuai KTP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMalamat" id="TRJMalamat"
                                class="form-control" value="<?=$table['TRJMalamat'];?> ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMpekerjaan" id="TRJMpekerjaan"
                                value="<?=$table['TRJMpekerjaan'];?> " class="form-control">
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Body Terjamin -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Data Permohonan Kredit</label>
                    </div>
                    <!-- Body Jenis Fasilitas Kredit -->

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Fasilitas Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCjenis" id="CBCjenis"
                                value="<?=$table['CBCjenis'];?> " class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Plafond Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCplafondkredit" id="CBCplafondkredit"
                                class="form-control" value="<?=$table['CBCplafondkredit'];?> ">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jangka Waktu Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCjwk" id="CBCjwk"
                                value="<?=$table['CBCjwk'];?> " class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Angsuran Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="number" name="CBCangsurankredit" id="CBCangsurankredit"
                                value="<?=$table['CBCangsurankredit'];?>" class="form-control">
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
                            <input type="text" name="PPid" class="form-control" id="PPid" value="<?=$table['PPid'];?> "
                                hidden>
                            <input type="text" name="PPnama" class="form-control" id="PPnama"
                                value="<?=$table['PPnama'];?> ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Bank </label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="PPalamat" class="form-control"
                                readonly>  <?php echo $table['PPalamat']; ?> </textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telp/Fax</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="PPtelpon"
                                value="<?=$table['PPtelpon'];?> " name="PPtelpon" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Surat Permohonan Penjaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCsuratpermohonan"
                                name="CBCsuratpermohonan" value="<?=$table['CBCsuratpermohonan'];?> " placeholder="">
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->

                    <!-- Body Aspek Kesehatan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Aspek Kesahatan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCaspek_kesehatan"
                                class="form-control"> <?php echo $table['CBCaspek_kesehatan']; ?> </textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->

                    <!-- Body Aspek Agunan / Jaminan -->

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Aspek Agunan / Jaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCaspek_agunan"
                                class="form-control"><?php echo $table['CBCaspek_agunan']; ?></textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->

                    <!-- Body Aspek Pinjaman -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Aspek Pinjaman</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCaspek_pinjaman"
                                class="form-control"><?php echo $table['CBCaspek_pinjaman']; ?></textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->

                    <!-- Body Kesimpulan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kesimpulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCkesimpulan"
                                class="form-control"><?php echo $table['CBCaspek_agunan']; ?></textarea>
                        </div>
                    </div>
                    <!-- End Data Permohonan Kredit -->
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