<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Direktur extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_direktur');
        $this->load->model('Model_CBC');
        $this->load->model('Model_Kredit');
    }

    public function index()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Beranda Direktur';

        $date = date("d-m-Y");
        $bulan = date("m");

        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j,Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Masuk Halaman") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Beranda Direktur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $data['cbc'] = $this->Model_direktur->ambilcasebycase()->row_array();
        $data['cbcp'] = $this->Model_direktur->ambilcasebycaseproduktif()->row_array();
        $data['klaim'] = $this->Model_direktur->ambilklaim()->result_array();
        $data['kur'] = $this->Model_direktur->ambilkur()->result_array();
        $data['subrogasi'] = $this->Model_direktur->ambilsubrogasi()->result_array();
        $data['penjaminan'] = $this->Model_direktur->ambilpenjaminan()->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/beranda', $data);
        $this->load->view('template/footer');
    }

    public function casebycase()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/cbc', $data);
        $this->load->view('template/footer');
    }

    public function casebycaseproduktif()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbcp'] = $this->Model_legal->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('legal/cbcp', $data);
        $this->load->view('template/footer');
    }

    public function cbcapprove()
    {

        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Approval Case By Case';
        $data['cbc'] = $this->Model_direktur->getCBC();
        $data['cbcp'] = $this->Model_direktur->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/cbcapprove', $data);
        $this->load->view('template/footer');
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

    public function cbcdetail()
    {
        $id = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbc'] = $this->Model_direktur->getCBC();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view("direktur/cbcdetail", $data);
        $this->load->view('template/footer');
    }
    public function cbcpdetail()
    {
        $id = $this->uri->segment(3);
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        $data['role'] = $this->db->get('user_role')->result_array();
        $data['title'] = 'Case By Case';
        $data['cbcp'] = $this->Model_direktur->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view("direktur/cbcpdetail", $data);
        $this->load->view('template/footer');
    }

    public function inputkomentar()
    {
        $CBCdirektur = $this->input->post('CBCdirektur');
        $CBCid = $this->input->post('CBCid');
        $CBCkeputusan = $this->input->post('CBCkeputusan');
        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Add Komentar") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('CBC Direktur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $this->Model_direktur->tambahkomentar($CBCdirektur, $CBCid, $CBCkeputusan);
        redirect('Direktur/');
    }

    public function inputkomentarproduktif()
    {
        $CBCPdirektur = $this->input->post('CBCPdirektur');
        $CBCPid = $this->input->post('CBCPid');
        $CBCPkeputusan = $this->input->post('CBCPkeputusan');
        $this->Model_direktur->tambahkomentarproduktif($CBCPdirektur, $CBCPid, $CBCPkeputusan);

        $date = date("d-m-Y");
        $bulan = date("m");
        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j, Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Add Komentar") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('CBC Direktur') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
        redirect('Direktur/');
    }

    public function cbclist()
    {
        $this->load->model('Model_direktur');
        $data['title'] = 'List Case By Case';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();
        //untuk dapatin cbc semua karena getCBCP di Model_direktur pake parameter
        $data['cbc'] = $this->Model_direktur->getCBCAll();
        //untuk dapatin cbcp semuanya dari Model_direktur
        $data['cbcp'] = $this->Model_direktur->getCBCP();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('direktur/cbclist', $data);
        $this->load->view('template/footer');
    }

    public function cbcsp2k()
    {
        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBCid($id);

        //mulai proses
        $this->importcbc($id);
        //end

        $this->load->view('penjaminan/cetakCBC', $data);

        // title dari pdf
        $this->load->library('pdfsp2k');
        $this->data['title_pdf'] = 'SP2K';

        // filename dari pdf ketika didownload
        $file_pdf = 'SP2K'; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakSP2K', $this->data, true);

        // run dompdf
        $this->pdfsp2k->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakSP2K', $data);
    }

    public function cbcpsp2k()
    {
        $id = $this->uri->segment(3);
        $data['table'] = $this->Model_CBC->getCBCPbyid($id);
        $data['cbcpja'] = $this->Model_CBC->getCBCPJAbyid($id);
        $data['cbcpojk'] = $this->Model_CBC->getCBCPOJKbyid($id);
        $data['cbcppendapatan'] = $this->Model_CBC->getCBCPpendapatanbyid($id);
        $data['cbcppengeluaran'] = $this->Model_CBC->getCBCPpengeluaranbyid($id);

        // sebelum masuk ke title pdf
        $this->importcbcp($id);
        // end

        // title dari pdf
        $this->load->library('pdfsp2k');
        $this->data['title_pdf'] = 'SP2K';

        // filename dari pdf ketika didownload
        $file_pdf = 'SP2K'; // Tambah nama terjamin

        $paper = 'Legal';

        $orientation = "Potrait";

        $html = $this->load->view('penjaminan/cetakSP2Kproduktif', $data, true);

        // run dompdf
        $this->pdfsp2k->generate($html, $file_pdf, $paper, $orientation);
        $this->load->view('penjaminan/cetakSP2Kproduktif', $data);

    }

    public function importcbcp($id)
    {

        $id = $this->uri->segment(3);
        $table = $this->Model_CBC->getCBCPbyid($id)->row_array();

        $cbcpja = $this->Model_CBC->getCBCPJAbyid($id);
        $cbcpojk = $this->Model_CBC->getCBCPOJKbyid($id);
        $cbcppendapatan = $this->Model_CBC->getCBCPpendapatanbyid($id);
        $cbcpengeluaran = $this->Model_CBC->getCBCPpengeluaranbyid($id);
        //AMBIL NO REG
        $autogen = $this->Model_Kredit->noregis();
        $autogenurut = $this->Model_Kredit->nourut();

        $DJPacuanhitung = "PLAFOND KREDIT";
        $GPPid = $table['GPPid'];
        $DJPnoreg = $autogen;
        $DJPnourut = $autogenurut;
        $DJPnoseri = "--";
        $PPid = $table['PPid'];
        $PPnama = $table['PPnama'];
        $PPalamat = $table['PPalamat'];
        $DJPnodeklarasi = "--";
        $DJPtanggaldeklarasi = $table['CBCPtanggal'];
        $DJPperiode = date("m");
        $OPKid = "2";
        $PKSid = $table['PKSid'];
        $SPJid = "1";
        $JSPid = "2";
        $PKSjenis = "PK";

        $this->Model_Kredit->tambah($DJPacuanhitung, $GPPid, $DJPnoreg, $DJPnourut, $DJPnoseri, $PPid, $PPnama, $PPalamat, $DJPnodeklarasi, $DJPtanggaldeklarasi, $DJPperiode, $OPKid, $PKSid, $PKSjenis, $SPJid, $JSPid);
        $insert_id = $this->db->insert_id();
        $DJPid = $insert_id;
        // END
        $DJPDnoreg = $DJPnoreg;
        $TRJMnama = $table['TRJMnama'];
        $TRJMalamat = $table['TRJMalamat'];
        $TRJMusia = $table['TRJMusia'];
        $PKRJid = "--";
        $DJPDnoakad = $table['CBCPnomormemo'];
        $DJPDtanggalakad = $table['CBCPtanggal'];
        $DJPDjangkawaktu = $table['CBCPjwk'];
        $DJPDtanggalawal = $table['CBCPtanggal'];

        //hitung jangka waktu
        $tglakhir = date('Y-m-d', strtotime('+ ' . $DJPDjangkawaktu . '  month', strtotime($DJPDtanggalawal)));
        $DJPDtanggalakhir = $tglakhir;
        //end
        $DJPDplafondkredit = $table['CBCPplafondkredit'];
        $DJPDcoverage = $table['CBCPcoverage'];
        $nilaipnjm = ($DJPDcoverage / 100) * $DJPDplafondkredit;
        $DJPDnilaipenjaminan = $nilaipnjm;

        $DJPDrate = $table['CBCPrate'];

        $DJPDimbaljasa = $DJPDplafondkredit * ($DJPDrate / 100);
        $DJPDtujuankredit = "Case By Case";
        $DJPDjenisagunan = "Case By Case";
        $DJPDcarapengikatan = "Case By Case";
        $DJPDnilaitransaksipasar = "Case By Case";
        $DJPDnilaitransaksilikuidasi = "Case By Case";
        $DJPDsu = "Case By Case";
        $DJPDobjekpenjaminan = "Case By Case";

        $data = array(
            'TRJMid' => $table['TRJMid'],
            'TRJMnama' => $TRJMnama,
            'TRJMalamat' => $TRJMalamat,
            'TRJMusia' => $TRJMusia,
            'DJPDnoakad' => $DJPDnoakad,
            'DJPDtanggalakad' => $DJPDtanggalakad,
            'DJPDjangkawaktu' => $DJPDjangkawaktu,
            'DJPDtanggalawal' => $DJPDtanggalawal,
            'DJPDtanggalakhir' => $DJPDtanggalakhir,
            'DJPDplafondkredit' => $DJPDplafondkredit,
            'DJPDcoverage' => $DJPDcoverage,
            'DJPDrate' => $DJPDrate,
            'DJPDnilaipenjaminan' => $DJPDnilaipenjaminan,
            'DJPDtujuankredit' => $DJPDtujuankredit,
            'DJPDjenisagunan' => $DJPDjenisagunan,
            'DJPDcarapengikatan' => $DJPDcarapengikatan,
            'DJPDnilaitransaksipasar' => $DJPDnilaitransaksipasar,
            'DJPDnilaitransaksilikuidasi' => $DJPDnilaitransaksilikuidasi,
            'DJPDimbaljasa' => $DJPDimbaljasa,
            'DJPid' => $DJPid,
            'DJPDnoreg' => "" . $DJPnoreg,
            'DJPDsu' => $DJPDsu,
            'DJPDobjekpenjaminan' => $DJPDobjekpenjaminan,
        );
        $this->db->insert('tbldjpd', $data);
        $DJPDid = $this->db->insert_id();
        //START PENJAMINAN HASIL

        $queryjumlahfeebankadmmaterai = $this->db->query("SELECT DJPDid, DJPDimbaljasa FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($queryjumlahfeebankadmmaterai->result() as $row) {
            $Jumlahimbaljasa = $row->DJPDimbaljasa;
            $DJPDid = $row->DJPDid;
        }
        $data = [

            'DJPDfeeadm' => 0,
            'DJPDfeematerai' => 0,
            'DJPDfeebank' => (10 / 100) * $Jumlahimbaljasa,

        ];
        $this->db->where('DJPid', $DJPid);
        $this->db->where('DJPDid', $DJPDid);
        $this->db->update('tbldjpd', $data);

        // nilai pert tertinggi diambil dari total plafond seluruh terjamin didalam satu dpj id atau no registrasi
        $querynilaipert = $this->db->query("SELECT MAX(DJPDplafondkredit) AS DJPDplafondkredit FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querynilaipert->result() as $row) {
            $NilaiPert = $row->DJPDplafondkredit;
        }

        // nilai plafond djph ditotalkan dari seluruh plafond kredit dari terjamin
        $querysumplafond = $this->db->query("SELECT SUM(DJPDplafondkredit) AS DJPDplafondkredit FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querysumplafond->result() as $row) {
            $NilaiPlafond = $row->DJPDplafondkredit;
        }
        // jumlah pk didapatkan dari select count terjamin per nomor registrasi atau djp id
        $queryjumlahpk = $this->db->query("SELECT COUNT(TRJMid) AS TRJMid FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($queryjumlahpk->result() as $row) {
            $JumlahPK = $row->TRJMid;
        }
        // nilai penjaminan didapat dari total nilai penjaminan semua terjamin
        $querysumpenjaminan = $this->db->query("SELECT SUM(DJPDnilaipenjaminan) AS DJPDnilaipenjaminan FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querysumpenjaminan->result() as $row) {
            $NilaiPenjaminan = $row->DJPDnilaipenjaminan;
        }

        // total ijp dari semua terjamin per nomor registrasi atau djp id
        $querysumijp = $this->db->query("SELECT SUM(DJPDimbaljasa) AS DJPDimbaljasa FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querysumijp->result() as $row) {
            $NilaiIJP = $row->DJPDimbaljasa;
        }
        // Feebank  dan Materai diambil dari nomor pks yang ada di djph
        $queryambilpks = $this->db->query("SELECT PKSid FROM tbldjph WHERE DJPid = '$DJPid'");
        foreach ($queryambilpks->result() as $row) {
            $PKSid = $row->PKSid;
        }

        $querybank = $this->db->query("SELECT PKSratefee FROM tblpks WHERE PKSid = '$PKSid'");
        foreach ($querybank->result() as $row) {
            $FeeBank = $row->PKSratefee;

        }

        $np = $NilaiPert;
        $jpk = $JumlahPK;
        $plafond = $NilaiPlafond;
        $nilaip = $NilaiPenjaminan;
        $ijp = $NilaiIJP;
        $fb = $FeeBank;

        // start post total

        $userid = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data = [
            'DJPmaxnilai' => $np,
            'DJPtahun' => date("Y"),
            'DJPjumlahpk' => $jpk,
            'DJPjumlahnilaipk' => $plafond,
            'DJPnilaipenjaminan' => $nilaip,
            'DJPjumlahimbaljasa' => $ijp,
            'PKSratefee' => "10%",
            'DJPfeebank' => $ijp * (10 / 100),
            'DJPfeematerai' => 0,
            'DJPfeeadmin' => 0,
            'DJPjumlahbiaya' => $jumlah = $ijp - ($ijp * (10 / 100)),
            'DJPjumlahbiayaterbilang' => $this->penyebut($jumlah),
            'DJPuseridentry' => $userid['id'],
            'DJPtanggalentry' => date("Y-m-d"),

        ];
        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $data);

        $date = date("d-m-Y");
        $bulan = date("m");

        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Tambah Data Terjamin Lengkap") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Data Nasabah') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $data = array(
            'comment_subject' => 'Data CBC',
            'comment_text' => "Data CBC Baru",
            'comment_status' => 0,
            'roleId_sender' => 2,
            'roleId_receiver' => 3,
        );
        $this->db->insert('tbl_comments', $data);

    }

    public function importcbc($id)
    {
        $id = $this->uri->segment(3);
        $table = $this->Model_CBC->getCBCid($id)->row_array();

        $autogen = $this->Model_Kredit->noregis();
        $autogenurut = $this->Model_Kredit->nourut();

        $DJPacuanhitung = "PLAFOND KREDIT";
        $GPPid = $table['GPPid'];
        $DJPnoreg = $autogen;
        $DJPnourut = $autogenurut;
        $DJPnoseri = "--";
        $PPid = $table['PPid'];
        $PPnama = $table['PPnama'];
        $PPalamat = $table['PPalamat'];
        $DJPnodeklarasi = "--";
        $DJPtanggaldeklarasi = $table['CBCtanggal'];
        $DJPperiode = date("m");
        $OPKid = "4";
        $PKSid = $table['PKSid'];
        $SPJid = "1";
        $JSPid = "2";
        $PKSjenis = "PK";

        $this->Model_Kredit->tambah($DJPacuanhitung, $GPPid, $DJPnoreg, $DJPnourut, $DJPnoseri, $PPid, $PPnama, $PPalamat, $DJPnodeklarasi, $DJPtanggaldeklarasi, $DJPperiode, $OPKid, $PKSid, $PKSjenis, $SPJid, $JSPid);
        $insert_id = $this->db->insert_id();
        $DJPid = $insert_id;

        $DJPDnoreg = $DJPnoreg;
        $TRJMnama = $table['TRJMnama'];
        $TRJMalamat = $table['TRJMalamat'];
        $TRJMusia = $table['TRJMusia'];
        $PKRJid = "--";
        $DJPDnoakad = $table['CBCnomormemo'];
        $DJPDtanggalakad = $table['CBCtanggal'];
        $DJPDjangkawaktu = $table['CBCjwk'];
        $DJPDtanggalawal = $table['CBCtanggal'];

        //hitung jangka waktu
        $tglakhir = date('Y-m-d', strtotime('+ ' . $DJPDjangkawaktu . '  month', strtotime($DJPDtanggalawal)));
        $DJPDtanggalakhir = $tglakhir;
        //end
        $DJPDplafondkredit = $table['CBCplafondkredit'];
        $DJPDcoverage = $table['CBCcoverage'];
        $nilaipnjm = ($DJPDcoverage / 100) * $DJPDplafondkredit;
        $DJPDnilaipenjaminan = $nilaipnjm;

        $DJPDrate = $table['CBCrate'];

        $DJPDimbaljasa = $DJPDplafondkredit * ($DJPDrate / 1000);
        $DJPDtujuankredit = "Case By Case";
        $DJPDjenisagunan = "Case By Case";
        $DJPDcarapengikatan = "Case By Case";
        $DJPDnilaitransaksipasar = "Case By Case";
        $DJPDnilaitransaksilikuidasi = "Case By Case";
        $DJPDsu = "Case By Case";
        $DJPDobjekpenjaminan = "Case By Case";

        $data = array(
            'TRJMid' => $table['TRJMid'],
            'TRJMnama' => $TRJMnama,
            'TRJMalamat' => $TRJMalamat,
            'TRJMusia' => $TRJMusia,
            'DJPDnoakad' => $DJPDnoakad,
            'DJPDtanggalakad' => $DJPDtanggalakad,
            'DJPDjangkawaktu' => $DJPDjangkawaktu,
            'DJPDtanggalawal' => $DJPDtanggalawal,
            'DJPDtanggalakhir' => $DJPDtanggalakhir,
            'DJPDplafondkredit' => $DJPDplafondkredit,
            'DJPDcoverage' => $DJPDcoverage,
            'DJPDrate' => $DJPDrate,
            'DJPDnilaipenjaminan' => $DJPDnilaipenjaminan,
            'DJPDtujuankredit' => $DJPDtujuankredit,
            'DJPDjenisagunan' => $DJPDjenisagunan,
            'DJPDcarapengikatan' => $DJPDcarapengikatan,
            'DJPDnilaitransaksipasar' => $DJPDnilaitransaksipasar,
            'DJPDnilaitransaksilikuidasi' => $DJPDnilaitransaksilikuidasi,
            'DJPDimbaljasa' => $DJPDimbaljasa,
            'DJPid' => $DJPid,
            'DJPDnoreg' => "" . $DJPnoreg,
            'DJPDsu' => $DJPDsu,
            'DJPDobjekpenjaminan' => $DJPDobjekpenjaminan,
        );
        $this->db->insert('tbldjpd', $data);
        $DJPDid = $this->db->insert_id();

        $queryjumlahfeebankadmmaterai = $this->db->query("SELECT DJPDid, DJPDimbaljasa FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($queryjumlahfeebankadmmaterai->result() as $row) {
            $Jumlahimbaljasa = $row->DJPDimbaljasa;
            $DJPDid = $row->DJPDid;
        }
        $data = [

            'DJPDfeeadm' => 0,
            'DJPDfeematerai' => 0,
            'DJPDfeebank' => (10 / 100) * $Jumlahimbaljasa,

        ];
        $this->db->where('DJPid', $DJPid);
        $this->db->where('DJPDid', $DJPDid);
        $this->db->update('tbldjpd', $data);

        // nilai pert tertinggi diambil dari total plafond seluruh terjamin didalam satu dpj id atau no registrasi
        $querynilaipert = $this->db->query("SELECT MAX(DJPDplafondkredit) AS DJPDplafondkredit FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querynilaipert->result() as $row) {
            $NilaiPert = $row->DJPDplafondkredit;
        }

        // nilai plafond djph ditotalkan dari seluruh plafond kredit dari terjamin
        $querysumplafond = $this->db->query("SELECT SUM(DJPDplafondkredit) AS DJPDplafondkredit FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querysumplafond->result() as $row) {
            $NilaiPlafond = $row->DJPDplafondkredit;
        }
        // jumlah pk didapatkan dari select count terjamin per nomor registrasi atau djp id
        $queryjumlahpk = $this->db->query("SELECT COUNT(TRJMid) AS TRJMid FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($queryjumlahpk->result() as $row) {
            $JumlahPK = $row->TRJMid;
        }
        // nilai penjaminan didapat dari total nilai penjaminan semua terjamin
        $querysumpenjaminan = $this->db->query("SELECT SUM(DJPDnilaipenjaminan) AS DJPDnilaipenjaminan FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querysumpenjaminan->result() as $row) {
            $NilaiPenjaminan = $row->DJPDnilaipenjaminan;
        }

        // total ijp dari semua terjamin per nomor registrasi atau djp id
        $querysumijp = $this->db->query("SELECT SUM(DJPDimbaljasa) AS DJPDimbaljasa FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($querysumijp->result() as $row) {
            $NilaiIJP = $row->DJPDimbaljasa;
        }
        // Feebank  dan Materai diambil dari nomor pks yang ada di djph
        $queryambilpks = $this->db->query("SELECT PKSid FROM tbldjph WHERE DJPid = '$DJPid'");
        foreach ($queryambilpks->result() as $row) {
            $PKSid = $row->PKSid;
        }

        $querybank = $this->db->query("SELECT PKSratefee FROM tblpks WHERE PKSid = '$PKSid'");
        foreach ($querybank->result() as $row) {
            $FeeBank = $row->PKSratefee;

        }

        $np = $NilaiPert;
        $jpk = $JumlahPK;
        $plafond = $NilaiPlafond;
        $nilaip = $NilaiPenjaminan;
        $ijp = $NilaiIJP;
        $fb = $FeeBank;

        // start post total

        $userid = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data = [
            'DJPmaxnilai' => $np,
            'DJPtahun' => date("Y"),
            'DJPjumlahpk' => $jpk,
            'DJPjumlahnilaipk' => $plafond,
            'DJPnilaipenjaminan' => $nilaip,
            'DJPjumlahimbaljasa' => $ijp,
            'PKSratefee' => "10%",
            'DJPfeebank' => $ijp * (10 / 100),
            'DJPfeematerai' => 0,
            'DJPfeeadmin' => 0,
            'DJPjumlahbiaya' => $jumlah = $ijp - ($ijp * (10 / 100)),
            'DJPjumlahbiayaterbilang' => $this->penyebut($jumlah),
            'DJPuseridentry' => $userid['id'],
            'DJPtanggalentry' => date("Y-m-d"),

        ];
        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $data);

        $date = date("d-m-Y");
        $bulan = date("m");

        $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j Y, H:i:s") . PHP_EOL .
            "Attempt: " . ("Success Tambah Data Terjamin Lengkap") . PHP_EOL .
            "User: " . $namauser['nama'] . PHP_EOL .
            "Aksi: " . ('Data Nasabah') . PHP_EOL .
            "-------------------------" . PHP_EOL;
        //-
        file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);

        $data = array(
            'comment_subject' => 'Data CBC',
            'comment_text' => "Data CBC Baru",
            'comment_status' => 0,
            'roleId_sender' => 2,
            'roleId_receiver' => 3,
        );
        $this->db->insert('tbl_comments', $data);

    }

    public function penyebut($hasil)
    {

        $nilai = abs($hasil);
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " Belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " Puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " Seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " Ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " Seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " Ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " Juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " Milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " Trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;

    }

}
