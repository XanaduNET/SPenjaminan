<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notifikasi extends CI_Controller
{

    public function index()
    {
        $view = $this->input->post('view');
        if ($view != '') {
            $this->db->set('comment_status', 1);
            $this->db->where('comment_status', 0);
            $this->db->update('tbl_comments');
        }
        $query = "SELECT * FROM tbl_comments ORDER BY comment_id DESC LIMIT 5";
        $result = $this->db->query($query)->result_array();
        $output = "";
        if (!empty($result)) {
            foreach ($result as $row) {
                $output .= '
                <li>
               <a href="#">
               <strong>' . $row["comment_subject"] . '</strong><br />
               <small><em>' . $row["comment_text"] . '</em></small>
               </a>
               </li>';
            }
        } else {
            $output .= '
                 <li><a href="#" class="text-bold text-italic">No Noti Found</a></li>';
        }

        $query = $this->db->query("SELECT * FROM tbl_comments WHERE comment_status=0");
        $count = $query->num_rows();

        $data = array(
            'notification' => $output,
            'unseen_notification' => $count,
        );

        echo json_encode($data);
    }

}
