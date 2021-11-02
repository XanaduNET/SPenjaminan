<div class="mobile-menu-overlay"></div>

<div class="container-fluid">
    <div class="main-container">
        <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
        <div>
            <?php
$id = $this->uri->segment(3);
?>
            <center>
                <iframe src="<?php echo site_url("Legal/CBCPpdf/$id#toolbar=0"); ?>" width="800px" height="850px">
                </iframe>
            </center>
            <hr class="sidebar-divider">
            <?=form_open('Legal/inputkomentarproduktif', ['class' => 'form-horizontal'])?>
            <form role="form" class="form-horizontal">
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">KOMENTAR</label>
                        <div class="form-group col-lg-3 col-sm-4">
                            <textarea name="CBCPlegal" width="150px" heigh="150px" class="form-control"></textarea>
                            <input type="text" name="CBCPid" class="form-control" id="CBCPid" value="<?=$id?>" hidden>
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