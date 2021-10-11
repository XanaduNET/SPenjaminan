$this->form_validation->set_rules('CBCPnomormemo', 'Nomor memo', 'required');
        $this->form_validation->set_rules('CBCPprinsipal', 'prinsipal', 'required');
        $this->form_validation->set_rules('TRJMnama', 'Nama terjamin', 'required');
        $this->form_validation->set_rules('TRJMttl', 'Tempat tanggal lahir terjamin', 'required');
        $this->form_validation->set_rules('TRJMktp', 'KTP terjamin', 'required');
        $this->form_validation->set_rules('TRJMalamat', 'Alamat terjamin', 'required');
        $this->form_validation->set_rules('TRJMpekerjaan', 'Pekerjaan terjamin', 'required');
        $this->form_validation->set_rules('TRJMusaha', 'Usaha terjamin', 'required');
        $this->form_validation->set_rules('TRJMnpwp', 'NPWP terjamin', 'required');
        $this->form_validation->set_rules('TRJMpartner', 'Nama pasangan terjamin', 'required');
        $this->form_validation->set_rules('TRJMalamatpartner', 'Alamat pasangan terjamin', 'required');
        $this->form_validation->set_rules('TRJMpekerjaanpartner', 'Pekerjaan pasangan terjamin', 'required');
        $this->form_validation->set_rules('CBCPjenis', 'Jenis fasilitas kredit', 'required');
        $this->form_validation->set_rules('CBCPsifat', 'Sifat kredit', 'required');
        $this->form_validation->set_rules('CBCPplafondkredit', 'Plafond Kredit', 'required');
        $this->form_validation->set_rules('CBCPjwk', 'Jangka waktu kredit', 'required');
        $this->form_validation->set_rules('CBCPangsurankredit', 'Angsuran kredit', 'required');
        $this->form_validation->set_rules('CBCPagunankredit', 'Agunan kredit', 'required');
        $this->form_validation->set_rules('CBCPrencanakredit', 'Agunan kredit', 'required');
        $this->form_validation->set_rules('PPnama', 'Nama bank', 'required');
        $this->form_validation->set_rules('PPalamat', 'Alamat bank', 'required');
        $this->form_validation->set_rules('PPtelpon', 'Telpon/Fax bank', 'required');
        $this->form_validation->set_rules('CBCPcontactperson', 'Contact Person bank', 'required');
        $this->form_validation->set_rules('CBCPsuratpermohonan', 'Surat permohonan penjaminan', 'required');
        $this->form_validation->set_rules('CBCPkeputusan', 'keputusan penjaminan', 'required');
        $this->form_validation->set_rules('CBCPsiup', 'SKU', 'required');
        $this->form_validation->set_rules('CBCPizinjatuhtempo', 'Izin Jatuh Tempo', 'required');
        $this->form_validation->set_rules('CBCPdeskripsisumberpendapatan', 'Sumber Pendapatan', 'required');
        $this->form_validation->set_rules('CBCPdeskripsiusaha', 'Usaha', 'required');
        $this->form_validation->set_rules('CBCPjenisagunan', 'Jenis Agunan', 'required');
        $this->form_validation->set_rules('CBCPnilaitasaksitanah', 'Nilai Tasaksi Tanah', 'required');
        $this->form_validation->set_rules('CBCPnilaitasaksibangunan', 'Nilai Tasaksi Tanah', 'required');
        $this->form_validation->set_rules('CBCPnilaidasartanah', 'Nilai Dasar Tanah', 'required');
        $this->form_validation->set_rules('CBCPnilaidasarbangunan', 'Nilai Dasar Bangunan', 'required');
        $this->form_validation->set_rules('CBCPanalisadokumenidentitas', 'Dokumen Identitas', 'required');
        $this->form_validation->set_rules('CBCPanalisaslikojk', 'Analisa Slik OJK', 'required');
        $this->form_validation->set_rules('CBCPojknamabank', 'Slik OJK Nama Bank', 'required');
        $this->form_validation->set_rules('CBCPojkjangkawaktu', 'Slik OJK Jangka Waktu', 'required');
        $this->form_validation->set_rules('CBCPojkplafondkredit', 'Slik OJK Plafond Kredit', 'required');
        $this->form_validation->set_rules('CBCPojktunggakanpokok', 'Slik OJK Tunggakan Pokok', 'required');
        $this->form_validation->set_rules('CBCPojktunggakanbunga', 'Slik OJK Tunggakan Bunga', 'required');
        $this->form_validation->set_rules('CBCPojkangsuran', 'Slik OJK Angsuran', 'required');
        $this->form_validation->set_rules('CBCPojkkualitas', 'Slik OJK Kualitas', 'required');
        $this->form_validation->set_rules('CBCPojkkondisi', 'Slik OJK Kondisi', 'required');
        $this->form_validation->set_rules('CBCPsumberpendapatan', 'Sumber Pendapatan', 'required');
        $this->form_validation->set_rules('CBCPpendapatanbulan', 'Pendapatan/bulan', 'required');
        $this->form_validation->set_rules('CBCPnamapengeluaran', 'Nama Pengeluaran', 'required');
        $this->form_validation->set_rules('CBCPpengeluaranbulan', 'Pengeluaran/bulan', 'required');
        $this->form_validation->set_rules('CBCPangsuranexist', 'Angsuran Exist', 'required');
        $this->form_validation->set_rules('CBCPkesimpulan', 'Kesimpulan', 'required');

        if ($this->form_validation->run() == false) {
            print_r("data salah");
            exit;
        } else {
