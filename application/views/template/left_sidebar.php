<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="<?=base_url('assets/');?>vendors/images/logo.png" alt="" class="dark-logo">
            <img src="<?=base_url('assets/');?>vendors/images/logo.png" alt="" class="light-logo">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <!-- QUERY DARI MENU -->
            <?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "SELECT `user_menu`.`id`, `menu`, `logo`
                FROM `user_menu` JOIN `user_access_menu`
                    ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
            ORDER BY `user_access_menu`.`menu_id` ASC
            ";
$menu = $this->db->query($queryMenu)->result_array();
?>
            <ul id="accordion-menu">
                <?php foreach ($menu as $m): ?>
                <li class="dropdown">

                    <a href="javascript:;" class="dropdown-toggle">

                        <span class="<?=$m['logo'];?>"></span><span class="mtext"><?=$m['menu'];?></span>
                    </a>
                    <?php
$menuId = $m['id'];
$querySubMenu = " SELECT *
                        FROM `user-sub_menu` JOIN `user_menu`
                          ON `user-sub_menu`.`menu_id` = `user_menu`.`id`
                        WHERE `user-sub_menu`.`menu_id` = $menuId
                          AND `user-sub_menu`.`is_active` = 1
                        ";
$subMenu = $this->db->query($querySubMenu)->result_array();
?>
                    <?php foreach ($subMenu as $sm): ?>
                    <ul class="submenu">
                        <li><a href="<?=base_url($sm['url']);?>">
                                <span><?=$sm['title'];?></span></a></li>
                    </ul>
                    <?php endforeach;?>
                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>