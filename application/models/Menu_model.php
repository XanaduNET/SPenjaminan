<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user-sub_menu`.*, `user_menu`.`menu`
                   FROM `user-sub_menu` JOIN `user_menu`
                   ON `user-sub_menu`.`menu_id` = `user_menu`.`id`
         ";
        return $this->db->query($query)->result_array();
    }

    public function getRole()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                   FROM `user` JOIN `user_role`
                   ON `user`.`role_id` = `user_role`.`id`
         ";
        return $this->db->query($query)->result_array();
    }

    public function deleteDataMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user_menu');

        echo "<script>
        alert('Menu Berhasil Dihapus!');
        window.location.href='../';
        </script>";
    }

    public function getMenuById($id)
    {
        return $this->db->get_where('user_menu', ['id' => $id])->row_array();
    }

    public function editMenu($id)
    {
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user_menu', ['menu' => $this->input->post('menu')]);

        echo "<script>
        alert('Menu Berhasil Di Update!');
        window.location.href='../../menu';
        </script>";
    }
    public function deleteDataSubMenu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user-sub_menu');

        echo "<script>
        alert('Submenu Berhasil Dihapus!');
        window.location.href='../../menu/subMenu';
        </script>";
    }
    public function getSubMenuById($id)
    {
        $this->db->select('*, user-sub_menu.id AS idsubmenu');
        $this->db->from('user-sub_menu');
        $this->db->join('user_menu', 'user-sub_menu.menu_id = user_menu.id');
        $this->db->where('user-sub_menu.id', $id);

        return $this->db->get()->row_array();

    }

    public function editsubMenu($id, $title, $menuid, $url, $icon, $isactive)
    {

        $this->db->set('title', $title);
        $this->db->set('menu_id', $menuid);
        $this->db->set('url', $url);
        $this->db->set('icon', $icon);
        $this->db->set('is_active', $isactive);
        $this->db->where('id', $id);
        $this->db->update('user-sub_menu');

        echo "<script>
        alert('Menu Berhasil Diedit!');
        window.location.href='../../menu/subMenu';</script>";
    }
}
