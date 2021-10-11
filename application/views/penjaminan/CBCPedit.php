   <div class="container-fluid">
            <!-- ISI KONTEN -->


            <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

            <div><?=$this->session->flashdata('error')?></div>
            <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
                <?=validation_errors();?>
            </div>
            <?php endif;?>
            <?=form_open('Casebc/editproduktif', ['class' => 'form-horizontal'])?>
            <form role="form" id="formcbcproduktif" class="form-horizontal">
                <div class="card-body">

                <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nomor Memo</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <input type="text" name="CBCPid" class="form-control" id="CBCPid" value="<?=$this->uri->segment(3);?> " hidden>
                            <input style="width: 100%;"  type="text" name="CBCPnomormemo" id="CBCPnomormemo" class="form-control" value="<?=$table['CBCPnomormemo'];?>">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Prinsipal</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="CBCPprinsipal" id="CBCPprinsipal" class="form-control" value="<?=$table['CBCPprinsipal'];?>">
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
                            <input style="width: 100%;" type="text" name="TRJMnama" id="TRJMnama" value="<?=$table['TRJMnama'];?>"  class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMttl" id="TRJMttl" value="<?=$table['TRJMttl'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No. Identitas Diri</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMktp" id="TRJMktp" value="<?=$table['TRJMktp'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Sesuai KTP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMalamat" id="TRJMalamat" value="<?=$table['TRJMalamat'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Saat Ini</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMalamatsekarang" id="TRJMalamatsekarang"  value="<?=$table['TRJMalamatsaatini'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMpekerjaan" id="TRJMpekerjaan" value="<?=$table['TRJMpekerjaan'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Usaha</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMusaha" id="TRJMusaha" value="<?=$table['TRJMusaha'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NPWP Pribadi</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMnpwp" id="TRJMnpwp" value="<?=$table['TRJMnpwp'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status Pernikahan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMstatuspernikahan" id="TRJMstatuspernikahan" value="<?=$table['TRJMstatuspernikahan'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Suami/Istri</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <?php
$trjmid = $table['TRJMpasangan'];
$qry = $this->db->query("select * from tbltrjm where TRJMid='$trjmid'");
$query = $qry->row_array();
?>
                            <input style="width: 100%;" type="text" name="TRJMpartner" id="TRJMpartner"  value="<?=$query['TRJMnama'];?>" class="form-control">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Sesuai KTP</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMalamatpartner" id="TRJMalamatpartner" value="<?=$query['TRJMalamatsaatini'];?>"class="form-control">
                        </div>
                        </div>

                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pekerjaan Suami/Istri</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" name="TRJMpekerjaanpartner" id="TRJMpekerjaanpartner" value="<?=$query['TRJMpekerjaan'];?>" class="form-control">
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
                        <input style="width: 100%;" type="text" name="CBCPjenis" id="CBCPjenis" value="<?=$table['CBCPjenis'];?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Sifat Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" name="CBCPsifat" id="CBCPsifat" value="<?=$table['CBCPsifat'];?>"  class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Plafond Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" name="CBCPplafondkredit" id="CBCPplafondkredit" value="<?=$table['CBCPplafondkredit'];?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jangka Waktu Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" name="CBCPjwk" id="CBCPjwk" value="<?=$table['CBCPjwk'];?>" class="form-control">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Angsuran Kredit</label>
                        <div     class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="number" name="CBCPangsurankredit" id="CBCPangsurankredit" value="<?=$table['CBCPangsurankredit'];?>"class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Agunan Kredit</label>
                        <div     class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPagunankredit" id="CBCPagunankredit" class="form-control"  rows="4" cols="50">
                        <?=$table['CBCPagunankredit'];?> </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Rencana Penggunaan Kredit</label>
                        <div     class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPrencanakredit" id="CBCPrencanakredit" class="form-control"  rows="4" cols="50"><?=$table['CBCPrencanakredit'];?>
                        </textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Data Permohonan Kredit -->

                    <!-- Body Data Bank Penerima Penjaminan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Data Bank Penerima Penjaminan</label>
                    </div>
                    <?php
$ppid = $table['PPid'];
$qry = $this->db->query("select * from tblpp where PPid='$ppid'");
$querypp = $qry->row_array();
?>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input type="text" name="PPid" class="form-control" id="PPid" value="<?=$table['PPid'];?>" hidden>
                            <input type="text" name="PPnama" class="form-control" value="<?=$querypp['PPnama'];?>" id="PPnama">
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Alamat Bank </label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="PPalamat" class="form-control"  readonly><?=$querypp['PPalamat'];?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Telp/Fax</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="PPtelpon"
                                name="PPtelpon" value="<?=$querypp['PPtelpon'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Contact Person</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPcontactperson"
                                name="CBCPcontactperson" value="<?=$table['CBCPcontactperson'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Surat Permohonan Penjaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPsuratpermohonan"
                                name="CBCPsuratpermohonan" value="<?=$table['CBCPsuratpermohonan'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keputusan Kelompok Pemutus Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPkeputusan"
                                name="CBCPkeputusan" value="<?=$table['CBCPkeputusan'];?>" placeholder="">
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
                                name="TRJMnpwpcopy" value="<?=$table['TRJMnama'];?>" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Surat Keterangan Izin Usaha</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPsiup"
                                name="CBCPsiup" value="<?=$table['TRJMsiup'];?>" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Izin-Izin Jatuh Tempo</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPizinjatuhtempo"
                                name="CBCPizinjatuhtempo" value="<?=$table['CBCPizinjatuhtempo'];?>" placeholder="">
                        </div>
                    </div>

                    <hr class="sidebar-divider">
                    <!-- End Deskripsi Legalitas -->


                    <!-- Deskripsi Sumber Pendapatan  -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Sumber Pendapatan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPdeskripsisumberpendapatan" id="CBCPdeskripsisumberpendapatan" class="form-control"><?=$table['CBCPdeskripsisumberpendapatan'];?></textarea>
                        </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Sumber Pendapatan -->

                    <!-- Body Deskripsi Usaha Produktif -->

                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Deskripsi Usaha Produktif</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPdeskripsiusaha" class="form-control"><?=$table['CBCPdeskripsiusaha'];?></textarea>
                    </div>
                    </div>
                    <hr class="sidebar-divider">
                    <!-- End Deskripsi Usaha Porduktif -->

                    <!-- Body Deskripsi Agunan/Jaminan -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Deskripsi Agunan / Jaminan</label>
            </div>

            <!-- LOOPING DISINI MENGGUNAKAN FOR COUNT -->

<?php

$cbcpid = $table['CBCPid'];
$qry = $this->db->query("SELECT * FROM tblJA WHERE CBCPid='$cbcpid'");
$JA = $qry;

foreach ($JA->result_array() as $row) {
    ?>
            <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jenis Agunan/Jaminan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPjenisagunan[]" class="form-control"> <?=$row['JAjenisagunan'];?> </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai Tasaksi Agunan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksi[]" name="CBCPnilaitasaksi[]" value="<?=$row['JAnilaitasaksi'];?>">
                        <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksitanah[]"
                                name="CBCPnilaitasaksitanah[]" value="<?=$row['JAnilaitasaksitanah'];?>" placeholder="Tanah/m">
                        <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaitasaksibangunan[]"
                                name="CBCPnilaitasaksibangunan[]" value="<?=$row['JAnilaitasaksibangunan'];?>" placeholder="Bangunan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nilai Dasar Agunan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasar[]" name="CBCPnilaidasar[]" value="<?=$row['JAnilaidasar'];?>">
                        <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasartanah[]"
                                name="CBCPnilaidasartanah[]" value="<?=$row['JAnilaidasartanah'];?>" placeholder="Nilai Dasar Tanah/m">
                        <input style="width: 100%;" type="text" class="form-control" id="CBCPnilaidasarbangunan[]"
                                name="CBCPnilaidasarbangunan[]" value="<?=$row['JAnilaidasarbangunan'];?>" placeholder="Nilai Dasar Bangunan">


                        </div>

                    </div>

                    <?php }?>
                    <hr class="sidebar-divider">
                    <!-- END LOOPING COUNT -->




                    <!-- Body Analisa Permohonan Penjaminan -->


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Analisa Permohonan Penjaminan</label>
                    </div>



                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Analisa Dokumen Identitas</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPanalisadokumenidentitas" class="form-control"><?=$table['CBCPanalisadokumenidentitas'];?></textarea>
                        </div>
                    </div>
          <!-- Looping Bank -->
          <?php

$cbcpid = $table['CBCPid'];
$qry = $this->db->query("SELECT * FROM tblcbcpojk WHERE CBCPid='$cbcpid'");
$OJK = $qry;

foreach ($OJK->result_array() as $OJKqry) {
    ?>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Analisa Slik OJK</label>
                        <div class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPanalisaslikojk" class="form-control"> <?=$OJKqry['CBCPojkanalisaslikojk'];?> </textarea>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Bank Umum</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Bank</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojknamabank[]"
                                name="CBCPojknamabank[]" value="<?=$OJKqry['CBCPojknamabank'];?>" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jangka Waktu</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnamabank[]"
                                name="CBCPojkjangkawaktu[]" value="<?=$OJKqry['CBCPojkjwk'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Plafond Kredit</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkplafondkredit[]"
                                name="CBCPojkplafondkredit[]" value="<?=$OJKqry['CBCPojkplafondkredit'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tunggakan Pokok</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojktunggakanpokok[]"
                                name="CBCPojktunggakanpokok[]" value="<?=$OJKqry['CBCPojktunggakanpokok'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Tunggakan Bunga</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojktunggakanbunga[]"
                                name="CBCPojktunggakanbunga[]" value="<?=$OJKqry['CBCPojktunggakanbunga'];?>"placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Angsuran</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkangsuran[]"
                                name="CBCPojkangsuran[]" value="<?=$OJKqry['CBCPojkangsuran'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kualitas</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkkualitas[]"
                                name="CBCPojkkualitas[]" value="<?=$OJKqry['CBCPojkkualitas'];?>"placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kondisi</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPojkkondisi[]"
                                name="CBCPojkkondisi[]" value="<?=$OJKqry['CBCPojkkondisi'];?>" placeholder="">
                        </div>
                    </div>

               <?php }?>


<!-- End Looping -->
<!-- Looping Sumber Pendapatan -->

<hr class="sidebar-divider">
<?php

$cbcpid = $table['CBCPid'];
$qry = $this->db->query("SELECT * FROM tblcbcppendapatan WHERE CBCPid='$cbcpid'");
$pendapatan = $qry;

foreach ($pendapatan->result_array() as $pendapatanqry) {
    ?>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><br>Sumber Pendapatan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPsumberpendapatan[]"
                                name="CBCPsumberpendapatan[]" value="<?=$pendapatanqry['CBCPsumberpendapatan'];?>" placeholder="">
                        </div>
                        </div>
                        <div class="form-group row">
                        <label class="col-sm-2 col-form-label"><br>Nama Pendapatan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnamapendapatan[]"
                                name="CBCPnamapendapatan[]" value="<?=$pendapatanqry['CBCPnamapendapatan'];?>" placeholder="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pendapatan /bulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPpendapatanbulan[]"
                                name="CBCPpendapatanbulan[]" value="<?=$pendapatanqry['CBCPpendapatanbulan'];?>" placeholder="">
                        </div>
                    </div>
<?php }?>

<!-- End Looping Pendapatan-->


            <hr class="sidebar-divider">
            <div class="form-group row">
            <label class="col-sm-2 col-form-label"><br>Pengeluaran Calon Terjamin / bulan</label>
            </div>
<!-- Looping Pengeluaran-->
<?php

$cbcpid = $table['CBCPid'];
$qry = $this->db->query("SELECT * FROM tblcbcppengeluaran WHERE CBCPid='$cbcpid'");
$pengeluaran = $qry;

foreach ($pengeluaran->result_array() as $pengeluaranqry) {
    ?>


                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Pengeluaran</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPnamapengeluaran[]"
                                name="CBCPnamapengeluaran[]" value="<?=$pengeluaranqry['CBCPnamapengeluaran'];?>" placeholder="">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Pengeluaran /bulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPpengeluaranbulan[]"
                                name="CBCPpengeluaranbulan[]" value="<?=$pengeluaranqry['CBCPpengeluaranbulan'];?>" placeholder="">
                        </div>
                    </div>
<?php }?>

<hr class="sidebar-divider">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Angsuran Existing /bulan</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <input style="width: 100%;" type="text" class="form-control" id="CBCPangsuranexist"
                                name="CBCPangsuranexist" value="<?=$table['CBCPangsuranexist'];?>"  placeholder="">
                        </div>
                    </div>
                        <!-- End Analisa Permohonan Penjaminan -->


    <!-- Kesimpulan -->
    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Kesimpulan</label>
                        <div     class="form-group col-lg-3 col-sm-4">
                        <textarea name="CBCPkesimpulan" id="CBCPkesimpulan"class="form-control"  rows="4" cols="50">
                        <?=$table['CBCPkesimpulan'];?>
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
        <!-- BATAS KONTEN -->