<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prediksi_tim_medis_model extends CI_Model
{

    public function get_entries()
    {
        $query = $this->db->get('prediksi_tim_medis');
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }
    public function hitungjumlahprediksitm()
    {
        $query = $this->db->get('prediksi_tim_medis');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function proses_tambah_data_prediksitm()
    {
        $data = [
            "id_pasien_tm" => $this->input->post('jid_pasien_tm'),
            "jenis_kelamin_tm" => $this->input->post('jenis_kelamin_tm'),
            "usia_tm" => $this->input->post('usia_tm'),
            "hipertensi_pengunjung" => $this->input->post('hipertensi_tm'),
            "liver_tm" => $this->input->post('liver_pengunjung'),
            "status_pernikahan_tm" => $this->input->post('status_pernikahan_tm'),
            "tipe_pekerjaan_tm" => $this->input->post('tipe_pekerjaan_tm'),
            "tempat_tinggal_tm" => $this->input->post('tempat_tinggal_tm'),
            "rata_kadar_glukosa_tm" => $this->input->post('rata_kadar_glukosa_tm'),
            "index_bb_pengunjung" => $this->input->post('index_bb_pengunjung'),
            "status_perokok_tm" => $this->input->post('status_perokok_tm'),
            "keterangan_tm" => $this->input->post('keterangan_tm'),
            "keterangan_tm" => $this->input->post('keterangan_tm'),
            'dibuat_pada' => date('Y-m-d')
        ];
        $this->db->insert('prediksi', $data);
    }
    public function indexdata()
    {
        return $this->db->get('prediksi_tim_medis')->result_array();
    }
    public function hapus_data_prediksim($id_prediksi)
    {
        $this->db->where('id_prediksi', $id_prediksi);
        $this->db->delete('prediksi');
    }
    public function ambil_id_data_prediksim($id_prediksi)
    {
        return $this->db->get_where('prediksi', ['id_prediksi' => $id_prediksi])->row_array();
    }
    public function proses_edit_data_prediksim()
    {
        $data = [
            "id_pasien_tm" => $this->input->post('jid_pasien_tm'),
            "jenis_kelamin_tm" => $this->input->post('jenis_kelamin_tm'),
            "usia_tm" => $this->input->post('usia_tm'),
            "hipertensi_pengunjung" => $this->input->post('hipertensi_tm'),
            "liver_tm" => $this->input->post('liver_pengunjung'),
            "status_pernikahan_tm" => $this->input->post('status_pernikahan_tm'),
            "tipe_pekerjaan_tm" => $this->input->post('tipe_pekerjaan_tm'),
            "tempat_tinggal_tm" => $this->input->post('tempat_tinggal_tm'),
            "rata_kadar_glukosa_tm" => $this->input->post('rata_kadar_glukosa_tm'),
            "index_bb_pengunjung" => $this->input->post('index_bb_pengunjung'),
            "status_perokok_tm" => $this->input->post('status_perokok_tm'),
            "keterangan_tm" => $this->input->post('keterangan_tm'),
        ];
        $this->db->where('id_prediksi_tim_medis', $this->input->post('id_prediksi_tim_medis'));
        $this->db->update('prediksi_tim_medis', $data);
    }
    public function tambah_prediksi_pengunjung($prediksi_pengunjung)
    {
        return $this->db->insert('prediksi', $prediksi_pengunjung);
    }
}
