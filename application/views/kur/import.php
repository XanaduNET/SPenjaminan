<form method="post" action="<?=site_url()?>kur/saveimport" class="form-horizontal" enctype="multipart/form-data">

    <div class="form-group">
        <label for="inputlaporan" class="col-sm-2 control-label">Lampirkan File</label>
        <div class="col-sm-10">

            <input type="file" name="file" class="form-control" id="file" required accept=".xls, .xlsx" /></p>
        </div>
    </div>
    <div class="form-group">

        <div class="col-sm-10">
            <input type="submit" class="btn btn-block btn-warning" value="Import" name="import">
        </div>
    </div>
</form>