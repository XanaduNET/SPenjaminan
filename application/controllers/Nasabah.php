<?php

class Nasabah extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_nasabah');
        $usernama = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

    }

    public function index()
    {
        $this->load->library('form_validation');

        // $tgl1 = "2013-01-23"; // pendefinisian tanggal awal
        // echo date('Y-m-d', strtotime('+24 month', strtotime($tgl1))); //tambah tanggal sebanyak 6 bulan

        $data['ambilpkrj'] = $this->Model_nasabah->ambilPKRJ();

        $data['title'] = 'Nasabah';
        $data['user'] = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/header_body', $data);
        $this->load->view('template/right_sidebar', $data);
        $this->load->view('template/left_sidebar', $data);
        $this->load->view('penjaminan/nasabah', $data);
        $this->load->view('template/footer');

    }

    public function storePost()
    {
        $DJPidkirim = $this->input->post('DJPid');
        $DJPid = $_POST['DJPid'];
        $OPKid = $_POST['OPKid'];
        $TRJMnama = $_POST['TRJMnama'];
        $TRJMalamat = $_POST['TRJMalamat'];
        $TRJMusia = $_POST['TRJMusia'];
        $TRJMktp = $_POST['TRJMktp'];
        $TRJMsiup = $_POST['TRJMsiup'];
        $TRJMnpwp = $_POST['TRJMnpwp'];
        $PKRJid = $_POST['PKRJid'];
        $DJPDnoakad = $_POST['DJPDnoakad'];
        $DJPDtanggalakad = $_POST['DJPDtanggalakad'];
        $DJPDjangkawaktu = $_POST['DJPDjangkawaktu'];
        $DJPDtanggalawal = $_POST['DJPDtanggalawal'];
        $DJPDtanggalakhir = $_POST['DJPDtanggalakhir'];
        $DJPDplafondkredit = $_POST['DJPDplafondkredit'];
        $DJPDnilaipenjaminan = $_POST['DJPDnilaipenjaminan'];
        $DJPDcoverage = $_POST['DJPDcoverage'];
        $DJPDrate = $_POST['DJPDrate'];
        $DJPDimbaljasa = $_POST['DJPDimbaljasa'];
        $DJPDtujuankredit = $_POST['DJPDtujuankredit'];
        $DJPDjenisagunan = $_POST['DJPDjenisagunan'];
        $DJPDcarapengikatan = $_POST['DJPDcarapengikatan'];
        $DJPDnilaitransaksipasar = $_POST['DJPDnilaitransaksipasar'];
        $DJPDnilaitransaksilikuidasi = $_POST['DJPDnilaitransaksilikuidasi'];
        $DJPDsu = $_POST['DJPDsu'];
        $DJPDobjekpenjaminan = $_POST['DJPDobjekpenjaminan'];

        $querynoreg = $this->db->get_where('tbldjph', ['DJPid' => $DJPid])->row_array();

        if (!empty($TRJMnama)) {
            for ($i = 0; $i < count($TRJMnama); $i++) {
                if (!empty($TRJMnama[$i])) {
                    $data = array(
                        'TRJMnama' => $TRJMnama[$i],
                        'TRJMalamat' => $TRJMalamat[$i],
                        'TRJMusia' => $TRJMusia[$i],
                        'TRJMktp' => $TRJMktp[$i],
                        'TRJMsiup' => $TRJMsiup[$i],
                        'TRJMnpwp' => $TRJMnpwp[$i]);

                    $this->db->insert('tbltrjm', $data);
                    $TRJM_id = $this->db->insert_id();

                    $data = array(
                        'TRJMid' => $TRJM_id,
                        'TRJMnama' => $TRJMnama[$i],
                        'TRJMalamat' => $TRJMalamat[$i],
                        'TRJMusia' => $TRJMusia[$i],
                        'DJPDnoakad' => $DJPDnoakad[$i],
                        'DJPDtanggalakad' => $DJPDtanggalakad[$i],
                        'DJPDjangkawaktu' => $DJPDjangkawaktu[$i],
                        'DJPDtanggalawal' => $DJPDtanggalawal[$i],
                        'DJPDtanggalakhir' => $DJPDtanggalakhir[$i],
                        'DJPDplafondkredit' => implode(explode(".", $DJPDplafondkredit[$i])),
                        'DJPDcoverage' => $DJPDcoverage[$i],
                        'DJPDrate' => $DJPDrate[$i],
                        'DJPDnilaipenjaminan' => implode(explode(".", $DJPDnilaipenjaminan[$i])),
                        'DJPDtujuankredit' => $DJPDtujuankredit[$i],
                        'DJPDjenisagunan' => $DJPDjenisagunan[$i],
                        'DJPDcarapengikatan' => $DJPDcarapengikatan[$i],
                        'DJPDnilaitransaksipasar' => implode(explode(".", $DJPDnilaitransaksipasar[$i])),
                        'DJPDnilaitransaksilikuidasi' => implode(explode(".", $DJPDnilaitransaksilikuidasi[$i])),
                        'DJPDimbaljasa' => implode(explode(".", $DJPDimbaljasa[$i])),
                        'DJPid' => $DJPid,
                        'DJPDnoreg' => "" . $querynoreg['DJPnoreg'],
                        'DJPDsu' => $DJPDsu[$i],
                        'DJPDobjekpenjaminan' => $DJPDobjekpenjaminan[$i],
                    );
                    $this->db->insert('tbldjpd', $data);
                }
            }

            $date = date("d-m-Y");
            $bulan = date("m");

            $namauser = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

            $log = "User: " . $_SERVER['REMOTE_ADDR'] . ' - ' . date("F j Y, H:i:s") . PHP_EOL .
                "Attempt: " . ("Success Add Data Terjamin") . PHP_EOL .
                "User: " . $namauser['nama'] . PHP_EOL .
                "Aksi: " . ('Data Nasabah') . PHP_EOL .
                "-------------------------" . PHP_EOL;
            //-
            file_put_contents('logfile/' . $bulan . '/logfile' . $date . '/log_' . date("j.n.Y") . '.txt', $log, FILE_APPEND);
        }

    }
    public function storePostTotal()
    {
        $userid = $this->db->get_where('user', ['nama' => $this->session->userdata('nama')])->row_array();

        $data = [
            'DJPmaxnilai' => implode(explode(".", $this->input->post('DJPmaxnilai'))),
            'DJPtahun' => $this->input->post('DJPtahun'),
            'DJPjumlahpk' => $this->input->post('DJPpk'),
            'DJPjumlahnilaipk' => implode(explode(".", $this->input->post('DJPjumlahnilaipk'))),
            'DJPnilaipenjaminan' => implode(explode(".", $this->input->post('DJPnilaipenjaminan'))),
            'DJPjumlahimbaljasa' => implode(explode(".", $this->input->post('DJPjumlahimbaljasa'))),
            'PKSratefee' => $this->input->post('DJPfeebank'),
            'DJPfeebank' => implode(explode(".", $this->input->post('DJPjumlahfeebank'))),
            'DJPfeematerai' => implode(explode(".", $this->input->post('DJPfeematerai'))),
            'DJPfeeadmin' => implode(explode(".", $this->input->post('DJPfeeadmin'))),
            'DJPjumlahbiaya' => implode(explode(".", $this->input->post('DJPjumlahbiaya'))),
            'DJPjumlahbiayaterbilang' => $this->input->post('DJPjumlahbiayaterbilang'),
            'DJPuseridentry' => $userid['id'],

        ];
        $this->db->where('DJPid', $this->input->post('DJPid'));
        $this->db->update('tbldjph', $data);

        $DJPid = $this->input->post('DJPid');
        $queryjumlahbiaya = $this->db->query("SELECT DJPjumlahbiaya FROM tbldjph WHERE DJPid = '$DJPid'");
        foreach ($queryjumlahbiaya->result() as $row) {
            $Jumlahbiaya = $row->DJPjumlahbiaya;
        }
        if ($Jumlahbiaya < 0) {
            $hasil = "Minus " . trim($this->penyebut($Jumlahbiaya));
        } else {
            $hasil = trim($this->penyebut($Jumlahbiaya));
        }

        $data = [

            'DJPjumlahbiayaterbilang' => $hasil,

        ];

        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $data);

        $queryjumlahfeebankadmmaterai = $this->db->query("SELECT DJPDid, DJPDimbaljasa FROM tbldjpd WHERE DJPid = '$DJPid'");
        foreach ($queryjumlahfeebankadmmaterai->result() as $row) {
            $Jumlahimbaljasa = $row->DJPDimbaljasa;
            $DJPDid = $row->DJPDid;

            $data = [

                'DJPDfeeadm' => $this->input->post('DJPfeeadmin'),
                'DJPDfeematerai' => $this->input->post('DJPfeematerai'),
                'DJPDfeebank' => (($this->input->post('DJPfeebank') / 100) * $Jumlahimbaljasa),

            ];

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

            $this->db->where('DJPid', $DJPid);
            $this->db->where('DJPDid', $DJPDid);
            $this->db->update('tbldjpd', $data);

            $data = array(
                'comment_subject' => 'Data CAC',
                'comment_text' => "Data CAC Baru",
                'comment_status' => 0,
                'roleId_sender' => 2,
                'roleId_receiver' => 3,
            );
            $this->db->insert('tbl_comments', $data);

        }
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

    public function kirimBulan()
    {
        $tglawal1 = $this->input->post("tglawal");
        $jwk1 = $this->input->post("jwk");

        $tglakhir = date('Y-m-d', strtotime('+ ' . $jwk1 . '  month', strtotime($tglawal1))); //tambah tanggal sebanyak 6 bulan

        $arr_result[] = array(
            'tanggalakhir' => $tglakhir,

        );

        echo json_encode($arr_result);

    }
    public function cariRate()
    {
        $coverage = $this->input->post('coverage');
        $pkrj = $this->input->post('pkrj');
        $jwk = $this->input->post('jwk');
        $opk = $this->input->post('opk');
        $plafond = $this->input->post('plafond');

        if ($opk == 1 or $opk == 2) {

            $queryjwk = $this->db->query("SELECT JWKid FROM tbljwk WHERE $jwk BETWEEN JWKsatu AND JWKdua");

            foreach ($queryjwk->result() as $row) {
                $JWKhasil = $row->JWKid;

            }

            $querycvr = $this->db->query("SELECT CVRid FROM tblcvr WHERE $coverage BETWEEN CVRsatu AND CVRdua");

            foreach ($querycvr->result() as $row) {
                $CVRhasil = $row->CVRid;

            }

            $queryrate = $this->db->query("SELECT IJPrate FROM tblijp WHERE OPKid = $opk AND JWKid = $JWKhasil AND CVRid = $CVRhasil");

            if (!empty($queryrate->result())) {
                foreach ($queryrate->result() as $row) {
                    $RATEhasil = $row->IJPrate;

                }
                $IJPhasil = round(($RATEhasil / 100) * $plafond);
                $arr_result[] = array(
                    'IJPrate' => $RATEhasil . "%",
                    'IJPhasil' => $IJPhasil,

                );

                echo json_encode($arr_result);
            } else {

                $arr_result[] = array(
                    'IJPrate' => "Rate Tidak Ditemukan",
                    'IJPhasil' => "Imbal Jasa TIdak Ditemukan",

                );

                echo json_encode($arr_result);

            }

        } else if ($opk == 3) {

            $queryjwk = $this->db->query("SELECT JWKid FROM tbljwk WHERE $jwk BETWEEN JWKsatu AND JWKdua");

            foreach ($queryjwk->result() as $row) {
                $JWKhasil = $row->JWKid;

            }

            $queryrate = $this->db->query("SELECT IJPrate FROM tblijp WHERE OPKid = $opk AND JWKid = $JWKhasil AND PKRJid = $pkrj AND CVRid='4'");

            if (!empty($queryrate->result())) {
                foreach ($queryrate->result() as $row) {
                    $RATEhasil = $row->IJPrate;
                }
                $IJPhasil = $RATEhasil * $plafond;

                $arr_result[] = array(
                    'IJPrate' => $RATEhasil,
                    'IJPhasil' => $IJPhasil,
                );

                echo json_encode($arr_result);

            } else {

                $arr_result[] = array(
                    'IJPrate' => "Rate Tidak Ditemukan",
                    'IJPhasil' => "Imbal Jasa Tidak Ditemukan",

                );

                echo json_encode($arr_result);

            }
        }
    }
    public function HitungImbalJasa()
    {
        $plafond1 = $this->input->post("plafond");
        $rate1 = $this->input->post("rate");

        $imbaljasapenjaminan = ($plafond1 * $rate1);

        $arr_result[] = array(
            'imbaljasa' => $imbaljasapenjaminan,

        );

        echo json_encode($arr_result);

    }
    public function penjaminanHasil()
    {
        $DJPid = $this->input->post("djpid");

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

        $arr_result[] = array(
            'nilaipert' => $NilaiPert,
            'jumlahPK' => $JumlahPK,
            'plafond' => $NilaiPlafond,
            'nilaipenjaminan' => $NilaiPenjaminan,
            'imbaljasa' => $NilaiIJP,
            'feebank' => $FeeBank,

        );

        echo json_encode($arr_result);

    }

    public function inputPKRJ()
    {

        $PKRJ = $this->input->post("PKRJ");
        $data = array(
            'PKRJnama' => $PKRJ,
        );
        $this->db->insert('tblpkrj', $data);

        $PKRJlist = $this->Model_nasabah->ambilPKRJ();

        // Buat variabel untuk menampung tag-tag option nya
        // Set defaultnya dengan tag option --Pilih--
        $lists = "<option value=''>--Pilih--</option>";

        foreach ($PKRJlist as $data) {

            $lists .= "<option value='" . $data->PKRJid . "'>" . $data->PKRJnama . "</option>"; // Tambahkan tag option ke variabel $lists

        }
        $callback = array('list_pkrj' => $lists); // Masukan variabel lists tadi ke dalam array $callback dengan index array : list_pks

        echo json_encode($callback); // konversi varibael $callback menjadi JSON

    }

}
