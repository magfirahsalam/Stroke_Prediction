<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prediksi_pengunjung_model extends CI_Model
{
    public function SemuaData()
    {
        return $this->db->get('prediksi')->result_array();
    }
    public function get_entries()
    {
        $query = $this->db->get('prediksi_pengunjung_umum');
        if (count($query->result()) > 0) {
            return $query->result();
        }
    }
    public function hitungjumlahprediksipengunjung()
    {
        $query = $this->db->get('prediksi_pengunjung_umum');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
    public function proses_tambah_data_prediksim()
    {
        $data = [
            "jenis_kelamin_pengunjung" => $this->input->post('jenis_kelamin_pengunjung'),
            "usia_pengunjung" => $this->input->post('usia_pengunjung'),
            "hipertensi_pengunjung" => $this->input->post('hipertensi_pengunjung'),
            "liver_pengunjung" => $this->input->post('liver_pengunjung'),
            "status_pernikahan_pengunjung" => $this->input->post('status_pernikahan_pengunjung'),
            "tipe_pekerjaan_pengunjung" => $this->input->post('tipe_pekerjaan_pengunjung'),
            "tempat_tinggal_pengunjung" => $this->input->post('tempat_tinggal_pengunjung'),
            "rata_kadar_glukosa_pengunjung" => $this->input->post('rata_kadar_glukosa_pengunjung'),
            "tinggi_badan" => $this->input->post('tinggi_badan'),
            "berat_badan" => $this->input->post('berat_badan'),
            "index_bb_pengunjung" => $this->input->post('index_bb_pengunjung'),
            "status_perokok_pengunjung" => $this->input->post('status_perokok_pengunjung'),
            "keterangan_pengunjung" => $this->input->post('keterangan_pengunjung'),
        ];
        $this->db->insert('prediksi', $data);
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
            "jenis_kelamin_pengunjung" => $this->input->post('jenis_kelamin_pengunjung'),
            "usia_pengunjung" => $this->input->post('usia_pengunjung'),
            "hipertensi_pengunjung" => $this->input->post('hipertensi_pengunjung'),
            "liver_pengunjung" => $this->input->post('liver_pengunjung'),
            "status_pernikahan_pengunjung" => $this->input->post('status_pernikahan_pengunjung'),
            "tipe_pekerjaan_pengunjung" => $this->input->post('tipe_pekerjaan_pengunjung'),
            "tempat_tinggal_pengunjung" => $this->input->post('tempat_tinggal_pengunjung'),
            "rata_kadar_glukosa_pengunjung" => $this->input->post('rata_kadar_glukosa_pengunjung'),
            "tinggi_badan" => $this->input->post('tinggi_badan'),
            "berat_badan" => $this->input->post('berat_badan'),
            "index_bb_pengunjung" => $this->input->post('index_bb_pengunjung'),
            "status_perokok_pengunjung" => $this->input->post('status_perokok_pengunjung'),
            "keterangan_pengunjung" => $this->input->post('keterangan_pengunjung'),
        ];
        $this->db->where('id_prediksi', $this->input->post('id_prediksi'));
        $this->db->update('prediksi', $data);
    }
    public function tambah_prediksi_pengunjung($prediksi_pengunjung)
    {
        return $this->db->insert('prediksi', $prediksi_pengunjung);
    }
}
