<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?=$title;?></h1>
    <div class="row">
        <div class="col-lg-6">
            <form action="<?=base_url('menu/editsubMenu/');?><?=$subMenu['idsubmenu'];?>" method="post">
                <div class="modal-body">
                    <input type="hidden" name="id" value="<?=$subMenu['id'];?>">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="SubMenu title"
                           value="<?=$subMenu['title'];?>">
                    </div>
                    <div class="form-group">
                        <select name="menu_id" id="menu_id" class="form-control">
                            <option value="<?=$subMenu['menu_id'];?>"> <?=$subMenu['menu'];?> </option>
                            <?php foreach ($menu as $m): ?>
                            <option value="<?=$m['id']?>"><?=$m['menu']?></option>
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Submenu url"
                            value="<?=$subMenu['url'];?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Submenu icon"
                            value="<?=$subMenu['icon'];?>">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active"
                                checked>
                            <label class="form-check-label" for="is_active">
                                Active ?
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </form>
        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</div>
</div>