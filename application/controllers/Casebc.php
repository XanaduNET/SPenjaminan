<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Casebc extends CI_Controller
{

    public function index()
    {
        $data['title'] = 'Case By Case';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/cbcoption', $data);
        $this->load->view('template/footer');
    }

    public function konsumtif()
    {
        $data['title'] = 'Case By Case Konsumtif';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/casebc', $data);
        $this->load->view('template/footer');

    }

    public function produktif()
    {
        $data['title'] = 'Case By Case Produktif';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/casebcproduktif', $data);
        $this->load->view('template/footer');
    }

    public function datacbc()
    {
        $this->load->model('Model_CBC');
        $data['title'] = 'Data Case By Case';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['cbc'] = $this->Model_CBC->getCBC();
        $data['cbcp'] = $this->Model_CBC->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/datacbc', $data);
        $this->load->view('template/footer');
    }

    public function input()
    {
        $this->form_validation->set_rules('CBCnomormemo', 'Nomor memo', 'required');
        $this->form_validation->set_rules('TRJMnama', 'Nama terjamin', 'required');
        $this->form_validation->set_rules('TRJMttl', 'Tempat tanggal lahir terjamin', 'required');
        $this->form_validation->set_rules('TRJMktp', 'KTP terjamin', 'required');
        $this->form_validation->set_rules('TRJMalamat', 'Alamat terjamin', 'required');
        $this->form_validation->set_rules('TRJMpekerjaan', 'Pekerjaan terjamin', 'required');
        $this->form_validation->set_rules('CBCjenis', 'Jenis fasilitas kredit', 'required');
        $this->form_validation->set_rules('CBCplafondkredit', 'Plafond Kredit', 'required');
        $this->form_validation->set_rules('CBCjwk', 'Jangka waktu kredit', 'required');
        $this->form_validation->set_rules('CBCangsurankredit', 'Angsuran kredit', 'required');
        $this->form_validation->set_rules('PPnama', 'Nama bank', 'required');
        $this->form_validation->set_rules('PPalamat', 'Alamat bank', 'required');
        $this->form_validation->set_rules('PPtelpon', 'Telpon/Fax bank', 'required');
        $this->form_validation->set_rules('CBCsuratpermohonan', 'Surat permohonan penjaminan', 'required');
        $this->form_validation->set_rules('CBCaspek_kesehatan', 'Aspek kesehatan', 'required');
        $this->form_validation->set_rules('CBCaspek_agunan', 'Aspek agunan', 'required');
        $this->form_validation->set_rules('CBCaspek_pinjaman', 'Aspek pinjaman', 'required');
        $this->form_validation->set_rules('CBCkesimpulan', 'Kesimpulan', 'required');
        $this->form_validation->set_rules('CBCrate', 'Rate', 'required');
        $this->form_validation->set_rules('CBCcoverage', 'Coverage', 'required');

        if ($this->form_validation->run() == false) {
            $this->konsumtif();
        } else {
            $CBCnomormemo = $_POST['CBCnomormemo'];
            $TRJMnama = $_POST['TRJMnama'];
            $TRJMttl = $_POST['TRJMttl'];
            $TRJMktp = $_POST['TRJMktp'];
            $TRJMalamat = $_POST['TRJMalamat'];
            $TRJMpekerjaan = $_POST['TRJMpekerjaan'];
            $CBCjenis = $_POST['CBCjenis'];
            $CBCplafondkredit = $_POST['CBCplafondkredit'];
            $CBCjwk = $_POST['CBCjwk'];
            $CBCrate = $_POST['CBCrate'];
            $CBCcoverage = $_POST['CBCcoverage'];
            $CBCangsurankredit = $_POST['CBCangsurankredit'];
            $PPid = $_POST['PPid'];
            $CBCsuratpermohonan = $_POST['CBCsuratpermohonan'];
            $CBCaspek_kesehatan = $_POST['CBCaspek_kesehatan'];
            $CBCaspek_agunan = $_POST['CBCaspek_agunan'];
            $CBCaspek_pinjaman = $_POST['CBCaspek_pinjaman'];
            $CBCkesimpulan = $_POST['CBCkesimpulan'];

            $dataterjamin = array(
                'TRJMnama' => $TRJMnama,
                'TRJMttl' => $TRJMttl,
                'TRJMktp' => $TRJMktp,
                'TRJMalamat' => $TRJMalamat,
                'TRJMpekerjaan' => $TRJMpekerjaan);
            $this->db->insert('tbltrjm', $dataterjamin);
            $TRJM_id = $this->db->insert_id();

            $data = array(
                'TRJMid' => $TRJM_id,
                'CBCnomormemo' => $CBCnomormemo,
                'CBCjenis' => $CBCjenis,
                'CBCplafondkredit' => $CBCplafondkredit,
                'CBCjwk' => $CBCjwk,
                'CBCrate' => $CBCrate,
                'CBCcoverage' => $CBCcoverage,
                'CBCangsurankredit' => $CBCangsurankredit,
                'CBCsuratpermohonan' => $CBCsuratpermohonan,
                'CBCaspek_kesehatan' => $CBCaspek_kesehatan,
                'CBCaspek_agunan' => $CBCaspek_agunan,
                'CBCaspek_pinjaman' => $CBCaspek_pinjaman,
                'CBCkesimpulan' => $CBCkesimpulan,
                'PPid' => $PPid);
            $this->db->insert('tblcbc', $data);
            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Add Data") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Data CBC') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            // Send Notifikasi Kadiv Penjaminan
            $data = array(
                'comment_subject' => 'Input Case By Case Konsumtif',
                'comment_text' => "CBC Konsumtif Baru Berhasil Ditambahkan",
                'comment_status' => 0,
                'roleId_sender' => 2,
                'roleId_receiver' => 2, // Kadiv Penjaminan
            );
            $this->db->insert('tbl_comments', $data);

            echo "<script>
        alert('Data Berhasil Ditambahkan');
        window.location.href='datacbc';
        </script>";

        }
    }

    public function cbcPDF()
    {
        $this->load->model('Model_CBC');
        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBCid($id);
        $this->load->view('penjaminan/cetakCBC', $data);

        // title dari pdf
        $this->load->library('pdfcbc');
        $this->data['title_pdf'] = 'Memorandum';

        // filename dari pdf ketika didownload
        $file_pdf = 'SP2K'; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakCBC', $this->data, true);

        // run dompdf
        $this->pdfcbc->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakCBC', $data);

    }

    public function cbcpPDF()
    {
        $this->load->model('Model_CBC');
        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBCPbyid($id);
        $data['tableJA'] = $this->Model_CBC->getCBCPJAbyid($id);
        $data['tableOJK'] = $this->Model_CBC->getCBCPOJKbyid($id);
        $data['tablependapatan'] = $this->Model_CBC->getCBCPpendapatanbyid($id);
        $data['tablepengeluaran'] = $this->Model_CBC->getCBCPpengeluaranbyid($id);
        $this->load->view('penjaminan/cetakCBCP', $data);

        // title dari pdf
        $this->load->library('pdfcbc');
        $this->data['title_pdf'] = 'Analisa permohonan Penjaminan Kredit';

        // filename dari pdf ketika didownload
        $file_pdf = ''; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakCBCP', $this->data, true);

        // run dompdf
        $this->pdfcbc->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakCBCP', $data);

        // $this->load->view('operasional/lap_bul', $data);
    }

    public function uploadcbc()
    {
        $this->load->model('Model_CBC');
        $CBCid = $this->uri->segment(3);

        $CBCstatus = $this->input->post('doc_lengkap');

        $config = array(
            'upload_path' => "./uploads/",
            'allowed_types' => "pdf",
            'overwrite' => true,
            'max_size' => "2048000", // Tertulis dalam KB maks 2mb
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload()) {
            $data = array('upload_data' => $this->upload->data());
            $UPLDnama = $this->upload->data('file_name');
            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Upload Berkas") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Case By Case Konsumtif') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $this->Model_CBC->upload($UPLDnama, $CBCid, $CBCstatus);
            //data berhasil di upload
        } else {
            echo "<script>
                alert('Berkas Tidak Berhasil Di Upload');
                window.location.href='../../casebc/datacbc';
                </script>";
            //data tidak berhasil di upluad
        }
    }

    public function uploadcbcp()
    {
        $this->load->model('Model_CBC');
        $CBCPid = $this->uri->segment(3);

        $CBCPstatus = $this->input->post('doc_lengkap');

        $config = array(
            'upload_path' => "./uploads/berkas_produktif/",
            'allowed_types' => "pdf",
            'overwrite' => true,
            'max_size' => "2048000", // Tertulis dalam KB maks 2mb
        );
        $this->load->library('upload', $config);
        if ($this->upload->do_upload()) {
            $data = array('upload_data' => $this->upload->data());
            $UPLDPnama = $this->upload->data('file_name');

            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
            $date = date("d-m-Y");
            $bulan = date("m");
            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Upload Berkas") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Case By Case Produktif') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $this->Model_CBC->uploadcbcp($UPLDPnama, $CBCPid, $CBCPstatus);
            //data berhasil di upload
        } else {

            $data = array('upload_data' => $this->upload->data());
            $UPLDPnama = $this->upload->data('file_name');

            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
            $date = date("d-m-Y");
            $bulan = date("m");
            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Upload Berkas") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Case By Case Produktif') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            $this->Model_CBC->uploadcbcp($UPLDPnama, $CBCPid, $CBCPstatus);

            echo "<script>
                alert('Berkas Tidak Berhasil Di Upload');
                window.location.href='../../casebc/datacbc';
                </script>";
            //data tidak berhasil di upload
        }
    }

    public function inputproduktif()
    {

        $CBCPnomormemo = $_POST['CBCPnomormemo'];
        $CBCPprinsipal = $_POST['CBCPprinsipal'];
        $CBCPtanggalinput = $_POST['CBCPtanggalinput'];

        $TRJMpartner = $_POST['TRJMpartner'];
        $TRJMalamatpartner = $_POST['TRJMalamatpartner'];
        $TRJMpekerjaanpartner = $_POST['TRJMpekerjaanpartner'];
        $TRJMusia = $_POST['TRJMusia'];

        $TRJMnama = $_POST['TRJMnama'];
        $TRJMttl = $_POST['TRJMttl'];
        $TRJMktp = $_POST['TRJMktp'];
        $TRJMalamat = $_POST['TRJMalamat'];
        $TRJMpekerjaan = $_POST['TRJMpekerjaan'];
        $TRJMusaha = $_POST['TRJMusaha'];
        $TRJMnpwp = $_POST['TRJMnpwp'];
        $TRJMalamatsaatini = $_POST['TRJMalamatsaatini'];
        $TRJMstatuspernikahan = $_POST['TRJMstatuspernikahan'];

        $CBCPjenis = $_POST['CBCPjenis'];
        $CBCPsifat = $_POST['CBCPsifat'];
        $CBCPjwk = $_POST['CBCPjwk'];
        $CBCPplafondkredit = $_POST['CBCPplafondkredit'];
        $CBCPrate = $_POST['CBCPrate'];
        $CBCPcoverage = $_POST['CBCPcoverage'];
        $CBCPangsurankredit = $_POST['CBCPangsurankredit'];
        $CBCPagunankredit = $_POST['CBCPagunankredit'];
        $CBCPrencanakredit = $_POST['CBCPrencanakredit'];

        $PPnama = $_POST['PPnama'];
        $PPalamat = $_POST['PPalamat'];
        $PPtelpon = $_POST['PPtelpon'];
        $PPid = $_POST['PPid'];

        $CBCPcontactperson = $_POST['CBCPcontactperson'];
        $CBCPsuratpermohonan = $_POST['CBCPsuratpermohonan'];
        $CBCPkeputusan = $_POST['CBCPkeputusan'];
        $CBCPsiup = $_POST['CBCPsiup'];
        $CBCPizinjatuhtempo = $_POST['CBCPizinjatuhtempo'];
        $CBCPdeskripsisumberpendapatan = $_POST['CBCPdeskripsisumberpendapatan'];
        $CBCPdeskripsiusaha = $_POST['CBCPdeskripsiusaha'];

        $CBCPjenisagunan = $_POST['CBCPjenisagunan'];
        $CBCPnilaitasaksi = $_POST['CBCPnilaitasaksi'];
        $CBCPnilaidasar = $_POST['CBCPnilaidasar'];
        $CBCPnilaitasaksitanah = $_POST['CBCPnilaitasaksitanah'];
        $CBCPnilaitasaksibangunan = $_POST['CBCPnilaitasaksibangunan'];
        $CBCPnilaidasartanah = $_POST['CBCPnilaidasartanah'];
        $CBCPnilaidasarbangunan = $_POST['CBCPnilaidasarbangunan'];

        $CBCPanalisadokumenidentitas = $_POST['CBCPanalisadokumenidentitas'];
        $CBCPanalisaslikojk = $_POST['CBCPanalisaslikojk'];
        $CBCPojknamabank = $_POST['CBCPojknamabank'];
        $CBCPojkjangkawaktu = $_POST['CBCPojkjangkawaktu'];
        $CBCPojkplafondkredit = $_POST['CBCPojkplafondkredit'];
        $CBCPojktunggakanpokok = $_POST['CBCPojktunggakanpokok'];
        $CBCPojktunggakanbunga = $_POST['CBCPojktunggakanbunga'];
        $CBCPojkangsuran = $_POST['CBCPojkangsuran'];
        $CBCPojkkualitas = $_POST['CBCPojkkualitas'];
        $CBCPojkkondisi = $_POST['CBCPojkkondisi'];
        $CBCPsumberpendapatan = $_POST['CBCPsumberpendapatan'];
        $CBCPnamapendapatan = $_POST['CBCPnamapendapatan'];
        $CBCPpendapatanbulan = $_POST['CBCPpendapatanbulan'];
        $CBCPnamapengeluaran = $_POST['CBCPnamapengeluaran'];
        $CBCPpengeluaranbulan = $_POST['CBCPpengeluaranbulan'];
        $CBCPangsuranexist = $_POST['CBCPangsuranexist'];
        $CBCPkesimpulan = $_POST['CBCPkesimpulan'];

        $datapartner = array(
            'TRJMnama' => $TRJMpartner,
            'TRJMalamat' => $TRJMalamatpartner,
            'TRJMpekerjaan' => $TRJMpekerjaanpartner);
        $this->db->insert('tbltrjm', $datapartner);
        $TRJMPartner_id = $this->db->insert_id();

        $dataterjamin = array(
            'TRJMnama' => $TRJMnama,
            'TRJMttl' => $TRJMttl,
            'TRJMusia' => $TRJMusia,
            'TRJMktp' => $TRJMktp,
            'TRJMalamat' => $TRJMalamat,
            'TRJMpekerjaan' => $TRJMpekerjaan,
            'TRJMusaha' => $TRJMusaha,
            'TRJMsiup' => $CBCPsiup,
            'TRJMnpwp' => $TRJMnpwp,
            'TRJMalamatsaatini' => $TRJMalamatsaatini,
            'TRJMstatuspernikahan' => $TRJMstatuspernikahan,
            'TRJMpasangan' => $TRJMPartner_id);
        $this->db->insert('tbltrjm', $dataterjamin);
        $TRJM_id = $this->db->insert_id();

        $dataCBCP = array(
            'CBCPnomormemo' => $CBCPnomormemo,
            'CBCPprinsipal' => $CBCPprinsipal,
            'CBCPtanggalinput' => $CBCPtanggalinput,
            'CBCPjenis' => $CBCPjenis,
            'CBCPsifat' => $CBCPsifat,
            'CBCPplafondkredit' => $CBCPplafondkredit,
            'CBCPrate' => $CBCPrate,
            'CBCPcoverage ' => $CBCPcoverage,
            'CBCPjwk' => $CBCPjwk,
            'CBCPangsurankredit' => $CBCPangsurankredit,
            'CBCPagunankredit' => $CBCPagunankredit,
            'CBCPrencanakredit' => $CBCPrencanakredit,
            'CBCPcontactperson' => $CBCPcontactperson,
            'CBCPsuratpermohonan' => $CBCPsuratpermohonan,
            'CBCPkeputusan' => $CBCPkeputusan,
            'CBCPizinjatuhtempo' => $CBCPizinjatuhtempo,
            'CBCPsumberpendapatan' => $CBCPdeskripsisumberpendapatan,
            'CBCPdeskripsiusaha' => $CBCPdeskripsiusaha,
            'CBCPanalisadokumenidentitas' => $CBCPanalisadokumenidentitas,
            'CBCPangsuranexist' => $CBCPangsuranexist,
            'CBCPkesimpulan' => $CBCPkesimpulan,
            'TRJMid' => $TRJM_id,
            'PPid' => $PPid,
        );
        $this->db->insert('tblcbcp', $dataCBCP);
        $CBCPid = $this->db->insert_id();

        if (!empty($CBCPjenisagunan)) {
            for ($i = 0; $i < count($CBCPjenisagunan); $i++) {
                if (!empty($CBCPjenisagunan[$i])) {
                    $dataagunan = array(
                        'JAjenisagunan' => $CBCPjenisagunan[$i],
                        'JAnilaitasaksi' => $CBCPnilaitasaksi[$i],
                        'JAnilaidasar' => $CBCPnilaidasar[$i],
                        'JAnilaitasaksitanah' => $CBCPnilaitasaksitanah[$i],
                        'JAnilaitasaksibangunan' => $CBCPnilaitasaksibangunan[$i],
                        'JAnilaidasartanah' => $CBCPnilaidasartanah[$i],
                        'JAnilaidasarbangunan' => $CBCPnilaidasarbangunan[$i],
                        'CBCPid' => $CBCPid,
                    );
                    $this->db->insert('tblja', $dataagunan);
                    $JA_id = $this->db->insert_id();
                }
            }
        }

        if (!empty($CBCPojknamabank)) {
            for ($i = 0; $i < count($CBCPojknamabank); $i++) {
                if (!empty($CBCPojknamabank[$i])) {
                    $dataojk = array(
                        'CBCPojknamabank' => $CBCPojknamabank[$i],
                        'CBCPojkjwk' => $CBCPojkjangkawaktu[$i],
                        'CBCPojkplafondkredit' => $CBCPojkplafondkredit[$i],
                        'CBCPojktunggakanpokok' => $CBCPojktunggakanpokok[$i],
                        'CBCPojktunggakanbunga' => $CBCPojktunggakanbunga[$i],
                        'CBCPojkangsuran' => $CBCPojkangsuran[$i],
                        'CBCPojkkualitas' => $CBCPojkkualitas[$i],
                        'CBCPojkkondisi' => $CBCPojkkondisi[$i],
                        'CBCPid' => $CBCPid,
                        'CBCPojkanalisaslikojk' => $CBCPanalisaslikojk,
                    );
                    $this->db->insert('tblcbcpojk', $dataojk);
                    $slikojkid = $this->db->insert_id();
                }
            }
        }

        if (!empty($CBCPsumberpendapatan)) {
            for ($i = 0; $i < count($CBCPsumberpendapatan); $i++) {
                if (!empty($CBCPsumberpendapatan[$i])) {
                    $pendapatan = array(
                        'CBCPsumberpendapatan' => $CBCPsumberpendapatan[$i],
                        'CBCPnamapendapatan' => $CBCPnamapendapatan[$i],
                        'CBCPpendapatanbulan' => $CBCPpendapatanbulan[$i],
                        'CBCPid' => $CBCPid,
                    );
                    $this->db->insert('tblcbcppendapatan', $pendapatan);
                    $pendapatanid = $this->db->insert_id();
                }
            }
        }
        if (!empty($CBCPnamapengeluaran)) {
            for ($i = 0; $i < count($CBCPnamapengeluaran); $i++) {
                if (!empty($CBCPnamapengeluaran[$i])) {
                    $pengeluaran = array(
                        'CBCPnamapengeluaran' => $CBCPnamapengeluaran[$i],
                        'CBCPpengeluaranbulan' => $CBCPpengeluaranbulan[$i],
                        'CBCPid' => $CBCPid,
                    );
                    $this->db->insert('tblcbcppengeluaran', $pengeluaran);
                    $pengeluaranid = $this->db->insert_id();
                }
            }
        }
        $date = date("d-m-Y");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Add Case By Case") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Data CBC') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        // Send Notifikasi Kadiv Penjaminan
        $data = array(
            'comment_subject' => 'Input Case By Case Produktif',
            'comment_text' => "CBC Produktif Baru Berhasil Ditambahkan",
            'comment_status' => 0,
            'roleId_sender' => 2,
            'roleId_receiver' => 2, // Kadiv Penjaminan
        );
        $this->db->insert('tbl_comments', $data);

        echo "<script>
        alert('Data Berhasil Ditambahkan');
        window.location.href='datacbc';
        </script>";

    }

    public function CBCedit()
    {

        $this->load->model('Model_CBC');
        $data['title'] = 'Edit Form Case By Case';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $cbcid = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBC()->row_array();
        $data['table'] = $this->Model_CBC->getCBCid($cbcid)->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/CBCedit', $data);
        $this->load->view('template/footer');
    }
    public function CBCPedit()
    {

        $this->load->model('Model_CBC');
        $data['title'] = 'Edit Form Case By Case';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $cbcpid = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBCP()->result_array();
        $data['table'] = $this->Model_CBC->getCBCPbyid($cbcpid)->row_array();
        $data['tableJA'] = $this->Model_CBC->getCBCPJAbyid($cbcpid)->row_array();
        $data['tableOJK'] = $this->Model_CBC->getCBCPOJKbyid($cbcpid)->row_array();
        $data['tablependapatan'] = $this->Model_CBC->getCBCPpendapatanbyid($cbcpid)->row_array();
        $data['tablepengeluaran'] = $this->Model_CBC->getCBCPpengeluaranbyid($cbcpid)->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/CBCPedit', $data);
        $this->load->view('template/footer');
    }

    public function editcbc()
    {
        $this->form_validation->set_rules('CBCnomormemo', 'Nomor memo', 'required');
        $this->form_validation->set_rules('TRJMnama', 'Nama terjamin', 'required');
        $this->form_validation->set_rules('TRJMttl', 'Tempat tanggal lahir terjamin', 'required');
        $this->form_validation->set_rules('TRJMktp', 'KTP terjamin', 'required');
        $this->form_validation->set_rules('TRJMalamat', 'Alamat terjamin', 'required');
        $this->form_validation->set_rules('TRJMpekerjaan', 'Pekerjaan terjamin', 'required');
        $this->form_validation->set_rules('CBCjenis', 'Jenis fasilitas kredit', 'required');
        $this->form_validation->set_rules('CBCplafondkredit', 'Plafond Kredit', 'required');
        $this->form_validation->set_rules('CBCjwk', 'Jangka waktu kredit', 'required');
        $this->form_validation->set_rules('CBCangsurankredit', 'Angsuran kredit', 'required');
        $this->form_validation->set_rules('PPnama', 'Nama bank', 'required');
        $this->form_validation->set_rules('PPalamat', 'Alamat bank', 'required');
        $this->form_validation->set_rules('PPtelpon', 'Telpon/Fax bank', 'required');
        $this->form_validation->set_rules('CBCsuratpermohonan', 'Surat permohonan penjaminan', 'required');
        $this->form_validation->set_rules('CBCaspek_kesehatan', 'Aspek kesehatan', 'required');
        $this->form_validation->set_rules('CBCaspek_agunan', 'Aspek agunan', 'required');
        $this->form_validation->set_rules('CBCaspek_pinjaman', 'Aspek pinjaman', 'required');
        $this->form_validation->set_rules('CBCkesimpulan', 'Kesimpulan', 'required');

        if ($this->form_validation->run() == false) {
            return $this->CBCedit();
        } else {
            $CBCnomormemo = $_POST['CBCnomormemo'];
            $TRJMid = $_POST['TRJMid'];
            $TRJMnama = $_POST['TRJMnama'];
            $TRJMttl = $_POST['TRJMttl'];
            $TRJMktp = $_POST['TRJMktp'];
            $TRJMalamat = $_POST['TRJMalamat'];
            $TRJMpekerjaan = $_POST['TRJMpekerjaan'];
            $CBCjenis = $_POST['CBCjenis'];
            $CBCplafondkredit = $_POST['CBCplafondkredit'];
            $CBCjwk = $_POST['CBCjwk'];
            $CBCangsurankredit = $_POST['CBCangsurankredit'];
            $PPid = $_POST['PPid'];
            $CBCsuratpermohonan = $_POST['CBCsuratpermohonan'];
            $CBCaspek_kesehatan = $_POST['CBCaspek_kesehatan'];
            $CBCaspek_agunan = $_POST['CBCaspek_agunan'];
            $CBCaspek_pinjaman = $_POST['CBCaspek_pinjaman'];
            $CBCkesimpulan = $_POST['CBCkesimpulan'];
            $CBCid = $_POST['CBCid'];

            $dataterjamin = array(
                'TRJMnama' => $TRJMnama,
                'TRJMttl' => $TRJMttl,
                'TRJMktp' => $TRJMktp,
                'TRJMalamat' => $TRJMalamat,
                'TRJMpekerjaan' => $TRJMpekerjaan);
            $this->db->where('TRJMid', $TRJMid);
            $this->db->update('tbltrjm', $dataterjamin);

            $data = array(
                'CBCnomormemo' => $CBCnomormemo,
                'CBCjenis' => $CBCjenis,
                'CBCplafondkredit' => $CBCplafondkredit,
                'CBCjwk' => $CBCjwk,
                'CBCangsurankredit' => $CBCangsurankredit,
                'CBCsuratpermohonan' => $CBCsuratpermohonan,
                'CBCaspek_kesehatan' => $CBCaspek_kesehatan,
                'CBCaspek_agunan' => $CBCaspek_agunan,
                'CBCaspek_pinjaman' => $CBCaspek_pinjaman,
                'CBCkesimpulan' => $CBCkesimpulan,
                'PPid' => $PPid);
            $this->db->where('CBCid', $CBCid);
            $this->db->update('tblcbc', $data);
            $date = date("d-m-Y");
            $bulan = date("m");
            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Edit Case By Case") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Data CBC') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

            echo "<script>
        alert('Data Berhasil Diubah');
        window.location.href='datacbc';
        </script>";
        }
    }

    //BELUM SELESAI TAMBAHKAN ID UNTUK MASING MASING TABEL AGAR BISA UPDATE WHERE.
    public function editproduktif()
    {

        $CBCPnomormemo = $_POST['CBCPnomormemo'];
        $CBCPprinsipal = $_POST['CBCPprinsipal'];

        $TRJMpartner = $_POST['TRJMpartner'];
        $TRJMalamatpartner = $_POST['TRJMalamatpartner'];
        $TRJMpekerjaanpartner = $_POST['TRJMpekerjaanpartner'];

        $TRJMnama = $_POST['TRJMnama'];
        $TRJMttl = $_POST['TRJMttl'];
        $TRJMktp = $_POST['TRJMktp'];
        $TRJMalamat = $_POST['TRJMalamat'];
        $TRJMpekerjaan = $_POST['TRJMpekerjaan'];
        $TRJMusaha = $_POST['TRJMusaha'];
        $TRJMnpwp = $_POST['TRJMnpwp'];
        $TRJMalamatsaatini = $_POST['TRJMalamatsaatini'];
        $TRJMstatuspernikahan = $_POST['TRJMstatuspernikahan'];

        $CBCPjenis = $_POST['CBCPjenis'];
        $CBCPsifat = $_POST['CBCPsifat'];
        $CBCPjwk = $_POST['CBCPjwk'];
        $CBCPplafondkredit = $_POST['CBCPplafondkredit'];
        $CBCPangsurankredit = $_POST['CBCPangsurankredit'];
        $CBCPagunankredit = $_POST['CBCPagunankredit'];
        $CBCPrencanakredit = $_POST['CBCPrencanakredit'];

        $PPnama = $_POST['PPnama'];
        $PPalamat = $_POST['PPalamat'];
        $PPtelpon = $_POST['PPtelpon'];
        $PPid = $_POST['PPid'];

        $CBCPcontactperson = $_POST['CBCPcontactperson'];
        $CBCPsuratpermohonan = $_POST['CBCPsuratpermohonan'];
        $CBCPkeputusan = $_POST['CBCPkeputusan'];
        $CBCPsiup = $_POST['CBCPsiup'];
        $CBCPizinjatuhtempo = $_POST['CBCPizinjatuhtempo'];
        $CBCPdeskripsisumberpendapatan = $_POST['CBCPdeskripsisumberpendapatan'];
        $CBCPdeskripsiusaha = $_POST['CBCPdeskripsiusaha'];

        $CBCPjenisagunan = $_POST['CBCPjenisagunan'];
        $CBCPnilaitasaksi = $_POST['CBCPnilaitasaksi'];
        $CBCPnilaidasar = $_POST['CBCPnilaidasar'];
        $CBCPnilaitasaksitanah = $_POST['CBCPnilaitasaksitanah'];
        $CBCPnilaitasaksibangunan = $_POST['CBCPnilaitasaksibangunan'];
        $CBCPnilaidasartanah = $_POST['CBCPnilaidasartanah'];
        $CBCPnilaidasarbangunan = $_POST['CBCPnilaidasarbangunan'];

        $CBCPanalisadokumenidentitas = $_POST['CBCPanalisadokumenidentitas'];
        $CBCPanalisaslikojk = $_POST['CBCPanalisaslikojk'];
        $CBCPojknamabank = $_POST['CBCPojknamabank'];
        $CBCPojkjangkawaktu = $_POST['CBCPojkjangkawaktu'];
        $CBCPojkplafondkredit = $_POST['CBCPojkplafondkredit'];
        $CBCPojktunggakanpokok = $_POST['CBCPojktunggakanpokok'];
        $CBCPojktunggakanbunga = $_POST['CBCPojktunggakanbunga'];
        $CBCPojkangsuran = $_POST['CBCPojkangsuran'];
        $CBCPojkkualitas = $_POST['CBCPojkkualitas'];
        $CBCPojkkondisi = $_POST['CBCPojkkondisi'];
        $CBCPsumberpendapatan = $_POST['CBCPsumberpendapatan'];
        $CBCPnamapendapatan = $_POST['CBCPnamapendapatan'];
        $CBCPpendapatanbulan = $_POST['CBCPpendapatanbulan'];
        $CBCPnamapengeluaran = $_POST['CBCPnamapengeluaran'];
        $CBCPpengeluaranbulan = $_POST['CBCPpengeluaranbulan'];
        $CBCPangsuranexist = $_POST['CBCPangsuranexist'];
        $CBCPkesimpulan = $_POST['CBCPkesimpulan'];

        $datapartner = array(
            'TRJMnama' => $TRJMpartner,
            'TRJMalamat' => $TRJMalamatpartner,
            'TRJMpekerjaan' => $TRJMpekerjaanpartner);
        $this->db->insert('tbltrjm', $datapartner);
        $TRJMPartner_id = $this->db->insert_id();

        $dataterjamin = array(
            'TRJMnama' => $TRJMnama,
            'TRJMttl' => $TRJMttl,
            'TRJMktp' => $TRJMktp,
            'TRJMalamat' => $TRJMalamat,
            'TRJMpekerjaan' => $TRJMpekerjaan,
            'TRJMusaha' => $TRJMusaha,
            'TRJMsiup' => $CBCPsiup,
            'TRJMnpwp' => $TRJMnpwp,
            'TRJMalamatsaatini' => $TRJMalamatsaatini,
            'TRJMstatuspernikahan' => $TRJMstatuspernikahan,
            'TRJMpasangan' => $TRJMPartner_id);
        $this->db->insert('tbltrjm', $dataterjamin);
        $TRJM_id = $this->db->insert_id();

        $dataCBCP = array(
            'CBCPnomormemo' => $CBCPnomormemo,
            'CBCPprinsipal' => $CBCPprinsipal,
            'CBCPjenis' => $CBCPjenis,
            'CBCPsifat' => $CBCPsifat,
            'CBCPplafondkredit' => $CBCPplafondkredit,
            'CBCPjwk' => $CBCPjwk,
            'CBCPangsurankredit' => $CBCPangsurankredit,
            'CBCPagunankredit' => $CBCPagunankredit,
            'CBCPrencanakredit' => $CBCPrencanakredit,
            'CBCPcontactperson' => $CBCPcontactperson,
            'CBCPsuratpermohonan' => $CBCPsuratpermohonan,
            'CBCPkeputusan' => $CBCPkeputusan,
            'CBCPizinjatuhtempo' => $CBCPizinjatuhtempo,
            'CBCPsumberpendapatan' => $CBCPdeskripsisumberpendapatan,
            'CBCPdeskripsiusaha' => $CBCPdeskripsiusaha,
            'CBCPanalisadokumenidentitas' => $CBCPanalisadokumenidentitas,
            'CBCPangsuranexist' => $CBCPangsuranexist,
            'CBCPkesimpulan' => $CBCPkesimpulan,
            'TRJMid' => $TRJM_id,
            'PPid' => $PPid,
        );
        $this->db->insert('tblcbcp', $dataCBCP);
        $CBCPid = $this->db->insert_id();

        if (!empty($CBCPjenisagunan)) {
            for ($i = 0; $i < count($CBCPjenisagunan); $i++) {
                if (!empty($CBCPjenisagunan[$i])) {
                    $dataagunan = array(
                        'JAjenisagunan' => $CBCPjenisagunan[$i],
                        'JAnilaitasaksi' => $CBCPnilaitasaksi[$i],
                        'JAnilaidasar' => $CBCPnilaidasar[$i],
                        'JAnilaitasaksitanah' => $CBCPnilaitasaksitanah[$i],
                        'JAnilaitasaksibangunan' => $CBCPnilaitasaksibangunan[$i],
                        'JAnilaidasartanah' => $CBCPnilaidasartanah[$i],
                        'JAnilaidasarbangunan' => $CBCPnilaidasarbangunan[$i],
                        'CBCPid' => $CBCPid,
                    );
                    $this->db->insert('tblja', $dataagunan);
                    $JA_id = $this->db->insert_id();
                }
            }
        }

        if (!empty($CBCPojknamabank)) {
            for ($i = 0; $i < count($CBCPojknamabank); $i++) {
                if (!empty($CBCPojknamabank[$i])) {
                    $dataojk = array(
                        'CBCPojknamabank' => $CBCPojknamabank[$i],
                        'CBCPojkjwk' => $CBCPojkjangkawaktu[$i],
                        'CBCPojkplafondkredit' => $CBCPojkplafondkredit[$i],
                        'CBCPojktunggakanpokok' => $CBCPojktunggakanpokok[$i],
                        'CBCPojktunggakanbunga' => $CBCPojktunggakanbunga[$i],
                        'CBCPojkangsuran' => $CBCPojkangsuran[$i],
                        'CBCPojkkualitas' => $CBCPojkkualitas[$i],
                        'CBCPojkkondisi' => $CBCPojkkondisi[$i],
                        'CBCPid' => $CBCPid,
                        'CBCPojkanalisaslikojk' => $CBCPanalisaslikojk,
                    );
                    $this->db->insert('tblcbcpojk', $dataojk);
                    $slikojkid = $this->db->insert_id();
                }
            }
        }

        if (!empty($CBCPsumberpendapatan)) {
            for ($i = 0; $i < count($CBCPsumberpendapatan); $i++) {
                if (!empty($CBCPsumberpendapatan[$i])) {
                    $pendapatan = array(
                        'CBCPsumberpendapatan' => $CBCPsumberpendapatan[$i],
                        'CBCPnamapendapatan' => $CBCPnamapendapatan[$i],
                        'CBCPpendapatanbulan' => $CBCPpendapatanbulan[$i],
                        'CBCPid' => $CBCPid,
                    );
                    $this->db->insert('tblcbcppendapatan', $pendapatan);
                    $pendapatanid = $this->db->insert_id();
                }
            }
        }
        if (!empty($CBCPnamapengeluaran)) {
            for ($i = 0; $i < count($CBCPnamapengeluaran); $i++) {
                if (!empty($CBCPnamapengeluaran[$i])) {
                    $pengeluaran = array(
                        'CBCPnamapengeluaran' => $CBCPnamapengeluaran[$i],
                        'CBCPpengeluaranbulan' => $CBCPpengeluaranbulan[$i],
                        'CBCPid' => $CBCPid,
                    );
                    $this->db->insert('tblcbcppengeluaran', $pengeluaran);
                    $pengeluaranid = $this->db->insert_id();
                }
            }
        }
        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Edit Case By Case") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Data CBC') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        echo "<script>
        alert('Data Berhasil Dirubah');
        window.location.href='datacbc';
        </script>";

    }

    public function cbcberkas()
    {
        $this->load->model('Model_CBC');
        $CBCid = $this->uri->segment(3);
        $data['title'] = 'Berkas Case By Case';
        // Pake untuk manggil berkas pdf pada folder
        $data['table'] = $this->Model_CBC->getCBCberkas($CBCid)->row_array();
        $data['upld'] = $this->Model_CBC->getCBCberkasupload($CBCid)->result_array();

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/cbcberkas', $data);
        $this->load->view('template/footer');

    }

    public function cbcpberkas()
    {
        $this->load->model('Model_CBC');
        $CBCPid = $this->uri->segment(3);
        $data['title'] = 'Berkas Case By Case';
        // Pake untuk manggil berkas pdf pada folder
        $data['table'] = $this->Model_CBC->getCBCPberkas($CBCPid)->row_array();
        $data['upld'] = $this->Model_CBC->getCBCPberkasupload($CBCPid)->result_array();

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/cbcpberkas', $data);
        $this->load->view('template/footer');

    }

}
