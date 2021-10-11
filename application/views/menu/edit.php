<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>

    <div class="row">
        <div class="col-lg-6">
            <form action="<?=base_url('menu/edit/');?><?=$menu['id'];?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?=$menu['id'];?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" value="<?=$menu['menu'];?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
</div>