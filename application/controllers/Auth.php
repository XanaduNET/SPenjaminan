<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Login';

            $this->load->view('auth/login');

            $usernama = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        } else {
            $usernama = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
            $this->_login();
        }
    }
    private function _login()
    {
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['nama' => $nama])->row_array();
        $date = date("d-m-Y");
        $bulan = date("m");

        if (!is_dir('logfile/' . $bulan . '/logfile' . $date . '/')) {
            // dir doesn't exist, make it
            mkdir('logfile/' . $bulan . '/logfile' . $date . '/');
        } else {

        }
        //usernya ada
        if ($user) {
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {

                    $data = [
                        'nama' => $user['nama'],
                        'role_id' => $user['role_id'],
                        'id' => $user['id'],
                        'image' => $user['image'],
                        'username' => $user['nama'],
                        'uniqueid' => $user['id'],
                    ];

                    $this->load->model('Messagemodel');
                    $this->session->set_userdata($data);
                    $this->Messagemodel->logoutUser('active', '');
                    print_r($user);

                    if ($user['role_id'] == 1) {

                        // Login Admin
                        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                            "Attempt: " . ('Success Login') . PHP_EOL .
                            "User: " . $nama . PHP_EOL .
                            "Aksi: " . ('Login') . PHP_EOL .
                            "-------------------------" . PHP_EOL;
                        //-

                        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

                        redirect('admin');

                    } elseif ($user['role_id'] == 4) {

                        // Login Direksi
                        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                            "Attempt: " . ('Success Login') . PHP_EOL .
                            "User: " . $nama . PHP_EOL .
                            "Aksi: " . ('Login') . PHP_EOL .
                            "-------------------------" . PHP_EOL;
                        //-

                        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

                        redirect('direktur');
                    } else {

                        // Login User Biasa
                        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                            "Attempt: " . ('Success Login') . PHP_EOL .
                            "User: " . $nama . PHP_EOL .
                            "Aksi: " . ('Login') . PHP_EOL .
                            "-------------------------" . PHP_EOL;
                        //-

                        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
                        redirect('user');
                    }
                } else {

                    $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                        "Attempt: " . ('Failed Login') . PHP_EOL .
                        "User: " . $nama . PHP_EOL .
                        "Aksi: " . ('Login') . PHP_EOL .
                        "-------------------------" . PHP_EOL;
                    //-

                    file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
                    echo "<script>
                    alert('Password Salah!');
                    window.location.href='auth';</script>";

                }
            }
            // Kalau Gagal Login
            else {

                $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                    "Attempt: " . ('Failed Login') . PHP_EOL .
                    "User: " . $nama . PHP_EOL .
                    "Aksi: " . ('Login') . PHP_EOL .
                    "-------------------------" . PHP_EOL;
                //-

                file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
                echo "<script>
            alert('User Tidak Aktif! Silahkan Hubungi Admiistrator!');
            window.location.href='auth';</script>";
            }

        } else {

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ('Failed Login') . PHP_EOL .
                "User: " . $nama . PHP_EOL .
                "Aksi: " . ('Login') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-

            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
            echo "<script>
            alert('User Tidak Terdaftar! Silahkan Hubungi Administrator!');
            window.location.href='auth';</script>";
        }
    }
    public function registration()
    {

        $date = date("d-m-Y");
        $bulan = date("m");
        $usernama = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]', [
            'matches' => 'Password tidak sama!',
            'min_length' => 'Password terlalu pendek!',
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ('Failed Tambah User') . PHP_EOL .
                "User: " . $usernama['nama'] . PHP_EOL .
                "Aksi: " . ('Registrasi') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $data['title'] = 'Halaman Registrasi';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/registration');
            $this->load->view('template/auth_footer');
        } else {
            $namauser = htmlspecialchars($this->input->post('nama', true));
            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Berhasil Tambah User $namauser") . PHP_EOL .
                "User: " . $usernama['nama'] . PHP_EOL .
                "Aksi: " . ('Registrasi') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role_id'),
                'is_active' => 1,
                'date_created' => time(),
            ];
            $this->db->insert('user', $data);
            echo "<script>
            alert('Selamat! akun anda berhasil dibuat! Silahkan masuk!');
            window.location.href='../admin/pengguna';</script>";
        }
    }
    public function logout()
    {
        $bulan = date("m");
        $date = date("d-m-Y");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Logout") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Logout') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('role_id');

        echo "<script>
        alert('Anda Berhasil Logout!');
        window.location.href='../auth'; </script>";
    }

    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
