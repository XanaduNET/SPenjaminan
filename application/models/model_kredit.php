<?php
class Model_Kredit extends CI_Model
{
    public function tambah($DJPacuanhitung, $GPPid, $DJPnoreg, $DJPnourut, $DJPnoseri, $PPid, $PPnama, $PPalamat, $DJPnodeklarasi, $DJPtanggaldeklarasi, $DJPperiode, $OPKid, $PKSid, $PKSjenis, $SPJid, $JSPid)
    {

        $data = array(
            'DJPacuanhitung' => $DJPacuanhitung,
            'GPPid' => $GPPid,
            'DJPnoreg' => $DJPnoreg,
            'DJPnourut' => $DJPnourut,
            'DJPnoseri' => $DJPnoseri,
            'PPid' => $PPid,
            'PPnama' => $PPnama,
            'PPalamat' => $PPalamat,
            'DJPnodeklarasi' => $DJPnodeklarasi,
            'DJPtanggaldeklarasi' => $DJPtanggaldeklarasi,
            'DJPperiode' => $DJPperiode,
            'OPKid' => $OPKid,
            'PKSid' => $PKSid,
            'PKSjenis' => $PKSjenis,
            'SPJid' => $SPJid,
            'JSPid' => $JSPid,

        );
        $this->db->insert('tbldjph', $data);

    }

    public function ambilGPP()
    {
        return $this->db->get('tblgpp')->result();
    }

    public function ambilOPK()
    {
        return $this->db->get('tblopk')->result();
    }

    public function ambilJSP()
    {
        return $this->db->get('tbljsp')->result();
    }
    public function ambilSPJ()
    {
        return $this->db->get('tblspj')->result();
    }

    public function ambilPKS($GPPid)
    {

        $this->db->where('GPPid', $GPPid);
        $result = $this->db->get('tblpks')->result(); // Tampilkan semua data Tabel Perjanjian Kerja Sama berdasarkan id Grup Penerima Penjaminan (GPP)

        return $result;
    }

    public function cariPP($title)
    {
        $this->db->like('PPnama', $title, 'both');
        $this->db->order_by('PPnama', 'ASC');
        $this->db->limit(10);
        return $this->db->get('tblpp')->result();
    }
    public function ambilsemuaPP()
    {
        $result = $this->db->get('tblpp');
        return $result;
    }

    public function noregis()
    {

        $sql = "SELECT MAX(MID(DJPnoreg,10,13)) AS noregg FROM tbldjph WHERE CAST(MID(DJPnoreg,7,8) AS int) = DATE_FORMAT(CURDATE(), '%y')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int) $row->noregg) + 1;
            $no = sprintf("%'.05d", $n);
            $tahun = date(".y.");
            $bulan = date(".m.");
            $tetap = "1.12.0";
            $noawal = "07.02";

        } else {
            $no = "00001";
        }

        $noreg = $noawal . $tahun . $no . $bulan . $tetap;
        return $noreg;

    }

    public function nourut()
    {

        $sql = "SELECT MAX(MID(DJPnoreg,10,13)) AS noregg FROM tbldjph WHERE CAST(MID(DJPnoreg,7,8) AS int) = DATE_FORMAT(CURDATE(), '%y')";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $n = ((int) $row->noregg) + 1;
            $no = sprintf("%'.05d", $n);

        } else {
            $no = "00001";
        }
        $nourut = $no;
        return $nourut;

    }

    public function update($DJPid, $DJPacuanhitung, $GPPid, $DJPnoreg, $DJPnourut, $DJPnoseri, $PPid, $PPnama, $PPalamat, $DJPnodeklarasi, $DJPtanggaldeklarasi, $DJPperiode, $OPKid, $PKSid, $PKSjenis, $SPJid, $JSPid)
    {

        $data = array(
            'DJPacuanhitung' => $DJPacuanhitung,
            'GPPid' => $GPPid,
            'PKSid' => $PKSid,
            'DJPnoreg' => $DJPnoreg,
            'DJPnourut' => $DJPnourut,
            'DJPnoseri' => $DJPnoseri,
            'PPid' => $PPid,
            'PPnama' => $PPnama,
            'PPalamat' => $PPalamat,
            'DJPnodeklarasi' => $DJPnodeklarasi,
            'DJPtanggaldeklarasi' => $DJPtanggaldeklarasi,
            'DJPperiode' => $DJPperiode,
            'OPKid' => $OPKid,
            'SPJid' => $SPJid,
            'JSPid' => $JSPid,
            'PKSjenis' => $PKSjenis,
        );
        $this->db->where('DJPid', $DJPid);
        $this->db->update('tbldjph', $data);

    }
}
