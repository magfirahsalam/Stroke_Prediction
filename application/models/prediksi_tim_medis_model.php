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
            "id_pasien_tm" => $this->input->post('id_pasien_tm'),
            "jenis_kelamin_tm" => $this->input->post('jenis_kelamin_tm'),
            "usia_tm" => $this->input->post('usia_tm'),
            "hipertensi_tm" => $this->input->post('hipertensi_tm'),
            "liver_tm" => $this->input->post('liver_tm'),
            "status_pernikahan_tm" => $this->input->post('status_pernikahan_tm'),
            "tipe_pekerjaan_tm" => $this->input->post('tipe_pekerjaan_tm'),
            "tempat_tinggal_tm" => $this->input->post('tempat_tinggal_tm'),
            "rata_kadar_glukosa_tm" => $this->input->post('rata_kadar_glukosa_tm'),
            "berat_badan_tm" => $this->input->post('berat_badan_tm'),
            "tinggi_badan_tm" => $this->input->post('tinggi_badan_tm'),
            "index_bb_tm" => $this->input->post('index_bb_tm'),
            "status_perokok_tm" => $this->input->post('status_perokok_tm'),
            "keterangan_tm" => $this->input->post('keterangan_tm'),
            'dibuat_pada' => date('Y-m-d')
        ];
        $this->db->insert('prediksi_tim_medis', $data);
    }
    public function indexdata()
    {
        return $this->db->get('prediksi_tim_medis')->result_array();
    }
    public function hapus_data_prediksitm($id_prediksi_tim_medis)
    {
        $this->db->where('id_prediksi_tim_medis', $id_prediksi_tim_medis);
        $this->db->delete('prediksi_tim_medis');
    }
    public function ambil_id_data_prediksitm($id_prediksi_tim_medis)
    {
        return $this->db->get_where('prediksi_tim_medis', ['id_prediksi_tim_medis' => $id_prediksi_tim_medis])->row_array();
    }
    public function proses_edit_data_prediksitm()
    {
        $data = [
            "id_pasien_tm" => $this->input->post('id_pasien_tm'),
            "jenis_kelamin_tm" => $this->input->post('jenis_kelamin_tm'),
            "usia_tm" => $this->input->post('usia_tm'),
            "hipertensi_pengunjung" => $this->input->post('hipertensi_tm'),
            "liver_tm" => $this->input->post('liver_pengunjung'),
            "status_pernikahan_tm" => $this->input->post('status_pernikahan_tm'),
            "tipe_pekerjaan_tm" => $this->input->post('tipe_pekerjaan_tm'),
            "tempat_tinggal_tm" => $this->input->post('tempat_tinggal_tm'),
            "rata_kadar_glukosa_tm" => $this->input->post('rata_kadar_glukosa_tm'),
            "berat_badan_tm" => $this->input->post('berat_badan_tm'),
            "tinggi_badan_tm" => $this->input->post('tinggi_badan_tm'),
            "index_bb_tm" => $this->input->post('index_bb_tm'),
            "status_perokok_tm" => $this->input->post('status_perokok_tm'),
            "keterangan_tm" => $this->input->post('keterangan_tm'),
        ];
        $this->db->where('id_prediksi_tim_medis', $this->input->post('id_prediksi_tim_medis'));
        $this->db->update('prediksi_tim_medis', $data);
    }
    public function tambah_prediksi_tm($prediksi_tim_medis)
    {
        return $this->db->insert('prediksi_tim_medis', $prediksi_tim_medis);
    }
}
